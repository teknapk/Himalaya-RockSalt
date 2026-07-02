<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="Assests/css/custom.css">
    <title>Contact-Himalaya Rock Salt</title>
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
        
        {{--<div class="navdown">
            <a href="homepage.html">Home</a>/Contact us/<a href="blog.html">Return to Previous Page</a>
        </div>--}}
        <div class="container bg-white contactbox pb-4">
            <div class="row">
                <div class="col-md-7">
                    <h3 class="contacthead pt-4">CONTACT US</h3>
                    <p><i class="fa fa-home pr-2"></i> Plot # 87,  St-S3,  RCCI Industrial Estate, Rawat, ICT Islamabad.</p>
                    <p><i class="fa fa-phone pr-2"></i> + 92 319 TEKNAPK, +92 300 8569337, +92 332 8569337,  +92 321 5169077</p>
                    <p><i class="fa fa-envelope pr-2"></i> info@teknapk.com, teknapk@icloud.com, bilal@teknapk.com</p>
                    <p><i class="fa fa-globe pr-2"></i> http://himalayarocksalt.net/, https://teknapk.com/</p>
                    <div class="sm-icons">
                        <a href="https://www.facebook.com/HimalayaRockSalt/"><i class="fa fa-facebook-square text-secondary pt-4"></i></a>
                        <a href=""><i class="fa fa-whatsapp text-secondary "></i></a>
                        <a href="http://twitter.com/teknapk"><i class="fa fa-twitter-square text-secondary"></i></a>
                        <!-- <a href="#"><i class="fa fa-google text-secondary"></i></a> -->
                        <a href=" https://instagram.com/himalayanpinksaltcrystal?igshid=OGQ5ZDc2ODk2ZA=="><i class="fa fa-instagram text-secondary"></i></a>
                        <a href="https://www.linkedin.com/in/teknapk"><i class="fa fa-linkedin text-secondary"></i></a>
                        <a href="https://teknapk.com/"><i class="fa fa-globe text-secondary" aria-hidden="true"></i></a>
                        <!-- <a href="#"><i class="fa fa-pinterest text-secondary"></i></a> -->
                        <!-- <a href="#"><i class="fa fa-youtube text-secondary"></i></a> -->
                        <!-- <a href="#"><i class="fa fa-whatsapp text-secondary"></i></a> -->
                    </div>

                </div>
                <div class="col-md-5">
                @if(session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                @endif
                    <form action="{{route('send-mail')}}" method="post">
                        @csrf
                        <h3 class="feedback pt-4">SEND US FEEDBACK</h3>
                        <div class="form-group">
                            <label>ENTER YOUR NAME</label>
                            <input type="NAME" name="name" class="form-control" id="exampleInputName1">
                        </div>
                        <div class="form-group">
                            <label>ENTER YOUR EMAIL</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                                else.</small>

                        </div>
                        <div class="form-group">
                            <label for="exampleInputMessage">ENTER YOUR MESSAGE</label>
                            <input type="text" name="message" class="form-control" id="exampleInputMessage1">
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox"  class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        <button type="submit" class="btn btn-primary for_contact_btn" style="color:black;">Submit</button>
                    </form>
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