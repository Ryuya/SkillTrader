<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProvideSkillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('provide_skills', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('skill_id'); //この行を追加
            $table->unique('skill_id');
            $table->unsignedBigInteger('skill_detail_id'); //この行を追加
            $table->foreign('skill_id')->references('id')->on('skills')->onDelete('cascade'); //この行を追加
            $table->foreign('skill_detail_id')->references('id')->on('skill_details')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('provide_skills');
    }
}
