<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTagsTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tags', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name', 255);
            $table->text('icon_path')->nullable();
        });

        Schema::create('tag_scholarship', function (Blueprint $table) {
            $table->primary(['scholarship_id', 'tag_id']);
            $table->timestamps();
            $table->unsignedBigInteger('scholarship_id');
            $table->unsignedBigInteger('tag_id');

            $table->foreign('scholarship_id')
                ->references('id')
                ->on('scholarships')
                ->onDelete('cascade');
            $table->foreign('tag_id')
                ->references('id')
                ->on('tags')
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
        Schema::dropIfExists('tags_tables');
    }
}
