<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('Assests/css/custom.css') }}">
    <title>Home-Tekna Power</title>
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
            <a href="homepage.html">Home</a>/Read More/<a href="#">Return to Previous Page</a>
        </div>--}}
        <div class="container bg-white mt-4">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12 col-12">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12 col-12 text-center">
                            <img class="main-img" src="{{ asset("{$product[0]->img}") }}">
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-12 col-xs-12 col-12">
                    <h3>{{$product[0]->name}}</h3>
                    <h5 class="p-0 Description">Description</h5>
                    <p class="readmorepara">{{$product[0]->description}}
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 col-12">
                    <h4 class="relatedproducts">Related Products</h4>
                </div>

                @foreach($relatedproducts as $relatedproducts)
                <div class="col-md-3 col-sm-6 col-xs-6 col-6">
                    <div class="card for_more_details">
                        <div class="card-body">
                            <img class="card-img" src="{{ asset("{$relatedproducts->img}")}}">
                            <h4 class=" card-text">{{$relatedproducts->name}}</h4>
                            <a href="{{ url('Product-Details/'.$relatedproducts->id) }}" class="btn">Read More</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>


    </div>
    <!--Footer-->
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