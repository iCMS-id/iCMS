<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('parent_id')->unsigned();
            $table->integer('left')->unsigned();
            $table->integer('right')->unsigned();
            $table->integer('depth')->unsigned();
            $table->string('name');
            $table->json('action')->nullable();     //['type' => 'apps|url|external', 'route' => 'example.route', 'url' => 'http://', 'package' => 'vendor/package', 'target' => 'self|blank']
        });

        Schema::create('notifys', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->boolean('is_read')->default(false);
            $table->json('meta')->nullable();
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
        Schema::dropIfExists('notifys');
        Schema::dropIfExists('menus');
    }
}
