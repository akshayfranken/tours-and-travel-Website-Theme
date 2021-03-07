<?php
$name=$_POST['name'];
$mobile=$_POST['mobile'];
$yourlocation=$_POST['yourlocation'];
$destinationlocation=$_POST['destinationlocation'];
$seats=$_POST['seats'];
$tellus=$_POST['tellus'];


$data=$name.",".$mobile.",".$yourlocation.",".$destinationlocation.",".$seats.",".$tellus;


$file="file.csv";

file_put_contents($file, $data. PHP_EOL, FILE_APPEND);
print"<h1 align=center>Thank you for submitting your Request for Ride!</h1>";



?>
<html>
<head>    <meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0,maximum-scale=1.0,user-scalable=0,user-scalable=no">
</head>
<body bgcolor="yellow">
<h1><a href="index.html">Go Back</a></h1>

</body>
</html>
</html>