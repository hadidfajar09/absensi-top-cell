<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('employee_id')->nullable();
            $table->string('company')->nullable();
            $table->string('holidays')->nullable();
            $table->string('leaves')->nullable();
            $table->string('clients')->nullable();
            $table->string('projects')->nullable();
            $table->string('tasks')->nullable();
            $table->string('chats')->nullable();
            $table->string('assets')->nullable();
            $table->string('timing_sheets')->nullable();
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
        Schema::dropIfExists('employees');
    }
}
