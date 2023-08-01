<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <!-- // define("thivin","welcome to searchsoft");
    // echo thivin;
    // $x=10;
    // $y=20;
    // if($x==10 && $y==20)
    // {
    //     echo "thivinkanth";
    // }
    // echo $status= (empty($user)) ? "thivin" : "login";
    // echo "<br>";


    // $user="kanth";
    // echo $status= (empty($user)) ? "thivin" : "login";
    // echo "<br>";

//     // if empty($user) = TRUE, set $status = "anonymous"
//    echo $status = (empty($user)) ? "anonymous" : "logged in";
//    echo("<br>");

//    $user = "John Doe";
//    // if empty($user) = FALSE, set $status = "logged in"
//    echo $status = (empty($user)) ? "anonymous" : "logged in";
    
    // $x=1;

    // while($x < 5)
    // {
    //     echo "my number is: $x <br>";
    //     $x++;
    // }
    
    // $thivin= array(
    //     array("thivin",24,1999),
    //     array("praveen",24,1999),
    //     array("praveenUI",24,1999)
    // );

    // echo "My Name".$thivin[0][0]."My Age".$thivin[0][1]."Year".$thivin[0][2];
    // echo "My Name".$thivin[1][0]."My Age".$thivin[1][1]."Year".$thivin[1][2];
    // echo "My Name".$thivin[2][0]."My Age".$thivin[2][1]."Year".$thivin[2][2];

    // for ($row = 0; $row < 4; $row++) 
    // {
    //     echo "<p><b>Row number $row</b></p>";
    //     echo "<ul>";
    //     for ($col = 0; $col < 3; $col++) {
    //       echo "<li>".$cars[$row][$col]."</li>";
    //     }
    //     echo "</ul>";
    // }
    // for ($x = 0; $x < 3; $x++)
    // {
    //     echo "<p><b>Row number $x</b></p>";
    //     echo "<ul>";
    //     for ($col = 0; $col < 3; $col++) {
    //         echo "<li>".$thivin[$x][$col]."</li>";
    //       }
    //       echo "</ul>";
    // }


    // sort($thivin);
    // foreach($thivin as $x)
    // {
    //     echo $x
    // } -->


 <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname" >
  <input type="submit">
</form>

<?php
echo $_SERVER['GATEWAY_INTERFACE'];
echo("<br>");
echo $_SERVER['SERVER_ADDR'];
echo("<br>");
echo $_SERVER['SERVER_NAME'];
echo("<br>");
echo $_SERVER["REQUEST_METHOD"];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_POST['fname'];
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo $name;
    }
}
echo "<br>";
echo "<br>";
echo "<br>";


$age=["Peter"=>"35","Ben"=>"37","Joe"=>"43"];
print_r(array_change_key_case($age,CASE_UPPER));
echo "<br>";
echo "<br>";
echo "<br>";


$a = array(
    array(
      'id' => 5698,
      'first_name' => 'Peter',
      'last_name' => 'Griffin',
    ),
    array(
      'id' => 4767,
      'first_name' => 'Ben',
      'last_name' => 'Smith',
    ),
    array(
      'id' => 3809,
      'first_name' => 'Joe',
      'last_name' => 'Doe',
    )
  );
  
  $first_name = array_column($a, 'first_name','id');
  print_r($first_name);
    echo "<br>";
    echo "<br>";
    echo "<br>";



  $index=["thivin","praveen","praveen","A","A"];
  print_r(array_count_values($index));
  echo "<br>";
  echo "<br>";
  echo "<br>";


  $first=["thivin","praveen","UI"];
  $value=["24","34","67"];
  print_r(array_combine($first,$value));
  echo "<br>";
  echo "<br>";
  echo "<br>";





  function myfunction($a,$b)
{
if ($a===$b)
  {
  return 0;
  }
  return ($a>$b)?1:-1;
}

$a1=array("a"=>"red","b"=>"green","c"=>"blue");
$a2=array("d"=>"red","b"=>"green","e"=>"blue");

$result=array_diff_uassoc($a1,$a2,"myfunction");
print_r($result);


echo "<br>";
echo "<br>";
echo "<br>";



function my($var)
{
  return($var & 1);
}
$x=[1,2,3,4,5,6];
print_r(array_filter($x,"my"));
echo "<br>";
echo "<br>";
echo "<br>";


$name=["thivin"=>"24","praveen"=>"25","UI"=>"34"];
print_r(array_flip($name));

echo "<br>";
echo "<br>";
echo "<br>";



$ab=["ram"=>"43","kavi"=>"55"];
if(array_key_exists("ram",$ab))
{
  echo "ram exits";
}
else
{
  echo "not found";
}
echo "<br>";
echo "<br>";
echo "<br>";

$cd=["a"=>"rose","b"=>"yellow","c"=>"green"];
echo array_shift($cd);
echo "<br>";
print_r($cd);
echo "<br>";
echo "<br>";
echo "<br>";


$str="thivinkanth praveen";
echo rtrim($str,"praveen");
echo "<br>";
echo "<br>";
echo "<br>";

$gi="<p>thivin</p>";


?>

<?php

  class Thivin
  {
    public $color;
    public $name;
   public function __construct($color,$name)
    {
      $this->color=$color;
      $this->name=$name;
    }
   public function display()
    {
      return "My bike color is"." ".$this->color." "."model"." ".$this->name;
    }
  }
  $myValue=new Thivin("blue","pulsar");
  echo $myValue->display();
?>
echo "<br>";
echo "<br>";
echo "<br>";


<?php
 
$servername="localhost";
$username="username";
$password="password";

$conn=new mysqli($servername,$username,$password);

if($conn->connect_error)
{
  die("Connection Failed: ".$conn->connect_error);
}
echo "connected successfully";

?>



</html>