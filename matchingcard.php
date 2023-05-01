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
        .timer {
            position: absolute;
            top: 40%;
            left: 8%;
            z-index: 9;
            background-color: blue;
            padding: 20px 40px;
            border-radius: 10px;
        }

        .best {
            background-color: blue;
            padding: 20px 40px;

        }

        .timer h1 {
            font-size: 5rem;
        }

        .big {
            font-size: 4rem;
        }


        @import url(http://fonts.googleapis.com/css?family=Calibri:400,300,700);

        body {
            background-color: #D32F2F;
            font-family: 'Calibri', sans-serif !important
        }

        .mt-100 {
            margin-top: 100px
        }

        .container {
            margin-top: 200px
        }

        .card {
            position: relative;
            display: flex;
            width: 450px;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 1px solid #d2d2dc;
            border-radius: 4px;
            -webkit-box-shadow: 0px 0px 5px 0px rgb(249, 249, 250);
            -moz-box-shadow: 0px 0px 5px 0px rgba(212, 182, 212, 1);
            box-shadow: 0px 0px 5px 0px rgb(161, 163, 164)
        }

        .card .card-body {
            padding: 1rem 1rem
        }

        .card-body {
            flex: 1 1 auto;
            padding: 1.25rem
        }

        p {
            font-size: 14px
        }

        h4 {
            margin-top: 18px
        }

        .cross {
            padding: 10px;
            color: #d6312d;
            cursor: pointer
        }

        .continue:focus {
            outline: none
        }

        .continue {
            border-radius: 5px;
            text-transform: capitalize;
            font-size: 13px;
            padding: 8px 19px;
            cursor: pointer;
            color: #fff;
            background-color: #D50000
        }

        .continue:hover {
            background-color: #D32F2F !important
        }

        .img {
            width: 300px;
            height: auto;
        }
    </style>

</head>

<body background="Media/A-Background/matching-card-background.gif">

    <a href="level.php" class="btn btn-success m-3 fs-4">Change Level</a>

    <div class="fs-1 text-light timer text-center">
        <h2>Time : (<span id="mode"></span>)</h2>
        <h1 id="sample" class="big"></h1>
    </div>

    <!-- congratulations -->
    <div class="box-container">

    </div>

    <!--  -->
    <div class="modal fade" id="repeat" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <!-- <h1 class="modal-title fs-5 text-center" id="exampleModalLabel"></h1> -->
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <img src="award.gif" alt="" class="img">
                    <h1 id="time"></h1>
                    <h4>CONGRATULATIONS!</h4>
                    <p>You have been personally selected to take part in our 2017 annual visitors survey!</p>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal" onclick="exitGame()">Exit Game</button>
                    <button type="button" class="btn btn-success" onclick="resetGame()">Play Gain!</button>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="Failed" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <!-- <h1 class="modal-title fs-5 text-center" id="exampleModalLabel"></h1> -->
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <img src="sad.gif" alt="" class="img">
                    <h1 id="time"></h1>
                    <h4>It's ok Kid!, Better luck next time</h4>
                    <p>Believe in yourself! You can do more!</p>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal" onclick="exitGame()">Exit Game</button>
                    <button type="button" class="btn btn-success" onclick="resetGame()">Play Gain!</button>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="arrows">
        <a href="mini-games.php"><img src="Media/A-Zimage/OTHER-IMAGES/Icons/triple-back.png" id=""></a>
    </div> -->


    <audio autoplay hidden>
        <source src="Media/A-Zsounds/OTHER SOUND/matching-card-music.MP3">
    </audio>

    <audio hidden id="congrats">
        <source src="congratulation.mp3">
    </audio>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.6.0/dist/confetti.browser.min.js"></script>
    <script>
        var count = Number(localStorage.getItem('timer')); //
        var mode =  document.getElementById('mode').innerHTML = localStorage.getItem("mode"); //
        var time = 0;

        // creaet a box on reload with a specified number of boxes
        let boxContainer = document.querySelector('.box-container');
        let images;
        let image1, image2;
        let game = false;
        var fair = 0;
        var score = 0;

        var x = setInterval(function() {

            document.getElementById("sample").innerHTML = count--;

            if (count == -1) {

                clearInterval(x);

                setInterval(() => {
                    $("#Failed").modal("show")
                }, 1000);

            }
        }, 1000);


        document.addEventListener('DOMContentLoaded', pageLoad)
        let arrayLetters = ["a", "b", "c", "d", "e", "f", "g", "h", "a", "b", "c", "d", "e", "f", "g", "h"];
        let boxImages = shuffleArray(arrayLetters);

        function pageLoad() {

            boxImages.forEach(() => {
                // create a box for image placement and append to the div container
                let box = document.createElement('div');
                box.classList.add('box');
                boxContainer.appendChild(box);
            })
            let boxes = boxContainer.querySelectorAll('.box');
            boxes = [...boxes]
            for (let i = 0; i < boxes.length; i++) {
                let img = document.createElement('img');
                // img.src = `img/Img/${boxImages[i]}.gif`
                img.src = `Media/matchingcard/${boxImages[i]}.png`
                let imageClass = stripImageName(boxImages[i]);
                img.classList.add(imageClass);
                boxes[i].appendChild(img);
            }
            images = boxContainer.querySelectorAll('.box img');
            showLetters(images)
        }

        if (game = true) {
            document.addEventListener('click', (e) => {
                if (e.target.className === 'box') {
                    let box = e.target;
                    let img = box.querySelector('img');
                    if (image1 === undefined && image2 === undefined) {
                        img.style.display = "block";
                        image1 = img.className;
                    } else if (image1 !== undefined && image2 === undefined) {
                        img.style.display = "block";
                        image2 = img.className;
                        game = false;
                    }

                }

                if (image1 !== undefined && image2 !== undefined) {
                    if (image1 === image2 || image1 === image2.toLowerCase() || image1.toLowerCase() === image2) {
                        matched(image1, image2)
                    } else {
                        Mismatched(image1, image2)
                    }
                }

            })
        }

        function stripImageName(name) {
            let str;
            if (name.includes("small_")) {
                str = name.replace("small_", "")
                return str;
            }
            return name;
        }

        function Mismatched(className1, className2) {
            let classes = [className1, className2];
            for (let i = 0; i < classes.length; i++) {
                let image = document.querySelectorAll(`.box .${classes[i]}`);
                image1 = undefined;
                image2 = undefined;
                setTimeout(() => {
                    // image.style.display = "none";
                    image.forEach((img) => {
                        img.style.display = "none";
                    })
                }, 200)
            }
        }


        function matched(className1, className2) {
            image1 = undefined;
            image2 = undefined;
            score += 5;
            fair += 1;

            if (fair == 4) {
                score += 15;
            }

            if (fair == 6) {
                score += 20;
            }

            if (fair == 8) {

                document.getElementById("time").innerHTML = `Scores: ` + `${score+25}`;
                clearInterval(x);

                var congrats = document.getElementById("congrats");

                congrats.play();

                var end = Date.now() + (15 * 1000);

                // go Buckeyes!
                var colors = ['#bb0000', '#ffffff'];

                (function frame() {
                    confetti({
                        particleCount: 2,
                        angle: 60,
                        spread: 55,
                        origin: {
                            x: 0
                        },
                        colors: colors
                    });
                    confetti({
                        particleCount: 2,
                        angle: 120,
                        spread: 55,
                        origin: {
                            x: 1
                        },
                        colors: colors
                    });

                    if (Date.now() < end) {
                        requestAnimationFrame(frame);
                    }
                }());

                // alert("congratulations")

                setInterval(() => {
                    $("#repeat").modal("show")
                }, 2000);

                // pageLoad();
            }
        }


        function exitGame() {
            window.location.replace("mini-games.php");
        }

        function resetGame() {
            window.location.href="level.php";
        }



        function shuffleArray(array) {
            for (let i = array.length - 1; i > 0; i--) {
                let j = Math.floor(Math.random() * (i + 1));
                [array[i], array[j]] = [array[j], array[i]];
            }
            return array;
        }

        function showLetters(letters) {
            letters.forEach((letter) => {
                setTimeout(() => {
                    letter.style.display = "none";
                    game = true;
                }, 5000)
            })
        }


        // back.addEventListener('click', () => {
        //     window.location.href = "http://127.0.0.1:5501/Views/count-game.html";
        // })
    </script>
</body>

</html>