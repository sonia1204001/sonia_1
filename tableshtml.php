<html>
<head>
<body>
<?php
$servername="localhost";
$username="root";
$password="";
$error="connection failed";
$conn=mysql_connect($servername,$username,$password) or die($error);
$error1="cant connect to the database";
$select_bd=mysql_select_db('air_reserve') or die ($error1);
$query="select * from Travel_agency";
$my_data=mysql_query($query);
$i=1;
echo "<table border=1>
<tr>
<th>tr_code<th>
<th>name<th>
<th>address<th>
<th>contact_no<th>
</tr>";
while($row=mysql_fetch_assoc($my_data))
{
    echo "<tr>";
    echo "<td>" . $row['Tr_code'] . "<td/>";
    echo "<td>" . $row['name']. "<td/>";
    echo "<td>" . $row['address']. "<td/>";
    echo "<td>" . $row['contact_no']. "<td/>";
    echo "<tr/>";
}
?>
<body/>
<<head/>

<html/>