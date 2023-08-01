<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $conn=new mysqli("localhost","root","","searchsoft") or die("Connection Failed:".mysqli_connect_error());

    // $sql="insert into employee_details(name,email,contact,address,salary) values ('Praveendevan','praveenkumar@gmail.com',6383456716,'sampalli',15000)";


    // $sql="update employee_details set contact=9514594679 where id=1001";

    // if(mysqli_query($conn,$sql))
    // {
    //     echo "values updated successfully";
    // }
    // else
    // {
    //     echo "values not added";
    // }

    // $sql="select * from employee_details salary in (20000,15000)";

    // $sql="select avg(salary) as AverageSalary from employee_details";

    // $sql="select * from employee_details where name like '%praveen%'";

    $sql="SELECT MAX(salary) from employee_details";
    $result=mysqli_query($conn,$sql);

    while($row=mysqli_fetch_assoc($result))
    {
        echo "salary-" .$row['MAX(salary)'];
    }

    // if(mysqli_num_rows($result))
    // {
    //     while($row=mysqli_fetch_assoc($result))
    //     {
    //         //echo "id-".$row["id"]." "."name-".$row["name"]." "."email-".$row["email"]." "."contact"." ".$row["contact"]." "."address".$row["address"]." "."salary".$row["salary"]."<br>";
    //         echo "salary-".$row[min(salary)];
    //     }
    // }
    // else
    // {
    //     echo "error";
    // }

     mysqli_close($conn);
    ?>
</body>
</html>