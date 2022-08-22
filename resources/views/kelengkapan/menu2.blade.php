
<section class="flat-row flat-tab-menu" id="menuin" >
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title-section">

                    <h1 class="title">Menu</h1>
                </div>
            </div><!--/.col-md-12-->
        </div><!--/.row-->

        <div class="row">
            <div class="col-md-12">
                <div class="flat-tabs">
                    <ul class="menu-tab">
                        <li class="active"><a href="#">Makanan</a></li>
                        <li><a href="#">Minuman </a></li>

                    </ul>

                    <div class="content-tab">
                        <div class="content-inner">
                            @foreach ($menu as $men)
                            <div class="col-md-6">
                                <ul class="menu-fd">

                                        <li>
                                            <div class="media-wrap flat-hover-moveright">
                                                <a href="#" class="pull-left">
                                                    <img src="{{ $men->gambar }}" alt="client" height="100px" width="100px" class="img-responsive">
                                                </a>
                                                <div class="media-body">
                                                    @auth

                                                    <h6><a href="{{ route('detailmenu',$men->id) }}">{{ $men->nama }}</a></h6>
                                                    @else
                                                    <h6><a href="#menu">{{ $men->nama }}</a></h6>

                                                    @endauth

                                                    <div class="dotted-bg"></div>
                                                    <span>{{ $men->harga }}</span>
                                                </div>
                                                <ul class="menu-in">
                                                    <li>{{ $men->keterangan }}</li>

                                                </ul>
                                            </div>
                                        </li>

                                    </ul>
                                </div><!-- /.col-md-6" -->
                                @endforeach



                        </div><!-- /.content-inner -->


                        <div class="content-inner">


                            @foreach ($menu2->where('kategori', 'minuman') as $men)
                            <div class="col-md-6">
                                <ul class="menu-fd">

                                        <li>
                                            <div class="media-wrap flat-hover-moveright">
                                                <a href="#" class="pull-left">
                                                    <img src="{{ $men->gambar }}" alt="client" height="100px" width="100px" class="img-responsive">
                                                </a>
                                                <div class="media-body">
                                                    <h6><a href="#">{{ $men->nama }}</a></h6>
                                                    <div class="dotted-bg"></div>
                                                    <span>{{ $men->harga }}</span>
                                                </div>
                                                <ul class="menu-in">
                                                    <li>{{ $men->keterangan }}</li>

                                                </ul>
                                            </div>
                                        </li>

                                    </ul>
                                </div><!-- /.col-md-6" -->
                                @endforeach

                            </div><!-- /.content-inner -->
                        </div><!-- /.content-tab -->
                    </div><!--flat-tabs-->
                </div><!--/.col-md-12-->
            </div><!--/.row-->
            <div class="clearfix"></div>
                <div class="flat-divider d35px"></div>
                <div class="read-more view-all">
                    <a href="{{ route('menu') }}">Selengkapnya</a>
            </div>
    </div><!--/.container -->
</section>
