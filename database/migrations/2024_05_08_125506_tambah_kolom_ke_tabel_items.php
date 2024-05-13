<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('items', function (Blueprint $table) {
            $table->decimal('weight', 8, 2)->nullable();
            $table->text('description')->nullable();
            $table->string('full_address')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('items', function (Blueprint $table) {
            $table->dropColumn('weight');
            $table->dropColumn('description');
            $table->dropColumn('full_address');
        });
    }
    
    
    
};
