<?php

use App\Constants\GlobalConstant;
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
        Schema::create('bootcamps', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->unique();
            $table->string('title')->index();
            $table->string('subtitle')->nullable();
            $table->string('slug')->index();
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('bootcamp_category_id')->nullable();
            $table->foreignId('course_language_id')->nullable();
            $table->foreignId('difficulty_level_id')->nullable();
            $table->mediumText('description');
            $table->mediumText('feature_details')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->decimal('price', 8, 2)->default(0.00)->nullable();
            $table->decimal('old_price', 8, 2)->default(0.00)->nullable();
            $table->string('learner_accessibility', 50)->comment('paid,free')->nullable();
            $table->string('image')->nullable();
            $table->string('storage_type')->nullable();
            $table->string('video')->nullable();
            $table->string('video_link')->nullable();
            $table->tinyInteger('intro_video_check')->nullable()->comment('Normal Video = 1, Video Link = 2 ');
            $table->integer('access_period')->nullable()->default(0);
            $table->tinyInteger('status')->default(PENDING);
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
        Schema::dropIfExists('bootcamps');
    }
};
