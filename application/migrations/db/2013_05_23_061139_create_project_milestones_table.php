<?php

class Create_Project_Milestones_Table {    

	public function up()
    {
		Schema::create('milestones', function($table) {
			$table->increments('id');
			$table->timestamps();
	});

    }    

	public function down()
    {
		Schema::drop('milestones');

    }

}