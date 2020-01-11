<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Vegetables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vegetables', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('vegetables_name') ; 
            $table->string('vegetables_quantity');
            $table->decimal('vegetables_price');
            $table->string('vegetables_description');
            $table->string('category_id');
            $table->timestamps();
        });

       
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
