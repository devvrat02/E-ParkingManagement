<?php
function stat_increment($check,$con){
    $sql="update admin set stat=stat+1 where park='$check'";
    if($con->query($sql)===true)
    {
        echo "Data inserted successfilly";
    }else
    {
        echo "error ".$sql."".$con->error;
    }
}
function stat_decrement($check,$con){
    $sql="update admin set stat=stat-1 where park='$check'";
    if($con->query($sql)===true)
    {
        echo "Data inserted successfilly";
    }else
    {
        echo "error ".$sql."".$con->error;
    }
}
function timeinc($a)
{$timestamp = strtotime($a) + 60*60;

$time = date('H:i', $timestamp);

return $time;}

?>