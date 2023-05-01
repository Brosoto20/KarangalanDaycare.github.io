<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Elearn.css">
    <title>Document</title>

    <style>
        .container {
            width: 90%;
            padding: 20px;
            margin: 100px auto;
            display: flex;
            flex-direction: row;
            justify-content: center;
        }

        .box {
            width: 300px;
            margin: 0 10px;
            box-shadow: 0 0 20px 20px rgba(0, 0, 0, .1);
            transition: 1s;
        }

        .box img {
            display: block;
            width: 100%;
            border-radius: 20px;
        }

        .box:hover {
            transform: scale(1.3);
            z-index: 2;
        }
        .blue {
            width: 300px;
            margin: 0 10px;
            box-shadow: 0 0 20px 20px rgba(0, 0, 0, .1);
            transition: 1s;
        }

        .blue img { 
            display: block;
            width: 100%;
            border-radius: 20px;
        }
        .blue:hover {
            transform: scale(1.3);
            z-index: 1s;
        }
    </style>
</head>

<body background="Media/A-Background/forest-cute.webp" class="backgrounda">
    <div class="top-header">
        <?php include "includes/header.php"; ?>
    </div>


</body>

<body>
    <div class="arrows1">
        <a href=""><img src="" id="" style="height: 100px; "></a>
    </div>
    <div class="container">
        <div class="blue">
            <a href="GetStarted.php"><img src="Media/A-Zimage/OTHER-IMAGES/Add A He.jpg" alt="">
        </div>
        <div class="box">
            <a href="learntowrite.php"><img src="Media/A-Zimage/OTHER-IMAGES/learn-to-write.jpg" alt="">
        </div>
        <div class="box">
            <a href="sample.php"><img src="Media/A-Zimage/OTHER-IMAGES/Lets-hear-it.jpg" alt="">
        </div>
    </div>

</body>