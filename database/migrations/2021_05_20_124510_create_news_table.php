<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
   {
       Schema::create('news', function (Blueprint $table) {
           $table->increments('id');

           $table->integer('category_id')->unsigned();
           $table->unsignedBigInteger('user_id');

           $table->string('slug')->unique();
           $table->string('title');

           $table->text('excerpt')->nullable();

           $table->text('content_raw');


           $table->boolean('is_published')->default(false);
           $table->timestamp('published_at')->nullable();

           $table->timestamps();
           $table->softDeletes();



           $table->index('is_published');
       });
   }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news');
    }
}
