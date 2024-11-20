<!DOCTYPE html>
<html>

<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="icon" href="https://recruit.infomedia.co.id/assets/frontend/icons/icon_fav.png" type="image/x-icon" />
    <link rel="shortcut icon" href="../assets/frontend/img/icon_fav.png" type="image/x-icon" />
    <title>Rekrutmen Bonecom Tricom</title>
    <link href="https://recruit.infomedia.co.id/assets/backend/vendors/font-google/font-google.css?family=PT+Sans:400,400i,700,700i" rel="stylesheet">

    <!-- VENDORS -->
    <!-- v2.0.0 -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/loading.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/backend/vendors/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/backend/vendors/jscrollpane/style/jquery.jscrollpane.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/backend/vendors/ladda/dist/ladda-themeless.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/backend/vendors/bootstrap-select/dist/css/bootstrap-select.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/backend/vendors/select2/dist/css/select2.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/backend/vendors/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/backend/vendors/fullcalendar/dist/fullcalendar.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/backend/vendors/bootstrap-sweetalert/dist/sweetalert.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/backend/vendors/summernote/dist/summernote.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/backend/vendors/datatables/media/css/dataTables.bootstrap4.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/backend/vendors/c3/c3.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/backend/vendors/chartist/dist/chartist.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/backend/vendors/nprogress/nprogress.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/backend/vendors/jquery-steps-master/demo/css/jquery.steps.css')}}">
    <link rel="stylesheet" type="text/css" href="https://recruit.infomedia.co.id/assets/backend/vendors/dropify/dist/css/dropify.min.css">
    <link rel="stylesheet" type="text/css" href="https://recruit.infomedia.co.id/assets/backend/vendors/font-icomoon/style.css">
    <link rel="stylesheet" type="text/css" href="https://recruit.infomedia.co.id/assets/backend/vendors/font-awesome/css/font-awesome.min.css">
    <script type="text/javascript" src="https://recruit.infomedia.co.id/assets/frontend/js/jqrylib.min.js"></script>
    <script src="https://recruit.infomedia.co.id/assets/backend/vendors/tether/dist/js/tether.min.js"></script>
    <script src="https://recruit.infomedia.co.id/assets/backend/vendors/jquery-ui/jquery-ui.min.js"></script>
    <script src="../assets/backend/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="https://recruit.infomedia.co.id/assets/backend/vendors/jquery-mousewheel/jquery.mousewheel.min.js"></script>
    <script src="https://recruit.infomedia.co.id/assets/backend/vendors/jscrollpane/script/jquery.jscrollpane.min.js"></script>
    <script src="https://recruit.infomedia.co.id/assets/backend/vendors/spin.js/spin.js"></script>
    <script src="{{ asset('assets/backend/vendors/ladda/dist/ladda.min.js') }}"></script>
    <script src="{{ asset('assets/backend/vendors/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('assets/backend/vendors/select2/dist/js/select2.full.min.js') }}"></script>
    <script src="https://recruit.infomedia.co.id/assets/backend/vendors/html5-form-validation/dist/jquery.validation.min.js"></script>
    <script src="https://recruit.infomedia.co.id/assets/backend/vendors/jquery-typeahead/dist/jquery.typeahead.min.js"></script>
    <script src="https://recruit.infomedia.co.id/assets/backend/vendors/jquery-mask-plugin/dist/jquery.mask.min.js"></script>
    <script src="https://recruit.infomedia.co.id/assets/backend/vendors/autosize/dist/autosize.min.js"></script>
    <script src="https://recruit.infomedia.co.id/assets/backend/vendors/bootstrap-show-password/bootstrap-show-password.min.js"></script>
    <script src="https://recruit.infomedia.co.id/assets/backend/vendors/moment/min/moment.min.js"></script>
    <script src="https://recruit.infomedia.co.id/assets/backend/vendors/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
    <script src="https://recruit.infomedia.co.id/assets/backend/vendors/fullcalendar/dist/fullcalendar.min.js"></script>
    <!-- <script src="https://recruit.infomedia.co.id/assets/backend/vendors/bootstrap-sweetalert/dist/sweetalert.min.js"></script> -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://recruit.infomedia.co.id/assets/backend/vendors/remarkable-bootstrap-notify/dist/bootstrap-notify.min.js"></script>
    <script src="https://recruit.infomedia.co.id/assets/backend/vendors/summernote/dist/summernote.min.js"></script>
    <script src="https://recruit.infomedia.co.id/assets/backend/vendors/nestable/jquery.nestable.js"></script>
    <script src="https://recruit.infomedia.co.id/assets/backend/vendors/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="https://recruit.infomedia.co.id/assets/backend/vendors/datatables/media/js/dataTables.bootstrap4.js"></script>
    <script src="https://recruit.infomedia.co.id/assets/backend/vendors/datatables-fixedcolumns/js/dataTables.fixedColumns.js"></script>
    <script src="https://recruit.infomedia.co.id/assets/backend/vendors/datatables-responsive/js/dataTables.responsive.js"></script>
    <script src="https://recruit.infomedia.co.id/assets/backend/vendors/editable-table/mindmup-editabletable.js"></script>
    <script src="https://recruit.infomedia.co.id/assets/backend/vendors/chartist/dist/chartist.min.js"></script>
    <script src="https://recruit.infomedia.co.id/assets/backend/vendors/peity/jquery.peity.min.js"></script>
    <script src="https://recruit.infomedia.co.id/assets/backend/vendors/chartist-plugin-tooltip/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="https://recruit.infomedia.co.id/assets/backend/vendors/jquery-countTo/jquery.countTo.js"></script>
    <script src="https://recruit.infomedia.co.id/assets/backend/vendors/nprogress/nprogress.js"></script>
    <script src="https://recruit.infomedia.co.id/assets/backend/vendors/jquery-steps-master/build/jquery.steps.min.js"></script>
    <script src="https://recruit.infomedia.co.id/assets/backend/vendors/chart.js/dist/Chart.bundle.min.js"></script>
    <script src="https://recruit.infomedia.co.id/assets/backend/vendors/dropify/dist/js/dropify.min.js"></script>
    <script src="https://recruit.infomedia.co.id/assets/backend/vendors/hashchange/jquery.hashchange.js"></script>
    <script src="https://recruit.infomedia.co.id/assets/backend/js/jspdf.min.js"></script>
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

    <!-- CLEAN UI ADMIN TEMPLATE MODULES-->
    <!-- v2.0.0 -->
    <!-- CLEAN UI ADMIN TEMPLATE MODULES-->
    <!-- v2.0.0 -->
    <link rel="stylesheet" type="text/css" href="https://recruit.infomedia.co.id/assets/backend/modules/core/common/core.cleanui.css">
    <link rel="stylesheet" type="text/css" href="https://recruit.infomedia.co.id/assets/backend/modules/vendors/common/vendors.cleanui.css">
    <link rel="stylesheet" type="text/css" href="https://recruit.infomedia.co.id/assets/backend/modules/layouts/common/layouts-pack.cleanui.css">
    <link rel="stylesheet" type="text/css" href="https://recruit.infomedia.co.id/assets/backend/modules/themes/common/themes.cleanui.css">
    <link rel="stylesheet" type="text/css" href="https://recruit.infomedia.co.id/assets/backend/modules/menu-left/common/menu-left.cleanui.css">
    <link rel="stylesheet" type="text/css" href="https://recruit.infomedia.co.id/assets/backend/modules/menu-right/common/menu-right.cleanui.css">
    <link rel="stylesheet" type="text/css" href="https://recruit.infomedia.co.id/assets/backend/modules/top-bar/common/top-bar.cleanui.css">
    <link rel="stylesheet" type="text/css" href="https://recruit.infomedia.co.id/assets/backend/modules/footer/common/footer.cleanui.css">
    <link rel="stylesheet" type="text/css" href="https://recruit.infomedia.co.id/assets/backend/modules/pages/common/pages.cleanui.css">
    <!-- <link rel="stylesheet" type="text/css" href="https://recruit.infomedia.co.id/assets/backend/modules/ecommerce/common/ecommerce.cleanui.css"> -->
    <link rel="stylesheet" type="text/css" href="https://recruit.infomedia.co.id/assets/backend/modules/apps/common/apps.cleanui.css">
    <script src="https://recruit.infomedia.co.id/assets/backend/modules/menu-left/common/menu-left.cleanui.js"></script>
    <script src="https://recruit.infomedia.co.id/assets/backend/modules/menu-right/common/menu-right.cleanui.js"></script>


    <script src="https://recruit.infomedia.co.id/assets/block_ui.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-bar-rating/1.2.2/jquery.barrating.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-bar-rating/1.2.2/themes/fontawesome-stars.css">

    <script>
        function loaderSending() {
            $.blockUI({
                message: '<h4>Mohon tunggu...</h4>',
                css: {
                    border: 'none',
                    padding: '15px',
                    backgroundColor: '#000',
                    '-webkit-border-radius': '10px',
                    '-moz-border-radius': '10px',
                    opacity: .5,
                    color: '#fff',
                    fontSize: '5px'
                }
            });
        }

        function isNumberKey(evt) {
            var charCode = (evt.which) ? evt.which : event.keyCode
            if (charCode > 31 && (charCode < 48 || charCode > 57))
                return false;
            return true;
        }
    </script>

