   
    <form action="insert.php" method="post">

        <p>

            <label for="id">ID:</label>

            <input type="text" name="id" id="firstName">

        </p>

        <p>

            <label for="course">Course:</label>

            <input type="text" name="course" id="lastName">

        </p>

        <p>

            <label for="pno">PhoneNumber:</label>

            <input type="text" name="pno" id="emailAddress">

        </p>
        <p>

            <label for="city">City:</label>

            <input type="text" name="city" id="emailAddress">

        </p>

        <input type="submit" value="Submit">

    </form>








<?php

$servername = "localhost";
$username = "root";
$password = "123";
$dbname = "NewDatabase";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$a=$_POST['id'];
$b=$_POST['course'];
$c=$_POST['pno'];
$d=$_POST['city'];

$sql = "INSERT INTO Student 
VALUES ('$a','$b','$c','$d')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 
