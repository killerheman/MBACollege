@extends('frontend.includes.master')
@section('style')
<style>
    .nav-tabs {
        list-style: none;
        padding-left: 0;
    }

    .nav-tabs li {
        color: #fff;
        cursor: pointer;
        margin-right: 10px;
        display: inline-block;
        transform: rotateX(0deg) rotateY(0deg) rotateZ(0deg) skewX(330deg);
        transition: background 0.2s, color 0.2s, transform 0.5s, margin 0.4s;
    }

    .nav-tabs li:hover {
        margin-right: 30px;
    }

    .nav-tabs li.active {
        color: #3498db;
        /* background: #f2f2f2; */
        transform: rotateX(360deg) rotateY(0deg) rotateZ(0deg) skewX(330deg);
        transition: all 0.8s ease 0s;
    }

    .nav-tabs li a {
        border: none;
        outline: none;
        padding: 14px 28px;
        color: #fff;
        /* background: #86bc42; */
        ;
    }

    .nav-tabs li a:hover {
        color: #333;
    }

    @media only screen and (max-width: 480px) {
        .nav-tabs li {
            width: 100%;
            margin: 0 0 10px 0;
            transform: rotateX(0deg) rotateY(0deg) rotateZ(0deg) skewX(0deg);
        }

        .nav-tabs li.active {
            border-bottom: 1px solid #D3D3D3;
            transform: rotateX(360deg) rotateY(0deg) rotateZ(0deg) skewX(0deg);
        }
    }
</style>
@endsection
@section('content')
@include('frontend.includes.slider')
<!--About Area Start-->
<div class="about-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="about-container">
                    <h3>About MBALNMU ?</h3>
                    <p>Established in 1972, the Department offering traditional (M.Com.) as well as modern (MBA) academic programs, besides Ph.D. & D. Litt. Programs in Commerce and Management.                    </p>
                    <a class="button-default" href="#">Read More</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End of About Area-->

<!--Latest News Area Start-->
<div class="latest-area section-padding bg-white">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title-wrapper">
                    <div class="section-title">
                        <h3>Latest News</h3>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="tab">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist" style="border-bottom:1px solid white">
                            <li role="presentation" class="active"><a href="#Notice" aria-controls="home" role="tab" data-toggle="tab" class="notice">Notice</a></li>
                            <li role="presentation"><a href="#Exams" aria-controls="profile" role="tab" data-toggle="tab" class="exams">Exams</a></li>
                            <li role="presentation"><a href="#Admission" aria-controls="messages" role="tab" data-toggle="tab" class="admission">Admission</a></li>
                            <li role="presentation"><a href="#Tender" aria-controls="messages" role="tab" data-toggle="tab" class="tender">Tender</a></li>
                        </ul>
                        <!-- Tab panes -->
                        <br>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane in active" id="Notice">
                                <h4>Notice</h4>
                                <marquee onmouseover="this.stop();" onmouseout="this.start();" direction="up" height="340px">
                                    <ul>
                                        <li class="font__fontrols__style"><span>✍</span>
                                            Lorem ipsum
                                            dolor sit amet.<img src="http://lnmubed.ac.in/home/images/arrow.gif" height="50px" width="50px">
                                        </li>
                                    </ul>
                                </marquee>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="Exams">
                                <h4>Exams</h4>
                                <ul>
                                    <li class="font__fontrols__style"><span>✍</span>
                                        Lorem ipsum dolor
                                        sit amet.<img src="http://lnmubed.ac.in/home/images/arrow.gif" height="50px" width="50px"></li>
                                    <li class="font__fontrols__style"><span>✍</span>
                                        Lorem ipsum dolor
                                        sit amet.<img src="http://lnmubed.ac.in/home/images/arrow.gif" height="50px" width="50px"></li>
                                    <li class="font__fontrols__style"><span>✍</span>
                                        Lorem ipsum dolor
                                        sit amet.<img src="http://lnmubed.ac.in/home/images/arrow.gif" height="50px" width="50px"></li>
                                </ul>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="Admission">
                                <h4>Admission</h4>
                                <ul>
                                    <li class="font__fontrols__style"><span>✍</span>
                                        Lorem ipsum dolor
                                        sit amet.<img src="http://lnmubed.ac.in/home/images/arrow.gif" height="50px" width="50px"></li>
                                    <li class="font__fontrols__style"><span>✍</span>
                                        Lorem ipsum dolor
                                        sit amet.<img src="http://lnmubed.ac.in/home/images/arrow.gif" height="50px" width="50px"></li>
                                    <li class="font__fontrols__style"><span>✍</span>
                                        Lorem ipsum dolor
                                        sit amet.<img src="http://lnmubed.ac.in/home/images/arrow.gif" height="50px" width="50px"></li>
                                </ul>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="Tender">
                                <h4>Tender</h4>
                                <ul>
                                    <li class="font__fontrols__style"><span>✍</span>
                                        Lorem ipsum dolor
                                        sit amet.<img src="http://lnmubed.ac.in/home/images/arrow.gif" height="50px" width="50px"></li>
                                    <li class="font__fontrols__style"><span>✍</span>
                                        Lorem ipsum dolor
                                        sit amet.<img src="http://lnmubed.ac.in/home/images/arrow.gif" height="50px" width="50px"></li>
                                    <li class="font__fontrols__style"><span>✍</span>
                                        Lorem ipsum dolor
                                        sit amet.<img src="http://lnmubed.ac.in/home/images/arrow.gif" height="50px" width="50px"></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-item">
                        <div class="single-item-image overlay-effect">
                            <a href="#"><img src="http://localhost:8000/frontend/img/course/3.jpg" alt=""></a>
                        </div>
                        <div class="single-item-text">
                            <h4><a href="#">Himanshu Sharma</a></h4>
                            <div class="single-item-text-info">
                                Director
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End of Latest News Area-->

