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
        Schema::create('course_lectures', function (Blueprint $table) {
            $table->id();
            $table->uuid();
            $table->foreignId('course_id')->constrained('courses');
            $table->foreignId('course_lesson_id');
            $table->string('title');
            $table->tinyInteger('lecture_type')->default(2)->comment('1 = show, 2 = lock');
            $table->enum('lecture_format', GC::allowedLectureFormat());
            $table->string('video_path')->nullable();
            $table->string('vimeo_path')->nullable();
            $table->string('image_path')->nullable();
            $table->string('pdf_path')->nullable();
            $table->string('slide_path')->nullable();
            $table->string('audio_path')->nullable();
            $table->string('file_path')->nullable();
            $table->string('file_size')->nullable();
            $table->string('file_duration')->nullable();
            $table->string('file_duration_second')->nullable();
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
        Schema::dropIfExists('course_lectures');
    }
};
