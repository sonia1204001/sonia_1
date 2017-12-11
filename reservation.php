 <?php
    $conn=mysql_connect("localhost","root","") or die("cant connect");
    $my_db=mysql_select_db('cab_site') or die ("cant connect to the database");
    $p_name = $_POST['name'];
    $p_email=$_POST['email'];
    $p_phone=$_POST['contact_no'];
    $pickup=$_POST['pick_up_place'];
    $drop=$_POST['drop_off_place'];
 $pick_time=$_POST['pick_up_time'];
$license_no2=$_POST['license_no'];
$date=$_POST['date1'];

$newdate=date('Y-m-d',strtotime($date));
$sql="INSERT INTO customer(name,e_mail,phone)
          VALUES ('$p_name','$p_email','$p_phone');";
mysql_query($sql) or die($sql."<br/><br/>".mysql_error());
$sql3="INSERT INTO reservation_detail(date,pick_up_place,drop_off_place,pick_up_time,license_no,c_id) 
          VALUES ('$newdate','$pickup','$drop','$pick_time','$license_no2',LAST_INSERT_ID());";
mysql_query($sql3) or die($sql3."<br/><br/>".mysql_error());
        $sql4="SELECT r_code FROM reservation_detail";
        $last=mysql_query($sql4) or die($sql4."<br/><br/>".mysql_error());
while($row=mysql_fetch_assoc($last)){
    $last1=$row['r_code'];
}
$sql5="SELECT c_id FROM reservation_detail WHERE r_code='$last1'";
$pid=mysql_query($sql5) or die($sql5."<br/><br/>".mysql_error());
while($row=mysql_fetch_assoc($pid)){
    $customer_id=$row['c_id'];
}
$sql2="UPDATE `cab_site`.`cab_schedule` SET `availability` = 0 WHERE `cab_schedule`.`license_no` = '$license_no2';";
mysql_query($sql2) or die($sql2."<br/><br/>".mysql_error());
   mysql_close($conn);
?>
<html>
    <head>
       
<style>
body
{
    background-image: url(last.jpg);
    background-repeat: no-repeat;
    background-position: center;
    color: transparent;
   
}

.w
{
     font-family: cursive;
    font-size: 30px;
    color: darkblue;
}

        </style>
    </head>
    
    <body>
        <div class="w">
    Hi <?php echo $_POST["name"];?>,<br>Your desired ticket has been booked for cab with <?php echo $_POST["license_no"]?>.You will get confirmation message and all other information about your reservation via e-mail soon.<br>Please keep the printed copy of your email.<br>
            <br>
    Thank you.
            </div>
        <html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    
.fa {
  padding: 20px;
  font-size: 30px;
  width: 50px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;

}

.fa:hover {
    opacity: 0.7;
}



.fa-google {
  background: #dd4b39;
  color: white;
    margin-left: 500px;
}


.fa-yahoo {
  background: #430297;
  color: white;
    
}

.fa-soundcloud {
  background: #ff5500;
  color: white;
}

.fa-reddit {
  background: #ff5700;
  color: white;
}

.fa-rss {
  background: #ff6600;
  color: white;
}
    
}
</style>
</head>
<body>

<h2>Style Social Media Buttons</h2>

<!-- Add font awesome icons -->

<a href="https://accounts.google.com/ServiceLogin/signinchooser?service=mail&passive=true&rm=false&continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&ss=1&scc=1&ltmpl=default&ltmplcache=2&emr=1&osid=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin" class="fa fa-google"></a>
<a href="https://login.yahoo.com/?.src=ym&.intl=us&.lang=en-US&.done=https%3a//mail.yahoo.com" class="fa fa-yahoo"></a>
<a  href="page2.php" style="text-decoration: none;
    font: 30px;
    border-radius: 5px;
    font-size: 20px;
    color: black;
    background-color: brown;" class="fa b">BACK</a>
      
</body>
</html> 
    </body>
</html>

<?php
error_reporting(E_ALL);
require("PHPMailer5.2.4/class.phpmailer.php");
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPDebug= 2;
$mail->From="nazmunsonia403@gmail.com";
$mail->FromName = "ABC";
$mail->Host="smtp.gmail.com";
$mail->SMTPSecure="ssl";
$mail->Port=465;
$mail->SMTPAuth = true;
$mail->Username = "nazmunsonia403@gmail.com";
$mail->Password = "62968676642";
$mail->AddAddress($p_email,$p_name);
$mail->AddReplyTo("nazmunsonia403@gmail.com","ABC");
$mail->WordWrap=50;
$mail->IsHTML(true);
$mail->Subject = "Confirmation message";
$mail->Body ="
<html>
<title>HTML email</title>
<head><title>HTML email</title></head>
<body>
<p>Dear $p_name,
</p>
<p>Your cab has been booked.License No.: $license_no2, on Date: $date, passenger id: $customer_id and Booking code: $last1.</p>
<p>Thank You.</P>
</body>
</html>
";      //HTML Body
 if($mail->send())
 {
    echo "You have been sent an confirmation email";
 }
   else 
    {
   echo "Sending mail failed";
   }
 
?>
