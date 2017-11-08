<?php
namespace App;
class Test1{
	public static function test(){
		echo 'test1';
	}
	function __call($func,$param){
		var_dump($func);
		var_dump($param);
	}
	function __set($key, $value){
		var_dump($key,$value);
	}
}