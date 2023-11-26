<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="light" data-menu-styles="dark" data-toggled="close">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>


    <!-- Favicon -->
    <link rel="icon" href="{{ asset('admin/assets/images/favicon.png') }}" type="image/x-icon">

    <!-- Choices JS -->
    <script src="{{ asset('admin/assets/libs/choices.js/public/assets/scripts/choices.min.js') }}"></script>

    <!-- Bootstrap Css -->
    <link id="style" href="{{ asset('admin/assets/libs/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" >

    <!-- Style Css -->
    <link href="{{ asset('admin/assets/css/styles.min.css') }}" rel="stylesheet" >

    <!-- Icons Css -->
    <link href="{{ asset('admin/assets/css/icons.css') }}" rel="stylesheet" >

    <!-- Node Waves Css -->
    <link href="{{ asset('admin/assets/libs/node-waves/waves.min.css') }}" rel="stylesheet" >

    <!-- Simplebar Css -->
    <link href="{{ asset('admin/assets/libs/simplebar/simplebar.min.css') }}" rel="stylesheet" >

    <!-- Color Picker Css -->
    <link rel="stylesheet" href="{{ asset('admin/assets/libs/flatpickr/flatpickr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/libs/@simonwep/pickr/themes/nano.min.css') }}">

    <!-- Choices Css -->
    <link rel="stylesheet" href="{{ asset('admin/assets/libs/choices.js/public/assets/styles/choices.min.css') }}">


    <link rel="stylesheet" href="{{ asset('admin/assets/libs/jsvectormap/css/jsvectormap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('admin/assets/libs/swiper/swiper-bundle.min.css') }}">

    <!-- Datatables.net Css -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.bootstrap5.min.css">

    <!-- Custom style CSS -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/custom.css') }}">

    @stack('style')

</head>

<body>

<div class="page">
    <!-- app-header -->
    <header class="app-header">

        <!-- Start::main-header-container -->
        <div class="main-header-container container-fluid">

            <!-- Start::header-content-left -->
            <div class="header-content-left">

                <!-- Start::header-element -->
                <div class="header-element">
                    <div class="horizontal-logo">
                        <a href="{{ route('dashboard') }}" class="header-logo">
{{--                            <img src="{{ asset('admin/assets/images/logo11.jpeg') }}" alt="logo" class="desktop-logo">--}}
{{--                            <img src="{{ asset('admin/assets/images/logo11.jpeg') }}" alt="logo" class="toggle-logo">--}}
{{--                            <img src="{{ asset('admin/assets/images/logo11.jpeg') }}" alt="logo" class="desktop-dark">--}}
{{--                            <img src="{{ asset('admin/assets/images/logo11.jpeg') }}" alt="logo" class="toggle-dark">--}}
                        </a>
                    </div>
                </div>
                <!-- End::header-element -->

                <!-- Start::header-element -->
                <div class="header-element">
                    <!-- Start::header-link -->
                    <a aria-label="Hide Sidebar" class="sidemenu-toggle header-link animated-arrow hor-toggle horizontal-navtoggle" data-bs-toggle="sidebar" href="javascript:void(0);"><span></span></a>
                    <!-- End::header-link -->
                </div>
                <!-- End::header-element -->

            </div>
            <!-- End::header-content-left -->

            <!-- Start::header-content-right -->
            <div class="header-content-right">
{{--                <div class="header-element notifications-dropdown">--}}
{{--                    <!-- Start::header-link|dropdown-toggle -->--}}
{{--                    <a href="javascript:void(0);" class="header-link dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside" id="messageDropdown" aria-expanded="false">--}}
{{--                        <i class="bx bx-bell header-link-icon"></i>--}}
{{--                        @if( Auth::user()->unreadNotifications->count() > 0 )--}}
{{--                            <div class="notification-bell-icon-dot"></div>--}}
{{--                        @endif--}}
{{--                    </a>--}}
{{--                    <!-- End::header-link|dropdown-toggle -->--}}
{{--                    <!-- Start::main-header-dropdown -->--}}
{{--                    <div class="main-header-dropdown dropdown-menu dropdown-menu-end" data-popper-placement="none">--}}
{{--                        <ul class="list-unstyled mb-0" id="header-notification-scroll">--}}

