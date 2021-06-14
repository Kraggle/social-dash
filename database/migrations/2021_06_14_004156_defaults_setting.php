<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DefaultsSetting extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('defaults_setting', function (Blueprint $table) {
            $table->integer('defaults_id')->unsigned();
            $table->integer('setting_id')->unsigned();

            $table->foreign('defaults_id')->references('id')->on('defaults');
            $table->foreign('setting_id')->references('id')->on('settings');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('defaults_setting');
    }
}
