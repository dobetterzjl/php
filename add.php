	<?php
	include 'conn.php';
	if(isset($_POST['sub'])){
		$text=$_POST['title'];
		$con=$_POST['con'];
		//拼一个字符串mysql插入的语法
	$sql="insert into blog(blogid,title,content,time) values(null,'$text','$con',now())";
		//字符串发送给数据库 
	
		$query=mysqli_query($link,$sql);
		if($query){
			echo "<script>alert('插入成功')</script>";
			echo "<script>location='index.php'</script>";
		}else{
			echo "<script>alert('插入失败')</script>";
		}
	}
	
	?>
	
	<meta charset="UTF-8">
<form action="add.php" method="post">
	标题:<input type="text" name="title"><br />
	内容:<textarea rows=10 cols=30 name="con"></textarea><br />
	<input type="submit" name="sub" value="发表">
</form>