<?php 

$localhost = 'sql304.epizy.com';
$localname = 'epiz_30341859';
$db_password ='O7FJXdabWdW';
$db_name = 'epiz_30341859_audiophile';

$conn = mysqli_connect($localhost,$localname,$db_password,$db_name);

if ($conn->mysqli_error) {
   echo 'Error Connection: ' . $conn->mysqli_error;
}



?>