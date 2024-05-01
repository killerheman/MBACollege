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
            <div class="col-md-6">
                <div class="section-title-wrapper">
                    <div class="section-title">
                        <h3>Vision</h3>
                        <p></p>
                    </div>
                </div>
                <p>
                    Transforming the Department into an institution of new millennium by developing cutting-edge academics, infra supports and delivery system for making people of the new age global society.
                </p>
            </div>
            <div class="col-md-6">
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
    </div>

</div>
<!--End of About Page Area-->


@endsection
