<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToHcPostsGalleriesConnectionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('hc_posts_galleries_connections', function(Blueprint $table)
		{
			$table->foreign('gallery_id', 'fk_hc_posts_galleries_connections_hc_galleries1')->references('id')->on('hc_galleries')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('post_id', 'fk_hc_posts_galleries_connections_hc_posts1')->references('id')->on('hc_posts')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('hc_posts_galleries_connections', function(Blueprint $table)
		{
			$table->dropForeign('fk_hc_posts_galleries_connections_hc_galleries1');
			$table->dropForeign('fk_hc_posts_galleries_connections_hc_posts1');
		});
	}

}
