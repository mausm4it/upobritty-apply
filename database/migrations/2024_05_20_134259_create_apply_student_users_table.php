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
        Schema::create('apply_student_user', function (Blueprint $table) {
             $table->unsignedBiginteger('apply_student_id');
            $table->unsignedBiginteger('user_id');
            

           
            


           
           
            $table->foreign('apply_student_id')->references('id')
            ->on('apply_students')->onDelete('cascade');
            $table->foreign('user_id')->references('id')
            ->on('users')->onDelete('cascade');
        });
    }

  
    public function down(): void
    {
        Schema::dropIfExists('apply_student_user');
    }
};