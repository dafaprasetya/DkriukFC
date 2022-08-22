<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>

    <meta charset="utf-8">

    <title>Dkriuk</title>

    <meta name="author" content="themesflat.com">


    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" type="text/css" href="stylesheets/bootstrap.css" >

    <link rel="stylesheet" type="text/css" href="stylesheets/style.css">

    <link rel="stylesheet" type="text/css" href="stylesheets/responsive.css">
    <link rel="stylesheet" type="text/css" href="stylesheets/jquery.datetimepicker.css">


    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="stylesheets/colors/color1.css" id="colors">

    <link rel="stylesheet" type="text/css" href="stylesheets/animate.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


    <link href="icon/apple-touch-icon-48-precomposed.png" rel="apple-touch-icon" sizes="48x48">
    <link href="icon/apple-touch-icon-32-precomposed.png" rel="apple-touch-icon-precomposed">
    <link href="icon/favicon.png" rel="shortcut icon">


    </head>

    <body class="">
        @if ($errors->any())
        <div class="kesalahan" id="kesalahan">
            <div class="alert alert-danger" role="alert">
                Error!
                <ul>
                    @foreach ($errors->all() as $error)
                    <li> <span class="text-danger">{{ $error }}</span></li>
                    @endforeach
                </ul>
            </div>
        </div>
        <script>
            setTimeout(() => {
                document.getElementById('kesalahan').style.display = 'none'
            }, 5000);
        </script>
        @endif
        @if (session()->has('success'))
        <div class="kesalahan" id="kesalahan">
            <div class="alert alert-success" role="alert">

                <ul>


                        <li> <span class="text-success">{{ session()->get('success') }}</span></li>


                </ul>
            </div>
        </div>
        <script>
            setTimeout(() => {
                document.getElementById('kesalahan').style.display = 'none'
            }, 5000);
        </script>
        @endif





        @include('loading.loadingpage')

        @include('nav.navbar')

        @include('kelengkapan.slider')


        @include('kelengkapan.profil')

        @include('kelengkapan.menu2')

        @include('kelengkapan.pencapaian')

        @include('kelengkapan.joinmitra')



        @include('kelengkapan.testimoni')


        @include('kelengkapan.footer')

 </div><!--box -->

 <!-- Javascript -->
 <script type="text/javascript" src="javascript/jquery.min.js"></script>
 <script type="text/javascript" src="javascript/jquery.datetimepicker.full.min.js"></script>
 <script type="text/javascript" src="javascript/bootstrap.min.js"></script>
 <script type="text/javascript" src="javascript/jquery.easing.js"></script>
 <script type="text/javascript" src="javascript/imagesloaded.min.js"></script>
 <script type="text/javascript" src="javascript/jquery.isotope.min.js"></script>
 <script type="text/javascript" src="javascript/jquery-waypoints.js"></script>
 <script type="text/javascript" src="javascript/jquery.magnific-popup.min.js"></script>
 <script type="text/javascript" src="javascript/jquery.cookie.js"></script>
 <script type="text/javascript" src="javascript/parallax.js"></script>
 <script type="text/javascript" src="javascript/jquery.flexslider-min.js"></script>
 <script type="text/javascript" src="javascript/owl.carousel.js"></script>
 <script type="text/javascript" src="javascript/jquery-validate.js"></script>
 <!-- <script type="text/javascript" src="javascript/switcher.js"></script> -->
 <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBvV0EE3yFozGhjmUv3BgoyviVdXzCwHlk"></script>
 <script type="text/javascript" src="javascript/gmap3.min.js"></script>
 <script type="text/javascript" src="javascript/jquery.fancybox.js"></script>
 <script type="text/javascript" src="javascript/main.js"></script>

 <!-- Revolution Slider -->
 <script type="text/javascript" src="javascript/jquery.themepunch.tools.min.js"></script>
 <script type="text/javascript" src="javascript/jquery.themepunch.revolution.min.js"></script>
 <script type="text/javascript" src="javascript/slider.js"></script>
 <script src="javascript/gsap.min.js"></script>


</body>
</html>
