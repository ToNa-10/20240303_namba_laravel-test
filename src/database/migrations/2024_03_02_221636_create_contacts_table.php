<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('last-name');
            $table->string('first-name');
            $table->string('gender');
            $table->string('email');
            $table->string('tel1', 5);
            $table->string('tel2', 5);
            $table->string('tel3', 5);
            $table->string('address');
            $table->string('building')->nullable();
            $table->string('detail');
            $table->text('content');
            $table->timestamps();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}
