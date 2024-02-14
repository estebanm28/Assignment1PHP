<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Account</title>
</head>
<body>
    <?php

    $servername="localhost";
    $username="root";
    $password="";
    $database="Emp";

    //create connection
    $connection = new mysqli($servername,$username,$password,$database);

    //checking connection
    if($connection->connect_error)
    {
        die("connection failed".$connection->connect_error);
    }
    else{
        echo "Successfully Connected ";
    }
    $id = $_POST['EmployeeID'];
    $name = $_POST['EmployeeName']; 
    $email = $_POST['EmployeeEmail'];

    $sql="insert into employeeInfo values('$id','$name','$email')";

    if ($connection->query($sql)===TRUE)
    {
    echo "Records inserted";
    }
    else
    {
    echo "error: ".$sql. "<br>".$connection->error;
    }
    $connection->close();
    ?>
</body>
</html>