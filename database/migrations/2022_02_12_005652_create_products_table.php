<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
           
            $table->id();

            $table->string('fr_product_ref');
            $table->string('en_product_ref');
            $table->string('ar_product_ref');
           
            $table->string('product_slug')->unique();
            $table->string('product_sku');

            $table->mediumText('fr_description');
            $table->mediumText('en_description');
            $table->mediumText('ar_description');

            $table->decimal('price', 20,2); 

            $table->decimal('seuil0', 20,2)->nullable();
            $table->decimal('price_seuil0', 20,2)->nullable();
           
            $table->decimal('seuil1', 20,2)->nullable();
            $table->decimal('price_seuil1', 20,2)->nullable();

            $table->decimal('seuil2', 20,2)->nullable();
            $table->decimal('price_seuil2', 20,2)->nullable();
           
            $table->decimal('discount', 20,2)->nullable(); 

            $table->string('photo1')->default('media/users/empty-user.jpg');
            $table->string('photo2')->default('media/users/empty-user.jpg');
            $table->string('photo3')->default('media/users/empty-user.jpg');

            $table->string('color')->nullable();
            $table->string('weight')->nullable();
            $table->string('dimension')->nullable();
            $table->string('brand')->nullable();
          
            $table->string('flash_sale')->nullable();
            $table->string('day_deal')->nullable();

            $table->string('tax')->nullable();
            $table->string('fee')->nullable();
            
            $table->enum('status', ['sold', 'available', 'stolen', 'damaged', 'on_demand','other'])->default('available'); 
           
            $table->foreignId('substock_id');
           
            $table->foreignId('stock_id');

            $table->foreignId('shop_id');

            $table->timestamps();
            
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $table->dropSoftDeletes();
        Schema::dropIfExists('products');
    }
}
