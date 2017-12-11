<?php
$subject="short msg";
$message="i m sonia";
$from="nila1040@yahoo.com";
$header="from:".$from;
$to="nazmunsonia403@yahoo.com";
$send=mail($to,$subject,$message,$header);
if($send)
{
echo"email has been sent";
}
?>