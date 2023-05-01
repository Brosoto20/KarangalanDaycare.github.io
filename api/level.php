<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sample</title>
    <link rel="stylesheet" href="css/matchingcard.css?<?= time(); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <style>
        .level-container {
            border-radius: 10px;
            padding: 40px 50px;
            position: absolute;
            top: -10%;
            left: 50%;
            transform: translate(-50%, 50%);
            width: 50%;
            margin: 0 auto;
            height: auto;
            background-color: #fff;
        }

        .column {
            padding: 15px;
            border-radius: 10px;
            width: 100%;
        }
    </style>

</head>

<body background="Media/A-Background/matching-card-background.gif">
    <a href="mini-games.php" class="btn btn-success m-3 fs-4">Back to menu</a>
    <div class="level-container">
        <h1 class="text-center">Select Difficulties</h1>
        <div class="diff-container mt-4">
            <div class="btn btn-success column" onclick="difficulties('Easy')">
                <h2>Easy</h2>
            </div>

            <div class="btn btn-success column mt-3 nb-3" onclick="difficulties('Medium')">
                <h2>Medium</h2>
            </div>

            <div class="btn btn-success column mt-3 nb-3" onclick="difficulties('Hard')">
                <h2>Hard</h2>
            </div>



        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.6.0/dist/confetti.browser.min.js"></script>


    <script>
        function difficulties(difficulties) {
            if (difficulties == "Easy") {
                setData(difficulties, 45);
                window.location.href = "matchingcard.php";
            }

            if (difficulties == "Medium") {
                setData(difficulties, 35);
                window.location.href = "matchingcard.php";
            }

            if (difficulties == "Hard") {
                setData(difficulties, 25);
                window.location.href = "matchingcard.php";
            }
        }

        function setData(difficulties, time) {
            localStorage.clear();
            // set difficulties and time
            localStorage.setItem("mode", difficulties);
            localStorage.setItem("timer", time);
        }
    </script>

</body>

</html>