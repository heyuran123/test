<?php
$message=array("id"=>111,"name"=>"POST_method");
$test = array('data' => json_encode($message));
$id=222;
$name="GET_method";
$header=array("token:123456");
$ch=curl_init();
curl_setopt($ch, CURLOPT_URL, "127.0.0.1/test/curl/b.php?id=$id&name=$name");
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch,CURLOPT_POSTFIELDS,$test);
curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
$result=curl_exec($ch);
$curlinfo=curl_getinfo($ch);
curl_close($ch);
$result=json_decode($result,true);
echo "<pre>";
var_dump($result);
var_dump($curlinfo);

//echo $result['HTTP_TOKEN'];
