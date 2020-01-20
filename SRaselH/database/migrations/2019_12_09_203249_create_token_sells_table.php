<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTokenSellsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('token_sells', function (Blueprint $table) {
            $table->increments('id');
            $table->smallInteger('status');
            $table->double('morning_meal_cost');
            $table->double('launch_meal_cost');
            $table->double('dinner_meal_cost');
            $table->timestamps();
        });
        DB::table('token_sells')->insert(
            array(
                array(

                    'status' => '1',
                    'morning_meal_cost' => '0',
                    'launch_meal_cost' => '0',
                    'dinner_meal_cost' => '0',
                    'created_at' => '2020-01-01 00:00:00',
                    'updated_at' => '2020-01-01 00:00:00'
                )
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('token_sells');
    }
}
