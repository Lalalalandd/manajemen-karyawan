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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->integer('NIP');
            $table->date('birth_date');
            $table->string('gender');
            $table->string('religion');
            $table->string('address');
            $table->string('position');
            $table->string('bpjs');
            $table->date('hire_date');
            $table->date('end_hire_date')->nullable();
            $table->unsignedInteger('department_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
