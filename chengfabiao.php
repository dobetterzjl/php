<?php
	echo "<table border='1' align='center'>";
	for($i=9;$i<=1;$i--){
		echo "<tr>";
		for($j=1;$j<=$i;$j++){
			echo "<td>";
			echo $i." * ".$j." = ".$i*$j;
			echo "</td>";
		}
		echo "</tr>";
	}
	
	
	echo "</table>";
?>