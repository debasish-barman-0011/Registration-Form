<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //variable for taking user input
    $Name = $_POST['Name'];
    $Gender = $_POST['Gender'];
    $Email = $_POST['Email'];
    $Mobile = $_POST['Mobile'];
    $Password = $_POST['Password'];
    // Database declaration
    $database_host = "localhost";
    $database_user = "root";
    $database_password = "";
    $database_name = "debasish_barman";
    // Connection Eastablishment
    $conn = new mysqli($database_host, $database_user, $database_password, $database_name);
    //Error checking in Runtime
    if ($conn->connect_error) {
        die("connection failed: " . $conn->connect_error);
    }
    // Data Insert into Database
    $sql = "INSERT INTO registration_form (Name,Gender,Email,Mobile,Password) VALUES ('$Name', '$Gender','$Email', '$Mobile','$Password')";

    if (mysqli_query($conn, $sql)) {
        echo "Registration successful";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    $conn->close();
}
?>