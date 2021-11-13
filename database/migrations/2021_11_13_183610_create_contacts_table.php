<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->engine = "InnoDB";
            
            $table->id();
            $table->integer('manager')->default(0);
            $table->char('first-name', 100);
            $table->char('last-name', 100);

            $table->unsignedBigInteger('class')->nullable();
            $table->foreign('class')->references('id')->on('classes');

            $table->integer('speciality')->default(0);
            $table->char('phone', 50);
            $table->string('email')->unique();

            $table->unsignedBigInteger('governorate')->default(0);
            $table->foreign('governorate')->references('id')->on('governorates');

            $table->unsignedBigInteger('region')->default(0);
            $table->foreign('region')->references('id')->on('regions');

            $table->string('address', 500)->nullable();
            $table->boolean('confirmed')->default(0);
            $table->boolean('cancelled')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}
