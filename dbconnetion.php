<?php
/*
$sname= "localhost";

$unmae= "root";

$password = "";

$db_name = "test_db";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if ($conn) {

    echo "Connection sucessfully";

}
*/
?>
<?php
$serverName = "192.168.0.100"; //serverName\instanceName
$connectionInfo = array( "Database"=>"database1", "UID"=>"sa", "PWD"=>"sqltest");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn ) {
     echo "Connection established.<br />";
}else{
     echo "Connection could not be established.<br />";
     die( print_r( sqlsrv_errors(), true));
}
?>
?>
<?php
//$test=mssqli_connect('192.168.0.100','sa','sqltest')
//or die('some think wrong');
//if ($test) 
//{
///    echo 'connected';# code...
//}
//else{
//echo 'not connected';
//}
?>