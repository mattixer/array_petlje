<!DOCTYPE html>
<html>
<head></head>
<body>
<?php
/** Izradi 3x3 polje i ispiši dijagonalu koja počinje u gornjem lijevom kutu koristeći for petlju. */
$POLJE_BURAAZZ = array( array ("Her", "mit", " crab"),
                        array ("Her", "mit", " crab"),
                        array ("Her", "mit", " crab"));
for($brojac = 0; $brojac<3; $brojac++){
    echo $POLJE_BURAAZZ[$brojac][$brojac];
}

?>
</body>
</html>