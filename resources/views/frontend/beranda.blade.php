@extends('frontend.layouts.master')

@section('content')
<div id="home_content">
    <div class="container-fluid" style="min-height: 100vh;padding:0px">
        <nav id="navbar_top" class="navbar navbar-expand-lg navbar-light " style=" border-bottom: solid 0px #e6e6e6;min-height:10vh; z-index:1">
            <a class="navbar-brand" href="https://recruit.infomedia.co.id/">
                <img id="img_logo_top_bar" class="img-logo" src="./assets/frontend/img/bti_logo_hires_bw.gif" style="width:180px;" height="" alt="">
            </a>

            <button class="navbar-toggler" style="background:transparent" type="button" onclick="modal_show()">
                <i class="material-icons" id="btn_collapse_navbar_top" style="font-size: 28px;color:white;background: red;border-radius: 5px;padding: 5px;">sort</i>
            </button>

            <div class="collapse navbar-collapse " id="navbarSupportedContent" style="border-radius: 5px;padding:20px">
                <div class="ml-auto my-3 my-sm-2 d-lg-block">
                    <a style="margin-right:10px;background:#A80708 !important;border:1px solid #A80708" href="{{ url('login') }}" class="btn btn-danger my-2 my-sm-0">Masuk</a>
                    <a href="{{ url('regis') }}" class="btn btn-outline-light my-2 my-sm-0">Daftar</a>
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
                                        <a class="nav-link" href="https://recruit.infomedia.co.id/">Beranda <span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="javascript:void(0)" onclick="detail_tentang_sso()">Tentang SSO</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Vacancy</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">FAQ</a>
                                    </li>
                                </ul>
                                <div class="ml-auto my-3 my-sm-2 d-lg-block">
                                    <a style="margin-right:10px" href="?category=login" class="btn btn-danger my-2 my-sm-0">Masuk</a>
                                    <a href="?category=regis" class="btn btn-outline-danger my-2 my-sm-0">Daftar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <script type="text/javascript">
            $(document).ready(function() {

                if ('Home' != 'Home' && 'Home' != 'Job' && 'Home' != 'Job Detail' && 'Home' != 'Detail Blog' && 'Home' != 'FAQ') {
                    $("#navbar_top").addClass("d-lg-none");
                    $("#img_logo_top_bar").attr("src", "https://recruit.infomedia.co.id/assets/frontend/images/21f88f0f5f61e6863c7add95ff3e7361.png");
                    $("#btn_collapse_navbar_top").css("color", "black");
                }

                if ('Home' == 'Home') {
                    $("#navbar_top").addClass('navbar-style-home');
                } else if ('Home' == 'Job Vacancy') {
                    $("#navbar_top").hide();
                }

                if ('Home' == 'Job Vacancy Applicant') {
                    $("#navbar_top").addClass("hide-nav");
                }

            });

            function modal_show() {
                $("#modal_menu").modal('show');
            }
        </script>

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active" style="background-image:linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('./assets/frontend/img/slider_1.jpg');">
                    <div class="carousel-caption">
                        <h5 class="title-carousel-small animsition" data-animsition-in-class="zoom-in" data-animsition-out-class="fade-out-up-sm" data-animsition-in-duration="800">SELAMAT DATANG</h5>
                        <h1 class="title-carousel-big animsition" style="color:#A80708 !important" data-animsition-in-class="zoom-in" data-animsition-out-class="fade-out-up-sm" data-animsition-in-duration="800">REKRUTMEN BONECOM TRICOM GROUP</h1>
                        <a href="?category=job" class="btn btn-light animsition" data-animsition-in-class="zoom-in" data-animsition-out-class="fade-out-up-sm" data-animsition-in-duration="800">YUK JELAJAHI KARIRMU!</a>
                    </div>
                </div>
                <div class="carousel-item" style="background-image:linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('./assets/frontend/img/slider_2.jpg');">
                    <div class="carousel-caption">
                        <h1 class="title-carousel-big animsition" data-animsition-in-class="zoom-in" data-animsition-out-class="fade-out-up-sm" data-animsition-in-duration="800">BONECOM TRICOM GROUP</h1>
                        <h4 class="title-carousel-small animsition" data-animsition-in-class="zoom-in" data-animsition-out-class="fade-out-up-sm" data-animsition-in-duration="800">Menjadi Perusahaan Automotive Part Yang Terpercaya dan Prioritas di Tingkat Global </h4>
                        <a href="?category=job" class="btn btn-danger animsition" data-animsition-in-class="zoom-in" data-animsition-out-class="fade-out-up-sm" data-animsition-in-duration="800">YUK JELAJAHI KARIRMU!</a>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <!-- step -->
    <div class="container-fluid" style="background:white">
        <div class="row">
            <div class="col-md-6 col-sm-3 section-card">
                <img src="https://recruit.infomedia.co.id/assets/frontend/images/icons/register.svg" style="margin-bottom:10px;width:100px" alt="">
                <p>
                    Peserta Registrasi dengan memasukkan KTP, Nama,Email.</p>
            </div>
            <div class="col-md-6 col-sm-3 section-card">
                <img src="https://recruit.infomedia.co.id/assets/frontend/images/icons/login.svg" style="margin-bottom:10px;width:100px" alt="">
                <p>
                    Peserta Login dengan memasukkan Email dan Password yang didaftarkan.</p>
            </div>
            <div class="col-md-6 col-sm-3 section-card" style="background:white; ">
                <img src="https://recruit.infomedia.co.id/assets/frontend/images/icons/mengisi_form_cv.svg" style="margin-bottom:10px;width:100px" alt="">
                <p>
                    Pelamar harus mengisi data dan dokumen yang telah dipersyratkan. pastikan data dan dokumen yang diunggah sudah sesuai dengan ketentuan.</p>
            </div>
            <div class="col-md-6 col-sm-3 section-card" style="background:white">
                <img src="https://recruit.infomedia.co.id/assets/frontend/images/icons/apply.svg" style="margin-bottom:10px;width:100px" alt="">
                <p>
                    Apply posisi yang sesuai dengan diri peserta.</p>
            </div>
        </div>
    </div>



    <!-- job spesialisasi -->
    <div class="container-fluid responsive-media-body" style="padding:100px 50px 100px 50px;background:whitesmoke">
        <div class="row">
            <div class="col-md-12" style="text-align:center;margin-bottom:50px">
                <h1>Kamu yang <span style="color:red">Kami Cari</span> </h1><br>
            </div>

            <div class="col-md-6 ">
                <div class="row">
                    <div id="stream_1" class="col-md-6 card-project-1 card-project">

                    </div>
                    <div class="col-md-6  ">
                        <div class="row">
                            <div id="stream_2" class="col-md-12 card-project card-project-2 border-bottom border-left height-250 border-right">

                            </div>
                            <div id="stream_3" class="border-right col-md-12 card-project card-project-3  border-left height-250">

                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div id="stream_4" class="col-md-12 border-right card-project card-project-4 border-top border-bottom height-250">

                    </div>
                </div>

                <div class="row">
                    <div id="stream_5" class="col-md-6 card-project card-project-5  height-250 ">

                    </div>
                    <div id="stream_6" class="col-md-6 card-project card-project-6 border-right  border-left height-250 ">

                    </div>
                </div>

            </div>

            <div class="col-md-6">
                <div class="row">
                    <div id="stream_7" class="col-md-12 card-project card-project-7 border-bottom height-250">

                    </div>
                </div>
                <div class="row">
                    <div id="stream_8" class="col-md-6 card-project card-project-8 ">

                    </div>
                    <div class="col-md-6 border-left">
                        <div class="row">
                            <div id="stream_9" class="col-md-12 card-project card-project-9 height-250">

                            </div>
                            <div id="stream_10" class="col-md-12 card-project card-project-10 border-top border-bottom height-250">

                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div id="stream_11" class="col-md-6 card-project card-project-11 border-top height-250">

                    </div>
                    <div id="stream_0" class="col-md-6 card-project card-project-0 border-left height-250">

                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- contact -->
    <div class="container-fluid responsive-media-body" style="background: #333;padding: 100px 50px 40px 50px">
        <div class="row">
            <div class="col-md-6" style="color: white;">
                <img src="./assets/frontend/img/bti_logo_hires_bw.gif" style="width: 280px;margin-left: -15px;margin-bottom: 10px;">
                <h2>Hubungi <span style="color:red">kami</span></h2>
                <br>
                <div class="row m-t-20">
                    <div class="col-sm-1">
                        <i class="material-icons" style="font-size:20px;color:red">my_location</i>
                    </div>
                    <div class="col-sm-11">
                        <p class="m-b-0 ">
                            PT. Bonecom Tricom
                            JPlaza ASIA
                            Jln. Jend. Sudirman Kav 59, Level 26th, Jakarta Selatan. 12190, Indonesia. </p>
                    </div>
                </div>
                <div class="row m-t-20">
                    <div class="col-sm-1">
                        <i class="material-icons" style="font-size:20px;color:red">settings_phone</i>
                    </div>
                    <div class="col-sm-11">
                        <p class="m-b-0 ">(+62) 21 5140 1234 | (+62) 21 5140 1222</p>

                    </div>
                </div>
                <div class="row m-t-20">
                    <div class="col-sm-1">
                        <i class="material-icons" style="font-size:20px;color:red">email</i>
                    </div>
                    <div class="col-sm-11">
                        <p class="m-b-0 ">hr@bonecomtricom.com </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 d-lg-none d-block" style="color:white;margin-top: 50px;">
                <hr style="border-top:1px solid rgba(244, 244, 244, 0.32)"><br>
                <center><label for="">© 2019 copyright Infomedia Nusantara</label></center>
            </div>

        </div>
    </div>


