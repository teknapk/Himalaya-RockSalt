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
                <marquee>Call now +92 319 TEKNAPK (319 8356275 ) Welcome to Himalaya Rock salt - manufactures and
                    Exporters - Tekna Power</marquee>
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
                        <div class="cat_heading">
                            <h3>{{$categories->name}}</h3>

                        </div>
                        <?php 
                        if($categories->description == null){
                            ?>
                        <div class="cat_des">
                            <!-- Edible Salt -->
    <h2>Edible Salt:</h2>
    <p>
      Pink, Dark Pink, and Black varieties with various grain sizes.
    </p>
    <p><strong>Uses:</strong> Can be used for cooking, seasoning, and enhancing the flavor of dishes.</p>
    <p><strong>Mineral Content:</strong> Himalayan Edible Salt contains a higher mineral content compared to Sea Salt. It is rich in essential minerals like calcium, magnesium, potassium, and iron, which are beneficial for overall health and well-being.</p>
    <p><strong>Purity:</strong> Himalayan Edible Salt is known for its purity. It is sourced from ancient salt deposits deep within the Himalayan mountains, away from pollution and contaminants. Sea Salt, on the other hand, may contain impurities and pollutants from the ocean.</p>
    <p><strong>Unique Flavor:</strong> Himalayan Edible Salt has a distinct flavor profile. It is often described as having a milder and less harsh taste compared to Sea Salt. This makes it a versatile option for seasoning and enhancing the flavors of various dishes.</p>
    <p><strong>Natural and Unprocessed:</strong> Himalayan Edible Salt is typically minimally processed and undergoes little to no refining. It is hand-mined and retains its natural mineral composition. Sea Salt, on the other hand, may undergo more processing and refining, which can strip away some of its natural minerals.</p>
    <p><strong>Health Benefits:</strong> Due to its mineral-rich nature, Himalayan Edible Salt offers potential health benefits. The minerals present in the salt are essential for maintaining proper hydration, electrolyte balance, and nerve function. They also support bone health and muscle function.</p>
    <p><strong>Aesthetic Appeal:</strong> Himalayan Edible Salt's distinctive pink color adds an aesthetic appeal to dishes and presentations. It can be used as a decorative element in food preparation, making it visually appealing.</p>
    <p>
      While both Himalayan Edible Salt and Sea Salt can be used for culinary purposes, Himalayan Edible Salt stands out with its unique mineral content, purity, flavor, and potential health benefits.
    </p>

                        </div>
                        <?php
                        }else{
                            ?>
                        <div class="cat_des">
                            <p>{{$categories->description}}
                            </p>
                        </div>
                        <?php
                        }
                        
                        ?>

                        <div class="cat_des">
                            <p>{{$categories->description}}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class=" text-center">

                        </div>
                    </div>
                </div>


            </div>

            <div class="row">

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