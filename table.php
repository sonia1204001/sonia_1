<html>
<head>
    <link href="tbl.css" rel="stylesheet" type="text/css">
    <body>
        <div class="tbl">
            <table border="1">
                <tr>
                    <th>flight_no</th>
                    <th>origin</th>
                    <th>destination</th>
                    <th>arrival_time</th>
                    <th>departure_time</th>
                    <th>Travel_agency_code</th>
                </tr>
            <?php
$servername="localhost";
$username="root";
$password="";
$error="connection failed";
$conn=mysql_connect($servername,$username,$password) or die($error);
$error1="cant connect to the database";
$select_bd=mysql_select_db('air_reserve') or die ($error1);
$query="select * from flight";
$my_data=mysql_query($query);
while($row=mysql_fetch_assoc($my_data))
{
    echo "<tr>";
    echo "<td>".$row['Fliht_no']."</td>";
    echo "<td>".$row['Origin']."</td>";
    echo "<td>".$row['Destination']."</td>";
    echo "<td>".$row['Arrival_time']."</td>";
    echo "<td>".$row['Deptarture_time']."</td>";
    echo "<td>".$row['Tr_code']."</td>";
    echo "<tr/>";
    
}
?>
                </table>
        </div>
    </body></head></html>