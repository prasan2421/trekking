@extends('layouts.main')

@section('title')
    index

    @stop
@section('body')
    <div id="carouselHacked" class="carousel slide carousel-fade" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="item active moving"> <img class="first-slide " src="{{URL::asset('/images/img-01.jpg')}}"  alt="First slide">
                <div class="container">
                    <div class="carousel-caption">
                        <h3 class="animated bounceInLeft">EXPEDITION OF UNEXPLORED</h3>
                        <h3>TERRITORY</h3>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">VIEW ITEM </a></p>
                    </div>
                </div>
            </div>
            <div class="item moving"> <img class="second-slide" src="{{URL::asset('/images/img-02-1.jpg')}}" alt="Second slide">
                <div class="container">
                    <div class="carousel-caption">
                        <h3 class="animated jello">ADVENTURE TOURS THEME</h3>
                        <h3>OF 2017</h3>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">VIEW ITEM</a></p>
                    </div>
                </div>
            </div>
        </div>
        <a class="left carousel-control" href="#carouselHacked" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#carouselHacked" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right animated infinite wobble" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
        <!-- /.carousel -->
        <!--bottom nav-->
        <div class="bottom-nav">
            <div class="bg-brown container-fluid">
                <div class="bottom-nev-wrapper row">
                    <ul>
                        <li>
                            <div class="box-inside-nav">
                                <center>
                                    <img src="{{URL::asset('/images/81057-200.png')}}"><br/>

                                    <span class="text-icon">ACCESORIES</span>
                                </center>
                            </div>
                        </li>
                        <li>
                            <div class="box-inside-nav">
                                <center>
                                    <img src="{{URL::asset('/images/City_icon_(Noun_Project).svg.png')}}"><br/>

                                    <span class="text-icon">BAGS</span>
                                </center>
                            </div>
                        </li>
                        <li>
                            <div class="box-inside-nav">
                                <center>
                                    <img src="{{URL::asset('/images/61698-200.png')}}"><br/>

                                    <span class="text-icon">ELECTRONICS</span>
                                </center>
                            </div>
                        </li>
                        <li>
                            <div class="box-inside-nav">
                                <center>
                                    <img src="{{URL::asset('/images/jump.png')}}"><br/>

                                    <span class="text-icon">CLOTHS</span>
                                </center>
                            </div>
                        </li>
                        <li>
                            <div class="box-inside-nav">
                                <center>
                                    <img src="{{URL::asset('/images/download copy.png')}}"><br/>

                                    <span class="text-icon">INTERIOR</span>
                                </center>
                            </div>
                        </li>
                        <li>
                            <div class="box-inside-nav">
                                <center>
                                    <img src="{{URL::asset('/images/rafting-hi copy.png')}}"><br/>

                                    <span class="text-icon">KITCHEN</span>
                                </center>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--end bottom nav-->
    <!-- /.carousel -->
    <!--best sellers-->
    <div class="best-sellers">
        <div class="best-sellers padding-top-50px">
            <div class="container">
                <div class="row">
                    <center>
                        <h1>BEST SELLERS OF 2017</h1>
                        <h3><i>Our collection of the most popular products in 2017.</i></h3>
                    </center>
                    <hr>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12 mar-bottom-30px">
                        <div class="image-wrapper"><img src="{{URL::asset('/images/tour-38-550x358.jpg')}}" class="img-responsive"><a href="{{URL::asset('detail.html')}}" class="text-best-seller">
                                <h4>PRODUCT 1</h4>
                            </a><a href="">City Tours, </a><a href="">Urban</a><br>
                            <img src="{{URL::asset('/images/globe-01-512.png')}}"> 12 Countries <img src="{{URL::asset('/images/Icon_World_People-512.png')}}"> 1 Activity
                            <hr>
                            <div class="grid-info-text"><p>Son agreed others exeter period myself few yet nature. Mention mr manners opinion if garrets enabled. To an occasional dissimilar impossible sentiments.</p></div><br>
                            <div class="button"><a class="btn btn-lg btn-primary " href="{{URL::asset('/detail.html')}}" role="button">EXPLORE</a></div>            <hr>
                            <div class="social-media">
                                <p class="social-media-left"><b>£429</b></p>
                                <div class="social-media-right"><img src="{{URL::asset('images/facebook-letter-logo_318-40258.png')}}"><img src="{{URL::asset('/images/twitter-xxl.png')}}"><img src="{{URL::asset('/images/g+.png')}}"><img src="{{URL::asset('/images/152817.png')}}"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 mar-bottom-30px">
                        <div class="image-wrapper"><img src="{{URL::asset('/images/tour-37-550x358.jpg')}}" class="img-responsive"><a href="{{URL::asset('/detail.html')}}" class="text-best-seller">
                                <h4>PRODUCT 2</h4>
                            </a><a href="">City Tours, </a><a href="">Urban</a><br>
                            <img src="{{URL::asset('/images/globe-01-512.png')}}"> 12 Countries <img src="{{URL::asset('/images/Icon_World_People-512.png')}}"> 1 Activity
                            <hr>
                            <div class="grid-info-text"><p>Son agreed others exeter period myself few yet nature. Mention mr manners opinion if garrets enabled. To an occasional dissimilar impossible sentiments.</p></div><br>
                            <div class="button"><a class="btn btn-lg btn-primary " href="{{URL::asset('/detail.html')}}" role="button">EXPLORE</a></div>            <hr>
                            <div class="social-media">
                                <p class="social-media-left"><b>£429</b></p>
                                <div class="social-media-right"><img src="{{URL::asset('/images/facebook-letter-logo_318-40258.png')}}"><img src="{{URL::asset('/images/twitter-xxl.png')}}"><img src="{{URL::asset('/images/g+.png')}}"><img src="{{URL::asset('/images/152817.png')}}"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 mar-bottom-30px">
                        <div class="image-wrapper"><img src="{{URL::asset('/images/tour-36-550x358.jpg')}}" class="img-responsive"><a href="{{URL::asset('/detail.html')}}" class="text-best-seller">
                                <h4>Boating and Sailing Tours</h4>
                            </a><a href="">City Tours, </a><a href="">Urban</a><br>
                            <img src="{{URL::asset('/images/globe-01-512.png')}}"> 12 Countries <img src="{{URL::asset('/images/Icon_World_People-512.png')}}"> 1 Activity
                            <hr>
                            <div class="grid-info-text"><p> Son agreed others exeter period myself few yet nature. Mention mr manners opinion if garrets enabled. To an occasional dissimilar impossible sentiments.</p></div><br>
                            <div class="button"><a class="btn btn-lg btn-primary " href="{{URL::asset('/detail.html')}}" role="button">EXPLORE</a></div>            <hr>
                            <div class="social-media">
                                <p class="social-media-left"><b>£429</b></p>
                                <div class="social-media-right"><img src="{{URL::asset('/images/facebook-letter-logo_318-40258.png')}}"><img src="{{URL::asset('/images/twitter-xxl.png')}}"><img src="{{URL::asset('/images/g+.png')}}"><img src="{{URL::asset('/images/152817.png')}}"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 mar-bottom-30px">
                        <div class="image-wrapper"><img src="{{URL::asset('/images/tour-36-550x358 (1).jpg')}}" class="img-responsive"><a href="" class="text-best-seller">
                                <h4>Boating and Sailing Tours</h4>
                            </a><a href="">City Tours, </a><a href="">Urban</a><br>
                            <img src="{{URL::asset('/images/globe-01-512.png')}}"> 12 Countries <img src="{{URL::asset('/images/Icon_World_People-512.png')}}"> 1 Activity
                            <hr>
                            <div class="grid-info-text"><p>Son agreed others exeter period myself few yet nature. Mention mr manners opinion if garrets enabled. To an occasional dissimilar impossible sentiments.</p></div><br>
                            <div class="button"><a class="btn btn-lg btn-primary " href="#" role="button">EXPLORE</a></div>
                            <hr>
                            <div class="social-media">
                                <p class="social-media-left"><b>£429</b></p>
                                <div class="social-media-right"><img src="{{URL::asset('/images/facebook-letter-logo_318-40258.png')}}"><img src="{{URL::asset('/images/twitter-xxl.png')}}"><img src="{{URL::asset('/images/g+.png')}}"><img src="{{URL::asset('/images/152817.png')}}"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 mar-bottom-30px">
                        <div class="image-wrapper"><img src="{{URL::asset('/images/tour-24-min-550x358.jpg')}}" class="img-responsive"><a href="" class="text-best-seller">
                                <h4>Boating and Sailing Tours</h4>
                            </a><a href="">City Tours, </a><a href="">Urban</a><br>
                            <img src="{{URL::asset('/images/globe-01-512.png')}}"> 12 Countries <img src="{{URL::asset('/images/Icon_World_People-512.png')}}"> 1 Activity
                            <hr>
                            <div class="grid-info-text"><p>Son agreed others exeter period myself few yet nature. Mention mr manners opinion if garrets enabled. To an occasional dissimilar impossible sentiments.</p></div><br>
                            <div class="button"><a class="btn btn-lg btn-primary " href="#" role="button">EXPLORE</a></div>            <hr>
                            <div class="social-media">
                                <p class="social-media-left"><b>£429</b></p>
                                <div class="social-media-right"><img src="{{URL::asset('/images/facebook-letter-logo_318-40258.png')}}"><img src="{{URL::asset('/images/twitter-xxl.png')}}"><img src="{{URL::asset('/images/g+.png')}}"><img src="{{URL::asset('/images/152817.png')}}"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 mar-bottom-30px">
                        <div class="image-wrapper"><img src="{{URL::asset('/images/tour-13-min-550x358.jpg')}}" class="img-responsive"><a href="" class="text-best-seller">
                                <h4>Boating and Sailing Tours</h4>
                            </a><a href="">City Tours, </a><a href="">Urban</a><br>
                            <img src="{{URL::asset('/images/globe-01-512.png')}}"> 12 Countries <img src="{{URL::asset('/images/Icon_World_People-512.png')}}"> 1 Activity
                            <hr>
                            <div class="grid-info-text"><p>Son agreed others exeter period myself few yet nature. Mention mr manners opinion if garrets enabled. To an occasional dissimilar impossible sentiments.</p></div><br>
                            <div class="button"><a class="btn btn-lg btn-primary " href="#" role="button">EXPLORE</a></div>            <hr>
                            <div class="social-media">
                                <p class="social-media-left"><b>£429</b></p>
                                <div class="social-media-right"><img src="{{URL::asset('/images/facebook-letter-logo_318-40258.png')}}"><img src="{{URL::asset('/images/twitter-xxl.png')}}"><img src="{{URL::asset('/images/g+.png')}}"><img src="{{URL::asset('/images/152817.png')}}"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--special discount box-->
    <section>
        <div class="background-lightgray" >
            <div class="clearfix">
                <div class="background-darkgray">
                    <center>
                        <h1>Get special discount on select treks, this week. Call +1 5775 7525</h1>
                    </center>
                </div>
            </div>
        </div>
    </section>
    <!--end special discount box-->
    <!--special tours-->
    <section class="popular-tours">
        <div class="padding-top-50px container">
            <center>
                <h2><b>POPULAR TOURS</b></h2>
                <h2><span class="light-color">We have a unique way of meeting your adventurous expectations!</span></h2>
                <hr>
            </center>
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12 demo-3">
                    <figure><img src="{{URL::asset('/images/tour-03-550x358.jpg')}}" class="img-responsive">
                        <figcaption>
                            <h2>
                                <center>
                                    Trip to White Castle
                                </center>
                            </h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nost.</p>
                            <a class="btn btn-lg btn-primary mar-top-30px" href="#" role="button">VISIT PAGE</a> </figcaption>
                    </figure>
                    <div class="caption-below">
                        <h3>Trip to White Castle</h3>
                        <p>Son agreed others exeter period myself few yet nature. Mention mr manners opinion if garrets enabled. To an occasional dissimilar impossible sentiments.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 demo-3">
                    <figure><img src="{{URL::asset('/images/tour-13-min-550x358.jpg')}}" class="img-responsive">
                        <figcaption>
                            <h2>
                                <center>
                                    Discovery of Hidden Island
                                </center>
                            </h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nost.</p>
                            <a class="btn btn-lg btn-primary mar-top-30px" href="#" role="button">VISIT PAGE</a> </figcaption>
                    </figure>
                    <div class="caption-below">
                        <h3>Trip to White Castle</h3>
                        <p>Son agreed others exeter period myself few yet nature. Mention mr manners opinion if garrets enabled. To an occasional dissimilar impossible sentiments.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 demo-3">
                    <figure><img src="{{URL::asset('/images/tour-24-min-550x358.jpg')}}" class="img-responsive">
                        <figcaption>
                            <h2>
                                <center>
                                    Hiking Trip to Mountain
                                </center>
                            </h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nost.</p>
                            <a class="btn btn-lg btn-primary mar-top-30px" href="#" role="button">VISIT PAGE</a> </figcaption>
                    </figure>
                    <div class="caption-below">
                        <h3>Trip to White Castle</h3>
                        <p>Son agreed others exeter period myself few yet nature. Mention mr manners opinion if garrets enabled. To an occasional dissimilar impossible sentiments.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 demo-3">
                    <figure><img src="{{URL::asset('/images/tour-36-550x358.jpg')}}" class="img-responsive">
                        <figcaption>
                            <h2>
                                <center>
                                    Its a Jungle Out There
                                </center>
                            </h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nost.</p>
                            <a class="btn btn-lg btn-primary mar-top-30px" href="#" role="button">VISIT PAGE</a> </figcaption>
                    </figure>
                    <div class="caption-below">
                        <h3>Trip to White Castle</h3>
                        <p>Son agreed others exeter period myself few yet nature. Mention mr manners opinion if garrets enabled. To an occasional dissimilar impossible sentiments.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 demo-3">
                    <figure><img src="{{URL::asset('/images/tour-38-550x358.jpg')}}" class="img-responsive">
                        <figcaption>
                            <h2>
                                <center>
                                    City Tours around Europe
                                </center>
                            </h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nost.</p>
                            <a class="btn btn-lg btn-primary mar-top-30px" href="#" role="button">VISIT PAGE</a> </figcaption>
                    </figure>
                    <div class="caption-below">
                        <h3>Trip to White Castle</h3>
                        <p>Son agreed others exeter period myself few yet nature. Mention mr manners opinion if garrets enabled. To an occasional dissimilar impossible sentiments.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 demo-3">
                    <figure><img src="{{URL::asset('/images/product-02-550x358.jpg')}}" class="img-responsive">
                        <figcaption>
                            <h2>
                                <center>
                                    This is a cool title!
                                </center>
                            </h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nost.</p>
                            <a class="btn btn-lg btn-primary mar-top-30px" href="#" role="button">VISIT PAGE</a> </figcaption>
                    </figure>
                    <div class="caption-below">
                        <h3>Trip to White Castle</h3>
                        <p>Son agreed others exeter period myself few yet nature. Mention mr manners opinion if garrets enabled. To an occasional dissimilar impossible sentiments.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--destination / adventure-->

    <section class="destination-adventure">
        <div class="container-fluid">
            <div class="row"> <a href="">
                    <div class="col-md-6 col-xs-12 bg-1">
                        <h2>BROWSE BY DESTINATION</h2>
                    </div>
                </a> <a href="">
                    <div class="col-md-6 col-xs-12 bg-3">
                        <h2>BROWSE BY ADVENTURE</h2>
                    </div>
                </a> </div>
        </div>
    </section>

    <!--end special tours-->

    <!-- guides-->
    <section class="guides mar-bottom-30px">
        <div class="container mar-top-50px">
            <center><h2><b>MEET THE Developers</b></h2>
                <h2><i>Our highly trained and efficient guides at your service</i></h2>
            </center><hr>
            <div class="row mar-top-30px">
                <div class="col-md-3 col-sm-6 col-xs-12 mar-bottom-30px"> <div class="hovereffect">
                        <img src="{{URL::asset('/images/guide-03-370x450.jpg')}}" class="img-responsive">
                        <div class="overlay">
                            <h3>SUJESH SHAHI</h3><h4>JAVA EXPERT</h4>
                            <p class="info">Our sleek quality work and  synergized effect of our team’s creative mind have paved the way for offering innovative services to our clients.</p>
                        </div>
                    </div></div>
                <div class="col-md-3 col-sm-6 col-xs-12 mar-bottom-30px"><div class="hovereffect">
                        <img src="{{URL::asset('/images/guide-02-370x450.jpg')}}" class="img-responsive">
                        <div class="overlay">
                            <h3>MANOJ BHANDARI</h3><h4>JAVA EXPERT</h4>
                            <p class="info">Our sleek quality work and  synergized effect of our team’s creative mind have paved the way for offering innovative services to our clients.</p>
                        </div>
                    </div></div>
                <div class="col-md-3 col-sm-6 col-xs-12 mar-bottom-30px"> <div class="hovereffect">
                        <img src="{{URL::asset('/images/guide-01-370x450.jpg')}}" class="img-responsive">
                        <div class="overlay">
                            <h3>SANTOSH BOHARA</h3><h4>I DONT KNOW</h4>
                            <p class="info">Our sleek quality work and  synergized effect of our team’s creative mind have paved the way for offering innovative services to our clients.</p>
                        </div>
                    </div></div>
                <div class="col-md-3 col-sm-6 col-xs-12 mar-bottom-30px"><div class="hovereffect">
                        <img src="{{URL::asset('/images/guide-02-370x450.jpg')}}" class="img-responsive">
                        <div class="overlay">
                            <h3>PRASANNA TULADHAR</h3><h4>FRONT-END DEVELOPER</h4>
                            <p class="info">Our sleek quality work and  synergized effect of our team’s creative mind have paved the way for offering innovative services to our clients.</p>
                        </div>
                    </div></div>
            </div>
        </div>
    </section>
    <section>
        <div class="container-fluid banner ">
            <div class="row">
                <div class="image-holder"></div>

                <div class="bottom-right container">
                    <center> <h1>Testimonials</h1></center>
                    <!--inside carousel text-->

                    <div id="myCarousel1" class="carousel slide" data-ride="carousel" >
                        <div class="carousel-inner" role="listbox">

                            <div class="item" style="height: 200px;">
                                <div class="container">
                                    <div class="carousel-caption1">

                                        <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item active" style="height: 200px;">
                                <div class="container">
                                    <div class="carousel-caption1">

                                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item" style="height: 200px;">
                                <div class="container">
                                    <div class="carousel-caption1">

                                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="left2 carousel-control" href="#myCarousel1" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left icon2" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="right2 carousel-control " href="#myCarousel1" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right icon2" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
                    <!--carousel ends-->

                    <!--end inside carousel text-->
                </div>
            </div>
        </div>
    </section>
    <!--footer-->
    <section>
        <div class="container-fluid">
            <div class="row bg ">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class=" font-good">
                        <center>
                            <h3 class="text-white">How Beautiful Is To Do Nothing And Then Rest Afterwards And Then Rest.</h3>
                        </center>
                    </div>
                </div>
                <div class="font-good">
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <center>
                            <p><a class="btn1 btn-primary" href="#" role="button" >Subscribe</a></p>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @stop
@section('javascriptfiles')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Bootstrap core JavaScript
        ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>

    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script>
        $(window).on("scroll", function () {
            if ($(window).width() >= 992) {
                if ($(window).scrollTop() > 290) {
                    $(".navbar").css({"position":"fixed"});
                    $(".navbar").css({"background":"#252525","height":"95px","margin-top":"-10px"});
                    $(".navbar").addClass("animated fadeInDownBig");
                } else if ($(window).scrollTop() < 100) {
                    $(".navbar").removeClass("animated fadeInDownBig");
                    $(".navbar").css({"background":"#252525","height":"105px","margin-top":"0"});
                    $(".navbar").css({"background":"transparent","position":"absolute"});
                }
            }
        }); //end of scroll method

    </script>
    <script>
        $('#carouselHacked').carousel();
    </script>
    <script>
        $(document).ready(function () {
            $(".navbar-toggle").on("click", function () {
                $(this).toggleClass("active");
            });
        });
    </script>

    @stop