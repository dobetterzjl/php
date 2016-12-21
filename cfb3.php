<?php
	echo "<table border='1' align='center'>";
	for($i=1;$i<=9;$i++){
		echo "<tr>";
			for($j=0;$j<9-$i;$j++){//空格
			echo "<td>";
			echo '&nbsp;';
			echo "</td>";
				
			}
			for($k=1;$k<=$i;$k++){
				echo "<td>";
				echo $i." * ".$k." = ".$i*$k;
				echo "</td>";
				
			}
		
		echo "</tr>";
	}
	
	echo "</table>";
?>