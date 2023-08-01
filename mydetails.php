<?php

    $conn=new mysqli("localhost","root","","loginserver") or die("Connection failed".mysqli_connect_error());
    $sql="select emp_id, emp_name, emp_email, emp_address, emp_designation, user_id from employee_details";
    // $sql="select employee_details.emp_id, employee_details.emp_name, employee_details.emp_email, 
    // employee_details.emp_address, employee_details.emp_designation,  from employee_details
    // inner join user_details on employee_details.user_id=user_details.id";
    
    $result=mysqli_query($conn,$sql);

    if(mysqli_num_rows($result)>0)
    {
        
        while($row=mysqli_fetch_assoc($result))
        {
                echo "Employee ID--".$row['emp_id']."<br>"."Employee Name--".$row['emp_name']."<br>".
            "Employee Email--".$row['emp_email']."<br>"."Employee Address--".$row['emp_address']."<br>".
            "Employee Designation--".$row['emp_designation']."<br>"."Employee user Id--".$_GET['id'];
            
        }
    }
    else
    {
        echo "error";

    }



?>