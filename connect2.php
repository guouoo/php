<?php
header("Content-Type:text/html; charset=utf-8");
/**
 * @author 
 * @copyright 2015
 */

$conn = mysql_connect("localhost","root","66196619")or die("Connecting failed!" . mysql_error());
    echo "Connect Mysql database successfully:  ";
    echo "<BR>";

$select =  mysql_select_db("tyuser",$conn) or die("Failed to connect to database: ".mysql_error());
    if ($select ){
        echo "Select table in database successfully!"."<br>";
    }
    
mysql_query("set names utf8");    

$result = mysql_query("select * from zhai limit 10");
$row = mysql_num_rows($result);
$cols = mysql_num_fields($result);
echo($result);
    echo "<BR>";
echo($row);
    echo "<BR>";
echo($cols);

echo'<table align="center" width="80%" border ="1">';
echo'<caption><h1>User Information</h1></caption>';
echo'<th>Name</th><th>Email</th><th>PWD</th>';
while($row=mysql_fetch_row($result)){
    echo('<tr>');
    foreach($row as $data){
        echo'<td>'.$data.'</td>';
    }
    echo('</tr>');
}
echo '</table>';

//while ($result2=mysql_fetch_array($result)){
//  echo '<tr>';
//  echo '<td height = "25">'.$result2['zai_name'].'  '.'</td>';
//  echo  '<td height = "25">'.$result2['zai_email'].'  '.'</td>';
//  echo  '<td height = "25">'.$result2['zai_pwd'].'  '.'</td>';
//  echo  '</tr>';
//      
//}


mysql_free_result($result);
mysql_close($conn);
?>