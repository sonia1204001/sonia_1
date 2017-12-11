<?php
$conn=mysql_connect("localhost","root","") or die ("can not connect to server");
$db=mysql_select_db("air_reserve",$conn) or die("can not connect to database");
$sql="CREATE EVENT  myevent ON SCHEDULE AT'2015-09-23 12:01:00' DO INSERT INTO flight_schedule(Date) VALUES(CURRENT_DATE());"
    mysql_query($sql);
?>