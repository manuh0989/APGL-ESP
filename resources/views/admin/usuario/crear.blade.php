@extends('layouts.app')

@section('content')

<div class="row">
	<div class="col-12">
		@card
			@slot('header', trans('idioma.admin.usuarios.registro.titulo'))
	    	<form action="" autocomplete="off" method="POST" id="frmGuardarUsuario">
	    		@csrf @method('POST')
	    		@include('admin.usuario._camposUsuario')
	    		<button class="btn btn-primary btn-submit" type="submit" id="btnGuardar">
					{{ trans('idioma.admin.usuarios.registro.btnGuardar') }}
	    		</button>
	    	</form>
		@endcard
	</div>
</div>
@endsection