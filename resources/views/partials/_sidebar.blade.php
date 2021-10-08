           <div class="app-sidebar-wrapper">
               <div class="app-sidebar sidebar-shadow">
                   <div class="app-header__logo">
                       <a href="{{ route('home') }}" data-toggle="tooltip" data-placement="bottom" title="Back Office System">
                           {{-- <img width="42" class="rounded" src="http://127.0.0.1:8000/assets/images/avatars/3.jpg" alt=""> --}}
                           <div class="icon-wrapper rounded-circle">
                               <div class="icon-wrapper-bg opacity-10 bg-warning"></div>
                               <i class="lnr-laptop-phone text-dark opacity-8"></i>
                           </div>
                       </a>
                       <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                           <span class="hamburger-box">
                               <span class="hamburger-inner"></span>
                           </span>
                       </button>
                   </div>
                   <div class="scrollbar-sidebar scrollbar-container">
                       <div class="app-sidebar__inner">
                           <ul class="vertical-nav-menu">
                               <li class="app-sidebar__heading">Menu</li>
                               <li class="mm-{{ request()->segment(1) == 'home' ? 'active' : '' }}">
                                   <a href="#">
                                       <i class="metismenu-icon pe-7s-rocket"></i>
                                       Dashboards
                                       <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                   </a>
                                   <ul>
                                       <li><a class="mm-{{ request()->is('home') ? 'active' : '' }}"
                                               href="{{ route('home') }}">Monitoring</a></li>
                                       <li><a class="" href=" {{ route('home') }}">Analytics</a></li>
                                   </ul>
                               </li>
                               <li class="app-sidebar__heading">Users & Access</li>
                               <li class="mm-{{ request()->segment(1) == 'users' ? 'active' : '' }}">
                                   <a href="#">
                                       <i class="metismenu-icon pe-7s-users"></i>
                                       Users
                                       <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                   </a>
                                   <ul>
                                       <li>
                                           <a class="mm-{{ request()->is('users') ? 'active' : '' }}" href="
                                               {{ route('users.index') }}">
                                               <i class="metismenu-icon"></i>
                                               Users List
                                               <i class="metismenu-state-icon caret-left"></i>
                                           </a>
                                       </li>
                                       <li>
                                           <a class="mm-{{ request()->is('users/create') ? 'active' : '' }}"
                                               href="{{ route('users.create') }}">
                                               <i class="metismenu-icon"></i>
                                               Add New User
                                               <i class="metismenu-state-icon caret-left"></i>
                                           </a>
                                       </li>
                                   </ul>
                               </li>
                               <li class="mm-{{ request()->segment(1) == 'give-permissions' ? 'active' : '' }}">
                                   <a href="#">
                                       <i class="metismenu-icon pe-7s-key"></i>
                                       Permission
                                       <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                   </a>
                                   <ul>
                                       <li>
                                           <a href="#">
                                               <i class="metismenu-icon"></i>
                                               Permitted Users List
                                           </a>
                                       </li>
                                       <li>
                                           <a class="mm-{{ request()->is('give-permissions') ? 'active' : '' }}" 
                                            href="{{ route('give-permissions.index') }}">
                                               <i class="metismenu-icon"></i>
                                               Give Permission
                                           </a>
                                       </li>
                                   </ul>
                               </li>


                               <li class="app-sidebar__heading">System Settings</li>
                               <li>
                                   <a href="#">
                                       <i class="metismenu-icon pe-7s-settings"></i>
                                       GeneralSettings
                                       <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                   </a>
                                   <ul>
                                       <li>
                                           <a href="#">
                                               <i class="metismenu-icon"></i>
                                               Logo
                                               <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                           </a>
                                       </li>
                                       <li>
                                           <a href="#">
                                               <i class="metismenu-icon"></i>
                                               Favicon
                                               <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                           </a>
                                       </li>
                                       <li>
                                           <a href="#">
                                               <i class="metismenu-icon"></i>
                                               Loader
                                               <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                           </a>
                                       </li>
                                       <li>
                                           <a href="#">
                                               <i class="metismenu-icon"></i>
                                               Website Contents
                                               <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                           </a>
                                       </li>
                                       <li>
                                           <a href="#">
                                               <i class="metismenu-icon"></i>
                                               Error Banner
                                               <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                           </a>
                                       </li>
                                       <li>
                                           <a href="#">
                                               <i class="metismenu-icon"></i>
                                               Website Maintanence
                                               <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                           </a>
                                       </li>
                                   </ul>
                               </li>
                               <li>
                                   <a href="#">
                                       <i class="metismenu-icon pe-7s-tools"></i>
                                       Home Page Settings
                                       <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                   </a>
                                   <ul>
                                       <li>
                                           <a href="components-tabs.html">
                                               <i class="metismenu-icon"></i>
                                               Top Banner
                                           </a>
                                       </li>
                                       <li>
                                           <a href="components-accordions.html">
                                               <i class="metismenu-icon"></i>
                                               Top Small Banner
                                           </a>
                                       </li>
                                   </ul>
                               </li>
                               <li>
                                   <a href="#">
                                       <i class="metismenu-icon pe-7s-mail"></i>
                                       Email Settings
                                       <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                   </a>
                                   <ul>
                                       <li>
                                           <a href="components-tabs.html">
                                               <i class="metismenu-icon"></i>
                                               Email Template
                                           </a>
                                       </li>
                                       <li>
                                           <a href="components-accordions.html">
                                               <i class="metismenu-icon"></i>
                                               Email Configurations
                                           </a>
                                       </li>
                                       <li>
                                           <a href="components-accordions.html">
                                               <i class="metismenu-icon"></i>
                                               Group Email
                                           </a>
                                       </li>
                                   </ul>
                               </li>
                           </ul>
                       </div>
                   </div>
               </div>
           </div>
           <div class="app-sidebar-overlay d-none animated fadeIn"></div>
