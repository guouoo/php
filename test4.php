<?php

/**
 * @author 
 * @copyright 2015
 */

$conn = mysqli_init();
if (!$conn){
    echo "mysqli_init error!";
    exit(0);    
}

$ret = mysqli_real_connect($conn,"localhost","root","66196619","test2",3306,"test",MYSQLI_CLIENT_FOUND_ROWS);
if(!$ret){
    echo "mysqli_real_connect error!";
    exit(0); 
}

//Insert records
$sql = 'insert into test values(1,"tom")';
$ret = mysqli_query($conn,$sql);
if(!$ret){
    echo "mysqli_query error!";
    exit(0); 
}

//Search records
$sql = 'select * from test';
$ret = mysqli_query($conn,$sql);

//get searching result
while (($row = mysqli_fetch_array($ret,MYSQLI_ASSOC))!= NULL)
{
    echo "id: " . $row['id'] . "<BR>";
    echo "name: " . $row['name'] . "<BR>";
}

?>