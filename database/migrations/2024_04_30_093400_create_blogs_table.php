<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->text('image_url')->nullable()->default(null);
            $table->boolean('status')->default(true);
            $table->string('creator');
            $table->timestamps();
            


            //more dataType
            // $table->date('date');
            // $table->dateTime('datetime');
            // $table->time('time');

            // $table->decimal( 'amount');
            // $table->float('price');
            // $table->integer('number');
            // $table->double('double');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
