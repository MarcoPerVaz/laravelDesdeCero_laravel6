<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            /* Project */
                $table->string('title', 500)->nullable();
                $table->string('url_clean', 500)->nullable();
                $table->text('content')->nullable();
                $table->enum('posted', ['yes', 'not'])->default('not');
                $table->bigInteger('category_id')->unsigned()->nullable();
            /* End Project */
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
        Schema::dropIfExists('posts');
    }
}
