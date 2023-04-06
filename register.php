<?php
$ECODE=$_POST['ECODE'];
$SOLUTION=$_POST['SOLUTION'];
$VERSION=$_POST['VERSION'];
$con=mysqli_connect("localhost","root",'',"projectuca23");
$query="INSERT INTO project23 VALUES ('$ECODE','$SOLUTION','$VERSION')" or die("error in query");
if(mysqli_query($con,$query)==true)
{
    require_once('completed.html');
}
else
{
    echo mysqli_error($connect);
}
?>