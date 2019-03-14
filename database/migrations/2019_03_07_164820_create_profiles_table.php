<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('user_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->text('bio');
            $table->string('current_address');
            $table->string('birth_location');
            $table->date('date_of_birth');
            $table->enum('gender',['male','female'])->nullable();
            $table->string('academic_level');
            $table->string('caste');
            $table->enum('marital_status',['single','divorced','widowed']);
            $table->boolean('employed')->default(false);
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
        Schema::dropIfExists('profiles');
    }
}
