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
        Schema::create('expenses', function (Blueprint $table) {
            $table->increments('expense_id');
            $table->date('expense_date')->default(now());
            $table->string('expense_motif');
            $table->string('expense_unite');
            $table->unsignedInteger('categorie_id'); 

            $table->foreign('categorie_id')->references('categorie_id')->on("categories");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('expenses');
    }
};
