<?php
class b extends a{
	private $instance;
	public function __construct(){
		echo "b_construct";
	}
	public  function test_function(){
		/*$this->instance=new self();
		return $instance;*/
		$this->say_hello();
		//parent::__construct()->say_hello();
	}
}