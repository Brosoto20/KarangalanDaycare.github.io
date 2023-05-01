<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Elearn.css">
    <title>Letter A</title>
    <a href="numbers.php"><img src="Media/A-Zimage/OTHER-IMAGES/Icons/BLUEARROW.gif" id="" style="height: 100px; margin-top: 30px; margin-left: 20px;"></a>
    <style>
        body {
            overflow: hidden;
        }

        video {
            height: 80vh;
            width: 95vw;
            margin-left: 50px;
            margin-top: -30px;
        }
    </style>
</head>

<body background="Media/A-Background/numbers-background.jpg" class="backgrounda">
    <button id="button"></button>
    <?php
    if (isset($_GET['number'])) : ?>
        <video autoplay>
            <source src="Media/0-9numbers/other-numbers/video/<?=$_GET['number']?>.mp4" type="video/mp4">
        </video>
    <?php endif;
    ?>

    <script>
        const btn = document.querySelector('button');
    </script>
</body>

</html>