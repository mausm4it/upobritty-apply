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
        Schema::create('apply_students', function (Blueprint $table) {
            $table->id();

            
//persional_info 
           
            $table->string('bangla_name');
            $table->string('engish_name');
            $table->date('birth_date');
            $table->string('nid_number');
            $table->string('nationality');
            $table->string('gender');
            $table->string('phone_number');
            $table->string('land');
            $table->string('father_name');
            $table->string('mother_name');
            
            
            //Qouta
            $table->string('minorities_name')->nullable();
            $table->string('minorities_document')->nullable();
            
            $table->string('otizom_name')->nullable();
            $table->string('otizom_document')->nullable();
      
            $table->string('freedom_fighter_document')->nullable();
            $table->string('freedom_fighter_name')->nullable();
            $table->string('freedom_fighter_relation')->nullable();

           
           
           
//address
            $table->string('division');
            $table->string('district');
            $table->string('thana');
            $table->string('union');
            $table->string('home_no')->nullable();


            
//education
            $table->string('exam_name');
            $table->string('class_name');
            $table->string('roll');
            $table->string('subject')->nullable();
            $table->string('institute_name');
            $table->string('prottoyon_potro');
           
            // $table->string('result_type');
            // $table->string('result');
            // $table->string('passing_year');
           
   
        
//guardian_info            
            $table->string('guardian_education')->nullable();
            $table->string('guardian_name')->nullable();
            $table->string('guardian_address')->nullable();


//profile_image
            $table->string('profile_picture');
           
//status
            $table->string('status')->default('pending');
            $table->string('payment_status')->default('pending');





            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apply_students');
    }
};