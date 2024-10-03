<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new  class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('subcategories', function (Blueprint $table) {
            $table->unsignedBigInteger('parent_category_id')->nullable()->after('id');
            // If you want to add a foreign key constraint, uncomment the next line
            // $table->foreign('parent_category_id')->references('id')->on('categories');
        });
    }

    public function down()
    {
        Schema::table('subcategories', function (Blueprint $table) {
            $table->dropColumn('parent_category_id');
            // If you added a foreign key constraint, uncomment the next line
            // $table->dropForeign(['parent_category_id']);
        });
    }
};
