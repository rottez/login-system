var timeLeft = 5;
var elem = document.getElementById('timer');
var timerId = setInterval(countdown, 1000);


function countdown() {
    if (timeLeft == -1) {
        clearTimeout(timerId);
        location.href = "login.html";
    } else {
        elem.innerHTML = 'You will be redirected in ' +timeLeft+ ' seconds.';
        timeLeft--;
    }
}