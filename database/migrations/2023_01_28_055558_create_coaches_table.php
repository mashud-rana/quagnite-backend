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
        Schema::create('coaches', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->unique();
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('coach_category_id')->constrained('coach_categories');
            $table->bigInteger('country_id')->nullable();
            $table->bigInteger('province_id')->nullable();
            $table->bigInteger('state_id')->nullable();
            $table->string('professional_title')->nullable();
            $table->string('postal_code', 100)->nullable();
            $table->string('address')->nullable();
            $table->mediumText('about_me')->nullable();
            $table->mediumText('social_link')->nullable();
            $table->string('slug')->nullable();
            $table->tinyInteger('is_subscription_enable')->nullable()->default(0);
            $table->tinyInteger('coaching_available')->nullable()->default(0)->comment('1=yes, 0=no');
            $table->decimal('hourly_rate', 14, 2)->default(0)->nullable();
            $table->decimal('hourly_old_rate', 14, 2)->default(0)->nullable();
            $table->string('cv')->nullable();
            $table->tinyInteger('status')->default(1)->comment('1=Pending, 2=approved, 3=blocked');
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
        Schema::dropIfExists('coaches');
    }
};
