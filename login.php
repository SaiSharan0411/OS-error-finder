<html>
<head>
<title>Login</title>
<link rel="stylesheet" type="text/css" href="output.css">
</head>
<body>
<center>
<Section id="Starting">
<?php
$con=mysqli_connect("localhost","root",'',"projectuca23");
if(isset($_POST['ecode']) && isset($_POST['version']))
{
    $ecode=mysqli_real_escape_string($con, $_POST['ecode']);
    $version=mysqli_real_escape_string($con, $_POST['version']);
}
$con=mysqli_connect("localhost","root","","projectuca23");
$query="SELECT ECODE,SOLUTION,VERSION FROM project23 WHERE ECODE='$ecode' AND version='$version'";
$result=mysqli_query($con,$query);
if(mysqli_connect_errno())
{
echo "Failed to connect to MySql: " . mysqli_connect_errno();
}
$result=mysqli_query($con,$query);
echo'<table>';
echo'<tr><th>Solution</th></tr>';
while($row=mysqli_fetch_row($result))
{
    echo'<td>'.$row[1].'</td>';
    
}
?>
</section>
</center>
</body>
</html>