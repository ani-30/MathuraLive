<?php
require 'core.inc.php';
require 'connect.inc.php';
if(isset($_POST['deleteSno'])&& isset($_POST['tabledelete']))
{
    $table=$_POST['tabledelete'];
      $snodelete=$_POST['deleteSno'];
    if(!empty($table) && !empty($snodelete))
    {
        if($table=='videos')
        {
            $query1="Select vname from videos where Sno=$snodelete";
            if($query_run=mysql_query($query1))
            {
                 $vname=mysql_result($query_run,0);
                 $path = "uploads/$vname";
                 unlink($path);
            }
        }
        $query="DELETE FROM `$table` WHERE Sno=$snodelete";
        if($query_run=mysql_query($query))
        {
            echo'delted';
       header('location:welcome.php');
        }
        else
            echo'error';
    }
    
    
}


?>