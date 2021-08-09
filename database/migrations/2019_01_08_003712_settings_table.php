<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SettingsTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->text('value')->nullable();
            $table->unsignedInteger('default_id');
            $table->unsignedInteger('account_id')->nullable();
            $table->unsignedInteger('team_id')->nullable();
            $table->unsignedInteger('user_id')->nullable();
            $table->unsignedInteger('post_id')->nullable();
            $table->json('options')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        Schema::dropIfExists('settings');
    }
}
