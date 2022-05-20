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
        Schema::create('weerdata', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->time('time');
            $table->float('temp');
            $table->float('dewp');
            $table->float('stp');
            $table->float('slp');
            $table->float('visib');
            $table->float('wdsp');
            $table->float('prcp');
            $table->float('sndp');
            $table->float('cldc');
            $table->string('frshtt');
            $table->integer('wnddir');

            $table->string('uuid')->unique();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('weerdata');
    }
};