<!--Fun Factor Area Start-->
<div class="fun-factor-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title-wrapper white">
                    <div class="section-title">
                        <h3>IMPORTANT FACTS</h3>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-3 col-12">
                <div class="single-fun-factor">
                    <h4>Teachers</h4>
                    <h2><span class="counter">79</span>+</h2>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-12">
                <div class="single-fun-factor">
                    <h4>Members</h4>
                    <h2><span class="counter">120</span>+</h2>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-12">
                <div class="single-fun-factor">
                    <h4>Courses</h4>
                    <h2><span class="counter">36</span>+</h2>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-12">
                <div class="single-fun-factor">
                    <h4>Countries</h4>
                    <h2><span class="counter">20</span>+</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End of Fun Factor Area-->

<!--Course Area Start-->
<div class="course-area section-padding bg-white">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title-wrapper">
                    <div class="section-title">
                        <h3>POPULAR COURSES</h3>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="single-item">
                    <div class="single-item-image overlay-effect">
                        <a href="#"><img src="{{asset('frontend/img/course/1.jpg')}}" alt=""></a>
                    </div>
                    <div class="single-item-text">
                        <h4><a href="#">Department of Commerce</a></h4>
                        <p>Department of Commerce is one of the twin departments, housed in the College of Commerce and Business Management situated in the main campus of the Osmania University, has a history of over six decades and caters to the academic requirements of over 1500 students at PG level. </p>

                    </div>
                    <div class="button-bottom">
                        <a href="#" class="button-default">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <div class="single-item">
                    <div class="single-item-image overlay-effect">
                        <a href="#"><img src="{{asset('frontend/img/course/2.jpg')}}" alt=""></a>
                    </div>
                    <div class="single-item-text">
                        <h4><a href="#">Department of Business Management</a></h4>
                        <p>The Department of Business Management has been conducting a two-year postgraduate programme in Business Management since 1964. It was established as an independent entity in 1971. The department trains 80 students every year with the best of faculty and facilities.</p>
                    </div>
                    <div class="button-bottom">
                        <a href="#" class="button-default">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End of Course Area-->

<!--Event Area Start-->
<div class="event-area section-padding bg-white">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title-wrapper">
                    <div class="section-title">
                        <h3>OUR EVENTS</h3>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-event-item">
                    <div class="single-event-image">
                        <a href="#">
                            <img src="{{asset('frontend/img/event/1.jpg')}}" alt="">
                            <span><span>15</span>Jun</span>
                        </a>
                    </div>
                    <div class="single-event-text">
                        <h3><a href="#">Learn English in ease</a></h3>
                        <div class="single-item-comment-view">
                            <span><i class="zmdi zmdi-time"></i>4.00 pm - 8.00 pm</span>
                            <span><i class="zmdi zmdi-pin"></i>Dhaka Bangladesh</span>
                        </div>
                        {{-- <p>There are many variaons of passa of Lorem Ipsuable, amrn in sofby injected humour, amr sarata din megla....</p> --}}
                        <a class="button-default" href="#">LEARN Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-event-item">
                    <div class="single-event-image">
                        <a href="#">
                            <img src="{{asset('frontend/img/event/2.jpg')}}" alt="">
                            <span><span>20</span>Apr</span>
                        </a>
                    </div>
                    <div class="single-event-text">
                        <h3><a href="#">Learn English in ease</a></h3>
                        <div class="single-item-comment-view">
                            <span><i class="zmdi zmdi-time"></i>4.00 pm - 8.00 pm</span>
                            <span><i class="zmdi zmdi-pin"></i>Jessore Bangladesh</span>
                        </div>
                        {{-- <p>There are many variaons of passa of Lorem Ipsuable, amrn in sofby injected humour, amr sarata din megla....</p> --}}
                        <a class="button-default" href="#">LEARN Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-event-item">
                    <div class="single-event-image">
                        <a href="#">
                            <img src="{{asset('frontend/img/event/3.jpg')}}" alt="">
                            <span><span>06</span>Dec</span>
                        </a>
                    </div>
                    <div class="single-event-text">
                        <h3><a href="#">Learn English in ease</a></h3>
                        <div class="single-item-comment-view">
                            <span><i class="zmdi zmdi-time"></i>4.00 pm - 8.00 pm</span>
                            <span><i class="zmdi zmdi-pin"></i>Dhaka. Bangladesh</span>
                        </div>
                        {{-- <p>There are many variaons of passa of Lorem Ipsuable, amrn in sofby injected humour, amr sarata din megla....</p> --}}
                        <a class="button-default" href="#">LEARN Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End of Event Area-->

@endsection
