<?php



// if(isset($_GET['id']))
// {
//     $id=$_GET['id'];
//     $conn = new mysqli("localhost","root","","loginserver") or die("Connection failed:".mysqli_connect_error());
//     $sql="delete from user_details where id=$id";
//     $result=mysqli_query($conn,$sql);

//     if($result)
//     {
        
//         header("location:welcome.php");
//     }
//     else{
//         echo "error";
//     }
// }
// else
// {
//     echo "invalide values";
// }
$conn = new mysqli("localhost","root","","loginserver") or die("Connection failed:".mysqli_connect_error());
$sql="delete from user_details where id='".$_GET['id']."'";
if(mysqli_query($conn,$sql))
{
    // header("location:welcome.php");
    echo '<script>
    window.location.href="welcome.php";
    alert("Deleted Successfully")
          </script>';
}
else
{
    echo "error";
}

mysqli_close($conn);
?>