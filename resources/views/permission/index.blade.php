@extends('layouts.app')
@section('title', 'All Users List')
@section('header')
<div class="page-title-heading text-primary">
    Given Permission
    <div class="page-title-subheading">
        All Users Permission Processes Are Here!
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
                    <span>Permission</span>
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
    <div class="card-header">
        <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
            User Portion
        </div>
    </div>
    <div class="card-body">
        <form class="">
            <div class=" form-row">
                <div class="col-md-4">
                    <div class="input-group">
                        <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-fw"
                                    aria-hidden="true" title="Copy to use user-plus"></i></span>
                        </div>
                        <select name="user_id" class="multiselect-dropdown form-control" onchange="selectdata(this)">
                            <option value="">Select User</option>
                            @foreach ($users as $value)
                            <option value="{{ $value->id }}" data-email="{{ $value->email }}"
                                data-phone="{{ $value->phone }}">{{ $value->name }}</option>
                            @endforeach
                        </select>
                    </div><br>
                </div>
                <div class="col-md-4">
                    <div class="input-group">
                        <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-fw"
                                    aria-hidden="true" title="Copy to use envelope"></i></span>
                        </div>
                        <input readonly required placeholder="Email Address" type="text" id="email" name="email"
                            class="form-control">
                    </div><br>
                </div>
                <div class="col-md-4">
                    <div class="input-group">
                        <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-fw"
                                    aria-hidden="true" title="Copy to use phone"></i></span>
                        </div>
                        <input readonly required placeholder="Phone Number" id="phone" name="phone" type="number"
                            class="form-control">
                    </div><br>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="main-card mb-3 card">
    <div class="card-header">
        <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
            Permission Portion
        </div>
    </div>
    <div class="card-body">
        <form class="">
            {{-- <div class="scrollbar-sidebar "> --}}
                {{-- <div class="app-sidebar__inner"> --}}
                    <ul class="vertical-nav-menu">
                        @foreach ($modules as $index => $module)
                        <li class="app-sidebar__heading">{{ $module->name }}</li>
                        @foreach ($module->submodules as $submodule)
                        <li>
                            <a href="#">
                                <i class="metismenu-icon pe-7s-rocket"></i>
                                {{ $submodule->name }}
                                <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                            </a>
                            @foreach ($submodule->parent_permissions as $in => $parent_permissions)
                            <ul>
                                @foreach ($parent_permissions->permissions as $permission)
                                <div class="custom-checkbox custom-control custom-control-inline">
                                    <input type="checkbox" id="exampleCustomInline2" class="custom-control-input">
                                    <label class="custom-control-label" for="exampleCustomInline2">{{ $permission->name }}</label>
                                </div>
                                @endforeach
                            </ul>
                            @endforeach
                        </li>
                        @endforeach
                        @endforeach
                    </ul>
                {{-- </div>
            </div> --}}
        </form>
    </div>
</div>
@endsection

@section('javascript')
<script>
    function selectdata(object) {
        let getEmail = $(object).find('option:selected').data('email')
        let getPhone = $(object).find('option:selected').data('phone')

        $('#email').val(getEmail);
        $('#phone').val(getPhone);
    }
</script>
@endsection