<?php
$a=101;
$b=106;
function m1()
{    global $a,$b,$c;
	$c=$a+$b;
	//$GLOBALS['C']=$GLOBALS['a']+$GLOBALS['b'];
    //echo $GLOBALS['C'];
    echo $c;
}
m1();
echo $c;
echo "<pre>";
print_r($_SERVER);
echo "</pre>"
?>