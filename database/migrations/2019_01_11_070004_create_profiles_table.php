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
            $table->increments('id');
            $table->string('name');
            $table->string('facebook');
            $table->string('instagram');
            $table->string('email');
            $table->string('telp');
            $table->string('pengantar1');
            $table->string('pengantar2');
            $table->text('pengantar3');
            $table->timestamps();
        });

        DB::table('profiles')->insert(
            array(            
                'id' => '1',    
                'name' => 'Casptone Indonesia',
                'facebook' => 'facebook.com/capstoneindonesia',   
                'instagram' => 'instagram.com/capstoneindonesia',
                'email' => 'support@capstoneindonesia.net',
                'telp' => '0813 9008 0691',
                'pengantar1' => 'DON’T LOOK FURTHER, HERE IS THE KEY',
                'pengantar2' => 'We’re Capstone Indonesia',
                'pengantar3' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et 
                dolore magna aliqua. Ut enim ad minim. sed do eiusmod tempor incididunt',
            )
        );
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
