<?php
    $numbers = array(10, 20, 5=>30, 40);

    print_r($numbers);
    print "<br>";
    print "count : " . count($numbers) . "<br>";

    $numbers["2"] = 30; 
    print "count : " . count($numbers) . "<br>";

    for($i=0; $i<count($numbers); $i++)
    {
        print $numbers[$i] . "<br>";
    }
    print "-- 끝 --<br>";

    foreach($numbers as $key => $val)
    {
        print $key . " : " . $val . "<br>";
    }
?>