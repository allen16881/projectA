<?php

class Create_Companies_Table {    

	public function up()
    {
		Schema::create('companies', function($table) {
			$table->increments('id');
			$table->timestamps();
	});

    }    

	public function down()
    {
		Schema::drop('companies');

    }

}