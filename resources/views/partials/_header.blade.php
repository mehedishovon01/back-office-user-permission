<div class="header-mobile-wrapper">
    <div class="app-header__logo">
        <a href="{{ route('home') }}" data-toggle="tooltip" data-placement="bottom" title="Back-Office System">
            {{-- <img width="42" class="rounded" src="http://127.0.0.1:8000/assets/images/avatars/3.jpg" alt=""> --}}
            <div class="icon-wrapper rounded-circle">
                <div class="icon-wrapper-bg opacity-10 bg-warning"></div>
                <i class="lnr-laptop-phone text-dark opacity-8"></i>
            </div>
        </a>
        <button type="button" class="hamburger hamburger--elastic mobile-toggle-sidebar-nav">
            <span class="hamburger-box">
                <span class="hamburger-inner"></span>
            </span>
        </button>
        <div class="app-header__menu">
            <span>
                <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                    <span class="btn-icon-wrapper">
                        <i class="fa fa-ellipsis-v fa-w-6"></i>
                    </span>
                </button>
            </span>
        </div>
    </div>
</div>

<div class="app-header">
    @yield('header')
    <div class="app-header-right">
        <div class="search-wrapper">
            <i class="search-icon-wrapper typcn typcn-zoom-outline"></i>
            <input type="text" placeholder="Search...">
        </div>
        <div class="header-btn-lg pr-0">
            <div class="header-dots">
                <div class="dropdown">
                    <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown"
                        class="p-0 mr-2 btn btn-link">
                        <i class="typcn typcn-th-large-outline"></i>
                    </button>
                    <div tabindex="-1" role="menu" aria-hidden="true"
                        class="dropdown-menu-xl rm-pointers dropdown-menu dropdown-menu-right">
                        <div class="dropdown-menu-header">
                            <div class="dropdown-menu-header-inner bg-vicious-stance">
                                <div class="menu-header-image opacity-4"
                                    style="background-image: url('assets/images/dropdown-header/city5.jpg');">
                                </div>
                                <div class="menu-header-content text-white">
                                    <h5 class="menu-header-title">Grid Dashboard</h5>
                                    <h6 class="menu-header-subtitle">Easy grid navigation inside
                                        dropdowns</h6>
                                </div>
                            </div>
                        </div>
                        <div class="grid-menu grid-menu-xl grid-menu-3col">
                            <div class="no-gutters row">
                                <div class="col-sm-6 col-xl-4">
                                    <button class="btn-icon-vertical btn-square btn-transition btn btn-outline-link">
                                        <i
                                            class="pe-7s-world icon-gradient bg-night-fade btn-icon-wrapper btn-icon-lg mb-3"></i>
                                        Automation
                                    </button>
                                </div>
                                <div class="col-sm-6 col-xl-4">
                                    <button class="btn-icon-vertical btn-square btn-transition btn btn-outline-link">
                                        <i
                                            class="pe-7s-piggy icon-gradient bg-night-fade btn-icon-wrapper btn-icon-lg mb-3">
                                        </i>
                                        Reports
                                    </button>
                                </div>
                                <div class="col-sm-6 col-xl-4">
                                    <button class="btn-icon-vertical btn-square btn-transition btn btn-outline-link">
                                        <i
                                            class="pe-7s-config icon-gradient bg-night-fade btn-icon-wrapper btn-icon-lg mb-3">
                                        </i>
                                        Settings
                                    </button>
                                </div>
                                <div class="col-sm-6 col-xl-4">
                                    <button class="btn-icon-vertical btn-square btn-transition btn btn-outline-link">
                                        <i
                                            class="pe-7s-browser icon-gradient bg-night-fade btn-icon-wrapper btn-icon-lg mb-3">
                                        </i>
                                        Content
                                    </button>
                                </div>
                                <div class="col-sm-6 col-xl-4">
                                    <button class="btn-icon-vertical btn-square btn-transition btn btn-outline-link">
                                        <i
                                            class="pe-7s-hourglass icon-gradient bg-night-fade btn-icon-wrapper btn-icon-lg mb-3">
                                        </i>
                                        Activity
                                    </button>
                                </div>
                                <div class="col-sm-6 col-xl-4">
                                    <button class="btn-icon-vertical btn-square btn-transition btn btn-outline-link">
                                        <i
                                            class="pe-7s-world icon-gradient bg-night-fade btn-icon-wrapper btn-icon-lg mb-3">
                                        </i>
                                        Contacts
                                    </button>
                                </div>
                            </div>
                        </div>
                        <ul class="nav flex-column">
                            <li class="nav-item-divider nav-item"></li>
                            <li class="nav-item-btn text-center nav-item">
                                <button class="btn-shadow btn btn-primary btn-sm">Follow-ups</button>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="dropdown">
                    <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown"
                        class="p-0 btn btn-link">
                        <i class="typcn typcn-bell"></i>
                        <span class="badge badge-dot badge-dot-sm badge-danger">Notifications</span>
                    </button>
                    <div tabindex="-1" role="menu" aria-hidden="true"
                        class="dropdown-menu-xl rm-pointers dropdown-menu dropdown-menu-right">
                        <div class="dropdown-menu-header mb-0">
                            <div class="dropdown-menu-header-inner bg-night-sky">
                                <div class="menu-header-image opacity-5"
                                    style="background-image: url('assets/images/dropdown-header/city2.jpg');">
                                </div>
                                <div class="menu-header-content text-light">
                                    <h5 class="menu-header-title">Notifications</h5>
                                    <h6 class="menu-header-subtitle">You have <b>21</b> unread
                                        messages</h6>
                                </div>
                            </div>
                        </div>
                        <ul class="tabs-animated-shadow tabs-animated nav nav-justified tabs-shadow-bordered p-3">
                            <li class="nav-item">
                                <a role="tab" class="nav-link active" data-toggle="tab" href="#tab-messages-header">
                                    <span>Messages</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a role="tab" class="nav-link" data-toggle="tab" href="#tab-events-header">
                                    <span>Events</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a role="tab" class="nav-link" data-toggle="tab" href="#tab-errors-header">
                                    <span>System</span>
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab-messages-header" role="tabpanel">
                                <div class="scroll-area-sm">
                                    <div class="scrollbar-container">
                                        <div class="p-3">
                                            <div class="notifications-box">
                                                <div
                                                    class="vertical-time-simple vertical-without-time vertical-timeline vertical-timeline--one-column">
                                                    <div
                                                        class="vertical-timeline-item dot-danger vertical-timeline-element">
                                                        <div><span
                                                                class="vertical-timeline-element-icon bounce-in"></span>
                                                            <div class="vertical-timeline-element-content bounce-in">
                                                                <h4 class="timeline-title">All
                                                                    Hands Meeting</h4><span
                                                                    class="vertical-timeline-element-date"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="vertical-timeline-item dot-warning vertical-timeline-element">
                                                        <div><span
                                                                class="vertical-timeline-element-icon bounce-in"></span>
                                                            <div class="vertical-timeline-element-content bounce-in">
                                                                <p>Yet another one, at <span
                                                                        class="text-success">15:00
                                                                        PM</span></p><span
                                                                    class="vertical-timeline-element-date"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="vertical-timeline-item dot-success vertical-timeline-element">
                                                        <div><span
                                                                class="vertical-timeline-element-icon bounce-in"></span>
                                                            <div class="vertical-timeline-element-content bounce-in">
                                                                <h4 class="timeline-title">Build
                                                                    the production release
                                                                    <span class="badge badge-danger ml-2">NEW</span>
                                                                </h4>
                                                                <span class="vertical-timeline-element-date"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="vertical-timeline-item dot-primary vertical-timeline-element">
                                                        <div><span
                                                                class="vertical-timeline-element-icon bounce-in"></span>
                                                            <div class="vertical-timeline-element-content bounce-in">
                                                                <h4 class="timeline-title">
                                                                    Something not important
                                                                    <div
                                                                        class="avatar-wrapper mt-2 avatar-wrapper-overlap">
                                                                        <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                            <div class="avatar-icon">
                                                                                <img src="assets/images/avatars/1.jpg"
                                                                                    alt="">
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="avatar-icon-wrapper avatar-icon-sm">
                                                                            <div class="avatar-icon">
                                                                                <img src="assets/images/avatars/2.jpg"
                                                                                    alt="">
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="avatar-icon-wrapper avatar-icon-sm">
                                                                            <div class="avatar-icon">
                                                                                <img src="assets/images/avatars/3.jpg"
                                                                                    alt="">
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="avatar-icon-wrapper avatar-icon-sm">
                                                                            <div class="avatar-icon">
                                                                                <img src="assets/images/avatars/4.jpg"
                                                                                    alt="">
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="avatar-icon-wrapper avatar-icon-sm">
                                                                            <div class="avatar-icon">
                                                                                <img src="assets/images/avatars/5.jpg"
                                                                                    alt="">
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="avatar-icon-wrapper avatar-icon-sm">
                                                                            <div class="avatar-icon">
                                                                                <img src="assets/images/avatars/9.jpg"
                                                                                    alt="">
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="avatar-icon-wrapper avatar-icon-sm">
                                                                            <div class="avatar-icon">
                                                                                <img src="assets/images/avatars/7.jpg"
                                                                                    alt="">
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="avatar-icon-wrapper avatar-icon-sm">
                                                                            <div class="avatar-icon">
                                                                                <img src="assets/images/avatars/8.jpg"
                                                                                    alt="">
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="avatar-icon-wrapper avatar-icon-sm avatar-icon-add">
                                                                            <div class="avatar-icon">
                                                                                <i>+</i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </h4>
                                                                <span class="vertical-timeline-element-date"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="vertical-timeline-item dot-info vertical-timeline-element">
                                                        <div><span
                                                                class="vertical-timeline-element-icon bounce-in"></span>
                                                            <div class="vertical-timeline-element-content bounce-in">
                                                                <h4 class="timeline-title">This dot
                                                                    has an info state</h4><span
                                                                    class="vertical-timeline-element-date"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="vertical-timeline-item dot-danger vertical-timeline-element">
                                                        <div><span
                                                                class="vertical-timeline-element-icon bounce-in"></span>
                                                            <div class="vertical-timeline-element-content bounce-in">
                                                                <h4 class="timeline-title">All
                                                                    Hands Meeting</h4><span
                                                                    class="vertical-timeline-element-date"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="vertical-timeline-item dot-warning vertical-timeline-element">
                                                        <div><span
                                                                class="vertical-timeline-element-icon bounce-in"></span>
                                                            <div class="vertical-timeline-element-content bounce-in">
                                                                <p>Yet another one, at <span
                                                                        class="text-success">15:00
                                                                        PM</span></p><span
                                                                    class="vertical-timeline-element-date"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="vertical-timeline-item dot-success vertical-timeline-element">
                                                        <div><span
                                                                class="vertical-timeline-element-icon bounce-in"></span>
                                                            <div class="vertical-timeline-element-content bounce-in">
                                                                <h4 class="timeline-title">Build
                                                                    the production release
                                                                    <span class="badge badge-danger ml-2">NEW</span>
                                                                </h4>
                                                                <span class="vertical-timeline-element-date"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="vertical-timeline-item dot-dark vertical-timeline-element">
                                                        <div><span
                                                                class="vertical-timeline-element-icon bounce-in"></span>
                                                            <div class="vertical-timeline-element-content bounce-in">
                                                                <h4 class="timeline-title">This dot
                                                                    has a dark state</h4><span
                                                                    class="vertical-timeline-element-date"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-events-header" role="tabpanel">
                                <div class="scroll-area-sm">
                                    <div class="scrollbar-container">
                                        <div class="p-3">
                                            <div
                                                class="vertical-without-time vertical-timeline vertical-timeline--animate vertical-timeline--one-column">
                                                <div class="vertical-timeline-item vertical-timeline-element">
                                                    <div><span class="vertical-timeline-element-icon bounce-in"><i
                                                                class="badge badge-dot badge-dot-xl badge-success">
                                                            </i></span>
                                                        <div class="vertical-timeline-element-content bounce-in">
                                                            <h4 class="timeline-title">All Hands
                                                                Meeting</h4>
                                                            <p>Lorem ipsum dolor sic amet, today at
                                                                <a href="javascript:void(0);">12:00
                                                                    PM</a>
                                                            </p><span class="vertical-timeline-element-date"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="vertical-timeline-item vertical-timeline-element">
                                                    <div><span class="vertical-timeline-element-icon bounce-in"><i
                                                                class="badge badge-dot badge-dot-xl badge-warning">
                                                            </i></span>
                                                        <div class="vertical-timeline-element-content bounce-in">
                                                            <p>Another meeting today, at <b
                                                                    class="text-danger">12:00
                                                                    PM</b></p>
                                                            <p>Yet another one, at <span class="text-success">15:00
                                                                    PM</span></p><span
                                                                class="vertical-timeline-element-date"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="vertical-timeline-item vertical-timeline-element">
                                                    <div><span class="vertical-timeline-element-icon bounce-in"><i
                                                                class="badge badge-dot badge-dot-xl badge-danger">
                                                            </i></span>
                                                        <div class="vertical-timeline-element-content bounce-in">
                                                            <h4 class="timeline-title">Build the
                                                                production release</h4>
                                                            <p>Lorem ipsum dolor sit
                                                                amit,consectetur eiusmdd tempor
                                                                incididunt ut labore et dolore magna
                                                                elit enim at minim veniam quis
                                                                nostrud</p><span
                                                                class="vertical-timeline-element-date"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="vertical-timeline-item vertical-timeline-element">
                                                    <div><span class="vertical-timeline-element-icon bounce-in"><i
                                                                class="badge badge-dot badge-dot-xl badge-primary">
                                                            </i></span>
                                                        <div class="vertical-timeline-element-content bounce-in">
                                                            <h4 class="timeline-title text-success">
                                                                Something not important</h4>
                                                            <p>Lorem ipsum dolor sit
                                                                amit,consectetur elit enim at minim
                                                                veniam quis nostrud</p><span
                                                                class="vertical-timeline-element-date"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="vertical-timeline-item vertical-timeline-element">
                                                    <div><span class="vertical-timeline-element-icon bounce-in"><i
                                                                class="badge badge-dot badge-dot-xl badge-success">
                                                            </i></span>
                                                        <div class="vertical-timeline-element-content bounce-in">
                                                            <h4 class="timeline-title">All Hands
                                                                Meeting</h4>
                                                            <p>Lorem ipsum dolor sic amet, today at
                                                                <a href="javascript:void(0);">12:00
                                                                    PM</a>
                                                            </p><span class="vertical-timeline-element-date"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="vertical-timeline-item vertical-timeline-element">
                                                    <div><span class="vertical-timeline-element-icon bounce-in"><i
                                                                class="badge badge-dot badge-dot-xl badge-warning">
                                                            </i></span>
                                                        <div class="vertical-timeline-element-content bounce-in">
                                                            <p>Another meeting today, at <b
                                                                    class="text-danger">12:00
                                                                    PM</b></p>
                                                            <p>Yet another one, at <span class="text-success">15:00
                                                                    PM</span></p><span
                                                                class="vertical-timeline-element-date"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="vertical-timeline-item vertical-timeline-element">
                                                    <div><span class="vertical-timeline-element-icon bounce-in"><i
                                                                class="badge badge-dot badge-dot-xl badge-danger">
                                                            </i></span>
                                                        <div class="vertical-timeline-element-content bounce-in">
                                                            <h4 class="timeline-title">Build the
                                                                production release</h4>
                                                            <p>Lorem ipsum dolor sit
                                                                amit,consectetur eiusmdd tempor
                                                                incididunt ut labore et dolore magna
                                                                elit enim at minim veniam quis
                                                                nostrud</p><span
                                                                class="vertical-timeline-element-date"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="vertical-timeline-item vertical-timeline-element">
                                                    <div><span class="vertical-timeline-element-icon bounce-in"><i
                                                                class="badge badge-dot badge-dot-xl badge-primary">
                                                            </i></span>
                                                        <div class="vertical-timeline-element-content bounce-in">
                                                            <h4 class="timeline-title text-success">
                                                                Something not important</h4>
                                                            <p>Lorem ipsum dolor sit
                                                                amit,consectetur elit enim at minim
                                                                veniam quis nostrud</p><span
                                                                class="vertical-timeline-element-date"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-errors-header" role="tabpanel">
                                <div class="scroll-area-sm">
                                    <div class="scrollbar-container">
                                        <div class="no-results pt-3 pb-0">
                                            <div class="swal2-icon swal2-success swal2-animate-success-icon">
                                                <div class="swal2-success-circular-line-left"
                                                    style="background-color: rgb(255, 255, 255);">
                                                </div>
                                                <span class="swal2-success-line-tip"></span>
                                                <span class="swal2-success-line-long"></span>
                                                <div class="swal2-success-ring"></div>
                                                <div class="swal2-success-fix"
                                                    style="background-color: rgb(255, 255, 255);">
                                                </div>
                                                <div class="swal2-success-circular-line-right"
                                                    style="background-color: rgb(255, 255, 255);">
                                                </div>
                                            </div>
                                            <div class="results-subtitle">All caught up!</div>
                                            <div class="results-title">There are no system errors!
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ul class="nav flex-column">
                            <li class="nav-item-divider nav-item"></li>
                            <li class="nav-item-btn text-center nav-item">
                                <button class="btn-shadow btn-wide btn-pill btn btn-focus btn-sm">View
                                    Latest Changes</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-btn-lg pr-0">
            <div class="widget-content p-0">
                <div class="widget-content-wrapper">
                    <div class="widget-content-left">
                        <div class="btn-group">
                            <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                class="p-0 btn">
                                <img width="42" class="rounded"
                                    src="{{ asset('assets/images/avatars/3.jpg') }}" alt="">
                                <i class="fa fa-angle-down ml-2 opacity-8"></i>
                            </a>
                            <div tabindex="-1" role="menu" aria-hidden="true"
                                class="rm-pointers dropdown-menu-lg dropdown-menu dropdown-menu-right">
                                <div class="dropdown-menu-header">
                                    <div class="dropdown-menu-header-inner bg-info">
                                        <div class="menu-header-image opacity-2"
                                            style="background-image: url('assets/images/dropdown-header/city1.jpg');">
                                        </div>
                                        <div class="menu-header-content text-left">
                                            <div class="widget-content p-0">
                                                <div class="widget-content-wrapper">
                                                    <div class="widget-content-left mr-3">
                                                        <img width="42" class="rounded-circle"
                                                            src="{{ asset('assets/images/avatars/3.jpg') }}" alt="">
                                                    </div>
                                                    <div class="widget-content-left">
                                                        <div class="widget-heading">Minnie Betts
                                                        </div>
                                                        <div class="widget-subheading opacity-8">A
                                                            short profile description
                                                        </div>
                                                    </div>
                                                    <div class="widget-content-right mr-2">
                                                        <a class="" href=" {{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                            <button
                                                                class="btn-pill btn-shadow btn-shine btn btn-focus">Logout
                                                            </button>
                                                        </a>

                                                        <form id="logout-form" action="{{ route('logout') }}"
                                                            method="POST" class="d-none">
                                                            @csrf
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="scroll-area-xs" style="height: 150px;">
                                    <div class="scrollbar-container ps">
                                        <ul class="nav flex-column">
                                            <li class="nav-item-header nav-item">Activity
                                            </li>
                                            <li class="nav-item">
                                                <a href="javascript:void(0);" class="nav-link">Chat
                                                    <div class="ml-auto badge badge-pill badge-info">
                                                        8
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="javascript:void(0);" class="nav-link">Recover Password
                                                </a>
                                            </li>
                                            <li class="nav-item-header nav-item">My Account
                                            </li>
                                            <li class="nav-item">
                                                <a href="javascript:void(0);" class="nav-link">Settings
                                                    <div class="ml-auto badge badge-success">New
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="javascript:void(0);" class="nav-link">Messages
                                                    <div class="ml-auto badge badge-warning">512
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="javascript:void(0);" class="nav-link">Logs
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <ul class="nav flex-column">
                                    <li class="nav-item-divider mb-0 nav-item"></li>
                                </ul>
                                <div class="grid-menu grid-menu-2col">
                                    <div class="no-gutters row">
                                        <div class="col-sm-6">
                                            <button
                                                class="btn-icon-vertical btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-warning">
                                                <i
                                                    class="pe-7s-chat icon-gradient bg-amy-crisp btn-icon-wrapper mb-2"></i>
                                                Message Inbox
                                            </button>
                                        </div>
                                        <div class="col-sm-6">
                                            <button
                                                class="btn-icon-vertical btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-danger">
                                                <i
                                                    class="pe-7s-ticket icon-gradient bg-love-kiss btn-icon-wrapper mb-2"></i>
                                                <b>Support Tickets</b>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <ul class="nav flex-column">
                                    <li class="nav-item-divider nav-item">
                                    </li>
                                    <li class="nav-item-btn text-center nav-item">
                                        <button class="btn-wide btn btn-primary btn-sm">
                                            Open Messages
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="app-header-overlay d-none animated fadeIn"></div>
</div>
