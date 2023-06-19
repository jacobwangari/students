<?php
// Retrieve the form data
$regNo = $_POST['regNo'];
$name = $_POST['name'];
$subject = $_POST['subject'];
$marks = $_POST['marks'];
$grade = $_POST['grade'];

// Create a database connection
$servername = "localhost";
$username = "root";
$password = "PassWord@123";
$dbname = "studentsdb";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Prepare and execute the SQL query
$sql = "INSERT INTO StudentGrades (Reg_No, Name, Subject, Marks, Grade)
        VALUES ('$regNo', '$name', '$subject', '$marks', '$grade')";

if ($conn->query($sql) === TRUE) {
  echo "New record added successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
