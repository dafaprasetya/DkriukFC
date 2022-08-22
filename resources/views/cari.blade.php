@extends('kelengkapan.core')


@section('content')
    @include('nav.navbarmenu')
    <section class="flat-row flat-tab-menu menu-2">
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
                            <li class="active"><a href="#">semua</a></li>


                            <form method="GET" action="{{ route('cari') }}">
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Cari menu</label>
                                  <input type="text" class="form-control" id="cari" name="cari" aria-describedby="emailHelp" placeholder="Cari Menu">

                                </div>

                            </form>
                        </ul>


                    </div><!--/.bg-tabs-->
                    <div class="flat-divider d67px"><p>hasil pencarian : <b> {{ $request->cari }} </b></p>
                    </div>


                    <div class="content-tab">
                        <div class="content-inner">
                            @if (count($search) === 0)

                                @foreach ($menu as $m)


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
                            @else
                                @foreach ($search as $m)


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
                            @endif



                        </div><!-- /.content-inner -->




                    </div><!-- /.content-tab -->
                </div><!--flat-tabs-->

            </div><!--row-->
        </div><!--container -->
    </section>

@endsection
