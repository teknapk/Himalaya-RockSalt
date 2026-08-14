<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('Assests/css/custom.css') }}">
    <title>Home - Himalaya Rock Salt</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('Assests/logo/favicon.png') }}">
</head>

<body>

    <div class="top-para">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 col-12">
                <marquee>Call now +92 319 TEKNAPK (319 8356275 ) Welcome to Himalaya Rock salt - manufactures and Exporters - Tekna Power</marquee>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-light p-0">
        @include("layouts.header")

        <div id="carouselExampleIndicators" class="carousel slide carousel-fade for_minwidth" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('Assests/Home/slider1.jpg') }}" class="d-block w-100" alt="Slider 1">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('Assests/Home/slider2.jpg') }}" class="d-block w-100" alt="Slider 2">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('Assests/Home/slider3.jpg') }}" class="d-block w-100" alt="Slider 3">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('Assests/Home/slider4.jpg') }}" class="d-block w-100" alt="Slider 4">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('Assests/Home/slider5.jpg') }}" class="d-block w-100" alt="Slider 5">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('Assests/Home/slider6.jpg') }}" class="d-block w-100" alt="Slider 6">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('Assests/Home/slider7.jpg') }}" class="d-block w-100" alt="Slider 7">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('Assests/Home/slider8.jpg') }}" class="d-block w-100" alt="Slider 8">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </button>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 col-12">
                    <h2>Product Categories</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-md-1 col-sm-12 col-12"></div>
                <div class="col-md-10 col-sm-12 col-xs-12 col-12">
                    <div class="row bg-light ctg-row pt-2">
                        <div class="col-md-4 col-sm-6 col-6 last-ctg">
                            @foreach($categories as $k=>$result)
                                @if($k>2) @break @else
                                <ol class="ctg-li">
                                    <li><a href="{{ url('Category-Details/'.$result->id) }}">{{$result->name}}</a></li>
                                </ol>
                                @endif
                            @endforeach
                        </div>
                        <div class="col-md-4 col-sm-6 col-6 last-ctg">
                            @foreach($categories as $k=>$result)
                                @if($k < 3) @continue @else
                                <ol class="ctg-li">
                                    <li><a href="{{ url('Category-Details/'.$result->id) }}">{{$result->name}}</a></li>
                                </ol>
                                    @if($k > 4) @break @endif
                                @endif
                            @endforeach
                        </div>
                        <div class="col-md-4 col-sm-6 col-6 last-ctg-bottom">
                            @foreach($categories as $k=>$result)
                                @if($k < 6) @continue @else
                                <ol class="ctg-li">
                                    <li><a href="{{ url('Category-Details/'.$result->id) }}">{{$result->name}}</a></li>
                                </ol>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-md-1 col-sm-12 col-12"></div>
            </div>
        </div>

        <!-- Blog Section -->
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 col-12">
                    <h2 class="heading-mid">Latest From the Blog</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-2 col-lg-2"></div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-6 col-6 text-center">
                    <div class="front_blog">
                        <a href="{{ url('/blog') }}">
                            <img class="for_blog_img center" src="{{ asset('Assests/readmore/1.png') }}" alt="Blog 1">
                            <p>Salt Uses and Benefits</p>
                        </a>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-6 col-6 text-center">
                    <div class="front_blog">
                        <a href="{{ url('/blog') }}">
                            <img class="for_blog_img center" src="{{ asset('Assests/readmore/2.png') }}" alt="Blog 2">
                            <p>Some Common Uses and Benefits</p>
                        </a>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2"></div>
            </div>
        </div>

        <!-- Testimonials -->
        <div class="container testimonial mt-4">
            <div class="row d-flex">
                <div class="col-md-12 d-flex">
                    <h2>Clients Testimonials</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12 col-12">
                    <div class="tour-item mt-4">
                        <div class="tour-desc bg-white">
                            <div class="tour-text color-grey-3 text-center">
                                <p>&ldquo;Received the Himalaya Rock Salt Wellbeing pendant.... an excellent product! Highly recommended.&rdquo;</p>
                            </div>
                            <div class="link-name d-flex justify-content-center">Rabia</div>
                            <div class="d-flex justify-content-center"><img class="tm-people imge" src="{{ asset('Assests/clients/3.png') }}" alt="Rabia"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12 col-12">
                    <div class="tour-item mt-4">
                        <div class="tour-desc bg-white">
                            <div class="tour-text color-grey-3 text-center">
                                <p>&ldquo;We are importing to US, California. Good service, knowledgeable people, reliable company. They have a whole variety of good quality products. Our import(shipment) went good with absolutely no problems. Packaging was also great.&rdquo;</p>
                            </div>
                            <div class="link-name d-flex justify-content-center">OC Salt Therapy USA</div>
                            <div class="d-flex justify-content-center"><img class="tm-people imge" src="{{ asset('Assests/clients/1.png') }}" alt="OC Salt Therapy"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12 col-12">
                    <div class="tour-item mt-4">
                        <div class="tour-desc bg-white">
                            <div class="tour-text color-grey-3 text-center">&ldquo;We had no problems in receiving the products. We checked the products and they're perfect. We're very happy and would like to thank you for your attention.&rdquo;</div>
                            <div class="link-name d-flex justify-content-center">Kemal Demirel</div>
                            <div class="d-flex justify-content-center"><img class="tm-people imge" src="{{ asset('Assests/clients/2.png') }}" alt="Kemal Demirel"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12 col-12">
                    <div class="tour-item mt-4">
                        <div class="tour-desc bg-white">
                            <div class="tour-text color-grey-3 text-center">&ldquo;The container arrived and is unloaded, and they’re already using coarse grain in production and the comments are, “it’s beautiful, it’s so clean, so easy to use...”So i thank you very much. Also for the beautiful lamp, I really like it. Much appreciated. &rdquo;</div>
                            <div class="link-name d-flex justify-content-center">Melissa</div>
                            <div class="d-flex justify-content-center"><img class="tm-people imge" src="{{ asset('Assests/clients/3.png') }}" alt="Melissa"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12 col-12">
                    <div class="tour-item mt-4">
                        <div class="tour-desc bg-white">
                            <div class="tour-text color-grey-3 text-center">&ldquo;Diverse selection of beautifully crafted Himalaya Rock Salt Products, Himalaya Rock Salt Interiors, Himalaya Rock Salt Room etc. &rdquo;</div>
                            <div class="link-name d-flex justify-content-center">Bilal Hussain</div>
                            <div class="d-flex justify-content-center"><b>BF Technologies</b></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12 col-12">
                    <div class="tour-item mt-4">
                        <div class="tour-desc bg-white">
                            <div class="tour-text color-grey-3 text-center">
                                <p>&ldquo;You cannot imagine how much you are helping me. Your service with clients is excellent and I highly appreciate it. I thank you so much for your effort. &rdquo;</p>
                            </div>
                            <div class="link-name d-flex justify-content-center">Carlos</div>
                            <div class="d-flex justify-content-center"><b>Carlos Arbelaez</b></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Achievements -->
        <div class="container Acheivements mt-4">
            <div class="row d-flex justify-content-center">
                <div class="col-md-12 pt-4 d-flex"></div>
                <div class="col-md-12 d-flex">
                    <h2>Achievements</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="winning">
                        <span class="winning_span">Winners of 2023 Global Business Award</span>
                        <p class="winning_p">"BEST HIMALAYAN SALT PRODUCTS MANUFACTURER – 2023 PAKISTAN"</p>
                    </div>
                    <div class="winning">
                        <span class="winning_span">Winners of 2022 Global Business Award</span>
                        <p class="winning_p">"MOST RELIABLE SALT PRODUCTS EXPORTER OF THE YEAR"</p>
                    </div>
                    <div class="winning_awards">
                        <span class="winning_span">Winners of 2022-23 Corporate Live Wire Business Award</span>
                        <p class="winning_p">"HOME DECOR BRAND OF THE YEAR 2022-23"</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="certi_img1">
                    <img src="{{ asset('Assests/About_us/Picture5.png') }}" alt="Certificate" class="for_about_img2">
                </div>
            </div>
        </div>

        @include("layouts.footer")
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>

</body>

</html>
