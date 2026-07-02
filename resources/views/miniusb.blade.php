<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('Assests/css/custom.css') }}">
    <title>Product-Himalaya Rock Salt</title>
    <link rel="icon" type="image/x-icon" href="Assests/logo/favicon.png">
</head>

<body>
    <div class="top-para">
        <div class="row">
            <div class="col-12 col-sm-12 col-xs-12 col-12">
            <marquee>Call now +92 319 TEKNAPK (319 8356275 ) Welcome to Himalaya Rock salt - manufactures and Exporters - Tekna Power</marquee>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-light p-0">
       
            @include("layouts.header")
       

        {{-- <div class="navdown">
            <a href="homepage.html">Home</a>/Therapeutic Salt Lamps/<a href="tealight.html">Return to Previous Page</a>
        </div>--}}
        <div class="row">
            <div class="col-xl-1 col-lg-1 col-md-1 col-sm-12 col-12"></div>
            <div class=" col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-3 col-3 p-0 ctg-list mt-4">
                <h3 class="ctg">CATEGORIES</h3>
                <div class="side-bar">
                    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion " id="accordionSidebar">

                       
                        <hr class="sidebar-divider my-0">



                      


                        <li class="nav-item ">
                            <a class="nav-link collapsed"  data-toggle=""
                                data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages"
                                style="padding-top: 0px; padding-bottom: 0px;">
                                <img src="img/assets/collectors.png" alt="">
                                <span class="color-black"> Therapeutic Salt Lamps</span>
                                <!-- <i class="fa fa-chevron-down down_icon"></i> -->
                            </a>

                            <div id="collapsePages" class="" data-toggle="collapse">
                                <ul>
                                    <li>
                                    <a class="nav-link collapsed" href="{{route('Naturallamps')}}" aria-expanded="true"
                                aria-controls="collapsePages" style="padding-top: 0px; padding-bottom: 0px;">
                                <img src="img/assets/collections.png" alt="">
                                <span class="color-black">Natural Lamps</span></a>

                                    </li>
                                </ul>
                            </div>
                            <div id="collapsePages" class="" data-toggle="collapse">
                                <ul>
                                    <li>
                                    <a class="nav-link collapsed" href="{{route('Customizedlamps')}}" aria-expanded="true"
                                aria-controls="collapsePages" style="padding-top: 0px; padding-bottom: 0px;">
                                <img src="img/assets/collections.png" alt="">
                                <span class="color-black">Customized Lamps</span></a>
                                    </li>
                                </ul>
                            </div>
                            <div id="collapsePages" class="" data-toggle="collapse">
                                <ul>
                                    <li>
                                    <a class="nav-link " href="{{route('miniusb')}}" aria-expanded="true"
                                aria-controls="collapsePages" style="padding-top: 0px; padding-bottom: 0px;">
                                <img src="img/assets/collections.png" alt="">
                                <span class="color-black">Mini USB Lamps</span></a>

                                    </li>
                                </ul>
                            </div>
                            <div id="collapsePages" class="" data-toggle="collapse">
                                <ul>
                                    <li>
                                    <a class="nav-link collapsed" href="{{route('superheavylamps')}}" aria-expanded="true"
                                aria-controls="collapsePages" style="padding-top: 0px; padding-bottom: 0px;">
                                <img src="img/assets/collections.png" alt="">
                                <span class="color-black">Super Heavy Lamps</span></a>

                                    </li>
                                </ul>
                            </div>

                        </li>


                        <li class="nav-item">
                        <a class="nav-link" href="{{route('tablesalt')}}"
                                style="padding-top: 0px; padding-bottom: 0px;">
                                <img src="img/assets/collections.png" alt="">
                                <span class="color-black">Food Grade & Other Salts</span></a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{route('tealight')}}"
                                style="padding-top: 0px; padding-bottom: 0px;">
                                <img src="img/assets/collections.png" alt="">
                                <span class="color-black">Tea Lights Photophore</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('saltroom')}}"
                                style="padding-top: 0px; padding-bottom: 0px;">
                                <img src="img/assets/collections.png" alt="">
                                <span class="color-black">Salt Room Caves Sauna</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('kitchencook')}}"
                                style="padding-top: 0px; padding-bottom: 0px;">
                                <img src="img/assets/collections.png" alt="">
                                <span class="color-black">Kitchen and Cookware</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('spabath')}}"
                                style="padding-top: 0px; padding-bottom: 0px;">
                                <img src="img/assets/collections.png" alt="">
                                <span class="color-black">Spa and Bath Products</span></a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{route('bodywear')}}"
                                style="padding-top: 0px; padding-bottom: 0px;">
                                <img src="img/assets/collections.png" alt="">
                                <span class="color-black">Body Wear</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('Healthcare')}}"
                                style="padding-top: 0px; padding-bottom: 0px;">
                                <img src="img/assets/collections.png" alt="">
                                <span class="color-black">Salt Health Care</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('animallicks')}}"
                                style="padding-top: 0px; padding-bottom: 0px;">
                                <img src="img/assets/collections.png" alt="">
                                <span class="color-black">Animal Licks Compressed Salt</span></a>
                        </li>

                     
                        <hr class="sidebar-divider d-none d-md-block">
    
                        <div class="text-center d-none d-md-inline">
                            <button class="rounded-circle border-0" id="sidebarToggle"></button>
                        </div>

                    </ul>
                </div>
                <!-- <h3 class="ctg">CATEGORIES</h3>
                <div class="side-bar">
                    <ol>
                        @foreach($categories as $category)
                        <li><a href="{{ url('Category-Details/'.$category->id) }}">{{$category->name}}</a></li>
                        @endforeach
                    </ol>
                </div> -->
            </div>
            <div class="col-xl-7 col-lg-7 col-md-10 col-sm-12 col-xs-12 col-12 mt-4">
                <div class="main-box">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                            <img class="d-block w-100" src="{{ asset("Assests/miniusb/u_6.jpg")}}"
                                    alt="Second slide" id="d-block">
                               
                            </div>
                            <div class="carousel-item">
                            <img class="d-block w-100" src="{{ asset("Assests/Home/mini_slider.jpg")}}"
                                    alt="First slide" id="d-block">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                            data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                            data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>

                    <!-- <div class="row pt-2">
                        <div class="col-md-12 col-sm-12 col-xs-12 col-12 text-center">
                            <h3></h3>
                        </div>
                    </div> -->
                    <!--dropdown-->

                    <div class="row pt-2">


                        <div class="col-sm-6 col-xs-6 col-6 mt-3">
                            <div class="catergories_mobile">

                                <div class="dropdown">
                                    <button class="btn btn-primary dropdown_category dropdown-toggle" type="button"
                                        id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
                                        Select Categories
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <!-- Add your navigation links here -->
                                        <li><a class="dropdown-item" href="{{ route('therapeutic') }}">Therapeutic Salt
                                                Lamps</a></li>
                                        <li><a class="dropdown-item" href="{{route('Naturallamps')}}">Natural Lamps</a>
                                        </li>
                                        <li><a class="dropdown-item" href="{{route('Customizedlamps')}}">Customized
                                                Lamps</a></li>
                                        <li><a class="dropdown-item" href="{{route('miniusb')}}">Mini USB Lamps</a></li>
                                        <li><a class="dropdown-item" href="{{route('superheavylamps')}}">Super Heavy
                                                Lamps</a></li>
                                        <li><a class="dropdown-item" href="{{route('saltroom')}}">Salt Room Caves
                                                Sauna</a></li>
                                        <li><a class="dropdown-item" href="{{ route('tablesalt') }}">Food Grade & Other Salts</a></li>
                                        <li><a class="dropdown-item" href="{{ route('tealight') }}">Tea Lights
                                                Photophore</a></li>
                                        <li><a class="dropdown-item" href="{{ route('kitchencook') }}">Kitchen and Cookware
                                                </a></li>
                                        <li><a class="dropdown-item" href="{{ route('spabath') }}">Spa and Bath
                                                Products</a></li>
                                        <li><a class="dropdown-item" href="{{ route('bodywear') }}">Body Wear</a></li>
                                        <li><a class="dropdown-item" href="{{ route('Healthcare') }}">Salt Health
                                                Care</a></li>
                                        <li><a class="dropdown-item" href="{{ route('animallicks') }}">Animal Licks</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-6 col-6 mob_margin text-right">
                            <a href="{{route('description',[  'id' => '1' ])}}">
                                <button class="btn btn-primary description_btn">Show Description</button>
                            </a>
                        </div>
                    </div>





                    <!--endof dropdown-->
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-xs-6 col-6">
                            <div class="card ">
                                <div class="card-body">
                                    <img class="card-img" src="{{asset('Assests/miniusb/u_1.png') }}">
                                    <h4 class="card-text">Mini USB-1</h4>
                                    <!-- <a href="{{route('Product-Details',[ 'id' => 89 ])}}" class="btn for_more">Read
                                        More</a> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-xs-6 col-6">
                            <div class="card ">
                                <div class="card-body">
                                    <img class="card-img" src="{{asset('Assests/miniusb/u_2.jpg') }}">
                                    <h4 class="card-text">Mini USB-2</h4>
                                    <!-- <a href="{{route('Product-Details',[ 'id' => 88])}}" class="btn for_more">Read
                                        More</a> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-xs-6 col-6">
                            <div class="card ">
                                <div class="card-body">
                                    <img class="card-img" src="{{asset('Assests/miniusb/u_3.jpg') }}">
                                    <h4 class="card-text">Mini USB-3</h4>
                                    <!-- <a href="{{route('Product-Details',[ 'id' => 87])}}" class="btn for_more">Read
                                        More</a> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-xs-6 col-6">
                            <div class="card ">
                                <div class="card-body">
                                    <img class="card-img" src="{{asset('Assests/miniusb/u_4.jpg') }}">
                                    <h4 class="card-text">Mini USB-4</h4>
                                    <!-- <a href="{{route('Product-Details',[ 'id' => 86])}}" class="btn for_more">Read
                                        More</a> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-xs-6 col-6">
                            <div class="card ">
                                <div class="card-body">
                                    <img class="card-img" src="{{asset('Assests/miniusb/u_5.jpg') }}">
                                    <h4 class="card-text">Mini USB-5</h4>
                                    <!-- <a href="{{route('Product-Details',[ 'id' => 85])}}" class="btn for_more">Read
                                        More</a> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-xs-6 col-6">
                            <div class="card ">
                                <div class="card-body">
                                    <img class="card-img" src="{{asset('Assests/miniusb/nightlamp.jpg') }}">
                                    <h4 class="card-text">NIGHT LAMP</h4>
                                    <!-- <a href="{{route('Product-Details',[ 'id' => 85])}}" class="btn for_more">Read
                                        More</a> -->
                                </div>
                            </div>
                        </div>



                    </div>


                    <!-- <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item active"><a class="page-link" href="products1.html">1</a></li>
                            <li class="page-item"><a class="page-link" href="products2.html">2</a></li>
                            <li class="page-item"><a class="page-link" href="products3.html">3</a></li>
                        </ul>
                    </nav> -->
                </div>
            </div>
            <div class=" col-xl-1 col-lg-1 col-md-1 col-sm-12 col-12"></div>

            <!-- <footer>
            <div class="row">
                <div class="col-md-2 col-sm-12 col-xs-12 col-12 "></div>
                <div class="col-md-10 col-sm-12 col-xs-12 col-12 ">
                    <div>
                        <p><i class="fa fa-home"></i> #5, Safari Palace Avenue, Safari Villas 1, Bahria Town, Islamabad,
                            Pakistan
                        </p>
                        <p><i class="fa fa-phone"></i> +92 332 8569337, +92 321 5169077</p>
                        <p><i class="fa fa-envelope"></i> info@teknapk.com, teknapk@icloud.com, bilal@teknapk.com</p>
                        <p><i class="fa fa-globe"></i> http://himalayarocksalt.net/, https://teknapk.com/</p>
                    </div>
                </div>
            </div>
        </footer> -->
            @include("layouts.footer")
        </div>

        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
        </script>

</body>



<script>
// Get the elements with class="card"
var elements = document.getElementsByClassName("card");

// Declare a loop variable
var i;

// Function to update the view based on screen width
function gridView() {
    var screenWidth = window.innerWidth;

    for (i = 0; i < elements.length; i++) {
        if (screenWidth <= 768) {
            elements[i].style.width = "45%";
        } else {
            elements[i].style.width = "45%";
        }
    }
}

// Initial view update
updateView();

// Listen for window resize events to update the view
window.addEventListener("resize", updateView);

// List View
function listView() {
    for (i = 0; i < elements.length; i++) {
        elements[i].style.width = "100%";
    }
}

// Grid View
function gridView() {
    for (i = 0; i < elements.length; i++) {
        elements[i].style.width = "90%";
    }
}

/* Optional: Add active class to the current button (highlight it) */
var container = document.getElementById("btnContainer");
var btns = container.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function() {
        var current = document.getElementsByClassName("active");
        current[0].className = current[0].className.replace(" active", "");
        this.className += " active";
    });
}
</script>



</html>