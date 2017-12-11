<?php 
require 'core.inc.php';
session_destroy();
header('Location: login.php');
?>

<html>
    <head>
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="l-login.css" >
        <style>
.btn-group .button {
    background-color:#988690;
    border: 4px solid white;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    cursor: pointer;
    float: left;
	width:330px;
}

.btn-group .button:not(:last-child) {
    border-right: none; /* Prevent double borders */
}
.btn-group .button:hover {
    background-color: #2A356D;
}
    
    
</style>
    </head>
<body>
    <img src="11.jpg" alt="books">
    <div class="btn-group">
        <h3>Carrier Club</h3>
        <a href="start.php"><button class="button">Home</button></a>
        <a href="prosearch.php"><button class="button">Profile</button></a>
        <a href="meminfo.php"><button class="button">Memberlist</button></a>
        <a href="logout.php"> <button class="button">Logout</button></a>
        <a href="loginform.inc.php"> <button class="button">Admin</button></a>
   
</div>

<section id="loginBox">
	<h2>Login</h2>
	<form method="post" class="minimal">
		<label for="username">
			Admin-ID:
			<input type="text" name="id" id="username" required="required" />
		</label>
		<label for="password">
			Password:
			<input type="password" name="password" id="password" required="required" />
		</label>
		<button type="submit" class="btn-minimal">Sign in</button>
	</form>
</section>
</body>
</html>
    