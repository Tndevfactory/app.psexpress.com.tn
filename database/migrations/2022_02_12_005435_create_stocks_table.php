<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stocks', function (Blueprint $table) {

            $table->id();

            $table->string('stock_slug')->unique();

            $table->string('fr_stock_name');
            $table->string('en_stock_name');
            $table->string('ar_stock_name');

            $table->string('stock_photo')->default('media/users/empty-user.jpg');
            $table->string('icon')->default('fa-brands fa-app-store-ios');
            
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
        Schema::dropIfExists('stocks');
    }
}
