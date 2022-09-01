<!-- Flat make resvervation -->
<section class="flat-row flat-make-res index-2" id="kemitraan">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="reservation-page-right">

                        <div class="container">


                            <div class="row">
                                <div class="col">

                                    <div class="flat-carousel">
                                        <div class="owl-carousel-services">


                                            <div class="item-owl">
                                                <div class="blockquote-testimo">
                                                    <img src="{{ asset('images/langkah/1.jpg') }}" alt="">
                                                </div>


                                            </div>
                                            <div class="item-owl">
                                                <div class="blockquote-testimo">
                                                    <img src="{{ asset('images/langkah/1 asli.jpg') }}" alt="">
                                                </div>


                                            </div>
                                            <div class="item-owl">
                                                <div class="blockquote-testimo">
                                                    <img src="{{ asset('images/langkah/2.jpg') }}" alt="">
                                                </div>


                                            </div>
                                            <div class="item-owl">
                                                <div class="blockquote-testimo">
                                                    <img src="{{ asset('images/langkah/3.jpg') }}" alt="">
                                                </div>


                                            </div>
                                            <div class="item-owl">
                                                <div class="blockquote-testimo">
                                                    <img src="{{ asset('images/langkah/4.jpg') }}" alt="">
                                                </div>


                                            </div>
                                            <div class="item-owl">
                                                <div class="blockquote-testimo">
                                                    <img src="{{ asset('images/langkah/5.jpg') }}" alt="">
                                                </div>


                                            </div>
                                            <div class="item-owl">
                                                <div class="blockquote-testimo">
                                                    <img src="{{ asset('images/langkah/6.jpg') }}" alt="">
                                                </div>


                                            </div>
                                            <div class="item-owl">
                                                <div class="blockquote-testimo">
                                                    <img src="{{ asset('images/langkah/7.jpg') }}" alt="">
                                                </div>


                                            </div>






                                        </div><!--/.owl-carousel-services-v2-->

                                    </div><!--/.flat-carousel-v2-->
                                </div><!--/.col-md-12-->
                            </div><!--/.row-->
                        </div><!--/.container -->

                </div>


            </div><!--col-md-5-->

            <div class="col-md-7">
                <div class="reservation-page-left">

                    <div class="reservation-page-form">

                        <div class="title-section">
                            <div class="top-section">
                                <p></p>
                            </div>
                            <h1 class="title">Gabung Mitra</h1>
                        </div>

                        <ul>
                            <li>Senin-Jumat <span>08:00 AM - 17:00 PM</span> </li>
                            <li>Sabtu<span>08:00 AM - 14:00 PM</span></li>
                        </ul>

                        <h2 class="phone">0821 1783 3330 (Pusat) <br>
                            0811 8813 350 (Jabodetabek) <br>
                            0811 8603 340 (Luar Jabodetabek)</h2>

                        <h3><span>Registrasi online mitra baru</span></h3>
                        <form id="join-form" method="POST" action="{{ route('jaoint') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-row">


                                <div class="col-md-6">
                                    <label>nama</label>
                                    <input type="text" name="nama" id="nama">
                                </div>
                                <div class="col-md-6">
                                    <label>Tanggal Lahir</label>
                                    <input type="date" class="form-control" name="tanggal" >

                                </div>

                                <div class="col-md-6">
                                    <label>Nomor HP</label>
                                    <input type="number" name="hp" id="nomor-hp">
                                </div>
                                <div class="col-md-6">
                                    <label>Email</label>

                                    <input type="email" name="email" autocomplete="email" id="email">

                                </div>

                                <div class="col-md-6">


                                    <h4>Jenis Kelamin</h4>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="jkl" id="flexRadioDefault1" value="laki-laki" checked>
                                        <label class="form-check-label" for="flexRadioDefault1">
                                          Laki-Laki
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="jkl" id="flexRadioDefault2" value="perempuan">
                                        <label class="form-check-label" for="flexRadioDefault2">
                                          Perempuan
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6">


                                    <h4>Lokasi Pengajuan</h4>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="lokasiP" id="flexRadioDefault1" value="jabodetabek">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                          JABODETABEK
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="lokasiP" id="flexRadioDefault2" value="luar_jabodetabek" checked>
                                        <label class="form-check-label" for="flexRadioDefault2">
                                          LUAR JABODETABEK
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <label for="">Alamat Lengkap</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" name="alamatL" rows="3"></textarea>
                                    <label>Foto/Scan KTP</label>
                                    <input type="file" name="ktp" id="ktp">
                                    <br>

                                    <input type="submit" value="Daftar Sekarang!" style="color: white">
                                </div>
                            </div>





                        </form>

                        </div>

                    </div>
                </div><!--col-md-7-->
            </div><!--row-->
        </div><!--container -->
</section>
