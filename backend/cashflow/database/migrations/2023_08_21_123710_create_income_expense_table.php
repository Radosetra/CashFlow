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
        Schema::create('income_expenses', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('income_id');
            $table->unsignedInteger('expense_id');
            $table->double('inc_exp_amount', 8, 2);

            $table->foreign('income_id')->references('income_id')->on('incomes');
            $table->foreign('expense_id')->references('expense_id')->on('expenses');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('income_expenses');
    }
};
