<?php

namespace App\Http\Controllers;

use App\usuarioModel;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class usuarioController extends Controller
{
    public function index(Request $request, Response $response)
    {
        $usuarios = new usuarioModel;
        
        return view('usuario',['usuarios'=>$usuarios->list()]);

    }

 
    public function criar(Request $request, Response $response)
    {
 
        if(!empty($_POST)){
            $this->validate($request,[
                'title' => 'required',
                'details' => 'required'
                ]);

            $erro = "";

            $data = $_POST;
            if($nome = filter_var($data['nome_usuario'],FILTER_SANITIZE_STRING) == false)
                $erro = 1;
            if($login = filter_var($data['login'],FILTER_SANITIZE_STRING) == false)
                $erro = 1;
            if($email = filter_var($data['email'],FILTER_SANITIZE_EMAIL) == false)
                $erro = 1;

 
            if($erro = 1){
                return redirect()->route('/usuario/adicionar')
                ->with('error','Usuário nao pode ser cadastrado!');
            }
            $usuarios = new usuarioModel;
            $usuario = $usuarios->adicionar($data);

             if($usuario == true){
                return redirect()->route('/usuario/adicionar')
                ->with('success','Usuário cadastrado!');
             }else{
                return redirect()->route('/usuario/adicionar')
                ->with('error','Usuário nao pode ser cadastrado!');
             }


        }else{
            return view('formulario');
        }
    

    }

    public function editar($id = null)
    {
        
        $usuarios = new usuarioModel();

        if(!empty($id)){

            $usuario = $usuarios->usuario_id($id); 
            return view('formulario',['usuarios'=>$usuario]);

        }else{

        }
            
    }
}
