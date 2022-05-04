<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produits', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->unsignedBigInteger('categories_id');
            $table->float('prix');
            $table->text('description');
            $table->string('poids')->nullable();
            $table->string('image');
            $table->timestamps();

            $table->foreign('categories_id')->references('id')->on('categories')->onDelete('restrict')->onUpdate('restrict');

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
        //$table->dropForeign(['user_id']);
        //Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('produits');

    }
}
