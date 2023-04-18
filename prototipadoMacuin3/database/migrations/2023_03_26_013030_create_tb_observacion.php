<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tb_observacion', function (Blueprint $table) {
            $table->id();
            $table->string("Ticket_id");
            $table->string("Seguimiento");
            $table->string("Cliente_id");
            $table->string("Comentario");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_observacion');
    }
};
