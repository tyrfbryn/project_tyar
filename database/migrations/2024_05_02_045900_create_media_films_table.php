<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMediaFilmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('media_films', function (Blueprint $table) {
            $table->id();
            $table->foreignId('film_id')->insigned()->onDelete('cascade');
            $table->boolean('tipeMedia')->default(0);
            $table->string('title')->default('_');
            $table->string('urlMedia')->nullable();
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
        Schema::dropIfExists('media_films');
    }
}
