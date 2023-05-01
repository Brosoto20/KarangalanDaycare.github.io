<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Elearn.css">
    <title>Letter A</title>
    <a href="Colors.php"><img src="Media/A-Zimage/OTHER-IMAGES/Icons/BLUEARROW.gif" id="" style="height: 100px; margin-top: 30px; margin-left: 20px;"></a>
    <style>
        body {
            overflow: hidden;
        }

        video {
            height: 80vh;
            width: 100vw;
            margin-top: -40px;
        }
    </style>
</head>

<body background="Media/A-Background/blue.jpg" class="backgrounda">

    <?php
    if (isset($_GET['color'])) : ?>
        <video autoplay controls>
            <source src="Media/Colors/other-colors/video/<?=$_GET['color']?>.mp4" type="video/mp4">
        </video>
    <?php endif;
    ?>

    <script>
        const btn = document.querySelector('button');
    </script>

    <img src="Media/A-Zimage/OTHER-IMAGES/Icons/X-button.png" href="/Views/learntowrite.html" alt="">
</body>

</html>