@extends('layouts.app')
@section('title', 'All Users List')
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
    <div class="main-card mb-3 card">
        <div class="card-header">
            <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                All Users Lists
            </div>
            <div class="btn-actions-pane-right">
                <button type="button" class="btn-icon btn-wide btn-outline-2x btn btn-outline-focus btn-sm d-flex">
                    Actions Menu
                    <span class="pl-2 align-middle opacity-7">
                        <i class="fa fa-angle-right"></i>
                    </span>
                </button>
            </div>
        </div>
        <div class="table-responsive">
            <table class="align-middle text-truncate mb-0 table table-borderless table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Avatar</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Gender</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $value)
                        <tr>
                            <td class="text-muted" style="width: 80px;">{{ $loop->iteration }}</td>
                            <td style="width: 80px;"><img width="40" class="rounded-circle"
                                    src="assets/images/avatars/4.jpg" alt=""></td>
                            <td><a href="{{ route('users.show', $value->id) }}">{{ $value->name }}</a>
                            </td>
                            <td><a href="{{ route('users.show', $value->id) }}">{{ $value->email }}</a></td>
                            <td><a href="{{ route('users.show', $value->id) }}">{{ $value->phone }}</a></td>
                            <td><a href="{{ route('users.show', $value->id) }}">{{ $value->gender }}</a></td>
                            <td>
                                <div class=" badge badge-pill badge-success">
                                    Active
                                </div>
                            </td>
                            <td>
                                <div role="group" class="btn-group-sm btn-group">
                                    <a href="{{ route('users.show', $value->id) }}"
                                        class="btn-shadow btn btn-success">View</a>
                                    <a href="" class="btn-shadow btn btn-primary">Fire</a>
                                    <form action="{{ route('users.destroy', $value->id) }}" method="POST">
                                        @csrf
                                        @method("DELETE")
                                        <button type="submit" class="btn-shadow btn btn-sm btn-danger">Del</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>

                {{-- If value equals to 0 --}}
                @if (count($users) < 0)
                    <tr>
                        <td colspan="15" class="text-center text-danger">No records found!</td>
                    </tr>
                @endif
            </table>
        </div>

        {{-- Rounded Paginations --}}
        @include('partials._paginate',['style' => 'rounded', 'data' => $users,])
    </div>
@endsection
