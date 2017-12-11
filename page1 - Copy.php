<html>
    <head>
        <title> My website  </title>
        <link href="my-website.css" rel="stylesheet" type="text/css"/>
    </head>
        <body>
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
?>
            <div class="list">
         <ul>
             <li><a href="#">HOME</a></li>
             <li><a href="table3.php">available_flight</a></li>
             <li><a href="#">Travel agency</a></li>
             <li><a href="#">Reserve</a></li>
            </ul>
    </div>
            <div class="formtitle">
                <h1>RESERVATION FORM:</h1>
            </div>
            <div class="form">
                <form action="reservation.php" method="post">
                Name:<input type="text" name="name" placeholder="Enter ur Name" autofocus><br><br>
        E_mail:<input type="email" name="email" placeholder="E_mail"><br><br><br>
<!drop data from mysql>
        Flight:<input hidden="text" name="flight">
                <select name="flight">
                    <?php while($row=mysql_fetch_array($my_data))
{
    echo'<option value="'.$row['Fliht_no'].'">'.$row['Fliht_no'].'</option>';
}?>
                </select>
                 Seat_amount:<input type="number" name="amount" placeholder="enter how much seat u want??"><br><br>
        Comment:<textarea name="comment" rows="5" cols="40"></textarea><br><br>
        Gender:<input type="radio" name="gender" value="female">Female
               <input type="radio" name="gender" value="male">Male<br/><br>
        <input type="submit">
                </form>
            </div>
        </body>
</html> 