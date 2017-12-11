<html>
    <head>
        <div class="scroll1">
         <marquee behavior="scroll" direction="right" scrollamount="8" scrolldelay="0.1"><div class="image2">ABC !!!  Journey to your Dream !!! ABC !!! ABC !!!  Journey to your Dream !!! ABC</div></marquee>
</div>    
        <div class="logo">
        </div>
        
    <title> My website  </title>
        <link href="page2css.css" rel="stylesheet" type="text/css"/>
    </head>
        <body>
            <?php
            $servername="localhost";
$username="root";
$password="";
$error="connection failed";
$conn=mysql_connect($servername,$username,$password) or die($error);
$error1="cant connect to the database";
$select_bd=mysql_select_db('cab_site') or die ($error1);
$query="select DISTINCT date from cab ";
$my_data=mysql_query($query);
            
?>
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
            
            <p>Please choose the date you want to travel:</p>
                    <div class="search2" >
                        
                        <form action="table2.php" method="post">
                            Date:<input type="date"  name="date" required style="font-size: 20px;"><br><br>
            <input type= "submit" name="search" value="search" style="font-size: 20px;">
                            
                        </form>
           
            </div>

<!DOCTYPE html> <!-- The new doctype -->

<html>
<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<title>IT_MART</title>

	<style>
        body{
            background-color:#667A44 ;
        }

    header,footer,
article,section,
hgroup,nav,
figure{
	/* Giving a display value to the HTML5 rendered elements: */
	display:block;
}

article .line{
	/* The dividing line inside of tarticle is darker: */
	background-color:#15242a;
	border-bottom-color:#204656;
	margin:1.3em 0;
}

footer .line{
	margin:2em 0;
}




/* Article styles: */

#page{
	width:960px;
    height: 150px;
	margin:0 auto;
	position:relative;
    font-size: 2px;
}

article{
	background-color:deepskyblue;
	margin:3em 0;
	padding:20px;
   
}

figure{
	border:3px solid #142830;
	float:right;
	height:300px;
    margin-top: 250px;
	margin-left:15px;
	overflow:hidden;
	width:500px;
}

figure:hover{
	-moz-box-shadow:0 0 2px #4D7788;
	-webkit-box-shadow:0 0 2px #4D7788;
	box-shadow:0 0 2px #4D7788;
}

figure img{
	margin-left:-60px;
}

/* Footer styling: */

        
     a.ex2:hover, a.ex2:active {font-size: 150%;}
    </style>

</head>
<body>

	<section id="page"> <!-- Defining the #page section with the section tag -->

	
        
        
        <!-- Article 1 start -->

	<div class="line"></div>  <!-- Dividing line -->

	<article id="article1"> <!-- The new article tag. The id is supplied so it can be scrolled into view. -->


		<div class="line"></div>

		<div class="articleBody clear">

			<figure>

				<script type="text/javascript">

var slideimages = new Array() // create new array to preload images
slideimages[0] = new Image() // create new instance of image object
slideimages[0].src = "car1.jpg" // set image src property to image path, preloading image in the process
slideimages[1] = new Image()
slideimages[1].src = "car2.jpg"
slideimages[2] = new Image()
slideimages[2].src = "car3.jpg"
slideimages[3] = new Image()
slideimages[3].src = "car1.jpg"
slideimages[4] = new Image()
slideimages[4].src = "car2.jpg"
slideimages[5] = new Image()
slideimages[5].src = "car1.jpg"
slideimages[6] = new Image()
slideimages[6].src = "car2.jpg"



</script>

<img src="car6.jpg" id="slide" width="112%" height="100%" />

<script type="text/javascript">
//variable that will increment through the images
var step=0

function slideit(){
 //if browser does not support the image object, exit.
 if (!document.images)
  return
 document.getElementById('slide').src = slideimages[step].src
 if (step<7)
  step++
 else
  step=0
 //call function "slideit()" every 2.5 seconds
 setTimeout("slideit()",2500)
}

slideit()

</script>
            </figure>

			<p> Our services are very flexible and can be customized according to your need. It provides you with the flexibility to travel wherever you want and whenever you want. Similarly, we also do not have to make frequent stops to pick up other passengers. .... </p>

		</div>

	</article>
    

	<!-- Article 1 end -->
        
        
        
        </section>
    </body>
</html>

            
        </body>
</html> 
