<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePositionTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('position_types', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });

        DB::table('position_types')->insert([
            ['role_type' => 'CEO'],
            ['role_type' => 'CFO'],
            ['role_type' => 'Manager'],
            ['role_type' => 'Web Designer'],
            ['role_type' => 'Web Developer'],
            ['role_type' => 'Android Developer'],
            ['role_type' => 'IOS Developer'],
            ['role_type' => 'Team Leader'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('position_types');
    }
}
