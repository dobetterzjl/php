<a href="add.php">增添文章</a>

<?php
	if($_COOKIE['id']){
		$id=$_COOKIE['id'];
		echo "<span>".$_COOKIE['name']."已登录"."</span>";
		echo "<a href='logout?id=$id'>".'注销'."</a>";
	}else{
		echo "<a href='login.php'>".'游客'."</a>";
	}

?>
<form action="index.php" method="post">
	<input type="text" name="sea" />
	<input type="submit" name="sub" value="搜索" />
</form>
<?php
	//include "conn.php";
	if(isset($_POST['sub'])){
		$se=$_POST['sea'];
		$e="title like '%".$se."%'";
	}else{
		$e=1;
	}

?>
<?php
   include "conn.php";
	//拼写查询语句
	$sql="select * from blog where $e order by blogid desc";
	//发送字符串给数据库
	$query=mysqli_query($link,$sql);
	//将资源型转化为数组型
	while($result=mysqli_fetch_array($query)){
 /*
	echo $result['blogid'];
		die();*/


?>
	
	<h2><a href="view.php?id=<?php echo $result['blogid']?>">标题：<?php echo $result['title']?></a> | <a href="edit.php?id=<?php echo $result['blogid']?>">编辑</a> | <a href="del.php?id=<?php echo $result['blogid']?>">删除</a></h2>
	<li><?php echo $result['time']?></li>
	<p><?php echo iconv_substr($result['content'],0,4)?>...</p>
	<hr/>
<?php
}
?>
