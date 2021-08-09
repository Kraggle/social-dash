<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AccountsTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('accounts', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('pk');
            $table->string('username');
            $table->unsignedInteger('team_id');
            $table->integer('quantity')->default(0);
            $table->string('price_id')->nullable();
            $table->tinyInteger('active')->default(0);
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
        Schema::dropIfExists('accounts');
    }
}
