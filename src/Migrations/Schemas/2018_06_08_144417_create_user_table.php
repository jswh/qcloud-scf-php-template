<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $blueprint) {
            $table = new Table($blueprint);
            $table->id();
            $table->string('username', '64');
            $table->string('phone', 32)->nullable();
            $table->string('password')->nullable();
            $table->string('unionId')->nullable();
            $table->string('openId')->nullable();
            $table->text('extra');
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
