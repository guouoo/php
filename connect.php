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

$select =  mysql_select_db("test",$conn) or die("Failed to connect to database: ".mysql_error());
    if ($select ){
        echo "Connect to database successfully!"."<br>";
    }

$insert  = "INSERT INTO test_db(name) VALUES ('Jim'),('Jon'),('Jack')";

$result = mysql_query($insert);
    if($result && mysql_affected_rows()>0){
        echo "Record(s) are insert successfully, its ID for last record is: ". mysql_insert_id()."<br>";
        }else{
        echo "Insert record(s) failed, error No. is: ".mysql_errno().", error reason: ".mysql_error()."<br>";
    }

$result2 = mysql_query("DELETE FROM test_db WHERE name ='jack'");
    if($result2 && mysql_affected_rows()>0){
        echo "Record(s) is deleted successfully!<br>";
        }else{
        echo "Delete record(s) failed, error No. is: ".mysql_errno().", error reason: ".mysql_error()."<br>";
    }

mysql_close($conn);

?>