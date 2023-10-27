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
        Schema::create('cart_items', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('idCart');
            $table->unsignedInteger('idFood');
            $table->string('postCode');
            $table->integer('subTotal');
            $table->integer('shipping');
            $table->integer('total');
            $table->foreign('idFood')->references('idFood')->on('foods')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('idCart')->references('idCart')->on('carts')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cart_items');
    }
};
