<?php
$con=mysqli_connect('localhost','root');
if($con)
{
    echo"WELCOME RITESH ";
}
else
{
    echo"not conneced";
}

mysqli_select_db($con,'Coffee_Shop');

$Username=$_POST['Username'];
$Email=$_POST['Email'];
$Contact=$_POST['Contact'];
$Feedback=$_POST['Feedback'];

$query=" insert into customer_data (username,email,Contact,Feedback)
values('$Username','$Email','$Contact','$Feedback')";

mysqli_query($con,$query);


header('location:first.php');
?>
