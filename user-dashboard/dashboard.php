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
            width:195px;
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
        .sidebar ul li a {
            text-decoration: none;
            color: #333;
            display: flex;
            align-items: center;
            padding: 12px;
            transition: 0.3s;
        }
        .sidebar ul li a i {
            margin-right: 10px;
        }
        .sidebar ul li a:hover{
            background: #ddd;
            color: #000;
            transition: 0.3s;
        }
        
        .main-container{
            margin-left:220px;
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
        .user-info i{
            width:40px;
            height:40px;
            padding-right:10px;
            display:flex;
            align-items:center;
            justify-content: center;
            flex-direction:column-reverse;
        }
        img{
           
            border-radius:50%;
            margin-left:10px;
              
            cursor: pointer;
        }
        .user-dashboard div{
            border:1px solid black;
            height:100px;
            width:100px;
        }

        
    </style>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="sidebar">
        <h2 style="text-align:center; padding-bottom:40px;">HMS</h2>
        <ul>
            <li><a href="#"><i class='bx bx-home' ></i>Dashboard</a></li>
            <li><a href="#"><i class='bx bx-book-add'></i>Book Appointment</a></li>
            <li><a href="#"><i class='bx bx-history'></i>Appointment History</a></li>
            <li><a href="#"><i class='bx bx-plus-medical'></i>Medical History</a></li>
        </ul>
    </div>
    <div class="main-container">
        <div class="header">
            <h1>Hospital Management System</h1>
            <div class="user-info">
                <a href="#"><i class='bx bx-user'></i></a>
                <span>sen</span>
            </div>
        </div>
        <h2>USER | DASHBOARD</h2>
        <div class="user-dashboard">
            <div >
                <i class='bx bx-smile'></i>
            </div>
            <div >
                <box-icon name='smile'></box-icon>
            </div>
        </div>
        
    </div>
   


</body>
</html>