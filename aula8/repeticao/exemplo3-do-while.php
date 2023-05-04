<?php 
	$n = 4;
    $sh = 0;
    $cont = 1;
    do{
        $sh = $sh + (1/$cont);
        $cont++;
    }while($cont <= $n);
    echo "SH = " . $sh;
?>