{{--                            @foreach (Auth::user()->notifications as $notification)--}}
{{--                                <li class="notification-item">--}}
{{--                                    <div class="d-flex align-items-start mark-as-read" data-id="{{ $notification->id }}">--}}
{{--                                        <div class="pe-2">--}}
{{--                                            <span class="avatar avatar-md bg-primary-transparent avatar-rounded"><i class="ti ti-check fs-18"></i></span>--}}
{{--                                        </div>--}}
{{--                                        <div class="flex-grow-1 d-flex align-items-center justify-content-between">--}}
{{--                                            <div class="notification-text mb-0 {{ $notification->read_at ? 'mute' : 'fw-bold' }}">{{ $notification->data['text'] }} - {{ $notification->created_at }}</div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                                <div class="dropdown-divider"></div>--}}

{{--                            @endforeach--}}

{{--                        </ul>--}}
{{--                        <div class="p-3 empty-header-item1 border-top">--}}
{{--                            <div class="d-grid">--}}
{{--                                <a href="notifications.html" class="btn btn-primary">View All</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="p-5 empty-item1 d-none">--}}
{{--                            <div class="text-center">--}}
{{--                                    <span class="avatar avatar-xl avatar-rounded bg-secondary-transparent">--}}
{{--                                        <i class="ri-notification-off-line fs-2"></i>--}}
{{--                                    </span>--}}
{{--                                <h6 class="fw-semibold mt-3">No New Notifications</h6>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!-- End::main-header-dropdown -->--}}
{{--                </div>--}}
                <div class="header-element">
                    <!-- Start::header-link|dropdown-toggle -->
                    <a href="#" class="header-link dropdown-toggle" id="mainHeaderProfile" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                        <div class="d-flex align-items-center">
                            <div class="me-sm-2 me-0">
                                <img src="https://ui-avatars.com/api/?background=111c43&bold=true&color=fff&name=<?php echo Auth::user()->name?>" alt="img" width="32" height="32" class="rounded-circle">
                            </div>
                            <div class="d-sm-block d-none">
                                <p class="fw-semibold mb-0 lh-1"><?php echo Auth::user()->name ?></p>
                            </div>
                        </div>
                    </a>
                    <!-- End::header-link|dropdown-toggle -->
                    <ul class="main-header-dropdown dropdown-menu pt-0 overflow-hidden header-profile-dropdown dropdown-menu-end">
                        <li><a class="dropdown-item d-flex" href="{{ route('profile.edit') }}"><i class="ti ti-user-circle fs-18 me-2 op-7"></i>Profile</a></li>
{{--                        <li><a class="dropdown-item d-flex" href="javascript:void(0);"><i class="ti ti-inbox fs-18 me-2 op-7"></i>Inbox <span class="badge bg-success-transparent ms-auto">25</span></a></li>--}}
{{--                        <li><a class="dropdown-item d-flex" href="javascript:void(0);"><i class="ti ti-adjustments-horizontal fs-18 me-2 op-7"></i>Settings</a></li>--}}
                        <li><a class="dropdown-item d-flex" href="{{ route('logout') }}"><i class="ti ti-logout fs-18 me-2 op-7"></i>Logout</a></li>
                    </ul>
                </div>
            </div>
            <!-- End::header-content-right -->

        </div>
        <!-- End::main-header-container -->

    </header>
    <!-- /app-header -->
    <!-- Start::app-sidebar -->
    <aside class="app-sidebar sticky" id="sidebar">
        <!-- Start::main-sidebar-header -->
        <div class="main-sidebar-header">
            <a href="{{ route('dashboard') }}" class="header-logo">
                <img src="{{ asset('admin/assets/images/favicon.png') }}" alt="logo" class="desktop-logo">
                <img src="{{ asset('admin/assets/images/favicon.png') }}" alt="logo" class="toggle-logo">
                <img src="{{ asset('admin/assets/images/favicon.png') }}" alt="logo" class="desktop-dark">
                <img src="{{ asset('admin/assets/images/favicon.png') }}" alt="logo" class="toggle-dark">
            </a>
        </div>
        <!-- End::main-sidebar-header -->

        <!-- Start::main-sidebar -->
        <div class="main-sidebar" id="sidebar-scroll">
            <!-- Start::nav -->
            <nav class="main-menu-container nav nav-pills flex-column sub-open">
                <div class="slide-left" id="slide-left">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"> <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path> </svg>
                </div>
                <ul class="main-menu">
                    <!-- Start::slide__category -->
                    <li class="slide__category"><span class="category-name">Main</span></li>
                    <!-- End::slide__category -->

                    <!-- Start::slide -->
{{--                    <li class="slide">--}}
{{--                        <a href="{{ route('dashboard') }}" class="{{ request()->is('dashboard') ? 'active' : '' }} side-menu__item">--}}
{{--                            <i class="bx bx-home side-menu__icon"></i>--}}
{{--                            <span class="side-menu__label">Dashboard</span>--}}
{{--                        </a>--}}
{{--                    </li>--}}
                    <li class="slide">
                        <a href="{{ route('site.index') }}" class="{{ request()->is('dashboard/site') ? 'active' : '' }} side-menu__item">
                            <svg class="side-menu__icon" width="64" height="64" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <g class="side-menu__icon" fill="#000000">
                                    <path fill-rule="evenodd" d="M14 7a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1h-4Zm3 2h-2v6h2V9Z" clip-rule="evenodd"/>
                                    <path d="M6 7a1 1 0 0 0 0 2h4a1 1 0 1 0 0-2H6Zm0 4a1 1 0 1 0 0 2h4a1 1 0 1 0 0-2H6Zm-1 5a1 1 0 0 1 1-1h4a1 1 0 1 1 0 2H6a1 1 0 0 1-1-1Z"/>
                                    <path fill-rule="evenodd" d="M4 3a3 3 0 0 0-3 3v12a3 3 0 0 0 3 3h16a3 3 0 0 0 3-3V6a3 3 0 0 0-3-3H4Zm16 2H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1V6a1 1 0 0 0-1-1Z" clip-rule="evenodd"/>
                                </g>
                            </svg>
                            <span class="side-menu__label">Sites</span>
                        </a>
                    </li>
                    @role('admin')
                        <li class="slide">
                            <a href="{{ route('domain.index') }}" class="{{ request()->is('dashboard/domain-request') ? 'active' : '' }} side-menu__item">
                                <svg class="side-menu__icon" width="64" height="64" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path class="side-menu__icon" fill="#a3aed1" d="M12 2C6.477 2 2 6.477 2 12s4.477 10 10 10s10-4.477 10-10S17.523 2 12 2zm6.918 6h-3.215a49.088 49.088 0 0 0-.565-3.357A8.048 8.048 0 0 1 18.918 8zm-5.904-3.928c.068.352.387 2.038.645 3.928h-3.318c.258-1.89.577-3.576.645-3.928C11.319 4.029 11.656 4 12 4s.681.029 1.014.072zM14 12c0 .598-.043 1.286-.109 2h-3.782c-.066-.714-.109-1.402-.109-2s.043-1.286.109-2h3.782c.066.714.109 1.402.109 2zM8.862 4.643A49.088 49.088 0 0 0 8.297 8H5.082a8.048 8.048 0 0 1 3.78-3.357zM4.263 10h3.821C8.033 10.668 8 11.344 8 12s.033 1.332.085 2H4.263C4.097 13.359 4 12.692 4 12s.098-1.359.263-2zm.819 6h3.215c.188 1.424.42 2.65.565 3.357A8.048 8.048 0 0 1 5.082 16zm5.904 3.928A77.282 77.282 0 0 1 10.341 16h3.318a78.303 78.303 0 0 1-.645 3.928c-.333.043-.67.072-1.014.072s-.681-.029-1.014-.072zm4.152-.571c.145-.707.377-1.933.565-3.357h3.215a8.048 8.048 0 0 1-3.78 3.357zM19.737 14h-3.821c.051-.668.084-1.344.084-2s-.033-1.332-.085-2h3.821c.166.641.264 1.308.264 2s-.097 1.359-.263 2z"/>
                                </svg>
                                <span class="side-menu__label">Domain Requests</span>
                            </a>
                        </li>
                        <!-- End::slide -->
                    @endrole
                </ul>
                <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"> <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path> </svg></div>
            </nav>
            <!-- End::nav -->

        </div>
        <!-- End::main-sidebar -->

    </aside>
    <!-- End::app-sidebar -->

    <!-- Start::app-content -->
    <div class="main-content app-content">
        <div class="container-fluid">

            @yield('content')

        </div>
    </div>
    <!-- End::app-content -->

    <!-- Footer Start -->
    <footer class="footer mt-auto py-3 bg-white text-center">
        <div class="container">
                <span class="text-muted"> Copyright © <span id="year"></span> <a
                            href="javascript:void(0);" class="text-dark fw-semibold"></a>.
                    Designed with <span class="bi bi-heart-fill text-danger"></span> by <a href="javascript:void(0);">
                        <span class="fw-semibold text-primary text-decoration-underline">Noor</span>
                    </a> All
                    rights
                    reserved
                </span>
        </div>
    </footer>
    <!-- Footer End -->
