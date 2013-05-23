<?php

class Create_Users_Table {    

	public function up()
	{
		Schema::create('users', function($table) {
			$table->increments('id');
			$table->string('username',50)->nullable();
			$table->string('email',100);
			$table->string('password');
			$table->date('created_on');
			$table->date('updated_on');
			$table->integer('invite_by_id')->nullable()->unsigned();
			$table->date('last_login');
			$table->date('last_visit');
			$table->date('last_activity');
			$table->boolean('is_admin')->nullable()->unsigned()->default(0);
			$table->boolean('auto_assign')->unsigned()->default(0);
		});

	}    

	public function down()
	{
		Schema::drop('users');
	}

}