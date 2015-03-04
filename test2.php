<?php

/**
 * @author 
 * @copyright 2015
 */
file_put_contents("d:\\AppServ\\tmp1.txt",var_export($_GET,true),FILE_APPEND);
file_put_contents("d:\\AppServ\\tmp1.txt","\n",FILE_APPEND);
file_put_contents("d:\\AppServ\\tmp1.txt",var_export($HTTP_RAW_POST_DATA,true),FILE_APPEND);
?>