@foreach($menu as $key =>$subMenus) 
    <div class="nav accordion" id="accordionSidenav">
        
        <div class="sidenav-menu-heading">{{ $key }}</div>

        @foreach($subMenus as $keySubMenus => $subMenu)
            @foreach($subMenu as $keySubMenu =>$datos)
                <a class="nav-link collapsed" href="javascript:void(0);" 
                    data-toggle="collapse" 
                    data-target="#{{ $datos['idCollapse'] }}" 
                    aria-expanded="false" 
                    aria-controls="{{ $datos['idCollapse'] }}">
                    <div class="nav-link-icon">
                        <i data-feather="{{ $datos['dataFeather'] }}"></i>
                    </div>
                    
                    {{ $datos['name']}}

                    @if($datos['collapse'])
                        <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    @endif
                </a>
                @if($datos['collapse'])
                    <div class="collapse" id="{{ $datos['idCollapse'] }}" data-parent="#accordionSidenav">
                        <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPages">
                            @foreach($datos['links'] as $keyLinks =>$link)
                                <a class="nav-link" href="{{ $link['route'] }}" id="{{ $keyLinks }}">
                                    {{ $link['name'] }}
                                </a>
                            @endforeach
                        </nav>
                    </div>
                @endif
            @endforeach
        @endforeach
    </div>
@endforeach
