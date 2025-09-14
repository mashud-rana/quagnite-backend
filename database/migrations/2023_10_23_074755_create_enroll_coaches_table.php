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
        Schema::create('enroll_coaches', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->foreignId('student_id')->constrained('users');
            $table->foreignId('coach_id')->constrained('users');
            $table->foreignId('coaching_slot_id')->constrained();
            $table->dateTime('start_time');
            $table->integer('duration')->nullable();
            $table->string('password')->nullable();
            $table->string('meeting_id')->nullable();
            $table->longText('start_url')->nullable();
            $table->longText('join_url')->nullable();
            $table->tinyInteger('status')->default(PENDING);
            $table->boolean('coach_join')->default(false);
            $table->boolean('student_join')->default(false);
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
        Schema::dropIfExists('enroll_coaches');
    }
};
