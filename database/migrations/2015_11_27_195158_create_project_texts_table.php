<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectTextsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_texts', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('project_id');
            $table->string('title');
            $table->text('description');
            $table->timestamps();

            $table->index('project_id');

            $table->foreign('project_id')
                ->references('id')
                ->on('projects')
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
        if (Schema::hasTable('project_texts')) {

            Schema::table('project_texts', function (Blueprint $table) {
                $table->dropForeign('project_texts_project_id_foreign');
            });

            Schema::drop('project_texts');
        }
    }
}
