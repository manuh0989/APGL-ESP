<div class="form-group">
	<label for="nombre">
		{{ trans('idioma.admin.usuarios.registro.nombre') }}
	</label>
	<input type="text" class="form-control  @error('nombre') is-invalid @enderror" name="nombre" id="nombre" 
	value="{{ old('nombre',$user->nombre) }}">
	@error('nombre')
		<span class="invalid-feedback" role="alert">
			<strong>{{ $message }}</strong>
		</span>
	@enderror

	<label for="apellidoPaterno">
		{{ trans('idioma.admin.usuarios.registro.apellidoPaterno') }}
	</label>
	<input type="text" class="form-control  @error('apellidoPaterno') is-invalid @enderror" name="apellidoPaterno" id="apellidoPaterno" 
	value="{{ old('apellidoPaterno',$user->apellidoPaterno) }}">
	@error('apellidoPaterno')
		<span class="invalid-feedback" role="alert">
			<strong>{{ $message }}</strong>
		</span>
	@enderror


	<label for="apellidoMaterno">
		{{ trans('idioma.admin.usuarios.registro.apellidoMaterno') }}
	</label>
	<input type="text" class="form-control  @error('apellidoMaterno') is-invalid @enderror" name="apellidoMaterno" id="apellidoMaterno" 
	value="{{ old('apellidoMaterno',$user->apellidoMaterno) }}">
	@error('apellidoMaterno')
		<span class="invalid-feedback" role="alert">
			<strong>{{ $message }}</strong>
		</span>
	@enderror
</div>

<div class="form-row">
	<div class="form-group col-md-6">
		<label for="username">
		{{ trans('idioma.admin.usuarios.registro.username') }}
		</label>
		<input type="text" class="form-control  @error('username') is-invalid @enderror" name="username" id="username" 
		value="{{ old('username',$user->username) }}">
		@error('username')
			<span class="invalid-feedback" role="alert">
				<strong>{{ $message }}</strong>
			</span>
		@enderror
	</div>
	<div class="form group col-md-6">
		<label for="email">
		{{ trans('idioma.admin.usuarios.registro.email') }}
		</label>
		<input type="text" class="form-control  @error('email') is-invalid @enderror" name="email" id="email" 
		value="{{ old('email',$user->email) }}">
		@error('email')
			<span class="invalid-feedback" role="alert">
				<strong>{{ $message }}</strong>
			</span>
		@enderror
	</div>
</div>

<div class="form-row">
	<div class="form-group col-md-6">
		<label for="password">
		{{ trans('idioma.admin.usuarios.registro.password') }}
		</label>
		<input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" 
		value="">
		@error('password')
			<span class="invalid-feedback" role="alert">
				<strong>{{ $message }}</strong>
			</span>
		@enderror
	</div>

	<div class="form group col-md-6">
		<label for="password_confirmation">
		{{ trans('idioma.admin.usuarios.registro.passwordConfirm') }}
		</label>
		<input type="password" class="form-control" name="password_confirmation" id="password_confirmation" 
		value="">
	</div>
</div>















	