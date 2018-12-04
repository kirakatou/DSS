<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->string("no_pendaftaran");
            $table->string("nama");
            $table->string("batch");
            $table->boolean("usm")->default(false);
            $table->string("department");
            $table->string("submodule");
            $table->integer("mate_10")->default(0);
            $table->integer("inggris_10")->default(0);
            $table->integer("first_module_10")->default(0);
            $table->integer("second_module_10")->default(0);
            $table->integer("third_module_10")->default(0);
            $table->integer("mate_11")->default(0);
            $table->integer("inggris_11")->default(0);
            $table->integer("first_module_11")->default(0);
            $table->integer("second_module_11")->default(0);
            $table->integer("third_module_11")->default(0);
            $table->integer("mate_12")->default(0);
            $table->integer("inggris_12")->default(0);
            $table->integer("first_module_12")->default(0);
            $table->integer("second_module_12")->default(0);
            $table->integer("third_module_12")->default(0);
            $table->integer("mate_13")->default(0);
            $table->integer("inggris_13")->default(0);
            $table->integer("first_module_13")->default(0);
            $table->integer("second_module_13")->default(0);
            $table->integer("third_module_13")->default(0);
            $table->integer("usm_mate")->default(0);
            $table->integer("usm_inggris")->default(0);
            $table->integer("usm_tpa")->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
