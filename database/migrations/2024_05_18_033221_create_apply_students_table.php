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
            $table->string('birth_date_number');
            $table->string('nationality');
            $table->string('national_id_number')->nullable();
            $table->string('religion');
            $table->string('gender');
            $table->string('marital_status');
            $table->string('partner_name')->nullable();
            $table->string('phone_number');
            $table->string('email')->nullable();
            $table->string('minorities');
            $table->string('minorities_name')->nullable();
            $table->string('freedom_fighter');
            $table->string('freedom_fighter_document')->nullable();
            $table->string('freedom_fighter_name')->nullable();
            $table->string('freedom_fighter_relation')->nullable();

           
           
           
//address
            $table->unsignedBigInteger('division_id');
            $table->foreign('division_id')->references('id')->on('divisions')->onDelete('cascade');
            
            $table->unsignedBigInteger('district_id');
            $table->foreign('district_id')->references('id')->on('districts')->onDelete('cascade');

            $table->unsignedBigInteger('thana_id');
            $table->foreign('thana_id')->references('id')->on('thanas')->onDelete('cascade');
            

            $table->unsignedBigInteger('union_id');
            $table->foreign('union_id')->references('id')->on('unions')->onDelete('cascade');
            
            $table->string('home_no')->nullable();


            
//education
            $table->string('exam_name');
            $table->string('board_name');
            $table->string('roll');
            $table->string('subject');
            $table->string('result_type');
            $table->string('result');
            $table->string('passing_year');

//parents_info
            $table->string('father_bangla_name');
            $table->string('father_english_name');
            $table->string('mother_english_name');
            $table->string('mother_bangla_name');
            $table->string('father_national_id_number');
            $table->string('mother_national_id_number');
        
//guardian_info            
            $table->string('guardian');
            $table->string('guardian_education');
            $table->string('guardian_name');
            $table->string('guardian_name_national_id_number');
            $table->string('guardian_address');


//profile_image
            $table->string('profile_picture');
           

            
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