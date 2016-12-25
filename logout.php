<?php
	if(isset($_COOKIE['id'])){
		setcookie('id',null);
		setcookie('name',null);
		echo "<script>location='index.php'</script>";
	}
?>