@extends('backend.layouts.master')

@section('content')

<div id="ajax-content" style="min-height: 80vh; height: auto; padding-bottom: 2.5rem;">
    <style media="screen">
        .cat__content {
            padding: 0rem;
            background: white;
        }

        .section-custom {
            padding: 20px;
        }

        .card {
            background: white;
            box-shadow: 0 8px 60px 0 rgba(103, 151, 255, .11), 0 12px 90px 0 rgba(103, 151, 255, .11);
            padding: 20px;
            border: unset !important;
            border-radius: 1rem;
        }

        .card-job {
            background: #828080;
            /* box-shadow:0 0 15px rgba(171, 186, 200, 0.3) !important; */
            padding: 20px;
            border: unset !important;
            border-radius: 1rem;
            border-top-left-radius: 5px;
            color: white;
        }

        .cursor {
            cursor: pointer;
        }

        .btn-back {
            color: #fff;
            background-color: transparent;
            border-color: #fff;
        }

        .btn-back:hover {
            color: black;
            background-color: #f8f9fa;
            border-color: #f8f9fa;
        }
    </style>

    <!-- html script -->
    <div class="container-fluid animsition" style="background-size: cover;background-image:linear-gradient( rgba(57, 57, 57, 0.81), rgba(0, 0, 0, 0.65) ), url('http://recruit.infomedia.co.id/assets/frontend/background-menu-left.jpg');border-bottom: solid 1px #e6e3e3;">
        <div class="container" style="padding-top:20px;padding-bottom:50px;">

            <style media="screen">
                @media (min-width: 768px) {
                    .navbar-style-home {
                        padding: 10px 50px 0px;
                        margin-bottom: -110px;
                    }
                }

                @media (max-width: 768px) {
                    .navbar-style-home {
                        padding: 15px 10px 0px;
                        margin-bottom: -110px;
                    }
                }

                .hide-nav {
                    display: none;
                }
            </style>

            <nav id="navbar_top" class="navbar navbar-expand-lg navbar-light d-lg-none hide-nav" style=" border-bottom: solid 0px #e6e6e6;min-height:10vh; z-index:1">
                <a class="navbar-brand" href="">
                    <img id="img_logo_top_bar" class="img-logo" src="assets/frontend/images/" style="width:180px;" height="" alt="">
                    <img id="img_logo_top_bar" class="img-logo" src="assets/frontend/Logo_Infomedia_white.png" style="width:230px" height="" alt="">
                </a>

                <button class="navbar-toggler" style="background:transparent" type="button" onclick="modal_show()">
                    <i class="material-icons" id="btn_collapse_navbar_top" style="font-size: 28px; color: rgb(0, 0, 0); background: red; border-radius: 5px; padding: 5px;">sort</i>
                </button>

                <div class="collapse navbar-collapse " id="navbarSupportedContent" style="border-radius: 5px;padding:20px">
                    <!-- <ul class="navbar-nav ml-auto d-lg-none">
        <li class="nav-item active">
          <a class="nav-link" href="">Beranda <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about">Tentang SSO</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="job">Vacancy</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="faq">FAQ</a>
        </li>
      </ul> -->
                    <div class="ml-auto my-3 my-sm-2 d-lg-block">
                        <a style="margin-right:10px" href="main#myapplication" class="btn btn-outline-danger my-2 my-sm-0">Lamaran Saya</a><a href="dashboard/logout" class="btn btn-danger my-2 my-sm-0">Logout</a>
                    </div>
                </div>
            </nav>

            <div class="modal" id="modal_menu">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Menu</h4>
                            <button type="button" class="close" data-dismiss="modal"><i class="material-icons">clear</i></button>
                        </div>
                        <!-- Modal body -->
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <ul class="ml-auto d-lg-none" style="list-style: none;padding-left: 0px;">
                                        <li class="nav-item">
                                            <a class="nav-link" href="">Beranda <span class="sr-only">(current)</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="javascript:void(0)" onclick="detail_tentang_sso()">Tentang SSO</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="job">Vacancy</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="faq">FAQ</a>
                                        </li>
                                    </ul>
                                    <div class="ml-auto my-3 my-sm-2 d-lg-block">
                                        <a style="margin-right:10px" href="main#myapplication" class="btn btn-outline-danger my-2 my-sm-0">Lamaran Saya</a><a href="dashboard/logout" class="btn btn-danger my-2 my-sm-0">Logout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <script type="text/javascript">
                $(document).ready(function() {

                    if ('Job Vacancy Applicant' != 'Home' && 'Job Vacancy Applicant' != 'Job' && 'Job Vacancy Applicant' != 'Job Detail' && 'Job Vacancy Applicant' != 'Detail Blog' && 'Job Vacancy Applicant' != 'FAQ') {
                        $("#navbar_top").addClass("d-lg-none");
                        $("#img_logo_top_bar").attr("src", "assets/frontend/images/");
                        $("#btn_collapse_navbar_top").css("color", "black");
                    }

                    if ('Job Vacancy Applicant' == 'Home') {
                        $("#navbar_top").addClass('navbar-style-home');
                    } else if ('Job Vacancy Applicant' == 'Job Vacancy') {
                        $("#navbar_top").hide();
                    }

                    if ('Job Vacancy Applicant' == 'Job Vacancy Applicant') {
                        $("#navbar_top").addClass("hide-nav");
                    }

                });

                function modal_show() {
                    $("#modal_menu").modal('show');
                }
            </script>

            <div class="row">

                <div class="col-md-12 section-custom">
                    <div class="row">

                        <div class="col-lg-2 col-md-3">
                            <!-- <img src="assets/backend/images/company_logo/1a6b173689253eb15d3ca33323ecff1f.png" style="width:inherit;background: whitesmoke;border-radius: 5px;margin-top: 10px;margin-bottom:20px;display:none;"> -->
                            <div class="relative" style="position: relative;"><iframe class="chartjs-hidden-iframe" style="display: block; overflow: hidden; border: 0px; margin: 0px; inset: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;" tabindex="-1"></iframe>
                                <canvas id="chartProgress" width="247" height="280" style="display: block; height: 187px; width: 165px;"></canvas>
                                <div class="absolute-center text-center" style="position:absolute;top: 62%;left: 50%;transform: translate(-50%, -50%);"><label style="line-height: 1;font-size: small;">Kuota Kandidat</label>
                                </div>
                            </div>


                        </div>
                        <div class="col-lg-10 col-md-9" style="color:white">
                            <h2>Agent Contact Center Perusahaan Gadai Milik Negara - Yogyakarta</h2>
                            <p style="font-size: 16px; display:none;">PT. Infomedia Nusantara</p>
                            <p class="">Posted : </p>
                            <hr>
                            <div>
                                <button class="mr-1 btn btn-back cursor" onclick="javascript:window.close()">Kembali</button>
                                <span id="btn_save_6639">
                                    <button class="btn btn-outline-primary cursor" onclick="save_job(`saved`, 6639)" data-bs-toggle="tooltip" data-bs-placement="right" title="Save">
                                        <span class="material-icons" style="position: absolute;">bookmark_border</span> <span style="margin-left: 25px;"> Simpan</span>
                                    </button> </span>
                                <button class="ml-4 btn btn-danger cursor" id="apply-job">Lamar Pekerjaan</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>


    <div class="container-fluid" style="min-height:80vh">
        <div class="container" style="padding-top:50px;padding-bottom:80px;">

            <div class="row">

                <div class="col-md-9 section-custom">
                    <div class="row">

                        <div class="col-md-12">
                            <h5 style="margin-bottom:0px"><b>Job Description</b></h5>
                            <hr>
                            <div style="margin-top:10px">
                                <ul>
                                    <li>Memberikan Informasi yang dibutuhkan konsumen mengenai produk perusahaan;</li>
                                    <li>Mendengarkan dengan baik setiap keluhan yang disampaikan oleh konsumen;</li>
                                    <li>Memberikan solusi yang terbaik atas masalah yang dihadapi konsumen;</li>
                                    <li>Melayani konsumen dengan cepat;</li>
                                    <li>Sopan dan ramah dalam berinteraksi dengan konsumen;</li>
                                    <li>Mengikuti proses dan standar kerja;</li>
                                    <li>Mendokumentasikan interaksi konsumen.</li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-12" style="margin-top:30px">
                            <h5 style="margin-bottom:0px"><b>Job Requirement</b></h5>
                            <hr>
                            <div style="margin-top:10px">
                                <ul>
                                    <li><b>Kandidat PRIA;</b></li>
                                    <li>Usia maksimal 30 Tahun (Pada saat melamar);</li>
                                    <li>Minimum lulusan Diploma III (D3) semua jurusan;</li>
                                    <li>Mempunyai orientasi pada kepuasan pelanggan (customer service oriented);</li>
                                    <li>Memiliki kemampuan administratif dan komputer Ms Office basic;</li>
                                    <li>Mempunyai kemampuan berkomunikasi, bernegosiasi dan berinteraksi dengan baik;</li>
                                    <li>Memiliki Suara dan Pelafalan Huruf yang Baik dan Jelas;</li>
                                    <li>Tidak berdialek kedaerahan &amp; cadel;</li>
                                    <li>Mampu bekerja Shifting;</li>
                                    <li>Mampu Multitasking;</li>
                                    <li>Jujur, disiplin, teliti dan bertanggung jawab;</li>
                                    <li>Bisa berbahasa Inggris menjadi nilai tambah.</li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-12" style="margin-top:30px">
                            <h5 style="margin-bottom:0px"><b>Skill Requirement</b></h5>
                            <hr>
                            <div style="margin-top:10px">
                                <p><i class="material-icons" style="color: #007bff;">check_circle</i><span style="margin-left: 10px;position: absolute;">Public Communication</span></p>
                            </div>
                        </div>


                    </div>
                </div>

                <div class="col-md-3 section-custom">
                    <div class="row">
                        <div class="col-md-12 card-job">
                            <p>PWT (Contract)</p>
                            <hr>
                            <b class="heading">Lokasi:</b>
                            <!-- <p>, , YOGYAKARTA</p> -->
                            <p>YOGYAKARTA</p>
                            <hr>

                            <b class="heading">Industri:</b>
                            <p>Banking</p>
                            <hr>
                            <b class="heading">Pendidikan:</b>
                            <p>Diploma III</p>
                            <br>

                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <div id="back-to-top">
        <a href="#"><i class="ion-ios-arrow-up"></i></a>
    </div>

    <div class="modal" id="modal_direct_login">
        <div class="modal-dialog" style="max-width:500px">
            <div class="modal-content" style="background: white;color: #3e3f95;">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><i class="material-icons">clear</i></button>
                </div>
                <!-- Modal body -->
                <div class="modal-body" style="padding:50px 50px 20px 50px">
                    <div class="row">
                        <div class="col-md-12" style="text-align:left">
                            <img src="assets/frontend/images/banner_chrome_summit.png" style="width: 50%;margin-bottom: 20px;">
                            <br>
                            <h5>Untuk dapat melamar pekerjaan ini, silahkan untuk login terlebih dahulu.</h5>
                            <hr>
                            <label>Belum memiliki akun?
                                <a href="register/register_page">Daftar disini</a>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer" style="background: #335eea url('assets/frontend/images/icon_chrome_summit.png') no-repeat fixed center;background-size: 200%;padding: 30px;">
                    <a type="button" href="login/login_page" class="btn btn-light btn-inverse btn-block">Login</a>
                </div>

            </div>
        </div>
    </div>

    <!-- script -->
    <script src="https://recruit.infomedia.co.id/assets/backend/vendors/chart.js/dist/Chart.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {

            $(".animsition").animsition({
                inClass: 'fade-in',
                outClass: 'fade-out',
                inDuration: 1500,
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


        });
        var user_level = "";
        $(function() {

            var button_apply = '0';
            if (button_apply == "1") {
                $("#apply-job").hide();
            }

            $('#apply-job').click(function(e) {
                e.preventDefault();
                var vacancy_id = '6639';
                NProgress.start();
                $.ajax({

                        url: 'home/is_login',
                        type: 'POST',
                        dataType: 'json',
                        data: {
                            vacancy_id: vacancy_id
                        },

                    })
                    .done(function(data) {
                        if (data.status) {
                            //alert(data.url);
                            document.location.href = data.url;
                        } else {
                            if (data.msg == "bukan pelamar") {
                                swal({
                                    title: "Informasi",
                                    text: "Untuk dapat melamar pekerjaan, silahkan logout terlebih dahulu.",
                                    type: "error",
                                    confirmButtonClass: "btn-danger"
                                });
                            } else {
                                $("#modal_direct_login").modal('show');
                                // $('#vacancy_id').val('6639');
                                // console.log("l");

                            }

                        }
                        NProgress.done();
                    })

            });
        });

        function goBack() {
            window.history.back();
        }
    </script>

    <script>
        var baseUrl = "{{ url('main') }}";

        $(document).ready(function() {
            //ratio
            var percentage_ratio = 0;
            var percentage = '0';
            var is_check_ratio = 'yes';

            if (is_check_ratio == 'yes') {
                if (percentage == "null" || percentage == "") {
                    percentage_ratio = 0;
                } else {
                    percentage_ratio = percentage;
                }
            }

            var percentage_color = '';
            if (percentage_ratio < 80) {
                percentage_color = '#095EF1';
            } else {
                percentage_color = '#F10909';
            }
            var chartProgress = document.getElementById('chartProgress');
            new Chart(chartProgress, {
                type: 'doughnut',
                data: {
                    labels: ["Rasio", 'Available'],
                    datasets: [{
                        label: "Population (millions)",
                        backgroundColor: [percentage_color, '#FFFFFF'],
                        data: [percentage_ratio, 100 - percentage_ratio]
                    }]
                },
                plugins: [{
                    beforeDraw: function(chart) {
                        var width = chart.chart.width,
                            height = chart.chart.height,
                            ctx = chart.chart.ctx;

                        ctx.restore();
                        ctx.beginPath();
                        ctx.arc(width / 2, height / 2, 65, 0, 2 * Math.PI);
                        ctx.fillStyle = '#FFFFFF';
                        ctx.fill();
                        var fontSize = (height / 100).toFixed(2);
                        ctx.font = fontSize + "em sans-serif";
                        ctx.fillStyle = percentage_color;
                        ctx.textBaseline = "middle";

                        var text = percentage_ratio + "%",
                            textX = Math.round((width - ctx.measureText(text).width) / 2),
                            textY = height / 2.3;

                        ctx.fillText(text, textX, textY);
                        ctx.save();
                    }
                }],
                options: {
                    legend: {
                        display: false,
                    },
                    responsive: true,
                    maintainAspectRatio: false,
                    cutoutPercentage: 85
                }

            });
        });

        function save_job(status, id_vac) {
            $.ajax({
                url: baseUrl + 'job_list/save_job',
                method: "POST",
                data: {
                    status: status,
                    id_vac: id_vac
                },
                cache: false,
                dataType: 'json',
                success: function(response) {
                    if (response.status == true) {

                        if (response.status_upd == 'saved') {
                            btn = '<button type="button" class="btn btn-outline-primary cursor" onclick="save_job(`saved`,' + response.id_vac + ')" data-bs-toggle="tooltip" data-bs-placement="right" title="Save"><span style="position: absolute;" class="material-icons">bookmark_border</span><span style="margin-left: 25px;"> Simpan</span></button>';
                            message = 'Lowongan sudah dihapus dari daftar penyimpanan';
                        } else {
                            btn = '<button type="button" class="btn btn-outline-primary cursor" onclick="save_job(`not_saved`,' + response.id_vac + ')" data-bs-toggle="tooltip" data-bs-placement="right" title="Unsave"><span style="position: absolute;" class="material-icons">bookmark</span><span style="margin-left: 25px;"> Batal Simpan</span></button>';
                            message = 'Lowongan sudah disimpan';
                        }

                        $("#btn_save_" + response.id_vac).empty().append(btn);
                        toastr.success(message, 'Berhasil', {
                            "closeButton": true,
                            "debug": false,
                            "positionClass": "toast-top-right",
                            "onclick": null,
                            "showDuration": "1000",
                            "hideDuration": "1000",
                            "timeOut": "5000",
                            "extendedTimeOut": "1000",
                            "showEasing": "swing",
                            "hideEasing": "linear",
                            "showMethod": "fadeIn",
                            "hideMethod": "fadeOut"
                        });

                    } else {
                        toastr.warning('Gagal', 'Silahkan coba lagi', {
                            "closeButton": true,
                            "debug": false,
                            "positionClass": "toast-top-right",
                            "onclick": null,
                            "showDuration": "1000",
                            "hideDuration": "1000",
                            "timeOut": "5000",
                            "extendedTimeOut": "1000",
                            "showEasing": "swing",
                            "hideEasing": "linear",
                            "showMethod": "fadeIn",
                            "hideMethod": "fadeOut"
                        });
                    }
                }
            });
        }
    </script>
</div>
@endsection