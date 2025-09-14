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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->string('ticket_id')->unique()->nullable();
            $table->foreignId('user_id')->nullable()->constrained('users');
            $table->foreignId('category_id')->nullable()->constrained('faq_topics');
            $table->foreignId('assigned_by')->nullable()->constrained('users');
            $table->string('subject')->nullable();
            $table->string('slug')->unique()->nullable();
            $table->text('message');
            $table->tinyInteger('status')->default(OPEN);
            $table->unsignedBigInteger('created_by')->nullable()->constrained('users');
            $table->unsignedBigInteger('updated_by')->nullable()->constrained('users');
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
        Schema::dropIfExists('tickets');
    }
};
