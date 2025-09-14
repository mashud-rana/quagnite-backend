<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->unique();
            $table->string('first_name')->index()->nullable();
            $table->string('middle_name')->index()->nullable();
            $table->string('last_name')->index()->nullable();
            $table->string('email')->index()->unique();
            $table->string('phone', 25)->index()->nullable();
            $table->string('date_of_birth')->nullable();
            $table->string('password');
            $table->enum('provider', AUTH_PROVIDER_ARRAY)->nullable();
            $table->string('provider_id')->nullable();
            $table->string('avatar')->nullable();
            $table->string('storage_type')->nullable();
            $table->string('user_type', 50)->index();
            $table->string('gender')->nullable();
            $table->string('verification_token')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->integer('agreed_terms');
            $table->decimal('balance', 8, 2)->default(0);
            $table->rememberToken();
            $table->tinyInteger('status')->default(INACTIVE);
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
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
        Schema::dropIfExists('users');
    }
}
