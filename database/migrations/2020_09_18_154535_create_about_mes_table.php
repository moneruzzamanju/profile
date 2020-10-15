<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutMesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_mes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email',100);
            $table->string('phone')->nullable();
            $table->string('about_me_short')->nullable();
            $table->longText('about_me_long')->nullable();
            $table->enum('gender',['male','female', 'others']);
            $table->enum('marital_status',['married','unmarried', 'single','divorce','widowed'])->default('unmarried');
            $table->string('nationality')->nullable();
            $table->string('dob')->nullable();
            $table->string('photo')->nullable();
            $table->enum('status',['active','inactive'])->default('active');
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
        Schema::dropIfExists('about_mes');
    }
}
