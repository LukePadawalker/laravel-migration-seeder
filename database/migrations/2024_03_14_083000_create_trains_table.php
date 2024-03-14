<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create("trains", function (Blueprint $table) {
            $table->string("azienda");
            $table->string("stazione_partenza");
            $table->string("stazione_arrivo");
            $table->timestamps("orario_partenza");
            $table->timestamps("orario_arrivo");
            $table->bigint("id_treno");
            $table->tinyint("numero_carrozze");
            $table->timestamp("in_time");
            $table->boolean("cancellato");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
