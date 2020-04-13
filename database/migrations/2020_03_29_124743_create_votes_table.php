<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('votes', function (Blueprint $table) {
            $table->bigIncrements('idvote');
            $table->bigInteger('cand_id')->unsigned();
            $table->bigInteger('voter_id')->unsigned();
            $table->date('vote_date');
            $table->time('vote_time');

            $table->foreign('cand_id')->references('idcondidat')->on('candidats');
            $table->foreign('voter_id')->references('idvoter')->on('voters');
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
        Schema::dropIfExists('votes');
    }
}
