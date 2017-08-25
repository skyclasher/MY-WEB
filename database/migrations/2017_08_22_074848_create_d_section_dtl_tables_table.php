<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDSectionDtlTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('d_section_dtl', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_section')->unsigned();
            $table->string('title1');
            $table->string('title2');
            $table->string('title3');
            $table->string('subject1');
            $table->string('subject2');
            $table->string('subject3');
            $table->string('body1');
            $table->string('body2');
            $table->string('body3');
            $table->string('footer1');
            $table->string('footer2');
            $table->string('footer3');
            $table->timestamps();
        });

        Schema::table('d_section_dtl', function (Blueprint $table) {
            $table->foreign('id_section')->references('id')->on('d_section');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('d_section_dtl');
    }
}
