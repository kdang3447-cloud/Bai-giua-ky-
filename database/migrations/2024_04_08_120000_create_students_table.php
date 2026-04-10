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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('ma_sv', 20)->unique();
            $table->string('ho_ten', 100);
            $table->integer('nam_sinh');
            $table->string('so_dt', 20);
            $table->string('email', 100)->unique();
            $table->text('dia_chi');
            $table->string('que_quan', 100);
            $table->string('lop', 50);
            $table->string('nganh', 100);
            $table->string('khoa', 50);
            $table->text('ghi_chu')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
