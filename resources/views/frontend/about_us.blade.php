@extends('frontend.includes.master')
@section('style')

@endsection
@section('content')
<!--Breadcrumb Banner Area Start-->
@include('frontend.includes.breadcrumb', ['title' => 'ABOUT US'])
<!--End of Breadcrumb Banner Area-->

<!--About Page Area Start-->
<div class="about-page-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-12">
                <div class="about-text-container">

                    <div class="about-us text-justify">
                        <p>The University Department of Commerce and Business Administration is a pioneering Institution in Bihar. The Post Graduate teaching in Commerce was started long back in 1963. Later, the Department started MBA Programme in 1991. The Department over the years has carved out a distinct place for itself in the galaxy of Commerce and Management Institutions. The Department has the credibility of hosting All India Commerce Conference of Indian Commerce Association (ICA) twice; in 1984 and in 1998. Besides, the Department has a long tradition of organizing mega academic events. Significantly, it had organized a quite fruitful National Workshop on Management of Universities in 2005 and National Seminars in 2016 and 2021. In recent past, Department has started a new tradition of organizing International Conferences every year and so far it has successfully organized International Conferences of contemporary importance in the year 2017, 2018, 2020 and 2021. Meanwhile, National Conferences and Workshop have been organized successfully and the present National Conference on “Business Research in Contemporary Times” is being organized on the initiatives of IQAC of the parent University and its Unit in the Department, DQAC.</p>
                        
                        <p>The Management Programme running under the agies of University Department of Commerce and Business Administration is conducted in a Lush Green Campus. It has an excellent ambience and dedicated to produce skillful, employable, professionally sound and value-committed people of contemporary times. The people working in this institution have been striving to make it a centre of excellence with their personal touch. In July 2004, the Department was shifted to a new building namely ‘Prabandhan Bhawan’ from ‘Nargauna Palace’ due to rapid growth of the Department.</p>
                    </div>

                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-12">
                <div class="skill-image">
                    <img src="{{ asset('frontend/img/latest/about_us.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </div>

   
        
    </div>
</div>
<!--End of About Page Area-->


@endsection
