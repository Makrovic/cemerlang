btntop = document.getElementById("btn-top");
navheader = document.getElementById("navheader");

function scrollFunction() {
    if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
        btntop.classList.add('visible')
        btntop.classList.remove('invisible')
        navheader.classList.add('navheader-scrolled')
    } else {
        btntop.classList.add('invisible')
        btntop.classList.remove('visible')
        navheader.classList.remove('navheader-scrolled')
    }
}

window.onscroll = function () {
    scrollFunction()
};

function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
  }