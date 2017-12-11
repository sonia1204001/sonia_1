<html>
<head>
    <link href="tbl.css" rel="stylesheet" type="text/css">
    </head>
<body>
    <div class="heading">
        <h1>All available flights in our travel_agency:</h1>
    </div>
    <div class="table">
    <table border="1" id="t">
        <tr>
            <th>Flight_no</th>
        <th>Date</th>
        <th>Origin</th>
        <th>Destination</th>
            <th>Departure_time</th>
            <th>Arrival_time</th>
            <th>Seat_type</th>
            <th>Fare</th>
             <th>Available_seat</th>
        </tr>
        <?php
$conn=mysql_connect("localhost","root","") or die("cant conect");
$db=mysql_select_db("air_reserve") or die("can not connect to db");
$sql="SELECT a.Date,a.F_no,a.Origin,a.Destination,a.Departure_time,a.Arrival_time,b.Seat_type,b.Available_seat,c.Fare
from flight_schedule a
INNER JOIN seat b
ON a.F_no=b.F_no
INNER join seat_fare c
ON b.F_no=c.F_no AND b.Seat_type=c.Seat_type AND a.F_no=c.F_no;";
$data=mysql_query($sql) or die($sql."<br/><br/>".mysql_error());
while($row=mysql_fetch_assoc($data))
{
    echo "<tr>";
    echo "<td>".$row['F_no']."</td>";
    echo "<td>".$row['Date']."</td>";
    echo "<td>".$row['Origin']."</td>";
    echo "<td>".$row['Destination']."</td>";
    echo "<td>".$row['Departure_time']."</td>";
    echo "<td>".$row['Arrival_time']."</td>";
     echo "<td>".$row['Seat_type']."</td>";
    echo "<td>".$row['Fare']."</td>";
    echo "<td>".$row['Available_seat']."</td>";
}
echo "<tr/>";
          ?>
        </table>
        <script>
        function sendTableToAnotherPage(){
    document.getElementById("table2").innerHTML = document.getElementById("table1").innerHTML;
}
</script>
        </script>
       <button type="button" onclick="createTable(5)">Create Table</button>
<input type="button" value="Save" onclick="sendTableToAnotherPage()">
           </div>
    </body></html>