<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMContactTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_contact', function (Blueprint $table) {
            $table->id();
            $table->string('type', 10);
            $table->string('name', 191);
            $table->string('phone', 30);
            $table->string('email', 100);
            $table->string('image', 199);
            $table->text('content');
            $table->json('options');
            $table->boolean('flag')->default(0);
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
        Schema::dropIfExists('m_contact');
    }
}
