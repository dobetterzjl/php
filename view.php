<?php
	include "conn.php";
	if(isset($_GET['id'])){
		$id=$_GET['id'];
		$sql= "update blog set hits=hits+1 where blogid='$id'";
		$query=mysqli_query($link,$sql);
		if($query){
			$sql="select * from blog where blogid='$id'";
			$query=mysqli_query($link,$sql);
			$result = mysqli_fetch_array($query);
		}
		// echo $sql;
		// die();
	}
	

?>
<meta charset="UTF-8">
	<h2><?php echo $result['title']?></h2>
	<li><?php echo $result['time']?></li>
	<span>访问量：<?php echo $result['hits']?></span>
	<p><?php echo $result['content']?></p>
	<hr/>
	
<form action="view.php" method="post">
	<input type="hidden" name='bid' value="<?php echo $result['blogid']?>" />
	<textarea name="pl" cols=15 rows=5></textarea><br/>
	<input type="submit" name="sub" value="评论" />
</form>
<?php
	if(isset($_POST['sub'])){
		$bid=$_POST['bid'];
		$puid=$_COOKIE['id'];
		$pcon=$_POST['pl'];
		$sql="insert into pl(plid,pbid,puid,pcon,ptime) values(null,'$bid','$puid','$pcon',now())";
		$query=mysqli_query($link,$sql);
		if($query){
			echo "<script>location='view.php?id=".$bid."'</script>";
		}else{
			echo "评论失败";
		}
		
	}

?>

<?php 
	
	$sql="select * from pl,user where pl.puid=user.userid and pbid='$id'";
	$query=mysqli_query($link,$sql);
	while($result=mysqli_fetch_array($query)){
		
		
?>

<p>123</p>
<li><?php echo $result['ptime']?></li>
<span>评论者:<?php echo $result['name']?></span>

<?php
	}
?>