</head>
<style type="text/css">
    .pointer {
        cursor: pointer;
    }

    body.cat__config--horizontal .cat__menu-left__list--root>li.cat__menu-left__item>a {
        border-left: 0px;
    }

    .cat__menu-left__icon {
        color: white;
    }

    .cat__menu-left__item>a {
        color: white;
    }

    .cat__menu-left__lock {
        background: #F10315 !important;
    }

    .cat__menu-left__logo {
        background: red !important;
    }

    .cat__menu-left__logo img {
        max-height: 3rem !important;
    }

    .cat__menu-left__inner {
        background: red !important;
    }

    .cat__menu-left__divider {
        background: #f7f7f785 !important;
    }

    .loading {
        background: url('')center center no-repeat content-box #3636364d !important;
    }

    @font-face {
        font-family: 'Material Icons';
        font-style: normal;
        font-weight: 400;
        src: local('Material Icons'), local('MaterialIcons-Regular'), url(https://recruit.infomedia.co.id/assets/frontend/fonts/google-material-icon.woff2) format('woff2');
    }

    .material-icons {
        font-family: 'Material Icons';
        font-weight: normal;
        font-style: normal;
        font-size: 24px;
        line-height: 1;
        letter-spacing: normal;
        text-transform: none;
        display: inline-block;
        white-space: nowrap;
        word-wrap: normal;
        direction: ltr;
        -moz-font-feature-settings: 'liga';
        -moz-osx-font-smoothing: grayscale;
    }

    @media screen and (min-width: 1200px) {
        #login-responsive {
            display: none;
        }
    }

    @media screen and (max-width: 580px) {
        #login-normal {
            display: none;
        }

        #login-mobile {
            display: none;
        }
    }

    body {
        font-family: -apple-system, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif !important;
    }

    .cat__menu-left__pin-button div::before,
    .cat__menu-left__pin-button div::after {
        background: #fff !important;
    }

    .cat__menu-left__pin-button div {
        background: #fff;
    }
