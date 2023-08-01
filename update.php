<?php

//$conn=new mysqli("localhost","root","","loginserver") or die("Connection failed:".mysqli_connect_error());
// if(count($_POST)>0)
// {
//     mysqli_query($conn,"update user_details set id='".$_POST['uid']."',name='".$_POST['uname']."',
//     username='".$_POST['upname']."',password='".$_POST['uppass']."'");
// }
// $result=mysqli_query($conn,"select * from user_details where id='".$_GET['uid']."',name='".$_GET['uname']."',
// username='".$_GET['upname']."',password='".$_GET['uppass']."'");
// $row=mysqli_fetch_assoc($result);
$conn=mysqli_connect("localhost","root","","loginserver") or die("Connection failed:".mysqli_connect_error());

if(isset($_POST['submit']))
{
    
    $id=$_POST['id'];
    $name=$_POST['uname'];  
    $username=$_POST['upname'];
    $password=$_POST['uppass'];


    $sql="update user_details set name='$name',username='$username',password='$password' where id=".$id;

         if(mysqli_query($conn,$sql))
         {
            echo '<script>
            window.location.href="welcome.php";
            alert("Updated Successfully")
                  </script>';
         }
         else
         {
            echo "error";
         }
}
else
{
    echo mysqli_connect_error();
}
mysqli_close($conn);
?>