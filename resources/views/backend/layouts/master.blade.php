<!DOCTYPE html>
<html>

<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="icon" href="https://recruit.infomedia.co.id/assets/frontend/icons/icon_fav.png" type="image/x-icon" />
    <link rel="shortcut icon" href="../assets/frontend/img/icon_fav.png" type="image/x-icon" />
    <title>Rekrutmen Bonecom Tricom</title>
    <link href="{{ asset('fonts/font-google.css') }}" rel="stylesheet">

    <!-- VENDORS -->
    <!-- v2.0.0 -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/loading.css')}}">
    <!-- <link rel="stylesheet" type="text/css" href="{{ asset('assets/backend/vendors/bootstrap/dist/css/bootstrap.min.css')}}"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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
    <script src="https://cdn.jsdelivr.net/npm/moment@2.29.4/moment.min.js"></script>
    <style>
        .cat__menu-left__inner {
            background: #A80807 !important;
        }

        .timeline {
            position: relative;
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
        }

        .timeline::before {
            content: "";
            position: absolute;
            top: 32px;
            left: 0;
            right: 0;
            height: 2px;
            background-color: rgb(101, 102, 103);
            z-index: 1;
        }

        .timeline-step {
            position: relative;
            z-index: 2;
            width: 120px;
            min-width: 120px;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .timeline-step .circle {
            width: 60px;
            height: 60px;
            background-color: #636466;
            border-width: 3px;
            border-style: solid;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 0.5rem;
        }

        .timeline-step .circle img {
            width: 50px;
        }

        .timeline-label {
            min-height: 32px;
            font-size: 14px;
            line-height: 1.2;
            font-weight: bold;
        }

        .badge-status {
            font-size: 10px;
            margin-top: 4px;
            font-weight: bold;
            padding: 6px;
            color: #FFF;
        }
    </style>
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
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote.min.js"></script>
    <!-- CSS (optional, hanya untuk style error) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/parsleyjs/src/parsley.css" />
    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/parsleyjs"></script>

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/backend/vendors/custom.css')}}">
</head>
<style type="text/css">

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

                <li class='cat__menu-left__item ' id='myapplication' data-toggle='ajax'>
                    <a href="{{ url('hr/postjob') }}">
                        <span class='cat__menu-left__icon fa fa-paper-plane'></span>
                        Post Jobs
                    </a>
                </li>

                <li class='cat__menu-left__item ' id='myapplication' data-toggle='ajax'>
                    <a href="{{ url('hr/proseRecruitment') }}">
                        <span class='cat__menu-left__icon fa fa-tasks'></span>
                        Proses Recruitment
                    </a>
                </li>


                <li class='cat__menu-left__item ' id='curiculum_vitae/preview' data-toggle='ajax'>
                    <a href="{{ url('main/cv') }}">
                        <span class='cat__menu-left__icon fa fa-id-badge'></span>
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
                        <span class='cat__menu-left__icon fa fa-envelope-open'></span>
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
                    <img src="https://peff.bithrms.com/Assets/Images/apps/Company/logo-color@2x.png" />
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
    <div class="cat__footer d-flex justify-content-center">
        <!-- <div class="cat__footer__bottom" style="padding-top: 65px;"> -->
        <div class="row">
            <div class="col-md-12">
                <div class="cat__footer__company">
                    <span>
                        © 2025 Powered By Bonecom Tricom Group
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

        function disabledEnableForm(act, form) {
            $("#" + form + " :input").each(function() {
                var $el = $(this);
                var tag = $el.prop('tagName');
                var type = $el.attr('type');

                if (type === "checkbox") {
                    $el.prop('disabled', act); // checkbox pakai disabled
                    return;
                }

                switch (tag) {
                    case "SELECT":
                        $el.prop("disabled", act);
                        break;
                    case "INPUT":
                        $el.prop("readonly", act);
                        break;
                    case "TEXTAREA":
                        $el.prop("readonly", act);
                        break;
                }
            });

            // Handle Summernote
            $("#" + form + " .summernote").each(function() {
                const $el = $(this);
                if (act) {
                    $el.summernote('disable');
                } else {
                    $el.summernote('enable');
                }
            });
        }


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

        function goBack() {
            window.close();

            // Fallback jika window tidak bisa ditutup
            setTimeout(function() {
                window.history.back();
            }, 200);
        }
    </script>

</body>

</html>