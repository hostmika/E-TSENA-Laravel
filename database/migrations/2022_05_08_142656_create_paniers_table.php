<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaniersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paniers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('produits_id');
            $table->unsignedBigInteger('users_id');
            $table->string('nom');
            $table->float('prix');
            $table->integer('quantite');
            $table->string('image');
            $table->timestamps();

            $table->foreign('produits_id')->references('id')->on('produits')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('users_id')->references('id')->on('users')->onDelete('restrict')->onUpdate('restrict');

            Schema::enableForeignKeyConstraints();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paniers');
    }
}
