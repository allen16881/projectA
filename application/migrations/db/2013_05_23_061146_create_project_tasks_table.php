<?php

class Create_Project_Tasks_Table {    

	public function up()
    {
		Schema::create('tasks', function($table) {
			$table->increments('id');
			$table->timestamps();
	});

    }    

	public function down()
    {
		Schema::drop('tasks');

    }

}