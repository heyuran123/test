<?php
namespace IMooc;
class Application 
{
	public $configs;
	protected static $instance = NULL;
	protected function __construct()
	{
		//$config = require('/configs/database.php');
		$this->configs = new Config('/configs');
	}
	static function getInstance()
	{
		if(empty(self::$instance)){
			self::$instance = new self();
		}
		return self::$instance;
	}
}