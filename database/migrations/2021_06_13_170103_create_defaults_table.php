<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDefaultsTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('defaults', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('key');
            $table->text('description')->nullable();
            $table->string('for_table');
            $table->text('default_value');
            $table->text('min_value');
            $table->text('max_value');
            $table->integer('increments')->default(1);
            $table->integer('min_cost');
            $table->integer('max_cost');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('defaults');
    }
}
