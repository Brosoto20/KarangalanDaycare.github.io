const letter = document.querySelector('#letter');
const noun = document.querySelector("#noun");
const object = document.querySelector('#object');
const nextBtn = document.querySelector('#next');
const prevBtn = document.querySelector("#prev");
const back = document.getElementById('back-icon');
let audio = new Audio();

let num = 0;
const letterSrc = "/Media/A-Zimage-letter/";
const objectSrc = "/Media/A-Zimage/";
const audioSrc = "/Media/A-Zsounds/"

const letters = ["A","A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S","T", "U", "V", "W", "X", "Y", "Z"];

const nouns = ["ALPHABET","apple", "ball", "cat", "dog", "elephant", "fox", "giraffe", "hammer", "ice cream", "jellly fish",
"key", "ladder", "mouse", "necklace", "octupus", "pumpkin", "quilt", "rose", "star", "turtle", "umbrella", "vegetables", "whale", "xylophone", "yoyo", "zebra"];

const objects = ["aa", "apple", "ball", "cat", "dog", "elephant", "fox", "giraffe", "hammer", "ice-cream", "jelly-fish", "key", "ladder", "mouse", "necklace", "octupus", "pumpkin", "quilt", "rose", "star", "turtle", "umbrella", "vagetables", "whale", "xylophone", "yoyo", "zebra"];

document.addEventListener("DOMContentLoaded", load);

// functionss
function load(){
    letter.src = `${letterSrc}${letters[num]}.gif`;
    noun.innerText = nouns[num].toUpperCase();
    object.src = `${objectSrc}${objects[num]}.png`;

    audio.src = `${audioSrc}${objects[num]}.mp3`;

}

nextBtn.addEventListener('click', () => {
 
    if (num + 1 < 27){
        num++
        load();
        audio.play();
    }else{
        num = 0;
        load();
        window.location.href = "ABCs.php";
    }
})
prevBtn.addEventListener('click', () => {

    if (num - 1 >= 0){
        num--;
        load();
    }else{
        num = 25;
        load();
    }
    audio.play();
})
back.addEventListener('click', () => {
    window.location.href = "ABCs.php";
})