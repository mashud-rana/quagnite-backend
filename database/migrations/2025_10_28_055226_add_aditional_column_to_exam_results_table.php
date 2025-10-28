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
        Schema::table('exam_results', function (Blueprint $table) {
            $table->after('is_passed', function($table){
                $table->json('results')->nullable(); // ✅ JSON colum
                $table->string('exam_time')->nullable();
                $table->string('exam_time_have')->nullable();
                $table->string('exam_complete_duration')->nullable();
            });
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('exam_results', function (Blueprint $table) {
            $table->dropColumn(['results', 'exam_complete_duration']);
        });
    }
};
