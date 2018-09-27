<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SkillsSetupTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('technical_skills', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->text('description')->nullable();
            $table->timestamps();
        });
        
        Schema::create('seeker_skills', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('seeker_id');
            $table->unsignedInteger('skill_id');
            $table->timestamps();

            $table->foreign('seeker_id')->references('id')->on('seekers');

            $table->foreign('skill_id')->references('id')->on('technical_skills')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->unique(['seeker_id', 'skill_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('technical_skills');
        Schema::dropIfExists('seeker_skills');
    }
}
