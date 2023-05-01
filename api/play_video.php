<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Elearn.css">
    <title>Letter B</title>

    <style>
        body {
            overflow: hidden;
        }

        video {
            height: 85vh;
            width: 100vw;
            margin-top: -60px;
        }
    </style>
</head>

<body background="Media/A-Background/cute-abc.jpg" class="backgrounda">
    <a href="learntowrite.php"><img src="Media/A-Zimage/OTHER-IMAGES/Icons/BLUEARROW.gif" id="" style="height: 100px; margin-top: 40px; margin-left: 30px;"></a>
    <?php
    if ($_GET['letter']) {
    ?>
        <video autoplay controls>
            <source src="Media/A-Zvideo/<?= strtolower($_GET['letter']) ?>.mp4" type="video/mp4">
        </video>
    <?php
    }
    ?>

    <img src="Media/A-Zimage/OTHER-IMAGES/Icons/X-button.png" href="learntowrite.php" alt="">

    <script>
        const btn = document.querySelector('button');
    </script>
</body>

</html>