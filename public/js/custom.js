$(function () {
    $(".datepicker").datepicker({
        format: 'dd-mm-yyyy',
        autoclose: true,
        todayHighlight: true,
    });
});

$('.form-control').each(function () {
    floatedLabel($(this));
});

$('.form-control').on('input', function () {
    floatedLabel($(this));
});

function floatedLabel(input) {
    var $field = input.closest('.form-group');
    if (input.val()) {
        $field.addClass('input-not-empty');
    } else {
        $field.removeClass('input-not-empty');
    }
}

window.onscroll = function () {
    scrollFunction()
};

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

function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
  }

window.addEventListener('load', () => {
    AOS.init({
        duration: 1000,
        easing: "ease-in-out",
        once: true,
        mirror: false
    });
});