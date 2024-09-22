<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        {
            Schema::create('appointments', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->string('email');
                $table->string('phone');
                $table->date('date');
                $table->time('time');
                $table->timestamps();
            });
        }
        
    }
}