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
        Schema::create('course_sub_categories', function (Blueprint $table) {
            $table->id();
            $table->string('name')->index();
            $table->string('slug')->index();
            $table->tinyInteger('status')->default(1)->comment('Inactive = 0,Active = 1');
            $table->foreignId('course_category_id')->nullable()->constrained('course_categories')->onDelete('set null');
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
        Schema::dropIfExists('course_sub_categories');
    }
};
