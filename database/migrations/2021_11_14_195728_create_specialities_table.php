<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;


class CreateSpecialitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('specialities', function (Blueprint $table) {
            $table->id();
            $table->string('speciality', 50)->unique();
        });

        DB::table('specialities')->insert(
            [
                ['speciality' => 'Nurse'],
                ['speciality' => 'Technician'],
                ['speciality' => 'Gastroenterology'],
                ['speciality' => 'Surgery'],
                ['speciality' => 'Allergy & Immunology'],
                ['speciality' => 'Anesthesiology'],
                ['speciality' => 'Cardiology'],
                ['speciality' => 'Critical Care'],
                ['speciality' => 'Dermatology'],
                ['speciality' => 'Endocrinology'],
                ['speciality' => 'Geriatrics'],
                ['speciality' => 'Hematology'],
                ['speciality' => 'Nephrology'],
                ['speciality' => 'Neurology'],
                ['speciality' => 'Nuclear Medicine'],
                ['speciality' => 'Obstetrics and Gynecology'],
                ['speciality' => 'Oncology'],
                ['speciality' => 'Ophthalmology'],
                ['speciality' => 'Pain Management'],
                ['speciality' => 'Pediatrics'],
                ['speciality' => 'Psychiatry'],
                ['speciality' => 'Chest'],
                ['speciality' => 'Radiology'],
                ['speciality' => 'Radiotherapy'],
                ['speciality' => 'Rheumatology & Rehabilitation'],
                ['speciality' => 'Pharmacy'],
                ['speciality' => 'Dentist'],
                ['speciality' => 'Physiotherapy'],
                ['speciality' => 'Pediatric Surgery'],
                ['speciality' => 'Plastic surgery'],
                ['speciality' => 'Urology'],
                ['speciality' => 'Clinical Pathology'],
                ['speciality' => 'ENT'],
                ['speciality' => 'GP'],
                ['speciality' => 'Hepatology']
            ]
        );        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('specialities');
    }
}
