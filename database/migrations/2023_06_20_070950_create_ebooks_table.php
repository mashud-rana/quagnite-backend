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
        Schema::create('ebooks', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->unique();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('ebook_category_id')->nullable();
            $table->string('title', 255)->index();
            $table->string('author_name', 255)->index();
            $table->string('slug');
            $table->mediumText('details');
            $table->string('image')->nullable();
            $table->string('storage_type')->nullable();
            $table->decimal('price', 8, 2)->default(0.00)->nullable();
            $table->enum('ebook_type', GC::allowedEbookType())->default(GC::EBOOK_TYPE_PDF);
            $table->string('ebook_file')->nullable();
            $table->decimal('average_rating', 8, 2)->nullable();
            $table->tinyInteger('status')->default(DRAFT);
            $table->foreignId('reviewer_id')->nullable()->constrained('users')->nullOnDelete();
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
        Schema::dropIfExists('ebooks');
    }
};
