<!DOCTYPE html>
<html>
<head></head>
<body>
<?php
/** Izradi brojevno polje koje ce sadrzavati 5 nasumičnih brojeva
 * i sortiraj ga od manjeg prema vecem, te ispisi te brojeve. */
$polje = array(rand(),rand(),rand(),rand(),rand());
sort($polje);
for($brojac=0;$brojac<5;$brojac++){
    echo $polje[$brojac];
    echo "<br>";
}
?>
</body>
</html>