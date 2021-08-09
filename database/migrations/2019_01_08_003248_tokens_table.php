<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TokensTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('tokens', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->unsignedInteger('team_id')->nullable();
            $table->unsignedInteger('role_id')->nullable();
            $table->string('token');
            $table->timestamp('valid_until');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        Schema::dropIfExists('tokens');
    }
}
