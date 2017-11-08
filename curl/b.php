<?php
$server=$_SERVER;
$data_get=$_GET;
$data_post=$_POST;
$result=array_merge($data_post);
$test="heyuran";
//$get=array("id"=>100,"name"=>"heyuran");
echo json_encode($result);