<?php

namespace App\Http\Requests\Usuario;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\User;
class RegistroRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nombre'           =>['required','string','max:255']
            ,'apellidoPaterno' =>['required','string','max:255']
            ,'apellidoMaterno' =>['required','string','max:255']
            ,'DNI'             =>['required','string','min:8','max:255','unique:usuarios,DNI']
            ,'username'        =>['required','unique:usuarios,username']
            ,'email'           =>['required','email','max:255','unique:usuarios,email']
            ,'password'        =>['required','min:8','confirmed']
        ];
    }

    public function guardarUsuario(){
        DB::transaction(function (){
            $user = User::create([
                'nombre'           =>$this->nombre
                ,'apellidoPaterno' =>$this->apellidoPaterno
                ,'apellidoMaterno' =>$this->apellidoMaterno
                ,'DNI'             =>$this->DNI
                ,'username'        =>$this->username
                ,'email'           =>$this->email
                ,'password'        =>Hash::make($this->password),
            ]);
            $user->save();
            
            event(new Registered($user));            
        });
    }
}
