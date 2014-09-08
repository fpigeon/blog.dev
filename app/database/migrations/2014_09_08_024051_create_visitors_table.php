<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisitorsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
	Schema::create('visitors', function($table)
	{
	    $table->increments('id');
	    $table->string('first_name', 20);
        $table->string('last_name', 20);
        $table->string('email', 200)->unique();
        $table->char('phone_number', 12;
        $table->string('street', 50);
		$table->string('apt_num', 50)->nullable();
		$table->string('city', 50);
		$table->char('state', 2);
		$table->char('zip', 5);
		$table->text('find');
		$table->decimal('budget', 8,2);
		$table->string('remember_token', 100)->nullable();
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
		Schema::drop('visitors');
	}

}