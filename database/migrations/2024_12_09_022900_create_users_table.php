<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {

        Schema::create('users', function (Blueprint $table) {
            $table->uuid('id')->default(DB::raw('UUID()'))->primary();
            $table->string('name',25)->nullable(false);
            $table->string('email')->unique()->nullable(false);
            $table->string('phone',13)->unique()->nullable(false);
            $table->enum('role',['admin','user'])->default('user')->nullable(false);
            $table->string('password','60')->nullable(false);
            $table->enum('gender', ['male', 'female'])->nullable(false);
            $table->integer('credit')->default(0);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
