<header id="page-topbar">
    <div class="navbar-header">
        <div class="container-fluid">
            <div class="float-right">
                <div class="dropdown d-inline-block d-lg-none ml-2">
                    <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="mdi mdi-magnify"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0" aria-labelledby="page-header-search-dropdown">
                        <form class="p-3">
                            <div class="form-group m-0">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
{{--                languages--}}
                <div class="dropdown d-none d-sm-inline-block">
                    <button type="button" class="btn header-item waves-effect" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="" src="http://www.all-flags-world.com/country-flag/Saudi-Arabia/flag-saudi-arabia-XL.jpg" alt="Header Language" height="16">
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <img src="{{asset('images/flags/us.jpg')}}" class="mr-1" height="12"> <span class="align-middle">English</span>
                        </a>
                    </div>
                </div>

                <div class="dropdown d-none d-lg-inline-block ml-1">
                    <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                        <i class="mdi mdi-fullscreen"></i>
                    </button>
                </div>

{{--                <div class="dropdown d-inline-block">--}}
{{--                    <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                        <i class="mdi mdi-bell-outline"></i>--}}
{{--                        <span class="badge badge-danger badge-pill">3</span>--}}
{{--                    </button>--}}
{{--                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0" aria-labelledby="page-header-notifications-dropdown">--}}
{{--                        <div class="p-3">--}}
{{--                            <div class="row align-items-center">--}}
{{--                                <div class="col">--}}
{{--                                    <h6 class="m-0"> Notifications </h6>--}}
{{--                                </div>--}}
{{--                                <div class="col-auto">--}}
{{--                                    <a href="#!" class="small"> View All</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div data-simplebar style="max-height: 230px;">--}}
{{--                            <a href="" class="text-reset notification-item">--}}
{{--                                <div class="media">--}}
{{--                                    <div class="avatar-xs mr-3">--}}
{{--                                        <span class="avatar-title bg-primary rounded-circle font-size-16">--}}
{{--                                            <i class="bx bx-cart"></i>--}}
{{--                                        </span>--}}
{{--                                    </div>--}}
{{--                                    <div class="media-body">--}}
{{--                                        <h6 class="mt-0 mb-1">Your order is placed</h6>--}}
{{--                                        <div class="font-size-12 text-muted">--}}
{{--                                            <p class="mb-1">If several languages coalesce the grammar</p>--}}
{{--                                            <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 3 min ago</p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                            <a href="" class="text-reset notification-item">--}}
{{--                                <div class="media">--}}
{{--                                    <img src="images/users/avatar-3.jpg" class="mr-3 rounded-circle avatar-xs" alt="user-pic">--}}
{{--                                    <div class="media-body">--}}
{{--                                        <h6 class="mt-0 mb-1">James Lemire</h6>--}}
{{--                                        <div class="font-size-12 text-muted">--}}
{{--                                            <p class="mb-1">It will seem like simplified English.</p>--}}
{{--                                            <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 1 hours ago</p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                            <a href="" class="text-reset notification-item">--}}
{{--                                <div class="media">--}}
{{--                                    <div class="avatar-xs mr-3">--}}
{{--                                        <span class="avatar-title bg-success rounded-circle font-size-16">--}}
{{--                                            <i class="bx bx-badge-check"></i>--}}
{{--                                        </span>--}}
{{--                                    </div>--}}
{{--                                    <div class="media-body">--}}
{{--                                        <h6 class="mt-0 mb-1">Your item is shipped</h6>--}}
{{--                                        <div class="font-size-12 text-muted">--}}
{{--                                            <p class="mb-1">If several languages coalesce the grammar</p>--}}
{{--                                            <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 3 min ago</p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </a>--}}

{{--                            <a href="" class="text-reset notification-item">--}}
{{--                                <div class="media">--}}
{{--                                    <img src="images/users/avatar-4.jpg" class="mr-3 rounded-circle avatar-xs" alt="user-pic">--}}
{{--                                    <div class="media-body">--}}
{{--                                        <h6 class="mt-0 mb-1">Salena Layfield</h6>--}}
{{--                                        <div class="font-size-12 text-muted">--}}
{{--                                            <p class="mb-1">As a skeptical Cambridge friend of mine occidental.</p>--}}
{{--                                            <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 1 hours ago</p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                        <div class="p-2 border-top">--}}
{{--                            <a class="btn btn-sm btn-link font-size-14 btn-block text-center" href="javascript:void(0)">--}}
{{--                                <i class="mdi mdi-arrow-right-circle mr-1"></i> View More..--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

                <div class="dropdown d-inline-block">
                    <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="rounded-circle header-profile-user" src="{{auth()->user()->avatar}}" alt="Header Avatar">
                        <span class="d-none d-xl-inline-block ml-1">{{auth()->user()->name}}</span>
                        <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <!-- item-->
                        <a class="dropdown-item" href="{{route('admin.profile')}}"><i class="bx bx-user font-size-16 align-middle mr-1"></i> حسابي</a>
{{--                        <a class="dropdown-item" href="#"><i class="bx bx-wallet font-size-16 align-middle mr-1"></i> المحفظة</a>--}}
{{--                        <a class="dropdown-item d-block" href="#"><span class="badge badge-success float-right">11</span><i class="bx bx-wrench font-size-16 align-middle mr-1"></i> الإعدادت</a>--}}
                        <div class="dropdown-divider"></div>
                        <a href="{{ route('admin.logout') }}" class="dropdown-item text-danger" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <i class="bx bx-power-off font-size-16 align-middle mr-1 text-danger"></i>
                            خروج
                        </a>
                        <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>

                    </div>
                </div>

{{--                <div class="dropdown d-inline-block">--}}
{{--                    <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">--}}
{{--                        <i class="mdi mdi-settings-outline"></i>--}}
{{--                    </button>--}}
{{--                </div>--}}

            </div>
            <div>
                <!-- LOGO -->
                <div class="navbar-brand-box">
                    <a href="{{route('admin.home')}}" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="{{asset('media/images/logo.jpeg')}}" alt="" height="40">
                        </span>
                        <span class="logo-lg">
                            <img src="{{asset('media/images/logo.jpeg')}}" alt="" height="50">
                        </span>
                    </a>

                    <a href="{{route('admin.home')}}" class="logo logo-light">
                        <span class="logo-sm">
                            <img src="{{asset('media/images/logo.jpeg')}}" alt="" height="50">
                        </span>
                        <span class="logo-lg">
                            <img src="{{asset('media/images/logo.jpeg')}}" alt="" height="50">
                        </span>
                    </a>
                </div>

                <button type="button" class="btn btn-sm px-3 font-size-16 header-item toggle-btn waves-effect" id="vertical-menu-btn">
                    <i class="fa fa-fw fa-bars"></i>
                </button>

                <!-- App Search-->
                <form class="app-search d-none d-lg-inline-block">
                    <div class="position-relative">
                        <input type="text" class="form-control" placeholder="Search...">
                        <span class="bx bx-search-alt"></span>
                    </div>
                </form>

            </div>

        </div>
    </div>
</header>
