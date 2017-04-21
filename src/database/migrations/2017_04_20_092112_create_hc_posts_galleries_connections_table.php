<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHcPostsGalleriesConnectionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('hc_posts_galleries_connections', function(Blueprint $table)
		{
			$table->integer('count', true);
			$table->timestamps();
			$table->string('post_id', 36)->index('fk_hc_posts_galleries_connections_hc_posts1_idx');
			$table->string('gallery_id', 36)->index('fk_hc_posts_galleries_connections_hc_galleries1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('hc_posts_galleries_connections');
	}

}
