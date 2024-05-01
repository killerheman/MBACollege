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

                    <div class="about-us">
                        <span>Established in 1972, the Department offering traditional (M.Com.) as well as modern (MBA) academic programs, besides Ph.D. & D. Litt. Programs in Commerce and Management.
                        </span>
                        <span>In 1991, in globalized socio-economic environment, it started Management education. </span>
                        <span>Department, having separate campus and adequate space, has ample scope for academic expansion and development.</span>
                        <span>By virtue of its products, Department is pan-India acclaimed.</span>
                        <span>In funds mobilization, Department is at the top in the University.</span>
                        <span>In near future, it has its agenda to erect a new building out of self-generated funds and start new academic programs in tune with NEP-2020.
                        </span>
                        <span>Developing research ecosystem for cutting edge business researches is yet  another agenda of the Department.
                        </span>
                    </div>

                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-12">
                <div class="skill-image">
                    <img src="{{ asset('frontend/img/banner/6.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title-wrapper">
                    <div class="section-title">
                        <h3>Our Objectives</h3>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-12 col-12">
                <div class="about-text-container">

                    <div class="about-us">
                        <span>To build academic capacity of learners and make them skilled professionals.</span>
                        <span>To build employability traits in the pass outs.</span>
                        <span>To equip learners with professional values</span>
                        <span>To provide learners real life business exposure</span>
                        <span>To teach and train learners to be the new breed of entrepreneur cluster.</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!--End of About Page Area-->


@endsection
