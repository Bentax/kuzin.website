//  скрывающееся меню
menu.onclick = function myFunction() {
    var x = document.getElementById("myTopnav");

    if(x.className === "topnav") {
        x.className += " responsive"; //пробел перед responsive чтобы значёк менюшки не отображался
    } else {
        x.className = "topnav";
    }
}
// работа модального окна
let modal = document.getElementById("form-container");
let btn = document.getElementById("order-recall");
let span = document.getElementsByClassName("close")[0];

btn.onclick = function () {
    modal.style.display = "block";
}

span.onclick = function () {
    modal.style.display = "none";
}

window.onclick = function (event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}