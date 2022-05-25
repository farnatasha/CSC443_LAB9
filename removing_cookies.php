<?php
setcookie ("CouponNumber",time()-1);
setcookie ("CouponValue",time()-1);
print ("<pre>\n");
echo "<br>";
print ("2 cookies were delivered with past times.\n");
echo "<br>"; 

$count = count ($_COOKIE);
print("$count cookies received.\n");
foreach ($_COOKIE as $name => $value) {
    echo "<br>";
    print " $name = $value\n";
}

echo "<br>";
print ("<\pre>\n");

?>