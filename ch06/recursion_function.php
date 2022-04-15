<?php
    // 재귀함수
    // 내가 함수라면 내가 나를 호출하는 것.

    /* function factorial($num)
    {
        $result = 1;
        for($i=2; $i<=$num; $i++)
        {
            $result *= $i;
        }
        return $result;
    }
    function factorial2($num)
    {
        $result = 1;
        for($i=$num; $i>0; $i--)
        {
            $result *= $i;
        }
        return $result;
    }
    function factorial_rec($num) 
    {
        if($num === 1) { return 1; }
        return $num * factorial_rec($num - 1);
    } */

    // 절대값 만들기
    function my_abs($val)
    {
        if($val<0) { return ($val*-1);}
        if($val>=0) 
        return $val;
    }

    print "abs(-3) : " . my_abs(-3) . "<br>";
    print "abs(3) : " . my_abs(3) . "<br>";

    //$num = -1;
    // $result = factorial_rec($num); // 3 x 2 x 1
    // print "${num}! = $result <br>";
?>