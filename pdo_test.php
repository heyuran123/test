<?php
$pdo_con=new PDO("pgsql:host=127.0.0.1;dbname=first_database;port=5432","postgres","ROOT");
if($pdo_con){
	//echo "succ";
}else{
	echo "error";
	exit;
}
$content='heyuran';
$id=1;
$ready=$pdo_con->prepare("select * from test where content=? and id=?");
echo "<pre>";
/*while($row=$result->fetch()){
	var_dump(array_keys($row));
	//echo $row['id']."-".$row['content']."<br>";
}*/
$result=$ready->execute(array($content,$id));
$row=$ready->fetchAll();
var_dump($row);
foreach ($row as $key => $value) {
	# code...
	echo $key."-".$value['id']."-".$value['content']."<br>";
}
