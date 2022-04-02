<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddInsuranceCompIdToTestpageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('testpage', function (Blueprint $table) {
            //
            $table->integer('insurance_comp_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('testpage', function (Blueprint $table) {
            //
            $table->dropColumn('insurance_comp_id');
        });
    }
}
