<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('u_id');
            $table->string('mobile');
            $table->string('alternate_mobile')->nullable();
            $table->string('email');
            $table->string('alternate_email')->nullable();
            $table->string('aadhar_card');
            $table->string('pan_card');
            $table->string('gender');
            $table->string('state');
            $table->string('city');
            $table->integer('pincode');
            $table->string('correspondence_address');
            $table->string('permanent_address');
            $table->string('photo_path');
            $table->string('signature_path');
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
        Schema::dropIfExists('admin_users');
    }
}
