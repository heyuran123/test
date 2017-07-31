<?php
class a {
	public function __construct(){
		//echo "a_construct";
		$tself=new self();
		return $self;
	}
	public function say_hello(){
		echo "hello a";
		return;
	}
}