@extends('backend.layouts.master')
@section('title') {{'My Sites'}} @endsection
@section('content')
    @include('backend.partials.alert')

    {{--    @if(session()->has('msg'))--}}
    {{--        <div class="alert alert-success mt-3" style="font-size: 20px; font-weight: bold">{!! session('msg') !!}</div>--}}
    {{--    @endif--}}

    <!-- Start::page-header -->
    <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
        <h1 class="page-title fw-semibold fs-18 mb-0">My Sites <a href="{{ route('site.create') }}"
                                                                  class="btn btn-primary m-1 ml-4">Create Site<i
                    class="bi bi-plus-lg ms-2"></i></a></h1>
    </div>
    <!-- End::page-header -->

    <div class="alert alert-secondary" role="alert">
        NOTE: After creating new site, if something not works then please wait upto 30 minutes to fully ready the site.
    </div>

    <!-- Start::row-1 -->
    <div class="row">
        <div class="col-xl-12">
            @if(!$sites->isEmpty())
                @foreach ($sites as $site)
                    <div class="card custom-card shadow-md">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="me-3 d-flex">
                                <span class="avatar avatar-lg p-2 bg-primary">
                                   <img src="https://ui-avatars.com/api/?font-size=0.6&bold=true&background=845adf&color=fff&name={{ $site->customDomain && $site->customDomains[0]->status == 'active' ? $site->customDomain : $site->subDomain }}" alt="img">
                                </span>
                            </div>
                            <div class="flex-fill">
                                <div class="d-flex align-items-center justify-content-between">
                                    @if($site->customDomain && $site->customDomains[0]->status == 'active')
                                        <h4 class="fw-semibold mb-0" style="line-height: 25px">{{ $site->customDomain }} <a target="_blank" href="https://{{ $site->customDomain }}" class="p-1"><i class="bx bx-link-external fs-18"></i></a>
                                            <br>
                                            <span class="mb-0 fs-16 fw-normal">{{ $site->subDomain }}.{{ \App\Http\Controllers\ConfigController::getDomain() }}</span>
                                            <svg xmlns="http://www.w3.org/2000/svg" style="margin: 5px 6px 0 10px;" width="8" height="8" viewBox="0 0 32 32"><circle class="st0" cx="16" cy="16" r="5.75"></circle></svg>
                                            <span class="mb-0 fs-14 fw-normal">Site Created: {{ $site->created_at->format('d M, Y') }}</span>
                                        </h4>
                                    @else
                                        <h4 class="fw-semibold mb-0" style="line-height: 25px">{{ $site->subDomain }}.{{ \App\Http\Controllers\ConfigController::getDomain() }} <a target="_blank" href="https://{{ $site->subDomain }}.{{ \App\Http\Controllers\ConfigController::getDomain() }}" class="p-1"><i class="bx bx-link-external fs-18"></i></a>
                                            <br>
                                            @if ($site->customDomain && $site->customDomains[0]->status !== 'active')
                                                <span class="mb-0 fs-16 fw-normal">{{ $site->customDomain }} <span class="badge bg-{{ $site->customDomains[0]->status == 'pending' ? 'warning' : 'success' }}">{{ strtoupper($site->customDomains[0]->status) }}</span>
                                                </span>
                                                <svg xmlns="http://www.w3.org/2000/svg" style="margin: 5px 6px 0 10px;" width="8" height="8" viewBox="0 0 32 32"><circle class="st0" cx="16" cy="16" r="5.75"></circle></svg>
                                            @endif
                                            <span class="mb-0 fs-14 fw-normal">Site Created: {{ $site->created_at->format('d M, Y') }}</span>
                                        </h4>
                                    @endif

                                    <div class="d-flex align-items-center gap-4">
                                        @if($site->customDomain && $site->customDomains[0]->status == 'active')
                                            <a target="_blank" href="https://{{ $site->customDomain }}/?auto_login=yes&user_id={{ $site->subDomain }}&token={{ $site->siteInfo['token'] }}" class="btn btn-primary-light rounded-pill btn-wave fw-bold">SITE ADMIN <i class='bx bx-right-arrow-alt fw-bold'></i>
                                            </a>
                                        @else
                                            <a target="_blank" href="https://{{ $site->subDomain }}.{{ \App\Http\Controllers\ConfigController::getDomain() }}/?auto_login=yes&user_id={{ $site->subDomain }}&token={{ $site->siteInfo['token'] }}" class="btn btn-primary-light rounded-pill btn-wave fw-bold">SITE ADMIN <i class='bx bx-right-arrow-alt fw-bold'></i>
                                            </a>
                                        @endif
                                        <div class="dropdown">
                                            <a aria-label="anchor" href="javascript:void(0);" class="btn btn-icon btn-md btn-light" data-bs-toggle="dropdown" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
                                            <ul class="dropdown-menu dropdown-menu-end" style="width: 200px">
                                                <li>
                                                    <a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal"
                                                       data-bs-target="#customDomainModal{{ $site->id }}">{{ $site->customDomain ? 'Change' : 'Add' }} custom domain</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="javascript:void(0);">Reset site (coming...)</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal"
                                                       data-bs-target="#deleteModal{{ $site->id }}">Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    <!-- Modal Delete -->
                    <div class="modal fade" id="deleteModal{{ $site->id }}" tabindex="-1" role="dialog"
                         aria-labelledby="teamModalCenterTitle" aria-hidden="false">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="teamModalCenterTitle">Delete</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                </div>
                                <div class="modal-body text-center">
                                    <h5>Are you sure?</h5>
                                    <p>Site will be deleted permanently.</p>
                                </div>
                                <div class="modal-footer">
                                    <form class="d-inline-block"
                                          action="{{ route('site.destroy', $site->id) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button type="button" class="btn btn-danger"
                                                data-bs-dismiss="modal">Cancel
                                        </button>
                                        <button type="submit" class="btn btn-success">Yes, delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal Add Custom Domain -->
                    <div class="modal fade" id="customDomainModal{{ $site->id }}" tabindex="-1"
                         role="dialog"
                         aria-labelledby="teamModalCenterTitle" aria-hidden="false">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="teamModalCenterTitle">Add custom domain</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                </div>
                                <form class="d-inline-block" action="{{ route('site.addCustomDomain') }}"
                                      method="POST">
                                    @csrf
                                    <div class="modal-body">
                                        <label for="product-name-add" class="form-label">Custom domain</label>
                                        <input type="text"
                                               class="@error('customDomain') is-invalid @enderror form-control"
                                               name="customDomain" placeholder="Custom domain" value="{{ old('customDomain') }}">
                                        <p class="text-muted">Please enter your domain without "http" and "www". For example: example.com, mydomain.net</p>
                                        <input type="hidden" name="siteId" value="{{ $site->id }}">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-success">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <h2>You do not have any site created</h2>
                <a href="{{ route('site.create') }}" class="btn btn-primary btn-wave fw-bold">Create Site Now</a>
            @endif
        </div>
    </div>
    <!--End::row-1 -->

    @push('script')
        <script>
            $(function () {
                // Js code
            });
        </script>
    @endpush

@endsection
