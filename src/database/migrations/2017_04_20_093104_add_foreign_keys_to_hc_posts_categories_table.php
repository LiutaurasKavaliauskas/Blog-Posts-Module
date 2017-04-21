<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToHcPostsCategoriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('hc_posts_categories', function(Blueprint $table)
		{
			$table->foreign('parent_id', 'fk_hc_posts_categories_hc_posts_categories1')->references('id')->on('hc_posts_categories')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('hc_posts_categories', function(Blueprint $table)
		{
			$table->dropForeign('fk_hc_posts_categories_hc_posts_categories1');
		});
	}

}
