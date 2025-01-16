@extends('adminlte::master')

@section('adminlte_css')
    <link rel="stylesheet"
          href="{{ asset('vendor/adminlte/dist/css/skins/skin-' . config('adminlte.skin', 'blue') . '.min.css')}} ">
    @stack('css')
    @yield('css')
@stop

@section('body_class', 'skin-' . config('adminlte.skin', 'blue') . ' sidebar-mini ' . (config('adminlte.layout') ? [
    'boxed' => 'layout-boxed',
    'fixed' => 'fixed',
    'top-nav' => 'layout-top-nav'
][config('adminlte.layout')] : '') . (config('adminlte.collapse_sidebar') ? ' sidebar-collapse ' : ''))

@section('body')
    <div class="wrapper">

        <!-- Main Header -->
        <header class="main-header">
            @if(config('adminlte.layout') == 'top-nav')
            <nav class="navbar navbar-static-top">
                <div class="container">
                    <div class="navbar-header">
                        <a href="{{ url(config('adminlte.dashboard_url', 'home')) }}" class="navbar-brand">
                            {!! config('adminlte.logo', '<b>Admin</b>LTE') !!}
                        </a>
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                            <i class="fa fa-bars"></i>
                        </button>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
                        <ul class="nav navbar-nav">
                            @each('adminlte::partials.menu-item-top-nav', $adminlte->menu(), 'item')
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
            @else
            <!-- Logo -->
            <a href="{{ url(config('adminlte.dashboard_url', 'home')) }}" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini">{!! config('adminlte.logo_mini', '<b>A</b>LT') !!}</span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg">{!! config('adminlte.logo', '<b>Admin</b>LTE') !!}</span>
            </a>

            <!-- Header Navbar -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">{{ trans('adminlte::adminlte.toggle_navigation') }}</span>
                </a>
            @endif
                <!-- Navbar Right Menu -->
                <div class="navbar-custom-menu">

                    <ul class="nav navbar-nav">
                        <li class="tasks-menu">
                            <a href="{{ url('/') }}" target="_blank" title="View Website" data-placement="bottom">
                                <i class="fa fa-fw fa-eye" aria-hidden="true"></i>
                            </a>
                        </li>
                        @if(Auth::user()->role == 'admin') {{-- eita apatoto, karon kichudin por eita normal user er jonnou kora hobe --}}
                        <li class="dropdown notifications-menu">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                            <i class="fa fa-bell-o"></i>
                            {{-- @if($notifcount > 0)
                            <span class="label label-warning">{{ $notifcount }}</span>
                            @endif --}}
                          </a>
                          <ul class="dropdown-menu">
                            {{-- @if($notifcount > 0)
                              <li class="header">{{ $notifcount }} টি নোটিফিকেশন আছে</li>
                            @else
                              <li class="header">কোন নোটিফিকেশন নেই!</li>
                            @endif --}}
                            
                            <li>
                              <!-- inner menu: contains the actual data -->
                              <ul class="menu">
                                {{-- @if($notifpendingfapplications > 0)
                                  <li>
                                    <a href="{{ route('dashboard.applications') }}">
                                      <i class="fa fa-users text-aqua"></i> {{ $notifpendingfapplications }} জন নিবন্ধন আবেদন করেছেন
                                    </a>
                                  </li>
                                @endif --}}

                                {{-- @if($notifpendingpayments > 0)
                                  <li>
                                    <a href="{{ route('dashboard.memberspendingpayments') }}">
                                      <i class="fa fa-hourglass-start text-yellow"></i> {{ $notifpendingpayments }} টি প্রক্রিয়াধীন পরিশোধ রয়েছে
                                    </a>
                                  </li>
                                @endif

                                @if($notiftempmemdatas > 0)
                                  <li>
                                    <a href="{{ route('dashboard.membersupdaterequests') }}">
                                      <i class="fa fa-pencil-square-o text-green"></i> {{ $notiftempmemdatas }} টি তথ্য হালনাগাদ অনুরোধ
                                    </a>
                                  </li>
                                @endif 

                                @if($notifsmsbalance > 0 && $notifsmsbalance < 21)
                                  <li>
                                    <a href="#">
                                      <i class="fa fa-envelope-o text-red"></i> অপর্যাপ্ত SMS ব্যালেন্সঃ ৳ {{ $notifsmsbalance }}
                                    </a>
                                  </li>
                                @endif    --}}                             
                              </ul>
                            </li>
                            <li class="footer"><a href="{{ route('dashboard.notifications') }}">সব দেখুন</a></li>
                          </ul>
                        </li>
                        @endif
                        <li class="dropdown user user-menu">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                            @if((Auth::User()->image != '') && (file_exists(public_path('images/users/'.Auth::User()->image))))
                              <img src="{{ asset('images/users/'.Auth::User()->image)}}" class="user-image" alt="{{ Auth::User()->name }}-এর মুখছবি">
                            @else
                              <img src="{{ asset('images/user.png')}}" class="user-image" alt="{{ Auth::User()->name }}-এর মুখছবি">
                            @endif
                            
                            {{ Auth::User()->name }}</a>
                            <ul class="dropdown-menu" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                              <!-- User image -->
                              <li class="user-header">
                                @if((Auth::User()->image != '') && (file_exists(public_path('images/users/'.Auth::User()->image))))
                                  <img src="{{ asset('images/users/'.Auth::User()->image)}}" class="img-circle" alt="{{ Auth::User()->name }}-এর মুখছবি">
                                @else
                                  <img src="{{ asset('images/user.png') }}" class="img-circle" alt="{{ Auth::User()->name }}-এর মুখছবি">
                                @endif
                                <p>
                                  {{ Auth::User()->name }}
                                  <small>সদস্যপদ প্রাপ্তিঃ {{ date('F, Y', strtotime(Auth::User()->created_at)) }}</small>
                                </p>
                              </li>
                              <!-- Menu Body -->
                              <li class="user-body">
                                {{-- <div class="row">
                                  <div class="col-xs-4 text-center">
                                    <a href="#">Followers</a>
                                  </div>
                                  <div class="col-xs-4 text-center">
                                    <a href="#">Sales</a>
                                  </div>
                                  <div class="col-xs-4 text-center">
                                    <a href="#">Friends</a>
                                  </div>
                                </div> --}}
                                <!-- /.row -->
                              </li>
                              <!-- Menu Footer-->
                              <li class="user-footer">
                                {{-- <div class="pull-left">
                                  <a href="{{ route('dashboard.profile') }}" class="btn btn-default btn-flat"><i class="fa fa-fw fa-user-o"></i> প্রোফাইল</a>
                                </div> --}}
                                <div class="pull-right">
                                  @if(config('adminlte.logout_method') == 'GET' || !config('adminlte.logout_method') && version_compare(\Illuminate\Foundation\Application::VERSION, '5.3.0', '<'))
                                      <a href="{{ url(config('adminlte.logout_url', 'auth/logout')) }}" class="btn btn-default btn-flat">
                                          <i class="fa fa-fw fa-power-off"></i> লগ আউট
                                      </a>
                                  @else
                                      <a href="#"
                                         onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="btn btn-default btn-flat">
                                          <i class="fa fa-fw fa-power-off"></i> লগ আউট
                                      </a>
                                      <form id="logout-form" action="{{ url(config('adminlte.logout_url', 'auth/logout')) }}" method="POST" style="display: none;" class="btn btn-default btn-flat">
                                          @if(config('adminlte.logout_method'))
                                              {{ method_field(config('adminlte.logout_method')) }}
                                          @endif
                                          {{ csrf_field() }}
                                      </form>
                                  @endif
                                </div>
                              </li>
                            </ul>                            
                        </li>
                    </ul>
                </div>
                @if(config('adminlte.layout') == 'top-nav')
                </div>
                @endif
            </nav>
        </header>

        @if(config('adminlte.layout') != 'top-nav')
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">

            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">

                <!-- Sidebar Menu -->
                <ul class="sidebar-menu" data-widget="tree">
                    {{-- @each('adminlte::partials.menu-item', $adminlte->menu(), 'item') --}}
                    @if(Auth::user()->role == 'admin')
                      {{-- <li class="header">ড্যাশবোর্ড</li> --}}
                      <li class="{{ Request::is('dashboard') ? 'active' : '' }}">
                          <a href="{{ route('dashboard.index') }}">
                              <i class="fa fa-fw fa-tachometer"></i>
                              <span>ড্যাশবোর্ড</span>
                          </a>
                      </li>
                      <li class="{{ Request::is('dashboard/admins') ? 'active' : '' }}">
                          <a href="{{ route('dashboard.admins') }}">
                              <i class="fa fa-fw fa-key"></i>
                              <span>অ্যাডমিনগণ</span>
                          </a>
                      </li>                      
                      {{-- <li class="header">হোমপেইজ কাস্টমাইজেশন</li> --}}
                      <li class="{{ Request::is('dashboard/staff') ? 'active' : '' }} {{ Request::is('dashboard/abouts') ? 'active' : '' }} {{ Request::is('dashboard/gallery') ? 'active' : '' }} {{ Request::is('dashboard/gallery/*') ? 'active' : '' }} {{ Request::is('dashboard/events') ? 'active' : '' }} {{ Request::is('dashboard/notice') ? 'active' : '' }} {{ Request::is('dashboard/form/messages') ? 'active' : '' }} {{ Request::is('dashboard/slider') ? 'active' : '' }} {{ Request::is('dashboard/faq') ? 'active' : '' }} treeview active menu-open">
                        <a href="#">
                            <i class="fa fa-fw fa-cogs"></i>
                            <span>হোমপেইজ কাস্টমাইজেশন</span>
                            <span class="pull-right-container">
                              <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                          <li class="{{ Request::is('dashboard/staff') ? 'active' : '' }}"><a href="{{ route('dashboard.staff') }}"><i class="fa fa-users"></i> শিক্ষক ও এমএলএসএস</a></li>
                          <li class="{{ Request::is('dashboard/slider') ? 'active' : '' }}"><a href="{{ route('dashboard.slider') }}"><i class="fa fa-list-alt"></i> স্লাইডার</a></li>
                          <li class="{{ Request::is('dashboard/abouts') ? 'active' : '' }}"><a href="{{ route('dashboard.abouts') }}"><i class="fa fa-pencil"></i> তথ্য এবং টেক্সট</a></li>
                          <li class="{{ Request::is('dashboard/gallery') ? 'active' : '' }} {{ Request::is('dashboard/gallery/*') ? 'active' : '' }}"><a href="{{ route('dashboard.gallery') }}"><i class="fa fa-picture-o"></i> গ্যালারি</a></li>
                          <li class="{{ Request::is('dashboard/testimonials') ? 'active' : '' }} {{ Request::is('dashboard/testimonials/*') ? 'active' : '' }}"><a href="{{ route('dashboard.testimonials') }}"><i class="fa fa-picture-o"></i> মন্তব্য/</a></li>
                          <li class="{{ Request::is('dashboard/events') ? 'active' : '' }}"><a href="{{ route('dashboard.events') }}"><i class="fa fa-bullhorn"></i> ইভেন্ট</a></li>
                          <li class="{{ Request::is('dashboard/notice') ? 'active' : '' }}"><a href="{{ route('dashboard.notice') }}"><i class="fa fa-bell-o"></i> নোটিশ</a></li>
                          <li class="{{ Request::is('dashboard/faq') ? 'active' : '' }}"><a href="{{ route('dashboard.faq') }}"><i class="fa fa-question-circle-o"></i> FAQ</a></li>
                          <li class="{{ Request::is('dashboard/form/messages') ? 'active' : '' }}"><a href="{{ route('dashboard.formmessage') }}"><i class="fa fa-envelope-o"></i> ফরম মেসেজ</a></li>
                        </ul>
                      </li>
                    @endif
                    
                   {{--  <li class="{{ Request::is('dashboard/profile') ? 'active' : '' }}">
                        <a href="{{ route('dashboard.profile') }}">
                            <i class="fa fa-fw fa-user"></i>
                            <span>ব্যক্তিগত প্রোফাইল</span>
                        </a>
                    </li> --}}
                    <li class="{{ Request::is('dashboard/member/change/password') ? 'active' : '' }}">
                        <a href="{{ route('dashboard.member.getchangepassword') }}">
                            <i class="fa fa-fw fa-lock"></i>
                            <span>পাসওয়ার্ড পরিবর্তন</span>
                        </a>
                    </li>
                </ul>
                <!-- /.sidebar-menu -->
            </section>
            <!-- /.sidebar -->
        </aside>
        @endif

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            @if(config('adminlte.layout') == 'top-nav')
            <div class="container">
            @endif

            <!-- Content Header (Page header) -->
            <section class="content-header">
                @yield('content_header')
            </section>

            <!-- Main content -->
            <section class="content">

                @yield('content')

            </section>
            <!-- /.content -->
            @if(config('adminlte.layout') == 'top-nav')
            </div>
            <!-- /.container -->
            @endif
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
          <div class="pull-right hidden-xs">
            <b>Version</b> 1.0.28
          </div>
          <strong>Copyright © {{ date('Y') }}</strong> 
          All rights reserved.
        </footer>

    </div>
    <!-- ./wrapper -->
@stop

@section('adminlte_js')
    <script src="{{ asset('vendor/adminlte/dist/js/adminlte.min.js') }}"></script>
    <script type="text/javascript">
      $(function(){
       $('a[title]').tooltip();
       $('button[title]').tooltip();
      });
    </script>
    @stack('js')
    @yield('js')
@stop
