<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            margin:0;
            font-family: Arial, Helvetica, sans-serif;
            display:flex;
        }
        .sidebar{
            width:220px;
            background: #f4f4f4;
            padding: 15px;
            height:100vh;
            position:fixed;
            box-shadow:0 2px 5px rgba(0,0,0,0.1);
        }
        .sidebar ul {
            list-style:none;
            padding:0;
           
        }
        .sidebar ul li{
           padding:15px 0;
          
        }
        .sidebar ul li a{
            text-decoration:none;
            color: #333;
            display:block;
            padding:10px;
               
        }
        .main-container{
            margin-left:250px;
            padding:20px;
            width:100%;
        }
        .header{
            
            display:flex;
            justify-content:space-between;
            align-items:center;
            background: #f4f4f4;
            padding:10px;
            box-shadow:0 2px 5px rgba(0,0,0,0.1);
        }
        .user-info{
            display:flex;
            align-items:center;
            justify-content: center;
            flex-direction:column-reverse;
        }
        img{
            width:40px;
            height:40px;
            border-radius:50%;
            margin-left:10px;
            padding-right:10px;  
            cursor: pointer;
        }
        li{
            display: flex;
            align-items: center;
            margin: 10px 0;
        }

    </style>
</head>
<body>
    <div class="sidebar">
        <h2 style="text-align:center; padding-bottom:40px;">HMS</h2>
        <ul>
            <li><a href="#"><img src="../img/home.svg">Dashboard</a></li>
            <li><a href="#"><img src="../img/calendar.svg" style="border-radius:0;">Book Appointment</a></li>
            <li><a href="#">Appointment History</a></li>
            <li><a href="#">Medical History</a></li>
        </ul>
    </div>
    <div class="main-container">
        <div class="header">
            <h1>Hospital Management System</h1>
            <div class="user-info">
                <span>sen</span>
                <img src="../img/user.png" alt="User Image">
            </div>
        </div>


    </div>

</body>
</html>