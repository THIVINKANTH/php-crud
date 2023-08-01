<?php

session_start();

$conn=new mysqli("localhost","root","","loginserver") or die("Connection failed:".mysqli_connect_error());
if(isset($_POST['submit']))
{
    $name=$_POST['rname'];
    $username=$_POST['uname'];
    $password=$_POST['upass'];
    $_SESSION['name']=$_POST['rname'];
    
   // $sql="select * from user_details where username='$signname' and password='$signpassword'";

    $sql="insert into user_details (name,username,password) values ('$name','$username','$password')";
    // $result=mysqli_query($conn,$sql);
    // $row=mysqli_fetch_array($result, MYSQLI_ASSOC);
    // $count=mysqli_num_rows($result);
    // if($count)
    // {
    //     header("location:welcome.php");
        
    // }
    // else
    // {
    //     echo '<script>
    //            window.location.href="index.html";
    //            alert("Login failed. Invalid username or password")
    //            </script>';
        
    // }
    if(mysqli_query($conn,$sql))
    {
        header("location:welcome.php");
    }
    else
    {
        echo "Error".sql."<br>".mysqli_error($conn);
    }
    
}


mysqli_close($conn);


?>