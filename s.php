<?php
$conn=mysql_connect("localhost","root","") or die("cant connect");
    $my_db=mysql_select_db('air_reserve') or die ("cant connect to the database");
    $f_no = $_POST['f_no'];
 $from=$_POST['from'];
    $to=$_POST['to'];
$a_t=$_POST['a_t'];
$d=$_POST['date'];
$date=date("Y-m-d",strtotime($d));
$d_t=$_POST['d_t'];
$w=$_POST['w'];
$sql="INSERT INTO `air_reserve`.`flight` (`Fliht_no`, `Origin`, `Destination`, `Tr_code`) VALUES ('$f_no', '$from', '$to', 'dream');";
    mysql_query($sql);
$sql1="INSERT INTO `air_reserve`.`f` (`Date`, `Week_days`, `F_no`, `Departure_time`, `Arrival_time`) VALUES ('$date', '$w', '$f_no', '$d_t', '$a_t');";
     mysql_query($sql1);
$sql2="INSERT INTO `air_reserve`.`seat` ( `F_no`, `Seat_type`, `Available_seat`) VALUES ( '$f_no', 'Business', '40');";
     mysql_query($sql2);
$sql3="INSERT INTO `air_reserve`.`seat` ( `F_no`, `Seat_type`, `Available_seat`) VALUES ( '$f_no', 'Economoic', '40');";
     mysql_query($sql3);
$sql4="INSERT INTO `air_reserve`.`seat_fare` (  `Seat_type`, `F_no`,`Fare`) VALUES ( 'Business','$f_no',  '4000');";
     mysql_query($sql4);
$sql5="INSERT INTO `air_reserve`.`seat_fare` (  `Seat_type`, `F_no`,`Fare`) VALUES ( 'Economic','$f_no',  '4000');";
     mysql_query($sql5);
echo "inserted successfully";

?>