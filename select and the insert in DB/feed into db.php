<!DOCTYPE html>
<html lang="en">
<head>
    <title>Insert Data into DB</title>
</head>
<body>  
<h1>Insert Data into DB</h1>
    <form method="post" action="">
        <h4>district of the bus</h4><input type="text" name="District_of_bus" placeholder="District of Bus"><br>
        <h4>passenger age</h4><input type="text" name="passenger_age" placeholder="Passenger Age"><br>
        <h4>passenger destination</h4><input type="text" name="passenger_destination" placeholder="Destination"><br>
        <h4>passenger id</h4><input type="text" name="passenger_id" placeholder="Passenger ID"><br>
        <h4>passenger name</h4><input type="text" name="passenger_name" placeholder="Passenger Name"><br>
        <h4>starting point</h4><input type="text" name="passenger_stating_point" placeholder="Starting Point"><br>
        <input type="submit" value="Submit">
    </form>
    <?php
    // Check if the form has been submitted
    $conn = new mysqli('localhost','root','','ticket_booking');
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve form data
        //$passenger_id = uniqid();
        $passenger_id = $_POST["passenger_id"];
        $passenger_name = $_POST["passenger_name"];
        $passenger_age = $_POST["passenger_age"];
        $passenger_stating_point = $_POST["passenger_stating_point"];
        $passenger_destination = $_POST["passenger_destination"];
        $District_of_bus = $_POST["District_of_bus"];
        // Prepare and execute the SQL query to insert data into the database
        $sql = "INSERT INTO passenger (passenger_id, passenger_name, passenger_age, passenger_stating_point, passenger_destination, District_of_bus) 
                VALUES ('$passenger_id', '$passenger_name', '$passenger_age', '$passenger_stating_point', '$passenger_destination', '$District_of_bus')";
        if ($conn->query($sql) == TRUE) {
            echo "Data inserted successfully";
        } else {
            echo "Error: " . $sql . "<br>" . 
            $conn->error;
        }
        // Close the database connection
        $conn->close();
    }
    ?>
</body>
</html>
</html>

passenger_id	
passenger_name	
passenger_age	
passenger_stating_point	
passenger_destination	
District_of_bus	