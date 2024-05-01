@extends('frontend.includes.master')
@section('style')

@endsection
@section('content')
<!--Breadcrumb Banner Area Start-->
@include('frontend.includes.breadcrumb', ['title' => 'CONTACT US'])
<!--End of Breadcrumb Banner Area-->

  <!--Google Map Area Start-->
  <div class="google-map-area">
    <!--  Map Section -->
    <div id="contacts" class="map-area">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3580.9834303695384!2d85.88988448885496!3d26.164669099999987!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39edb9eea2b8ede1%3A0x484ff61a58b95080!2sDr.%20APJ%20Abdul%20kalam%20WIT!5e0!3m2!1sen!2sin!4v1714567110762!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>
<!--End of Google Map Area-->

<!--Contact Form Area Start-->
<div class="contact-form-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12">
                <h4 class="contact-title">contact info</h4>
                <div class="contact-text">
                    <p><span class="c-icon"><i class="zmdi zmdi-phone"></i></span><span class="c-text">0123456789</span></p>
                    <p><span class="c-icon"><i class="zmdi zmdi-email"></i></span><span class="c-text">info@example.com</span></p>
                    <p><span class="c-icon"><i class="zmdi zmdi-pin"></i></span><span class="c-text">Your address goes here.</span></p>
                </div>
                <h4 class="contact-title">social media</h4>
                <div class="link-social">
                    <a href="#"><i class="zmdi zmdi-facebook"></i></a>
                    <a href="#"><i class="zmdi zmdi-rss"></i></a>
                    <a href="#"><i class="zmdi zmdi-google-plus"></i></a>
                    <a href="#"><i class="zmdi zmdi-pinterest"></i></a>
                    <a href="#"><i class="zmdi zmdi-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-8 col-md-12">
                <h4 class="contact-title">send your massage</h4>
                <form id="contact-form" action="https://htmldemo.hasthemes.com/educat-preview/educat/mail.php" method="post">
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" name="name" placeholder="name">
                        </div>
                        <div class="col-md-6">
                            <input type="email" name="email" placeholder="Email">
                        </div>
                        <div class="col-md-12">
                            <textarea name="message" cols="30" rows="10" placeholder="Message"></textarea>
                            <button type="submit" class="button-default">SUBMIT</button>
                        </div>
                    </div>
                </form>
                <p class="form-messege"></p>
            </div>
        </div>
    </div>
</div>
<!--End of Contact Form-->


@endsection
