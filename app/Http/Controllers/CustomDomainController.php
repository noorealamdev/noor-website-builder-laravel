<?php

namespace App\Http\Controllers;

use App\Models\CustomDomain;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomDomainController extends Controller
{

    public function index()
    {
        $customDomains = CustomDomain::with('site')->get();
        return view('backend.customDomains.index', compact('customDomains'));
    }

    public function changeStatus(Request $request)
    {
        //dd($request->all());
        $customDomainId       = $request->get('customDomainId');
        $customDomainStatus   = $request->get('status');

        $customDomain         = CustomDomain::find($customDomainId);
        $customDomain->status = $customDomainStatus;
        $customDomain->save();

        return redirect()->route('domain.index')->with(['msg' => 'Custom domain status changed successfully', 'type' => 'success']);
    }
}
