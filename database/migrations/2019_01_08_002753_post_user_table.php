<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PostUserTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('post_user', function (Blueprint $table) {
            $table->unsignedInteger('post_id');
            $table->unsignedInteger('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        Schema::dropIfExists('post_user');
    }
}
