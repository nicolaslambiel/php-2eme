
<html>
    <table>
<?php
	echo"<tr>";
	echo"<th>";
		for($i=0;$i<$multiple;$i++){
			echo"<th>"$i;
			}
		for($i=0;$i<$multiple;$i++){
			echo"<tr>";
			echo"<th>"$i;
			for($j=0;$j<$multiple;$i++){
			echo"<td>",$i+$j;
			}}
?>
    </table>
</html>
