<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSysPagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sys_pages', function (Blueprint $table) {
            $table->id();
            $table->string('category',20);
            $table->string('name');
            $table->string('alias');
            $table->string('thumbnail');
            $table->string('link');
            $table->text('description');
            $table->text('keyword');
            $table->json('options');   
            $table->boolean('blocked')->default(0);
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
        Schema::dropIfExists('sys_pages');
    }
}
