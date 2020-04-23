<div class="nav accordion" id="accordionSidenav">
    <div class="sidenav-menu-heading">
    Admin
    </div>
    <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse" data-target="#collapseDashboards" aria-expanded="false" aria-controls="collapseDashboards">
        <div class="nav-link-icon">
            <i data-feather="user"></i>
        </div>
        {{ trans('idioma.menu.usuarios') }}
        <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
    </a>
    <div class="collapse" id="collapseDashboards" data-parent="#accordionSidenav">
        <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPages">
            <a class="nav-link" href="{{ route('admin.usuario.index') }}">
                {{ trans('idioma.menu.verTodos') }}
            </a>
            <a class="nav-link" href="{{ route('admin.usuario.crear') }}">
                {{ trans('idioma.menu.registro') }}
            </a>
        </nav>
    </div>
</div>