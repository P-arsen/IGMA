<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('regions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_am')->index();
            $table->string('name_en');
            $table->string('name_ru');
            $table->string('slug');
            $table->integer('parent_id')->nullable()->references('id')->on('regions')->onDelete('CASCADE');
            $table->timestamps();
            $table->unique(['parent_id', 'slug']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('regions');
    }
}
