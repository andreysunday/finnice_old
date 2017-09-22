<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSlideTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slide_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('slide_id')->unsigned();
            $table->string('locale')->index();

            $table->string('title');
            $table->string('alt');
            $table->text('text');

            $table->unique(['slide_id','locale']);
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
        Schema::dropIfExists('slide_translations');
    }
}
