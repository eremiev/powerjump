<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventTextsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_texts', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('event_id');
            $table->string('lang', 3);
            $table->string('title', 200);
            $table->text('description');
            $table->timestamps();

            $table->index('event_id');

            $table->foreign('event_id')
                ->references('id')
                ->on('events')
                ->onUpdate('cascade')
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
        if (Schema::hasTable('event_texts')) {

            Schema::table('event_texts', function (Blueprint $table) {
                $table->dropForeign('event_texts_event_id_foreign');
            });

            Schema::drop('event_texts');
        }
    }
}
