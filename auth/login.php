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
        padding:20px;
        border-radius:10px;
        box-shadow:0 4px 10px rgba(0, 0, 0, 0.1);
        width:300px;
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
        border: none;
        border-radius: 5px;
        cursor:pointer;
        font-size: 16px;
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
        <form>
            <input type="text" name="username" placeholder="username" required>
            <input type="password" name="password" placeholder="password" requierd>
            <button type="submit">Login</button>
        </form>
        <p>Don't have an account? <a href="auth/register.php">Sign up</a></p>
    </div>
    
</body>
</html>