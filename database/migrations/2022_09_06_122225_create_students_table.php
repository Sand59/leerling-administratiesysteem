<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('roepnaam');
            $table->string('voorvoegsel');
            $table->string('achternaam');
            $table->string('voorletters');
            $table->string('officielenaam');
            $table->string('postcode');
            $table->string('straat');
            $table->integer('huisnummer');
            $table->string('toevoeging')->nullable();
            $table->string('woonplaats');
            $table->string('klas')->nullable();
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
        Schema::dropIfExists('students');
    }
};
