<?php
    print __FILE__ . "<br>";
    print __LINE__ . "<br>";
    print __LINE__ . "<br>";
    print "PHP VERSION : " . PHP_VERSION . "<br>";
    print "OS : " . PHP_OS . "<br>";

    $GLOBALS["foo"] = 10;
    $GLOBALS["foo"] = 11;

    print "-- 글로벌 상수 -- <br>";
    foreach($GLOBALS as $key => $var)
    {
        print $key . " : " . $var . "<br>";
    }

    while(list($key,$var) = each($GLOBALS))
    {
        print $key . " : " . $var . "<br>";
    }
?>