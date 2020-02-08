<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Usuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->mediumInteger('id_usuario')->autoIncrement();
            $table->string('nome_usuario',60); 
            $table->string('login',12); 
            $table->string('email',60); 
            $table->string('senha',45); 
            $table->mediumInteger('tempo_expiracao_senha'); 
            $table->string('cod_autorizacao',1); 
            $table->string('status_usuario',1);
            $table->mediumInteger('cod_pessoa');  
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
