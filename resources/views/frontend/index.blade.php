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
                    <h3>WHY MBA ?</h3>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text
                        amr songr balga ami toami valo lasi ciri din akr dali</p>
                    <a class="button-default" href="#">Learn Now</a>
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
                        <p>There are many variations of passages</p>
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
                            <h4><a href="#">Indesign CC 2017</a></h4>
                            <div class="single-item-text-info">
                                <span>By: <span>Momin Boss</span></span>
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
                        <p>There are many variations of passages of Lorem Ipsum</p>
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
                        <p>There are many variations of passages of Lorem Ipsum</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-12">
                <div class="single-item">
                    <div class="single-item-image overlay-effect">
                        <a href="#"><img src="{{asset('frontend/img/course/1.jpg')}}" alt=""></a>
                    </div>
                    <div class="single-item-text">
                        <h4><a href="#">Photoshop CC 2017</a></h4>
                        <div class="single-item-text-info">
                            <span>By: <span>M S Nawaz</span></span>
                            <span>Date: <span>20.5.15</span></span>
                        </div>
                        {{-- <p>There are many variations of sages of Lorem Ipsum available, but the mrity have suffered alteration in some orm, by injected humo ur,There are many but the mri have suffered alteration in some </p> --}}
                        <div class="single-item-content">
                            <div class="single-item-comment-view">
                                <span><i class="zmdi zmdi-eye"></i>59</span>
                                <span><i class="zmdi zmdi-comments"></i>19</span>
                            </div>
                            <div class="single-item-rating">
                                <i class="zmdi zmdi-star"></i>
                                <i class="zmdi zmdi-star"></i>
                                <i class="zmdi zmdi-star"></i>
                                <i class="zmdi zmdi-star"></i>
                                <i class="zmdi zmdi-star-half"></i>
                            </div>
                        </div>
                    </div>
                    <div class="button-bottom">
                        <a href="#" class="button-default">Learn Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="single-item">
                    <div class="single-item-image overlay-effect">
                        <a href="#"><img src="{{asset('frontend/img/course/2.jpg')}}" alt=""></a>
                    </div>
                    <div class="single-item-text">
                        <h4><a href="#">Illustrator CC 2017</a></h4>
                        <div class="single-item-text-info">
                            <span>By: <span>Subas Das</span></span>
                            <span>Date: <span>20.5.15</span></span>
                        </div>
                        {{-- <p>There are many variations of sages of Lorem Ipsum available, but the mrity have suffered alteration in some orm, by injected humo ur,There are many but the mri have suffered alteration in some </p> --}}
                        <div class="single-item-content">
                            <div class="single-item-comment-view">
                                <span><i class="zmdi zmdi-eye"></i>59</span>
                                <span><i class="zmdi zmdi-comments"></i>19</span>
                            </div>
                            <div class="single-item-rating">
                                <i class="zmdi zmdi-star"></i>
                                <i class="zmdi zmdi-star"></i>
                                <i class="zmdi zmdi-star"></i>
                                <i class="zmdi zmdi-star"></i>
                                <i class="zmdi zmdi-star-half"></i>
                            </div>
                        </div>
                    </div>
                    <div class="button-bottom">
                        <a href="#" class="button-default">Learn Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="single-item">
                    <div class="single-item-image overlay-effect">
                        <a href="#"><img src="{{asset('frontend/img/course/3.jpg')}}" alt=""></a>
                    </div>
                    <div class="single-item-text">
                        <h4><a href="#">Indesign CC 2017</a></h4>
                        <div class="single-item-text-info">
                            <span>By: <span>Momin Boss</span></span>
                            <span>Date: <span>20.5.15</span></span>
                        </div>
                        {{-- <p>There are many variations of sages of Lorem Ipsum available, but the mrity have suffered alteration in some orm, by injected humo ur,There are many but the mri have suffered alteration in some </p> --}}
                        <div class="single-item-content">
                            <div class="single-item-comment-view">
                                <span><i class="zmdi zmdi-eye"></i>59</span>
                                <span><i class="zmdi zmdi-comments"></i>19</span>
                            </div>
                            <div class="single-item-rating">
                                <i class="zmdi zmdi-star"></i>
                                <i class="zmdi zmdi-star"></i>
                                <i class="zmdi zmdi-star"></i>
                                <i class="zmdi zmdi-star"></i>
                                <i class="zmdi zmdi-star-half"></i>
                            </div>
                        </div>
                    </div>
                    <div class="button-bottom">
                        <a href="#" class="button-default">Learn Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-sm-12 text-center">
                <a href="#" class="button-default button-large">Browse All Courses <i class="zmdi zmdi-chevron-right"></i></a>
            </div>
        </div>
    </div>
</div>
<!--End of Course Area-->

