<!DOCTYPE html>
<html>
<head>
    <title>Attendance Page</title>
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

        .navy-bg {
            background-color: beige;
            color: #009688;
            text-align: center;
            padding: 10px;
            font-size: 24px;
            border-radius: 5px;
        }

        form {
            margin-top: 20px;
        }
        label {
            display: block;
            color: beige;
            font-size: 20px;
            margin-bottom: 10px;
        }
        input{
            margin-right: 5px;
        }

        button{
            background-color: beige;
            border: 0;
            border-radius: 15px;
            width: 80px;
            height: 40px;
            font-size: 15px;
            color: beige;
            cursor: pointer;
            color: #009688;
        }

        button:hover {
        background-color: #0FB493;
        color: white; 
        }

    </style>
</head>
<body>
   
    <div class="nav-bar">
       <h1>Attendance System</h1>
    </div>

    <div class="container">
        <div class="navy-bg">Attendance</div>
        <p><?php echo $message; ?></p>

        <form method="POST">
            <label>
                <input type="radio" name="attendance" value="present"> Present
            </label>
            <label>
                <input type="radio" name="attendance" value="absent"> Absent
            </label>
            <br>
            <input type="hidden" name="rollNo" value="<?php echo $rollNo; ?>">
            <input type="hidden" name="message" value="<?php echo $message; ?>">
            <button type="submit">Submit</button>
        </form>
        <form action="login.php">
            <button type="submit">New Subject</button>
        </form>
    </div>
</body>
</html>
