<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePostTable extends Migration {

	public function up()
	{
		Schema::create('posts', function(Blueprint $table) {
			$table->increments('id');
			$table->string('type', 10)->default('text');
			$table->integer('author')->default('0');
			$table->string('title')->default('Untitled');
			$table->string('content');
			$table->boolean('approved')->default(false);
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('post');
	}
}