</div>

<div id="responsive-overlay"></div>

<!-- Popper JS -->
<script src="{{ asset('admin/assets/libs/@popperjs/core/umd/popper.min.js') }}"></script>

<!-- Bootstrap JS -->
<script src="{{ asset('admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- Defaultmenu JS -->
<script src="{{ asset('admin/assets/js/defaultmenu.min.js') }}"></script>


<!-- Sticky JS -->
<script src="{{ asset('admin/assets/js/sticky.js') }}"></script>

<!-- Color Picker JS -->
<script src="{{ asset('admin/assets/libs/@simonwep/pickr/pickr.es5.min.js') }}"></script>

<!-- Apex Charts JS -->
<script src="{{ asset('admin/assets/libs/apexcharts/apexcharts.min.js') }}"></script>

<!-- Chartjs Chart JS -->
<script src="{{ asset('admin/assets/libs/chart.js/chart.min.js') }}"></script>

<!-- Form Validation JS -->
<script src="{{ asset('admin/assets/js/validation.js') }}"></script>

<!-- Jquery Cdn -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<!-- Datatables Cdn -->
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.6/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.colVis.min.js"></script>
<script src="https://cdn.datatables.net/fixedcolumns/4.2.2/js/dataTables.fixedColumns.min.js"></script>


