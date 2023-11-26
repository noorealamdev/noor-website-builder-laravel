@extends('frontend.layouts.master')
@section('title') {{'My Sites'}} @endsection
@section('content')

    <!--========== Hero Section Start ==============-->
    <section class="tj-hero-section" data-bg-image="{{ asset('frontend/assets/images/banner/bg-group-3.svg') }}">
        <div class="tj-circle-box">
            <span class="circle-1"></span>
            <span class="circle-2"></span>
            <span class="circle-3"></span>
            <span class="circle-4"></span>
            <span class="circle-5"></span>
            <span class="circle-6"></span>
            <span class="circle-7"></span>
            <span class="circle-8"></span>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hero-content-area text-center">
                        <div class="tj-sec-heading text-center">
                            <span class="sub-title"> Noor Website Builder</span>
                            <h1 class="title">
                                Build <span class="shape"> Websites</span> with unlimited possibilities. No design or coding skills required!
                            </h1>
                            <p class="desc">
                                Noor provides everything to start making your awesome websites, we have done everything for you. It's a plug and play thing. Everything is drag and drop. It comes with lot of predefined custom templates. Making website has never been easier.
                            </p>
                        </div>
                    </div>
                    <div class="hero-lg-image shake-y text-center">
                        <img src="{{ asset('frontend/assets/images/banner/hero-main.png') }}" alt="Image" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--========== Hero Section End ==============-->

    <!--========== About Section Start ==============-->
    <section class="tj-about-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-group-image">
                        <img class="image shake-y" src="{{ asset('frontend/assets/images/about/about-1.png') }}" alt="Image" />
                        <img class="shape-one pulse" src="{{ asset('frontend/assets/images/about/about-2.png') }}" alt="Image" />
                        <img class="shape-two pulse" src="{{ asset('frontend/assets/images/about/about-3.png') }}" alt="Image" />
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="tj-about-content-one">
                        <div class="tj-sec-heading">
                            <span class="sub-title"> Expert Designs</span>
                            <h2 class="title">Website templates that set you up for success</h2>
                            <div class="tj-about-button">
                                <a class="tj-secondary-btn" href="javascript:void(0)"> Get Started</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="about-shape">
            <img src="{{ asset('frontend/assets/images/shape/sec-shape.svg') }}" alt="Shape" />
        </div>
        <div class="tj-circle-box2">
            <span class="circle-1"></span>
            <span class="circle-2"></span>
            <span class="circle-3"></span>
            <span class="circle-4"></span>
        </div>
        <div class="tj-circle-box3">
            <span class="circle-1"></span>
            <span class="circle-2"></span>
            <span class="circle-3"></span>
            <span class="circle-4"></span>
        </div>
    </section>
    <!--========== About Section End ==============-->

@push('script')
    <script>
        $(function() {
            // Js code
        });
    </script>
@endpush

@endsection
