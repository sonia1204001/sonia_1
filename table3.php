<html>
<head>
      <div class="scroll1">
         <marquee behavior="scroll" direction="right" scrollamount="10" scrolldelay="0.1"><div class="image2">ABC !!!  Journey to your Dream !!! ABC !!! ABC !!!  Journey to your Dream !!! ABC</div></marquee>
</div>    
        <div class="logo">
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
    
    <div class="heading">
        <p>All available flights in our travel_agency:</p>
    </div>
        <?php
$conn=mysql_connect("localhost","root","") or die("cant conect");
$db=mysql_select_db("cab_site") or die("can not connect to db");
        
        $sql="SELECT All a.license_no,a.model,a.fare,a.no_of_bag,a.no_of_seat,a.image,b.date,b.availability,b.weekdays,b.license_no
        from cab a
        INNER JOIN cab_schedule b
        ON a.license_no=b.license_no;";
        
$data=mysql_query($sql) or die($sql."<br/><br/>".mysql_error());
$t=0;
$c1="r";
$s=1;
while($row=mysql_fetch_assoc($data))
{
    if($row['availability']==1)
    {
        $t=1;
        echo '<img height=200px width=300px src="data:image/jpeg;base64,'  . base64_encode( $row['image'] ) . '" style="margin-left: 320px;"/><p style="color:maroon;font-size: 20px;margin-left: 320px;">License no:'.$row['license_no'].'<br>Model: '.$row['model'].' , Fare: '.$row['fare'].' <br> Bags: '.$row['no_of_bag'].' , Seat: '.$row['no_of_seat'].'<br> Date: '.$row['date'].'<br></p>';
        
    }
   
}
          ?>
    
    </body></html>
