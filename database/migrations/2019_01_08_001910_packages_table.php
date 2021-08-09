<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PackagesTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->string('key')->nullable();
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('stripe_id')->nullable();
            $table->string('price_id')->nullable();
            $table->double('cost', 8, 2)->default(0);
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
        Schema::dropIfExists('packages');
    }
}
