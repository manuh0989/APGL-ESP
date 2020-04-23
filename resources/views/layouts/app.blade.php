<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <meta name="description" content="" />
        <meta name="author" content="" />

        <title>{{ config('app.name', 'Laravel') }}</title>

        <link rel="stylesheet" href="{{ asset('css/styles.css') }}"  />

        <link rel="stylesheet" href="{{ asset('css/bootstrap/dataTables.bootstrap4.min.css') }}">

        <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/favicon.png') }}" />

        <script data-search-pseudo-elements defer src="{{ asset('js/font-awesome/all.min.js') }}" crossorigin="anonymous"></script>

        <script src="{{ asset('js/feather-icons/feather.min.js') }}" crossorigin="anonymous"></script>

    </head>
    <body class="nav-fixed">

       @include('layouts._header');
    
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sidenav shadow-right sidenav-light">
                    <div class="sidenav-menu">
                        @include('layouts._menu')
                    </div>
                    <div class="sidenav-footer">
                        <div class="sidenav-footer-content">
                            @auth
                                <div class="sidenav-footer-subtitle">
                                    {{ trans('idioma.login.bienvenida') }}
                                </div>
                                <div class="sidenav-footer-title">
                                    {{ Auth::user()->nombreCompleto }}
                                </div>
                            @endauth
                        </div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="page-header pb-10 ">
                        <div class="row">
                            <div class="col-lg-12">
                                @include('compartidos._message')
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid mt-n10">
                        <div class="row">
                            <div class="col-lg-12">
                                @yield('content')
                            </div>
                        </div>
                    </div>
                </main>
                @include('compartidos._footer')
            </div>
        </div>

        <script src="{{ asset('js/jquery/jquery.js') }}" crossorigin="anonymous"></script>
        
        <script src="{{ asset('js/bootstrap/bootstrap.bundle.min.js') }}"></script>
        
        <script src="{{ asset('js/chart/Chart.min.js') }}" crossorigin="anonymous"></script>
        
        <script src="{{ asset('js/dataTable/jquery.dataTables.min.js') }}" crossorigin="anonymous"></script>
        <script src=" {{ asset('js/dataTable/dataTables.bootstrap4.min.js') }}" crossorigin="anonymous"></script>
        
        <script src="{{ asset('js/scripts.js') }}"></script>
        <script src="{{ asset('js/usuarios.js') }}"></script>
    </body>
</html>
