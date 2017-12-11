 <?php
    $conn=mysql_connect("localhost","root","") or die("cant connect");
    $my_db=mysql_select_db('air_reserve') or die ("cant connect to the database");
    $p_name = $_POST['name'];
    $p_sex=$_POST['gender'];
    $p_email=$_POST['email'];
$flight_no=$_POST['flight'];
$samount=$_POST['amount'];
$sql="INSERT INTO passenger(Name,E_mail,Sex) 
          VALUES ('$p_name','$p_email','$p_sex');";
$sql2="UPDATE flight_schedule SET Available_seat=Available_seat-'$samount' WHERE F_no='$flight_no';";
   mysql_query($sql) or die ("can not insert values");
mysql_query($sql2);
   mysql_close($conn);
?>
<html>
    <head>
    </head>
    <body>
    Hi <?php echo $_POST["name"];?>,<br>Your desired ticket has been booked for <?php echo $_POST["flight"]?>.You will get confirmation message soon via e-mail.<br>
    Thank you.
    </body>
</html>