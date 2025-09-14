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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('trx_id')->unique();
            $table->foreignId('user_id')->constrained();
            $table->unsignedBigInteger('transactionable_id')->nullable();
            $table->string('transactionable_type')->nullable();
            $table->decimal('amount', 8, 2);
            $table->enum('type', [CREDIT, DEBIT])->default(CREDIT);
            $table->mediumText('narration')->nullable();
            $table->mediumText('reference')->nullable();
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
        Schema::dropIfExists('transactions');
    }
};
