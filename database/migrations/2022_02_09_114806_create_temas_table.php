<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Schema\Grammars\Grammar;
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
        Grammar::macro('typeInterval', function () {
            return 'interval';
        });

        Schema::create('temas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->addColumn('interval', 'duracion');
            $table->foreignId('album_id')->constrained('albumes');
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
        Schema::dropIfExists('temas');
    }
};
