<?php
return [
	'message'=>[
		'usuario'=>[
			'registro'=>[
				'ok'=>'Usuario guardado correctamente'
			]
			,'actualizar'=>[
				'ok'=>'Usuario modificado correctamente'
			]
			,'restore'=>[
				'ok'=>'Usuario restaurado correctamente'
			]
		]
	]
	,'transaction'=>[
		'usuarios'=>[
			'update'=>[
				'mensaje'=>'Usuario :nombreCompleto modificado exitosamente'
			]
		]
	]
	,'menu'=>[
		'usuarios'=>'Usuarios'
		,'verTodos'=>'Ver todos'
		,'registro'   =>'Registrar usuario'
	]
	,'login'=>[
		'login'              =>'Inicio de sesión'
		,'registro'          =>'Registrar usuario'
		,'bienvenida'        =>'Bienvenid@'
		,'emailAdress'       =>'Correo electronico'
		,'password'          =>'Contraseña'
		,'confirmPassword'   =>'Confirmar contraseña'
		,'olvidoPassword'    =>'¿Olvidó su contraseña?'
		,'recuperarPassword' =>'Recuperar contraseña'
		,'sendPassword'      =>'Enviar correo'
		,'resetPassword'     =>'Reinicar contraseña'
		,'verifyemail'		 =>'Verifica tu correo electronico'
	]
	,'admin'=>[
		'usuarios'=>[
			'vista'=>[
				'header'      =>'Usuarios'
				,'activo'       =>'Activo'
				,'bajaTemporal' =>'Baja'
				,'headerTable'=>[
					'id'            =>'#'
					,'nombre'       =>'Nombre'
					,'username'     =>'Usuario'
					,'email'        =>'Correo'
					,'created_at'   =>'Fecha registro'
					,'status'       =>'Status'
					,'actions'      =>'Acciones'
					]
			]
			,'registro'=>[
				'titulo'           =>'Registro de usuarios'
				,'nombre'          =>'Nombre:'
				,'apellidoPaterno' =>'Apellido paterno:'
				,'apellidoMaterno' =>'Apellido materno:'
				,'username'        =>'Usuario:'
				,'email'           =>'Correo:'
				,'password'        =>'Contraseña:'
				,'passwordConfirm' =>'Confirmar contraseña:'
				,'rememberToken'   =>'Recordar contraseña:'
				,'btnGuardar'      =>'Guardar'
				,'btnEditar'       =>'Editar'
			]
		]
	]
	,'email'=>[
		'verificacionEmail'=>[
			'header'        =>'header prueba'
			,'btnVerificar' =>'Verificar correo'
		]
	]

];