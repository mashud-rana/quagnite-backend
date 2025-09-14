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
        Schema::create('student_grades', function (Blueprint $table) {
            $table->id();

            $table->foreignId('student_id')->nullable()->constrained('users')->onDelete('set null');
            $table->foreignId('exam_id')->nullable()->constrained('exams')->onDelete('set null');
            $table->string('obtained_total_mark');
            $table->string('obtained_total_grade');
            $table->double('obtained_total_gpa');

            $table->unsignedBigInteger('created_by')->nullable()->constrained('users')->onDelete('set null');
            $table->unsignedBigInteger('updated_by')->nullable()->constrained('users')->onDelete('set null');
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
        Schema::dropIfExists('student_grades');
    }
};
