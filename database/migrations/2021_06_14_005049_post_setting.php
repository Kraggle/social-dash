<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PostSetting extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('post_setting', function (Blueprint $table) {
            $table->integer('post_id')->unsigned();
            $table->integer('setting_id')->unsigned();

            $table->foreign('post_id')->references('id')->on('posts');
            $table->foreign('setting_id')->references('id')->on('settings');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('post_setting');
    }
}