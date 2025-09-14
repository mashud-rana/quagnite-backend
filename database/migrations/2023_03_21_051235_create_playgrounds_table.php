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
        Schema::create('playgrounds', function (Blueprint $table) {
            $table->id();
            $table->foreignId('playground_category_id')->nullable()->constrained('playground_categories');
            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->string('type')->nullable();
            $table->string('image')->nullable();
            $table->string('storage_type')->nullable();
            $table->text('overview')->nullable();
            $table->text('instruction')->nullable();
            $table->string('lab_url')->nullable();
            $table->tinyInteger('status')->default(INACTIVE);
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
        Schema::dropIfExists('playgrounds');
    }
};
