<?php

$c = 0;
rekursif2(5);

function rekursif3($d, $n){
  global $c;
    if ($d > $c - $n){
        echo "*";
        rekursif3($d - 1, $n);
    }
}
function rekursif2($n) {
    global $c;
    rekursif3($c, $n);
    echo "<br>";
    if (--$n > $c) {
       rekursif2($n);
    }
}

/*================================================*/

echo "<br>";

$nilai=5;

function rekursif($a, $b, $nilai){
    if ($a <= $nilai){
        if ($b <= $a){
        echo $b;
        $b++;
        rekursif($a, $b, $nilai);   
    }else{
        echo "<br>";
        $a++;
        rekursif($a,1,$nilai);
    }
}
}
rekursif(1, 1, $nilai);

?>
