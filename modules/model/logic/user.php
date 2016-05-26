<?php
namespace model\logic;

use model\database\Table;
class User{
	public function lists(){
		$table = new Table('vip_user');
		return $table->lists(' 	where 1=1');
	}
}
