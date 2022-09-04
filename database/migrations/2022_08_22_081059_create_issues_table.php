<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('issues', function (Blueprint $table) {
            $table->id();
            $table->string('title')->trim();
            $table->string('description');
            $table->foreignId('user_id')->constrained(); // created by/reporter
            $table->foreignId('project_id')->constrained()->onDelete('cascade');
            $table->string('assigned_to');
            $table->enum('status', ['to do', 'in progress', 'for review', 'for testing', 'done'])->default('to do');
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
        Schema::dropIfExists('issues');
    }
};
