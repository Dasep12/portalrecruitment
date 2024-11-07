<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Title Of Site -->
    <!-- HTML Meta Tags -->
    <title>Rekrutmen Bonecom Tricom</title>
    <meta name="description" content="Rekrutmen SSO Infomedia">

    <!-- Google / Search Engine Tags -->
    <meta itemprop="name" content="Rekrutmen Bonecom Tricom ">
    <meta itemprop="description" content="Rekrutmen SSO Infomedia">
    <meta itemprop="image" content="{{ asset('/assets/frontend/icons/icon_fav.png') }}">

    <!-- Facebook Meta Tags -->

    <meta property="og:type" content="website">
    <meta id="og-title" property="og:title" content="Rekrutmen SSO Infomedia">
    <meta property="og:description" content="Optimis dan bersikap positif dalam menatap masa depan yang lebih baik bersama kami">
    <meta property="og:image" content="{{ asset('/assets/frontend/img/icon_fav.png') }}" />
    <meta property="og:image:secure_url" content="{{ asset('/assets/frontend/img/icon_fav.png') }}" />
    <meta property="og:image:width" content="340" />
    <meta property="og:image:height" content="340" />
    <meta property="og:image" content="{{ asset('/assets/frontend/img/icon_fav.png') }}">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Rekrutmen SSO Infomedia">
    <meta name="twitter:description" content="Rekrutmen SSO Infomedia">
    <meta name="twitter:image" content="{{ asset('/assets/frontend/icons/icon_fav.png') }}">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="google-signin-client_id" content="965698850791-8v136niflvlk4dar1c180hm7tu2gr253.apps.googleusercontent.com">

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/assets/frontend/img/icon_fav.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/assets/frontend/img/icon_fav.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/assets/frontend/img/icon_fav.png') }}">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!-- CSS Plugins -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/loading.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/frontend/bootstrap4/bootstrap.min.css') }}" crossorigin="anonymous">
    <link href="{{ asset('/assets/frontend/plugins/toastr/toastr.min.css') }}" rel="stylesheet">

    <!-- CSS Custom -->
    <link href="{{ asset('/assets/frontend/css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/backend/vendors/nprogress/nprogress.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/backend/vendors/bootstrap-sweetalert/dist/sweetalert.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/frontend/animsition/animsition.css') }}" type="text/css" />


    <link rel="stylesheet" href="{{ asset('assets/frontend/css/custom.css') }}" type="text/css" />

</head>


<script type="text/javascript" src="{{ asset('/assets/frontend/js/jqrylib.min.js') }}"></script>
<script src="{{ asset('/assets/frontend/animsition/animsition.js') }}"></script>


