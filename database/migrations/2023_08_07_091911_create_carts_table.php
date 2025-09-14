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
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('course_id')->nullable()->constrained();
            $table->foreignId('bootcamp_id')->nullable()->constrained();
            $table->foreignId('playground_id')->nullable()->constrained();
            $table->foreignId('ebook_id')->nullable()->constrained();
            $table->foreignId('coaching_slot_id')->nullable()->constrained();
            $table->text('consultation_details')->nullable();
            $table->date('consultation_date')->nullable();
            $table->foreignId('coupon_id')->nullable()->constrained();
            $table->decimal('main_price', 8, 2)->default(0);
            $table->decimal('price', 8, 2)->default(0);
            $table->decimal('discount', 8, 2)->default(0);
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
        Schema::dropIfExists('carts');
    }
};
