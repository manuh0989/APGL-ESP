<?php

use Illuminate\Database\Seeder;
use App\User;
class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'nombre'           =>'Ignacio Manuel'
            ,'apellidoPaterno' =>'Sánchez'
            ,'apellidoMaterno' =>'Neri'
            ,'DNI'             =>'SANI8909HDF11'
            ,'username'        =>'manuh0989'
            ,'email'           =>'manuh0989@gmail.com'
            ,'password'        =>Hash::make('0989nacho')
        ]);

        factory(User::class,40)->create();
    }
}
