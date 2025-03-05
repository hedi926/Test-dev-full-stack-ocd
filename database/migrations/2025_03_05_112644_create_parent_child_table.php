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
        Schema::create('parent_child', function (Blueprint $table) {
            $table->id();
            $table->foreignId('parent_id')->constrained('people')->onDelete('cascade');
            $table->foreignId('child_id')->constrained('people')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('parent_child');
    }

};
