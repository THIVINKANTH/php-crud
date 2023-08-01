<?php
$conn = mysqli_connect("localhost","root","","loginserver") or die("Connection failed:".mysqli_connect_error());
$sql = mysqli_query($conn,"select * from user_details where id=".$_GET['id']);
$result = mysqli_fetch_array($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="webstite icon" type="png" href="Images/google.png">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    
</head>
<body>
    <div id="regpage" class="row justify-content-center" >
        <h2>Update Form</h2>
        <form action="update.php" method="POST" >
        <!-- <div>
                <label for="id">Enter your Id</label>
                <div>
                    <input type="number" name="id" id="id" >
                </div>
            </div> -->
            <div>
                <label for="name">Enter your name</label>
                <div>
                    <input type="hidden" name="id" id="id" value="<?php echo $result['id']; ?>" >
                    <input type="text" name="uname" id="name" required  value="<?php echo $result['name']; ?>">
                </div>
            </div>
            <div>
                <label for="pname">Enter your user Name</label>
                <div>
                    <input type="text" name="upname" id="pname" required value="<?php echo $result['username']; ?>">
                </div>
            </div>
            <div>
                <label for="upass">Enter your password</label>
                <div>
                    <input type="password" name="uppass" id="upass" required value="<?php echo $result['password']; ?>">
                </div>
            </div>
            <div id="foot">
                <button type="submit" name="submit" class="text-light" id="but" >Update</button>
            </div>
        </form>
    </div>
</body>
</html>