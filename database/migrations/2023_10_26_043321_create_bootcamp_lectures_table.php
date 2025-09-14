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
        Schema::create('bootcamp_lectures', function (Blueprint $table) {
            $table->id();
            $table->uuid();
            $table->foreignId('bootcamp_id')->constrained('bootcamps');
            $table->foreignId('bootcamp_lesson_id');
            $table->string('title');
            $table->longText('description')->nullable();
            $table->dateTime('start_time');
            $table->integer('duration');
            $table->string('password')->nullable();
            $table->string('meeting_id');
            $table->longText('start_url');
            $table->longText('join_url');
            $table->foreignId('created_by')->nullable()->constrained('users')->nullOnDelete();
            $table->foreignId('updated_by')->nullable()->constrained('users')->nullOnDelete();
            $table->softDeletes();
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
        Schema::dropIfExists('bootcamp_lectures');
    }
};
