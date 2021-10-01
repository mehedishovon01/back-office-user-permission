@extends('layouts.app')
@section('title', 'User Ditails')
@section('header')
    <div class="page-title-heading text-primary">
        Users List
        <div class="page-title-subheading">
            All Authentication Users Are Here!
        </div>
    </div>
@endsection
@section('topcontent')
    <div class="app-inner-bar">
        <div class="inner-bar-left">
            <div class="d-inline-block ml-3 dropright">
                <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                    class="btn-shadow mr-3 btn-sm btn btn-secondary">
                    <i class="fa fa-anchor"></i>
                </button>
                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu">
                    <a href="javascript:void(0);" class="dropdown-item">
                        <i class="nav-link-icon lnr-inbox mr-2"></i>
                        <span>
                            Inbox
                        </span>
                        <div class="ml-auto badge badge-pill badge-secondary">86</div>
                    </a>
                    <a href="javascript:void(0);" class="dropdown-item">
                        <i class="nav-link-icon lnr-book mr-2"></i>
                        <span>
                            Book
                        </span>
                        <div class="ml-auto badge badge-pill badge-danger">5</div>
                    </a>
                    <a href="javascript:void(0);" class="dropdown-item">
                        <i class="nav-link-icon lnr-picture mr-2"></i>
                        <span>
                            Picture
                        </span>
                    </a>
                    <a disabled="" href="javascript:void(0);" class="dropdown-item disabled">
                        <i class="nav-link-icon lnr-file-empty mr-2"></i>
                        <span>
                            File Disabled
                        </span>
                    </a>
                </div>
            </div>
        </div>
        <div class="inner-bar-center">
            <ul class="nav">
                <li class="nav-item">
                    <a role="tab" data-toggle="tab" id="tab-nav-1" class="nav-link active" href="#tab-content-1"
                        aria-selected="false">
                        <span>User List</span>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link opacity-8">
                        <span>More</span>
                        <i class="fa fa-angle-down ml-1 opacity-6"></i>
                    </a>
                    <div tabindex="-1" role="menu" aria-hidden="true"
                        class="dropdown-menu-right rm-pointers dropdown-menu-shadow dropdown-menu-hover-link dropdown-menu"
                        x-placement="bottom-end"
                        style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(74px, 38px, 0px);">
                        <h6 tabindex="-1" class="dropdown-header">Header</h6>
                        <button type="button" tabindex="0" class="dropdown-item"><i class="dropdown-icon lnr-inbox">
                            </i><span>Menus</span></button>
                        <button type="button" tabindex="0" class="dropdown-item"><i class="dropdown-icon lnr-file-empty">
                            </i><span>Settings</span></button>
                        <button type="button" tabindex="0" class="dropdown-item"><i class="dropdown-icon lnr-book">
                            </i><span>Actions</span></button>
                        <div tabindex="-1" class="dropdown-divider"></div>
                        <div class="p-3 text-right">
                            <button class="mr-2 btn-shadow btn-sm btn btn-link">View Details</button>
                            <button class="mr-2 btn-shadow btn-sm btn btn-primary">Action</button>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="inner-bar-right">
            <ul class="nav">
                <li class="nav-item">
                    <a href="javascript:void(0);" class="nav-link open-right-drawer">
                        <span class="hide-text-md">Show right drawer</span>
                        <i class="fa fa-align-right ml-2"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12 col-lg-6 col-xl-4">
            <div class="card-shadow-primary profile-responsive card-border mb-3 card">
                <div class="dropdown-menu-header">
                    <div class="dropdown-menu-header-inner bg-focus">
                        <div class="menu-header-image opacity-3"
                            style="background-image: url('{{ asset('assets/images/dropdown-header/city4.jpg') }}');">
                        </div>
                        <div class="menu-header-content btn-pane-right">
                            <div class="avatar-icon-wrapper mr-2 avatar-icon-xl">
                                <div class="avatar-icon rounded"><img src="{{ asset('assets/images/avatars/12.jpg') }}"
                                        alt="Avatar 5"></div>
                            </div>
                            <div>
                                <h5 class="menu-header-title">{{ $user->name }}</h5>
                                <h6 class="menu-header-subtitle">{{ $user->email }}</h6>
                            </div>
                            {{-- <div class="menu-header-btn-pane">
                                <button class="ladda-button btn btn-pill btn-dark" data-style="slide-right"><span
                                        class="ladda-label">Load Click</span><span class="ladda-spinner"></span>
                                    <div class="ladda-progress" style="width: 0px;"></div>
                                </button>
                            </div> --}}
                        </div>
                    </div>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="bg-warm-flame list-group-item">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left mr-3">
                                    <div class="icon-wrapper m-0"><b class="text-primary"><span>00</span></b>
                                    </div>
                                </div>
                                <div class="widget-content-left">
                                    <div class="widget-heading text-dark opacity-7">
                                        {{ $user->phone }}
                                    </div>
                                    <div class="widget-subheading opacity-10">
                                        <span class="pr-2">{{ $user->gender }}</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </li>
                    <li class="p-0 list-group-item">
                        <div class="grid-menu grid-menu-2col">
                            <div class="no-gutters row">
                                <div class="col-sm-6">
                                    <button class="btn-icon-vertical btn-square btn-transition btn btn-outline-link">
                                        <i class="lnr-license btn-icon-wrapper btn-icon-lg mb-3"> </i>View
                                        Profile
                                    </button>
                                </div>
                                <div class="col-sm-6">
                                    <button class="btn-icon-vertical btn-square btn-transition btn btn-outline-link">
                                        <i class="lnr-map btn-icon-wrapper btn-icon-lg mb-3"> </i>Sales
                                        Reports
                                    </button>
                                </div>
                                <div class="col-sm-6">
                                    <button class="btn-icon-vertical btn-square btn-transition btn btn-outline-link">
                                        <i class="lnr-music-note btn-icon-wrapper btn-icon-lg mb-3"> </i>Leads
                                        Generated
                                    </button>
                                </div>
                                <div class="col-sm-6">
                                    <button class="btn-icon-vertical btn-square btn-transition btn btn-outline-link">
                                        <i class="lnr-heart btn-icon-wrapper btn-icon-lg mb-3"> </i>Successful
                                        Tasks
                                    </button>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection
