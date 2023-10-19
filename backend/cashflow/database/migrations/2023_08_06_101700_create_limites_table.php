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
        Schema::create('limites', function (Blueprint $table) {
            $table->increments('limite_id');
            $table->date('limite_date')->default(now());
            $table->date('limite_date_end');
            $table->double('limite_amount', 8, 2);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('limites');
    }
};
