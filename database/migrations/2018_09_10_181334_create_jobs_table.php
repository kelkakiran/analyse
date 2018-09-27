<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('recruiter_id');
            $table->string('title');
            $table->text('description');
            $table->string('position');
            $table->string('location');
            $table->string('min_salary');
            $table->string('max_salary');
            $table->string('website');
            $table->string('email');
            $table->boolean('status')->default(true);
            $table->timestamps();

            $table->foreign('recruiter_id')->references('id')->on('recruiters');

            $table->unique(['recruiter_id', 'title']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobs');
    }
}
