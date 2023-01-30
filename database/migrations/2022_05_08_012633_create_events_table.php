<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('user_id');

            $table->string('tipo');
            $table->string('accion');
            $table->text('nota');
            $table->string('metodo');
            $table->decimal('cantidad', 20, 6);

            $table->string('cuentaBeneficiario')->nullable();
            $table->string('bancoBeneficiario')->nullable();
            $table->string('tipoCuenta')->nullable();
            $table->string('telefonoBeneficiario')->nullable();

            $table->integer('status')->default(1);
            
            $table->foreign('user_id')
              ->references('id')
              ->on('users')
              ->onDelete('cascade');
                        
            $table->timestamps();


            
            //$table->decimal('recaudation', 20, 6)->default(0,00);
            //$table->boolean('is_approved')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
