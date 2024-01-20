<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    

    <style>
         *{
            margin: 0;
            padding: 0;
        }

        body{
            background-color: #d4fff6;
        }

        .nav-bar{
            display: flex;
            background-color: #0FB493;
            height: 100px;
            width: 100%;
            justify-content: space-between;
        }

        h1{
            display: flex;
            color: beige;
            margin-top: 40px;
            margin-left: 40%;
        }

        .container{
            margin-top: 100px;
            margin-left: 40%;
            height: 300px;
            position: absolute;
            justify-content: space-between;
            background-color: #009688;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        .login_head{
            background-color: beige;
            color: #009688;
            font-size: 30px;
            padding: 10px;
            text-align: center;
            border-radius: 5px;
        }

        form{
            margin-top: 40px;
        }

        label{
            display: block; 
            color: beige;
            font-size: 20px;
            margin-bottom: 10px;
            margin-top: 10px;
        }

        input{
            width: 90%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 15px;
        }

        button{
            background-color: beige;
            border: 0;
            border-radius: 15px;
            width: 80px;
            height: 40px;
            font-size: large;
            color: beige;
            cursor: pointer;
            color: #009688;
        }

        button:hover {
        background-color: #0FB493;
        color: white; 
        }
    
    </style>
<body>
    <?php
    $users = [
        "C01" => "password@C01",
        "C02" => "password@C02",
        "C03" => "password@C03",
        "C04" => "password@C04",
        "C05" => "password@C05",
        "C06" => "password@C06",
        "C07" => "password@C07",
        "C08" => "password@C08",
        "C09" => "password@C09",
        "C10" => "password@C10",
        "C11" => "password@C11",
        "C12" => "password@C12",
        "C13" => "password@C13",
        "C14" => "password@C14",
        "C15" => "password@C15",
        "C16" => "password@C16",
        "C17" => "password@C17",
        "C18" => "password@C18",
        "C19" => "password@C19",
        "C20" => "password@C20",
    ];

    $message = "";

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $rollNo = $_POST['rollNo'];
        $password = $_POST['password'];

        if (isset($users[$rollNo]) && $users[$rollNo] === $password) {
            header("Location: attendance.php?rollNo=$rollNo");
            exit;
        } else {
            $message = "Login failed. Invalid roll number or password.";
        }
    }
    ?>

    <div class="nav-bar">
       <h1>Attendance System</h1>
    </div>
    


    <div class="container">
        <div class="login_head">Login</div>
        <form method="POST">
            <label for="rollNo">Roll No:</label>
            <input type="text" name="rollNo" required>
            <br>
            <label for="password">Password:</label>
            <input type="password" name="password" required>
            <p><?php echo $message; ?></p>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>


<?php
// Step 2: Establish a database connection
$servername = "localhost";
$username = "root";
$password = "Password123#@!";
$database = "PHP";

$conn = new mysqli($servername, $username, $password, $database);

// Check the database connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Step 3: Retrieve data from the HTML form
    $rollNo = $_POST['rollNo'];
    $password = $_POST['password'];

    // Step 4: Hash the password for security
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Step 5: Insert data into the MySQL table
    $sql = "INSERT INTO Student (Roll_No, Password) VALUES ('$rollNo', '$hashedPassword')";

    if ($conn->query($sql) === TRUE) {
        echo "New record added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>