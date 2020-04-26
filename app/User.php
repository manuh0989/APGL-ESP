<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

use App\Notifications\EmailVerificacion;
class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;
    use SoftDeletes;

    protected $table      ="usuarios";
    protected $primaryKey ="idUsuario";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre'
        ,'confirmado'
        ,'username'
        ,'apellidoPaterno'
        ,'apellidoMaterno'
        ,'DNI'
        ,'email'
        ,'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime'
    ];

     public function sendEmailVerificationNotification(){
        $this->notify(new EmailVerificacion($this->idUsuario));
    }

    public function getNombreCompletoAttribute(){
        return "{$this->nombre} {$this->apellidoPaterno} {$this->apellidoMaterno}";
    }

    public function getStatusAttribute(){
        return $this->deleted_at  != null ? true : false;
    }
}
