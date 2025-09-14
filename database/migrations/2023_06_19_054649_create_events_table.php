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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->string('title')->index();
            $table->string('slug')->unique();
            $table->datetime('event_start')->index();
            $table->datetime('event_end')->index();
            $table->string('image')->nullable();
            $table->string('storage_type')->nullable();
            $table->text('description')->nullable();
            $table->string('location')->nullable();
            $table->tinyInteger('event_type')->comment('1=online, 0=offline')->default(1);
            $table->tinyInteger('status')->default(PENDING)->index();
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
        Schema::dropIfExists('events');
    }
};
