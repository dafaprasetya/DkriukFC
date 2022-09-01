@extends('kelengkapan.core')

@section('content')
<section class="loading-overlay">
    <div class="Loading-Page">
        <h2 class="loader">Loading</h2>
    </div>
</section>

@include('nav.navbarmenu')
@include('kelengkapan.header')
    <section class="flat-row menu-1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-section style1">

                        <h1 class="title">Menu Populer Dkriuk</h1>
                    </div>
                </div><!--col-md-12-->
            </div><!--row-->

            <div class="row">
                @foreach ($menu->where('fav', 'y') as $mf)

                <div class="col-sm-3 col-xs-6">
                    <div class="product effect1" >
                        <div class="box-wrap">
                            <div class="box-image">
                                @auth

                                <a href="{{ route('detailmenu',$mf->id) }}"><img src="{{ $mf->gambar }}" alt="images"></a>
                                @else
                                <a href=""><img src="{{ $mf->gambar }}" alt="images"></a>
                                @endauth
                            </div>
                            <div class="box-content">
                               <h6>{{ $mf->nama }}</h6>
                               <ul>
                                    <li>{{ $mf->harga }}</li>
                                    <li>
                                        <i class="fa fa-heart"></i>
                                        <i class="fa fa-heart"></i>
                                        <i class="fa fa-heart"></i>
                                        <i class="fa fa-heart"></i>
                                        <i class="fa fa-heart"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div><!--row-->
        </div><!--container -->
    </section>

     <!-- Flat Tab-->
    <section class="flat-row flat-tab-menu menu-2" >
        <div class="container">
            <div class="row">

            </div><!--/.row-->

            <div class="row">
                <div class="col-md-12 flat-tabs ">
                    <div class="bg-tabs">
                        <div class="title-section style1 martp-0px">

                                <h1 class="title marbt-33px ">Menu Makanan Dkriuk</h1>
                        </div>


                        <ul class="menu-tab">
                            <li class="active"><a href="#">Makanan</a></li>

                            <li><a href="#">Minuman</a></li>
                            <form method="GET" action="{{ route('cari') }}">
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Cari menu</label>
                                  <input type="text" class="form-control" id="carix" name="cari" aria-describedby="emailHelp" placeholder="Cari Menu">

                                </div>

                            </form>
                        </ul>



                    </div><!--/.bg-tabs-->
                     <div class="flat-divider d67px"></div>

                    <div class="content-tab">

                        <div class="content-inner">
                            @foreach ($menu->where('kategori', 'makanan') as $m)

                                <div class="col-md-6">

                                    <ul class="menu-fd">
                                        <li>
                                            <div class="media-wrap">
                                                <a href="#" class="pull-left">
                                                    <img src="{{ $m->gambar }}"  height="100px" width="100px" alt="client" class="img-responsive">
                                                </a>
                                                <div class="media-body">
                                                    @auth

                                                    <h6><a href="{{ route('detailmenu',$m->id) }}">{{ $m->nama }}</a></h6>

                                                    @else
                                                    <h6><a href="#">{{ $m->nama }}</a></h6>
                                                    @endauth
                                                    <span>{{ $m->harga }}</span>
                                                </div>
                                                <ul class="menu-in">
                                                    <li>{{ $m->keterangan }}</li>

                                                </ul>
                                            </div>
                                        </li>

                                </div><!-- /.col-md-6" -->
                            @endforeach



                        </div><!-- /.content-inner -->


                        <div class="content-inner">
                            @foreach ($menu->where('kategori', 'minuman') as $m)

                            <div class="col-md-6">

                                <ul class="menu-fd">
                                    <li>
                                        <div class="media-wrap">
                                            <a href="#" class="pull-left">
                                                <img src="{{ $m->gambar }}"  height="100px" width="100px" alt="client" class="img-responsive">
                                            </a>
                                            <div class="media-body">
                                                <h6><a href="{{ route('detailmenu',$m->id) }}">{{ $m->nama }}</a></h6>
                                                <span>{{ $m->harga }}</span>
                                            </div>
                                            <ul class="menu-in">
                                                <li>{{ $m->keterangan }}</li>

                                            </ul>
                                        </div>
                                    </li>

                            </div><!-- /.col-md-6" -->
                            @endforeach
                        </div><!-- /.content-inner -->
                    </div><!-- /.content-tab -->
                </div><!--flat-tabs-->

            </div><!--row-->
        </div><!--container -->
    </section>

    <script>
        udin();
        function udin() {

            $.ajax({
                type: "GET",
                url: "{{ route('ujang') }}",
                dataType: "json",
                success: function (response) {
                    console.log(response.shelby);
                }
            });
        }
    </script>

    @include('kelengkapan.footer')

</div><!--box -->
@endsection
