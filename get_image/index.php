<!DOCTYPE HTML>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<title>php保存远程图片到本地，php正则匹配文章中的图片地址</title>
</head>
<body>
<?php
$baidu_value = file_get_contents('http://www.baidu.com');
//echo $value;
//保存文章中远程图片到本地
//作者：yanue;
// 文件保存目录路径(请更换为你自己的路径， 你可以echo一下)
$save_path = 'image/';
// 文件保存目录URL
$save_url = 'swfupload/attached/';
$save_path = realpath ( $save_path ) . '/';
// 图片存储目录
$imgPath = $save_path . date ( "Ymd" );
$imgUrl = $save_url . date ( "Ymd" );
// 创建文件夹
if (! is_dir ( $imgPath )) {
 @mkdir ( $imgPath, 0777 );
}
//$content = '这里是文章内容，这里插入一张图片测试 <img src="XXXXXXXXXXXXXXXXXXXX">';
$content = stripslashes ( $baidu_value );
$img_array = array ();
// 匹配所有远程图片
preg_match_all('/(src|SRC)=[\"|\'| ]{0,}(http:\/\/(.*)\.(gif|jpg|jpeg|bmp|png))/isU', $content, $img_array);
// 匹配出来的不重复图片
$img_array = array_unique ( $img_array [2] );
print_r($img_array);
// 时间无限制
set_time_limit ( 0 );
foreach ( $img_array as $key => $value ) {
 $value = trim ( $value );
 // 读取远程图片
 $get_file = @file_get_contents ( $value );
 // 保存到本地图片名称
 $imgname = date ( "YmdHis" ) . '_' . rand ( 10000, 99999 ) . "." . substr ( $value, - 3, 3 );
 // 保存到本地的实际文件地址（包含路径和名称）
 $fileName = $imgPath . '/' . $imgname;
 // 实际访问的地址
 $fileurl = $imgUrl . "/" . $imgname;
 // 文件写入
 if ($get_file) {
 $fp = @fopen ( $fileName, "w" );
 @fwrite ( $fp, $get_file );
 @fclose ( $fp );
 }
 // 替换原来的图片地址
 $content = ereg_replace ( $value, $fileurl, $content );
}
//echo $content;
?>
</body>
</html>