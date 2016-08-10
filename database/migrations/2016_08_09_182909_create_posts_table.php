<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('lang_id')->unsigned();
            $table->string('title');
            $table->string('slug');
            $table->text('content')->nullable();
            $table->boolean('is_publish')->default(false);
            $table->boolean('is_pinned')->default(false);
            $table->json('meta')->nullable();
            $table->timestamp('start_at');
            $table->timestamp('end_at');
            $table->timestamps();
        });

        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('lang_id')->unsigned();
            $table->string('title');
            $table->string('slug');
            $table->text('content')->nullable();
            $table->boolean('is_publish')->default(false);
            $table->boolean('is_pinned')->default(false);
            $table->json('meta')->nullable();
            $table->timestamps();
        });

        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->nullable();
            $table->string('name', 50)->nullable();
            $table->string('email', 50)->nullable();
            $table->text('comment');
            $table->boolean('is_publish')->default(true);
            $table->timestamps();
        });

        Schema::create('commentables', function (Blueprint $table) {
            $table->integer('comment_id')->unsigned();
            $table->integer('commentable_id')->unsigned();
            $table->string('commentable_type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('commentables');
        Schema::dropIfExists('comments');
        Schema::dropIfExists('posts');
        Schema::dropIfExists('events');
    }
}
