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
        Schema::create('refunds', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->unique();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('beneficiary_id')->constrained();
            $table->foreignId('invoice_item_id')->constrained();
            $table->decimal('amount', 10, 2);
            $table->decimal('refund_amount', 10, 2)->nullable();
            $table->decimal('refund_percentage', 5, 2)->nullable();
            $table->tinyInteger('status')->default(PENDING);
            $table->text('reason')->nullable();
            $table->mediumText('note', 100)->nullable();
            $table->morphs('refundable'); 
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
        Schema::dropIfExists('refunds');
    }
};
