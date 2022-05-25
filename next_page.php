<?php

session_start();
echo "<html>";

/* $sid = session_id();
echo "Session ID returned by session_id(): ".$sid."\n"; 
echo "<br>";
$sid = SID;
echo "Session ID returned by SID: ".$sid."\n";
echo "<br>";*/

$queryString = $_SERVER["QUERY_STRING"];
echo "Query string of the incoming URL: ".$queryString."\n";
echo "<br>";

echo "Cookies received: \n";
foreach ($_COOKIE as $name => $value) {
    echo "<br>";
    echo " $name = $value\n";
}


$myLogin = $_SESSION["myLogin"];
echo "Value of myLogin has been retrieved: ". $myLogin."\n";
echo "<br>";
$myColor = $_SESSION["myColor"];
echo "Value of myLogin has been retrieved: ". $myColor."\n";

echo "</html>\n";

?>