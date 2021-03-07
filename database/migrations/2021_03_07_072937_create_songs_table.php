<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSongsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('songs', function (Blueprint $table) {
            $table->bigIncrements('song_id');
            $table->text('title');
            $table->text('lyrics');
            $table->string('author', 150);
            $table->unsignedBigInteger('created_by')->index('fk_created_by');
            $table->dateTime('created_at')->useCurrent();
            $table->bigInteger('modified_by')->nullable();
            $table->dateTime('modified_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('songs');
    }
}
