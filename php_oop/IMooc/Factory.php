<?php
namespace IMooc;
class Factory
{
	static function createTest2(){
		$test2 = new Test2;
		return $test2;
	}
	static function createDatabase(){
		$db = Database::getInstance();
		return $db;
	}
	static function getUser($id = NULL)
	{
		$key = 'user_'.$id;
		$user = Register::get($key);
		if(!$user){
			$user = new User($id);
			Register::set($key, $user);
		}
		return $user;
	}
	static function getDatabase()
	{
		$key = 'mysql';
		$db = Register::get($key);
		if(!$db){
			$conf = \IMooc\Application::getInstance()->configs['database']['master'];
			$db = new \IMooc\Database\MySQL();
			$db->connect($conf['host'], $conf['user'], $conf['password'], $conf['dbname']);
			Register::set($key,$db);
		}
		return $db;
	}
}