<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
 

 
 $conn=new mysqli("localhost","root","","thivin") or die("connection failed".mysqli_connect_error());
 
//  if(!$conn)
//  {
//    die("Connection Failed: ".mysqli_connect_error());
//  }
//  echo "connected successfully";
 
//creat table


// $sql="create table MyTable(Id int(6) auto_increment primary key, 
// Name varchar(50) not null,
// Address varchar(255) not null,
// reg_data timestamp default current_timestamp on update current_timestamp
// )";

//insert values

// $sql="insert into MyTable(ID,Name,Address) values (0,'Rajkumar','Ramnan nagar')";

//insert multi_query


// $sql ="insert into mytable(Name, Address) values ('kalaiyarasan','salem')";

// $sql .="insert into mytable(Id,Name, Address) values ('barani','Nangavali')";

// $sql .="insert into mytable(Id,Name,Address) values ('Mani','Ramnagar')";

// if(mysqli_query($conn,$sql))
// {

//     // $last_id=mysqli_insert_id($conn);
//     echo "New record created successfully ";//."Last Id:".$last_id; //get last id
// }
// else
// {
//     echo "Error".sql."<br>".mysqli_error($conn);
// }
//  mysqli_close($conn);

// Select data

    // $sql = SELECT Id, Name, Address FROM mytable;
    // $result=mysqli_query($conn,$sql);

    // if(mysqli_num_rows($result)>0)
    // {
    //     while($row=mysqli_fetch_assoc($result))
    //     {
    //         echo "Id-".$row["Id"]."Name-".$row["name"]."Address-".$row["Address"];
         
    //     }
    // }
    // else
    // {
    //    echo "0 result";
    // }

//     $sql = "SELECT id, name, address FROM Mytable order by id desc";
//     $result = mysqli_query($conn, $sql);

// if (mysqli_num_rows($result) > 0) {
//   // output data of each row
//   while($row = mysqli_fetch_assoc($result)) {
//     echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["address"]. "<br>";
//   }
// } else {
//   echo "0 results";
// }

// delete data

    //$sql= "update mytable set name='Thivinkanth C' where id=1";

    // if(mysqli_query($conn,$sql))
    // {
    //     echo "updated successfully";
    // }
    // else
    // {
    //     echo "Error".mysqli_error($conn);
    // }


    // limit

    $sql="select * from mytable limit 15";

    $result=mysqli_query($conn,$sql);

    if(mysqli_num_rows($result)>0)
    {
        while($row=mysqli_fetch_assoc($result))
        {
            echo "id-".$row["Id"]."name-".$row["Name"]."address-".$row["Address"]."<br>";
        }
    }
    else
    {
        echo "0 result";
    }

    mysqli_close($conn);
 ?>
</body>
</html>