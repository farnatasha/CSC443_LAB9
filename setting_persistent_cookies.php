<?php
setcookie ("myLoginName", "myWebsite");
setcookie ("myPreferredColor","Light Blue");
setcookie ("CouponNumber", "07470433",time()+60*60*24*7);
setcookie ("CouponValue", "100.00",time()+60*60*24*7);

print("\n");
print("2 temporary cookies were delivered.\n");
echo "<br>";
print("2 consistent cookies were delivered.\n");
echo "<br>";

if (isset($_COOKIE["myLoginName"])) {
    $loginName = $_COOKIE["myLoginName"];
    print ("Received a cookie named as myLoginName: ".$loginName."\n");
    echo "<br>";
} else {
    print ("Did not received a cookie named as myLoginName.\n");
}
echo "<br>";
$count = count ($_COOKIE);
print ("$count cookies received.\n");
foreach ($_COOKIE as $name => $value) {
    echo "<br>";
    print " $name = $value\n";
}
echo "<br>";
print("\n");

?>