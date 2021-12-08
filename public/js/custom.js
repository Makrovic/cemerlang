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

var config = {
    container: "#struktur-tim",
    
    connectors: {
        type: 'step'
    },
    node: {
        HTMLclass: 'struktur-node'
    }
},
ceo = {
    text: {
        name: "Anna Wardiyati",
        title: "Founder - ceo",
    },
    image: "../images/tim/bu_anna.jpg"
},

leader_kelembagaan = {
    parent: ceo,
    stackChildren: true,
    text:{
        name: "Sovi Zakiyatul Fakhiroh",
        title: "Leader Tim Kelembagaan",
    },
    image: "../images/tim/sovi.jpg"
},
leader_kependidikan = {
    parent: ceo,
    stackChildren: true,
    text:{
        name: "Meythria Chairun Nissa",
        title: "Leader Tim Kependidikan",
    },
    image: "../images/tim/tia.jpg"
},
leader_kewirausahaan = {
    parent: ceo,
    stackChildren: true,
    text:{
        name: "Marfungatun",
        title: "Leader Tim Kewirausahaan",
    },
    image: "../images/tim/marfungatun.jpg"
},
admin_akademik = {
    parent: leader_kelembagaan,
    text:{
        name: "Resi Mayasari",
        title: "Admin Akademik"
    },
    image: "../images/tim/resi.jpg"
},
customer_service = {
    parent: leader_kelembagaan,
    text:{
        name: "Ayun Brilian Sharizki Futri",
        title: "Chief Innovation Officer",
    },
    image: "../images/tim/ayun.jpg"
},
tim_it = {
    parent: leader_kelembagaan,
    text:{
        name: "Setya Aji Baskara",
        title: "Tim IT & Creative"
    },
    image: "../images/tim/aji.jpg"
},
wali_kelas1 = {
    parent: leader_kependidikan,
    text:{
        name: "Firman Mohamad Rizky",
        title: "Wali Kelas"
    },
    image: "../images/tim/firman.jpg"
},
wali_kelas2 = {
    parent: leader_kependidikan,
    text:{
        name: "Wahyuning Tiyas",
        title: "Wali Kelas"
    },
    image: "../images/tim/tiyas.jpg"
},
tim_produksi = {
    parent: leader_kewirausahaan,
    text:{
        name: "Tim Produksi"
    }
}

chart_config = [
    config,
    ceo,
    leader_kelembagaan,
    leader_kependidikan,
    leader_kewirausahaan,
    admin_akademik,
    customer_service,
    tim_it,
    wali_kelas1,
    wali_kelas2,
    tim_produksi
];

var my_chart = new Treant(chart_config);