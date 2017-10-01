<!DOCTYPE html>
<html>
<head></head>
<body>
<?php
/** Izradi 2 brojevna polja i ispiši onaj zbroj tih polja koji je veći. */
$brojevno = array(4,5,6,1,3,2,3);
$polje = array(4,5,1,2,9,8,6);
$brojevnozbroj = 0;
$poljezbroj = 0;
for($brojac=0;$brojac<count($brojevno);$brojac++){
    $brojevnozbroj+=$brojevno[$brojac];
}
for($brojac=0;$brojac<count($polje);$brojac++){
    $poljezbroj+=$polje[$brojac];
}
if($brojevnozbroj>$poljezbroj){
    echo "Prvo polje: ";
    echo $brojevnozbroj;
}else{
    echo "Drugo polje: ";
    echo $poljezbroj;
}
?>
</body>
</html>