<!-- Main Theme Js -->
<script src="{{ asset('admin/assets/js/main.js') }}"></script>

<!-- Internal Datatables JS -->
<script src="{{ asset('admin/assets/js/datatables.js') }}"></script>

<!-- Custom JS -->
<script src="{{ asset('admin/assets/js/custom.js') }}"></script>

<!-- Notifications mark as read -->
<script>
    {{--function sendMarkRequest(id = null) {--}}
    {{--    let token ='{{csrf_token()}}';--}}
    {{--    return $.ajax("{{ route('markAsRead') }}", {--}}
    {{--        method: 'POST',--}}
    {{--        data: {--}}
    {{--            _token: token,--}}
    {{--            id--}}
    {{--        }--}}
    {{--    });--}}
    {{--}--}}
    {{--$(function() {--}}
    {{--    $('.mark-as-read').each(function(){--}}
    {{--        $(this).click(function() {--}}
    {{--            let request = sendMarkRequest($(this).data('id'));--}}
    {{--            request.done(() => {--}}
    {{--                $(this).find('.notification-text').removeClass('fw-bold');--}}
    {{--                $(this).find('.notification-text').addClass('mute');--}}
    {{--            });--}}
    {{--        });--}}
    {{--    });--}}
    {{--});--}}
</script>

@stack('script')

</body>
</html>
