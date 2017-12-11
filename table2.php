<html>
<head>
      <div class="scroll1">
         <marquee behavior="scroll" direction="right" scrollamount="10" scrolldelay="0.1"><div class="image2">ABC !!!  Journey to your Dream !!! ABC !!! ABC !!!  Journey to your Dream !!! ABC</div></marquee>
</div>       
    <link href="tbl1.css" rel="stylesheet" type="text/css">
    </head>
<body>
    <html>
<head>
<style>
body {margin:0;}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 130px;
  text-decoration: none;
  font-size: 20px;
   
}
.topnav a.active:hover {
  background-color: #ddd;
  color: black;
}
.topnav a.available:hover {
  background-color: #ddd;
  color: black;
}
.topnav a.cancel:hover {
  background-color: #ddd;
  color: black;
}
.topnav a.about:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
    background-color: #4CAF50;
    color: white;
}
   .topnav a.available {
    background-color: blueviolet;
    color: white;
}
    .topnav a.cancel {
    background-color: darkolivegreen;
    color: white;
}
     .topnav a.about {
    background-color: cornflowerblue;
    color: white;
}
   
</style>
</head>
<body>

<div class="topnav">
  <a class="active" href="page2.php">Home</a>
  <a class="available" href="table3.php">Available cab</a>
  <a class="cancel" href="cancel.php">Cancel booking</a>
  <a class="about" href="Travel_agency.php">About</a>
</div>
</body>
</html>
    <div class="heading"><p>Available Cabs are:</p></div>
        <?php
$conn=mysql_connect("localhost","root","") or die("cant conect");
$db=mysql_select_db("cab_site") or die("can not connect to db");
$oridate=$_POST['date'];
$newdate=date("Y-m-d",strtotime($oridate));
$sql="SELECT All a.license_no,a.model,a.fare,a.no_of_bag,a.no_of_seat,a.cab_code,a.image,b.date,b.availability,b.weekdays,b.license_no
from cab a
INNER JOIN cab_schedule b
ON a.license_no=b.license_no";
$data=mysql_query($sql) or die($sql."<br/><br/>".mysql_error());
$t=0;
$c1="r";
$s=1;
while($row=mysql_fetch_assoc($data))
{
    if($row['date']==$newdate and $row['availability']==1)
    {
        $t=1;
        echo '<img height=200px width=300px src="data:image/jpeg;base64,'  . base64_encode( $row['image'] ) . '" style="margin-left: 320px;"/><input type="submit" name="submit" value="Book"style="color: seagreen;cursor: pointer; text-decoration:underline;font-size: 25px;" ><p style="color:maroon;font-size: 20px;margin-left: 320px;">License no:'.$row['license_no'].'<br>Model: '.$row['model'].' , Fare (per-hours): '.$row['fare'].' <br> Bags: '.$row['no_of_bag'].' , Seat: '.$row['no_of_seat'].'</p><form action="form.php" method="post"><input hidden="text" name="license_no"><input hidden="text" name="date" value="'.$newdate.'" </form>';
        
    }
}
if($t==0)
{
    echo"<h2>Sorry there is no available Cab</h2>";
}
          ?>
        <div class="form1">
            <div class="formtitle"><p>Select Your Cab:</p></div><p style="color:DarkGreen;font-size: 20px;">[If you want to reserve please press "continue" otherwise press "Back"]</p>
            <form action="form.php" method="post">
                License no.:<input hidden="text" name="license_no">
                <select name="license_no" required>
                     <?php
$sql="SELECT All a.license_no,a.model,a.fare,a.no_of_bag,a.no_of_seat,a.cab_code,a.image,b.date,b.availability,b.weekdays,b.license_no
from cab a
INNER JOIN cab_schedule b
ON a.license_no=b.license_no";
$data=mysql_query($sql) or die($sql."<br/><br/>".mysql_error());
while($row=mysql_fetch_array($data))
{
    if($newdate==$row['date'] and $row['availability']!=0)
    {
    echo'<option value="'.$row['license_no'].'">'.$row['license_no'].'</option>';
    }
}?>
                </select><br><br>
                Date:<input type="text" name="date" value="<?php echo $newdate?>" required><br><br>
                <input type="submit" name="submit" value="Continue">
            </form>
        </div>
                <html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.fa {
  padding: 10px;
  font-size: 30px;
  width: 60px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
margin-left: 900;
}

.fa:hover {
    opacity: 0.7;
}
    
}
</style>
</head>
<body>

<!-- Add font awesome icons -->
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
