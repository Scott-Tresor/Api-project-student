<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentSubscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_subscriptions', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('username');
            $table->string('firstname');
            $table->string('sex');
            $table->dateTime('birthdays_student');
            $table->string('birth_place');
            $table->bigInteger('phone_number')->unique();
            $table->string('email')->unique();
            $table->string('address');
            $table->string('town_student')->nullable();
            $table->string('school_name');
            $table->string('state_student')->nullable();
            $table->bigInteger('bac_code')->unique();
            $table->string('option');
            $table->double('percent');
            $table->string('department1');
            $table->string('department2')->nullable();
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
        Schema::dropIfExists('student_subscriptions');
    }
}
