<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SettingTeam extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('setting_team', function (Blueprint $table) {
            $table->integer('setting_id')->unsigned();
            $table->integer('team_id')->unsigned();

            $table->foreign('setting_id')->references('id')->on('settings');
            $table->foreign('team_id')->references('id')->on('teams');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('setting_team');
    }
}
