<?php

use App\Constants\GlobalConstant;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enroll_apis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('api_plan_id')->constrained('api_plans');
            $table->enum('plan_type', [API_MONTHLY, API_YEARLY]);
            $table->tinyInteger('status')->default(ACTIVE);
            $table->string('amount');
            $table->dateTime('started_at')->nullable();
            $table->dateTime('valid_till')->nullable();
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
        Schema::dropIfExists('enroll_apis');
    }
};
