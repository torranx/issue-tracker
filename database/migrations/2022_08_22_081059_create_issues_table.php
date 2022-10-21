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
            $table->enum('status', ['to do', 'in progress', 'for review', 'for testing', 'done'])->default('to do');
            $table->foreignId('project_id')->constrained()->onDelete('cascade');
            $table->unsignedBigInteger('author_user_id');
            $table->foreign('author_user_id')->references('id')->on('users');
            $table->unsignedBigInteger('assigned_user_id');
            $table->foreign('assigned_user_id')->references('id')->on('users');
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