<!--Online Product Area Start-->
{{-- <div class="product-area section-bottom-padding bg-white">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title-wrapper">
                    <div class="section-title">
                        <h3>Online Library</h3>
                        <p>There are many variations of passages</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="single-product-item">
                    <div class="single-product-image">
                        <a href="#"><img src="{{asset('frontend/img/product/1.jpg')}}" alt=""></a>
                    </div>
                    <div class="single-product-text">
                        <h4><a href="#">Title Product Here</a></h4>
                        <h5>Book</h5>
                        <div class="product-price">
                            <h3>$ 28</h3>
                            <div class="single-item-rating">
                                <i class="zmdi zmdi-star"></i>
                                <i class="zmdi zmdi-star"></i>
                                <i class="zmdi zmdi-star"></i>
                                <i class="zmdi zmdi-star"></i>
                                <i class="zmdi zmdi-star-half"></i>
                            </div>
                        </div>
                        <div class="product-buttons">
                            <button type="button" class="button-default cart-btn">ADD TO CART</button>
                            <button type="button" class="button-default"><i class="zmdi zmdi-favorite"></i></button>
                            <button type="button" class="button-default"><i class="zmdi zmdi-refresh-alt"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-product-item">
                    <div class="single-product-image">
                        <a href="#"><img src="{{asset('frontend/img/product/2.jpg')}}" alt=""></a>
                    </div>
                    <div class="single-product-text">
                        <h4><a href="#">Title Product Here</a></h4>
                        <h5>Book</h5>
                        <div class="product-price">
                            <h3>$ 28</h3>
                            <div class="single-item-rating">
                                <i class="zmdi zmdi-star"></i>
                                <i class="zmdi zmdi-star"></i>
                                <i class="zmdi zmdi-star"></i>
                                <i class="zmdi zmdi-star"></i>
                                <i class="zmdi zmdi-star-half"></i>
                            </div>
                        </div>
                        <div class="product-buttons">
                            <button type="button" class="button-default cart-btn">ADD TO CART</button>
                            <button type="button" class="button-default"><i class="zmdi zmdi-favorite"></i></button>
                            <button type="button" class="button-default"><i class="zmdi zmdi-refresh-alt"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-product-item">
                    <div class="single-product-image">
                        <a href="#"><img src="{{asset('frontend/img/product/3.jpg')}}" alt=""></a>
                    </div>
                    <div class="single-product-text">
                        <h4><a href="#">Title Product Here</a></h4>
                        <h5>Book</h5>
                        <div class="product-price">
                            <h3>$ 28</h3>
                            <div class="single-item-rating">
                                <i class="zmdi zmdi-star"></i>
                                <i class="zmdi zmdi-star"></i>
                                <i class="zmdi zmdi-star"></i>
                                <i class="zmdi zmdi-star"></i>
                                <i class="zmdi zmdi-star-half"></i>
                            </div>
                        </div>
                        <div class="product-buttons">
                            <button type="button" class="button-default cart-btn">ADD TO CART</button>
                            <button type="button" class="button-default"><i class="zmdi zmdi-favorite"></i></button>
                            <button type="button" class="button-default"><i class="zmdi zmdi-refresh-alt"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-product-item">
                    <div class="single-product-image">
                        <a href="#"><img src="{{asset('frontend/img/product/4.jpg')}}" alt=""></a>
                    </div>
                    <div class="single-product-text">
                        <h4><a href="#">Title Product Here</a></h4>
                        <h5>Book</h5>
                        <div class="product-price">
                            <h3>$ 28</h3>
                            <div class="single-item-rating">
                                <i class="zmdi zmdi-star"></i>
                                <i class="zmdi zmdi-star"></i>
                                <i class="zmdi zmdi-star"></i>
                                <i class="zmdi zmdi-star"></i>
                                <i class="zmdi zmdi-star-half"></i>
                            </div>
                        </div>
                        <div class="product-buttons">
                            <button type="button" class="button-default cart-btn">ADD TO CART</button>
                            <button type="button" class="button-default"><i class="zmdi zmdi-favorite"></i></button>
                            <button type="button" class="button-default"><i class="zmdi zmdi-refresh-alt"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!--End of Online Product Area-->
<!--Testimonial Area Start-->
{{-- <div class="testimonial-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 offset-lg-0 col-md-12 col-12">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2">
                        <div class="testimonial-image-slider text-center">
                            <div class="sin-testiImage">
                                <img src="{{asset('frontend/img/testimonial/1.jpg')}}" alt="testimonial 1" />
                            </div>
                            <div class="sin-testiImage">
                                <img src="{{asset('frontend/img/testimonial/2.jpg')}}" alt="testimonial 2" />
                            </div>
                            <div class="sin-testiImage">
                                <img src="{{asset('frontend/img/testimonial/3.jpg')}}" alt="testimonial 3" />
                            </div>
                            <div class="sin-testiImage">
                                <img src="{{asset('frontend/img/testimonial/1.jpg')}}" alt="testimonial 1" />
                            </div>
                            <div class="sin-testiImage">
                                <img src="{{asset('frontend/img/testimonial/2.jpg')}}" alt="testimonial 2" />
                            </div>
                            <div class="sin-testiImage">
                                <img src="{{asset('frontend/img/testimonial/3.jpg')}}" alt="testimonial 3" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-text-slider text-center">
                    <div class="sin-testiText">
                        <h2>M S Nawaz </h2>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                    </div>
                    <div class="sin-testiText">
                        <h2>Chowchilla Madera</h2>
                        <p>Nam nec tellus a odio tincidunt This lorem is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean nisi sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum gravida.</p>
                    </div>
                    <div class="sin-testiText">
                        <h2>Kattie Luis</h2>
                        <p>Nam nec tellus a odio tincidunt This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean tincidunt sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum Photoshop.</p>
                    </div>
                    <div class="sin-testiText">
                        <h2>M S Nawaz </h2>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                    </div>
                    <div class="sin-testiText">
                        <h2>Chowchilla Madera</h2>
                        <p>Nam nec tellus a odio tincidunt This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, aliquet lorem quis tellus velit bibendum auctor, nisi elit consequat ipsum</p>
                    </div>
                    <div class="sin-testiText">
                        <h2>Kattie Luis</h2>
                        <p>Nam nec tellus a odio tincidunt This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem gravida tincidunt quis bibendum auctor, nisi elit consequat ipsum</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!--End of Testimonial Area-->
<!--Event Area Start-->
<div class="event-area section-padding bg-white">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title-wrapper">
                    <div class="section-title">
                        <h3>OUR EVENTS</h3>
                        <p>There are many variations of passages</p>
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
