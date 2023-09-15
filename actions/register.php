<?php
session_start();

//header("Refresh:0; url='../'");
//echo "<script>alert('Registration successful!')</script>";

include('connect.php');

$username=$_POST['username'];
$mobile=$_POST['mobile'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];
$image=$_FILES['photo']['name'];
$tmp_name=$_FILES['photo']['tmp_name'];
$std=$_POST['std'];

if($password!=$cpassword){
    header("Refresh:0; url='../partials/registration.php'");
    echo "<script>alert('Password do not match or invalid username!')</script>";
}else{
    move_uploaded_file($tmp_name,"../uploads/$image");
    $sql="insert into userdata (username,mobile,password,photo,standard,status,votes) values ('$username','$mobile','$password','$image','$std',0,0)";
        
    $result=mysqli_query($con,$sql);

if($result){  
    /*  
    echo '<script>
    alart("Registration successfull");
    window.location="../";
    </script>';
    */
    header("Refresh:0; url='../'");
    echo "<script>alert('Registration successful!')</script>";
    

    }else{
        die(mysqli_error($con));
    }
}
?>