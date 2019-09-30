<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('tasks')){
        Schema::create('tasks', function (Blueprint $table) {
            $table->bigIncrements('id');           
            $table->string('title');           
            $table->string('description');
            $table->string('reminder_frequency');
            $table->string('deadline'); 
            $table->bigInteger('user_id')->unsigned();          
            $table->string('status')->default(0);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
 
       
        });
      }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}
