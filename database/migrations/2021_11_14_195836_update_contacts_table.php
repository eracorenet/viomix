<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('contacts', function (Blueprint $table) {
            $table->unsignedBigInteger('speciality')->change();
            $table->foreign('speciality')->references('id')->on('specialities');
        });        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::disableForeignKeyConstraints();
        Schema::table('contacts', function(Blueprint $table) {            
            $table->dropIndex('contacts_speciality_foreign');
            $table->Integer('speciality')->change();
        });
        Schema::enableForeignKeyConstraints();
    }
}