</div>

<script>
    function navigation_menu_job_by_stream(group_code) {
        if ($("#bool_menu_job_by_stream").val() == 1) {
            $("#navigation_menu_job_by_stream").animate({
                width: '0%',
                opacity: '0'
            }, 2000);
            $("#bool_menu_job_by_stream").val(0);
            $("#navigation_menu_job_by_stream").css('z-index', 0);
            $("#menu_navbar").show();
            $("#btn_close_job_stream").hide();
            $("#home_content").css('position', 'relative');

            $("#navigation_menu_job_by_stream").removeClass("navigation_menu_job_by_stream_phone");
            jQuery("#stream_1").attr("tabindex", -1).focus();
        } else {
            $("#navigation_menu_job_by_stream").animate({
                width: '94%',
                opacity: '1'
            });
            $("#bool_menu_job_by_stream").val(1);
            $("#navigation_menu_job_by_stream").css('z-index', 10);
            $("#home_content").css('position', 'fixed');
            $("#menu_navbar").hide();
            $("#btn_close_job_stream").show();
            $("#navigation_menu_job_by_stream").addClass("navigation_menu_job_by_stream_phone");

            $("#name_stream_detail").text($("#title_stream_" + group_code).text());
            $("#lowongan_tersedia_stream").text($("#total_vacancy_stream_" + group_code).text());
            // console.log(group_code);
            load_vacancy_by_company('', $("#code_stream_" + group_code).text(), 'stream');
        }
    }


    function load_list_company() {
        $.ajax({
                url: 'https://recruit.infomedia.co.id/home/load_list_company',
                type: 'POST',
                dataType: 'json',
            })
            .done(function(data) {
                $("#list_company").html('');
                list_comp = '';

                $.each(data, function(index, value) {

                    list_comp = list_comp + `<div class="col-lg-2 col-md-3 col-6  card-company my-auto" onclick="detail_company(` + value.id + `)" style="margin: 10px 0px;padding: 50px 20px;text-align:center;">
            <img class="my-auto" id="company_logo_` + value.id + `" src="https://recruit.infomedia.co.id//assets/backend/images/company_logo/` + value.logo + `" style="width: inherit;">
            <div style="display:none">
              <p id="company_name_` + value.id + `">` + value.company_name + `</p>
              <p id="email_name_` + value.id + `">` + value.email_support + `</p>
              <p id="phone_name_` + value.id + `">` + value.phone_no + `</p>
              <p id="website_name_` + value.id + `">` + value.website_url + `</p>
              <p id="industry_name_` + value.id + `">` + value.industry + `</p>
              <p id="alamat_name_` + value.id + `">` + value.address + `</p>
              <div id="description_` + value.id + `">` + value.company_description + `</div>
              <div id="short_description_` + value.id + `">` + value.company_short_description + `</div>
            </div>
        </div>`;
                });

                $("#list_company").html(list_comp);
            })
            .fail(function() {
                NProgress.done();
            });
    }

    function load_vacancy_by_company(id, stream, from_section) {

        $.ajax({
            url: 'https://recruit.infomedia.co.id/job/loadRecord/' + 0,
            type: 'post',
            data: {
                company: id,
                stream: $("#code_stream_" + stream).text(),
                jenjang: '',
                count_page: 100,
            },
            dataType: 'json',
            beforeSend: function() {
                if (from_section == 'company') {
                    from_section_id = 'list_vacancy_by_company';
                    pagination = 'pagination';
                    lowongan_tersedia = 'lowongan_tersedia';
                } else {
                    from_section_id = 'list_vacancy_by_stream';
                    pagination = 'pagination_stream';
                    lowongan_tersedia = 'lowongan_tersedia_stream';
                }
                $('#' + from_section_id).html('<div class="col-xs-12 mx-auto text-center"><div class="d-flex justify-content-center"><i class="fa fa-spin fa-3x fa-circle-o-notch"></i></div></div>');
            },
            success: function(response) {
                $('#' + from_section_id).html('');
                $('#' + pagination).html(response.pagination);
                $("#" + lowongan_tersedia).text(response.result.length);
                if (response.result.length < 1) {
                    $('#' + from_section_id).html('');
                } else {

                    $.each(response.result, function(i, val) {

                        href = val.vacancy_base_url + 'job/detail/' + val.vacancy_id;

                        $("#" + from_section_id).append('<div class="row card-list-vacancy" >\
                          <div class="col-md-2" style="padding:10px;background:whitesmoke">\
                            <img src="' + val.vacancy_base_url + 'assets/backend/images/company_logo/' + val.vacancy_logo_company + '" alt="" style="width:inherit;height:inherit;position: inherit;top: 50%;left: 50%;transform: translate(-50%, -50%);">\
                          </div>\
                          <div class="col-md-7" style="padding:5px 20px">\
                            <h4 style="margin-bottom: 0px;font-weight: bold;">' + val.vacancy_name + '</h4>\
                            <hr>\
                            <p>' + val.job_description + ' </p>\
                          </div>\
                          <div class="col-md-3" style="padding:5px 20px">\
                            <span>Bidang Pekerjaan</span><br>\
                            <b>' + val.stream_group_name + '</b><br><br>\
                            <span>Jenjang</span><br>\
                            <b>' + val.education_name + '</b>\
                            <br><br>\
                            <a href="' + href + '" class="btn btn-danger">Detail Pekerjaan</a>\
                          </div>\
                        </div>');
                    });
                }
            }
        });
    }

    function generate_html_stream() {
        $.ajax({
                url: 'https://recruit.infomedia.co.id/home/load_html_stream',
                type: 'POST',
                dataType: 'json',
            })
            .done(function(data) {
                i = 0;
                $.each(data, function(index, value) {
                    $("#stream_" + i).html(`<div onclick=navigation_menu_job_by_stream("` + value.group_code + `")><i class="material-icons" style="font-size: 40px;">layers</i>
        <hr class="hr-job-specialist">
        <h4 id="title_stream_` + value.group_code + `" class="head-panel">` + value.group_name + `</h4>
        <h4 style="display:none" id="code_stream_` + value.group_code + `" class="head-panel">` + value.group_code + `</h4>
        <p><span id="total_vacancy_stream_` + i + `">` + value.total_vacancy + `</span> Vacancy</p></div>`);
                    i++;
                });
            });
    }

    load_list_company();
    generate_html_stream();
</script>
@endsection