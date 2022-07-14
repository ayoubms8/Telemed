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
        Schema::create('doctors', function (Blueprint $table) {
              $table->id();
            $table->string('Full_Name');
            $table->date('Date_Of_Birth');
            $table->string('Adress');
            $table->double('Phone_Number');
            $table->string('Social_Account');
            $table->string('Speciality');
         

            /*$table->integer('Id_Patient')->default();*/
            $table->string('Email_Adress');
            $table->string('Gender');
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
        Schema::dropIfExists('doctors');
    }
};
