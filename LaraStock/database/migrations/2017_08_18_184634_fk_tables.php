<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FkTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products',function($table){

            $table->foreign('category_id')->references('id')->on('categories'); // relacionamento entra as tabela
          //  $table->foreign('provider_id')->references('id')->on('providers');
            // $table->foreign('brand_id')->references('id')->on('brands');
        });

         Schema::table('brands',function($table){

            $table->foreign('product_id')->references('id')->on('products'); // relacionamento entra as tabela
         
        });

          Schema::table('providers',function($table){

            $table->foreign('product_id')->references('id')->on('products'); // relacionamento entra as tabela
         
        });
    }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
