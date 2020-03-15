<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_profiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string( 'fname' );
            $table->string('lname');
            $table->string( 'mname' );
            $table->string('oname');
            $table->string('country');
            $table->string('city' );
            $table->string( 'state' );
            $table->text('haddress' );
            $table->string('gender');
            $table->string(   'age' );
            $table->date('dob'  );
            $table->string('cob' );
            $table->string( 'nationality');
            $table->string( 'citizenship' )->default("Not Applicable");
            $table->date('expiry' );
            $table->string('pdivorced' );
            $table->string(  'mstatus' );
            $table->string('nlanguage');
            $table->string('language');
            $table->string('filePhoto');
            

            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_profiles');
    }
}
