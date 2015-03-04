<?php

/**
 * @author 
 * @copyright 2015
 */
$conn = mysql_connect("localhost","root","66196619")or die("Connecting failed!" . mysql_error());
echo "Connect Mysql database successfully:  ";
echo "<BR>";
echo mysql_get_client_info();
echo "<BR>";
echo mysql_get_host_info();
echo "<BR>";
echo mysql_get_proto_info();
echo "<BR>";
echo mysql_get_server_info();
echo "<BR>";
echo mysql_client_encoding();
echo "<BR>";
echo mysql_stat();
echo "<BR>";

$select =  mysql_select_db("tyuser",$conn);
if ($select ){
    echo "Connect to database successfully!";
}

mysql_close($conn);

?>s