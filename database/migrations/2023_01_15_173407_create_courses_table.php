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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->foreignId('category_id')->constrained()->onDelete('cascade');
            $table->string('level')->nullable();
            $table->text('details')->nullable();
            $table->string('short_description')->nullable();
            $table->boolean('is_popular')->default(0)->nullable();
            $table->string('source')->nullable();
            $table->string('source_url')->nullable();
            $table->string('image')->nullable();
            $table->boolean('is_free')->default(0)->nullable();
            $table->string('default_price')->nullable();
            $table->string('current_price')->nullable();
            $table->boolean('status')->default(0)->nullable();
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
        Schema::dropIfExists('courses');
    }
};
