<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSessionsTable extends Migration
{
    public function up()
    {
        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->unsignedInteger('user_id')->nullable();
            $table->text('payload');
            $table->integer('last_activity');
            $table->string('ip_address')->nullable(); // Ensure this column exists
            $table->string('user_agent')->nullable(); // Ensure this column exists
        });
    }

    public function down()
    {
        Schema::dropIfExists('sessions');
    }
}
