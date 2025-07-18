<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('pkUser');
            $table->string('name',50);
            $table->string('lastName',50);
            $table->string('email',100)->unique();
            $table->string('password',100);
            $table->string('passwordToken',50);
            $table->string('token',50)->unique();
            $table->foreignId('fkRole')->constrained('roles', 'pkRole');

            $table->timestamps();
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
