<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
    <style>
        *{
            text-decoration:none;
        }
        .logo{
            height: 50px;
            width:50px;

        }
        .nav{
            background-color:green;
            font-style:italic;
            padding-left: 15px;
        }
        .navdiv{
            display:flex;
            align:center;
            justify-content:space-between;
        }
        li{
            list-style:none;
            display:inline-block;
            font-weight:bold;
            
            
        }
        li a{
            color:white;
            padding-right:25px;
        }
       

    </style>
</head>
<body>
    <div class="nav">
        <div class="navdiv">
            <img src="images/logo-2.png" alt="logo" class="logo">
            <ul>
                <li><a href="">Profile</a></li>
                <li><a href="">Notifications</a></li>
                <li><a href="">Home</a></li>
                <li><a href="">Menu</a></li>
            </ul>
        </div>
    </div>
   
    
</body>
</html>