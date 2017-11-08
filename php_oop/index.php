<?php
spl_autoload_register('autoload');
function autoload($calss){
	require "$calss".'.php';
}
/*$user = IMooc\Factory::getUser(2);
var_dump($user->getInformation());*/

$users = new \IMooc\ALLUser();
foreach ($users as $value) {
	# code...
	var_dump($value);
	echo '<hr>';
}