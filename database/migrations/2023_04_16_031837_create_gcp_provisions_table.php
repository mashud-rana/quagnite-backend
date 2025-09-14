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
        Schema::create('gcp_provisions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('gcp_project_id')->constrained('gcp_projects');
            $table->foreignId('user_id')->constrained();
            $table->string('username');
            $table->string('password');
            $table->string('url');
            $table->dateTime('start_time');
            $table->dateTime('end_time');
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
        Schema::dropIfExists('gcp_provisions');
    }
};
