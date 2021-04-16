<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="generator" content="">
    <link href="{{asset('template-user/css/bootstrap.min.css')}} " rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{asset('template-user/css/style.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:200,300,400,500,600,700" rel="stylesheet">
    <style>
        .ribbon {
            width: 120px;
            height: 120px;
            overflow: hidden;
            position: absolute;
        }

        .ribbon::before,
        .ribbon::after {
            position: absolute;
            z-index: -1;
            content: '';
            display: block;
            border: 5px solid #2980b9;
        }

        .ribbon span {
            position: absolute;
            display: block;
            width: 225px;
            padding: 15px 0 15px 20px;
            background-color: #3498db;
            box-shadow: 0 5px 10px rgba(0, 0, 0, .1);
            color: #fff;
            font: 700 18px/1 'Lato', sans-serif;
            text-shadow: 0 1px 1px rgba(0, 0, 0, .2);
            text-transform: uppercase;
            text-align: center;
        }

        /* top left*/
        .ribbon-top-left {
            top: -10px;
            left: 5px;
        }

        .ribbon-top-left::before,
        .ribbon-top-left::after {
            border-top-color: transparent;
            border-left-color: transparent;
        }

        .ribbon-top-left::before {
            top: 0;
            right: 0;
        }

        .ribbon-top-left::after {
            bottom: 0;
            left: 0;
        }

        .ribbon-top-left span {
            right: -25px;
            top: 30px;
            transform: rotate(-45deg);
        }
    </style>
    <title>Toko Handhphone</title>
</head>

<body>


    <!-- HEADER =============================-->
    <header class="item header margin-top-0">
        <div class="wrapper">
            <nav role="navigation" class="navbar navbar-white navbar-embossed navbar-lg navbar-fixed-top">
                <div class="container">
                    <div class="navbar-header">
                        <button data-target="#navbar-collapse-02" data-toggle="collapse" class="navbar-toggle"
                            type="button">
                            <i class="fa fa-bars"></i>
                            <span class="sr-only">Toggle navigation</span>
                        </button>
                        <a href="index.html" class="navbar-brand brand"> TOKO HANDHPHONE </a>
                    </div>
                    <div id="navbar-collapse-02" class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="propClone"><a href="index.html">Home</a></li>
                            <li class="propClone"><a href="shop.html">Shop</a></li>
                            <li class="propClone"><a href="product.html">Product</a></li>
                            <li class="propClone"><a href="checkout.html">Checkout</a></li>
                            <li class="propClone"><a href="contact.html">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="text-homeimage">
                            <div class="maintext-image" data-scrollreveal="enter top over 1.5s after 0.1s">
                                Toko Handphone
                            </div>
                            <div class="subtext-image" data-scrollreveal="enter bottom over 1.7s after 0.3s">
                                Tempat Beli Hanphone Terbaik
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <!-- STEPS =============================-->
    <div class="item content">
        <div class="container toparea">
            <div class="row text-center">
                <div class="col-md-4">
                    <div class="col editContent">
                        <span class="numberstep"><i class="fa fa-shopping-cart"></i></span>
                        <h3 class="numbertext">Produk Terbaru</h3>
                        <p>
                            Kami menawarkan produk-produk terbaik, berkualitas,terbaru dan langsung dari pabrik yang ada
                            hanya untuk anda.
                        </p>
                    </div>
                    <!-- /.col-md-4 -->
                </div>
                <!-- /.col-md-4 col -->
                <div class="col-md-4 editContent">
                    <div class="col">
                        <span class="numberstep"><i class="fa fa-gift"></i></span>
                        <h3 class="numbertext">Diskon</h3>
                        <p>
                            Kami sering mengadakan diskon besar-besaran, jadi tunggu apa lagi?
                        </p>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.col-md-4 col -->
                <div class="col-md-4 editContent">
                    <div class="col">
                        <span class="numberstep"><i class="fa fa-star"></i></span>
                        <h3 class="numbertext">Feed Back Pengguna</h3>
                        <p>
                            Kami selalu mengutamakan pelanggan. Seperti pepataah mengatakan pembeli adalah raja
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- LATEST ITEMS =============================-->
    <section class="item content">
        <div class="container">
            <div class="underlined-title">
                <div class="editContent">
                    <h1 class="text-center latestitems">PRODUK TERBARU</h1>
                </div>
                <div class="wow-hr type_short">
                    <span class="wow-hr-h">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </span>
                </div>
            </div>
            <div class="row">
                @foreach ($products as $product)
                <div class="col-md-4">
                    <div class="card">

                        <div class="productbox">
                            <div class="fadeshop">
                                <div class="captionshop text-center" style="display: none;">
                                    <h3>{{$product->product_name}}</h3>
                                    <p class="">
                                        {{Str::limit($product->description, 80, $end='...')}}
                                    </p>
                                    <p>
                                        <a href="#" class="learn-more detailslearn"><i class="fa fa-shopping-cart"></i>
                                            Purchase</a>
                                        <a href="/user/detail/{{$product->id}}" class="learn-more detailslearn"><i class="fa fa-link"></i>
                                            Detail</a>
                                    </p>
                                </div>
                                @foreach ($product->RelasiProductImage as $gambar)
                                {{-- Melakukan Kondisi dimana hanya menampilkan 1 gambar saja dari product --}}
                                @if ($loop->iteration == 1)
                                <center><span class="maxproduct"><img src="../img/{{$gambar->image_name}}" alt=""
                                            width="200" height="200"></span></center>
                                @endif

                                @endforeach
                            </div>
                            <div class="product-details">
                                <h1>{{$product->product_name}}</h1>
                                </a>
                                <span class="price">
                                    <span class="edd_price">Rp.{{number_format($product->price)}}</span>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="ribbon ribbon-top-left">
                        <span>NEW</span>
                    </div>
                </div>

                @endforeach

            </div>
        </div>
        </div>
    </section>


    <!-- BUTTON =============================-->
    <div class="item content">
        <div class="container text-center">
            <a href="/user/show" class="homebrowseitems">Liat Semua Produk
                <div class="homebrowseitemsicon">
                    <i class="fa fa-star fa-spin"></i>
                </div>
            </a>
        </div>
    </div>
    <br />



    <!-- FOOTER =============================-->
    <div class="footer text-center">
        <div class="container">
            <div class="row">
                <p class="footernote">
                    Link Project Git Hub
                </p>
                <ul class="social-iconsfooter">
                    <li><a href="https://github.com/Leo-gunadarma/Pratikum-Pemrograman-Internet"><i
                                class="fa fa-github"></i></a></li>
                </ul>
                <p>
                    &copy; 2021 Kelompok 6<br />
                </p>
            </div>
        </div>
    </div>

    <!-- SCRIPTS =============================-->
    <script src="{{asset('template-user/js/jquery-.js')}}"></script>
    <script src="{{asset('template-user/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('template-user/js/anim.js')}}"></script>
    <script>
        //----HOVER CAPTION---//	  
        jQuery(document).ready(function ($) {
            $('.fadeshop').hover(
                function () {
                    $(this).find('.captionshop').fadeIn(150);
                },
                function () {
                    $(this).find('.captionshop').fadeOut(150);
                }
            );
        });

    </script>

</body>

</html>
