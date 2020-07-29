<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->unsignedInteger('id')->autoIncrement();
            $table->tinyInteger('type');
            $table->integer('parent');
            $table->string('name', 191);
            $table->string('alias', 191);
            $table->string('description', 500);
            $table->longText('content', 191);
            $table->string('image', 191);
            $table->smallInteger('user_id');
            $table->smallInteger('sort');
            $table->string('display', 10);
            $table->boolean('blocked')->default(0);
            $table->json('options');
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
        //Schema::dropIfExists('categories');
    }
}
