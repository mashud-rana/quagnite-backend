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
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->id();
            $table->string('title')->index();
            $table->integer('course_limit')->default(0);
            $table->boolean('unlimited_course')->default(false);
            $table->integer('bootcamp_limit')->default(0);
            $table->boolean('unlimited_bootcamp')->default(false);
            $table->integer('ebook_limit')->default(0);
            $table->boolean('unlimited_ebook')->default(false);
            $table->integer('coaching_limit')->default(0);
            $table->boolean('unlimited_coaching')->default(false);
            $table->integer('exam_limit')->default(0);
            $table->boolean('unlimited_exam')->default(false);
            $table->integer('playground_limit')->default(0);
            $table->boolean('unlimited_playground')->default(false);
            $table->enum('type', [MONTHLY, YEARLY])->default(MONTHLY);
            $table->decimal('price', 8, 2);
            $table->decimal('old_price', 8, 2)->nullable();
            // $table->boolean('is_discount')->default(0);
            // $table->string('discount_type', 50)->index()->nullable();
            // $table->string('discount', 20)->nullable();
            $table->mediumText('footer_text')->nullable();
            $table->longText('desc')->nullable();
            $table->tinyInteger('status')->default(ACTIVE);
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
        Schema::dropIfExists('subscriptions');
    }
};
