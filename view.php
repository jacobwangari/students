<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Records Management</title>

    <link rel="stylesheet" type="text/css" href="static/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="static/style.css">
</head>

<body>

    <div class="jumbotron p-3">
        <div class="well text-center">
            <h1>Student Records Management</h1>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col md-12">
                <div class="jumbotron p-3 custom-transparent">
                    <h2>
                        Student<b> Performance Records</b>
                        <a href="index.html" class="btn btn-success float-right">Add New</a>

                    </h2>

                    <?php
                    // Create a database connection
                    $servername = "localhost";
                    $username = "root";
                    $password = "PassWord@123";
                    $dbname = "studentsdb";

                    // Create a new MySQLi instance
                    $conn = new mysqli($servername, $username, $password, $dbname);

                    // Check the connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    // Prepare and execute the SQL query
                    $query = "SELECT * FROM StudentGrades";
                    $result = $conn->query($query);

                    // Fetch all rows from the result set
                    $users = [];
                    while ($row = $result->fetch_assoc()) {
                        $users[] = $row;
                    }
                    ?>

                    <table class="table table-dark table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Reg_No</th>
                                <th>Name</th>
                                <th>Subject</th>
                                <th>Marks</th>
                                <th>Grade</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($users as $user): ?>
                                <tr>
                                    <td>
                                        <?php echo $user['id']; ?>
                                    </td>
                                    <td>
                                        <?php echo $user['Reg_No']; ?>
                                    </td>
                                    <td>
                                        <?php echo $user['Name']; ?>
                                    </td>
                                    <td>
                                        <?php echo $user['Subject']; ?>
                                    </td>
                                    <td>
                                        <?php echo $user['Marks']; ?>
                                    </td>
                                    <td>
                                        <?php echo $user['Grade']; ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <?php
    // Close the database connection
    $conn->close();
    ?>
    </div>
    <footer class="">
        <div class="card text-bg-dark mb-3 text-center">
            <div class="card-body">
                <p>Copyright &copy; 2023</p>
                <a href="index.html" class="btn btn-primary">Add Records</a>
            </div>
        </div>

    </footer>

    
</body>


</html>