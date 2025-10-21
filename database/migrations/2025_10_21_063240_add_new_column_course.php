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
        Schema::table('courses', function (Blueprint $table) {
            $table->mediumText('description')->nullable()->change();
            $table->foreignId('course_subcategory_id')->nullable()->after('course_category_id')->constrained('course_sub_categories')->onDelete('set null');
            $table->foreignId('course_announcement_id')->nullable()->after('course_subcategory_id')->constrained('announcements')->onDelete('set null');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->mediumText('description')->change();
            $table->dropForeign(['course_subcategory_id', 'course_announcement_id']);
            $table->dropColumn('course_subcategory_id');
            $table->dropColumn('course_announcement_id');
        });
    }
};
