<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        if (!Schema::hasTable('categorie')){
            Schema::create('categorie', function($table){
                $table->increments('id');
                $table->unsignedBigInteger('parent_id')->default(0);
                $table->unsignedInteger('lft')->nullable();
                $table->unsignedInteger('rgt')->nullable();
                $table->unsignedInteger('depth')->nullable();
                $table->string('name', 255);
                $table->string('slug', 255);
                $table->timestamps();
                $table->softDeletes();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
