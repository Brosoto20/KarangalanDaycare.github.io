const nextBtn = document.querySelector('#next');
const prevBtn = document.querySelector("#prev");
const back = document.getElementById('back-icon');
let audio = new Audio();

let num = 0;
document.addEventListener("DOMContentLoaded", load);

// functionss
function load(){
    letter.src = `${letterSrc}${letters[num]}.gif`;
    noun.innerText = nouns[num].toUpperCase();
    object.src = `${objectSrc}${objects[num]}.png`;

    audio.src = `${audioSrc}${objects[num]}.mp3`;

}

nextBtn.addEventListener('click', () => {
 
    if (num + 1 < 26){
        num++
        load();
        audio.play();
    }else{
        num = 0;
        load();
        window.location.href = "http://127.0.0.1:5501/Views/GetStarted.html";
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
    window.location.href = "http://127.0.0.1:5501/Views/count-game.html";
})