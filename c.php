<?php
/*include('a.php');
include("b.php");
$b=new b();
$test=$b->test_function();
a::static_function();*/
class c extends b{
	public function test(){
		$this->say_hello();
	}
}