<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubstocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('substocks', function (Blueprint $table) {
            
            $table->id();
            $table->string('fr_substock_name');
            $table->string('en_substock_name');
            $table->string('ar_substock_name');

            $table->string('substock_slug')->unique();
           
            $table->string('substock_photo')->default('media/users/empty-user.jpg');
            $table->string('icon')->default('fa-brands fa-app-store-ios');

            $table->foreignId('stock_id');
            
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
        Schema::dropIfExists('substocks');
    }
}
