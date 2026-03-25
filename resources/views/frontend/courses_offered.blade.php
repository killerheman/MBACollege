@extends('frontend.includes.master')
@section('style')
<style>
    .course-card {
        background: #fff;
        padding: 30px;
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.05);
        margin-bottom: 30px;
        border-top: 5px solid #3498db;
        transition: transform 0.3s;
    }
    .course-card:hover {
        transform: translateY(-10px);
    }
    .course-card h4 {
        color: #3498db;
        font-weight: 700;
        margin-bottom: 20px;
    }
    .course-icon {
        font-size: 40px;
        color: #3498db;
        margin-bottom: 20px;
    }
    .course-desc {
        line-height: 1.8;
        color: #666;
    }
</style>
@endsection
@section('content')
<!--Breadcrumb Banner Area Start-->
@include('frontend.includes.breadcrumb', ['title' => 'COURSES OFFERED'])
<!--End of Breadcrumb Banner Area-->

<!--About Page Area Start-->
<div class="about-page-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title-wrapper">
                    <div class="section-title">
                        <h3><i class="fa fa-graduation-cap" aria-hidden="true"></i> COURSES OFFERED</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="about-text-container mb-5">
                    <p class="lead text-muted">The college presently offers four Post Graduate courses and one Diploma course, which are aimed to instill a spirit of inquiry, prompt the power of thinking, bestow both analytical and experimental abilities, and elicit interest in research.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="course-card text-center">
                    <div class="course-icon"><i class="fa fa-book"></i></div>
                    <h4>MASTER OF COMMERCE</h4>
                    <p class="course-desc">A comprehensive full-time programme designed for students pursuing careers in Banking, Finance, and Accountancy. Focuses on advanced commercial studies and research.</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <div class="course-card text-center">
                    <div class="course-icon"><i class="fa fa-briefcase"></i></div>
                    <h4>MASTER OF BUSINESS MANAGEMENT</h4>
                    <p class="course-desc">A premium MBA programme that nurtures entrepreneurship and management skills. Prepares students for leadership roles in Human Resources, Marketing, and Finance sectors.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End of About Page Area-->
@endsection
