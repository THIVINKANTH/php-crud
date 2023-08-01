<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .error
        {
            color:red;
        }
        </style>
</head>
<body>
<!-- <?php
// define variables and set to empty values
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $website = test_input($_POST["website"]);
  $comment = test_input($_POST["comment"]);
  $gender = test_input($_POST["gender"]);
}

function test_input($data) 
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?> -->
<!-- <h2>PHP Form Validation Example</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <br><br>
  E-mail: <input type="text" name="email">
  <br><br>
  Website: <input type="text" name="website">
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form> -->

<!-- <?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?> -->
<?php 

$nameErr = $emailErr = $websiteErr ="";
$Name = $Email =$Website = "";

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    if(empty($_POST["Name"]))
    {
        $nameErr = "Name is required";
    }
    else
    {
        $nameErr = test_input($_POST["Name"]);
    }
    if(empty($_POST["Email"]))
    {
        $emailErr = "Email is required";
    }
    else
    {
        $emailErr = test_input($_POST["Email"]);
    }
    if(empty($_POST["Website"]))
    {
        $websiteErr ="Website is requird";
    }
    else
    {
        $websiteErr = test_input($_POST["Website"]);
    }
}




function test_data($data)
{
    $data=trim($data);
    $data=htmlspecialchars($data);
    $data=stripslashes($data);
    return $data;
}

?>

<h2>THIVIN FORM</h2>
<br></br>
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
Name:<input type="text" name="Name">
<span class="error">*<?php echo $nameErr;?></span>
<br></br>
Email:<input type="text" name="Email">
<span class="error">*<?php echo $emailErr;?></span>
<br></br>
Website:<input type="text" name="Website">
<span class="error">*<?php echo $websiteErr;?></span>
<br></br>
<input type="submit" name="submit" value="Submit" >
</form>



<?php

echo "<h2>Your Output";
echo "<br>";
echo $Name;
echo "<br>";
echo $Email;
echo "<br>";
echo $Website;
echo "<br>";
?> 
</body>
</html>




