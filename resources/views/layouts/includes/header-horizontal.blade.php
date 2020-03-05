<header class="topnavbar-wrapper">
    <!-- START Top Navbar-->
    <nav class="navbar topnavbar navbar-expand-lg navbar-light">
        <!-- START navbar header-->
        <div class="navbar-header">
            <a class="navbar-brand" href="#/">
                <div class="brand-logo">
                    <img class="img-fluid" src="/img/logo.png" alt="App Logo" />
                </div>
                <div class="brand-logo-collapsed">
                    <img class="img-fluid" src="/img/logo-single.png" alt="App Logo" />
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#topnavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <!-- END navbar header-->

        <!-- START Nav wrapper-->
        <div class="navbar-collapse collapse" id="topnavbar">

            <!-- START Left navbar-->
            <ul class="nav navbar-nav mr-auto flex-column flex-lg-row">

                {{-- Loop over a few elements for demo only --}}
                @foreach (array_slice($sidebarMenu, 0, 4) as $item)

                    {{-- Headings not supported --}}
                    @if (isset($item['heading']))
                        @continue

                    {{-- Handle Submenus --}}
                    @elseif (isset($item['submenu']))
                        <li class="nav-item dropdown {{ \Request::is($item['route'].'*') ? ' active' : '' }}">
                            <div class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
                                {{$item['text']}}
                            </div>
                            <div class="dropdown-menu animated fadeIn">

                                @foreach ($item['submenu'] as $subitem)
                                    {{-- Bootstrap dropdown does NOT support more than 1 level deep --}}
                                    @if (isset($subitem['submenu']))
                                        @continue
                                    @else
                                        <a class="dropdown-item {{ \Request::is($subitem['route'].'*') ? 'active' : '' }}" href="{{ url($subitem['route']) }}">
                                            {{$subitem['text']}}
                                        </a>
                                    @endif
                                @endforeach

                            </div>
                        </li>

                    {{-- Default to Single item --}}
                    @else
                        <li class="nav-item {{ \Request::is($item['route']) ? ' active' : '' }}">
                            <a class="nav-link" href="{{ url($item['route']) }}">{{$item['text']}}</a>
                        </li>
                    @endif

                @endforeach

            </ul>
            <!-- END Left navbar-->

            <!-- START Right Navbar-->
            <ul class="navbar-nav flex-row">
                <!-- START lock screen-->
                <li class="nav-item">
                    <a class="nav-link" href="/lock" title="Lock screen">
                        <em class="icon-lock"></em>
                    </a>
                </li>
                <!-- END lock screen-->
                <!-- Search icon-->
                <li class="nav-item">
                    <a class="nav-link" href="#" data-search-open>
                        <em class="icon-magnifier"></em>
                    </a>
                </li>
                <!-- Fullscreen (only desktops)-->
                <li class="nav-item d-none d-md-block">
                    <a class="nav-link" href="#" data-toggle-fullscreen>
                        <em class="fa fa-expand"></em>
                    </a>
                </li>
                <!-- START Alert menu-->
                <li class="nav-item dropdown dropdown-list">
                    <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-toggle="dropdown">
                        <em class="icon-bell"></em>
                        <span class="badge badge-danger">11</span>
                    </a>
                    <!-- START Dropdown menu-->
                    <div class="dropdown-menu dropdown-menu-right animated flipInX">
                        <div class="dropdown-item">
                            <!-- START list group-->
                            <div class="list-group">
                                <!-- list item-->
                                <div class="list-group-item list-group-item-action">
                                    <div class="media">
                                        <div class="align-self-start mr-2">
                                            <em class="fab fa-twitter fa-2x text-info"></em>
                                        </div>
                                        <div class="media-body">
                                            <p class="m-0">New followers</p>
                                            <p class="m-0 text-muted text-sm">1 new follower</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- list item-->
                                <div class="list-group-item list-group-item-action">
                                    <div class="media">
                                        <div class="align-self-start mr-2">
                                            <em class="fa fa-envelope fa-2x text-warning"></em>
                                        </div>
                                        <div class="media-body">
                                            <p class="m-0">New e-mails</p>
                                            <p class="m-0 text-muted text-sm">You have 10 new emails</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- list item-->
                                <div class="list-group-item list-group-item-action">
                                    <div class="media">
                                        <div class="align-self-start mr-2">
                                            <em class="fa fa-tasks fa-2x text-success"></em>
                                        </div>
                                        <div class="media-body">
                                            <p class="m-0">Pending Tasks</p>
                                            <p class="m-0 text-muted text-sm">11 pending task</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- last list item-->
                                <div class="list-group-item list-group-item-action">
                                    <span class="d-flex align-items-center">
                                        <span class="text-sm">More notifications</span>
                                        <span class="badge badge-danger ml-auto">14</span>
                                    </span>
                                </div>
                            </div>
                            <!-- END list group-->
                        </div>
                    </div>
                    <!-- END Dropdown menu-->
                </li>
                <!-- END Alert menu-->
                <!-- START Offsidebar button-->
                <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle-state="offsidebar-open" data-no-persist="true">
                        <em class="icon-notebook"></em>
                    </a>
                </li>
                <!-- END Offsidebar menu-->
            </ul>
            <!-- END Right Navbar-->
        </div>
        <!-- END Nav wrapper-->

        <!-- START Search form-->
        <form class="navbar-form" role="search" action="#">
            <div class="form-group">
                <input class="form-control" type="text" placeholder="Type and hit enter ..." />
                <div class="fa fa-times navbar-form-close" data-search-dismiss></div>
            </div>
            <button class="d-none" type="submit">Submit</button>
        </form>
        <!-- END Search form-->
    </nav>
    <!-- END Top Navbar-->
</header>
