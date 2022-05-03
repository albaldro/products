<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCostPricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cost_prices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_product')->constrained('products')->cascadeOnDelete()->cascadeOnUpdate();
            $table->int('quantity');
            $table->float('cost');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cost_prices');
    }
}