<body>

    <div class="loading_tg">
        <div style="bottom:0;left:0;overflow:hidden;position:absolute;right:0;top:0">
            <div style="animation:a-h .5s 1.25s 1 linear forwards,a-nt .6s 1.25s 1 cubic-bezier(0,0,.2,1);background:#eee;border-radius:50%;height:800px;left:50%;margin:-448px -400px 0;position:absolute;top:50%;transform:scale(0);width:800px">
            </div>
        </div>
        <div style="height:100%;text-align:center;position: relative;top: 35%;">
            <div id="logo" style="height:128px;margin:0 auto;position:relative;width:200px;background-image: url(<?= asset('/assets/frontend/img/bti_logo_hires_bw.gif') ?> );background-size: contain;background-repeat: no-repeat;background-position: center;">
            </div>

            <div id="loadingProgressG">
                <div id="loadingProgressG_1" class="loadingProgressG"></div>
            </div>

            <div style="animation:a-s .25s 1.25s 1 forwards;opacity:0;margin-top: 20px;" class="msg">Harap Tunggu&hellip;</div>
        </div>
    </div>


    <style media="screen">
        .carousel {
            background: #a8a8a8;
        }

        .carousel-indicators {
            justify-content: center !important;
            margin-right: 0px !important;
        }

        .carousel-item {
            height: 100vh;
        }

        .carousel-caption {
            top: 30% !important;
        }

        .carousel-control-next,
        .carousel-control-prev {
            display: flex !important;
        }

        .title-carousel-small {
            padding: 10px;
            line-height: 2;
        }

        .title-carousel-big {
            font-weight: bold;
            color: red;
            padding: 10px;
            letter-spacing: 2px;
        }

        .card-project {
            text-align: left;
            padding: 20px;
        }

        .height-250 {
            height: 250px;
        }

        .hr-job-specialist {
            border-top: 0px solid white;
        }

        .card-project-0:hover {
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://recruit.infomedia.co.id/assets/images/stream/0.jpeg');
            background-size: cover;
            color: white;
        }

        .card-project-1:hover {
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://recruit.infomedia.co.id/assets/images/stream/1.jpeg');
            background-size: cover;
            color: white;
        }

        .card-project-2:hover {
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://recruit.infomedia.co.id/assets/images/stream/2.jpeg');
            background-size: cover;
            color: white;
        }

        .card-project-3:hover {
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://recruit.infomedia.co.id/assets/images/stream/3.jpeg');
            background-size: cover;
            color: white;
        }

        .card-project-4:hover {
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://recruit.infomedia.co.id/assets/images/stream/4.jpeg');
            background-size: cover;
            color: white;
        }

        .card-project-5:hover {
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://recruit.infomedia.co.id/assets/images/stream/5.jpeg');
            background-size: cover;
            color: white;
        }

        .card-project-6:hover {
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://recruit.infomedia.co.id/assets/images/stream/6.jpeg');
            background-size: cover;
            color: white;
        }

        .card-project-7:hover {
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://recruit.infomedia.co.id/assets/images/stream/7.jpeg');
            background-size: cover;
            color: white;
        }

        .card-project-8:hover {
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://recruit.infomedia.co.id/assets/images/stream/8.jpeg');
            background-size: cover;
            color: white;
        }

        .card-project-9:hover {
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://recruit.infomedia.co.id/assets/images/stream/9.jpeg');
            background-size: cover;
            color: white;
        }

        .card-project-10:hover {
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://recruit.infomedia.co.id/assets/images/stream/10.jpeg');
            background-size: cover;
            color: white;
        }

        .card-project-11:hover {
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://recruit.infomedia.co.id/assets/images/stream/11.jpeg');
            background-size: cover;
            color: white;
        }

        .card-project {
            color: black;
            cursor: pointer;
        }

        .head-panel {
            color: red;
        }

        .card-list-vacancy {
            margin: 10px 0px;
            background: whitesmoke;
            padding: 10px 0px;
            border-radius: 10px;
        }
    </style>

    <div class="container-fluid animsition" style="display:flex;padding:0px" data-animsition-in-class="fade-in"
        data-animsition-in-duration="1000"
        data-animsition-out-class="fade-out"
        data-animsition-out-duration="800">
        <style media="screen">
            .socmed {
                cursor: pointer;
            }

            .list-left-menu {
                padding: 10px 0px;
                cursor: pointer;
                /* border-bottom: solid 1px gainsboro; */
            }

            .list-left-menu .nav-link {
                color: black;
                font-weight: bold;
                font-size: 20px;
            }
        </style>

        <div id="navigation_menu_test" class="d-lg-block d-none" style="background-image: linear-gradient( rgba(255, 255, 255, 0.92), rgba(255, 255, 255, 0.82) ), url('https://recruit.infomedia.co.id/assets/frontend/background-menu-left.jpg');background-size:cover;height:100%;text-align: center;height: 100vh;width:0px;z-index:0;border-right: solid 2px #49c5b6; opacity: 0;color: black">
            <ul style="list-style: none;padding-left: 0px;">
                <li class="list-left-menu"><a class="nav-link" href="/" style="color: black;">Beranda</a></li>
                <li class="list-left-menu">
                    <p style="margin:0px" class="nav-link" onclick="detail_tentang_sso()" style="color: black;">Tentang HR</p>
                </li>
                <li class="list-left-menu"><a class="nav-link" href="{{ url('/') }}" style="color: black;">Lowongan</a></li>
                <li class="list-left-menu"><a class="nav-link" href="#" style="color: black;">FAQ</a></li>
            </ul>
        </div>

        <div class="d-lg-block d-none" style="background: #A80807;padding: 0px 30px 0px 30px;text-align: center;height: 100vh;width:100px">
            <div class="row" style="width: 67px;">
                <div class="col-md-12 my-auto" style="height: 15vh;position: relative;display: grid;">
                    <div style="margin:auto !important;cursor:pointer" id="menu_navbar" onclick="navigate_menu(this)">
                        <div class="bar1"></div>
                        <div class="bar2"></div>
                        <div class="bar3"></div>
                    </div>

                    <input type="text" id="bool_menu" value="0" style="display:none">
                    <input type="text" id="bool_menu_company" value="0" style="display:none">
                    <input type="text" id="bool_menu_job_by_stream" value="0" style="display:none">
                    <input type="text" id="bool_menu_about_sso" value="0" style="display:none">
                    <input type="text" id="bool_menu_video" value="0" style="display:none">
                    <input type="text" id="bool_menu_detail_carousel" value="0" style="display:none">
                    <input type="text" id="bool_menu_register" value="0" style="display:none">
                </div>
                <div class="col-md-12 my-auto" style="height: 55vh;position: relative;display:grid">
                    <ul class="nav nav-tabs-custom my-auto" style="width:35px">
                        <li role="presentation"><label>REKRUTMEN BONECOM TRICOM GROUP</label></li>
                    </ul>
                </div>
                <div class="col-md-12" style="height: 30vh;position: relative;display: grid;padding:20px 15px">

                    <a style="width: inherit;" target="_blank" href="https://www.instagram.com/sharedvis.infomedia/" rel="noopener noreferrer">
                        <img class="socmed" data-toggle="tooltip" data-placement="right" title="Instagram" src="https://recruit.infomedia.co.id/assets/frontend/icons/socialmedia/instagram.png" alt="" style="width: inherit;"></a>

                    <a style="width: inherit;" target="_blank" href="https://www.facebook.com/profile.php?id=100018385326120&epa=SEARCH_BOX" rel="noopener noreferrer">
                        <img class="socmed" data-toggle="tooltip" data-placement="right" title="Facebook" src="https://recruit.infomedia.co.id/assets/frontend/icons/socialmedia/facebook.png" alt="" style="width: inherit;"></a>

                    <a style="width: inherit;" target="_blank" href="https://www.linkedin.com/in/sharedvis-infomedia-138638145/" rel="noopener noreferrer">
                        <img class="socmed" data-toggle="tooltip" data-placement="right" title="LinkedIn" src="https://recruit.infomedia.co.id/assets/frontend/icons/socialmedia/linkedin.png" alt="" style="width: inherit;"></a>

                    <a style="width: inherit;" target="_blank" href="https://twitter.com/SharedvisOps" rel="noopener noreferrer">
                        <img class="socmed" data-toggle="tooltip" data-placement="right" title="Twitter" src="https://recruit.infomedia.co.id/assets/frontend/icons/socialmedia/twitter.png" alt="" style="width: inherit;"></a>
                </div>
            </div>
        </div>

        <script type="text/javascript">
            $(document).ready(function() {
                $('[data-toggle="tooltip"]').tooltip()
            })
        </script>

        <div style="padding:0px;height: 100vh;overflow-y: scroll;width:100%">

            <div id="navigation_menu_company" class="navigation_menu_company" style="height: 100vh;width: 0px;position: fixed;z-index: 0;opacity:0">
                <div class="container-fluid container-menu-company" style="width:100%;background: white;height:100vh;position:absolute">
                    <div class="row">
                        <div class="col-lg-3 col-md-5 section-left-banner left-menu-company" style="background-image:linear-gradient( rgba(255, 255, 255, 0.92), rgba(255, 255, 255, 0.82) ), url('https://recruit.infomedia.co.id/assets/frontend/background-menu-left.jpg');background-size: cover;text-align: right; background-position:right;">
                            <div onclick="detail_company()" style="display: flex;color: red" class="my-auto">
                                <i id="btn_close_detail_company" style="font-size: 40px;font-weight: bold;display:none" class="material-icons my-auto">close</i>
                                <span class="my-auto">CLOSE</span>
                            </div>
                            <img id="logo_company_modal" src="" style="width: inherit;" />
                            <br>
                            <hr><br>
                            <b>Website</b>
                            <p id="website_company_modal">-</p>
                            <b>Industry</b>
                            <p id="industry_company_modal">-</p>
                            <br><b>mail</b>
                            <p id="email_company_modal">-</p>
                            <br><b>Phone</b>
                            <p id="phone_company_modal">-</p>
                            <br><b>alamat</b>
                            <p id="alamat_company_modal">-</p>
                        </div>
                        <div style="background:white;" class="section-left-banner col-md-7 col-lg-9 right-menu-company">
                            <h1 id="name_company_modal">-</h1>
                            <hr>
                            <div id="description_short_company_modal"></div>
                            <div style="display:none" id="description_company_modal"></div>

                            <div>
                                <div class="row" style="margin: 50px 0px;border-radius: 5px;padding: 10px 0px;background-image: linear-gradient( rgba(255, 0, 0, 0.57), rgba(255, 0, 0, 0.57)), url('https://recruit.infomedia.co.id/assets/frontend/background-menu-left.jpg');background-position: right;background-size: cover;color: white;font-weight: bold;margin-bottom: 40px;">
                                    <div class="col-md-6">
                                        <h4 id="lowongan_tersedia">-</h4>
                                        <p>Lowongan Kerja tersedia</p>
                                    </div>
                                </div>
                            </div>

                            <div id="list_vacancy_by_company"></div>
                            <div class="col-sm-12" style="margin-bottom:20px">
                                <div id='pagination'></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="navigation_menu_job_by_stream" class="navigation_menu_job_by_stream " style="height: 100vh;width: 0px;position: fixed;z-index: 0;opacity:0">
                <div class="container-fluid" style="width:100%;background: white;height:100vh;position:absolute">
                    <div class="row">
                        <div class="col-lg-3 col-md-5 section-left-banner d-lg-block d-md-block d-none" style="background-image:linear-gradient( rgba(255, 255, 255, 0.92), rgba(255, 255, 255, 0.82) ), url('https://recruit.infomedia.co.id/assets/frontend/background-menu-left.jpg');background-size: cover;padding: 50px;text-align: right; background-position:right; height:100vh">

                        </div>
                        <div style="background:white;height:100vh;overflow:scroll" class="section-left-banner col-md-7 col-lg-9 desc_job_by_stream">
                            <div onclick="navigation_menu_job_by_stream()" style="display: flex;color: red;margin-bottom:20px">
                                <i id="btn_close_job_stream" style="font-size: 40px;font-weight: bold;display:none" class="material-icons my-auto">close</i>
                                <span class="my-auto">CLOSE</span>
                            </div>
                            <h1 id="name_stream_detail">-</h1>
                            <div>
                                <div class="row" style="margin: 50px 0px;border-radius: 5px;padding: 10px 0px;background-image: linear-gradient( rgba(255, 0, 0, 0.57), rgba(255, 0, 0, 0.57)), url('https://recruit.infomedia.co.id/assets/frontend/background-menu-left.jpg');background-position: right;background-size: cover;color: white;font-weight: bold;margin-bottom: 40px;">
                                    <div class="col-md-6">
                                        <h4 id="lowongan_tersedia_stream">-</h4>
                                        <p>Lowongan Kerja tersedia</p>
                                    </div>
                                </div>
                            </div>

                            <div id="list_vacancy_by_stream"></div>
                            <div class="col-sm-12" style="margin-bottom:20px">
                                <div id='pagination_stream'></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="navigation_about_sso" class="navigation_about_sso" style="height: 100vh;width: 0px;position: fixed;z-index: 0;opacity:0">
                <div class="container-fluid" style="width:100%;background: white;height:100vh;position:absolute">
                    <div class="row">
                        <div class="col-lg-3 col-md-5 section-left-banner d-lg-block d-md-block d-none" style="background-image:linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),url('https://recruit.infomedia.co.id/assets/frontend/images/background-sso.jpg');background-size: cover;padding: 50px;text-align: right; background-position:center; height:100vh">
                        </div>

                        <div style="background:white;height:100vh;overflow:scroll" class="section-left-banner col-md-7 col-lg-9 right-about-sso">
                            <div onclick="detail_tentang_sso()" style="display: flex;color: red" class="my-auto">
                                <i id="btn_close_about_sso" style="font-size: 40px; font-weight: bold;" class="material-icons my-auto">close</i>
                                <span class="my-auto">CLOSE</span>
                            </div>

                            <br>
                            <img src="https://recruit.infomedia.co.id//assets/frontend/Logo_Infomedia_color.png" style="width: 200px;">
                            <br>
                            <div style="padding-left: 20px;margin-top: 30px;">
                                <h2>Rekrutmen Infomedia</h2>
                                <hr>
                                <div class="row">
                                    <div class="col-md-4" style="padding:10px">
                                        <div style="background: whitesmoke;padding: 20px 10px;min-height:220px">
                                            <b>MANAGE OPERATION HUMAN RESOURCE
                                            </b><br>
                                            <ul>
                                                <li>Digital Payroll and Administration - Digital Recruiment</li>
                                                <li>Digital Learning</li>
                                                <li>Corporate Travel Management</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-4" style="padding:10px">
                                        <div style="background: whitesmoke;padding: 20px 10px;min-height:220px">
                                            <b>MANAGE OPERATION FINANCE &amp; ACCOUNTING</b>
                                            <ul>
                                                <li>Invoice to Pay(I2P)</li>
                                                <li>Invoice to Cash(I2C)</li>
                                                <li>Record to Report (R2R) - Tax Accounting</li>
                                                <li>Fixed Asset Accounting</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="col-md-4" style="padding:10px">
                                        <div style="background: whitesmoke;padding: 20px 10px;min-height:220px">
                                            <b>MANAGE OPERATION PROCUREMENT
                                            </b>
                                            <ul>
                                                <li>Procurement Center</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <br>
                        </div>
                    </div>
                </div>
            </div>

            <!-- content -->
            @yield('content')
            <!--  -->

        </div>



    </div>
    </div>


    </div>

    </div>

    </div>



    <!-- floating button help desk  -->

    <style media="screen">
        @media (min-width: 768px) {
            .ul-fixed-action-btn {
                position: fixed;
                bottom: 10px;
                right: 50px;
            }

            .list-icon-float {
                width: 70px;
                height: 70px;
                border-radius: 50%;
                background-position: center !important;
                cursor: pointer;
                border-top-right-radius: 10px;
            }
        }

        @media (max-width: 768px) {
            .ul-fixed-action-btn {
                position: fixed;
                bottom: 10px;
                right: 20px;
            }

            .list-icon-float {
                width: 50px;
                height: 50px;
                border-radius: 50%;
                background-position: center !important;
                cursor: pointer;
                border-top-right-radius: 10px;
            }
        }
    </style>


    <script type="text/javascript">
        $("#btn_helpdesk_open").click(function() {
            $("#btn_helpdesk_open").hide();
            $("#btn_helpdesk_close").show();
            $("#btn_helpdesk_telegram").show(100);
            $("#btn_helpdesk_faq").show(100);
        });
        $("#btn_helpdesk_close").click(function() {
            $("#btn_helpdesk_open").show();
            $("#btn_helpdesk_close").hide();
            $("#btn_helpdesk_telegram").hide(80);
            $("#btn_helpdesk_faq").hide(80);
        });
    </script>
    <!-- floating button help desk  -->





