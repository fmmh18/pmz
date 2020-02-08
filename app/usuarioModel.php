<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usuarioModel extends Model
{
    protected $table = 'usuarios';
    protected $primaryKey = 'id_usuario';
 
    public function list()
    {
        $usuario = usuarioModel::all();

        return ($usuario);
    }

    public function usuario_id($id)
    {
        $usuario = usuarioModel::find($id);

        return $usuario;
    }

    public function adicionar($data)
    { 
        $usuario = $data;
        return $usuario->save();
        
    }
    
}
