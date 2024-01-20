<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
            margin-left: 20px;
        }

        button{
            background-color: #006241;
            border: 0;
            border-radius: 15px;
            width: 80px;
            height: 40px;
            font-size: large;
            color: beige;
            margin-top: 40px;
            margin-right: 40px;
            cursor: pointer;
        }

        button:hover {
        background-color: #004f30;
        color: white; 
        }

        .one{
            display: flex;
            margin-top: 60px;
            font-size: 100px;
            color: #009688;
        }
        .two{
            display: flex;
            margin-top: 60px;
            font-size: 50px;
            color: #009688;
        }
    </style>
</head>
<body>
    <div class="nav-bar">
       <h1>Attendance System</h1>
       <form action="login.php">
            <button type="submit">Login</button>
        </form>
    </div>
    <div class="content">
       <p>
        <span class="one">Welcome to our Online Attendance System</span> 
        <span class="two">~ Simplifying Attendance Management</span></p>
    </div>
    
</body>
</html>