<html>
<head>
      <div class="scroll1">
         <marquee behavior="scroll" direction="right" scrollamount="10" scrolldelay="0.1"><div class="image2">Dream Airlines !!!  Journey to your Dream !!! Dream Airlines !!! Dream Airlines !!!  Journey to your Dream !!! Dream Airlines</div></marquee>
</div>    
        <div class="logo">
        </div> 
    <link href="tbl.css" rel="stylesheet" type="text/css">
    </head>
<body>
    <div class="list">
         <ul>
             <li><a href="page2.php">HOME</a></li>
             <li><a href="table3.php">available_flight</a></li>
             <li><a href="Travel_agency.php">About Us</a></li>
             <li><a href="cancel.php">cancel</a></li>
            </ul>
    </div>
    <div class="heading">
        <p>All available flights in our travel_agency:</p>
    </div>
    <div class="table">
    <table border="1">
        <tr>
            <th class="r">Flight_no</th>
        <th class="r2">Date</th>
        <th class="r3">Origin</th>
        <th class="r4">Destination</th>
            <th class="r5">Departure_time</th>
            <th class="r6">Arrival_time</th>
            <th class="r7">Seat_type</th>
            <th class="r8">Seat Fare</th>
            <th class="r9">Available_seat</th>
            <th class="r10"></th>
        </tr>
        
        <?php
$conn=mysql_connect("localhost","root","") or die("cant conect");
$db=mysql_select_db("air_reserve") or die("can not connect to db");
$sql="SELECT All a.Fliht_no,a.Origin,a.Destination,d.Date,d.Departure_time,d.Arrival_time,b.Seat_type,b.Available_seat,c.Fare
from flight a
INNER JOIN f d
ON a.Fliht_no=d.F_NO
INNER JOIN seat b
ON d.F_no=b.F_no
INNER join seat_fare c
ON b.F_no=c.F_no AND b.Seat_type=c.Seat_type AND d.F_no=c.F_no;";
$r=1;
$data=mysql_query($sql) or die($sql."<br/><br/>".mysql_error());
while($row=mysql_fetch_assoc($data))
{
    echo "<tr>";
    echo "<td>".$row['Fliht_no']."</td>";
    echo "<td>".$row['Date']."</td>";
    echo "<td>".$row['Origin']."</td>";
    echo "<td>".$row['Destination']."</td>";
    echo "<td>".$row['Departure_time']."</td>";
    echo "<td>".$row['Arrival_time']."</td>";
     echo "<td>".$row['Seat_type']."</td>";
    echo "<td>".$row['Fare']."</td>";
    echo "<td>".$row['Available_seat']."</td>";
    $n=$r++;
}
       ?> 
        <p id="demo"></p>
        <script>
            
            var i;
            var x=" ";
            for(i= 1;i<=n; i++)
            {
              x=x+"<td>" +"<input"+"type"+"checkbox"+">" + i + "</td" + i;
            }
             document.getElementById("demo").innerHTML n;
        </script>
        
        </tr>
        </table>
           </div>
    </body></html>