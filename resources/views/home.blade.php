@extends('template.navigation')

@section('konten')
<!-- beranda -->
    <section class="hero">
    <div class="hero-overlay">
            <span></span>
            <span></span>
        </div>
        <div class="hero-slanted">
            <span></span>
            <span></span>
        </div>
        <div class="hero-content d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                      <div class="header">
                        <h1>Kuy Jalan</h1>
                        <p>website ini menampilkan deretan informasi seputar wisata-wisata yang ada <br>Di <strong>Lombok Timur</strong></p>
                      </div>
                    </div>
                    <div class="col-md-7">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="landing city">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Lombok Timur</h2>
                    <p>lombok timur merupakan destinasi yang sayang anda lewatkan ketika anda berlibur ke pulau Lombok
                       Lombok timur memiliki banyak tempat wisata yang menakjubkan
                       Banyak sekali para wisatawan yang menjadikan wisata lombok timur menjadi destinasi wisata wajib bagi mereka.
                    </p>
                </div>
                <!-- vidio -->
                <div class="col-md-6">
                  <iframe width="88%" height="280" src="https://www.youtube.com/embed/TRvQMAjJe8k"
                  frameborder="0" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                  </iframe>
                </div>
            </div>
        </div>
    </section>
    <section class="landing features">
        <div class="container features-content">
              <center><h2 style="margin-top:10px">Persiapan</h2></center>
            <div class="row ">
                <div class="col-md-4">
                    <img src="{{url('assets/images/highlight/tujuan.png')}}" width="120px" alt="">
                    <h3>Tujuan Wisata</h3>
                    <p>
                      Hal pertama yang harus kamu siapkan tentunya adalah menentukan destinasi wisata tujuanmu. kemana kamu akan berlibur? Apakah kamu akan mengunjungi wisata pantai, danau, gunung yyang ada di lombok timur?
                    </p>
                </div>
                <div class="col-md-4">
                    <img src="{{url('assets/images/highlight/wktu.png')}}" width="120px" alt="">
                    <h3>Waktu Liburan</h3>
                    <p>
                     Untuk yang sedang bekerja, mengunjungi destinasi wisata domestik saat hari liburan nasional dan cuti bersama mungkinakan menimbulkan beberapa ketidak nyamanan seperti perjalanan macet dan tempat wisata yang ramai.
                    </p>

                </div>
                <div class="col-md-4">
                    <img src="{{url('assets/images/highlight/barang.png')}}" width="120px" alt="">
                    <h3>Barang Bawaan</h3>
                    <p>
                      Setiap jenis wisata pasti memiliki kebutuhan dan jenis tas yang berbeda, bagi kamu yang hendak naik gunung, tas carrier pastilah jadi syarat utama membawa barang bawaan. Selalu sesuaikan tas bawaan dengan jenis wisata yang jamu jalani.
                   </p>

                </div>
            </div>
        </div>
    </section>

    <!-- pantai -->
    <section class="landing wisata" id="pantai">
        <div style="padding-top: 60px" class="container">
            <center><h2 style="margin-top:10px">Pantai</h2></center>
        </div>
        <div class="owl-carousel owl-theme">
            @foreach($pantai as $data)
            <div class="item">
              <a href="/wisata/{{ $data->id }}">
                <div class="item-image">
                  <img class="item-image " src="{{asset('assets/images/wisata')}}/{{ $data->background }}"  width="auto"  alt="">
                </div>
                <div class="item-text">
                  <span class="item-kicker">{{ $data->nama }}</span>
                  <h3 class="item-title">{{ $data->alamat }}</h3>
                </div>
              </a>
            </div>
            @endforeach
        </div>
        <div style="margin-top: 40px; padding-bottom:40px" class="container d-flex justify-content-center">
            <a style="font-weight: 700" class="btn btn-primary" href="/wisata">
                Lihat Semua
            </a>
        </div>
        <div class="features-slanted"></div>
    </section>
