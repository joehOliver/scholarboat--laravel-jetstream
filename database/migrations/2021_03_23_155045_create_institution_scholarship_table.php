<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstitutionScholarshipTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('institution_scholarship', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('scholarship_id');
            $table->unsignedBigInteger('institution_id');

            $table->foreign('scholarship_id')
                ->references('id')
                ->on('scholarships')
                ->onDelete('cascade');
            $table->foreign('institution_id')
                ->references('id')
                ->on('institutions')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('institution_scholarship');
    }
}
