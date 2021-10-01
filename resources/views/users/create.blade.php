@extends('layouts.app')
@section('title', 'Create New User')
@section('header')
    <div class="page-title-heading text-primary">
        Add New User
        <div class="page-title-subheading">
            Add New User Without Any Hassel, And Give Any Permission! Enjoy!!!
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
                        <span>Add User</span>
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
    <div class="main-card mb-3 card">
        <div class="card-body">
            <form id="signupForm" class="col-md-5 mx-auto" method="post" action="{{ route('users.store') }}"
                novalidate="novalidate">
                @csrf
                <h2 class="text-center">Create Account!</h2>
                <h5 class="card-title text-center">Please! Fillup All The Mendatory Fields!</h5>
                <hr><br>
                {{-- Name --}}
                <div class="input-group">
                    <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-fw"
                                aria-hidden="true" title="Copy to use user-plus"></i></span>
                    </div>
                    <input required placeholder="Full Name" type="text" id="name" name="name" class="form-control">
                </div><br>

                {{-- Email --}}
                <div class="input-group">
                    <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-fw"
                                aria-hidden="true" title="Copy to use envelope"></i></span>
                    </div>
                    <input required placeholder="Email Address" type="text" id="email" name="email" class="form-control">
                </div><br>

                {{-- Phone --}}
                <div class="input-group">
                    <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-fw"
                                aria-hidden="true" title="Copy to use phone"></i></span>
                    </div>
                    <input required placeholder="Phone Number" id="phone" name="phone" type="number" class="form-control">
                </div><br>

                {{-- Gender --}}
                <div class="input-group">
                    <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-fw"
                                aria-hidden="true" title="Copy to use venus"></i></span>
                    </div>
                    <select required type="select" id="exampleCustomSelect" name="gender" class="custom-select">
                        <option selected disabled value="">Select Option</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="others">Others</option>
                    </select>
                </div><br>

                {{-- Password --}}
                <div class="input-group">
                    <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-fw"
                                aria-hidden="true" title="Copy to use unlock-alt"></i></span>
                    </div>
                    <input required placeholder="Password" type="password" id="password" name="password"
                        class="form-control">
                </div><br>

                {{-- Confirm Pass --}}
                <div class="input-group">
                    <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-fw"
                                aria-hidden="true" title="Copy to use unlock-alt"></i></span>
                    </div>
                    <input required placeholder="Confirm Password" type="password" id="confirm_password"
                        name="confirm_password" class="form-control">
                </div><br>
                <br>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary" value="Sign up">Sign up
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
