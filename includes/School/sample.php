<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Letters</title>
    <link rel="stylesheet" href="css/sample.css">
</head>

<body background="Media/A-Background/background2.jpg">
    <p id="back-icon">&#x21a9;</p>
    <div class="container">
        <div class="image-letter">
            <img src="" alt="letter" id="letter">
        </div>
        <div class="image-noun">
            <img src="" alt="object" id="object">
            <p id="noun"></p>
        </div>
        <div class="arrows">
            <img src="Media/A-Zimage/OTHER-IMAGES/Icons/back-arrow.png" alt="" id="prev">
            <img src="Media/A-Zimage/OTHER-IMAGES/Icons/forward-arrow.png" id="next">
        </div>
    </div>

    <script>
        const letter = document.querySelector('#letter');
        const noun = document.querySelector("#noun");
        const object = document.querySelector('#object');
        const nextBtn = document.querySelector('#next');
        const prevBtn = document.querySelector("#prev");
        const back = document.getElementById('back-icon');
        let audio = new Audio();

        let num = 0;
        const letterSrc = "Media/A-Zimage-letter/";
        const objectSrc = "Media/A-Zimage/";
        const audioSrc = "Media/A-Zsounds/"

        const letters = ["A", "A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z"];

        const nouns = ["Let's Hear it!", "apple", "ball", "cat", "dog", "elephant", "fox", "giraffe", "hammer", "ice cream", "jellly fish",
            "key", "ladder", "mouse", "necklace", "octupus", "pumpkin", "quilt", "rose", "star", "turtle", "umbrella", "vegetables", "whale", "xylophone", "yoyo", "zebra"
        ];

        const objects = ["aa", "apple", "ball", "cat", "dog", "elephant", "fox", "giraffe", "hammer", "ice-cream", "jelly-fish", "key", "ladder", "mouse", "necklace", "octupus", "pumpkin", "quilt", "rose", "star", "turtle", "umbrella", "vagetables", "whale", "xylophone", "yoyo", "zebra"];

        document.addEventListener("DOMContentLoaded", load);

        // functionss
        function load() {
            letter.src = `${letterSrc}${letters[num]}.gif`;
            noun.innerText = nouns[num].toUpperCase();
            object.src = `${objectSrc}${objects[num]}.png`;

            audio.src = `${audioSrc}${objects[num]}.mp3`;

        }

        nextBtn.addEventListener('click', () => {

            if (num + 1 < 27) {
                num++
                load();
                audio.play();
            } else {
                num = 0;
                load();
                window.location.href = "ABCs.php";
            }
        })
        prevBtn.addEventListener('click', () => {

            if (num - 1 >= 0) {
                num--;
                load();
            } else {
                num = 25;
                load();
            }
            audio.play();
        })
        back.addEventListener('click', () => {
            window.location.href = "ABCs.php";
        })
    </script>
</body>

</html>