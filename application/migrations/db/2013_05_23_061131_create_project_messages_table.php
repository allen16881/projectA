<?php

class Create_Project_Messages_Table {    

	public function up()
    {
		Schema::create('messages', function($table) {
			$table->increments('id');
			$table->timestamps();
	});

    }    

	public function down()
    {
		Schema::drop('messages');

    }

}