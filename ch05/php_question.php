<?php
    /*
    5! = 5 x 4 x 3 x 2 x 1 = 120
    $var! = ?
    */








    $var=rand(2,10);

    $f = 1;
    for($i=1; $i<=$var; $i++)
    {
        $f *= $i;
    }
    echo $var . "!의 값은 " . $f . "입니다.";

?>