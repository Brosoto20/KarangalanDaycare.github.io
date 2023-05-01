<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Announcement</title>

    <div class="top-header">
       <?php include "includes/header.php";?>
</div>
    
    <style>
        header.about-header{
    position: fixed;
    background: linear-gradient(to top, #f0080800, #1100ff);
}
header{
    min-width: 100vw;
    background-color: transparent;
}
header nav{
    display: flex;
    align-items: center;
    justify-content: space-around;
}
.logo{
    display: flex;
    align-items: center;
    justify-content: flex-start;
    cursor: pointer;
    transition: 0.3s ease-in-out;
}
.logo-img{
    height: 120px;
    width: 120px;
}
nav ul{
    list-style-type: none;
}
nav ul li{
    display:inline-block;
    margin: 0 15px;
}
nav ul li a{
    text-decoration: none;
    color: rgb(79, 78, 78);
    font-weight: 600;
    font-size: 18px;
    transition: 0.4s ease-in-out;       
}
nav ul li a:hover{
    color: black;
}

    </style>
</head>
<body class="background">
    <!-- <nav>
        <ul>
            <li><a href="index.php">Back to Home Page</a></li>
        </ul>
    </nav>   -->



</body>
<body>


<div class="container">
        <div class="Gallery">
            <img src="Media/images/req.jpg" alt="">
        </div>
        <div class="Gallery">
            <img src="Media/images/Tuesday.jpg" alt="">
        </div>
        <div class="Gallery">
            <img src="Media/images/Wednesday.jpg" alt="">
        </div>
        <div class="Gallery">
            <img src="Media/images/Thursday.jpg" alt="">
        </div>
    </div>

<style>
    body{
            margin: 0;
            height: 100vh;
            width: 100%;
        }
        .background{
            background-image: url(Media/picture/Announcemnetbackg.png);
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }
        nav{
            position: fixed;
            background: linear-gradient(to top, #f0080800, #1100ff);
            width: 100%;
            overflow: auto;
        }
        ul{
            margin: 0;
            padding: 0;
            list-style: none;
        }
        li{
            float: left;
        }
        nav a:hover{
            background: skyblue;
            color: black;
        }
        .container{
            margin:auto;
            flex-direction: row;
            justify-content: center;
            display: flex;
            gap: 20px 50px;
            padding-top: 100px;
            

        }
        .Gallery{
            padding-top: 70px;
            margin: 5px;
            width: 282px;
        }
        .Gallery img{
            width: 120%;
            height: 140%;
            border-radius: 10px;

        }
        footer{
            padding: 10px;
            font-size: 17px;
            font-weight: bold;
            text-align: center;
            background: #594848;
            color: white;
            font-family: Arial;
            letter-spacing: 1px;
        }
</style>

</body>
</html>