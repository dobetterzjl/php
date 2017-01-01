<?php
	//连接数据库
	$link=@mysqli_connect('localhost','root','') or die('连接数据库失败');
	//选择数据库名
	@mysqli_select_db($link,'blogll')or die(选择数据库名失败);
	//选择字符编码
	mysqli_set_charset($link,'utf8');
?>