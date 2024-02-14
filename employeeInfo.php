<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style2.css">
    <title>Employees Data Show</title>
</head>
<body>
    <h1> GymShark Employees Data Show </h1>

    <div class="container"> 
    <nav> 
        <ul>
            <li><a href="form.html"> GymShark Data Entry </a></li>
            <li><a href="employeeInfo.php"> GymShark Data Show </a> </li>
        </ul>
    </nav>
        <!--Connection-->
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
        //echo "Successfully Connected ";

    }

    //Consulting Data
    $sql = "SELECT * FROM employeeinfo";
        $result = $connection->query($sql);


    if ($result->num_rows > 0) {
           
            echo "<table border='1'>";
            echo "<tr><th>Employee ID</th><th>Employee Name</th><th>Employee Email</th></tr>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($row['eid']) . "</td>";
                echo "<td>" . htmlspecialchars($row['ename']) . "</td>";
                echo "<td>" . htmlspecialchars($row['email']) . "</td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "<p> There is no GymShark Employees info to display </p>";
}
    $connection->close();
    ?>
</div>
</body>

<footer>
    <p>&copy; 2024 Johan Esteban Mora. All rights reserved.</p>
</footer>
</html>