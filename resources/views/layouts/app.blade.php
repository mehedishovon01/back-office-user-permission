<!doctype html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Analytics - This is an example dashboard created using build-in elements and components.</title>
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <link rel="icon" href="favicon.ico">

    <meta name="msapplication-tap-highlight" content="no">

    <link href="{{ asset('assets/css/main.07a59de7b920cd76b874.css') }}" rel="stylesheet">
</head>

<body>
    <div class="app-container app-theme-gray">
        <div class="app-main">

            {{-- Sidebar Section --}}
            @include('partials._sidebar')


            <div class="app-main__outer">
                <div class="app-main__inner">
                    <div class="header-mobile-wrapper">
                        <div class="app-header__logo">
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="KeroUI Admin Template"
                                class="logo-src"></a>
                            <button type="button" class="hamburger hamburger--elastic mobile-toggle-sidebar-nav">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                            <div class="app-header__menu">
                                <span>
                                    <button type="button"
                                        class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                                        <span class="btn-icon-wrapper">
                                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                                        </span>
                                    </button>
                                </span>
                            </div>
                        </div>
                    </div>

                    {{-- Header Section --}}
                    @include('partials._header')

                    {{-- Top Content --}}
                    @yield('topcontent')

                    <div class="app-inner-layout app-inner-layout-page">
                        <div class="app-inner-layout__wrapper">
                            <div class="app-inner-layout__content">
                                <div class="tab-content">
                                    <div class="container-fluid">
                                        {{-- Main Content Section --}}
                                        @yield('content')
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Footer Section --}}
                    @include('partials._footer')

                </div>
            </div>
        </div>


        {{-- Right Side Popup Menu --}}
        @include('partials.rightside._sidebar')
    </div>


    <div class="app-drawer-overlay d-none animated fadeIn"></div>
    <script type="text/javascript" src="{{ asset('assets/scripts/main.07a59de7b920cd76b874.js') }}"></script>
</body>

</html>
