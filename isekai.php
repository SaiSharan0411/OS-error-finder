<?php

$query="SELECT SOLUTION FROM project23 WHERE ECODE='$ecode' AND VERSION='$version'";
$result=mysqli_query($con, $query);

if(mysqli_num_rows($result)==1)
{
    $row=mysqli_fetch_array($result);
}



?>