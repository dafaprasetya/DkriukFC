<!-- Flat testimonial -->
<section class="flat-row flat-testimonial index-3" >
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-section margb-27px">
                    <h1 class="title">Sudah Siapkah Kamu Jadi Mitra Dkriuk?</h1>

                    <h4>“Jangan ragu lagi untuk bergabung dengan kami ya ka, karena sudah lebih dari 1000+ mitra yang sudah percaya & bergabung dengan kami, Masalah Kualitas & Rasa kita juara, yuk gabung sekarang bersama kemitraan dkriuk fried chicken, dan rasakan keuntungan dari hasil penjualannya.”</h4>
                </div>
            </div><!--col-md-12-->
        </div><!--row-->

        <div class="row">
            <div class="col-md-12">

                <div class="flat-carousel">
                    <div class="owl-carousel-services">
                        @foreach ($testi as $t)

                        <div class="item-owl">
                            <div class="blockquote-testimo">
                                <h3> {{ $t->quote }}

                                </h3>
                            </div>

                            <div class="title-testimonial">
                                <h6 class="title"><a href="#">{{ $t->nama }}</a></h6>
                                <p>{{ $t->keterangan }}</p>
                            </div>
                        </div>
                        @endforeach





                    </div><!--/.owl-carousel-services-v2-->
                </div><!--/.flat-carousel-v2-->
            </div><!--/.col-md-12-->
        </div><!--/.row-->
    </div><!--/.container -->
</section>

