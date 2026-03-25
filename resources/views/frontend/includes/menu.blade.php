<div class="header-logo-menu sticker">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-12">
                <div class="logo">
                    <a href="#"><img src="{{asset('frontend/img/logo/lnmulogo.png')}}" style="max-height: 80px;" alt="College"></a>
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
                                        <li><a href="{{ route('principalMessage') }}">Director Message</a></li>
                                        <li><a href="{{ route('successionPrincipals') }}">Succession List of Directors</a></li>
                                        <li><a href="{{ route('successionHeads') }}">Succession List of Heads</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Administration</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('administrativeFunctionaries') }}">Administrative Functionaries </a></li>
                                        <li><a href="{{ route('nonTeaching') }}">Office Staff-Non-Teaching </a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Academic Programmes</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('coursesOffered') }}">Courses Offered</a></li>
                                        <li><a href="#">Workload <i class="fa fa-angle-right"></i></a>
                                            <ul class="sub-menu inside-menu">
                                                <li><a href="https://uccbm.osmania.ac.in/downloads/workload_2025.pdf" target="_blank">University Department of Commerce and Business Administration</a></li>
                                                <li><a href="https://uccbm.osmania.ac.in/downloads/workload-Deptof%20University%20Department%20of%20Commerce%20and%20Business%20Administration.pdf" target="_blank">University Department of Commerce and Business Administration</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Time tables <i class="fa fa-angle-right"></i></a>
                                            <ul class="sub-menu inside-menu">
                                                <li><a href="https://uccbm.osmania.ac.in/downloads/Time%20tables%20-MBA.pdf" target="_blank">MBA</a></li>
                                                <li><a href="https://uccbm.osmania.ac.in/downloads/timetable_2025.pdf" target="_blank">University Department of Commerce and Business Administration</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="{{ route('research') }}">Research</a></li>
                                <li><a href="{{ route('scholarships') }}">Scholarships</a></li>
                                <li><a href="#">Amenities</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('infrastructure') }}">Infrastructure</a></li>
                                        <li><a href="{{ route('roWater') }}">Reverse Osmosis(RO)</a></li>
                                        <li><a href="{{ route('survelliance') }}">24x7 Survelliance</a></li>
                                        <li><a href="{{ route('computerLabs') }}">Computer Labs</a></li>
                                        <li><a href="{{ route('hostels') }}">Hostels</a></li>
                                        <li><a href="{{ route('library') }}">Library</a></li>
                                        <li><a href="{{ route('physicalEducation') }}">Department of Physical Education</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ route('examinations') }}">Examination</a></li>
                                <!-- <li><a href="{{ route('alumni') }}">Alumni</a></li> -->
                                <li><a href="{{ route('contactUs') }}">Contact Us</a></li>
                            </ul>
                        </nav>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
