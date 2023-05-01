<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photo Gallery</title>

<!-- NAVBAR -->
<div class="top-header">
       <?php include "includes/header.php";?>
</div>
<!-- CSS NAVBAR -->
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
<!--  -->



    <style>
        *{
            box-sizing: border-box;
        }
        body{
            margin: 0;
            height: 100vh;
            width: 100%;
        }
        .background{
            background-image: url(Media/img/background.jpg);
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }
        .container{
            max-width: 1600px;
            margin: auto;
            background:(0, 0, 0, 1);
            overflow: auto;
            grid-template-columns: repeat(6, 2fr);
        }
        .Gallery{
            padding-top: 70px;
            margin: 5px;
            border: 1px solid (0, 0, 0, 1);
            float: left;
            width: 282px;
        }
        .Gallery img{
            padding-top: 100px;
            width: 100%;
            height: 400px;
            border-radius: 10px;
            transition: .5s;
        }
        .Gallery img:hover{
            transform: scale(-1.-1);
            align-items: center;
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
        .backgrounda{
            background-size: cover;
            background-repeat: no-repeat;
            width: 100vw;
            height: auto;
        }

    </style>
</head>
<body background="Media/Gallery/background.jpg" class="backgrounda">
    <div class="container">
        <div class="Gallery">
            <a href="Media/Gallery/1.jpg"><img src=Media/Gallery/1.jpg alt="">
        </div>
        <div class="Gallery">
            <a href="Media/Gallery/2.jpg"><img src="Media/Gallery/2.jpg" alt="">
        </div>
        <div class="Gallery">
            <a href="Media/Gallery/3.jpg"><img src="Media/Gallery/3.jpg" alt="">
        </div>
        <div class="Gallery">
            <a href="Media/Gallery/4.jpg"><img src="Media/Gallery/4.jpg" alt="">
        </div>
        <div class="Gallery">
            <a href="Media/Gallery/5.jpg"><img src="Media/Gallery/5.jpg" alt="">
        </div>
        <div class="Gallery">
            <a href="Media/Gallery/6.jpg"><img src="Media/Gallery/6.jpg" alt="">
        </div>
        <div class="Gallery">
            <a href="Media/Gallery/7.jpg"><img src="Media/Gallery/7.jpg" alt="">
        </div>
        <div class="Gallery">
            <a href="Media/Gallery/8.jpg"><img src="Media/Gallery/8.jpg" alt="">
        </div>
        <div class="Gallery">
            <a href="Media/Gallery/9.jpg"><img src="Media/Gallery/9.jpg" alt="">
        </div>
        <div class="Gallery">
            <a href="Media/Gallery/10.jpg"><img src="Media/Gallery/10.jpg" alt="">
        </div>
        <div class="Gallery">
            <a href="Media/Gallery/11.jpg"><img src="Media/Gallery/11.jpg" alt="">
        </div>
        <div class="Gallery">
            <a href="Media/Gallery/12.jpg"><img src="Media/Gallery/12.jpg" alt="">
        </div>
        <div class="Gallery">
            <a href="Media/Gallery/13.jpg"><img src="Media/Gallery/13.jpg" alt="">
        </div>
        <div class="Gallery">
            <a href="Media/Gallery/15.jpg"><img src="Media/Gallery/15.jpg" alt="">
        </div>
        <div class="Gallery">
            <a href="Media/Gallery/16.jpg"><img src="Media/Gallery/16.jpg" alt="">
        </div>
        <div class="Gallery">
            <a href="Media/Gallery/17.jpg"><img src="Media/Gallery/17.jpg" alt="">
        </div>
        <div class="Gallery">
            <a href="Media/Gallery/18.jpg"><img src="Media/Gallery/18.jpg" alt="">
        </div>
        <div class="Gallery">
            <a href="Media/Gallery/19.jpg"><img src="Media/Gallery/19.jpg" alt="">
        </div>
        <div class="Gallery">
            <a href="Media/Gallery/20.jpg"><img src="Media/Gallery/20.jpg" alt="">
        </div>
        <div class="Gallery">
            <a href="Media/Gallery/21.jpg"><img src="Media/Gallery/21.jpg" alt="">
        </div>
        <div class="Gallery">
            <a href="Media/Gallery/22.jpg"><img src="Media/Gallery/22.jpg" alt="">
        </div>
        <div class="Gallery">
            <a href="Media/Gallery/23.jpg"><img src="Media/Gallery/23.jpg" alt="">
        </div>
        <div class="Gallery">
            <a href="Media/Gallery/24.jpg"><img src="Media/Gallery/24.jpg" alt="">
        </div>
        <div class="Gallery">
            <a href="Media/Gallery/25.jpg"><img src="Media/Gallery/25.jpg" alt="">
        </div>
        <div class="Gallery">
            <a href="Media/Gallery/26.jpg"><img src="Media/Gallery/26.jpg" alt="">
        </div>
        <div class="Gallery">
            <a href="Media/Gallery/27.jpg"><img src="Media/Gallery/27.jpg" alt="">
        </div>
        <div class="Gallery">
            <a href="Media/Gallery/28.jpg"><img src="Media/Gallery/28.jpg" alt="">
        </div>
        <div class="Gallery">
            <a href="Media/Gallery/29.jpg"><img src="Media/Gallery/29.jpg" alt="">
        </div>
        <div class="Gallery">
            <a href="Media/Gallery/30.jpg"><img src="Media/Gallery/30.jpg" alt="">
        </div>
        <div class="Gallery">
            <a href="Media/Gallery/31.jpg"><img src="Media/Gallery/31.jpg" alt="">
        </div>
        <div class="Gallery">
            <a href="Media/Gallery/32.jpg"><img src="Media/Gallery/32.jpg" alt="">
        </div>
        <div class="Gallery">
            <a href="Media/Gallery/33.jpg"><img src="Media/Gallery/33.jpg" alt="">
        </div>
    </div>
    <footer>
        Karangalan Daycare Center Cainta, Rizal
    </footer>
    
</body>
</html>