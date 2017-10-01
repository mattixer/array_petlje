<!DOCTYPE html>
<html>
<head></head>
<body>
<?php
/** Koristeci petlju foreach, svaki clan brojevnoga polja povecajte za 3. Polje treba ispisati prije i poslje uređenja polja.
*/
$polje = array(4,5,1,2,9,8,6);
foreach($polje as $value) {
echo $value;
echo " ";
}
echo "<br>";
foreach ($polje as &$vrijednost){
	$vrijednost += 3;
}
unset($vrijednost); /** Raskida referencu sa posljednjim korištenim elementom.*/
foreach($polje as $value) {
echo $value;
echo " ";
}
?>
</body>
</html>