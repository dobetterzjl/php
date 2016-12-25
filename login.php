<?php
	include "conn.php";
	if(isset($_POST['sub'])){
		$name=$_POST['username'];
		$pass=$_POST['pass'];
		$sql="select * from user where name='$name' and pass='$pass'";
		$query=mysqli_query($link,$sql);
		$rs=mysqli_fetch_array($query);
			if($rs){
			setcookie('id',$rs['userid'],time()+30);
			setcookie('name',$rs['name'],time()+30);
			echo "<script>location='index.php'</script>";
		}else{
			echo "登录失败";
		}
	}


?>



<meta charset="UTF-8">
<form action="login.php" method="post">
	用户名:<input type="text" name="username"><br />
	密码:<input type="password" name="pass"><br />
	<input type="submit" name="sub" value="登录">
	<input type="reset" name="rst" value="重置">
</form>