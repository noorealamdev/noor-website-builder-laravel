@extends('backend.layouts.master')
@section('title') {{'Create Site'}} @endsection
@section('content')
    @include('backend.partials.alert')

    <!-- Start::page-header -->
    <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
        <h1 class="page-title fw-semibold fs-18 mb-0">Create Site</h1>
    </div>
    <!-- End::page-header -->

    <!-- Start::row-1 -->
    <div class="row">
        <div class="col-xl-12">
            <div class="card custom-card">
                <div class="card-body add-products p-0">
                    <form id="site-create" action="{{ route('site.store') }}" method="POST">
                        @csrf
                        <div class="p-4">
                            <div class="row gx-5">
                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                    <div class="card custom-card shadow-none mb-0 border-0">
                                        <div class="card-body p-0">
                                            <div class="row gy-3">
                                                <div class="col-xl-12">
                                                    <label for="subDomain" class="form-label">Sub Domain <span>*</span></label>
                                                    <div class="input-group">
                                                        <input type="text" class="@error('subDomain') is-invalid @enderror form-control subDomain" name="subDomain" placeholder="Sub Domain" value="{{ old('subDomain') }}">
                                                        <div class="input-group-text"><strong>.{{ \App\Http\Controllers\ConfigController::getDomain() }}</strong></div>
                                                    </div>
                                                    <div id="subDomainMessage"></div>
                                                    <p class="text-muted">Insert subdomain like: digitalagency, mystartup, mylandingpage etc</p>
                                                </div>
                                                <div class="col-xl-12">
                                                    <label for="siteEmail" class="form-label">Site Name <span>*</span></label>
                                                    <input type="text" class="@error('siteName') is-invalid @enderror form-control siteName" name="siteName" placeholder="Site Name" value="{{ old('siteName') }}">
                                                    <p class="text-muted">You can change site name later</p>
                                                </div>
                                                <div class="col-xl-12">
                                                    <label for="siteName" class="form-label">Site Email <span>*</span></label>
                                                    <input type="text" class="@error('siteEmail') is-invalid @enderror form-control siteEmail" name="siteEmail" placeholder="Site Email" value="{{ old('siteEmail', $userEmail) }}">
                                                </div>
{{--                                                <div class="col-xl-12">--}}
{{--                                                    <div class="form-check form-check-lg form-switch mt-3">--}}
{{--                                                        <label class="form-check-label" for="switch-lg">Enable Ecommerce?</label>--}}
{{--                                                        <input class="form-check-input" type="checkbox" role="switch"--}}
{{--                                                               name="enableEcommerce" id="switch-lg" value="{{ old('enableEcommerce') }}">--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="px-4 py-3 border-top border-block-start-dashed d-sm-flex justify-content-start">
                            <input type="submit" class="btn btn-success m-1 save-button" value="Create Site">
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!--End::row-1 -->

    @push('script')
        <script>
            var timeout = null;
            var minlength = 2;

            $(".subDomain").keyup(function() {
                // clear last timeout check
                clearTimeout(timeout);
                var that = this;
                var value = $(this).val();

                if (value.length >= minlength) {
                    //
                    // run ajax call 1 second after user has stopped typing
                    //
                    timeout = setTimeout(function() {
                        $.ajax({
                            method: "POST",
                            url: "{{ route('site.checkSubDomain') }}",
                            data: {
                                _token: '{{csrf_token()}}',
                                subDomain: $('.subDomain').val() // Get the value of the input
                            },
                            success: function( response ) {
                                let available = response.available;
                                if (available) {
                                    $('#subDomainMessage').hide();
                                    $('.subDomain').removeClass('is-invalid');
                                    $('.subDomain').addClass('is-valid');
                                }
                                console.log('Sub domain available: ', available)
                            },
                            error: function(data){
                                let errorMessage = data.responseJSON.message
                                console.log(errorMessage)
                                $('#subDomainMessage').show();
                                $('.subDomain').removeClass('is-valid');
                                $('.subDomain').addClass('is-invalid');
                                $('#subDomainMessage').html('<div class="text-danger">'+errorMessage+'</div>');
                            }
                        });
                    }, 1000);
                }
            })

            {{--$(document).ready(function(){--}}
            {{--    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');--}}
            {{--    $("#site-create").submit(function(e){--}}
            {{--        e.preventDefault();--}}

            {{--        $.ajax({--}}
            {{--            /* the route pointing to the post function */--}}
            {{--            url: '{{ route('site.store') }}',--}}
            {{--            type: 'POST',--}}
            {{--            /* send the csrf-token and the input to the controller */--}}
            {{--            data: {--}}
            {{--                _token: CSRF_TOKEN,--}}
            {{--                subDomain: $(".subDomain").val(),--}}
            {{--                siteName: $(".siteName").val(),--}}
            {{--                siteEmail: $(".siteEmail").val()--}}
            {{--            },--}}
            {{--            dataType: 'JSON',--}}
            {{--            /* remind that 'data' is the response of the AjaxController */--}}
            {{--            success: function (data) {--}}
            {{--                console.log(data);--}}
            {{--                $(".writeinfo").append(data.msg);--}}
            {{--            }--}}
            {{--        });--}}
            {{--    });--}}
            {{--});--}}
        </script>
    @endpush

@endsection
