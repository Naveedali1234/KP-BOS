<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePublicationUploadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publication_uploads', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('publication_id')->unsigned();
            $table->foreign('publication_id')->references('id')->on('publications')->onDelete('cascade');
            $table->string('file_name',100);
            $table->string('type',100);
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
        Schema::dropIfExists('publication_uploads');
    }
}
