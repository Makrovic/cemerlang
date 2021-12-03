@extends('layout/base-home')
@section('content')

<div id="booking" class="section">
  <div class="section-center">
    <div class="container">
      <div class="row">
        <div class="col-md-5" data-aos="fade-up">
          <div class="booking-cta">
            <h1>PKBM Cemerlang</h1>
            <p>Pusat Pemberdayaan Masyarakat terakreditasi A terbaik di Indonesia.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
{{-- About --}}
<section class="home-program">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-sm-12 col-md-6 col-lg-6" data-aos="fade-up">
        <h1>Program PKBM : </h1>
        <li>Pendidikan kesetaraan paket b</li>
        <li>Pendidikan kesetaraan paket c</li>
        <li>Program kuliah kerja</li>
        <li>Program Keterampilan/kursus/pelatihan</li>
        <li>Program Pemberdayaan Perempuan</li>
      </div>
      <div class="col-sm-12 col-md-6 col-lg-6"data-aos="fade-up">
        <img src="../assets/4-1.jpg" alt="">
      </div>
    </div>
  </div>
</section>
{{-- /About --}}
{{-- Room's --}}
<section class="section-rooms">
  <div class="container">
    <div class="row justify-content-center">
			<div class="col-sm-12 col-md-6 col-lg-6"data-aos="fade-up">
				<canvas id="myChart" width="300px" height="300px"></canvas>
			</div>
      <div class="col-sm-12 col-md-6 col-lg-6" data-aos="fade-up">
        <h1>Proses Pembelajaran : </h1>
					<p>PKMB  Cermerlang memberikan pendidikan kesetaraan paket b dan  c, 
						juga program keterampilan dan kursus yang mampu mengasah 
						skill, mental, karakter, dan attitude sehingga membentuk lulusan siap kerja.</p>
      </div>
    </div>
  </div>
</section>
{{-- /Room's --}}
<!-- TESTIMONIALS -->
<section class="testimonial-section">
  <div class="container">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item carousel-item active">
          <div class="img-box">
            <img src="../assets/testimoni/1.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-caption d-none d-md-block">
            <h5>service was amazing.They also provide local tour and chartered couch service.Breakfast just okay but judging the room with this price still consider value for money.Definitely will come and stay again"</h5>
            <p>Huda FR. - Local Tourist</p>
          </div>
        </div>
        <div class="item carousel-item">
          <div class="img-box">
            <img src="../assets/testimoni/2.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-caption d-none d-md-block">
            <h5>"good location, it's very near to supermarket (across street), near shopping mall (around 5-10 mins walk). The room is comfortable with good wifi. Breakfast also great, got lots of variety of food, local & international."</h5>
            <p>Faisal Makrovic - Domestic Tourist</p>
          </div>
        </div>
        <div class="item carousel-item">
          <div class="img-box">
            <img src="../assets/testimoni/4.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-caption d-none d-md-block">
            <h5>Great hotel for either business or casual stay. Staffs are very friendly and knowledgeable.Excellent hotel for both foreign and domestic tourists</h5>
            <p>Ivan Daniel - Local Tourist</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
</section>
<!-- /TESTIMONIALS -->
{{-- Location --}}
<section class="section-location">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-5 col-lg-6" data-aos="fade-up">
        <div class="mapouter">
          <div class="gmap_canvas">
              <iframe width="100%" height="100%" id="gmap_canvas" src="https://maps.google.com/maps?q=universitas%20amikom%20yogyakarta&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
              </iframe>
          </div>
          <style>.mapouter{position:relative;text-align:right;height:400px;width:400px;}.gmap_canvas {overflow:hidden;background:none!important;height:400px;width:400px;}</style>
        </div>
      </div>
      <div class="col-sm-12 col-md-5 col-lg-6" data-aos="fade-up">
        <p><span class="d-block">Address:</span> <span> Jl. Ring Road Utara, Ngringin, Condongcatur, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55281</span></p>
        <p><span class="d-block">Phone:</span> <span> (+62) 274 884201</span></p>
        <p><span class="d-block">Email:</span> <span> info@amikom.ac.id</span></p>
      </div>
    </div>
  </div>
</section>

<script>
	var data = [{
    data: [80, 90, 90, 85],
    backgroundColor: [
        "#3f51b5",
        "#9c9c00",
        "#17246e",
        "#e0e000"
    ],
    borderColor: "#fff"
}];

var options = {
    plugins: {
        datalabels: {
            formatter: (value, ctx) => {
                let percentage = value+"%";
                return percentage;
            },
            color: '#fff',
        }
    }
};

var ctx = document.getElementById("myChart").getContext('2d');
var myChart = new Chart(ctx, {
		plugins: [ChartDataLabels],
    type: 'pie',
    data: {
			labels: ["Praktikum", "Education", "Learning", "Motivation"],
        datasets: data
    },
    options: options
});
	</script>
<!-- END OF TESTIMONIALS -->
@stop