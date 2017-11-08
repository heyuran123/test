<meta charset="UTF-8">
<?php
if(isset($_GET['id']))//判断是否传值
{
$s=str_replace(' ','+',$_GET['id']);
$s=$s;//接受传递的值 值一般是要打开的目录的绝对路劲
	chdir($s);//切换到要打开的目录
}
$a=opendir('.');//打开当前目录
while(false!==($c=readdir($a)))//循环遍历目录内容的文件名
{         
   if(is_dir($c))//判断是目录还是文件
   {
	    if($c=='.'){}
		else{
	   		if($c=='..'){
	   			$w=substr(getcwd(),0,strrpos(getcwd(),'\\'));
	   			//当前路径加上目录名 就是目录的绝对路径
	   			echo "上一级"."<a href='directory.php?id=$w'>打开</a><br />";
	   			//当点击打开时将要打开的绝对路径传递出去  用chdir 切换到要打开的目录下
	   		}else
	   		{
		   		$w=getcwd().'\\'.$c;
		   		//当前路径加上目录名 就是目录的绝对路径
	   			echo "$c"."<a href='directory.php?id=$w'>打开</a><br />";
	   			//当点击打开时将要打开的绝对路径传递出去  用chdir 切换到要打开的目录下
		   	}
		}
	}
	   else
	   {
		   echo "$c 不是目录<br />";
	   }
}
