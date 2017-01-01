<?php
	if(isset($_POST['sub'])){
		$file=$_FILE['sfile'];
		
	}

?>
<meta charset="UTF-8">
<form action="file.php" method="post" enctype="multipart/form-data">
	<input type="file" name="sfile" />
	<input type="submit" name="sub" value="上传" />
	
</form>
