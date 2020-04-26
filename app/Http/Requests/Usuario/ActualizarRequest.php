<?php

namespace App\Http\Requests\Usuario;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
class ActualizarRequest extends FormRequest
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
    public function rules(){
         return [
            'nombre'           =>['required','string','max:255']
            ,'apellidoPaterno' =>['required','string','max:255']
            ,'apellidoMaterno' =>['required','string','max:255']
            ,'username'        =>['required'
                                    ,Rule::unique('usuarios')->ignore($this->user,'idUsuario')
                                ]
            ,'DNI'        =>[
                                'required'
                                ,Rule::unique('usuarios')->ignore($this->user,'idUsuario')
                                ,'min:8'
                                ]
            ,'email'           =>['required'
                                    ,'email'
                                    ,'max:255'
                                    ,Rule::unique('usuarios')->ignore($this->user,'idUsuario')
                                ]
        ];
    }

    public function actualziarUsuario($user){
        DB::transaction(function () use ($user){
            $user->update([
                'nombre'           =>$this->nombre
                ,'apellidoPaterno' =>$this->apellidoPaterno
                ,'apellidoMaterno' =>$this->apellidoMaterno
                ,'DNI'             =>$this->DNI
                ,'username'        =>$this->username
                ,'email'           =>$this->email
            ]);
        });
    }
}
