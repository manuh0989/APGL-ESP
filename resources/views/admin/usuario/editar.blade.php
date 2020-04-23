@extends('layouts.app')

@section('content')

<div class="row">
	<div class="col-12">
		@card
			@slot('header', trans('idioma.admin.usuarios.registro.titulo'))
	    	<form action="" autocomplete="off" method="POST">
	    		@csrf @method('PUT')
	    		@include('admin.usuario._camposUsuario')
	    		<button class="btn btn-primary btn-submit" type="submit">
					{{ trans('idioma.admin.usuarios.registro.btnEditar') }}
	    		</button>
	    	</form>
		@endcard
	</div>
</div>

	
@endsection