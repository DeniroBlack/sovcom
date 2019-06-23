<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeliverTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deliver', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->string('name')->comment('Название доставки');
            $table->string('point_start')->comment('Пункт отправления');
            $table->string('point_end')->comment('Пункт назначения');
            $table->tinyInteger('type')->default(0)->comment('Тип перевозок: 0 - внутренние; 1 - международные');
            $table->integer('distance')->default(0)->comment('Расстояние в километрах');
            $table->integer('price')->default(0)->comment('Цена');
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
        Schema::dropIfExists('deliver');
    }
}
