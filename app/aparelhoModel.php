<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class aparelhoModel extends Model
{
    protected $table = 'aparelhos';

    public function list()
    {
        $aparelho = aparelhoModel::all();
        return $aparelho;
    }

    public function get_by_id($id)
    {
        $aparelho = aparelhoModel::find($id);
        return $aparelho;
    }

    public function search($data)
    {
        return aparelhoModel::where('usuario_nome','like',$data)->get();
    }

    public function create($data)
    {
        $created = aparelhoModel::save($data);

        return $created;
    }

    public function update($data)
    {

    }

    public function delete($id)
    {
        $aparelho = aparelhoModel::findOrFail($id);
        return $aparelho->delete();
    }
}
