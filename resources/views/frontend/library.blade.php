@extends('frontend.includes.master')
@section('style')
<style>
    .library-header {
        background: linear-gradient(rgba(52, 152, 219, 0.9), rgba(41, 128, 185, 0.9)), url('{{asset('frontend/img/slider/1.jpg')}}');
        background-size: cover;
        padding: 60px 40px;
        border-radius: 15px;
        color: #fff;
        margin-bottom: 40px;
        text-align: center;
    }
    .stat-card {
        background: #fff;
        padding: 25px;
        border-radius: 12px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        text-align: center;
        margin-bottom: 30px;
    }
    .stat-card h2 {
        color: #3498db;
        font-weight: 800;
        margin-bottom: 5px;
    }
    .stat-card p {
        margin: 0;
        font-weight: 600;
        color: #888;
        text-transform: uppercase;
        font-size: 12px;
    }
    .journal-list {
        column-count: 2;
        column-gap: 30px;
        list-style: none;
        padding: 0;
    }
    .journal-item {
        padding: 8px 0;
        border-bottom: 1px solid #eee;
        font-size: 14px;
        color: #555;
    }
    @media (max-width: 768px) {
        .journal-list { column-count: 1; }
    }
</style>
@endsection
@section('content')
<!--Breadcrumb Banner Area Start-->
@include('frontend.includes.breadcrumb', ['title' => 'LIBRARY'])
<!--End of Breadcrumb Banner Area-->

<!--About Page Area Start-->
<div class="about-page-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="library-header">
                    <h2>A Bookworm’s Paradise</h2>
                    <p>The users retrieve information on-line through the campus network.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-12">
                <div class="stat-card">
                    <h2>40,000+</h2>
                    <p>Books in Collection</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="stat-card">
                    <h2>5.2L+</h2>
                    <p>University Library Access</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="stat-card">
                    <h2>12 Hrs</h2>
                    <p>Daily Operations (9am-9pm)</p>
                </div>
            </div>
        </div>
        <div class="row section-padding-top">
            <div class="col-lg-12">
                <div class="section-title-wrapper">
                    <div class="section-title">
                        <h3><i class="fa fa-book"></i> Library Journals & Periodicals</h3>
                    </div>
                </div>
                <ul class="journal-list">
                    <li class="journal-item">Business World</li>
                    <li class="journal-item">Chartered Accountant</li>
                    <li class="journal-item">Economic and Political Weekly</li>
                    <li class="journal-item">Economic Times</li>
                    <li class="journal-item">Financial Express</li>
                    <li class="journal-item">Global Analyst</li>
                    <li class="journal-item">Indian Journal of Accounting</li>
                    <li class="journal-item">Indian Journal of Commerce</li>
                    <li class="journal-item">Indian Journal of Finance</li>
                    <li class="journal-item">Journal of Accounting and Finance</li>
                    <li class="journal-item">Management Accounting</li>
                    <li class="journal-item">Osmania Journal of International Business</li>
                    <li class="journal-item">Harvard Business Review</li>
                    <li class="journal-item">Journal of Consumer Research</li>
                    <li class="journal-item">Journal of Marketing</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--End of About Page Area-->
@endsection
