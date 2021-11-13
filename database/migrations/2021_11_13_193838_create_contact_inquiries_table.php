<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactInquiriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_inquiries', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('contact')->nullable();
            $table->foreign('contact')->references('id')->on('contacts');
            $table->string('message');
            $table->integer('speciality')->default(0);
            $table->boolean('cancelled')->default(0);
            $table->boolean('fulfilled')->default(0);
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
        Schema::dropIfExists('contact_inquiries');
    }
}
