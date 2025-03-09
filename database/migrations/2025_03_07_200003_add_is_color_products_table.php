<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIsColorProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            // Add 'size' column
            $table->string('size')->nullable(); // Add after an existing column (optional)
            
            // Add 'slider_data' column (JSON type)
            $table->json('slider_data')->nullable()->after('size'); // Add after an existing column (optional)
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            // Drop the columns if the migration is rolled back
            $table->dropColumn('size');
            $table->dropColumn('slider_data');
        });
    }
}