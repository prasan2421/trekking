<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegestrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('regestrations', function (Blueprint $table) {
            $table->string('fname');
            $table->string('lname');
            $table->string('uname');
            $table->string('email');
            $table->string('pwd');
            $table->string('rpwd');
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
        Schema::dropIfExists('regestrations');
    }
}
