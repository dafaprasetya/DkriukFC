@include('kelengkapan.core')


@section('content')

@include('nav.navbarmenu')

    <div class="container text-center" style="margin-top: 100px;">
        <div class="col-md-6">
            <img src="{{ asset($menu->gambar) }}" alt="">
            <h2 class="product_title">{{ $menu->nama }}</h2>
            <p id="infoharga">{{ $menu->harga }}</p>
        </div>
        <div class="col-md-6">

            <form id="beli">
                @csrf

                <input type="text" name="nama" value="{{ $menu->nama }}" id="nama">


                @if ($menu->cemilan == 'y')

                @else

                <select name="bagian" id="bagian" onchange="abcdefghij()">
                    <option>--Pilih Bagian--</option>
                    <option value="paha bawah">Paha Bawah</option>
                    <option value="sayap">Sayap</option>
                    <option value="dada">Dada</option>
                    <option value="paha atas">Paha Atas</option>
                </select>
                @endif

                <input type="number" step='any' onchange="abcdefghij()"@if($menu->cemilan == 'y') value='{{ $prek }}' @elseif ($menu->kategori == 'minuman') value='{{ $prek }}' @endif  name="harga" pattern="^\d*(\.\d{0,3})?$" placeholder="harga" id="harga">
                <input type="number" onchange="abcdefghij()" name="quantity" placeholder="jumlah" id="quantitas">
                <div id="semuaharga">Total :</div>

                <input type="submit" value="kirim">
            </form>
        </div>


        <div class='message'>
            <div class='check'>
                   <p class="ceklis">&#10004;</p>
            </div>
            <p>
                Success
            </p>
            <p>
                Orederan Success!!
            </p>
            <button id='ok'>
                OK
            </button>
        </div>
        <script>

        </script>
        {{-- simple script --}}
        <script type="text/javascript">

            function abcdefghij() {
                var bagian = $("#bagian").val();
                var harga = document.getElementById('harga');
                var hp = document.getElementById('infoharga').textContent;
                var q = document.getElementById('quantitas');


                if (hp.length == 18) {

                    if (bagian == 'paha bawah'){
                        var total = hp.substring(2, 7);
                        harga.value = total;
                        bagian.value = 'paha bawah'
                    }
                    if (bagian == 'sayap'){
                        var total = hp.substring(2, 7);
                        harga.value = total;
                        bagian.value = 'sayap'
                    }
                    if (bagian == 'dada'){
                        var total = hp.substring(12, 18);
                        harga.value = total;
                        bagian.value = 'dada'

                    }
                    if (bagian == 'paha atas'){
                        var total = hp.substring(12, 18);
                        harga.value = total;
                        bagian.value = 'paha atas'

                    }

                }
                if (hp.length == 19) {

                    if (bagian == 'paha bawah'){
                        var total = hp.substring(2, 8);
                        harga.value = total;
                        bagian.value = 'paha bawah'

                    }
                    if (bagian == 'sayap'){
                        var total = hp.substring(2, 8);
                        harga.value = total;
                        bagian.value = 'sayap'

                    }
                    if (bagian == 'dada'){
                        var total = hp.substring(13, 19);
                        harga.value = total;
                        bagian.value = 'dada'

                    }
                    if (bagian == 'paha atas'){
                        var total = hp.substring(13, 19);
                        harga.value = total;
                        bagian.value = 'paha atas'

                    }

                }
                var subtotal = harga.value * q.value;
                document.getElementById('semuaharga').innerHTML = "Total : "+subtotal+'k';



            }

            $(document).ready(function (){
                $('#beli').submit(function(e){
                    e.preventDefault();
                    var bagian = $("#bagian").val();
                    var harga = document.getElementById('harga').value;
                    var nama = document.getElementById("nama").value;
                    var quantity = document.getElementById('quantitas').value;

                    $.ajax({
                        type: "POST",
                        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                        url: "{{ route('order') }}",
                        data: {
                            nama : nama,
                            bagian : bagian,
                            harga : harga,
                            quantity : quantity,
                        },

                        success: function (response) {
                            setTimeout(function(){go(50)},700);
                            setTimeout(function(){go(500)},2000);
                            function go(nr) {

                                $('.message').toggleClass('comein');
                                $('.check').toggleClass('scaledown');
                                $('#go').fadeToggle(nr);
                            }
                        },
                        error: function (response) {
                            alert('gagal')
                         }
                    });
                })
            });
            </script>

</div>
<div class="related products-row " style="margin-top: 50px;">
    <div class="container" style="margin-top: 10;">

        <div class="row">
            <div class="col-md-12">
                <div class="title-section style5">
                    <h1 class="title">Related Products</h1>
                </div>
                </div><!--/.col-md-12-->
            </div>
            @foreach ($related as $r)

            <div class="row">
                <div class="related products clearfix">
                 <div class="col-sm-3 col-xs-6 style2">
                    <div class="product effect1">
                        <div class="box-wrap">
                            <div class="box-image">
                                <a href="#"><img height="150" width="150" src="{{ asset($r->gambar) }}" alt="images"></a>
                            </div>
                            <div class="box-content">
                             <h6> <a href="{{ route('detailmenu',$r->id) }}"> {{ $r->nama }}</a></h6>
                             <ul>
                                <li >{{ $r->harga }}</li>
                                <li >
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

    </div><!-- /.related products -->



<!-- Flat row -->
{{-- <form action="{{ route('order') }}" method="post">
    @csrf

    <input type="text" name="nama" value="{{ $menu->nama }}" id="nama">
    <select name="bagian" id="bagian">
        <option value="paha bawah">Paha Bawah</option>
        <option value="sayap">Sayap</option>
        <option value="dada">Dada</option>
        <option value="paha atas">Paha Atas</option>
    </select><br><br>
    <input type="number" name="harga" placeholder="harga" id="harga">
    <input type="number" name="quantity" placeholder="jumlah" id="jumlah">
    <input type="submit" value="kirim">

</form> --}}
