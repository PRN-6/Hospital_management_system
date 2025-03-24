<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            font-family: Arial, sans-serif;
            background-color:aqua;
        }
        .login_div{
            width: 30%;
            margin: 0 auto;
            margin-top : 10%;
            padding : 20px;
            border: 1px solid #ccc;
            border-radius: 10px;  
            text-align:center;
            background-color: white;
        }
        input{
            width: 90%;
            padding:10px;
            margin: 10px;
        }

    </style>
</head>
<body>
    <div class="login_div">
        <h2>Login</h2>
        <form actio="login.php" method="post">
            <input type="text" name="username" placeholder="username" required><br>
            <input type="password" name="password" placeholder="password" requierd> <br>
            <button type= "submit">Login</button>
        </form>
    </div>
</body>
</html>