<?php

    $mysql_host = 'localhost';
    $mysql_username = 'root';
    $mysql_password = '';
    $mysql_db = 'mathuralive';
    
    if(@!mysql_connect($mysql_host,$mysql_username,$mysql_password)||@!mysql_select_db($mysql_db)){
        die('could not connect.');
    }

?>