@extends('layouts.main')
@section('title')
    register
    @stop
@section('body')
    <section class="contact-header">
        <div class="container-fluid">
            <div class="row">

            </div>
        </div>
    </section>
    <!--end bottom nav-->
    <!-- /.carousel -->
    <section class="mar-top-50px">
        <div class="container">
            <div class="row">
                <center>
                    <h1>REGISTER</h1>
        <span class="paragraph-size-18px "><br>

        </span>
                </center>
            </div>
            <hr>

            <hr>


        </div>
    </section>
    @if(count($errors)>0)
        @foreach($errors->all() as $error)
            <div class="alert alert-danger">

                {{$error}}
            </div>
        @endforeach
    @endif
    <section class="latest-blog-large">
        <div class="container-fluid bg-gray">
            <div class="row ">
                <div class="col-lg-12">


                    <!--form-->
                    <center>
                       {!! Form::open(array('url' => '/register/submit','class'=>'form-inline margin-top')) !!}
                            <div class="form-group" >
                                <div class="row mar-bottom">
                                    <div class="col-md-6">{!! Form::label('fname','First Name') !!}
                                        {!! Form::text('fname','',['placeholder'=>'Enter your first name']) !!}</div>
                                    <div class="col-md-6">{!! Form::label('lname','Last Name') !!}
                                        {!! Form::text('lname','',['placeholder'=>'Enter your last name']) !!}</div>

                                </div>
                                <div class="row mar-bottom">
                                    <div class="col-md-6">{!! Form::label('uname','User Name') !!}
                                        {!! Form::text('uname','',['placeholder'=>'Enter your username']) !!}</div>
                                    <div class="col-md-6">{!! Form::label('email','Email') !!}
                                        {!! Form::text('email','',['placeholder'=>'Enter your Email']) !!}</div>

                                </div>
                                <div class="row mar-bottom">
                                    <div class="col-md-6"> {!! Form::label('pwd','Password') !!}
                                        {!! Form::text('pwd','',['placeholder'=>'Enter your password']) !!}</div>
                                    <div class="col-md-6"> {!! Form::label('rpwd','Re-Password') !!}
                                        {!! Form::text('rpwd','',['placeholder'=>'Re-Enter your password']) !!}</div>
                                </div>
                                {!! Form::checkbox('agree','yes',false) !!}
                                {!! Form::label('agree','I agree') !!}
                                <p>{!! Form::submit('Submit',['class'=>'btn btn-primary']) !!}
                                    {!! Form::close() !!}</p>
                            </div>
                        </form>
                    </center>

                    <!--end form-->
                </div>

            </div>
        </div>
    </section>
    <!--special discount box-->
    <section>
        <div class="" >
            <div class="clearfix">
                <div class="background-darkgray">
                    <center>

                    </center>
                </div>
            </div>
        </div>
    </section>
    <!--end special discount box-->

    <section>
        <div class="container-fluid banner ">
            <div class="row">
                <div class="image-holder"></div>
                <div class="bottom-right container">

                    <!--inside carousel text-->

                    <div id="myCarousel1" class="carousel slide" data-ride="carousel" >
                        <div class="carousel-inner" role="listbox">
                            <div class="item" style="height: 200px;">
                                <div class="container">
                                    <div class="carousel-caption1">
                                        <h1>Example headline.</h1>
                                        <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item active" style="height: 200px;">
                                <div class="container">
                                    <div class="carousel-caption1">
                                        <h1>Another example headline.</h1>
                                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item" style="height: 200px;">
                                <div class="container">
                                    <div class="carousel-caption1">
                                        <h1>One more for good measure.</h1>
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
    <script>
        function myMap() {
            var mapCanvas = document.getElementById("map");
            var mapOptions = {
                center: new google.maps.LatLng(51.5, -0.2), zoom: 10
            };
            var map = new google.maps.Map(mapCanvas, mapOptions);
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD5KR40RrKJCx1W3iP37RL1PnrhXk1HAL0&callback=myMap"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Bootstrap core JavaScript
        ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>

    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script>
        $(document).ready(function () {
            $(".navbar-toggle").on("click", function () {
                $(this).toggleClass("active");
            });
        });
    </script>
    @stop