@extends('frontend.includes.master')
@section('style')
<style>
    .staff-list {
        list-style: none;
        padding: 0;
    }
    .staff-item {
        background: #fff;
        margin-bottom: 10px;
        padding: 15px 20px;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        display: flex;
        align-items: center;
        transition: transform 0.2s;
    }
    .staff-item:hover {
        transform: translateX(10px);
        background: #fcfdfe;
    }
    .staff-icon {
        width: 35px;
        height: 35px;
        background: #eef7ff;
        color: #3498db;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 15px;
        font-size: 14px;
    }
    .staff-name {
        font-weight: 600;
        color: #333;
    }
    .staff-designation {
        color: #777;
        margin-left: auto;
        font-size: 13px;
        font-style: italic;
    }
</style>
@endsection
@section('content')
<!--Breadcrumb Banner Area Start-->
@include('frontend.includes.breadcrumb', ['title' => 'OFFICE STAFF – NON-TEACHING'])
<!--End of Breadcrumb Banner Area-->

<!--About Page Area Start-->
<div class="about-page-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title-wrapper">
                    <div class="section-title">
                        <h3><i class="fa fa-id-card-o" aria-hidden="true"></i> OFFICE STAFF – NON-TEACHING</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <ul class="staff-list">
                    <li class="staff-item">
                        <div class="staff-icon"><i class="fa fa-user"></i></div>
                        <span class="staff-name">Mrs.A.Suhasini</span>
                        <span class="staff-designation">Superintendent</span>
                    </li>
                    <li class="staff-item">
                        <div class="staff-icon"><i class="fa fa-user"></i></div>
                        <span class="staff-name">Mr.P.Bhooma Rao</span>
                        <span class="staff-designation">Senior Assistant</span>
                    </li>
                    <li class="staff-item">
                        <div class="staff-icon"><i class="fa fa-user"></i></div>
                        <span class="staff-name">Mr.A. Venkata Ramana</span>
                        <span class="staff-designation">Junior Assistant</span>
                    </li>
                    <li class="staff-item">
                        <div class="staff-icon"><i class="fa fa-user"></i></div>
                        <span class="staff-name">Mr.B.Venkatesh</span>
                        <span class="staff-designation">Junior Assistant</span>
                    </li>
                    <li class="staff-item">
                        <div class="staff-icon"><i class="fa fa-user"></i></div>
                        <span class="staff-name">J.Ajay Kumar</span>
                        <span class="staff-designation">Junior Assistant</span>
                    </li>
                    <li class="staff-item">
                        <div class="staff-icon"><i class="fa fa-user"></i></div>
                        <span class="staff-name">Ch.Mahathi</span>
                        <span class="staff-designation">Junior Assistant</span>
                    </li>
                    <li class="staff-item">
                        <div class="staff-icon"><i class="fa fa-user"></i></div>
                        <span class="staff-name">A.Ajay Kumar</span>
                        <span class="staff-designation">Junior Assistant</span>
                    </li>
                    <li class="staff-item">
                        <div class="staff-icon"><i class="fa fa-user"></i></div>
                        <span class="staff-name">Mrs.K.Padma</span>
                        <span class="staff-designation">Caretaker</span>
                    </li>
                    <li class="staff-item">
                        <div class="staff-icon"><i class="fa fa-user"></i></div>
                        <span class="staff-name">Mr.M.R Srinivas</span>
                        <span class="staff-designation">Junior Assistant</span>
                    </li>
                    <li class="staff-item">
                        <div class="staff-icon"><i class="fa fa-user"></i></div>
                        <span class="staff-name">Mrs. Akhila</span>
                        <span class="staff-designation">Junior Asst.-cum- Programmer</span>
                    </li>
                    <li class="staff-item">
                        <div class="staff-icon"><i class="fa fa-user"></i></div>
                        <span class="staff-name">Mrs. Lakshmi Mythili</span>
                        <span class="staff-designation">Junior Asst.</span>
                    </li>
                    <li class="staff-item">
                        <div class="staff-icon"><i class="fa fa-user"></i></div>
                        <span class="staff-name">Mrs.K.Sarala</span>
                        <span class="staff-designation">Junior Assistant</span>
                    </li>
                    <li class="staff-item">
                        <div class="staff-icon"><i class="fa fa-user"></i></div>
                        <span class="staff-name">Mr.Adbul Saleem</span>
                        <span class="staff-designation">Office-Subordinate</span>
                    </li>
                    <li class="staff-item">
                        <div class="staff-icon"><i class="fa fa-user"></i></div>
                        <span class="staff-name">Mr.G.Shiva Kumar</span>
                        <span class="staff-designation">Driver/O.S</span>
                    </li>
                    <li class="staff-item">
                        <div class="staff-icon"><i class="fa fa-user"></i></div>
                        <span class="staff-name">Mrs. M. Anuradha</span>
                        <span class="staff-designation">Office-Subordinate</span>
                    </li>
                    <li class="staff-item">
                        <div class="staff-icon"><i class="fa fa-user"></i></div>
                        <span class="staff-name">Mr.Javed</span>
                        <span class="staff-designation">Office-Subordinate</span>
                    </li>
                    <li class="staff-item">
                        <div class="staff-icon"><i class="fa fa-user"></i></div>
                        <span class="staff-name">Mr. Venkataramana</span>
                        <span class="staff-designation">Watchman</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--End of About Page Area-->
@endsection
