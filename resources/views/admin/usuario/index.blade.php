@extends('layouts.app')
@section('content')
@card
	@slot('header', trans('idioma.admin.usuarios.vista.header'))
	<table id="tblUsuarios" class="table table-striped table-bordered table-sm" style="width:100%">
        <thead>
            <tr>
            	@foreach($encabezados as $key  => $header)
	                <th>
	                	{{ $header }}
	                </th>
	            @endforeach
            </tr>
        </thead>
        <tbody>
         	@foreach($usuarios as $key =>$usuario)
				<tr id="tr{{ $usuario->idUsuario  }}">
					<td>{{ $key+1 }}</td>
					<td>{{ $usuario->nombreCompleto }}</td>
					<td>{{ $usuario->username }}</td>
					<td>{{ $usuario->email }}</td>
					<td>{{ $usuario->created_at }}</td>
					<td align="center">
						@if($usuario->status)
							<div class="badge badge-warning badge-pill" id="badage-warning{{ $usuario->idUsuario }}">
								{{ trans('idioma.admin.usuarios.vista.bajaTemporal') }}
							</div>
						@endif
						@if(!$usuario->status)
							<div class="badge badge-success badge-pill" id="badage-success{{ $usuario->idUsuario }}">
								{{ trans('idioma.admin.usuarios.vista.activo') }}
							</div>
						@endif
					</td>

					<td>
						@if($usuario->status)
							<button  type="button" 
									class="btn btn-datatable btn-icon btn-transparent-dark mr-2 btnRestore" 
									id="" idUsuario="{{ $usuario->idUsuario }}"
									onclick="restore(this)">
								<i data-feather="play"></i>
							</button>
						@endif
						@if(!$usuario->status)
							<a href="{{ route('admin.usuario.editar',$usuario) }}" 
								class="btn btn-datatable btn-icon btn-transparent-dark mr-2"
								id="editIcon{{ $usuario->idUsuario }}"
							>
								<i data-feather="edit"></i>
							</a>
							<button  type="button"  
									mensaje="{{ trans('idioma.admin.usuarios.vista.bajaTemporal') }}"
									class="btn btn-datatable btn-icon btn-transparent-dark mr-2 btnPapelera" 
									idUsuario="{{ $usuario->idUsuario }}"
									onclick="papelera(this)">
								<i data-feather="trash-2" ></i>
							</button>
						@endif
					</td>
				</tr>
         	@endforeach
		</tbody>
        <tfoot>
            <tr>
                @foreach($encabezados as $key  => $header)
	                <th>
	                	{{ $header }}
	                </th>
	            @endforeach
            </tr>
        </tfoot>
    </table>
@endcard

<form action="{{ route('admin.usuario.papelera',':usuario') }}"  id="frmPapeleraUsuario">
	@csrf @method('PATCH')
</form>
<form action="{{ route('admin.usuario.restaurar',':usuario') }}"  id="frmRestoreUsuario" method="POST">
	@csrf @method('PATCH')
</form>
@endsection
