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
        title: "Founder - CEO",
    },
    image: "../images/pkbm/tim/bu_anna.jpg"
},

leader_kelembagaan = {
    parent: ceo,
    stackChildren: true,
    text:{
        name: "Sovi Zakiyatul Fakhiroh",
        title: "Leader Tim Kelembagaan",
    },
    image: "../images/pkbm/tim/sovi.jpg"
},
leader_kependidikan = {
    parent: ceo,
    stackChildren: true,
    text:{
        name: "Meythria Chairun Nissa",
        title: "Leader Tim Kependidikan",
    },
    image: "../images/pkbm/tim/tia.jpg"
},
leader_kewirausahaan = {
    parent: ceo,
    stackChildren: true,
    text:{
        name: "Siti Marhamah",
        title: "Leader Tim Kewirausahaan",
    },
    image: "../images/pkbm/tim/marhamah.jpg"
},
admin_akademik = {
    parent: leader_kelembagaan,
    text:{
        name: "Resi Mayasari",
        title: "Admin Akademik"
    },
    image: "../images/pkbm/tim/resi.jpg"
},
customer_service = {
    parent: leader_kelembagaan,
    text:{
        name: "Ayun Brilian Sharizki Futri",
        title: "Chief Innovation Officer",
    },
    image: "../images/pkbm/tim/ayun.jpg"
},
tim_it = {
    parent: leader_kelembagaan,
    text:{
        name: "Setya Aji Baskara",
        title: "Tim IT & Creative"
    },
    image: "../images/pkbm/tim/aji.jpg"
},
wali_kelas1 = {
    parent: leader_kependidikan,
    text:{
        name: "Maulida Annisa Gani Rasyid",
        title: "Wali Kelas"
    },
    image: "../images/pkbm/tim/maulida.jpg"
},
wali_kelas2 = {
    parent: leader_kependidikan,
    text:{
        name: "Sardjono",
        title: "Wali Kelas"
    },
    image: "../images/pkbm/tim/sardjono.jpg"
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