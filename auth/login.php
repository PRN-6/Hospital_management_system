<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            font-family: Arial, sans-serif;
            background: linear-gradient(120deg, #a1c4fd 0%, #c2e9fb 100%);
        }
        .login_div{
            width: 30%;
            margin: 0 auto;
            margin-top : 10%;
            padding : 20px;
            /* border: 1px solid #ccc; */
            border-radius: 10px;  
            text-align:center;
            background-color: white;
        }
        input{
            width: 70%;
            padding:10px;
            margin: 10px;
            border: 1px solid #ccc;
        }
        button{
            cursor:pointer;
            width: 76%;
            border-radius: 30px;
            border: 1px solid #ccc;
            background-color: aqua;
            height: 40px;
            margin:20px;
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