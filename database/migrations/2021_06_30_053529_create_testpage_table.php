<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestpageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testpage', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ins_agent', 100);            
            $table->text('ins_correspond_address');
            $table->date('ins_issuing_date');
            $table->string('ins_class', 100);
            $table->text('ins_issuing_branch');
            $table->text('ins_mortgagee');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('testpage');
    }
}
