<div class="header-logo-menu sticker">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-12">
                <div class="logo">
                    <a href="#"><img src="{{asset('frontend/img/logo/lnmulogo.png')}}" style="width:10vh;" alt="College"></a>
                </div>
            </div>
            <div class="col-lg-10 col-12">
                <div class="mainmenu-area pull-right">
                    <div class="mainmenu d-none d-lg-block">
                        <nav>
                            <ul id="nav">
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li class="current"><a href="#">About Us</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('aboutUs') }}">About College</a></li>
                                        <li><a href="{{ route('visionMission') }}">Vision & Mission</a></li>
                                        <li><a href="{{ route('principalMessage') }}">Principal Message</a></li>
                                        <li><a href="#">Succession List of Principals</a></li>
                                        <li><a href="#">Succession List of Heads</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Administration</a>
                                    <ul class="sub-menu">
                                        <li><a href="#">Administrative Functionaries </a></li>
                                        <li><a href="#">Office Staff-Non-Teaching </a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Academic Programmes</a></li>
                                <li><a href="#">Research</a></li>
                                <li><a href="#">Scholarships</a></li>
                                <li><a href="#">Amenities</a>
                                    <ul class="sub-menu">
                                        <li><a href="#">Infrastructure</a></li>
                                        <li><a href="#">Reverse Osmosis(RO)</a></li>
                                        <li><a href="#">24x7 Survelliance</a></li>
                                        <li><a href="#">Computer Labs</a></li>
                                        <li><a href="#">Hostels</a></li>
                                        <li><a href="#">Library</a></li>
                                        <li><a href="#">Department of Physical Education</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Examination</a></li>
                                <li><a href="{{ route('contactUs') }}">Contact Us</a></li>
                            </ul>
                        </nav>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
