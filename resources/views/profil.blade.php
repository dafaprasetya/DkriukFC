@extends('profile.inti')

@section('judul')
    Dkriuk-profile
@endsection


@section('content')
<section class="loading-overlay">
    <div class="Loading-Page">
        <h2 class="loader">Loading</h2>
    </div>
</section>
@include('nav.navbarmenu')
<section id="intro" class="s-intro target-section">

    <div class="row intro-content">

        <div class="flat-carousel slid-m-p-single" id="slid-m">
            <div class="owl-carousel-service">


                <div class="item-owl">
                    <div class="blockquote-testimo">
                        <img src="{{ asset("images/imagebox/11.png") }}" height="400px" width="400px" alt="">
                    </div>


            </div>

            </div><!--/.owl-carousel-services-v2-->

        </div><!--/.flat-carousel-v2-->





    </div> <!-- end row -->

</section> <!-- end intro -->
<section class="flat-row profile-single">
    <div class="container" id='tentang'>
        <div class="row">
            <div class="col-md-6" style="color: #000000;">

                <div class="wrap-content-story">

                    <div class="trididiv">

                        @include('kelengkapan.3d')
                    </div>
                </div>
            </div><!--/.col-md-6-->

            <div class="col-md-6" style="color: #000000;">

                <div class="wrap-content-story">
                    <div class="title-section style2 ">
                        <h1 class="title" style="color: #000000;">Profil Perusahaan</h1>
                    </div>
                    <p class="content-story">DKriuk Fried Chicken adalah usaha mikro kecil menengah dengan sistem kemitraan yang dibangun sejak tahun 2020. Kami membangun usaha ini dengan sistem kemitraan. Kami menghadirkan berbagai menu yang inovatif serta paket kemitraan yang ekonomis.<br><br>

                        Area Layanan kami meliputi wilayah DKI Jakarta, Bogor, Depok, Bekasi, Tangerang, dan sekitarnya, didukung dengan stokis yang tersebar di wilayah – wilayah strategis kemitraan kami, serta sistem manajemen lokasi yang didukung penuh oleh tim berpengalaman DKriuk Fried Chicken yang telah berhasil membantu 1000+ mitra menjalankan usaha ini.<br><br>

                        Kami berkomitmen memberikan inovasi menu yang menarik, sesuai dengan lidah masyarakat Indonesia, bergizi, halal dan tentunya aman di konsumsi oleh konsumen DKriuk Fried Chicken Indonesia.Kami membuka peluang kerjasama kemitraan dengan berbagai jenis paket kemitraan yang ekonomis serta didukung dengan pelatihan dan pendampingan bagi mitra untuk menjalankan usaha DKriuk Fried Chicken.</p>

                </div>

            </div><!--/.col-md-6-->
            <div class="col-md-12" style="color: #000000;">
                <br> <br>
                <div class="wrap-content-story">
                    <div class="col-md-4 stats">
                        <h1 id="outlet"></h1>
                        <p>Outlet (Updated Data per Agustus 2022)</p>
                    </div>
                    <div class="col-md-4 stats">
                        <h1 id="kota-i"></h1>
                        <p>Kota Se-Indonesia (per Agustus 2022)</p>
                    </div>
                    <div class="col-md-4 stats">
                        <h1 id="followers"></h1>
                        <p>Followers IG (per Agustus 2022)</p>
                    </div>
                    <script>
                        document.addEventListener("DOMContentLoaded", () => {
                            function counter(id, start, end, duration) {
                            let obj = document.getElementById(id),
                            current = start,
                            range = end - start,
                            increment = end > start ? 1 : -1,
                            step = Math.abs(Math.floor(duration / range)),
                            timer = setInterval(() => {
                            current += increment;
                            obj.textContent = current;
                            if (current == end) {
                                clearInterval(timer);
                            }
                            }, step);
                            }
                            function countercepat(id, start, end, duration) {
                            let obj = document.getElementById(id),
                            current = start,
                            range = end - start,
                            increment = end > start ? 20 : -1,
                            step = Math.abs(Math.floor(duration / range)),
                            timer = setInterval(() => {
                            current += increment;
                            obj.textContent = current;
                            if (current == end) {
                                clearInterval(timer);
                            }
                            }, step);
                            }
                            counter("outlet", 0, 1556, 3000);
                            counter("kota-i", 0, 31, 2500);
                            countercepat("followers", 0, 34000, 3000);
                        });
                    </script>
                </div>

            </div><!--/.col-md-6-->

        </div><!--/.row-->
    </div><!--/.container -->
    <br>
</section>
    @include('kelengkapan.pencapaian')
    @include('kelengkapan.footer')
@endsection
