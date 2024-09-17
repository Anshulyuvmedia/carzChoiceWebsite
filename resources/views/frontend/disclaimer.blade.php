@extends('frontend.layouts.website')
@section('content')
@section('title', 'Disclaimer')

<!-- =-=-=-=-=-=-= Breadcrumb =-=-=-=-=-=-= -->
<div class="page-header-area-2 gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="small-breadcrumb">
                    <div class="breadcrumb-link">
                        <ul>
                            <li><a href="/">Home </a></li>
                            <li><a class="active" href="#">@yield('title')</a></li>
                        </ul>
                    </div>
                    <div class="header-page">
                        <h1>@yield('title')</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- =-=-=-=-=-=-= Breadcrumb End =-=-=-=-=-=-= -->


<!-- =-=-=-=-=-=-= Main Content Area =-=-=-=-=-=-= -->
<div class="main-content-area clearfix">
    <section class="section-padding no-top gray services-center">
        <div class="container">
            <div class="d-flex justify-content-center text-wrap">
                <p class="text-dark">
                    <strong>Effective Date: 12-Aug-2024</strong><br><br>

                    The information provided on Carzchoice is for general informational purposes only. While we strive to provide accurate and up-to-date content, Carzchoice makes no warranties or representations of any kind, express or implied, about the completeness, accuracy, reliability, suitability, or availability of the information, products, services, or related graphics contained on the website for any purpose. Any reliance you place on such information is therefore strictly at your own risk.<br><br>

                    <strong>Contacting Dealers</strong><br>
                    Carzchoice provides a platform for users to view and compare vehicles, but we do not endorse or recommend any specific dealers. If you choose to directly contact or engage with any dealer listed on our website, please be aware that such interactions are solely between you and the dealer. Carzchoice does not verify the credentials, legitimacy, or practices of the dealers, and we are not responsible for any issues, disputes, or damages that may arise from such interactions.<br><br>

                    <strong>No Liability</strong><br>
                    Under no circumstances will Carzchoice be liable for any loss or damage, including but not limited to, indirect or consequential loss or damage, arising out of or in connection with the use of this website or the interactions between users and dealers. It is the user’s responsibility to exercise due diligence and make informed decisions when dealing with any third parties.<br><br>

                    <strong>Contact Us</strong><br>
                    If you have any questions or concerns regarding this disclaimer, please feel free to contact us at:<br><br>

                    <strong class="fs-3 fw-bold">Email:</strong> support@carchoice.com<br>
                    <strong class="fs-3 fw-bold">Phone:</strong> +91-9315510156<br>
                    <strong class="fs-3 fw-bold">Address:</strong> Ajmer,Rajasthan<br>
                </p>
            </div>
        </div>
    </section>

</div>
@endsection
