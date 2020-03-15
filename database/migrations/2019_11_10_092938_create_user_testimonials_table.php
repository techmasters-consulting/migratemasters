<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTestimonialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_testimonials', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->text('excerpt');
            $table->text('make_public');
            $table->string('rate_us')->default('3');
            $table->text('body');
            $table->unsignedBigInteger('user_id');
            $table->boolean('isPublished')->default(false);
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });

        //FOREIGN KEY CONSTRAINTS

          //  $table->foreign('permission_id')->references('id')->on('permissions')->onDelete('cascade');

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_testimonials');
    }
}
