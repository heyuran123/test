<meta charset="UTF-8">
<?php
/*$pg=pg_connect("host=localhost user=postgres password=ROOT dbname=first_database")or die("can't connect pgdb");
if($pg){
	echo "success!<br>";
}
else{
	echo "error connect";
}
$result=pg_query($pg,"insert into test(content) values('hahah')")or die("can not run query to table");
$result=pg_query($pg,"select * from test")or die("can not run query to table");
while($row=pg_fetch_array($result)){
	echo $row['id']."--".$row['content']."<br>";
}*/

/*$arr=array(
            'host' => '192.168.28.17',        
            'user' => 'postgres',
            'password' => 'HA..1postgres',
            'database' => 'passport',
            'port' => 5432
        );
echo count($arr);
var_dump($arr[2]);*/

//phpinfo();
/*echo "hahaha";

//echo md5('123');

include('a.php');
include("b.php");
include("c.php");
$c=new c();
$c->test();

echo date("Y-m-d H:i:s");

echo "new ubuntu modify";

echo "new windows modify";
echo "hehehe";*/
//echo time();
/*$update = time();
$salt = md5("heyuran$update@#$%^");
$password = md5(md5('123').$salt);
echo $update.'<br>';
echo $salt."<br>";
echo $password.'<br>';*/

//$params = array(1, 21, 63, 171);
/*  创建一个填充了和params相同数量占位符的字符串 */
/*$place_holders = implode(',', array_fill(0, count($params), '?'));
echo $place_holders;*/

/*$data = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21);
$page = 1;
$page_size = 10;
$total = count($data);
$offset = ($page-1)*$page_size;
$return_data = array();
for ($i=0; $i < $page_size; $i++) { 
	# code...
	if(empty($data[$offset+$i])){
		break;
	}
	$return_data[$i] = $data[$offset+$i];
}
echo "<pre>";
var_dump($return_data);*/


/*$url = 'www.baidu.com?id=1&amp;name=2';
echo '<pre>';
echo $url;*/

/*$value = file_get_contents('http://www.baidu.com');
echo $value;*/

/*$x = 2;
echo $x == 2 ? '我' : $x == 1 ? '你' 
: '它';*/

//$start_time = strtotime(date('Y-m-d H:i:s') . ' -1 day');
$start_time = strtotime('2017-10-20 13:45:36');
echo $start_time;
