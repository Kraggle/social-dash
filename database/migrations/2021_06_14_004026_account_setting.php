<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AccountSetting extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('account_setting', function (Blueprint $table) {
            $table->integer('account_id')->unsigned();
            $table->integer('setting_id')->unsigned();

            $table->foreign('account_id')->references('id')->on('accounts');
            $table->foreign('setting_id')->references('id')->on('settings');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('account_setting');
    }
}
