@extends('frontend.includes.master')
@section('style')

@endsection
@section('content')
<!--Breadcrumb Banner Area Start-->
@include('frontend.includes.breadcrumb', ['title' => 'VISION MISSION'])
<!--End of Breadcrumb Banner Area-->

<!--About Page Area Start-->
<div class="about-page-area section-padding">

    <div class="container">
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="section-title-wrapper">
                    <div class="section-title">
                        <h3>Vision</h3>
                        <p></p>
                    </div>
                </div>
                <p>
                    Transforming the Department into an institution of new millennium by developing cutting-edge academics, infra supports and delivery system for making people of the new age global Society.
                </p>
            </div>
            <div class="col-md-6 mb-4">
                <div class="section-title-wrapper">
                    <div class="section-title">
                        <h3>Mission</h3>
                        <p></p>
                    </div>
                </div>
                <p>
                    Making skillful, employable, professionally sound and value-committed people of contemporary times.
                </p>
            </div>
        </div>
        
        <div class="row mt-4">
            <div class="col-md-12">
                <div class="section-title-wrapper">
                    <div class="section-title">
                        <h3>Objectives</h3>
                        <p></p>
                    </div>
                </div>
                <ul class="about-us" style="list-style-type: disc; padding-left: 20px;">
                    <li style="margin-bottom: 10px;">To build academic capacity of learners and make them skilled professionals;</li>
                    <li style="margin-bottom: 10px;">To develop employability traits in the pass outs;</li>
                    <li style="margin-bottom: 10px;">To equip learners with professional values;</li>
                    <li style="margin-bottom: 10px;">To provide learners real life business exposure and;</li>
                    <li style="margin-bottom: 10px;">To reach and train learners to be the new breed of entrepreneur cluster.</li>
                </ul>
            </div>
        </div>
    </div>

</div>
<!--End of About Page Area-->


@endsection
