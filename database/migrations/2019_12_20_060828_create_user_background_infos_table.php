<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserBackgroundInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_background_infos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('familytuberculosis'); 
            $table->string('mentaldisorder');
            $table->string('moreinfomedical');
            $table->string('beyondvalidity');
            $table->string('refusedentry');
            $table->string('previousapplication');
            $table->string('moreinfovisa');
            $table->string('policecertificate');
            $table->string('criminaloffence');
            $table->string('moreinfocriminal');
            $table->string('courtproceduresabroad');
            $table->string('courtprocedureshome');
            $table->string('moreinfocourt');
            

            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     *  familytuberculosis: '',
    mentaldisorder: '',
    moreinfomedical: '',
    beyondvalidity: '',
    refusedentry: '',
    previousapplication: '',
    moreinfovisa: '',
    policecertificate: '',
    criminaloffence: '',
    moreinfocriminal: '',
    courtproceduresabroad: '',
    courtprocedureshome: '',
    moreinfocourt: '',
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_background_infos');
    }
}
