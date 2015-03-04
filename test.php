<?php

/**
 * @author Taff  
 * @copyright 2015
 */

$a =5;
echo $a;
echo "<BR>";
$b = "This is a string";
echo $b;
echo "<BR>";
echo "$a, $b";
echo "<BR>";
echo '$a, $b';
echo "<BR>";
echo $a. $b;
echo "<BR>";
echo $a . $a;
echo "<BR>";

file_put_contents("d:\\AppServ\\tmp.txt","start\n",FILE_APPEND);

$animal[0] = "dog";
$animal[1] = "cat";
$animal[2] = "sheep";
$animal['cat'] = "tiger";
echo $animal[0].",".$animal[1].",".$animal[2]." are animals!";
echo "<BR>";
echo $animal['cat'].' is a huge animal.';

echo "<BR>";
$arr = array(
'hello',
'cat' => array('hello','world'),
'dog' => 1,
'sheep'
);

var_dump($arr);

echo "<BR>";
$ret = var_export($arr,true);
//echo "var_export result: ".$ret;
file_put_contents("d:\\AppServ\\tmp.txt","var_export result: ".$ret."\n",FILE_APPEND);
file_put_contents("d:\\AppServ\\tmp.txt","end\n".$ret."\n",FILE_APPEND);

?>