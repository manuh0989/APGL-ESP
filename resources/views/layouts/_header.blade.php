<nav class="topnav navbar navbar-expand shadow navbar-light bg-white" id="sidenavAccordion">
    <a class="navbar-brand d-none d-sm-block" href="{{ route('index') }}">
        {{ config('app.name', 'Laravel') }}
    </a>
    <button class="btn btn-icon btn-transparent-dark order-1 order-lg-0 mr-lg-2" id="sidebarToggle" href="#"><i data-feather="menu"></i></button>
    <form class="form-inline mr-auto d-none d-lg-block">
        <input class="form-control form-control-solid mr-sm-2" type="search" placeholder="Search" aria-label="Search" />
    </form>
    <ul class="navbar-nav align-items-center ml-auto">
    	@guest
    		<li class="nav-item dropdown no-caret mr-3 ">
                <a  class ="btn "href="{{ route('login') }}">
                	{{ trans('idioma.login.login') }}
                </a>
            </li>
    	@endguest
        @auth
            <li class="nav-item dropdown no-caret mr-3 dropdown-notifications">
                <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownAlerts" href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="bell"></i>
                </a>
            </li>

            <li class="nav-item dropdown no-caret mr-3 dropdown-notifications">
                <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownMessages" href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="mail"></i>
                </a>
            </li>

            <li class="nav-item dropdown no-caret mr-3 dropdown-user">
                <a class="btn btn-icon btn-transparent-dark dropdown-toggle" id="navbarDropdownUserImage" href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="img-fluid" src="{{ asset('img/user.svg') }}"/>
                </a>
                <div class="dropdown-menu dropdown-menu-right border-0 shadow animated--fade-in-up" aria-labelledby="navbarDropdownUserImage">
                    <h6 class="dropdown-header d-flex align-items-center">
                        <img class="dropdown-user-img" src="{{ asset('img/user.svg') }}" />
                        <div class="dropdown-user-details">
                            <div class="dropdown-user-details-name">
                                {{ Auth::user()->nombreCompleto }}
                            </div>
                            <div class="dropdown-user-details-email">
                                {{ Auth::user()->email }}
                            </div>
                        </div>
                    </h6>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('index') }}">
                        <div class="dropdown-item-icon">
                            <i data-feather="settings"></i>
                        </div>
                        Account
                    </a>
                    <form action="{{ route('logout') }}" method="POST" id="frmLogout">
                        @csrf @method('POST')
                        <a class="dropdown-item" href="#" id="lnkLogout">
                            <div class="dropdown-item-icon"><i data-feather="log-out"></i></div>
                            Logout
                        </a>
                    </form>
                </div>
            </li>
        @endauth
    </ul>
</nav>
