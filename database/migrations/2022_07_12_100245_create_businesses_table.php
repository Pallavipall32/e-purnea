<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('businesses', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('proprietor');
            $table->string('primary_contact');
            $table->string('secondary_contact')->nullable();
            $table->text('description');
            $table->string('email')->nullable();
            $table->string('website')->nullable();
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->foreignId('user_id')->constrained();
            $table->enum('status',["1","0"])->default("1");
            $table->foreignId('category_id')->constrained();
            $table->string('image');
            $table->string('pincode');
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
        Schema::dropIfExists('businesses');
    }
};
