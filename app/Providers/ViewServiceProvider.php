<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\User;
class ViewServiceProvider extends ServiceProvider{

    protected $icons=[];
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot(){

        View::composer('*',function($view){
           $view->with('menu',$this->menu());
        });

        View::composer('admin.usuario.index',function($view){
            $this->setIcons();
            $view
            ->with('icons',$this->getIcons('usuaros.index'))
            ->with('usuarios',$this->getUsuariosList())
            ->with('encabezados',trans('idioma.admin.usuarios.vista.headerTable'));
        });
    }


    protected function setIcons(){
        return [
            $this->icons=[
                'usuaros.index'=>[
                        'btn-add-user'=>[
                            'btn-color'     =>'btn-teal'
                            ,'data-feather' =>'user-plus'
                            ,'route'        =>'admin.usuario.crear'
                        ]
                    ]
                ]
            ];
    }

    protected function getIcons($vista){
        return ['icons'=>$this->icons[$vista]];
    }

    protected function getUsuariosList(){
        return $usuarios=User::withTrashed()
            ->whereNotIn('idUsuario',[auth()->user()->idUsuario])
            ->paginate(15);
    }

    protected function menu(){
        return [
            'admin'=>[
                'submenus'=>[
                    'usuarios'=>$this->dataMenu(
                        trans('idioma.menu.usuarios.usuarios')
                        ,'user'
                        ,true
                        ,'collapseUsuarios'
                        ,[
                         0=>[
                                'name'   =>trans('idioma.menu.usuarios.verTodos')
                                ,'route' =>route('admin.usuario.index')
                            ]
                        
                        ,1=>[
                                'name'   =>'prueba'
                                ,'route' =>'/'
                            ]
                        ])
                    ,'proveedores'=>$this->dataMenu(
                        trans('idioma.menu.proveedores.proveedores')
                        ,'square'
                        ,true
                        ,'collapseProveedor'
                        ,[
                         0=>[
                                'name'   =>trans('idioma.menu.proveedores.verTodos')
                                ,'route' =>route('admin.proveedor.index')
                            ]
                        ]
                        )
                    ,'categoria'=>$this->DataMenu(
                        trans('idioma.menu.categorias.categorias')
                        ,'book-open'
                        ,true
                        ,'collapseCategoria'
                        ,[
                         0=>[
                                'name'   =>trans('idioma.menu.categorias.verTodos')
                                ,'route' =>route('admin.categoria.index')
                            ]
                        ]
                    )
                    ,'clientes'=>$this->DataMenu(
                        trans('idioma.menu.clientes.clientes')
                        ,'coffee'
                        ,true
                        ,'collapseCliente'
                        ,[
                         0=>[
                                'name'   =>trans('idioma.menu.clientes.verTodos')
                                ,'route' =>route('admin.cliente.index')
                            ]
                        ]
                    )
                ]
            ]
        ];
    }

    protected function dataMenu($name='ejemplo',$dataFeather ='disc',$collapse=false,$idCollapse =null,$links       =[]){
        return [
            'name'=>$name
            ,'dataFeather' =>$dataFeather
            ,'collapse'    =>$collapse
            ,'idCollapse'  =>$idCollapse
            ,'links'       =>$links
        ];
    }
    protected function dataLinks($name=null,$route=null){

    }
}
