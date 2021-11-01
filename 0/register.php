<?php
echo "hi from php";
$usr=$_POST['usr'];
$pwd=$_POST['pwd'];
$usr=$_POST['rtpwd'];

$con=mysqli_connect("localhost","root","",ajax);
$query=mysqli_query($con,"Select 'id' from 'register' where 'username'='$usr' ")

if(!$usr & !$pwd &!$rtpwd)
{
    echo "All fields Required."
}
else
 if($pwd!=$rtpwd)
{
    echo "Password Mismatch."
}
else
if(!$usr)
{
echo "Enter  Username";
}
else 
if($num==1)
{
    echo "User name is already Register, Please Enter another Name";
}
else 
if (!$pwd) {
echo "Enter Password";
}
else
if(!$rtpwd) {
    echo "Enter Re-Type-Password";
}
else {
    mysqli_query($con, "insert into 'register'('username','password')values('$usr','$pwd','$rtpwd')");
    $id=mysqli_insert_id($con);
    echo "Thanks for Register $usr, Your id is $id";
}

?>