<!-- Gunung -->
    <section class="landing wisata" id="gunung">
        <div style="padding-top: 60px" class="container">
            <center><h2 style="margin-top:10px">Gunung</h2></center>
        </div>
        <div class="owl-carousel owl-theme">
            @foreach($gunung as $data)
            <div class="item">
              <a href="/wisata/{{ $data->id }}">
                <div class="item-image">
                  <img class="item-image " src="{{asset('assets/images/wisata')}}/{{ $data->background }}"  width="auto"  alt="">
                </div>
                <div class="item-text">
                  <span class="item-kicker">{{ $data->nama }}</span>
                  <h3 class="item-title">{{ $data->alamat }}</h3>
                </div>
              </a>
            </div>
            @endforeach
        </div>
        <div style="margin-top: 40px; padding-bottom:40px" class="container d-flex justify-content-center">
            <a style="font-weight: 700" class="btn btn-primary" href="/wisata">
                Lihat Semua
            </a>
        </div>
    </section>
   <!-- danau -->
   <section class="landing wisata" id="danau">
        <div style="padding-top: 60px" class="container">
            <center><h2 style="margin-top:10px">Danau</h2></center>
        </div>
        <div class="owl-carousel owl-theme">
            @foreach($danau as $data)
            <div class="item">
              <a href="/wisata/{{ $data->id }}">
                <div class="item-image">
                  <img class="item-image " src="{{asset('assets/images/wisata')}}/{{ $data->background }}"  width="auto"  alt="">
                </div>
                <div class="item-text">
                  <span class="item-kicker">{{ $data->nama }}</span>
                  <h3 class="item-title">{{ $data->alamat }}</h3>
                </div>
              </a>
            </div>
            @endforeach
        </div>
        <div style="margin-top: 40px; padding-bottom:40px" class="container d-flex justify-content-center">
            <a style="font-weight: 700" class="btn btn-primary" href="/wisata">
                Lihat Semua
            </a>
            <div class="features-slanted"></div>
        </div>
    </section>
    <!-- Footer  -->
    <section style="margin-top:0!important" class="footer">
        <div class="container">
          <center>
            <img src="{{url('assets/images/logo/nobox.png')}}" width="150px" alt="Logo">
             <font color="#f5f5f5" class="font-segoe text-center nopadding">Kuy Jalan - Universitas Bumigora Mataram</p>
          </center>
        </div>
    </section>
    <!-- End of Footer  -->
</body>
<script src="{{url('assets/scripts/jquery.min.js')}}"></script>
<script src="{{url('assets/scripts/bootstrap/bootstrap.min.js')}}"></script>
<script src="{{url('assets/scripts/owl.carousel.min.js')}}"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script>
// Owl Carousel
$('.owl-carousel').owlCarousel({
  loop: false,
  margin: 10,
  dots: false,
  nav: false,
  autoplay:false,
  responsiveClass: true,
  responsive: {
    0: {
      items: 1,
      margin: 2,
      stagePadding: 10,
    },
    600: {
      items: 3,
      margin: 10,
      stagePadding: 40,
    },
    1000: {
      items: 4
    }
  }
});


// Fetch News API

const newsUrl =
  "https://newsapi.org/v2/everything?apiKey=f8fd87d48cf746e0a817a4f7a21bafe4&q=bandung AND (wisata OR travel OR turis OR alam OR pemandangan)&language=id";
axios.get(newsUrl).then(resp => {
  for (let i = 0; i < 6; i++) {
    var d = new Date(resp.data.articles[i].publishedAt);
    d = d.getDate()+'-'+(d.getMonth()+1)+'-'+d.getFullYear()+' '+(d.getHours() > 12 ? d.getHours() - 12 : d.getHours())+':'+d.getMinutes()+' '+(d.getHours() >= 12 ? "PM" : "AM");
    $("#newsContainer").append(`
    <div class="col-md-4 col-sm-6 col-xs-6">
    <a href="${resp.data.articles[i].url}" target="_blank">
    <div class="news-card" style='background-image:url("${
      resp.data.articles[i].urlToImage
    }")'>
        <div class="news-content">
                <h5>${resp.data.articles[i].title}</h5>
                <p>${ d }</p>
        </div>
    </div>
    </a>
</div>
    `);
  }
});

document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
          document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'

        });
    });
});

</script>


@endsection

</html>
