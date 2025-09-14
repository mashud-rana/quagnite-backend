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
        Schema::create('playground_configurations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('playground_id')->constrained('playgrounds');
            $table->string('ami')->nullable();
            $table->string('instance_type')->nullable();
            $table->string('security_group')->nullable();
            $table->string('ssh_key_name')->nullable();
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
        Schema::dropIfExists('playground_configurations');
    }
};
