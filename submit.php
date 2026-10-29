<?php
$conn = mysqli_connect("localhost","root","","contacts");
if(!$conn){
    die("connection failed:". mysqli_connect_error());

}
$name =$_POST['name'];
$email=$_POST[ 'email'];
$contact=$POST['contact'];
$sql="INSERT INTO my account(name,email,contact) VALUES(?, ?,?)";
$stmt= mysqli_prepare($conn,$sql);
mysqli_stmt_bind_param($stmt,"sss",$name,$email,$contact)
if (mysqli-stmt_execute($stmt)){
    echo "contact saved sucessfully!";
}else{
    echo "Error saving contact.";
}
mysqli_stmt_close($stmt);
mysqli_close($conn)
?>