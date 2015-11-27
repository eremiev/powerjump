<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('event_id');
            $table->date('when');
            $table->string('image', 150);
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
        if (Schema::hasTable('projects')) {

            Schema::table('projects', function (Blueprint $table) {
                $table->dropForeign('projects_event_id_foreign');
            });

            Schema::drop('projects');
        }
    }
}
