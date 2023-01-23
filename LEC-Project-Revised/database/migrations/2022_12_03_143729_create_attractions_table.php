<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttractionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attractions', function (Blueprint $table) {
            $table->id();
            $table->String('name');
            $table->String('location');
            $table->integer('class');
            $table->String('description');
            $table->String('access');
            $table->String('image1');
            $table->String('image2');
            $table->String('image3');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attractions');
    }
}
