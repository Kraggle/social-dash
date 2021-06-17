<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateDefaultsTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table('defaults', function (Blueprint $table) {

            $table->dropColumn('key');
            $table->dropColumn('default_value');
            $table->dropColumn('min_value');
            $table->dropColumn('max_value');
            $table->dropColumn('increments');
            $table->dropColumn('min_cost');
            $table->dropColumn('max_cost');

            $table->json('options')->nullable()->after('for_table');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        //
    }
}
