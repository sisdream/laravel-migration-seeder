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
        Schema::create("trains", function (Blueprint $table){
            $table->id();
            $table->string("Azienda");
            $table->string("Stazione di partenza");
            $table->string("Stazione di arrivo");
            $table->date("Orario di partenza");
            $table->date("Orario di arrivo");
            $table->integer("Codice Treno");
            $table->integer("Numero Carrozze");
            $table->date("In orario");
            $table->string("Cancellato");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists("trains");
    }
};
