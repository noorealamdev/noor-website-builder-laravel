<?php

namespace App\Http\Controllers;
use App\Classes\Ssh;

use App\Models\CustomDomain;
use App\Models\Site;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class SiteController extends Controller
{

    public function index()
    {

        $user = Auth::user();
        if ($user->hasRole('admin'))
        {
            $sites = Site::with('customDomains')->orderBy('id', 'DESC')->get();
        }
        else {
            $sites = Site::with('customDomains')->orderBy('id', 'DESC')->where('user_id', $user->id)->get();
        }
        return view('backend.site.index', compact('sites'));
    }

    public function create()
    {
        $userEmail = Auth::user()->email;
        return view('backend.site.create', compact('userEmail'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'subDomain'     => 'required|unique:sites,subDomain|regex:/^\S*$/u|regex:/^[a-zA-Z]+$/u',
            'customDomain'  => 'string|unique:sites,customDomain',
            'siteName'      => 'required|string',
            'siteEmail'     => 'required|string',
        ]);

        $site = new Site();
        $vpsConfig = ConfigController::getVpsConfig();

        //Form data
        $subDomain        = Str::lower($request->input('subDomain'));
        $siteName         = $request->input('siteName');
        $enableEcommerce  = $request->has('enableEcommerce');
        $siteEmail        = $request->input('siteEmail');

        // Website details
        $domain     = $subDomain . '.' . ConfigController::getDomain();
        $email      = Auth::user()->email; //Auth::user()->email
        $owner      = "admin";
        $package    = "Default";
        $phpVersion = "8.1";

        // Database details
        $dbName     = $subDomain;
        $dbUser     = $subDomain;
        $dbPass     = Str::random(12);

        // WordPress details
        //$username             = $subDomain;
        $wp_password_generated  = Str::password(12);
        $wp_password_md5        = md5($wp_password_generated);
        $wp_token               = Str::random(60);

        $cyberPanel = new Ssh($vpsConfig['ip'], $vpsConfig['user'], $vpsConfig['password'], $key = null, $port = $vpsConfig['port'], $timeout = $vpsConfig['timeout']);

        $siteCreated = false;
        try
        {
            if($cyberPanel)
            {
                $cyberPanel->createWebsite($domain, $email, $package, $owner, $phpVersion);
                //echo "Website created! <br>";

                $cyberPanel->createDatabase($domain, $dbName, $dbUser, $dbPass);
                //echo "Database created.<br>";

                $cyberPanel->setupEverything($subDomain, $dbPass, $siteName, $siteEmail, $wp_password_md5, $wp_token);
                //echo "Everything is done!.<br>";

                $siteCreated = true;

                if ($siteCreated)
                {
                    //Store database
                    $site->user_id   = Auth::user()->id;
                    $site->subDomain = $subDomain;
                    $siteInfo = [
                        'dbName'    => $dbName,
                        'dbUser'    => $dbUser,
                        'dbPass'    => $dbPass,
                        'siteName'  => $siteName,
                        'siteEmail' => $siteEmail,
                        'userName'  => $subDomain,
                        'password'  => $wp_password_generated,
                        'token'     => $wp_token,
                    ];
                    $site->siteInfo = $siteInfo;
                    if ($enableEcommerce == 'on') {
                        $site->enableEcommerce = true;
                    } else {
                        $site->enableEcommerce = false;
                    }

                    //Save data to DB
                    $site->save();

                    return redirect()->route('site.index')->with(['msg' => 'Site created successfully', 'type' => 'success']);
                }
                else {
                    return redirect()->back()->withErrors(['msg' => 'Site could not created, please try again', 'type' => 'error']);
                }
            }
            else {
                return redirect()->back()->withErrors(['msg' => 'Could not connect to the server', 'type' => 'error']);
            }
        }
        catch (Exception $e)
        {
            return redirect()->back()->withErrors(['msg' => 'Error: '. $e, 'type' => 'error']);
        }
    }

    public function destroy($id)
    {
        $vpsConfig = ConfigController::getVpsConfig();

        $cyberPanel = new Ssh($vpsConfig['ip'], $vpsConfig['user'], $vpsConfig['password'], $key = null, $port = $vpsConfig['port'], $timeout = $vpsConfig['timeout']);

        try
        {
            if($cyberPanel)
            {
                $site = Site::find($id);
                if ($site)
                {
                    $domainName = $site->subDomain . '.' . ConfigController::getDomain();
                    $cyberPanel->deleteWebsite($domainName);
                    $site->delete();

                    // Delete custom domain data as well
                    $customDomain = CustomDomain::where('site_id', $id);
                    if ($customDomain)
                    {
                        $customDomain->delete();
                    }

                    return redirect()->route('site.index')->with(['msg' => 'Site deleted successfully', 'type' => 'success']);
                }
            }
            else {
                return redirect()->back()->withErrors(['msg' => 'Could not connect to the server', 'type' => 'error']);
            }
        }
        catch (Exception $e)
        {
            echo "Error: " . $e->getMessage();
        }
    }

    public function checkSubDomain(Request $request)
    {
        $request->validate([
            'subDomain' => 'required|unique:sites,subDomain|regex:/^\S*$/u|regex:/^[a-zA-Z]+$/u'
        ]);

        $subDomainExist = Site::where('subDomain', '=', $request->get('subDomain'))->first();
        if ($subDomainExist)
        {
            return response()->json(['available' => false]);
        }
        else {
            return response()->json(['available' => true]);
        }
    }

    public function addCustomDomain(Request $request)
    {
        //dd($request->all());
        $request->validate([
            'customDomain' => 'required|unique:sites,customDomain'
        ]);

        $siteId = $request->get('siteId');
        $customDomain = $request->input('customDomain');

        $site = Site::find($siteId);
        $site->customDomain = $customDomain;
        $site->save();

        // Insert custom domain data to customDomain model
        $_customDomain = new CustomDomain();
        $_customDomain->site_id = $siteId;
        $_customDomain->customDomain = $customDomain;
        $_customDomain->status = 'pending';
        $_customDomain->save();

        return redirect()->route('site.index')->with(['msg' => 'Custom domain added successfully', 'type' => 'success']);

    }
}