</style>

<?php

use App\Models\Candidate;

$personals =  Candidate::find(session()->get("user_id"));
?>

<body id="menu_style" class="cat__config--vertical cat__menu-left--colorful">
    <div class="loading">
        <div class="loading-wrapper">
            <div class="rec r1"></div>
            <div class="rec r2"></div>
            <div class="rec r3"></div>
            <div class="rec r4"></div>
            <div class="rec r5"></div>
        </div>
    </div>

    <nav class="cat__menu-left">
        <div class="cat__menu-left__lock cat__menu-left__action--menu-toggle">
            <div class="cat__menu-left__pin-button">
                <div><!-- --></div>
            </div>
        </div>
        <div class="cat__menu-left__logo">
            <a href="#">
                <img src="{{ asset('assets/frontend/img/bti_logo_hires_bw.gif') }}" />
            </a>
        </div>

        <div class="cat__menu-left__inner id='sidebar' class='sidebar' ">
            <ul class='cat__menu-left__list cat__menu-left__list--root'>
                <li class='cat__menu-left__item ' id='curiculum_vitae/preview' data-toggle='ajax'>
                    <a href="{{ url('main/cv') }}">
                        <span class='cat__menu-left__icon icmn-office'></span>
                        Daftar Riwayat Hidup
                    </a>
                </li>
                <li class='cat__menu-left__item ' id='job_vacancy' data-toggle='ajax'>
                    <a href="{{ url('main/job_vacany') }}">
                        <span class='cat__menu-left__icon fa fa-briefcase'></span>
                        Lowongan
                    </a>
                </li>
                <li class='cat__menu-left__item ' id='myapplication' data-toggle='ajax'>
                    <a href="{{ url('main/apply') }}">
                        <span class='cat__menu-left__icon icmn-accessibility'></span>
                        Lamaran Saya
                    </a>
                </li>
                <!-- <li class='cat__menu-left__item ' id='my_mail' data-toggle='ajax'>
                    <a href='main#my_mail'>
                        <span class='cat__menu-left__icon fa fa-envelope'></span>
                        Kotak Masuk
                    </a>
                </li> -->
            </ul>
        </div>


    </nav>

    <div class="cat__top-bar">
        <!-- left aligned items -->
        <div class="cat__top-bar__left">
            <div class="cat__top-bar__logo">
                <a href="javascript: void(0);">
                    <img src="{{ asset('assets/frontend/img/bti_logo_hires_bw.gif') }}" />
                </a>
            </div>
        </div>
        <!-- right aligned items -->
        <div class="cat__top-bar__right">
            <div class="cat__top-bar__item">
                <div class="dropdown cat__top-bar__avatar-dropdown">
                    <a href="javascript: void(0);" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <span class="cat__top-bar__avatar" href="javascript:void(0);">
                            <img src="{{ asset('photo/'. $personals->photo) }}"> </span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="" role="menu">

                        <a class="dropdown-item" href="{{ url('main/cv') }}"><i class="dropdown-icon icmn-accessibility"></i> My Profile</a>
                        <a class="dropdown-item" href="{{ url('logout') }}"><i class="dropdown-icon icmn-exit"></i> Logout</a>

                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="cat__content">
        <!---->
        <!-- begin #ajax-content -->

        @yield('content')
        <!-- end #ajax-content -->
    </div>
    <!-- END: page scripts -->
    <div class="cat__footer">
        <!-- <div class="cat__footer__bottom" style="padding-top: 65px;"> -->
        <div class="row">
            <div class="col-md-12">
                <div class="cat__footer__company">
                    <span>
                        © 2024 Powered By Bonecom Tricom
                        <br>
                        All rights reserved
                    </span>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- <script src="https://recruit.infomedia.co.id/assets/backend/apps.js"></script> -->
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

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
        if ('pelamar' != 'pelamar') {
            $("#btn_helpdesk_open").hide();
        }
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

    <!--- botika webchat begin -->
    <!-- <script src="https://chat.botika.online/client/assets/js/botika.widget.js"></script> -->
    <script>
        // window.BotikaChat.init({
        //     client: "gB2oUvy",
        //     params: {
        //         showCredit: "false"
        //     }
        // });
    </script>
    <!--- botika webchat end -->

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-145863698-4"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-145863698-4');



        $(document).ready(function() {
            var csfrData = {};
            csfrData['csrf_sso_tg'] = 'c9e131044960a6a2c494c01d8966e038';
            $.ajaxSetup({
                data: csfrData
            });
            //App.init();
            var userlevel = 'Pelamar';
        });
        $(window).on('load', function() {
            $(".loading").fadeOut("slow");
        });

        function isNumber(event) {
            // Check if the key pressed is a number or backspace
            const charCode = event.which ? event.which : event.keyCode;
            if (charCode < 48 || charCode > 57) {
                event.preventDefault();
                return false;
            }
            return true;
        }
    </script>

</body>

</html>