</body>

</html>



<script type="text/javascript" src="https://recruit.infomedia.co.id/assets/frontend/bootstrap4/popper.min.js" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://recruit.infomedia.co.id/assets/frontend/bootstrap4/bootstrap.min.js" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://recruit.infomedia.co.id/assets/frontend/plugins/toastr/toastr.min.js"></script>
<script src="https://recruit.infomedia.co.id/assets/backend/vendors/nprogress/nprogress.js"></script>
<script src="https://recruit.infomedia.co.id/assets/backend/vendors/bootstrap-sweetalert/dist/sweetalert.min.js"></script>
<script src="https://recruit.infomedia.co.id/assets/backend/vendors/html5-form-validation/dist/jquery.validation.min.js"></script>
<script type="text/javascript" src="https://www.google.com/recaptcha/api.js?render=onload&hl=id" async defer></script>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-145863698-4"></script>
<link href="https://recruit.infomedia.co.id/assets/frontend/select2/select2.min.css" rel="stylesheet" />
<script src="https://recruit.infomedia.co.id/assets/frontend/select2/select2.min.js"></script>


<script type="text/javascript">
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }

    function navigate_menu(status) {
        status.classList.toggle("change");
        if ($("#bool_menu").val() == 1) {
            // $("#navigation_menu").animate({width: '0px',height: '0vh',opacity: '0'});
            // $("#navigation_menu").css('z-index',0);

            $("#navigation_menu_test").animate({
                width: '0px',
                opacity: '0'
            }, 400);
            $("#navigation_menu_test").css('z-index', 0);

            $("#bool_menu").val(0);
        } else {
            // $("#navigation_menu").animate({width: '500px',height: '100vh',opacity: '1'});
            // $("#navigation_menu").css('z-index',10);

            $("#navigation_menu_test").animate({
                width: '500px',
                opacity: '1'
            });
            $("#navigation_menu_test").css('z-index', 10);

            $("#bool_menu").val(1);
        }
        // console.log("menu "+$("#bool_menu").val());
    };

    gtag('js', new Date());
    gtag('config', 'UA-145863698-4');
    var csfrData = {};
    csfrData['csrf_sso_tg'] = '3cd818c9202369985a3300208adc8e9c';

    $.ajaxSetup({
        data: csfrData
    });

    $(document).scroll(function() {
        var $nav = $(".navbar");
        var $logo_images = $("#logo_images");
        $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
    });

    $(document).ready(function() {

        $(document).scroll(function() {
            if ($(document).scrollTop() > 2) {
                $('#logo_images').attr('src', "https://recruit.infomedia.co.id/assets/frontend/icons/name_tag_white.png");
            } else {
                $('#logo_images').attr('src', "https://recruit.infomedia.co.id/assets/frontend/icons/sharedservicetg.png");
            }
        });

        $(window).on('load', function() {
            $(".loading").fadeOut("slow");
        });


        $('#email').keydown(function(e) {
            if (e.keyCode == 32) {
                return false;
            }
        });

        var is_login = '0';
        var userlevel = '';




    });



    function isNumberKey(evt) {
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
        return true;
    }
