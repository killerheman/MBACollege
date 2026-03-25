@extends('frontend.includes.master')
@section('style')
<style>
    .succession-table {
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        margin-bottom: 30px;
    }
    .succession-table thead {
        background: linear-gradient(45deg, #3498db, #2980b9);
        color: #fff;
    }
    .succession-table th {
        border: none;
        padding: 15px;
        font-weight: 600;
        text-transform: uppercase;
    }
    .succession-table td {
        padding: 15px;
        vertical-align: middle;
        border-bottom: 1px solid #eee;
    }
    .dept-title {
        color: #3498db;
        border-bottom: 2px solid #3498db;
        display: inline-block;
        padding-bottom: 5px;
        margin-bottom: 20px;
        font-weight: 700;
    }
</style>
@endsection
@section('content')
<!--Breadcrumb Banner Area Start-->
@include('frontend.includes.breadcrumb', ['title' => 'SUCCESSION LIST OF HEADS'])
<!--End of Breadcrumb Banner Area-->

<!--About Page Area Start-->
<div class="about-page-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title-wrapper">
                    <div class="section-title">
                        <h3><i class="fa fa-users" aria-hidden="true"></i> SUCCESSION LIST OF HEADS</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <h4 class="dept-title">University Department of Commerce and Business Administration</h4>
                <div class="table-responsive">
                    <table class="table succession-table">
                        <thead>
                            <tr>
                                <th style="width: 80px;">S.No</th>
                                <th>Name of the Head</th>
                                <th>From</th>
                                <th>To</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Dr. R. K. Sah</td>
                                <td>01 Jan, 2026</td>
                                <td>……………..</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Dr. D. P. Gupta</td>
                                <td>01 Oct, 2023</td>
                                <td>31 Dec, 2025</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Dr. A. K. Singh</td>
                                <td>01 Aug, 2021</td>
                                <td>30 Sep, 2023</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Dr. H. K. Singh</td>
                                <td>01 Aug, 2018</td>
                                <td>31 July, 2021</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Dr. B. B. L. Das</td>
                                <td>01 Aug, 2015</td>
                                <td>31 July, 2018</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Dr. H. C. Prasad</td>
                                <td>08 Dec, 2014</td>
                                <td>31 July, 2015</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>Dr. L. P. Singh</td>
                                <td>03 Feb, 2012</td>
                                <td>07 Dec, 2014</td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>Dr. I. C. Verma</td>
                                <td>02 Feb, 2009</td>
                                <td>02 Feb, 2012</td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>Dr. S. M. Jha</td>
                                <td>01 Jan, 2006</td>
                                <td>01 Feb, 2009</td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>Dr. G. K. Jha</td>
                                <td>01 Feb, 2000</td>
                                <td>31 Dec, 2005</td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>Dr. S. Akram</td>
                                <td>01 Sep, 1990</td>
                                <td>31 Jan, 2000</td>
                            </tr>
                            <tr>
                                <td>12</td>
                                <td>Dr. M. C. Govil</td>
                                <td>01 Feb, 1986</td>
                                <td>31 Aug, 1990</td>
                            </tr>
                            <tr>
                                <td>13</td>
                                <td>Dr. Gopal Lal</td>
                                <td>22 June, 1975</td>
                                <td>31 Jan, 1986</td>
                            </tr>
                            <tr>
                                <td>14</td>
                                <td>Dr. K. N. Srivastava</td>
                                <td>05 Aug, 1972</td>
                                <td>21 June, 1975</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End of About Page Area-->
@endsection
