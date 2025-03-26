<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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
            padding:20px;
        }
        .register-container{
            background:white;
            padding:90px;
            border-radius:10px;
            box-shadow:0 4px 10px rgba(0, 0, 0, 0.1);
            max-width:600px;
            width:100%;
            text-align:center;
        }
        h1{
            color: #182848;
            margin-bottom: 10px;
        }
        p{
            margin-bottom:20px;
        }
        form{
            display:flex;
            flex-direction:column;
            gap: 15px;
        }
        label{
            font-weight:bold;
            text-align:left;
            display:block;
            margin-bottom: 5px;
        }
        .name-container{
            display:flex;
            gap: 10px;
        }
        input{
            width:100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .button-group {
            display: flex;
            /* gap: 10px; */
        }
        button {
            /* flex: 1; */
            padding: 12px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s;
        }


    </style>

</head>
<body>
    <div class="register-container">
        <h1>Lets Get Started</h1>
        <p>Add Your Personal Details to Continue</p>
        <form>
            <label for="fname">Name:</label>
            <div class="name-container">
                <input type="text" id="fname" name="fname" placeholder="First Name" requird>
                <input type="text" id="lname" name="lname" placeholder="Last Name" required>
            </div>
            <label for="address">Address:</label>
            <input type="text" id="address" name="address" placeholder="Address" required>
            <label for="dob">Email</label>
            <input type="date" id="dob" name="dob" required>
            <div class="button-group">
                <button type="reset">Reset</button>
                <button type="submit">Submit</button>
            </div>
            
        </form>
        <p>Already have an account? <a href="login.php">Login</a></p>
    </div>
</body>
</html>