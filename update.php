<?php
 $conn=mysql_connect("localhost","root","") or die("cant connect");
    $my_db=mysql_select_db('air_reserve') or die ("cant connect to the database");
$n="ctg.dha001";
$sql="UPDATE flight_schedule SET Available_seat=Available_seat+1 WHERE F_no='$n';";
    mysql_query($sql);
?>