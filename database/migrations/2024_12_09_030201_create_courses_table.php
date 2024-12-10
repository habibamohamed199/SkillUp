<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->uuid('id')->default(DB::raw('UUID()'))->primary();
            $table->string('title','50')->nullable(false);
            $table->string('category')->nullable(false);
            $table->text('description')->nullable(false);
            $table->text('brief')->nullable(false);
            $table->string('author_id','30')->nullable(false);
            $table->foreign('author_id')->references('id')->on('users');
            $table->text('thumbnail')->nullable();
            $table->integer("price")->nullable(false);
            $table->float("rating")->default(0);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
