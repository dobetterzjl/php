<?php
	echo"<table border=1 align=center>";
	for($i=9;$i>0;$i--){
		echo"<tr>";
		for($j=1;$j<=9-$i;$j++){
			echo "<td>";
			echo "&nbsp";
			echo "</td>";
		}
		for($k=1;$k<=$i;$k++){
			echo "<td>";
			echo $i." * ".$k." = ".$i*$j;
			echo "</td>";
		}
		echo "</tr>";
	}
	echo "</table>";


?>