</script>

<!--- botika webchat begins -->
<script src="https://chat.botika.online/client/assets/js/botika.widget.js"></script>
<script>
    window.BotikaChat.init({
        'client': 'zbOB3CJ',
        'widget': {
            'caption': 'Hallo, ada yang bisa Humara bantu?',
            'history': false,
            'showCredit': false
        }
    });
</script>
<!--- botika webchat end -->

<script type="text/javascript">
    $(document).ready(function() {
        setTimeout(function() {
            $("#modal-attention").modal({
                backdrop: 'static',
                keyboard: false
            }, 'show');
        }, 2500);

        $(".animsition").animsition({
            inClass: 'fade-in',
            outClass: 'fade-out',
            inDuration: 15000,
            outDuration: 8000,
            linkElement: '.animsition-link',
            // e.g. linkElement: 'a:not([target="_blank"]):not([href^="#"])'
            loading: true,
            loadingParentElement: 'body', //animsition wrapper element
            loadingClass: 'loading_tg',
            loadingInner: '', // e.g '<img src="loading.svg" />'
            timeout: true,
            timeoutCountdown: 2000,
            onLoadEvent: false,
            browser: ['animation-duration', '-webkit-animation-duration'],
            // "browser" option allows you to disable the "animsition" in case the css property in the array is not supported by your browser.
            // The default setting is to disable the "animsition" in a browser that does not support "animation-duration".
            overlay: false,
            overlayClass: 'animsition-overlay-slide',
            overlayParentElement: 'body',
            transition: function(url) {
                window.location.href = url;
            }
        });


        $('.carousel').carousel({
            interval: 10000
        });


    });




    function play_carousel() {
        $('#carouselExampleIndicators').carousel('cycle');
    }

    function detail_carousel() {
        if ($("#bool_menu_detail_carousel").val() == 1) {
            $("#navigation_detail_carousel").animate({
                width: '0%',
                opacity: '0'
            });
            $("#bool_menu_detail_carousel").val(0);
            $("#navigation_detail_carousel").css('z-index', 0);
            $("#menu_navbar").show();
            $("#btn_close_detail_carousel").hide();
            $('#carouselExampleIndicators').carousel('cycle');
        } else {
            $("#navigation_detail_carousel").animate({
                width: '100%',
                opacity: '1'
            });
            $("#bool_menu_detail_carousel").val(1);
            $("#navigation_detail_carousel").css('z-index', 10);
            $("#menu_navbar").hide();
            $("#btn_close_detail_carousel").show();
            $('#carouselExampleIndicators').carousel('pause');
        }

    }

    function detail_tentang_sso() {
        $("#modal_menu").modal('hide');
        if ($("#bool_menu_about_sso").val() == 1) {
            $("#navigation_about_sso").animate({
                width: '0%',
                opacity: '0'
            }, 2000);
            $("#bool_menu_about_sso").val(0);
            $("#navigation_about_sso").css('z-index', 0);
            $("#menu_navbar").show();
            $("#home_content").css('position', 'relative');
            $("#btn_close_about_sso").hide();

            $("#navigation_about_sso").removeClass("navigation_about_sso_phone");
        } else {
            $("#navigation_about_sso").animate({
                width: '94%',
                opacity: '1'
            });
            $("#bool_menu_about_sso").val(1);
            $("#navigation_about_sso").css('z-index', 10);
            $("#home_content").css('position', 'fixed');
            $("#menu_navbar").hide();
            $("#menu_navbar").click();
            $("#btn_close_about_sso").show();
            $("#navigation_about_sso").addClass("navigation_about_sso_phone");
        }
    }
</script>