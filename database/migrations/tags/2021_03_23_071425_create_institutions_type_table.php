<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstitutionsTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('institution_types', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('type', 255);
        });

        Schema::create('institution_institution_type', function (Blueprint $table) {
            $table->primary(['institution_id', 'type_id']);
            $table->timestamps();
            $table->unsignedBigInteger('institution_id');
            $table->unsignedBigInteger('type_id');

            $table->foreign('institution_id')
                ->references('id')
                ->on('institutions')
                ->onDelete('cascade');
            $table->foreign('type_id')
                ->references('id')
                ->on('institution_types')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * 
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('institutions_type');
    }
}
