@extends('layouts.main')
@section('title')
    detail
    @stop
@section('body')
    <section class="detail-head">
        <div class="container-fluid no-margin">
            <div class="row ">

                <div class="detail-head-left"><div class="col-md-6 col-sm-12 "><img ></div></div>
                <div class="detail-head-right"><div class="col-md-6 col-sm-12 "><div class="detail-head-info"><div class="detail-head-topic"><h2><b>PRODUCT NAME</b></h2></div><br>
                            <div class="">
                                <p class="price-detail">US$ 4,500</p>
                                <ul class="tick">
                                    <li>Departure Dates</li>
                                    <li>29 March – 19 April 2017 16 April – 07 May 2017 04 May – 25 May 2017 </li>
                                    <li>Trip Duration </li>
                                    <li>22 Days</li>
                                </ul><br>
                                <p><a class="btn1 btn-primary" href="#" role="button" >ADD TO CART</a></p>
                            </div>
                        </div></div></div>

            </div>
        </div>
    </section>
    <section class="panel-cost">

        <div class="panel with-nav-tabs panel-default">
            <div class="panel-heading">
                <div class="container">
                    <ul class="nav nav-tabs">

                        <li class="active"><a href="#tab1default" data-toggle="tab">Overview</a></li>
                        <li><a href="#tab2default" data-toggle="tab">Specification</a></li>
                        <li><a href="#tab3default" data-toggle="tab">Accomodation</a></li>
                        <li><a href="#tab4default" data-toggle="tab">Enquire Now</a></li>
                        <li><a href="#tab5default" data-toggle="tab">Gallery</a></li>

                    </ul>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <div class="panel-body">
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="tab1default">
                                    <div class="def1">
                                        <div class="">
                                            <div class=""><div class="def1-wrapper-left">
                                                    <h3><b>Overview</b></h3><br>
                                                    This is Photoshop’s version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.<br>

                                                    Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.<br>

                                                    Sed non mauris vitae;erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo.<br>

                                                    Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi.<br>

                                                    Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam.<br>

                                                    Ulins aliquam massa nisl quis neque. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque.<br>

                                                    Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam.<br>

                                                    Ulins aliquam massa nisl quis neque. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque.<br>

                                                    Ulins aliquam massa nisl quis neque. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque.<br>

                                                    Suspendisse gin orci enim.

                                                </div></div>
                                            <div class=""></div>
                                        </div>

                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab2default"><div class="container"><div class="def1-wrapper-left"><h3><b>SPECIFICATION</b></h3>
                                            29 Mar	16 Apr	04 May	Arrive Kathmandu 1317m<br>
                                            30	17	05	Kathmandu<br>
                                            31	18	06	Kathmandu – Lukla 2840m – Phakding 2610m<br>
                                            01 Apr	19	07	Phakding – Namche Bazar 3440m<br>
                                            02	20	08	Namche Bazar – Khumjung 3780m<br>
                                            03	21	09	Khumjung<br>
                                            04	22	10	Khumjung – Phortse 3810m<br>
                                            05	23	11	Phortse – Pheriche 4240m<br>
                                            06	24	12	Pheriche<br>
                                            07	25	13	Pheriche – Lobuche BC 4910m<br>
                                            08	26	14	Lobuche BC<br>
                                            09	27	15	Lobuche BC – Everest BC 5267m<br>
                                            10	28	16	Everest BC<br>
                                            11	29	17	Everest BC<br>
                                            12	30	18	Everest BC<br>
                                            13	01 May	19	Everest BC – Lobuche BC<br>
                                            14	02	20	Lobuche BC – Pangboche 3930m<br>
                                            15	03	21	Pangboche – Namche Bazar<br>
                                            16	04	22	Namche Bazar - Lukla<br>
                                            17	05	23	Lukla - Kathmandu<br>
                                            18	06	24	Kathmandu<br>
                                            19	07	25	Depart Kathmandu</div></div></div>
                                <div class="tab-pane fade" id="tab3default">Default 3</div>
                                <div class="tab-pane fade" id="tab4default">
                                    <h3><b>ENQUIRE NOW</b></h3><br>
                                    <!--form-->
                                    <div class="enquire-wrapper">
                                        <form class="form-inline margin-top" action="#">
                                            <div class="form-group" >
                                                <div class="row mar-bottom">
                                                    <div class="col-md-6"><input type="email" class="form-control" id="fname" placeholder="FIRST NAME"></div>
                                                    <div class="col-md-6"><input type="password" class="form-control" id="lname" placeholder="LAST NAME"></div>
                                                </div>
                                                <div class="row mar-bottom">
                                                    <div class="col-md-6"><input type="email" class="form-control" id="email" placeholder="E-MAIL"></div>
                                                    <div class="col-md-6"><input type="password" class="form-control" id="phnum" placeholder="PHONE NUMBER"></div>
                                                </div>
                                                <div class="row mar-bottom">
                                                    <div class="col-md-6">
                                                        <div class="contentbox ">
                                                            <select  name="month" class="size-box" >
                                                                <option value="" class="center-text " >
                                                                    <center>
                                                                        Month
                                                                    </center>
                                                                </option>
                                                                <option value="1">January</option>
                                                                <option value="2">February</option>
                                                                <option value="3">March</option>
                                                                <option value="4">April</option>
                                                                <option value="5">May</option>
                                                                <option value="6">June</option>
                                                                <option value="7">July</option>
                                                                <option value="8">August</option>
                                                                <option value="9">September</option>
                                                                <option value="10">October</option>
                                                                <option value="11">November</option>
                                                                <option value="12">December</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="contentbox">
                                                            <select  name="month" class="size-box" >
                                                                <option value="" class="center-text">
                                                                    <center>
                                                                        Month
                                                                    </center>
                                                                </option>
                                                                <option value="1">January</option>
                                                                <option value="2">February</option>
                                                                <option value="3">March</option>
                                                                <option value="4">April</option>
                                                                <option value="5">May</option>
                                                                <option value="6">June</option>
                                                                <option value="7">July</option>
                                                                <option value="8">August</option>
                                                                <option value="9">September</option>
                                                                <option value="10">October</option>
                                                                <option value="11">November</option>
                                                                <option value="12">December</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <textarea class="form-control" rows="5" id="comment" placeholder="YOUR MESSAGE"></textarea>
                                                    </div>
                                                </div>
                                                <center><p><a class="btn btn-lg btn-primary mar-top-20px" href="#" role="button">SEND ENQUIRY</a></p></center>
                                            </div>
                                        </form>
                                    </div>
                                    <!--end form-->
                                </div>
                                <div class="tab-pane fade" id="tab5default">
                                    <h3><b>GALLERY</b></h3>
                                    <section>
                                        <div class="gallery-wrapper">
                                            <div class="row">
                                                <div class="col-md-4 col-sm-6 col-xs-12"><div class="image-gallery "><img src="images/tour-35-550x358.jpg" class="img-responsive"></div></div>
                                                <div class="col-md-4 col-sm-6 col-xs-12"><div class="image-gallery "><img src="images/itinerary-03-170x165.jpg" class="img-responsive"></div></div>
                                                <div class="col-md-4 col-sm-6 col-xs-12"><div class="image-gallery "><img src="images/image-bg-1.jpg" class="img-responsive"></div></div>
                                                <div class="col-md-4 col-sm-6 col-xs-12"><div class="image-gallery "><img src="images/img-01-170x165.jpg" class="img-responsive"></div></div>
                                                <div class="col-md-4 col-sm-6 col-xs-12"><div class="image-gallery "><img src="images/tour-13-min-550x358.jpg" class="img-responsive"></div></div>
                                                <div class="col-md-4 col-sm-6 col-xs-12"><div class="image-gallery "><img src="images/tour-24-min-550x358.jpg" class="img-responsive"></div></div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="panel-body-right">
                            <div class="def1-wrapper-right">
                                <center><h3><b>Related Products</b></h3></center>
                                <!--content-->
                                <div class="image-wrapper mar-top-20px"><img src="images/tour-38-550x358.jpg" class="img-responsive obj-fit"><a href="" class="text-best-seller">
                                        <h4>EVEREST BASE CAMP</h4>
                                    </a><a href="">City Tours, </a><a href="detail.html">Urban</a><br>
                                    <img src="images/globe-01-512.png"> 12 Countries <img src="images/Icon_World_People-512.png"> 1 Activity

                                    <br>
                                    <hr>
                                    <div class="social-media">
                                        <p class="social-media-left"><b>£429</b></p>
                                        <div class="social-media-right"><img src="images/facebook-letter-logo_318-40258.png"><img src="images/twitter-xxl.png"><img src="images/g+.png"><img src="images/152817.png"></div>
                                    </div>
                                </div>
                                <!--end content-->
                                <!--content-->
                                <div class="image-wrapper mar-top-20px"><img src="images/tour-38-550x358.jpg" class="img-responsive obj-fit"><a href="" class="text-best-seller">
                                        <h4>EVEREST BASE CAMP</h4>
                                    </a><a href="">City Tours, </a><a href="detail.html">Urban</a><br>
                                    <img src="images/globe-01-512.png"> 12 Countries <img src="images/Icon_World_People-512.png"> 1 Activity

                                    <br>
                                    <hr>
                                    <div class="social-media">
                                        <p class="social-media-left"><b>£429</b></p>
                                        <div class="social-media-right"><img src="images/facebook-letter-logo_318-40258.png"><img src="images/twitter-xxl.png"><img src="images/g+.png"><img src="images/152817.png"></div>
                                    </div>
                                </div>
                                <!--end content-->
                                <!--content-->
                                <div class="image-wrapper mar-top-20px"><img src="images/tour-38-550x358.jpg" class="img-responsive obj-fit"><a href="" class="text-best-seller">
                                        <h4>EVEREST BASE CAMP</h4>
                                    </a><a href="">City Tours, </a><a href="detail.html">Urban</a><br>
                                    <img src="images/globe-01-512.png"> 12 Countries <img src="images/Icon_World_People-512.png"> 1 Activity

                                    <br>
                                    <hr>
                                    <div class="social-media">
                                        <p class="social-media-left"><b>£429</b></p>
                                        <div class="social-media-right"><img src="images/facebook-letter-logo_318-40258.png"><img src="images/twitter-xxl.png"><img src="images/g+.png"><img src="images/152817.png"></div>
                                    </div>
                                </div>
                                <!--end content-->
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>

    </section>

    <!--special discount box-->

    <!--footer-->
    <section class="cmt">
        <div class="container-fluid">
            <div class="row bg ">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class=" font-good">
                        <section class="latest-blog-large">
                            <div class="container-fluid bg-gray">
                                <div class="row ">
                                    <div class="col-lg-12">
                                        <center><h3>Comment</h3></center>

                                        <!--form-->
                                        <center>
                                            <form class="form-inline margin-top" action="#">
                                                <div class="form-group" >


                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <textarea class="form-control" rows="5" id="comment1" placeholder="YOUR COMMENT"></textarea>
                                                        </div>
                                                    </div>
                                                    <p><a class="btn btn-lg btn-primary mar-top-20px" href="#" role="button">Comment</a></p>
                                                </div>
                                            </form>
                                        </center>

                                        <!--end form-->
                                    </div>

                                </div>
                            </div>
                        </section>
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
                    $(".navbar2").css({"position":"fixed"});
                    $(".navbar2").css({"background":"#252525"});
                    $(".detail-head").css({"padding-top":"105px"});
                    $(".navbar2").addClass("animated fadeInDownBig ");
                } else if ($(window).scrollTop() < 100) {
                    $(".navbar2").removeClass("animated fadeInDownBig ");
                    $(".navbar2").css({"background":"black","position":"relative"});
                    $(".detail-head").css({"padding-top":"0px"});
                }
            }
        }); //end of scroll method

    </script>
    <script>
        $('#carouselHacked').carousel();
    </script>
    <script>
        $(document).ready(function() {
            $('#navbar').affix({
                offset: {
                    top: $('header').height()
                }
            });
        });
    </script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script>

        $(document).ready(function(){
            if ($(window).width() >= 992) {
                $('.panel-cost ul li a').on('click', function(){
                    $('html,body').animate({scrollTop: 600}, 800);
                });
            }else
                $('.panel-cost ul li a').on('click', function(){
                    $('html,body').animate({scrollTop: none});
                });
        });

    </script>
    <script>
        $(document).ready(function () {

            $(".navbar-toggle").on("click", function () {
                $(this).toggleClass("active");
            });



        });

    </script>

@stop