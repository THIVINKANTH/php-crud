<?php
 session_start();
 
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
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand ms-5" href="#homepage" id="name"><img src="Images\searchsoft.png" alt="..." style="width: 160px;height: 50px;margin: 0;"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="true" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link ms-5" aria-current="page" href="#homepage"><i class="fas fa-home"></i></i>Home</a>
          <a class="nav-link ms-5" href="#about"><i class="far fa-question-circle"></i>About</a>
          <a class="nav-link ms-5" href="#skills"><i class="fas fa-stream"></i>Skills</a>
          <a class="nav-link ms-5" href="#contact"><i class='fas fa-phone'></i>Contact</a>
          <a class="nav-link ms-5" href="logout.php" id="logout"><i class='fa fa-sign-out'></i>Logout</a>
        </div>
      </div>
    </div>
  </nav>
    <div id="username">
    <span class="topline">Welcome</span>
       <h1>I'm <span class="multiText"></span></h1>
    </div>

    <div class="row ">
  <div class="col">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">My Details</h5>
        <p class="card-text"> <?php include("mydetails.php")?></p>
       
        <button class="btn btn-primary">click here</button>
      </div>
    </div>
    <div class=col container mt-5 bg-warning>
      <h3>Edit Info</h3>
      <div class="row justify-content-center">
                <div class="table-responsive-md">
                    <table class="table table-striped table-borderd p-4 shadow rounded mt-3 text-center">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>User Name</th>
                                <th>Password</th>
                                <th style="margin-left:25px;">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <?php
                            $conn=new mysqli("localhost","root","","loginserver") or die("Connection failed:".mysqli_connect_error());
                            $sql="select id, name, username, password from user_details";
                            //   $sql="select * from user_details";
                            $result=mysqli_query($conn,$sql);
                            while($row=mysqli_fetch_assoc($result))
                            {
                              $id=$row['id'];
                            ?>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['username']; ?></td>
                            <td><?php echo $row['password']; ?></td>
                            <td> <a href="updatepage.php?id=<?php echo $row['id']; ?>" class="btn btn-primary text-light">Edit</a></td>
                            <td> <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger text-light">Delete</a></td>
                          
                          </tr>
                            <?php    
                            }
                            ?>
                        </tbody>
                      </table>      
    </div>
  </div>


    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
<script>
    var typingEffect = new Typed(".multiText",{
        strings : ["<?php
        echo $_SESSION['name'];
        ?>"],
        loop : true,
        typeSpeed : 100,
        backSpeed : 80,
        backDelay : 1500
    })
</script>

<script src="active.js"></script>
</body>
</html>