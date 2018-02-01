<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatSujetQuizTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sujet_quiz', function (Blueprint $table) {
            $table->increments('id_sujet_quiz');

            $table->integer('id_quiz')->unsigned();
            $table->integer('id_sujet')->unsigned();
            
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->softDeletes();

            $table->foreign('id_sujet')
            ->references('id_sujet')->on('sujets');
            
            $table->foreign('id_quiz')
            ->references('id_quiz')->on('quizzes');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sujet_quiz');
    }
}
