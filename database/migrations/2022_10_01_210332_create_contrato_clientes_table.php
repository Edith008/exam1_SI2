<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contrato_clientes', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('administrativo_id')->unsigned();
            $table->bigInteger('cliente_id')->unsigned() ;
            $table->string('ci');
            $table->string('telefono')->nullable();
            $table->bigInteger('ciudad_id')->unsigned() ;
            $table->bigInteger('plan_id')->unsigned() ;
            $table->bigInteger('router_id')->unsigned() ;
            $table->string('direccion');

            $table->foreign('administrativo_id')
                    ->references('id')->on('administrativos')
                    ->onDelete('cascade');
            
            $table->foreign('cliente_id')
                    ->references('id')->on('clientes')
                    ->onDelete('cascade');  
            
            $table->foreign('ciudad_id')
                    ->references('id')->on('ciudads')
                    ->onDelete('cascade');
            
            $table->foreign('plan_id')
                    ->references('id')->on('plans')
                    ->onDelete('cascade');

            $table->foreign('router_id')
                    ->references('id')->on('routers')
                    ->onDelete('cascade');

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
        Schema::dropIfExists('contrato_clientes');
    }
};
