<?php

class Create_Project_User_Permissions_Table {    

	public function up()
    {
		Schema::create('permissions', function($table) {
			$table->increments('id');
			$table->timestamps();
	});

    }    

	public function down()
    {
		Schema::drop('permissions');

    }

}