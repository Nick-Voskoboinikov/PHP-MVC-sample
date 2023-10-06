document.title="💨 So lost"
document.body.classList.toggle("lost");
const timerElem=document.querySelector('.timer');
let seconds=timerElem.innerText;

let setIntervalValue = setInterval(function() {
    seconds -= 1;
    timerElem.innerText = seconds;

    if (seconds < 1) {
        clearInterval(setIntervalValue);
        document.location.href = "/";
    }
    }, 1000);

