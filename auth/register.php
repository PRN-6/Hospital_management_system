<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
         * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(to right, #4b6cb7, #182848);
            padding: 20px;
        }
        .register-container {
            background: white;
            padding: 70px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            width: 100%;
            text-align: center;
        }
        h1 {
            color: #182848;
            margin-bottom: 10px;
        }
        p {
            color: #666;
            margin-top: 20px;
            margin-bottom: 20px;
        }
        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }
        label {
            font-weight: bold;
            text-align: left;
            display: block;
            margin-bottom: 5px;
        }
       
        input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            transition: border-color 0.3s ease-in-out;
        }
        input:focus {
            border-color: #4b6cb7;
            outline: none;
        }
        .button-group {
            display: flex;
            gap: 10px;
        }
        button {
            flex: 1;
            padding: 12px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s;
        }
        button[type="reset"] {
            background: #ccc;
        }
        button[type="reset"]:hover {
            background: #999;
        }
        button[type="submit"] {
            background: #4b6cb7;
            color: white;
        }
        button[type="submit"]:hover {
            background: #3651a3;
        }
        a {
            color: #4b6cb7;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="register-container">
        <h1>Lets Get Started</h1>
        <p>Add Your Personal Details to Continue</p>
        <form action="" method="post">
            <label for="uname">User Name:</label>
            <input type="text" id="uname" name="uname" placeholder="UserName" required>
            <label for="email">Email:</label>
            <input type="text" id="email" name="email" placeholder="Email" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" placeholder="Password" required>
            <div class="button-group">
                <button type="reset">Reset</button>
                <button type="submit">Submit</button>
            </div>
            
        </form>
        <p>Already have an account? <a href="login.php">Login</a></p>
    </div>
</body>
</html>

<?php
    // Include database connection file
    include("../connection.php");
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get form data
        $uname = $_POST['uname'];
        $email = $_POST['email'];
        $password = password_hash($_POST['password'],PASSWORD_DEFAULT);

        $check_sql = "SELECT * FROM users WHERE uname=? and email=?";
        $stmt= $conn->prepare($check_sql);
        $stmt->bind_param("ss",$uname , $email);
        $stmt->execute();
        $stmt->store_result();

       if($stmt->num_rows > 0){
            echo '<script>alert("Email already exists!");</script>';
        }else{
            // Insert data into the database
            $insert_sql = "INSERT INTO users (uname, email, password) VALUES (?, ?, ?)";
            $stmt = $conn->prepare($insert_sql);
            $stmt->bind_param("sss", $uname, $email, $password);
            
            if ($stmt->execute()) {
                echo '<script>alert("Registration successful!");</script>';
                header("Location: login.php");
                exit();
            } else {
                echo '<script>alert("Error: Could not register user.");</script>';
            }
       }
       
        // Close the statement and connection
        $stmt->close();
        $conn->close();
    }
?>

