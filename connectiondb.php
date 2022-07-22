<?php

$username = "root";
$password = "";
$host = "localhost";

$connector = mysqli_connect($host,$username,$password)
    or die("Unable to connect");
echo "Connections are made successfully::";
$selected = mysqli_select_db($connector,"practice")
   or die("Unable to connect");

?>