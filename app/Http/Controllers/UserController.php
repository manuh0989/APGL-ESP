<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\Usuario\{RegistroRequest,ActualizarRequest};
use App\User;
class UserController extends Controller
{

    protected $arrayDB=[
        'status'=>false
        ,'message'=>''
    ];
    /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response  
     * @param los paraemtros a la vista se envian desde el provider ViewServiceProvider admin.usuario.indexs
     */
    public function index(){
        return view('admin.usuario.index');
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $user= new User;
        return view('admin.usuario.crear',compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RegistroRequest $request)
    {
        $user= $request->guardarUsuario();

        return redirect()
            ->route('admin.usuario.index')
            ->with('message',trans('idioma.message.usuario.registro.ok'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('admin.usuario.editar'
            ,compact('user')
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ActualizarRequest $request, User $user)
    {
        $request->actualziarUsuario($user);

        return back()->with('message',trans('idioma.message.usuario.actualizar.ok'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  User User
     * @return \Illuminate\Http\Response
     */
    public function trash($idUsuario){
        $db=DB::transaction(function () use ($idUsuario){
            $user = User::where('idUsuario',$idUsuario);

            $user->delete();
            $this->arrayDB['status']  =true;    
            

            $this->arrayDB['message'] =trans('idioma.transaction.usuarios.update.mensaje'
                ,[
                    'nombreCompleto'=>'ejemplo'
                 ]
            );
            
        }); 
        return json_encode($this->arrayDB);  
    }

    public function restore($idUsuario){
        $db=DB::transaction(function () use ($idUsuario){
            $user = User::where('idUsuario',$idUsuario);

            $user->restore();
            $this->arrayDB['status']  =true;    
            $this->arrayDB['message'] =trans('idioma.transaction.usuarios.update.mensaje'
                ,[
                    'nombreCompleto'=>'ejemplo'
                 ]
            );
            
        }); 
        return back()->with('message',trans('idioma.message.usuario.restore.ok'));
    }
}
