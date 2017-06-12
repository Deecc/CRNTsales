<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCabinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cabins', function (Blueprint $table) {
            $table->increments('id');
            $table->string('position');
            $table->boolean('status')->default(false);
            $table->decimal('price',10,2)->nullable();

            $table->integer('client_id')->nullable()->unsigned()->index();
            $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade');

            $table->integer('user_id')->nullable()->unsigned()->index();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cabins');
    }
}
