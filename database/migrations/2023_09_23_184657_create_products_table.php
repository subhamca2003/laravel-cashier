<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('sku')->unique();
            $table->string('name');
            $table->decimal('price', 10, 2);
            $table->string('hsn_code');
            $table->text('description');
            $table->text('short_description');
            $table->decimal('special_price', 10, 2)->nullable();
            $table->string('url_key')->unique();
            $table->string('brand');
            $table->string('manufacturer_code');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
}
