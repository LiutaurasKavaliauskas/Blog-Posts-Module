<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToHcPostsCategoriesConnectionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('hc_posts_categories_connections', function(Blueprint $table)
		{
			$table->foreign('post_id', 'fk_hc_posts_categories_connections_hc_posts1')->references('id')->on('hc_posts')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('category_id', 'fk_hc_posts_categories_connections_hc_posts_categories1')->references('id')->on('hc_posts_categories')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('hc_posts_categories_connections', function(Blueprint $table)
		{
			$table->dropForeign('fk_hc_posts_categories_connections_hc_posts1');
			$table->dropForeign('fk_hc_posts_categories_connections_hc_posts_categories1');
		});
	}

}
