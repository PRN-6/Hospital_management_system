<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family: Arial, sans-serif;
        }
       body{
        display:flex;
        justify-content:center;
        align-items:center;
        height:100vh;
        background: linear-gradient(to right, #4b6cb7, #182848);
       }
       .login-container{
        background: white;
        padding:30px;
        padding-right:60px;
        padding-left:60px;
        border-radius:10px;
        box-shadow:0 4px 10px rgba(0, 0, 0, 0.1);
        width:400px;
        height: 300px;
        text-align:center;
       }
       .login-container h2{
        margin-bottom:20px;
       }
       .login-container input{
        width:100%;
        padding:10px;
        margin:10px 0;
        border: 1px solid #ccc;
        border-radius: 5px;
       }
       .login-container button{
        width:100%;
        padding:10px;
        background:rgb(137, 44, 236);
        color:white;
        border: none;
        border-radius: 5px;
        cursor:pointer;
        font-size: 16px;
        margin-top: 10px;
        transition: 0.3s;
       }
       .login-container button:hover{
        background:#2575fc;
       }
       .login-container p{
        margin-top: 10px;
       }
       .login-container a{
        color: #6a11cb;
        text-decoration:none;
        font-weight: bold;
       }
       .login-container a:hover{
        text-decoration:underline;
       }

        
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form action="" method="post">
            <input type="text" name="username" placeholder="username" required>
            <input type="password" name="password" placeholder="password" requierd>
            <button type="submit">Login</button>
        </form>
        <p>Don't have an account? <a href="register.php">Sign up</a></p>
    </div>
    
</body>
</html>
<?php
session_start();
include '../connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"]; 

    $query = "SELECT * FROM users WHERE uname = ?"; // Query has one placeholder
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $username); // Bind only one parameter (username)
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row["password"])) {
            $_SESSION["user_id"] = $row["id"];
            $_SESSION["username"] = $row["uname"];
            header("Location: ../user-dashboard/dashboard.php");
            exit();
        } else {
            echo "<script>alert('Wrong password!');</script>";
        }
    } else {
        echo "<script>alert('Username not found!');</script>";
    }
}
?>