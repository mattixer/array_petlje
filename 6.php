<!DOCTYPE html>
<html>
<head></head>
<body>
<?php
/** Stvori 2 brojevna polja i ispisi sve kombinacije brojeva te dvije petlje koji, 
	kad se broj iz druge petlje oduzme broju iz druge petlje 
	daje rezultat koji je veci ili jednak 0. */
$brojevno = array(4,5,6,1,3,2,3);
$polje    = array(4,5,1,2,9,8,6);
foreach ($brojevno as $prvavrijednost){
	foreach($polje as $drugavrijednost){
		if(($prvavrijednost - $drugavrijednost)<0){
			continue;
		}
		echo $prvavrijednost;
		echo " ";
		echo $drugavrijednost;
		echo "<br>";
	}
}
?>
</body>
</html>