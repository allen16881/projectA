<?php

class Create_Projects_Table {    

	public function up()
  {
		Schema::create('projects', function($table) {
			$table->increments('id');
			$table->string('name')->unique();
			$table->integer('parent_id')->unsigned();
			$table->integer('priority',3)->zerofill();
			$table->text('description');
			$table->boolean('show_description_in_overview');
			$table->string('logo_file');
			$table->date('completed_on');
			$table->integer('completed_by_id')->unsigned();
			$table->date('created_on');
			$table->integer('created_by_id')->unsigned();
			$table->date('updated_on');
			$table->integer('updated_by_id')->unsigned();
		});
  }    

	public function down()
  {
		Schema::drop('projects');
  }

}