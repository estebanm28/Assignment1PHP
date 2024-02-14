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

//Creating a table

$sql="create table EmployeeInfo(eid int,ename varchar(30),email varchar(30))";

//Checking table creation

if ($connection->query($sql)===TRUE)
{
echo "Table EmployeeInfo created successfully";

}
else{
echo "Error creating table: ".$connection->error;

}

/* //Create database
$sql = "Create Database Emp";

//Checking 

if ($connection->query($sql)===TRUE)
{
echo "Database Emp created successfully";

}
else{
echo "Error creating database : ".$connection->error;

}
*/

$connection->close();


?>

