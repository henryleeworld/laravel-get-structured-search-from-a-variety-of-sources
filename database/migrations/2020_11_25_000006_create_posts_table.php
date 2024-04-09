<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id', 'user_id_fk_2656382')->references('id')->on('users')->onDelete('cascade');
            $table->longText('post_text')->nullable();
            $table->date('start_date');
            $table->date('end_date');
            $table->string('ip_address')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
};
