<?php
function king($m,$n){
	$monkeys = range(1,$n);
	$i = 1;
	while(count($monkeys) >1){
		if($i%$m == 0){
			unset($monkeys[$i-1]);
		}else{
			array_push($monkeys, $monkeys[$i-1]);
			unset($monkeys[$i-1]);
		}
		$i++;
	}
	return current($monkeys);
}
$m = $_GET['m'];
$n = $_GET['n'];
echo king($m, $n);