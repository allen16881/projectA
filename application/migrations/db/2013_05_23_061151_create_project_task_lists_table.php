<?php

class Create_Project_Task_Lists_Table {    

	public function up()
    {
		Schema::create('lists', function($table) {
			$table->increments('id');
			$table->timestamps();
	});

    }    

	public function down()
    {
		Schema::drop('lists');

    }

}