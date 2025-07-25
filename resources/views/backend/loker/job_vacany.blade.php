@extends('backend.layouts.master')

@section('content')
<div class="container-fluid" style="background: white !important; min-height: 110vh;">
    <style media="screen">
        .card-list-vacancy {
            background: white;
            border-radius: 5px;
            padding: 20px;
            border: solid 1px #d9dee1;
            margin-bottom: 10px;
        }

        .card-vac:hover {
            background: white;
            border-radius: 5px;
            padding: 20px;
            border: solid 1px #d9dee1;
            margin-bottom: 10px;
            box-shadow: 1px 3px 3px 2px rgba(0, 0, 0, 0.11);
        }

        .badge-blue {
            background: #335eea;
            padding: 5px;
            border-radius: 5px;
            color: white;
        }

        .no-job-available {
            background: #cedaff url("https://recruit.infomedia.co.id/assets/frontend/images/icon_chrome_summit.png") no-repeat fixed center;
            background-size: cover;
            padding: 20px;
            border-radius: 5px;
        }

        /* desktop */
        @media (min-width: 768px) {
            .cover-job {
                padding-left: 35px !important;
                padding-right: 35px !important;
            }

            .cover-job-list {
                padding-left: 35px !important;
                padding-right: 35px !important;
            }

            .center-list-job {
                padding: 5px 20px;
            }

            .title_total_vac {
                margin: 0px 0px 15px 40px;
            }

            .card-list-saved-vacancy {
                background: white;
                border-radius: 5px;
                padding: 20px;
                border: solid 1px #d9dee1;
                margin-bottom: 20px;
                margin-right: auto;
                margin-bottom: 20px;
                width: 48%;
            }

            #filter_mobile {
                display: none;
            }

            #m_tab_menu {
                display: none;
            }

            #content_col_8 {
                margin-top: 60px;
            }
        }

        /* mobile */
        @media (max-width: 768px) {
            .cover-job {
                padding-left: 0px;
                padding-right: 0px;
            }

            .cover-job-list {
                padding-left: 15px !important;
                padding-right: 15px !important;
            }

            .center-list-job {
                padding: 15px 5px;
            }

            #content_row {
                margin-left: -3.50rem;
                margin-right: -3.50rem;
            }

            #content_col_4 {
                display: none;
            }

            #tab_menu {
                display: none;
            }

            #filter_mobile {
                display: block;
                padding: 0px 20px;
                margin-bottom: 15px;
            }

            #content_col_8 {
                flex: 0 0 100%;
                max-width: 100%;
                margin-top: 17px;
            }

            .title_total_vac {
                margin: 0px 0px 15px 23px;
            }

            .card-list-saved-vacancy {
                background: white;
                border-radius: 5px;
                padding: 20px;
                border: solid 1px #d9dee1;
                margin-bottom: 20px;
                margin-right: auto;
                margin-bottom: 20px;
                width: 102%;
            }
        }

        /* Style the tab */
        .tab {
            overflow: hidden;
            /* border: 1px solid #ccc;
      background-color: #f1f1f1; */
        }

        .tab button {
            background-color: inherit;
            float: left;
            border: none;
            outline: none;
            cursor: pointer;
            padding: 14px 16px;
            transition: 0.3s;
        }

        /* .tab button:hover {
            background-color: #ddd;
        } */

        .tab button.active {
            /* background-color: #ccc; */
            color: red;
            font-weight: bold;
            border-bottom: 3px solid red;
            background: #ff000012;
            border-top-right-radius: 5px;
            border-top-left-radius: 5px;
        }

        .tabcontent {
            display: none;
            padding: 6px 12px;
            /* border: 1px solid #ccc; */
            border-top: none;
        }

        .select2-container--default .select2-selection--single {
            background-color: #fff;
            border: 1px solid #aaaaaaa1;
            border-radius: 4px;
            padding: 2px !important;
            height: 35px !important;
        }

        .center_page {
            /* display: flex;
      justify-content: center; */
            /* margin-left: 0%;
      margin-right: -18%; */
        }

        .btn-reset {
            font-size: 17px;
            position: absolute;
            top: 7px;
        }

        .cursor {
            cursor: pointer;
        }

        .fixme {
            margin-top: 20px;
            color: black;
            background: white;
            padding: 10px;
            border-radius: 7px;
            border: 1px solid #d9dee1;
            position: fixed;
            width: 30%;
            justify-content: center;
            align-items: center;
        }

        .ribbon {
            position: absolute;
            z-index: 2;
            background: #0049d0;
            color: white;
            padding: 5px 10px 5px 10px;
            margin-top: -8px;
            margin-left: -27px;
            box-shadow: -3px 2px 0px 1px #aaaaaa70;
        }
    </style>


    <!-- Tab links desktop-->
    <div id="tab_menu" class="tab" style="border-bottom: 1px solid #e4e9f0;position: fixed;width: 100%;z-index: 100;background: white;">
        <button class="tablinks active" onclick="openCity(event, 'explore')" id="tablinks_1" style="margin-left: 30px;width:8%">
            <span class="material-icons" style="position: absolute;margin-left: -30px;">explore</span> Explore
        </button>
        <button class="tablinks" onclick="openCity(event, 'saved')" id="tablinks_2" style="width:11%">
            <span class="material-icons" style="position: absolute;margin-left: -30px;">bookmark</span> Saved Vacancy
        </button>
    </div>

    <!-- Tab links mobile-->
    <div id="m_tab_menu" class="tab row" style="position: relative;border-bottom: 1px solid #e4e9f0;">
        <div class="col-6">
            <button class="tablinks" onclick="openCity(event, 'explore')" id="m_tablinks_1" style="margin-left: 0px;width:100%">
                <span class="material-icons" style="position: absolute;margin-left: -30px;">explore</span> Explore
            </button>
        </div>
        <div class="col-6">
            <button class="tablinks" onclick="openCity(event, 'saved')" id="m_tablinks_2" style="width:100%">
                <span class="material-icons" style="position: absolute;margin-left: -30px;">bookmark</span> Saved Vacancy
            </button>
        </div>
    </div>

    <!-- Tab content -->
    <div id="explore" class="tabcontent" style="display: block;">
        <div class="container-fluid">
            <div class="row" id="content_row">
                <div class="col-4" id="content_col_4" style="padding-top: 40px;">
                    <div class="container" style="padding-bottom:50px;">
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

                        <nav id="navbar_top" class="navbar navbar-expand-lg navbar-light d-lg-none" style=" border-bottom: solid 0px #e6e6e6;min-height:10vh; z-index:1">
                            <a class="navbar-brand" href="">
                                <img id="img_logo_top_bar" class="img-logo" src="assets/frontend/images/21f88f0f5f61e6863c7add95ff3e7361.png" style="width:180px;" height="" alt="">
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

                                if ('Job_list' != 'Home' && 'Job_list' != 'Job' && 'Job_list' != 'Job Detail' && 'Job_list' != 'Detail Blog' && 'Job_list' != 'FAQ') {
                                    $("#navbar_top").addClass("d-lg-none");
                                    $("#img_logo_top_bar").attr("src", "assets/frontend/images/21f88f0f5f61e6863c7add95ff3e7361.png");
                                    $("#btn_collapse_navbar_top").css("color", "black");
                                }

                                if ('Job_list' == 'Home') {
                                    $("#navbar_top").addClass('navbar-style-home');
                                } else if ('Job_list' == 'Job Vacancy') {
                                    $("#navbar_top").hide();
                                }

                                if ('Job_list' == 'Job Vacancy Applicant') {
                                    $("#navbar_top").addClass("hide-nav");
                                }

                            });

                            function modal_show() {
                                $("#modal_menu").modal('show');
                            }
                        </script>

                        <input name="csrf_sso_tg" value="b08bb7eec9802ef34a68c25a5355fd8a" style="display:none;">

                        <div class="row fixme">
                            <div class="mb-4 row" style="width: 100%; padding-left: 14px;">
                                <div class="col-md-8" style="font-size: 17px;"><b>Filter Pencarian</b></div>
                                <input hidden="" name="total_job_available" id="total_job_available" value="0">
                                <div class="col-md-4" style="text-align: right;">
                                    <button type="button" class="btn btn-outline-danger btn-sm cursor" onclick="reset()">
                                        <span class="material-icons btn-reset">delete</span><span style="margin-left: 20px;">Reset</span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label>Nama Lowongan</label>
                                <div class="input-group" style="height: 40px;">
                                    <input type="text" class="form-control" name="name_vacancy" id="name_vacancy" placeholder="Cari kata kunci vacancy">
                                    <span onclick="load_job_list_filter(10, 0)" class="input-group-addon" style="background: #cccccc;border-top-right-radius: 5px;border-bottom-right-radius: 5px;">
                                        <span class="material-icons" style="color: black;padding: 7px;background: #cccccc; cursor: pointer;">search</span>
                                    </span>
                                </div>
                            </div>

                            <div class="mt-2 col-md-12">
                                <div class="form-group">
                                    <label for="">Nama perusahaan</label>
                                    <select onchange="load_job_list_filter(5, 0)" class="form-control select2 select2-hidden-accessible" multiple="" name="company_filter_job[]" id="company_filter_job" style="width:100%; height:10px" tabindex="-1" aria-hidden="true">
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Bidang Pekerjaan</label>
                                    <select onchange="load_job_list_filter(5, 0)" class="form-control select2 select2-hidden-accessible" multiple="" name="stream[]" id="stream" style="width:100%; height:10px" tabindex="-1" aria-hidden="true">

                                    </select>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Jenjang Pendidikan</label>
                                    <select onchange="load_job_list_filter(5, 0)" class="form-control select2 select2-hidden-accessible" multiple="" name="jenjang[]" id="jenjang" style="width:100%; height:10px" tabindex="-1" aria-hidden="true">

                                    </select>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Lokasi Penempatan</label>
                                    <select onchange="load_job_list_filter(5, 0)" class="form-control select2 select2-hidden-accessible" multiple="" name="lokasi[]" id="lokasi" style="width:100%; height:10px" tabindex="-1" aria-hidden="true">

                                    </select>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


                <div class="col-8" id="content_col_8">
                    <h2 class="title_total_vac">
                        <b><span id="total_job_vacancy">207</span> Lowongan <span id="total_job_event"></span> Tersedia</b>
                    </h2>

                    <div id="filter_mobile">
                        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample" style="width: 100%;">
                            Filter Pencarian
                        </button>
                        <div class="collapse" id="collapseExample">
                            <div class="card card-body">
                                <input name="csrf_sso_tg" value="b08bb7eec9802ef34a68c25a5355fd8a" style="display:none;">

                                <div class="col-md-12">
                                    <label>Nama Lowongan</label>
                                    <div class="input-group" style="height: 40px;">
                                        <input type="text" class="form-control" name="m_name_vacancy" id="m_name_vacancy" placeholder="Cari kata kunci vacancy">
                                        <span onclick="m_load_job_list_filter(10, 0)" class="input-group-addon" style="background: #cccccc;border-top-right-radius: 5px;border-bottom-right-radius: 5px;">
                                            <span class="material-icons" style="color: black;padding: 7px;background: #cccccc; cursor: pointer;">search</span>
                                        </span>
                                    </div>
                                </div>



                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">Bidang Pekerjaan</label>
                                        <select onchange="m_load_job_list(5, 0)" class="form-control select2 select2-hidden-accessible" multiple="" name="m_stream[]" id="m_stream" style="width:100%; height:10px" tabindex="-1" aria-hidden="true">
                                            <option value="2">Finance Accounting & Tax</option>
                                            <option value="3">Logistic</option>
                                            <option value="7">Quality</option>
                                            <option value="39">IT</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">Jenjang Pendidikan</label>
                                        <select onchange="m_load_job_list(5, 0)" class="form-control select2 select2-hidden-accessible" multiple="" name="m_jenjang[]" id="m_jenjang" style="width:100%; height:10px" tabindex="-1" aria-hidden="true">
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">Lokasi Penempatan</label>
                                        <select onchange="m_load_job_list(5, 0)" class="form-control select2 select2-hidden-accessible" multiple="" name="m_lokasi[]" id="m_lokasi" style="width:100%; height:10px" tabindex="-1" aria-hidden="true">

                                        </select>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="container-fluid cover-job-list">
                        <div class="container">
                            <div class="result-wrapper">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="result-list-wrapper" id="list_job_event"></div>
                                        <div class="result-list-wrapper" id="list_vacancy_urgent">
                                            <div class="row card-list-vacancy card-vac">
                                                <div class="ribbon">Vacancy Urgent</div>
                                                <div class="col-md-2"> <img src="https://recruit.infomedia.co.id/assets/backend/images/company_logo/1a6b173689253eb15d3ca33323ecff1f.png" alt="" style="width:inherit;height:inherit;position: inherit;top: 50%;left: 50%;transform: translate(-50%, -50%);display:none;">
                                                    <div class="relative" style="position: relative;display:none;"><iframe class="chartjs-hidden-iframe" style="display: block; overflow: hidden; border: 0px; margin: 0px; inset: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;" tabindex="-1"></iframe><canvas id="chartProgress_8974" width="0" height="0" style="display: none; height: 0px; width: 0px;"></canvas>
                                                        <div class="absolute-center text-center" style="position:absolute;top: 63%;left: 50%;transform: translate(-50%, -50%);"><label style="line-height: 1;font-size: x-small;">Kuota Kandidat</label></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-7 center-list-job">
                                                    <h4 style="margin-bottom: 0px;font-weight: bold;">Contact Center Bahasa Inggris Bank Milik Negara - Semarang</h4>
                                                    <p style="display:none;">null</p>
                                                    <hr>
                                                    <p>Contact Center</p>
                                                </div>
                                                <div class="col-md-3" style="padding:5px"> <span>Bidang Pekerjaan</span><br> <b>Inbound Call/CS/Frontliner</b><br><br> <span>Jenjang</span><br> <b>Diploma III</b> <br><br> <a href="https://recruit.infomedia.co.id/main#job_vacancy/job_detail/NDYwNjk5MDIzYTM0ZWExODZhYTAxNTc5YjBjNGY1MmQ5NmQ1ZDI0YmNkYmNkMTEzNGY5N2M0ZTU1MGY1Y2E0ZWU1MzJjMmE0YTM2OWZhODkzYzdhYjRkY2E2ZjBiYzBlZWJlMzU5N2ZhOWY5MjkxOGJiYWUzNjJhNDlkY2VjN2U5SzYzOXlPR1h1TFdFbHRnNU5nVmpnN0pIbjcvWU1DSGxqV241Z1VVcUJ3PQ" target="_blank" class="btn btn-danger">Detail Pekerjaan</a> <span id="btn_save_8974"><button type="button" class="btn btn-sm btn-outline-primary cursor" onclick="save_job(`saved`,8974)" data-bs-toggle="tooltip" data-bs-placement="right" title="Save"><span class="material-icons">bookmark_border</span></button></span> </div>
                                            </div>
                                            <div class="row card-list-vacancy card-vac">
                                                <div class="ribbon">Vacancy Urgent</div>
                                                <div class="col-md-2"> <img src="https://recruit.infomedia.co.id/assets/backend/images/company_logo/1a6b173689253eb15d3ca33323ecff1f.png" alt="" style="width:inherit;height:inherit;position: inherit;top: 50%;left: 50%;transform: translate(-50%, -50%);display:none;">
                                                    <div class="relative" style="position: relative;display:none;"><iframe class="chartjs-hidden-iframe" style="display: block; overflow: hidden; border: 0px; margin: 0px; inset: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;" tabindex="-1"></iframe><canvas id="chartProgress_8973" width="0" height="0" style="display: none; height: 0px; width: 0px;"></canvas>
                                                        <div class="absolute-center text-center" style="position:absolute;top: 63%;left: 50%;transform: translate(-50%, -50%);"><label style="line-height: 1;font-size: x-small;">Kuota Kandidat</label></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-7 center-list-job">
                                                    <h4 style="margin-bottom: 0px;font-weight: bold;">CSR GraPARI MEDAN</h4>
                                                    <p style="display:none;">null</p>
                                                    <hr>
                                                    <p>Customer Service Representative</p>
                                                </div>
                                                <div class="col-md-3" style="padding:5px"> <span>Bidang Pekerjaan</span><br> <b>Inbound Call/CS/Frontliner</b><br><br> <span>Jenjang</span><br> <b>Diploma III</b> <br><br> <a href="https://recruit.infomedia.co.id/main#job_vacancy/job_detail/ODJmMmUzODEyNGU5ZDc0MTI2OGYzZDNjYzA1NDIzNDJlYjhmMjRhMDc2MWIzODljOGNjMjdkOGRhMzE3YTFkOTc0MGQyNzM1MmVkNTI0YmE1OGE1ZjRiOGI0YzA2NjNjYzBiNTFkMzQ1NmUzMzY4OTA4OTljNmIwZjBkYTA4Y2FCUlJkSlY1NHQyRExBT09TUFFMUE1SS2RtTmlLaXJsMk1ldEQxZEZjM2J3PQ" target="_blank" class="btn btn-danger">Detail Pekerjaan</a> <span id="btn_save_8973"><button type="button" class="btn btn-sm btn-outline-primary cursor" onclick="save_job(`saved`,8973)" data-bs-toggle="tooltip" data-bs-placement="right" title="Save"><span class="material-icons">bookmark_border</span></button></span> </div>
                                            </div>
                                            <div class="row card-list-vacancy card-vac">
                                                <div class="ribbon">Vacancy Urgent</div>
                                                <div class="col-md-2"> <img src="https://recruit.infomedia.co.id/assets/backend/images/company_logo/1a6b173689253eb15d3ca33323ecff1f.png" alt="" style="width:inherit;height:inherit;position: inherit;top: 50%;left: 50%;transform: translate(-50%, -50%);display:none;">
                                                    <div class="relative" style="position: relative;display:none;"><iframe class="chartjs-hidden-iframe" style="display: block; overflow: hidden; border: 0px; margin: 0px; inset: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;" tabindex="-1"></iframe><canvas id="chartProgress_8972" width="0" height="0" style="display: none; height: 0px; width: 0px;"></canvas>
                                                        <div class="absolute-center text-center" style="position:absolute;top: 63%;left: 50%;transform: translate(-50%, -50%);"><label style="line-height: 1;font-size: x-small;">Kuota Kandidat</label></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-7 center-list-job">
                                                    <h4 style="margin-bottom: 0px;font-weight: bold;">CSR GraPARI SIBOLGA</h4>
                                                    <p style="display:none;">null</p>
                                                    <hr>
                                                    <p>Customer Service Representative</p>
                                                </div>
                                                <div class="col-md-3" style="padding:5px"> <span>Bidang Pekerjaan</span><br> <b>Inbound Call/CS/Frontliner</b><br><br> <span>Jenjang</span><br> <b>Diploma III</b> <br><br> <a href="https://recruit.infomedia.co.id/main#job_vacancy/job_detail/MmQ1ZjIyZWNiYjRlZWQ4NTc5M2I4ZmY3ODVjMTgzNzUyNTY4ZTk4NThiZWJmYmRjNDkwZTExYTViNTE0ZjMzZWQ0NjNkNWIwMzViMzZhNTUzY2M5MzA5MTBlMjViNjQ2NzI1NjM2MWFjNWQ0NWE5YzRiOTgwOWE3Zjc1YmQ5ZmRQVWFPNUhIamcxYnhjUGxSeVhDOVd4UXo1SzF2ajRkRGQ1bFVzSVo1c1AwPQ" target="_blank" class="btn btn-danger">Detail Pekerjaan</a> <span id="btn_save_8972"><button type="button" class="btn btn-sm btn-outline-primary cursor" onclick="save_job(`saved`,8972)" data-bs-toggle="tooltip" data-bs-placement="right" title="Save"><span class="material-icons">bookmark_border</span></button></span> </div>
                                            </div>
                                            <div class="row card-list-vacancy card-vac">
                                                <div class="ribbon">Vacancy Urgent</div>
                                                <div class="col-md-2"> <img src="https://recruit.infomedia.co.id/assets/backend/images/company_logo/1a6b173689253eb15d3ca33323ecff1f.png" alt="" style="width:inherit;height:inherit;position: inherit;top: 50%;left: 50%;transform: translate(-50%, -50%);display:none;">
                                                    <div class="relative" style="position: relative;display:none;"><iframe class="chartjs-hidden-iframe" style="display: block; overflow: hidden; border: 0px; margin: 0px; inset: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;" tabindex="-1"></iframe><canvas id="chartProgress_8971" width="0" height="0" style="display: none; height: 0px; width: 0px;"></canvas>
                                                        <div class="absolute-center text-center" style="position:absolute;top: 63%;left: 50%;transform: translate(-50%, -50%);"><label style="line-height: 1;font-size: x-small;">Kuota Kandidat</label></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-7 center-list-job">
                                                    <h4 style="margin-bottom: 0px;font-weight: bold;">CSR GraPARI PEMATANG SIANTAR</h4>
                                                    <p style="display:none;">null</p>
                                                    <hr>
                                                    <p>Customer Service Representative</p>
                                                </div>
                                                <div class="col-md-3" style="padding:5px"> <span>Bidang Pekerjaan</span><br> <b>Inbound Call/CS/Frontliner</b><br><br> <span>Jenjang</span><br> <b>Diploma III</b> <br><br> <a href="https://recruit.infomedia.co.id/main#job_vacancy/job_detail/ZGUxYTRjNmVjY2U3NjY4YmQ2YTRjM2FkOTVmYTFlYWI3Y2Y1OTkwZDFhOTI3YjY2N2Y3NDk4ZDM4YjA3ZDc2M2E4MGVmZGEwYTViOTJhM2MyZjllZDkzNzBlYzBkZWE0MzE2OWExNjMzMTI0YjM1MTc3ZjgzMTlkMjlhYmNiYmNyUFppYkRtNXo2RnBNbU1NS2R0dng3RDd2R0ptSmN2UWxCNmlmeEVkNGRnPQ" target="_blank" class="btn btn-danger">Detail Pekerjaan</a> <span id="btn_save_8971"><button type="button" class="btn btn-sm btn-outline-primary cursor" onclick="save_job(`saved`,8971)" data-bs-toggle="tooltip" data-bs-placement="right" title="Save"><span class="material-icons">bookmark_border</span></button></span> </div>
                                            </div>
                                            <div class="row card-list-vacancy card-vac">
                                                <div class="ribbon">Vacancy Urgent</div>
                                                <div class="col-md-2"> <img src="https://recruit.infomedia.co.id/assets/backend/images/company_logo/1a6b173689253eb15d3ca33323ecff1f.png" alt="" style="width:inherit;height:inherit;position: inherit;top: 50%;left: 50%;transform: translate(-50%, -50%);display:none;">
                                                    <div class="relative" style="position: relative;display:none;"><iframe class="chartjs-hidden-iframe" style="display: block; overflow: hidden; border: 0px; margin: 0px; inset: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;" tabindex="-1"></iframe><canvas id="chartProgress_8970" width="0" height="0" style="display: none; height: 0px; width: 0px;"></canvas>
                                                        <div class="absolute-center text-center" style="position:absolute;top: 63%;left: 50%;transform: translate(-50%, -50%);"><label style="line-height: 1;font-size: x-small;">Kuota Kandidat</label></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-7 center-list-job">
                                                    <h4 style="margin-bottom: 0px;font-weight: bold;">CSR GraPARI BINJAI</h4>
                                                    <p style="display:none;">null</p>
                                                    <hr>
                                                    <p>Customer Service Representative</p>
                                                </div>
                                                <div class="col-md-3" style="padding:5px"> <span>Bidang Pekerjaan</span><br> <b>Inbound Call/CS/Frontliner</b><br><br> <span>Jenjang</span><br> <b>Diploma III</b> <br><br> <a href="https://recruit.infomedia.co.id/main#job_vacancy/job_detail/MjQ3YzJjMzE2NTlhNjc0YzYyY2U4YTVmOGU1NDBlYTIwMzcyM2I2NzgyYWQyYmE2OTZhM2I5NTY1NTBmYjFkNjI1YmQxNjRlMTNiZjhkNmViMmY1NTE5ZmI1YjU2Njc1YThlMzFjOGQzOTg3NzNlOWNjNWY1N2RjOThjZWNhNWJIQ29tNFBFMm5hMm0yZDR2bkw3bTczSHRWT2szTTVzaHp1U2tucjlTNWVZPQ" target="_blank" class="btn btn-danger">Detail Pekerjaan</a> <span id="btn_save_8970"><button type="button" class="btn btn-sm btn-outline-primary cursor" onclick="save_job(`saved`,8970)" data-bs-toggle="tooltip" data-bs-placement="right" title="Save"><span class="material-icons">bookmark_border</span></button></span> </div>
                                            </div>
                                            <div class="row card-list-vacancy card-vac">
                                                <div class="ribbon">Vacancy Urgent</div>
                                                <div class="col-md-2"> <img src="https://recruit.infomedia.co.id/assets/backend/images/company_logo/1a6b173689253eb15d3ca33323ecff1f.png" alt="" style="width:inherit;height:inherit;position: inherit;top: 50%;left: 50%;transform: translate(-50%, -50%);display:none;">
                                                    <div class="relative" style="position: relative;display:none;"><iframe class="chartjs-hidden-iframe" style="display: block; overflow: hidden; border: 0px; margin: 0px; inset: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;" tabindex="-1"></iframe><canvas id="chartProgress_8969" width="0" height="0" style="display: none; height: 0px; width: 0px;"></canvas>
                                                        <div class="absolute-center text-center" style="position:absolute;top: 63%;left: 50%;transform: translate(-50%, -50%);"><label style="line-height: 1;font-size: x-small;">Kuota Kandidat</label></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-7 center-list-job">
                                                    <h4 style="margin-bottom: 0px;font-weight: bold;">CSR GraPARI LAMPUNG</h4>
                                                    <p style="display:none;">null</p>
                                                    <hr>
                                                    <p>Customer Service Representative</p>
                                                </div>
                                                <div class="col-md-3" style="padding:5px"> <span>Bidang Pekerjaan</span><br> <b>Inbound Call/CS/Frontliner</b><br><br> <span>Jenjang</span><br> <b>Diploma III</b> <br><br> <a href="https://recruit.infomedia.co.id/main#job_vacancy/job_detail/ZjM4YWJkM2ZmYTc3MGNhMWNiNjljOWJkMmQyZDA2NTFiNDQ4MjFiZDkzY2U4MWI3OWE2NzM4MzZlYmVhMmVhN2U3YzhmZTdhNmM2OTA5NDM4MzU4MTE3YmExOWU0MjYxOTlmMjA3MDJiM2UyMzQ4NTI3YmQ0YjkxYzU0ZDIxMTlNc3NqbVp3QjlHWXdSUngrdktkS1R5Vkx3SVYrbVk5cTk3dlJETkpPSHo0PQ" target="_blank" class="btn btn-danger">Detail Pekerjaan</a> <span id="btn_save_8969"><button type="button" class="btn btn-sm btn-outline-primary cursor" onclick="save_job(`saved`,8969)" data-bs-toggle="tooltip" data-bs-placement="right" title="Save"><span class="material-icons">bookmark_border</span></button></span> </div>
                                            </div>
                                            <div class="row card-list-vacancy card-vac">
                                                <div class="ribbon">Vacancy Urgent</div>
                                                <div class="col-md-2"> <img src="https://recruit.infomedia.co.id/assets/backend/images/company_logo/1a6b173689253eb15d3ca33323ecff1f.png" alt="" style="width:inherit;height:inherit;position: inherit;top: 50%;left: 50%;transform: translate(-50%, -50%);display:none;">
                                                    <div class="relative" style="position: relative;display:none;"><iframe class="chartjs-hidden-iframe" style="display: block; overflow: hidden; border: 0px; margin: 0px; inset: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;" tabindex="-1"></iframe><canvas id="chartProgress_8968" width="0" height="0" style="display: none; height: 0px; width: 0px;"></canvas>
                                                        <div class="absolute-center text-center" style="position:absolute;top: 63%;left: 50%;transform: translate(-50%, -50%);"><label style="line-height: 1;font-size: x-small;">Kuota Kandidat</label></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-7 center-list-job">
                                                    <h4 style="margin-bottom: 0px;font-weight: bold;">CSR GraPARI JAMBI</h4>
                                                    <p style="display:none;">null</p>
                                                    <hr>
                                                    <p>Customer Service Representative</p>
                                                </div>
                                                <div class="col-md-3" style="padding:5px"> <span>Bidang Pekerjaan</span><br> <b>Inbound Call/CS/Frontliner</b><br><br> <span>Jenjang</span><br> <b>Diploma III</b> <br><br> <a href="https://recruit.infomedia.co.id/main#job_vacancy/job_detail/NWZhYjkzYjA2MjA2NmNkMTcyYzIwYzc2MTQ2NWEwM2I3OWFlYTA5OWVkNDIwNzIyMWQ1NzUwOTQzNzNhZWIwMTIyZTFiZjlhZjRhMjk2YjNlYmZhMzc2NDFlMTM4OWY3MjVhMThkN2IzMDg2MDhhY2QxODc3NDhlMzQzYWMyZmJPdXR0eFJkamdURldiUDMzL3QrdEZVQXNLc3RIS294dFhvL3lmckRHWTBFPQ" target="_blank" class="btn btn-danger">Detail Pekerjaan</a> <span id="btn_save_8968"><button type="button" class="btn btn-sm btn-outline-primary cursor" onclick="save_job(`saved`,8968)" data-bs-toggle="tooltip" data-bs-placement="right" title="Save"><span class="material-icons">bookmark_border</span></button></span> </div>
                                            </div>
                                            <div class="row card-list-vacancy card-vac">
                                                <div class="ribbon">Vacancy Urgent</div>
                                                <div class="col-md-2"> <img src="https://recruit.infomedia.co.id/assets/backend/images/company_logo/1a6b173689253eb15d3ca33323ecff1f.png" alt="" style="width:inherit;height:inherit;position: inherit;top: 50%;left: 50%;transform: translate(-50%, -50%);display:none;">
                                                    <div class="relative" style="position: relative;display:none;"><iframe class="chartjs-hidden-iframe" style="display: block; overflow: hidden; border: 0px; margin: 0px; inset: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;" tabindex="-1"></iframe><canvas id="chartProgress_8967" width="0" height="0" style="display: none; height: 0px; width: 0px;"></canvas>
                                                        <div class="absolute-center text-center" style="position:absolute;top: 63%;left: 50%;transform: translate(-50%, -50%);"><label style="line-height: 1;font-size: x-small;">Kuota Kandidat</label></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-7 center-list-job">
                                                    <h4 style="margin-bottom: 0px;font-weight: bold;">CSR GraPARI PEKANBARU</h4>
                                                    <p style="display:none;">null</p>
                                                    <hr>
                                                    <p>Customer Service Representative</p>
                                                </div>
                                                <div class="col-md-3" style="padding:5px"> <span>Bidang Pekerjaan</span><br> <b>Inbound Call/CS/Frontliner</b><br><br> <span>Jenjang</span><br> <b>Diploma III</b> <br><br> <a href="https://recruit.infomedia.co.id/main#job_vacancy/job_detail/NjBhMDA0ODQ4MzZjMmZkY2RkZDBjOGQ1ZjRiYzgwYTI5ODM3MjNiNDY1NDcyZjc3ZWQyOWI1ZDU2NDdhNGYyZGYxZGU5Njk3YzZmZTZhZWQ5NjU0MzFkNzQzYzg5NDFmYjZjODc0MDVhNjVkNjAzYTdmODVjMTU3OGQ0NjBhNmNyRWp3MkNQdVFWbEV5cDBvNHo0K3Q3cVZKV2hGazh4UDc2S2UvOFd3VzE4PQ" target="_blank" class="btn btn-danger">Detail Pekerjaan</a> <span id="btn_save_8967"><button type="button" class="btn btn-sm btn-outline-primary cursor" onclick="save_job(`saved`,8967)" data-bs-toggle="tooltip" data-bs-placement="right" title="Save"><span class="material-icons">bookmark_border</span></button></span> </div>
                                            </div>
                                            <div class="row card-list-vacancy card-vac">
                                                <div class="ribbon">Vacancy Urgent</div>
                                                <div class="col-md-2"> <img src="https://recruit.infomedia.co.id/assets/backend/images/company_logo/1a6b173689253eb15d3ca33323ecff1f.png" alt="" style="width:inherit;height:inherit;position: inherit;top: 50%;left: 50%;transform: translate(-50%, -50%);display:none;">
                                                    <div class="relative" style="position: relative;display:none;"><iframe class="chartjs-hidden-iframe" style="display: block; overflow: hidden; border: 0px; margin: 0px; inset: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;" tabindex="-1"></iframe><canvas id="chartProgress_8966" width="0" height="0" style="display: none; height: 0px; width: 0px;"></canvas>
                                                        <div class="absolute-center text-center" style="position:absolute;top: 63%;left: 50%;transform: translate(-50%, -50%);"><label style="line-height: 1;font-size: x-small;">Kuota Kandidat</label></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-7 center-list-job">
                                                    <h4 style="margin-bottom: 0px;font-weight: bold;">CSR GraPARI BANDA ACEH</h4>
                                                    <p style="display:none;">null</p>
                                                    <hr>
                                                    <p>Customer Service Representative</p>
                                                </div>
                                                <div class="col-md-3" style="padding:5px"> <span>Bidang Pekerjaan</span><br> <b>Inbound Call/CS/Frontliner</b><br><br> <span>Jenjang</span><br> <b>Diploma III</b> <br><br> <a href="https://recruit.infomedia.co.id/main#job_vacancy/job_detail/N2Y2ZTYwYTE1OTg2YjJkZDY3OWUzYzhjOTQxM2FmMTdlMzAzODNjYWI2ZDRiMGVkMDAyM2E3NTdjYTIzN2I1NTc1NWJkZmViOTUzZWZhODA2MTc3ZTUyOTI0MTc1N2Y3NTU0ZGNmNGRmYmViMDQwOGU0ZDY3ZDNjY2Q4Y2NlOGVpYjVMZTZCaHM5TFhyMWlEM0lCYXAyZDBpVEE1NkZ5ZXBKNGRqS1ZuTWZBPQ" target="_blank" class="btn btn-danger">Detail Pekerjaan</a> <span id="btn_save_8966"><button type="button" class="btn btn-sm btn-outline-primary cursor" onclick="save_job(`saved`,8966)" data-bs-toggle="tooltip" data-bs-placement="right" title="Save"><span class="material-icons">bookmark_border</span></button></span> </div>
                                            </div>
                                            <div class="row card-list-vacancy card-vac">
                                                <div class="ribbon">Vacancy Urgent</div>
                                                <div class="col-md-2"> <img src="https://recruit.infomedia.co.id/assets/backend/images/company_logo/1a6b173689253eb15d3ca33323ecff1f.png" alt="" style="width:inherit;height:inherit;position: inherit;top: 50%;left: 50%;transform: translate(-50%, -50%);display:none;">
                                                    <div class="relative" style="position: relative;display:none;"><iframe class="chartjs-hidden-iframe" style="display: block; overflow: hidden; border: 0px; margin: 0px; inset: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;" tabindex="-1"></iframe><canvas id="chartProgress_8965" width="0" height="0" style="display: none; height: 0px; width: 0px;"></canvas>
                                                        <div class="absolute-center text-center" style="position:absolute;top: 63%;left: 50%;transform: translate(-50%, -50%);"><label style="line-height: 1;font-size: x-small;">Kuota Kandidat</label></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-7 center-list-job">
                                                    <h4 style="margin-bottom: 0px;font-weight: bold;">CSR GraPARI RANTAU PRAPAT</h4>
                                                    <p style="display:none;">null</p>
                                                    <hr>
                                                    <p>Customer Service Representative</p>
                                                </div>
                                                <div class="col-md-3" style="padding:5px"> <span>Bidang Pekerjaan</span><br> <b>Inbound Call/CS/Frontliner</b><br><br> <span>Jenjang</span><br> <b>Diploma III</b> <br><br> <a href="https://recruit.infomedia.co.id/main#job_vacancy/job_detail/NjI0OTA5Y2NhYzUyZjJlNmExYTQyMjZlNDY1OGZhMjhjZTQ5M2UzZjhhNTY1ZmI0MzI1YTA3YTNjYTE4YTVjYmNlM2RiNDY2OGU3YjI0N2M1YzFkNmYxMzg5ZTZiMTI1OGQ0ZTRjNThlZDQ4ZTY1NmY0Y2QyNDM5ZTE5OWZlYzd6ZnpXd1NZbFFmY1pNQ2JyM1B4WGFmS1JsZDh2bjEySWtoc0l6NG1udTAwPQ" target="_blank" class="btn btn-danger">Detail Pekerjaan</a> <span id="btn_save_8965"><button type="button" class="btn btn-sm btn-outline-primary cursor" onclick="save_job(`saved`,8965)" data-bs-toggle="tooltip" data-bs-placement="right" title="Save"><span class="material-icons">bookmark_border</span></button></span> </div>
                                            </div>
                                            <div class="row card-list-vacancy card-vac">
                                                <div class="ribbon">Vacancy Urgent</div>
                                                <div class="col-md-2"> <img src="https://recruit.infomedia.co.id/assets/backend/images/company_logo/1a6b173689253eb15d3ca33323ecff1f.png" alt="" style="width:inherit;height:inherit;position: inherit;top: 50%;left: 50%;transform: translate(-50%, -50%);display:none;">
                                                    <div class="relative" style="position: relative;display:none;"><iframe class="chartjs-hidden-iframe" style="display: block; overflow: hidden; border: 0px; margin: 0px; inset: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;" tabindex="-1"></iframe><canvas id="chartProgress_8934" width="0" height="0" style="display: none; height: 0px; width: 0px;"></canvas>
                                                        <div class="absolute-center text-center" style="position:absolute;top: 63%;left: 50%;transform: translate(-50%, -50%);"><label style="line-height: 1;font-size: x-small;">Kuota Kandidat</label></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-7 center-list-job">
                                                    <h4 style="margin-bottom: 0px;font-weight: bold;"> Engineer On Site Lembaga Militer Kalimantan Utara - Bulungan</h4>
                                                    <p style="display:none;">null</p>
                                                    <hr>
                                                    <p>Engineer On Site</p>
                                                </div>
                                                <div class="col-md-3" style="padding:5px"> <span>Bidang Pekerjaan</span><br> <b>Information Technology</b><br><br> <span>Jenjang</span><br> <b>S1-Perguruan Tinggi</b> <br><br> <a href="https://recruit.infomedia.co.id/main#job_vacancy/job_detail/ZTgzMTIzYjQ5YWVlMTE0ODU4OThmOTRmNWEzZjcxZjkwNGQ1YjkwNGJmZjNkM2JkYzkyNDU4NzgwZmI0OTcyMWFmMjFkYjJlZGVlMjU2N2QwN2YwZmU0YmYxNWY2NDdiNGQ1MDk4ZDc5OGEwOWU3ZGEwMWNlNmU4YmU4ZTYwODVRS2lRRkZxZUdrSmR2UWVsZzFVVVhYcVh1ZnVBc1VSemFrSVJHZUpERnBzPQ" target="_blank" class="btn btn-danger">Detail Pekerjaan</a> <span id="btn_save_8934"><button type="button" class="btn btn-sm btn-outline-primary cursor" onclick="save_job(`saved`,8934)" data-bs-toggle="tooltip" data-bs-placement="right" title="Save"><span class="material-icons">bookmark_border</span></button></span> </div>
                                            </div>
                                            <div class="row card-list-vacancy card-vac">
                                                <div class="ribbon">Vacancy Urgent</div>
                                                <div class="col-md-2"> <img src="https://recruit.infomedia.co.id/assets/backend/images/company_logo/1a6b173689253eb15d3ca33323ecff1f.png" alt="" style="width:inherit;height:inherit;position: inherit;top: 50%;left: 50%;transform: translate(-50%, -50%);display:none;">
                                                    <div class="relative" style="position: relative;display:none;"><iframe class="chartjs-hidden-iframe" style="display: block; overflow: hidden; border: 0px; margin: 0px; inset: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;" tabindex="-1"></iframe><canvas id="chartProgress_8935" width="0" height="0" style="display: none; height: 0px; width: 0px;"></canvas>
                                                        <div class="absolute-center text-center" style="position:absolute;top: 63%;left: 50%;transform: translate(-50%, -50%);"><label style="line-height: 1;font-size: x-small;">Kuota Kandidat</label></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-7 center-list-job">
                                                    <h4 style="margin-bottom: 0px;font-weight: bold;">Engineer On Site Lembaga Militer Sulawesi Barat - Mamuju</h4>
                                                    <p style="display:none;">null</p>
                                                    <hr>
                                                    <p>Engineer On Site</p>
                                                </div>
                                                <div class="col-md-3" style="padding:5px"> <span>Bidang Pekerjaan</span><br> <b>Information Technology</b><br><br> <span>Jenjang</span><br> <b>S1-Perguruan Tinggi</b> <br><br> <a href="https://recruit.infomedia.co.id/main#job_vacancy/job_detail/ZDA1ZmZhNmM3Nzk0NWY3OGY2YTNlNDViNjliN2EwNjFmOGE5ZGJlMmFjZjJjNmIwNDQ1OWZhZGI3NzBmOWQyMGVlNGQ2MTJiZTAwOThlZWU3ODMyNzQyNjBhYzY5NmUxZjEzODRiMTkxZjhkYjA0OWUwOGI3NzAwZGFlMzBhNmYxM3lmdGJwWVh1cnFlUmR5Vk90MUkvcVlWYitVSjZ0MHB6Um41N1JDZkdVPQ" target="_blank" class="btn btn-danger">Detail Pekerjaan</a> <span id="btn_save_8935"><button type="button" class="btn btn-sm btn-outline-primary cursor" onclick="save_job(`saved`,8935)" data-bs-toggle="tooltip" data-bs-placement="right" title="Save"><span class="material-icons">bookmark_border</span></button></span> </div>
                                            </div>
                                            <div class="row card-list-vacancy card-vac">
                                                <div class="ribbon">Vacancy Urgent</div>
                                                <div class="col-md-2"> <img src="https://recruit.infomedia.co.id/assets/backend/images/company_logo/1a6b173689253eb15d3ca33323ecff1f.png" alt="" style="width:inherit;height:inherit;position: inherit;top: 50%;left: 50%;transform: translate(-50%, -50%);display:none;">
                                                    <div class="relative" style="position: relative;display:none;"><iframe class="chartjs-hidden-iframe" style="display: block; overflow: hidden; border: 0px; margin: 0px; inset: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;" tabindex="-1"></iframe><canvas id="chartProgress_8930" width="0" height="0" style="display: none; height: 0px; width: 0px;"></canvas>
                                                        <div class="absolute-center text-center" style="position:absolute;top: 63%;left: 50%;transform: translate(-50%, -50%);"><label style="line-height: 1;font-size: x-small;">Kuota Kandidat</label></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-7 center-list-job">
                                                    <h4 style="margin-bottom: 0px;font-weight: bold;">AGENT CONTACT CENTER MASKAPAI PENERBANGAN YOGYAKARTA</h4>
                                                    <p style="display:none;">null</p>
                                                    <hr>
                                                    <p>AGENT INBOUND</p>
                                                </div>
                                                <div class="col-md-3" style="padding:5px"> <span>Bidang Pekerjaan</span><br> <b>Inbound Call/CS/Frontliner</b><br><br> <span>Jenjang</span><br> <b>Diploma III</b> <br><br> <a href="https://recruit.infomedia.co.id/main#job_vacancy/job_detail/Y2EwZjE0OTc1OTUzYTNjOWNlYWUwMzQzNTZhMzIyMjUyYjZmNzUwNWQ3ZTJiMmIwNTUxZTMxYzAzYTA0ZTFmMGQxNDBmNzA2ZGFhMmRjZmZlZDhkYWRlNDA2MWQ5NGQzYzM2YjhhZTAwOGY0NmUxNDI2NmFjMWRjZTQ5YTMzYTBlTlFCNkFITVF1R0J2b01YNWwyLytSQ1B0T1ppSW5IOXcwWEMvVDZZZ0ZVPQ" target="_blank" class="btn btn-danger">Detail Pekerjaan</a> <span id="btn_save_8930"><button type="button" class="btn btn-sm btn-outline-primary cursor" onclick="save_job(`saved`,8930)" data-bs-toggle="tooltip" data-bs-placement="right" title="Save"><span class="material-icons">bookmark_border</span></button></span> </div>
                                            </div>
                                            <div class="row card-list-vacancy card-vac">
                                                <div class="ribbon">Vacancy Urgent</div>
                                                <div class="col-md-2"> <img src="https://recruit.infomedia.co.id/assets/backend/images/company_logo/1a6b173689253eb15d3ca33323ecff1f.png" alt="" style="width:inherit;height:inherit;position: inherit;top: 50%;left: 50%;transform: translate(-50%, -50%);display:none;">
                                                    <div class="relative" style="position: relative;display:block;"><iframe class="chartjs-hidden-iframe" style="display: block; overflow: hidden; border: 0px; margin: 0px; inset: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;" tabindex="-1"></iframe><canvas id="chartProgress_7526" width="133" height="300" style="display: block; height: 200px; width: 89px;"></canvas>
                                                        <div class="absolute-center text-center" style="position:absolute;top: 63%;left: 50%;transform: translate(-50%, -50%);"><label style="line-height: 1;font-size: x-small;">Kuota Kandidat</label></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-7 center-list-job">
                                                    <h4 style="margin-bottom: 0px;font-weight: bold;">QC Helpdesk Mitratel</h4>
                                                    <p style="display:none;">null</p>
                                                    <hr>
                                                    <p>Helpdesk</p>
                                                </div>
                                                <div class="col-md-3" style="padding:5px"> <span>Bidang Pekerjaan</span><br> <b>Inbound Call/CS/Frontliner</b><br><br> <span>Jenjang</span><br> <b>Diploma III</b> <br><br> <a href="https://recruit.infomedia.co.id/main#job_vacancy/job_detail/MmM5YTU0YTA0YjJhYTg0ZDNjNTU4ZjExNGE4OGI3NTU3ZTE2ZGJhNzNmZWI1MjhiYTFiZmFkZWVjOTM2Mjg2Njc4NWZmMDZhYWYwZmU4Y2UwMWUwZjE2MTc5MjgwMzMwNWUwNjM4NGFiODdkYzJiNDNlMTY0NDE2NTA2OTk4NGVhdEZWVU1VV3FsY3FWb0FLbDI0a2pnTEhsOGptMmk4R01UaDFqdkI1amhJPQ" target="_blank" class="btn btn-danger">Detail Pekerjaan</a> <span id="btn_save_7526"><button type="button" class="btn btn-sm btn-outline-primary cursor" onclick="save_job(`saved`,7526)" data-bs-toggle="tooltip" data-bs-placement="right" title="Save"><span class="material-icons">bookmark_border</span></button></span> </div>
                                            </div>
                                            <div class="row card-list-vacancy card-vac">
                                                <div class="ribbon">Vacancy Urgent</div>
                                                <div class="col-md-2"> <img src="https://recruit.infomedia.co.id/assets/backend/images/company_logo/1a6b173689253eb15d3ca33323ecff1f.png" alt="" style="width:inherit;height:inherit;position: inherit;top: 50%;left: 50%;transform: translate(-50%, -50%);display:none;">
                                                    <div class="relative" style="position: relative;display:none;"><iframe class="chartjs-hidden-iframe" style="display: block; overflow: hidden; border: 0px; margin: 0px; inset: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;" tabindex="-1"></iframe><canvas id="chartProgress_8918" width="0" height="0" style="display: none; height: 0px; width: 0px;"></canvas>
                                                        <div class="absolute-center text-center" style="position:absolute;top: 63%;left: 50%;transform: translate(-50%, -50%);"><label style="line-height: 1;font-size: x-small;">Kuota Kandidat</label></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-7 center-list-job">
                                                    <h4 style="margin-bottom: 0px;font-weight: bold;">System Analyst Finance SSO</h4>
                                                    <p style="display:none;">null</p>
                                                    <hr>
                                                    <p>System Analyst Finance SSO</p>
                                                </div>
                                                <div class="col-md-3" style="padding:5px"> <span>Bidang Pekerjaan</span><br> <b>Finance</b><br><br> <span>Jenjang</span><br> <b>Diploma III</b> <br><br> <a href="https://recruit.infomedia.co.id/main#job_vacancy/job_detail/YjE3MjE5ZTQyZTRiMjQyMWZmNTI0OTk1ZDg2ZjkxMzEwNWE3N2M3ZDNiMTY2NWZjOTc2ODY3ZDkxZGE2MmRkMjlmYTM5ZDljNmRjMThhZTkxYzI2YTU1MWRmOGY4ZjljZTM2ZTFlN2UyNDU4NjhiOTQxZjJhMGE4MDdiYTEwMTRhOWl5VjByR3hGN3ZoU1k5TXlKMGZFcWFoSGY3aDdFbDc1dE9QSmVzVXNnPQ" target="_blank" class="btn btn-danger">Detail Pekerjaan</a> <span id="btn_save_8918"><button type="button" class="btn btn-sm btn-outline-primary cursor" onclick="save_job(`saved`,8918)" data-bs-toggle="tooltip" data-bs-placement="right" title="Save"><span class="material-icons">bookmark_border</span></button></span> </div>
                                            </div>
                                            <div class="row card-list-vacancy card-vac">
                                                <div class="ribbon">Vacancy Urgent</div>
                                                <div class="col-md-2"> <img src="https://recruit.infomedia.co.id/assets/backend/images/company_logo/1a6b173689253eb15d3ca33323ecff1f.png" alt="" style="width:inherit;height:inherit;position: inherit;top: 50%;left: 50%;transform: translate(-50%, -50%);display:none;">
                                                    <div class="relative" style="position: relative;display:none;"><iframe class="chartjs-hidden-iframe" style="display: block; overflow: hidden; border: 0px; margin: 0px; inset: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;" tabindex="-1"></iframe><canvas id="chartProgress_8911" width="0" height="0" style="display: none; height: 0px; width: 0px;"></canvas>
                                                        <div class="absolute-center text-center" style="position:absolute;top: 63%;left: 50%;transform: translate(-50%, -50%);"><label style="line-height: 1;font-size: x-small;">Kuota Kandidat</label></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-7 center-list-job">
                                                    <h4 style="margin-bottom: 0px;font-weight: bold;">Agent Transaksi R2R &amp; Tax Finance SSO</h4>
                                                    <p style="display:none;">null</p>
                                                    <hr>
                                                    <p>Agent Transaksi R2R &amp; Tax Finance SSO</p>
                                                </div>
                                                <div class="col-md-3" style="padding:5px"> <span>Bidang Pekerjaan</span><br> <b>Finance</b><br><br> <span>Jenjang</span><br> <b>Diploma III</b> <br><br> <a href="https://recruit.infomedia.co.id/main#job_vacancy/job_detail/ZTMzMWFlYmRkM2IyZDI5MjE1YzMzNWRiYTliMzQxODIxYmU5OGM5NDBhYmFmMWYwZjNjNmI1ZjNiMGMwNDk5ZDcyN2YwNDA2NjhjZmYyYzBiMTQyZmVhNTA4ODRlNjU0MDVlYjM3ODhlZTJjN2NjM2QzZDQ5M2VlMWVkMDJjMDY5Rlo4djFQdEtpaTdQSFpwcDk3U0t5TjVTL0RYcGtLeXpEbVA3UzhwZ3dRPQ" target="_blank" class="btn btn-danger">Detail Pekerjaan</a> <span id="btn_save_8911"><button type="button" class="btn btn-sm btn-outline-primary cursor" onclick="save_job(`saved`,8911)" data-bs-toggle="tooltip" data-bs-placement="right" title="Save"><span class="material-icons">bookmark_border</span></button></span> </div>
                                            </div>
                                            <div class="row card-list-vacancy card-vac">
                                                <div class="ribbon">Vacancy Urgent</div>
                                                <div class="col-md-2"> <img src="https://recruit.infomedia.co.id/assets/backend/images/company_logo/1a6b173689253eb15d3ca33323ecff1f.png" alt="" style="width:inherit;height:inherit;position: inherit;top: 50%;left: 50%;transform: translate(-50%, -50%);display:none;">
                                                    <div class="relative" style="position: relative;display:block;"><iframe class="chartjs-hidden-iframe" style="display: block; overflow: hidden; border: 0px; margin: 0px; inset: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;" tabindex="-1"></iframe><canvas id="chartProgress_7463" width="133" height="300" style="display: block; height: 200px; width: 89px;"></canvas>
                                                        <div class="absolute-center text-center" style="position:absolute;top: 63%;left: 50%;transform: translate(-50%, -50%);"><label style="line-height: 1;font-size: x-small;">Kuota Kandidat</label></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-7 center-list-job">
                                                    <h4 style="margin-bottom: 0px;font-weight: bold;">Agent Contact Center Layanan Kesehatan - Yogyakarta</h4>
                                                    <p style="display:none;">null</p>
                                                    <hr>
                                                    <p>Agent Contact Center (Multiskill)</p>
                                                </div>
                                                <div class="col-md-3" style="padding:5px"> <span>Bidang Pekerjaan</span><br> <b>Inbound Call/CS/Frontliner</b><br><br> <span>Jenjang</span><br> <b>Diploma III</b> <br><br> <a href="https://recruit.infomedia.co.id/main#job_vacancy/job_detail/NjFlZDlmMGU3YTFkY2E0MjlmMWU5YmQ4MzI1ZDdlYWMyNmI4MTIwNjMzOTJmZWRiOGZkZWM1M2JmYTk0NjU1MjVjYmFlODBlNGU0MWQ3OTc0YjcwNmZlMmE5YzAwYzY0ZjMyNDkyMmZiZThhNzFjZjQwODU5NGNmNjJjNzZhOWIvTStWM2N0V1hHcVczOHdqY05CN2VBNTZuLzJXc01UcVp6YVVMY2NFKys0PQ" target="_blank" class="btn btn-danger">Detail Pekerjaan</a> <span id="btn_save_7463"><button type="button" class="btn btn-sm btn-outline-primary cursor" onclick="save_job(`saved`,7463)" data-bs-toggle="tooltip" data-bs-placement="right" title="Save"><span class="material-icons">bookmark_border</span></button></span> </div>
                                            </div>
                                            <div class="row card-list-vacancy card-vac">
                                                <div class="ribbon">Vacancy Urgent</div>
                                                <div class="col-md-2"> <img src="https://recruit.infomedia.co.id/assets/backend/images/company_logo/1a6b173689253eb15d3ca33323ecff1f.png" alt="" style="width:inherit;height:inherit;position: inherit;top: 50%;left: 50%;transform: translate(-50%, -50%);display:none;">
                                                    <div class="relative" style="position: relative;display:block;"><iframe class="chartjs-hidden-iframe" style="display: block; overflow: hidden; border: 0px; margin: 0px; inset: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;" tabindex="-1"></iframe><canvas id="chartProgress_8764" width="133" height="300" style="display: block; height: 200px; width: 89px;"></canvas>
                                                        <div class="absolute-center text-center" style="position:absolute;top: 63%;left: 50%;transform: translate(-50%, -50%);"><label style="line-height: 1;font-size: x-small;">Kuota Kandidat</label></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-7 center-list-job">
                                                    <h4 style="margin-bottom: 0px;font-weight: bold;">Agent Call Center Rumah Sakit Denpasar (RS Ngoerah) - Denpasar</h4>
                                                    <p style="display:none;">null</p>
                                                    <hr>
                                                    <p>Agent IBC</p>
                                                </div>
                                                <div class="col-md-3" style="padding:5px"> <span>Bidang Pekerjaan</span><br> <b>Inbound Call/CS/Frontliner</b><br><br> <span>Jenjang</span><br> <b>Diploma III</b> <br><br> <a href="https://recruit.infomedia.co.id/main#job_vacancy/job_detail/MzgwYzU3NzVmYThmN2U4OWJmNDYyMDRhZWM3MWVmYTY2ZmUzOGZiOWU1ZDE1MDMzNTJlYzU0YmY3ZGZmNWU1YjZkODM2NTJjZDY4NjdiZGUzYjk3ZTliZmY5MzU2NjhjNTA5ZjI3MjA5MTNkOWQ5M2Y0ZmM0Y2E0ODJkZjc0YTJET0pGU2RZVFZrMVdwelJpOUhZbG96WnpHUStBZk5NV3ZVK2NJZFBKN1pjPQ" target="_blank" class="btn btn-danger">Detail Pekerjaan</a> <span id="btn_save_8764"><button type="button" class="btn btn-sm btn-outline-primary cursor" onclick="save_job(`saved`,8764)" data-bs-toggle="tooltip" data-bs-placement="right" title="Save"><span class="material-icons">bookmark_border</span></button></span> </div>
                                            </div>
                                            <div class="row card-list-vacancy card-vac">
                                                <div class="ribbon">Vacancy Urgent</div>
                                                <div class="col-md-2"> <img src="https://recruit.infomedia.co.id/assets/backend/images/company_logo/1a6b173689253eb15d3ca33323ecff1f.png" alt="" style="width:inherit;height:inherit;position: inherit;top: 50%;left: 50%;transform: translate(-50%, -50%);display:none;">
                                                    <div class="relative" style="position: relative;display:none;"><iframe class="chartjs-hidden-iframe" style="display: block; overflow: hidden; border: 0px; margin: 0px; inset: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;" tabindex="-1"></iframe><canvas id="chartProgress_8836" width="0" height="0" style="display: none; height: 0px; width: 0px;"></canvas>
                                                        <div class="absolute-center text-center" style="position:absolute;top: 63%;left: 50%;transform: translate(-50%, -50%);"><label style="line-height: 1;font-size: x-small;">Kuota Kandidat</label></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-7 center-list-job">
                                                    <h4 style="margin-bottom: 0px;font-weight: bold;">CSR GraPARI Telkomsel - Jayapura Papua</h4>
                                                    <p style="display:none;">null</p>
                                                    <hr>
                                                    <p>Costumer Service Representatative</p>
                                                </div>
                                                <div class="col-md-3" style="padding:5px"> <span>Bidang Pekerjaan</span><br> <b>Inbound Call/CS/Frontliner</b><br><br> <span>Jenjang</span><br> <b>Diploma III</b> <br><br> <a href="https://recruit.infomedia.co.id/main#job_vacancy/job_detail/OTNhZjQxZDlmZTRhMzE5YjBiNGY1YTMyOTk3YTQ0YzZkMTcwNDg0M2JjN2E5MDkxY2Y5ODgxNTNiNDdmM2Y3NjgzNjViNmIwZjQ3OTlhYzJjZWFmMTkzZjNmZmY4MWZjMjliNGZjNWJlZTk0NThmOWI4OTg4NDcxMTY3MzM4OTVNT2VLSGJLNTZOendqS2FnZDB4bzVTQ1QxUTVHSzhqM3NCVlVXSHdxZkFVPQ" target="_blank" class="btn btn-danger">Detail Pekerjaan</a> <span id="btn_save_8836"><button type="button" class="btn btn-sm btn-outline-primary cursor" onclick="save_job(`saved`,8836)" data-bs-toggle="tooltip" data-bs-placement="right" title="Save"><span class="material-icons">bookmark_border</span></button></span> </div>
                                            </div>
                                            <div class="row card-list-vacancy card-vac">
                                                <div class="ribbon">Vacancy Urgent</div>
                                                <div class="col-md-2"> <img src="https://recruit.infomedia.co.id/assets/backend/images/company_logo/1a6b173689253eb15d3ca33323ecff1f.png" alt="" style="width:inherit;height:inherit;position: inherit;top: 50%;left: 50%;transform: translate(-50%, -50%);display:none;">
                                                    <div class="relative" style="position: relative;display:none;"><iframe class="chartjs-hidden-iframe" style="display: block; overflow: hidden; border: 0px; margin: 0px; inset: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;" tabindex="-1"></iframe><canvas id="chartProgress_8837" width="0" height="0" style="display: none; height: 0px; width: 0px;"></canvas>
                                                        <div class="absolute-center text-center" style="position:absolute;top: 63%;left: 50%;transform: translate(-50%, -50%);"><label style="line-height: 1;font-size: x-small;">Kuota Kandidat</label></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-7 center-list-job">
                                                    <h4 style="margin-bottom: 0px;font-weight: bold;">CSR GraPARI Telkomsel - Bitung Yos Sudarso Sulawesi Utara</h4>
                                                    <p style="display:none;">null</p>
                                                    <hr>
                                                    <p>Costumer Service Representative</p>
                                                </div>
                                                <div class="col-md-3" style="padding:5px"> <span>Bidang Pekerjaan</span><br> <b>Inbound Call/CS/Frontliner</b><br><br> <span>Jenjang</span><br> <b>Diploma III</b> <br><br> <a href="https://recruit.infomedia.co.id/main#job_vacancy/job_detail/MzUwZTJmMGFhMzJmNmIzMWY1NGUxNmI3MGVmMjhhODVmNzFjOTY0YmVjYmZhYmIyYTY2YjIxZTA5MmYyMjkzNGY0ODlkMGJhMjA1NTQ1OWQzOTcxMjFiMTVmMjQ0NGIxZjVjODIzOTM2ODIwN2EzMGVjOGVmN2JkMzU2ODNhNmU1MG1oN29aLytYK3dFdTRuRmdjR0ZnLzFlYTZqak9nZjdBZjgvNVdOdjBRPQ" target="_blank" class="btn btn-danger">Detail Pekerjaan</a> <span id="btn_save_8837"><button type="button" class="btn btn-sm btn-outline-primary cursor" onclick="save_job(`saved`,8837)" data-bs-toggle="tooltip" data-bs-placement="right" title="Save"><span class="material-icons">bookmark_border</span></button></span> </div>
                                            </div>
                                            <div class="row card-list-vacancy card-vac">
                                                <div class="ribbon">Vacancy Urgent</div>
                                                <div class="col-md-2"> <img src="https://recruit.infomedia.co.id/assets/backend/images/company_logo/1a6b173689253eb15d3ca33323ecff1f.png" alt="" style="width:inherit;height:inherit;position: inherit;top: 50%;left: 50%;transform: translate(-50%, -50%);display:none;">
                                                    <div class="relative" style="position: relative;display:block;"><iframe class="chartjs-hidden-iframe" style="display: block; overflow: hidden; border: 0px; margin: 0px; inset: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;" tabindex="-1"></iframe><canvas id="chartProgress_8440" width="133" height="300" style="display: block; height: 200px; width: 89px;"></canvas>
                                                        <div class="absolute-center text-center" style="position:absolute;top: 63%;left: 50%;transform: translate(-50%, -50%);"><label style="line-height: 1;font-size: x-small;">Kuota Kandidat</label></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-7 center-list-job">
                                                    <h4 style="margin-bottom: 0px;font-weight: bold;">AGENT OBC Mitratel</h4>
                                                    <p style="display:none;">null</p>
                                                    <hr>
                                                    <p>-</p>
                                                </div>
                                                <div class="col-md-3" style="padding:5px"> <span>Bidang Pekerjaan</span><br> <b>OBC Agent Verifikator</b><br><br> <span>Jenjang</span><br> <b>SLTA/SMK</b> <br><br> <a href="https://recruit.infomedia.co.id/main#job_vacancy/job_detail/MmIwZTU1YjhhZTM2MmNjMGNmNjk0OWI0N2M1OWY1ZWM2Y2NhY2Q0MGI0Y2NmMzFhOTZhYzQ0YjI5NjEyZjY4YmFjYjYxMDE2MmIwNjgzZTM4MDYzOGMxOGFjMDMxYjY1YWFkM2E4YWVmNjUzOTY1ZTVhMjRhZWIxNDIyYjI1NTQ2SSsrR1R4L1hzSjJMK0UyM202QVA3NWdTczBuNGJxMEY5SW5tTitWbWtVPQ" target="_blank" class="btn btn-danger">Detail Pekerjaan</a> <span id="btn_save_8440"><button type="button" class="btn btn-sm btn-outline-primary cursor" onclick="save_job(`saved`,8440)" data-bs-toggle="tooltip" data-bs-placement="right" title="Save"><span class="material-icons">bookmark_border</span></button></span> </div>
                                            </div>
                                            <div class="row card-list-vacancy card-vac">
                                                <div class="ribbon">Vacancy Urgent</div>
                                                <div class="col-md-2"> <img src="https://recruit.infomedia.co.id/assets/backend/images/company_logo/1a6b173689253eb15d3ca33323ecff1f.png" alt="" style="width:inherit;height:inherit;position: inherit;top: 50%;left: 50%;transform: translate(-50%, -50%);display:none;">
                                                    <div class="relative" style="position: relative;display:none;"><iframe class="chartjs-hidden-iframe" style="display: block; overflow: hidden; border: 0px; margin: 0px; inset: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;" tabindex="-1"></iframe><canvas id="chartProgress_8813" width="0" height="0" style="display: none; height: 0px; width: 0px;"></canvas>
                                                        <div class="absolute-center text-center" style="position:absolute;top: 63%;left: 50%;transform: translate(-50%, -50%);"><label style="line-height: 1;font-size: x-small;">Kuota Kandidat</label></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-7 center-list-job">
                                                    <h4 style="margin-bottom: 0px;font-weight: bold;">IT SUPPORT MAYBANK - KENDARI</h4>
                                                    <p style="display:none;">null</p>
                                                    <hr>
                                                    <p>STANDBY IT SUPPORT</p>
                                                </div>
                                                <div class="col-md-3" style="padding:5px"> <span>Bidang Pekerjaan</span><br> <b>Information Technology</b><br><br> <span>Jenjang</span><br> <b>Diploma III</b> <br><br> <a href="https://recruit.infomedia.co.id/main#job_vacancy/job_detail/MmUxMTkwMTc0ODJlMjRlMGJjZjgwMjY2N2M3MWNkNDBiYjZjZjFhODI3ZDgxODMzMjA1ZTMzOTA5N2NhMTliZThiNWRkZDhiMWZhMTY3YTU0OWY1NGRjNzRkYTFkY2YwN2RiODE3NjI3NmUzYjE0MTgyZjUyYTU1OWUxZjU5OGF3LzVJakE1dDljckVVMEpSSG9oVi9mamNBbk1uTlZUQjIxeW9TemwrWCs0PQ" target="_blank" class="btn btn-danger">Detail Pekerjaan</a> <span id="btn_save_8813"><button type="button" class="btn btn-sm btn-outline-primary cursor" onclick="save_job(`saved`,8813)" data-bs-toggle="tooltip" data-bs-placement="right" title="Save"><span class="material-icons">bookmark_border</span></button></span> </div>
                                            </div>
                                            <div class="row card-list-vacancy card-vac">
                                                <div class="ribbon">Vacancy Urgent</div>
                                                <div class="col-md-2"> <img src="https://recruit.infomedia.co.id/assets/backend/images/company_logo/1a6b173689253eb15d3ca33323ecff1f.png" alt="" style="width:inherit;height:inherit;position: inherit;top: 50%;left: 50%;transform: translate(-50%, -50%);display:none;">
                                                    <div class="relative" style="position: relative;display:block;"><iframe class="chartjs-hidden-iframe" style="display: block; overflow: hidden; border: 0px; margin: 0px; inset: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;" tabindex="-1"></iframe><canvas id="chartProgress_8376" width="133" height="300" style="display: block; height: 200px; width: 89px;"></canvas>
                                                        <div class="absolute-center text-center" style="position:absolute;top: 63%;left: 50%;transform: translate(-50%, -50%);"><label style="line-height: 1;font-size: x-small;">Kuota Kandidat</label></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-7 center-list-job">
                                                    <h4 style="margin-bottom: 0px;font-weight: bold;">CSR Grapari Bukittinggi</h4>
                                                    <p style="display:none;">null</p>
                                                    <hr>
                                                    <p>Customer Service Representative</p>
                                                </div>
                                                <div class="col-md-3" style="padding:5px"> <span>Bidang Pekerjaan</span><br> <b>Inbound Call/CS/Frontliner</b><br><br> <span>Jenjang</span><br> <b>Diploma III</b> <br><br> <a href="https://recruit.infomedia.co.id/main#job_vacancy/job_detail/M2U0NjQ2YjcxMDQyYWNiNGRmYWNiNGM0MDE3YzdiYmYwYmM4NDAyYmY3NDc3NzM0OWNiMDlhOGIwOTU4NGM3MTY0OTIwY2NkZTUyZjFjNzBjMGZiZjYzODMwNzE4NGU1YmRkZTFkOTNhZjljOGIyNGIzNzUyYmJlNmZhNTIzYzVMajQvQnpkVUJaRFJVYjZQbkhoUDQzTFc5alBFRVZucmlSSXA5eEVHWks0PQ" target="_blank" class="btn btn-danger">Detail Pekerjaan</a> <span id="btn_save_8376"><button type="button" class="btn btn-sm btn-outline-primary cursor" onclick="save_job(`saved`,8376)" data-bs-toggle="tooltip" data-bs-placement="right" title="Save"><span class="material-icons">bookmark_border</span></button></span> </div>
                                            </div>
                                            <div class="row card-list-vacancy card-vac">
                                                <div class="ribbon">Vacancy Urgent</div>
                                                <div class="col-md-2"> <img src="https://recruit.infomedia.co.id/assets/backend/images/company_logo/1a6b173689253eb15d3ca33323ecff1f.png" alt="" style="width:inherit;height:inherit;position: inherit;top: 50%;left: 50%;transform: translate(-50%, -50%);display:none;">
                                                    <div class="relative" style="position: relative;display:block;"><iframe class="chartjs-hidden-iframe" style="display: block; overflow: hidden; border: 0px; margin: 0px; inset: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;" tabindex="-1"></iframe><canvas id="chartProgress_8377" width="133" height="300" style="display: block; height: 200px; width: 89px;"></canvas>
                                                        <div class="absolute-center text-center" style="position:absolute;top: 63%;left: 50%;transform: translate(-50%, -50%);"><label style="line-height: 1;font-size: x-small;">Kuota Kandidat</label></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-7 center-list-job">
                                                    <h4 style="margin-bottom: 0px;font-weight: bold;">CSR Grapari BATAM CENTER</h4>
                                                    <p style="display:none;">null</p>
                                                    <hr>
                                                    <p>Customer Service Representative</p>
                                                </div>
                                                <div class="col-md-3" style="padding:5px"> <span>Bidang Pekerjaan</span><br> <b>Inbound Call/CS/Frontliner</b><br><br> <span>Jenjang</span><br> <b>Diploma III</b> <br><br> <a href="https://recruit.infomedia.co.id/main#job_vacancy/job_detail/YTM5OTI5MzFkNGI1YzQ3OTFlNTI5YmQ0YmQ4ZmVlN2Q4ZDBiMzUyMzlkOWU1N2ZlYTAwZWVmZDZlN2VkMTNiN2I2YTJmYzA5MjAwZmY3ODU3MzUwOTQ1NGFlNjY0Yjg3NjUyMDUxZTI2OWJhOTEzNWNiOThiOWJhYTM5M2VjOTJNYVBvSTVYOVRpRVliWS96aUp4U3F1aFI3TFJhbDQ4VExqZUZCdm5nd0FzPQ" target="_blank" class="btn btn-danger">Detail Pekerjaan</a> <span id="btn_save_8377"><button type="button" class="btn btn-sm btn-outline-primary cursor" onclick="save_job(`saved`,8377)" data-bs-toggle="tooltip" data-bs-placement="right" title="Save"><span class="material-icons">bookmark_border</span></button></span> </div>
                                            </div>
                                            <div class="row card-list-vacancy card-vac">
                                                <div class="ribbon">Vacancy Urgent</div>
                                                <div class="col-md-2"> <img src="https://recruit.infomedia.co.id/assets/backend/images/company_logo/1a6b173689253eb15d3ca33323ecff1f.png" alt="" style="width:inherit;height:inherit;position: inherit;top: 50%;left: 50%;transform: translate(-50%, -50%);display:none;">
                                                    <div class="relative" style="position: relative;display:block;"><iframe class="chartjs-hidden-iframe" style="display: block; overflow: hidden; border: 0px; margin: 0px; inset: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;" tabindex="-1"></iframe><canvas id="chartProgress_8740" width="133" height="300" style="display: block; height: 200px; width: 89px;"></canvas>
                                                        <div class="absolute-center text-center" style="position:absolute;top: 63%;left: 50%;transform: translate(-50%, -50%);"><label style="line-height: 1;font-size: x-small;">Kuota Kandidat</label></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-7 center-list-job">
                                                    <h4 style="margin-bottom: 0px;font-weight: bold;">IT DATA CENTER OPERATION MAYBANK (23111)</h4>
                                                    <p style="display:none;">null</p>
                                                    <hr>
                                                    <p>Bertanggung Jawab Dalam Menjalankan Proses Batch EOD/EOM</p>
                                                </div>
                                                <div class="col-md-3" style="padding:5px"> <span>Bidang Pekerjaan</span><br> <b>Information Technology</b><br><br> <span>Jenjang</span><br> <b>Diploma III</b> <br><br> <a href="https://recruit.infomedia.co.id/main#job_vacancy/job_detail/YzFhMGQxZWVkMDg0YmEzOGFmZDAzNzcxOWY1YmI3OGExMjk4OWRmMmE0NTA2Y2E4MjQ2NWVjYjY2NWU0ZGY1YjMxN2Y1NzVkMzFjNGEwOGVmMWE1ZTA4NjcyMjcxMDljNzJkNmE3OGRiZTg5YTZhZjA1YzgwMzQ1OWUwYWQ1ZGVnUmhwWm53bHd4SFdZOGRSay9ZM01jWGJ3dUJrZWRaOXcydlRFUnVGVS9jPQ" target="_blank" class="btn btn-danger">Detail Pekerjaan</a> <span id="btn_save_8740"><button type="button" class="btn btn-sm btn-outline-primary cursor" onclick="save_job(`saved`,8740)" data-bs-toggle="tooltip" data-bs-placement="right" title="Save"><span class="material-icons">bookmark_border</span></button></span> </div>
                                            </div>
                                            <div class="row card-list-vacancy card-vac">
                                                <div class="ribbon">Vacancy Urgent</div>
                                                <div class="col-md-2"> <img src="https://recruit.infomedia.co.id/assets/backend/images/company_logo/1a6b173689253eb15d3ca33323ecff1f.png" alt="" style="width:inherit;height:inherit;position: inherit;top: 50%;left: 50%;transform: translate(-50%, -50%);display:none;">
                                                    <div class="relative" style="position: relative;display:block;"><iframe class="chartjs-hidden-iframe" style="display: block; overflow: hidden; border: 0px; margin: 0px; inset: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;" tabindex="-1"></iframe><canvas id="chartProgress_7343" width="133" height="300" style="display: block; height: 200px; width: 89px;"></canvas>
                                                        <div class="absolute-center text-center" style="position:absolute;top: 63%;left: 50%;transform: translate(-50%, -50%);"><label style="line-height: 1;font-size: x-small;">Kuota Kandidat</label></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-7 center-list-job">
                                                    <h4 style="margin-bottom: 0px;font-weight: bold;">Manager Corporate Planning PT Infomedia Nusantara</h4>
                                                    <p style="display:none;">null</p>
                                                    <hr>
                                                    <p>Corporate Planning</p>
                                                </div>
                                                <div class="col-md-3" style="padding:5px"> <span>Bidang Pekerjaan</span><br> <b>Strategy/Planning</b><br><br> <span>Jenjang</span><br> <b>S1-Perguruan Tinggi</b> <br><br> <a href="https://recruit.infomedia.co.id/main#job_vacancy/job_detail/MWYyNzdjNmQ1Njc5ZDdmNzMyYjg1ZDJmNDk0MGYxOGJiZWFkYjliMzI4MjU1MDE5MmM0M2NlYzNkMWZmM2Y2MDAyNWIxYmNiNzkxZGNkYjg3YTgzOGE1ODgxMWRmNjNlNmY0NGJkMGY5ZWVjMzhmNDZlYTZmY2QzMzIxOTNiNzd6TVU1VElqSk1rSDdld0E3dFBWaVJ1dkx0UmtSL1dCRWUybXhUQ1ZUamhvPQ" target="_blank" class="btn btn-danger">Detail Pekerjaan</a> <span id="btn_save_7343"><button type="button" class="btn btn-sm btn-outline-primary cursor" onclick="save_job(`saved`,7343)" data-bs-toggle="tooltip" data-bs-placement="right" title="Save"><span class="material-icons">bookmark_border</span></button></span> </div>
                                            </div>
                                            <div class="row card-list-vacancy card-vac">
                                                <div class="ribbon">Vacancy Urgent</div>
                                                <div class="col-md-2"> <img src="https://recruit.infomedia.co.id/assets/backend/images/company_logo/1a6b173689253eb15d3ca33323ecff1f.png" alt="" style="width:inherit;height:inherit;position: inherit;top: 50%;left: 50%;transform: translate(-50%, -50%);display:none;">
                                                    <div class="relative" style="position: relative;display:block;"><iframe class="chartjs-hidden-iframe" style="display: block; overflow: hidden; border: 0px; margin: 0px; inset: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;" tabindex="-1"></iframe><canvas id="chartProgress_8669" width="133" height="300" style="display: block; height: 200px; width: 89px;"></canvas>
                                                        <div class="absolute-center text-center" style="position:absolute;top: 63%;left: 50%;transform: translate(-50%, -50%);"><label style="line-height: 1;font-size: x-small;">Kuota Kandidat</label></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-7 center-list-job">
                                                    <h4 style="margin-bottom: 0px;font-weight: bold;">CAMPAIGN OFFICER Telkom DMO HQ</h4>
                                                    <p style="display:none;">null</p>
                                                    <hr>
                                                    <p>Reporting Support Specialist - Junior</p>
                                                </div>
                                                <div class="col-md-3" style="padding:5px"> <span>Bidang Pekerjaan</span><br> <b>Marketing/Sales</b><br><br> <span>Jenjang</span><br> <b>Diploma III</b> <br><br> <a href="https://recruit.infomedia.co.id/main#job_vacancy/job_detail/MjhhZWI2YjhkYzRjNzcwNjFiYWM0ZWZhNjkxYzQ1MmE0NTM0MGMzNjJjOWY3ZGE3NGRiZTE0Y2Q2ZGI2ZTgyOWQxYzAyN2JiODYxZmFjNWRkZDk1MDEyYWZjNmI1Y2Y1YjQ4YzI3ZmZlMWZjODBjM2Q2NTI1NjAyYjNmOTM4MTZkbGVoQU0wYzZjUGZxb1VIbmFoYWx6SHdrMHVUTXhRMngxUUVueGNmNkM4PQ" target="_blank" class="btn btn-danger">Detail Pekerjaan</a> <span id="btn_save_8669"><button type="button" class="btn btn-sm btn-outline-primary cursor" onclick="save_job(`saved`,8669)" data-bs-toggle="tooltip" data-bs-placement="right" title="Save"><span class="material-icons">bookmark_border</span></button></span> </div>
                                            </div>
                                            <div class="row card-list-vacancy card-vac">
                                                <div class="ribbon">Vacancy Urgent</div>
                                                <div class="col-md-2"> <img src="https://recruit.infomedia.co.id/assets/backend/images/company_logo/1a6b173689253eb15d3ca33323ecff1f.png" alt="" style="width:inherit;height:inherit;position: inherit;top: 50%;left: 50%;transform: translate(-50%, -50%);display:none;">
                                                    <div class="relative" style="position: relative;display:block;"><iframe class="chartjs-hidden-iframe" style="display: block; overflow: hidden; border: 0px; margin: 0px; inset: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;" tabindex="-1"></iframe><canvas id="chartProgress_8668" width="133" height="300" style="display: block; height: 200px; width: 89px;"></canvas>
                                                        <div class="absolute-center text-center" style="position:absolute;top: 63%;left: 50%;transform: translate(-50%, -50%);"><label style="line-height: 1;font-size: x-small;">Kuota Kandidat</label></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-7 center-list-job">
                                                    <h4 style="margin-bottom: 0px;font-weight: bold;">CSR GraPARI Telkomsel Sorong - Papua Barat</h4>
                                                    <p style="display:none;">null</p>
                                                    <hr>
                                                    <p>Costumer Service Representative</p>
                                                </div>
                                                <div class="col-md-3" style="padding:5px"> <span>Bidang Pekerjaan</span><br> <b>Inbound Call/CS/Frontliner</b><br><br> <span>Jenjang</span><br> <b>Diploma III</b> <br><br> <a href="https://recruit.infomedia.co.id/main#job_vacancy/job_detail/NTVlOGVjOTIxNzA3YmRiMWQ4YTUzMzVmYjQ0NTM4ZjMyYWJkNDA5ZmRhY2FmM2VmMmQ4ZjJmODIzZmYyYjk2MjllMTgwMDRmYWQxNzE0ZDUxNDk1ZjYyMTlmZWJlMDJjZTZiMzc0NDc2OTljOTg2OWVkYTg1MjVjMGUxYmQzOTFpYXFFYy9NeFhaQTVvTmszbWZRc25ndVhnUlo3S1BvbmZaRVhkeUVna1ZZPQ" target="_blank" class="btn btn-danger">Detail Pekerjaan</a> <span id="btn_save_8668"><button type="button" class="btn btn-sm btn-outline-primary cursor" onclick="save_job(`saved`,8668)" data-bs-toggle="tooltip" data-bs-placement="right" title="Save"><span class="material-icons">bookmark_border</span></button></span> </div>
                                            </div>
                                            <div class="row card-list-vacancy card-vac">
                                                <div class="ribbon">Vacancy Urgent</div>
                                                <div class="col-md-2"> <img src="https://recruit.infomedia.co.id/assets/backend/images/company_logo/1a6b173689253eb15d3ca33323ecff1f.png" alt="" style="width:inherit;height:inherit;position: inherit;top: 50%;left: 50%;transform: translate(-50%, -50%);display:none;">
                                                    <div class="relative" style="position: relative;display:block;"><iframe class="chartjs-hidden-iframe" style="display: block; overflow: hidden; border: 0px; margin: 0px; inset: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;" tabindex="-1"></iframe><canvas id="chartProgress_8667" width="133" height="300" style="display: block; height: 200px; width: 89px;"></canvas>
                                                        <div class="absolute-center text-center" style="position:absolute;top: 63%;left: 50%;transform: translate(-50%, -50%);"><label style="line-height: 1;font-size: x-small;">Kuota Kandidat</label></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-7 center-list-job">
                                                    <h4 style="margin-bottom: 0px;font-weight: bold;">CSR GraPARI Belitung</h4>
                                                    <p style="display:none;">null</p>
                                                    <hr>
                                                    <p>Customer Service Representative</p>
                                                </div>
                                                <div class="col-md-3" style="padding:5px"> <span>Bidang Pekerjaan</span><br> <b>Inbound Call/CS/Frontliner</b><br><br> <span>Jenjang</span><br> <b>Diploma III</b> <br><br> <a href="https://recruit.infomedia.co.id/main#job_vacancy/job_detail/OWQyZDBkMzM3OWJlNWNlMWU0NDU0MDM5ODI2MmRlNGYxOWJlZTMxN2E3YjI3NWUyNzc1YWQwMTAwZjQ0YmE0ZTg0MTRmMGRiN2NmZGFmODc3MmQzNzBiN2VlYjU2ODZjZDFjZTQ1OWU1OTI1ZjdhOWMyNTAwMDA4OGRhZWZkY2NnRzJ5OGFkYitoZHBadEhuTm41TnhobTVLUzgzT05NOGlkdDhQQ3h0eC9ZPQ" target="_blank" class="btn btn-danger">Detail Pekerjaan</a> <span id="btn_save_8667"><button type="button" class="btn btn-sm btn-outline-primary cursor" onclick="save_job(`saved`,8667)" data-bs-toggle="tooltip" data-bs-placement="right" title="Save"><span class="material-icons">bookmark_border</span></button></span> </div>
                                            </div>
                                            <div class="row card-list-vacancy card-vac">
                                                <div class="ribbon">Vacancy Urgent</div>
                                                <div class="col-md-2"> <img src="https://recruit.infomedia.co.id/assets/backend/images/company_logo/1a6b173689253eb15d3ca33323ecff1f.png" alt="" style="width:inherit;height:inherit;position: inherit;top: 50%;left: 50%;transform: translate(-50%, -50%);display:none;">
                                                    <div class="relative" style="position: relative;display:block;"><iframe class="chartjs-hidden-iframe" style="display: block; overflow: hidden; border: 0px; margin: 0px; inset: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;" tabindex="-1"></iframe><canvas id="chartProgress_8383" width="133" height="300" style="display: block; height: 200px; width: 89px;"></canvas>
                                                        <div class="absolute-center text-center" style="position:absolute;top: 63%;left: 50%;transform: translate(-50%, -50%);"><label style="line-height: 1;font-size: x-small;">Kuota Kandidat</label></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-7 center-list-job">
                                                    <h4 style="margin-bottom: 0px;font-weight: bold;">AGENT TELKOMSEL OBC CC MEDAN - 1865</h4>
                                                    <p style="display:none;">null</p>
                                                    <hr>
                                                    <p>AGENT</p>
                                                </div>
                                                <div class="col-md-3" style="padding:5px"> <span>Bidang Pekerjaan</span><br> <b>Inbound Call/CS/Frontliner</b><br><br> <span>Jenjang</span><br> <b>Diploma III</b> <br><br> <a href="https://recruit.infomedia.co.id/main#job_vacancy/job_detail/MjM5ZGI0MDFmY2VjYzhmNTE0ZTVhM2I3ZDMyZWJjOTBjN2NiOGNkZDBkNDQ5NWY4ZGM3MzNhMDNjMjY0ODA5NWRmNDlkNGU0NzA1ZjQ4MGE4MThjOWYyODA3Yjk3NmViODFjNzBkOGM5ODE4NDhmYzlkMGJlN2E5NmJiMGVkNDRkcnFLV2tQMGdpVDM4OFVxMFhyUUVBbk1BakdoN2pGWUE0em1QL3JZb1RjPQ" target="_blank" class="btn btn-danger">Detail Pekerjaan</a> <span id="btn_save_8383"><button type="button" class="btn btn-sm btn-outline-primary cursor" onclick="save_job(`saved`,8383)" data-bs-toggle="tooltip" data-bs-placement="right" title="Save"><span class="material-icons">bookmark_border</span></button></span> </div>
                                            </div>
                                            <div class="row card-list-vacancy card-vac">
                                                <div class="ribbon">Vacancy Urgent</div>
                                                <div class="col-md-2"> <img src="https://recruit.infomedia.co.id/assets/backend/images/company_logo/1a6b173689253eb15d3ca33323ecff1f.png" alt="" style="width:inherit;height:inherit;position: inherit;top: 50%;left: 50%;transform: translate(-50%, -50%);display:none;">
                                                    <div class="relative" style="position: relative;display:block;"><iframe class="chartjs-hidden-iframe" style="display: block; overflow: hidden; border: 0px; margin: 0px; inset: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;" tabindex="-1"></iframe><canvas id="chartProgress_8657" width="133" height="300" style="display: block; height: 200px; width: 89px;"></canvas>
                                                        <div class="absolute-center text-center" style="position:absolute;top: 63%;left: 50%;transform: translate(-50%, -50%);"><label style="line-height: 1;font-size: x-small;">Kuota Kandidat</label></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-7 center-list-job">
                                                    <h4 style="margin-bottom: 0px;font-weight: bold;">Agent Call Center Inbound Bank Negara - Solo (2024)</h4>
                                                    <p style="display:none;">null</p>
                                                    <hr>
                                                    <p>Agent Inbound Call Banking (Reguler)</p>
                                                </div>
                                                <div class="col-md-3" style="padding:5px"> <span>Bidang Pekerjaan</span><br> <b>Inbound Call/CS/Frontliner</b><br><br> <span>Jenjang</span><br> <b>Diploma III</b> <br><br> <a href="https://recruit.infomedia.co.id/main#job_vacancy/job_detail/M2ZmZGUyYzNlYzVkNDdmMzBlMjc4MDMxODE0ZDYzNzA0MjQ4ZmRmZTY1ZDZhNjcwM2FiZGZmMTc0MGE4ZDk3ZWM1YTU3OTI3ZTY2YTU4MWE2YTBlMjFiODJjYjYzNjkwZWE3MDFlMmEwOThhZjM2MGQxNmRiNWI1MWJiMDI2NmFTV0VPWjBRRUc3cXBMZk5ETENpVlR0Nm1UdFpHbHZwQUhYUzgxRzR5Q0g4PQ" target="_blank" class="btn btn-danger">Detail Pekerjaan</a> <span id="btn_save_8657"><button type="button" class="btn btn-sm btn-outline-primary cursor" onclick="save_job(`saved`,8657)" data-bs-toggle="tooltip" data-bs-placement="right" title="Save"><span class="material-icons">bookmark_border</span></button></span> </div>
                                            </div>
                                            <div class="row card-list-vacancy card-vac">
                                                <div class="ribbon">Vacancy Urgent</div>
                                                <div class="col-md-2"> <img src="https://recruit.infomedia.co.id/assets/backend/images/company_logo/1a6b173689253eb15d3ca33323ecff1f.png" alt="" style="width:inherit;height:inherit;position: inherit;top: 50%;left: 50%;transform: translate(-50%, -50%);display:none;">
                                                    <div class="relative" style="position: relative;display:block;"><iframe class="chartjs-hidden-iframe" style="display: block; overflow: hidden; border: 0px; margin: 0px; inset: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;" tabindex="-1"></iframe><canvas id="chartProgress_7518" width="133" height="300" style="display: block; height: 200px; width: 89px;"></canvas>
                                                        <div class="absolute-center text-center" style="position:absolute;top: 63%;left: 50%;transform: translate(-50%, -50%);"><label style="line-height: 1;font-size: x-small;">Kuota Kandidat</label></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-7 center-list-job">
                                                    <h4 style="margin-bottom: 0px;font-weight: bold;">Agent Contact Center Bank Swasta - Jakarta Selatan </h4>
                                                    <p style="display:none;">null</p>
                                                    <hr>
                                                    <p>Agent Contact Center</p>
                                                </div>
                                                <div class="col-md-3" style="padding:5px"> <span>Bidang Pekerjaan</span><br> <b>Inbound Call/CS/Frontliner</b><br><br> <span>Jenjang</span><br> <b>Diploma III</b> <br><br> <a href="https://recruit.infomedia.co.id/main#job_vacancy/job_detail/ODcxY2MzNjJlNmJlM2RkNzQ2NmJhNDI0YWRkZDExODEzMzEzMzNhNTFhYTdlMDNmNzlkZDM5NTI3Njc5MTY0N2JiMGNmNWJmMTdlZTNlNjA3YjIwYmYwZGM2N2Y2OWQyNzY5ZjEzNDYyNjdhZTdmMDU2ZDEyMjNiODcyN2E4ZTVGdVoxMngyWnU4RWErUk1QbmpFV2RkNlVqS0ZRTlNKOGh3N1p6cVlQQU04PQ" target="_blank" class="btn btn-danger">Detail Pekerjaan</a> <span id="btn_save_7518"><button type="button" class="btn btn-sm btn-outline-primary cursor" onclick="save_job(`saved`,7518)" data-bs-toggle="tooltip" data-bs-placement="right" title="Save"><span class="material-icons">bookmark_border</span></button></span> </div>
                                            </div>
                                            <div class="row card-list-vacancy card-vac">
                                                <div class="ribbon">Vacancy Urgent</div>
                                                <div class="col-md-2"> <img src="https://recruit.infomedia.co.id/assets/backend/images/company_logo/1a6b173689253eb15d3ca33323ecff1f.png" alt="" style="width:inherit;height:inherit;position: inherit;top: 50%;left: 50%;transform: translate(-50%, -50%);display:none;">
                                                    <div class="relative" style="position: relative;display:block;"><iframe class="chartjs-hidden-iframe" style="display: block; overflow: hidden; border: 0px; margin: 0px; inset: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;" tabindex="-1"></iframe><canvas id="chartProgress_8293" width="133" height="300" style="display: block; height: 200px; width: 89px;"></canvas>
                                                        <div class="absolute-center text-center" style="position:absolute;top: 63%;left: 50%;transform: translate(-50%, -50%);"><label style="line-height: 1;font-size: x-small;">Kuota Kandidat</label></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-7 center-list-job">
                                                    <h4 style="margin-bottom: 0px;font-weight: bold;">CSR GraPARI Dumai</h4>
                                                    <p style="display:none;">null</p>
                                                    <hr>
                                                    <p>Customer Service Representative</p>
                                                </div>
                                                <div class="col-md-3" style="padding:5px"> <span>Bidang Pekerjaan</span><br> <b>Inbound Call/CS/Frontliner</b><br><br> <span>Jenjang</span><br> <b>Diploma III</b> <br><br> <a href="https://recruit.infomedia.co.id/main#job_vacancy/job_detail/YzJhYTJjMmI3ZjUzYWU2MDRhODE0MDA2NDMxZDc2N2U5Yzg4Mjc0YmMxMDI1ODc3NjYwM2U2MGIwOWVlOTdiMTk1MDgzNGQyYjBmYTk1YjI0NmY2NmRlYjhlZmJiNWRmYmUxNTM0NjVmYzZiYTJjOWU0ZmIzMGVhNzMyYWI5NzFMZytxWUs2aG9vRGJVcDFNdDFnT2RKeHBEKzB5M3M1QnVkZjZCMHk2elpBPQ" target="_blank" class="btn btn-danger">Detail Pekerjaan</a> <span id="btn_save_8293"><button type="button" class="btn btn-sm btn-outline-primary cursor" onclick="save_job(`saved`,8293)" data-bs-toggle="tooltip" data-bs-placement="right" title="Save"><span class="material-icons">bookmark_border</span></button></span> </div>
                                            </div>
                                            <div class="row card-list-vacancy card-vac">
                                                <div class="ribbon">Vacancy Urgent</div>
                                                <div class="col-md-2"> <img src="https://recruit.infomedia.co.id/assets/backend/images/company_logo/1a6b173689253eb15d3ca33323ecff1f.png" alt="" style="width:inherit;height:inherit;position: inherit;top: 50%;left: 50%;transform: translate(-50%, -50%);display:none;">
                                                    <div class="relative" style="position: relative;display:block;"><iframe class="chartjs-hidden-iframe" style="display: block; overflow: hidden; border: 0px; margin: 0px; inset: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;" tabindex="-1"></iframe><canvas id="chartProgress_7525" width="133" height="300" style="display: block; height: 200px; width: 89px;"></canvas>
                                                        <div class="absolute-center text-center" style="position:absolute;top: 63%;left: 50%;transform: translate(-50%, -50%);"><label style="line-height: 1;font-size: x-small;">Kuota Kandidat</label></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-7 center-list-job">
                                                    <h4 style="margin-bottom: 0px;font-weight: bold;">Helpdesk L1 Mitratel</h4>
                                                    <p style="display:none;">null</p>
                                                    <hr>
                                                    <p>Helpdesk</p>
                                                </div>
                                                <div class="col-md-3" style="padding:5px"> <span>Bidang Pekerjaan</span><br> <b>Inbound Call/CS/Frontliner</b><br><br> <span>Jenjang</span><br> <b>Diploma III</b> <br><br> <a href="https://recruit.infomedia.co.id/main#job_vacancy/job_detail/MzU1ZDQ0NzE3YTc4NGM0NWM5ZWQxNDdkODZlMTc5MzBkMjQ4OTJiMWJlMjBjYTdkNTFmYTVmNmI2NDExNGEzMGRlYjZhNGVjNTk1YTQyZGQ2NDFkYWEzMTg1N2ZlZmUzOTZhZDIyYjJmNzJjMDU5Y2U2ZjYzMTMxMTA5ODhmOGJnTVhyVy8rNlczaGVTbEVSYUpQcWJKdkxFRFhWOUdlcDZxT3ljU1F2RHg0PQ" target="_blank" class="btn btn-danger">Detail Pekerjaan</a> <span id="btn_save_7525"><button type="button" class="btn btn-sm btn-outline-primary cursor" onclick="save_job(`saved`,7525)" data-bs-toggle="tooltip" data-bs-placement="right" title="Save"><span class="material-icons">bookmark_border</span></button></span> </div>
                                            </div>
                                            <div class="row card-list-vacancy card-vac">
                                                <div class="ribbon">Vacancy Urgent</div>
                                                <div class="col-md-2"> <img src="https://recruit.infomedia.co.id/assets/backend/images/company_logo/1a6b173689253eb15d3ca33323ecff1f.png" alt="" style="width:inherit;height:inherit;position: inherit;top: 50%;left: 50%;transform: translate(-50%, -50%);display:none;">
                                                    <div class="relative" style="position: relative;display:block;"><iframe class="chartjs-hidden-iframe" style="display: block; overflow: hidden; border: 0px; margin: 0px; inset: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;" tabindex="-1"></iframe><canvas id="chartProgress_6915" width="133" height="300" style="display: block; height: 200px; width: 89px;"></canvas>
                                                        <div class="absolute-center text-center" style="position:absolute;top: 63%;left: 50%;transform: translate(-50%, -50%);"><label style="line-height: 1;font-size: x-small;">Kuota Kandidat</label></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-7 center-list-job">
                                                    <h4 style="margin-bottom: 0px;font-weight: bold;">Agent Contact Center Maskapai Penerbangan - Semarang</h4>
                                                    <p style="display:none;">null</p>
                                                    <hr>
                                                    <p>Agent Contact Center Maskapai Penerbangan</p>
                                                </div>
                                                <div class="col-md-3" style="padding:5px"> <span>Bidang Pekerjaan</span><br> <b>Inbound Call/CS/Frontliner</b><br><br> <span>Jenjang</span><br> <b>Diploma III</b> <br><br> <a href="https://recruit.infomedia.co.id/main#job_vacancy/job_detail/OTFjNmI5ZWVlOTMzODdhNjI0YzMzNWEzMGRkNjQxMzAyMzllNmI0NzU1MmI3Zjc4NjM4NDFkNmQ1YmIwODAzMWYzMTU3ZWUwMTMwMzE5NjI4ODg2YmU2MDAwYWE5ZTYzZmFhYTU3YzcwNjI3YmNmYzk1NGQwZWI1ZGIzYWRmYzB6TzVEOXV1dnpYcmNsQ3VWMm44ZXVOUUM5eXpJMUNLbE1lQzYyNFFScTdNPQ" target="_blank" class="btn btn-danger">Detail Pekerjaan</a> <span id="btn_save_6915"><button type="button" class="btn btn-sm btn-outline-primary cursor" onclick="save_job(`saved`,6915)" data-bs-toggle="tooltip" data-bs-placement="right" title="Save"><span class="material-icons">bookmark_border</span></button></span> </div>
                                            </div>
                                            <div class="row card-list-vacancy card-vac">
                                                <div class="ribbon">Vacancy Urgent</div>
                                                <div class="col-md-2"> <img src="https://recruit.infomedia.co.id/assets/backend/images/company_logo/1a6b173689253eb15d3ca33323ecff1f.png" alt="" style="width:inherit;height:inherit;position: inherit;top: 50%;left: 50%;transform: translate(-50%, -50%);display:none;">
                                                    <div class="relative" style="position: relative;display:block;"><iframe class="chartjs-hidden-iframe" style="display: block; overflow: hidden; border: 0px; margin: 0px; inset: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;" tabindex="-1"></iframe><canvas id="chartProgress_8538" width="133" height="300" style="display: block; height: 200px; width: 89px;"></canvas>
                                                        <div class="absolute-center text-center" style="position:absolute;top: 63%;left: 50%;transform: translate(-50%, -50%);"><label style="line-height: 1;font-size: x-small;">Kuota Kandidat</label></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-7 center-list-job">
                                                    <h4 style="margin-bottom: 0px;font-weight: bold;">CSR GraPARI Telkomsel - Kaimana Papua Barat</h4>
                                                    <p style="display:none;">null</p>
                                                    <hr>
                                                    <p>Costumer Service Representative</p>
                                                </div>
                                                <div class="col-md-3" style="padding:5px"> <span>Bidang Pekerjaan</span><br> <b>Inbound Call/CS/Frontliner</b><br><br> <span>Jenjang</span><br> <b>Diploma III</b> <br><br> <a href="https://recruit.infomedia.co.id/main#job_vacancy/job_detail/MWU0NzdjNTk4YmNiYTliMDg1OTZmNjNiYjY1NGEzZjc1M2ZmMjEzNTE1MDY3OTA5Y2MzN2Q5MzY2MjY4MDgxOWQ4NmI0NWQ5OGNkODU0Y2I4YWMwYTlmYTVmZDIzNDQ2MzcyNWFjMTcyZmRkYWZkY2U0ZjZjMmQ5ZWY0YTUwYjlhbkN5NUtTM1I5eTR4RUZ4d2pBZDhNdmFRdEZ5T0tkMXpDYis2cHQ0RjNzPQ" target="_blank" class="btn btn-danger">Detail Pekerjaan</a> <span id="btn_save_8538"><button type="button" class="btn btn-sm btn-outline-primary cursor" onclick="save_job(`saved`,8538)" data-bs-toggle="tooltip" data-bs-placement="right" title="Save"><span class="material-icons">bookmark_border</span></button></span> </div>
                                            </div>
                                            <div class="row card-list-vacancy card-vac">
                                                <div class="ribbon">Vacancy Urgent</div>
                                                <div class="col-md-2"> <img src="https://recruit.infomedia.co.id/assets/backend/images/company_logo/1a6b173689253eb15d3ca33323ecff1f.png" alt="" style="width:inherit;height:inherit;position: inherit;top: 50%;left: 50%;transform: translate(-50%, -50%);display:none;">
                                                    <div class="relative" style="position: relative;display:block;"><iframe class="chartjs-hidden-iframe" style="display: block; overflow: hidden; border: 0px; margin: 0px; inset: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;" tabindex="-1"></iframe><canvas id="chartProgress_8470" width="133" height="300" style="display: block; height: 200px; width: 89px;"></canvas>
                                                        <div class="absolute-center text-center" style="position:absolute;top: 63%;left: 50%;transform: translate(-50%, -50%);"><label style="line-height: 1;font-size: x-small;">Kuota Kandidat</label></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-7 center-list-job">
                                                    <h4 style="margin-bottom: 0px;font-weight: bold;">Agent Contact Center CIMB Niaga</h4>
                                                    <p style="display:none;">null</p>
                                                    <hr>
                                                    <p>Agent Contact Center</p>
                                                </div>
                                                <div class="col-md-3" style="padding:5px"> <span>Bidang Pekerjaan</span><br> <b>Inbound Call/CS/Frontliner</b><br><br> <span>Jenjang</span><br> <b>Diploma III</b> <br><br> <a href="https://recruit.infomedia.co.id/main#job_vacancy/job_detail/N2ZhYTJkM2I0OWNmOWZhZGYzNzIyMDhlMTYxNmI3N2Y0Zjc4MzIzNzJmOTYyM2FlZmMxNWUyZWY3NjZkY2NiNGJlYmNmZDUyZjYwNWEzMmMyZWVhOGI0MzdjNWY2MDRmNjc1ZDU1NTFlNjY4OGNiOTQ1NmJlZGYwMjNlNjJhYzBoS0hCcy9wMFdxSGR3OGtWaVhsWGt1NjZIWUp0d05YMkFIRk9pL0tHbjFFPQ" target="_blank" class="btn btn-danger">Detail Pekerjaan</a> <span id="btn_save_8470"><button type="button" class="btn btn-sm btn-outline-primary cursor" onclick="save_job(`saved`,8470)" data-bs-toggle="tooltip" data-bs-placement="right" title="Save"><span class="material-icons">bookmark_border</span></button></span> </div>
                                            </div>
                                            <div class="row card-list-vacancy card-vac">
                                                <div class="ribbon">Vacancy Urgent</div>
                                                <div class="col-md-2"> <img src="https://recruit.infomedia.co.id/assets/backend/images/company_logo/1a6b173689253eb15d3ca33323ecff1f.png" alt="" style="width:inherit;height:inherit;position: inherit;top: 50%;left: 50%;transform: translate(-50%, -50%);display:none;">
                                                    <div class="relative" style="position: relative;display:block;"><iframe class="chartjs-hidden-iframe" style="display: block; overflow: hidden; border: 0px; margin: 0px; inset: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;" tabindex="-1"></iframe><canvas id="chartProgress_6244" width="133" height="300" style="display: block; height: 200px; width: 89px;"></canvas>
                                                        <div class="absolute-center text-center" style="position:absolute;top: 63%;left: 50%;transform: translate(-50%, -50%);"><label style="line-height: 1;font-size: x-small;">Kuota Kandidat</label></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-7 center-list-job">
                                                    <h4 style="margin-bottom: 0px;font-weight: bold;">Agent Contact Center Bank Milik Negara - Semarang</h4>
                                                    <p style="display:none;">null</p>
                                                    <hr>
                                                    <p>Agent Contact Center Bahasa Indonesia / English Conversation</p>
                                                </div>
                                                <div class="col-md-3" style="padding:5px"> <span>Bidang Pekerjaan</span><br> <b>Inbound Call/CS/Frontliner</b><br><br> <span>Jenjang</span><br> <b>Diploma III</b> <br><br> <a href="https://recruit.infomedia.co.id/main#job_vacancy/job_detail/MTNkMWI1ZWI1ZmM3YWM3OTRiMDYxYzFjZGU1YTg2ZWM3YjcwNTJjYjVkOTc0NDc1Njk4YWYyYzY0NjMzMWNiZDJkZGNiOGViNzBhN2QxOTZhMDljMTMwMWM5ODcyNGQyYTNjZTBkZmZhYWFmMGJjNTRjZTA1Y2Y1NjJmMmJjMzFYdHQ5SXdPSDhTM0JNRnlkNVBVTjBqYUw2WWVEQXZRdU1ZTUxNL2pMZzNVPQ" target="_blank" class="btn btn-danger">Detail Pekerjaan</a> <span id="btn_save_6244"><button type="button" class="btn btn-sm btn-outline-primary cursor" onclick="save_job(`saved`,6244)" data-bs-toggle="tooltip" data-bs-placement="right" title="Save"><span class="material-icons">bookmark_border</span></button></span> </div>
                                            </div>
                                            <div class="row card-list-vacancy card-vac">
                                                <div class="ribbon">Vacancy Urgent</div>
                                                <div class="col-md-2"> <img src="https://recruit.infomedia.co.id/assets/backend/images/company_logo/1a6b173689253eb15d3ca33323ecff1f.png" alt="" style="width:inherit;height:inherit;position: inherit;top: 50%;left: 50%;transform: translate(-50%, -50%);display:none;">
                                                    <div class="relative" style="position: relative;display:block;"><iframe class="chartjs-hidden-iframe" style="display: block; overflow: hidden; border: 0px; margin: 0px; inset: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;" tabindex="-1"></iframe><canvas id="chartProgress_8355" width="133" height="300" style="display: block; height: 200px; width: 89px;"></canvas>
                                                        <div class="absolute-center text-center" style="position:absolute;top: 63%;left: 50%;transform: translate(-50%, -50%);"><label style="line-height: 1;font-size: x-small;">Kuota Kandidat</label></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-7 center-list-job">
                                                    <h4 style="margin-bottom: 0px;font-weight: bold;">Agent Sis n Bro - Surabaya (Replace sdm resign)</h4>
                                                    <p style="display:none;">null</p>
                                                    <hr>
                                                    <p>Pengganti sdm Resign (Agent SnB)</p>
                                                </div>
                                                <div class="col-md-3" style="padding:5px"> <span>Bidang Pekerjaan</span><br> <b>Marketing/Sales</b><br><br> <span>Jenjang</span><br> <b>Diploma III</b> <br><br> <a href="https://recruit.infomedia.co.id/main#job_vacancy/job_detail/YzY3Nzk3ZDM0NjNhODMyNTM1ZGFmMjY2YzRlYjUzNTc3YTk0MTJlMTA3ZDdiZDRjNGU3YzVkY2JkNWY3ZjE3ZGIzODkzNDAwNDA0ODUzODVkZDc2OTk5NmM4ZWM0YThhZWY2OGRlYjViZGNjYTliMGY2NGRmZTVlNWZhZmQyNmVqMFRZRDM0N3hsaU1XTkpVWGpKTkx3ZjQ3NTNaaEhiczhhTnY5bEpsUWlRPQ" target="_blank" class="btn btn-danger">Detail Pekerjaan</a> <span id="btn_save_8355"><button type="button" class="btn btn-sm btn-outline-primary cursor" onclick="save_job(`saved`,8355)" data-bs-toggle="tooltip" data-bs-placement="right" title="Save"><span class="material-icons">bookmark_border</span></button></span> </div>
                                            </div>
                                            <div class="row card-list-vacancy card-vac">
                                                <div class="ribbon">Vacancy Urgent</div>
                                                <div class="col-md-2"> <img src="https://recruit.infomedia.co.id/assets/backend/images/company_logo/1a6b173689253eb15d3ca33323ecff1f.png" alt="" style="width:inherit;height:inherit;position: inherit;top: 50%;left: 50%;transform: translate(-50%, -50%);display:none;">
                                                    <div class="relative" style="position: relative;display:block;"><iframe class="chartjs-hidden-iframe" style="display: block; overflow: hidden; border: 0px; margin: 0px; inset: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;" tabindex="-1"></iframe><canvas id="chartProgress_5166" width="133" height="300" style="display: block; height: 200px; width: 89px;"></canvas>
                                                        <div class="absolute-center text-center" style="position:absolute;top: 63%;left: 50%;transform: translate(-50%, -50%);"><label style="line-height: 1;font-size: x-small;">Kuota Kandidat</label></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-7 center-list-job">
                                                    <h4 style="margin-bottom: 0px;font-weight: bold;">Agent Call Center Bank Danamon - Semarang</h4>
                                                    <p style="display:none;">null</p>
                                                    <hr>
                                                    <p>Fullfillment </p>
                                                </div>
                                                <div class="col-md-3" style="padding:5px"> <span>Bidang Pekerjaan</span><br> <b>Inbound Call/CS/Frontliner</b><br><br> <span>Jenjang</span><br> <b>Diploma III</b> <br><br> <a href="https://recruit.infomedia.co.id/main#job_vacancy/job_detail/ZDliNjgwY2YwNTliMjFhZDVkOWJjN2MwODFjODZhYjFlY2RlZWNiMWRkODMwNWE1NmMwNDJlNWIyN2YxYzE0ZTc0MTYwODc3MzNlZTNjZDg3NmZlMTZiOTlkNGYxYTQ3N2IxOTk2ZjVjY2FhNGE3YjgxMjg2NGI5MThhZTI1ZWVJUWRCYnRaOFRYaGJaMndzd2RoVFh4NmR4dGhxL2VCbE0zaVV5Zm96VVVJPQ" target="_blank" class="btn btn-danger">Detail Pekerjaan</a> <span id="btn_save_5166"><button type="button" class="btn btn-sm btn-outline-primary cursor" onclick="save_job(`saved`,5166)" data-bs-toggle="tooltip" data-bs-placement="right" title="Save"><span class="material-icons">bookmark_border</span></button></span> </div>
                                            </div>
                                            <div class="row card-list-vacancy card-vac">
                                                <div class="ribbon">Vacancy Urgent</div>
                                                <div class="col-md-2"> <img src="https://recruit.infomedia.co.id/assets/backend/images/company_logo/1a6b173689253eb15d3ca33323ecff1f.png" alt="" style="width:inherit;height:inherit;position: inherit;top: 50%;left: 50%;transform: translate(-50%, -50%);display:none;">
                                                    <div class="relative" style="position: relative;display:block;"><iframe class="chartjs-hidden-iframe" style="display: block; overflow: hidden; border: 0px; margin: 0px; inset: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;" tabindex="-1"></iframe><canvas id="chartProgress_8236" width="133" height="300" style="display: block; height: 200px; width: 89px;"></canvas>
                                                        <div class="absolute-center text-center" style="position:absolute;top: 63%;left: 50%;transform: translate(-50%, -50%);"><label style="line-height: 1;font-size: x-small;">Kuota Kandidat</label></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-7 center-list-job">
                                                    <h4 style="margin-bottom: 0px;font-weight: bold;">Expert AI Engineer - Google</h4>
                                                    <p style="display:none;">null</p>
                                                    <hr>
                                                    <p>Expert AI Engineer - Google</p>
                                                </div>
                                                <div class="col-md-3" style="padding:5px"> <span>Bidang Pekerjaan</span><br> <b>Information Technology</b><br><br> <span>Jenjang</span><br> <b>Diploma III</b> <br><br> <a href="https://recruit.infomedia.co.id/main#job_vacancy/job_detail/NjQwYTJiNWY0NTFhNzJmMWJiOGM2OTI0OGFmMGY0NDI0NjU5OGUyODZmNWRmZTBkYjRlMDU3OTBkYTQ5NzUwOWIzNzEwZjg2NmI1ZTBhNDQ1MmJkZmM0MDk5OTExNjZhYzQwNTE3MjhiZmI5NGNiZGI3Yjc1M2RkMTA5YWRiOThQK3BUSG1TT3BZSmpjSG5HVFdIOURxdmFiZFBNdGpaa09FKzZhREYva1dFPQ" target="_blank" class="btn btn-danger">Detail Pekerjaan</a> <span id="btn_save_8236"><button type="button" class="btn btn-sm btn-outline-primary cursor" onclick="save_job(`saved`,8236)" data-bs-toggle="tooltip" data-bs-placement="right" title="Save"><span class="material-icons">bookmark_border</span></button></span> </div>
                                            </div>
                                            <div class="row card-list-vacancy card-vac">
                                                <div class="ribbon">Vacancy Urgent</div>
                                                <div class="col-md-2"> <img src="https://recruit.infomedia.co.id/assets/backend/images/company_logo/1a6b173689253eb15d3ca33323ecff1f.png" alt="" style="width:inherit;height:inherit;position: inherit;top: 50%;left: 50%;transform: translate(-50%, -50%);display:none;">
                                                    <div class="relative" style="position: relative;display:block;"><iframe class="chartjs-hidden-iframe" style="display: block; overflow: hidden; border: 0px; margin: 0px; inset: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;" tabindex="-1"></iframe><canvas id="chartProgress_8237" width="133" height="300" style="display: block; height: 200px; width: 89px;"></canvas>
                                                        <div class="absolute-center text-center" style="position:absolute;top: 63%;left: 50%;transform: translate(-50%, -50%);"><label style="line-height: 1;font-size: x-small;">Kuota Kandidat</label></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-7 center-list-job">
                                                    <h4 style="margin-bottom: 0px;font-weight: bold;">Expert AI Engineer - Microsoft</h4>
                                                    <p style="display:none;">null</p>
                                                    <hr>
                                                    <p>Expert AI Engineer - Microsoft</p>
                                                </div>
                                                <div class="col-md-3" style="padding:5px"> <span>Bidang Pekerjaan</span><br> <b>Information Technology</b><br><br> <span>Jenjang</span><br> <b>Diploma III</b> <br><br> <a href="https://recruit.infomedia.co.id/main#job_vacancy/job_detail/NjcyOGYyZTZmNjAxMGFjZGI4M2EyMjJmYmZlMTYzNWFkMjRkZGM4ZjRmYjk0MzcxZjRiNTllNDhmN2RiZjg3N2YzNGZmNjQ5YmRjMzllNmI0MDQxZDJmYzBmZjM3NzZlMTBiZGIwYzc4MmRkMWY2YzIxMmNhM2UzZmU5YjAzNmQ3Q1BiaUhldGdmbkMzUC9OWERzcmZCeDZHbS92d3g4QUhrbk85VTBoWDV3PQ" target="_blank" class="btn btn-danger">Detail Pekerjaan</a> <span id="btn_save_8237"><button type="button" class="btn btn-sm btn-outline-primary cursor" onclick="save_job(`saved`,8237)" data-bs-toggle="tooltip" data-bs-placement="right" title="Save"><span class="material-icons">bookmark_border</span></button></span> </div>
                                            </div>
                                            <div class="row card-list-vacancy card-vac">
                                                <div class="ribbon">Vacancy Urgent</div>
                                                <div class="col-md-2"> <img src="https://recruit.infomedia.co.id/assets/backend/images/company_logo/1a6b173689253eb15d3ca33323ecff1f.png" alt="" style="width:inherit;height:inherit;position: inherit;top: 50%;left: 50%;transform: translate(-50%, -50%);display:none;">
                                                    <div class="relative" style="position: relative;display:block;"><iframe class="chartjs-hidden-iframe" style="display: block; overflow: hidden; border: 0px; margin: 0px; inset: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;" tabindex="-1"></iframe><canvas id="chartProgress_4385" width="133" height="300" style="display: block; height: 200px; width: 89px;"></canvas>
                                                        <div class="absolute-center text-center" style="position:absolute;top: 63%;left: 50%;transform: translate(-50%, -50%);"><label style="line-height: 1;font-size: x-small;">Kuota Kandidat</label></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-7 center-list-job">
                                                    <h4 style="margin-bottom: 0px;font-weight: bold;">Manager IT Governance &amp; Security Management</h4>
                                                    <p style="display:none;">null</p>
                                                    <hr>
                                                    <p>Manager IT Governance &amp; Security Management</p>
                                                </div>
                                                <div class="col-md-3" style="padding:5px"> <span>Bidang Pekerjaan</span><br> <b>Information Technology</b><br><br> <span>Jenjang</span><br> <b>S1-Perguruan Tinggi</b> <br><br> <a href="https://recruit.infomedia.co.id/main#job_vacancy/job_detail/NDRiYTQ4MTM0Y2MyMjRmYmQxZTQ5NDEwZGUxMTU5OTE2ZDdhMzNlMmQ5NmQ0Y2U0YTA4YWFkZTRiMTYwMjRhZWQ2ZDM5NTdhMzIxOTNhMjg3ZGRlNmUxOGNlMzBlNzlkNTQzYmM1NTgzMzYyYTVjM2EwOGRiMGU0Njc4M2JlOTRCS0w2RlRienhuVFNIY0RWck0wd0VMZnd6NHRSUnFCV2pIRTE0WTNPeE1zPQ" target="_blank" class="btn btn-danger">Detail Pekerjaan</a> <span id="btn_save_4385"><button type="button" class="btn btn-sm btn-outline-primary cursor" onclick="save_job(`saved`,4385)" data-bs-toggle="tooltip" data-bs-placement="right" title="Save"><span class="material-icons">bookmark_border</span></button></span> </div>
                                            </div>
                                            <div class="row card-list-vacancy card-vac">
                                                <div class="ribbon">Vacancy Urgent</div>
                                                <div class="col-md-2"> <img src="https://recruit.infomedia.co.id/assets/backend/images/company_logo/1a6b173689253eb15d3ca33323ecff1f.png" alt="" style="width:inherit;height:inherit;position: inherit;top: 50%;left: 50%;transform: translate(-50%, -50%);display:none;">
                                                    <div class="relative" style="position: relative;display:block;"><iframe class="chartjs-hidden-iframe" style="display: block; overflow: hidden; border: 0px; margin: 0px; inset: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;" tabindex="-1"></iframe><canvas id="chartProgress_5927" width="133" height="300" style="display: block; height: 200px; width: 89px;"></canvas>
                                                        <div class="absolute-center text-center" style="position:absolute;top: 63%;left: 50%;transform: translate(-50%, -50%);"><label style="line-height: 1;font-size: x-small;">Kuota Kandidat</label></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-7 center-list-job">
                                                    <h4 style="margin-bottom: 0px;font-weight: bold;">Carring Visiting Agent - Jambi</h4>
                                                    <p style="display:none;">null</p>
                                                    <hr>
                                                    <p>Carring Visiting Agent</p>
                                                </div>
                                                <div class="col-md-3" style="padding:5px"> <span>Bidang Pekerjaan</span><br> <b>OBC Agent Verifikator</b><br><br> <span>Jenjang</span><br> <b>SLTA/SMK</b> <br><br> <a href="https://recruit.infomedia.co.id/main#job_vacancy/job_detail/MmRkMTMxNTI0NjA4NmI1YjdlZDhhZDk0NjBjYjE2NzkxMDYxYWNhOTExZTc3NTczYjRmNDJkYzk1MWQ4OWEwMWJkOGRlOTBjODY5NGRlM2RjNTYzNjI1YTc2NGYzOTZjODUyNzZhYjFjZDVmNzJlYzNhNmJiMThmMGU5Zjk0ZDNHSlhhQ0dXTTNTVmZ1NFh3R2RreE1GU3dBUEFmYjMyQWd5SmFlWWZ4Slo0PQ" target="_blank" class="btn btn-danger">Detail Pekerjaan</a> <span id="btn_save_5927"><button type="button" class="btn btn-sm btn-outline-primary cursor" onclick="save_job(`saved`,5927)" data-bs-toggle="tooltip" data-bs-placement="right" title="Save"><span class="material-icons">bookmark_border</span></button></span> </div>
                                            </div>
                                            <div class="row card-list-vacancy card-vac">
                                                <div class="ribbon">Vacancy Urgent</div>
                                                <div class="col-md-2"> <img src="https://recruit.infomedia.co.id/assets/backend/images/company_logo/1a6b173689253eb15d3ca33323ecff1f.png" alt="" style="width:inherit;height:inherit;position: inherit;top: 50%;left: 50%;transform: translate(-50%, -50%);display:none;">
                                                    <div class="relative" style="position: relative;display:block;"><iframe class="chartjs-hidden-iframe" style="display: block; overflow: hidden; border: 0px; margin: 0px; inset: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;" tabindex="-1"></iframe><canvas id="chartProgress_7999" width="133" height="300" style="display: block; height: 200px; width: 89px;"></canvas>
                                                        <div class="absolute-center text-center" style="position:absolute;top: 63%;left: 50%;transform: translate(-50%, -50%);"><label style="line-height: 1;font-size: x-small;">Kuota Kandidat</label></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-7 center-list-job">
                                                    <h4 style="margin-bottom: 0px;font-weight: bold;">CSR GraPARI Pangkal Pinang</h4>
                                                    <p style="display:none;">null</p>
                                                    <hr>
                                                    <p>Customer Service Representative</p>
                                                </div>
                                                <div class="col-md-3" style="padding:5px"> <span>Bidang Pekerjaan</span><br> <b>Inbound Call/CS/Frontliner</b><br><br> <span>Jenjang</span><br> <b>Diploma III</b> <br><br> <a href="https://recruit.infomedia.co.id/main#job_vacancy/job_detail/MjFhMDc1ZmNhNWEwYWY2MjFkMTI0NzEwZTdiNjNkMTRlZGM1NjcyOGM3ZmQ4YmJlMmZmY2U3NzE2NTYyNjVlYTc1MThiNGUzYjUxMzFiNDQ0Zjc4N2IwZTYwZWFlYzZmYTc3M2VjYmYwNDQzZmRiN2JiZjQ0NDIwNTE3N2I1NjZqN01jU1Q5MlhYZ1QvUlVoNmxMOWNIVzhocGpNV0lLV1pMemJIU1VmZVB3PQ" target="_blank" class="btn btn-danger">Detail Pekerjaan</a> <span id="btn_save_7999"><button type="button" class="btn btn-sm btn-outline-primary cursor" onclick="save_job(`saved`,7999)" data-bs-toggle="tooltip" data-bs-placement="right" title="Save"><span class="material-icons">bookmark_border</span></button></span> </div>
                                            </div>
                                            <div class="row card-list-vacancy card-vac">
                                                <div class="ribbon">Vacancy Urgent</div>
                                                <div class="col-md-2"> <img src="https://recruit.infomedia.co.id/assets/backend/images/company_logo/1a6b173689253eb15d3ca33323ecff1f.png" alt="" style="width:inherit;height:inherit;position: inherit;top: 50%;left: 50%;transform: translate(-50%, -50%);display:none;">
                                                    <div class="relative" style="position: relative;display:block;"><iframe class="chartjs-hidden-iframe" style="display: block; overflow: hidden; border: 0px; margin: 0px; inset: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;" tabindex="-1"></iframe><canvas id="chartProgress_5639" width="133" height="300" style="display: block; height: 200px; width: 89px;"></canvas>
                                                        <div class="absolute-center text-center" style="position:absolute;top: 63%;left: 50%;transform: translate(-50%, -50%);"><label style="line-height: 1;font-size: x-small;">Kuota Kandidat</label></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-7 center-list-job">
                                                    <h4 style="margin-bottom: 0px;font-weight: bold;">CSR GraPARI Tondano-Sulawesi Utara</h4>
                                                    <p style="display:none;">null</p>
                                                    <hr>
                                                    <p>Customer Service Representative</p>
                                                </div>
                                                <div class="col-md-3" style="padding:5px"> <span>Bidang Pekerjaan</span><br> <b>Inbound Call/CS/Frontliner</b><br><br> <span>Jenjang</span><br> <b>Diploma III</b> <br><br> <a href="https://recruit.infomedia.co.id/main#job_vacancy/job_detail/ZWJlMjY4OWJjYTM3ODljOGJjMzg4MThhNjRhNmNkN2EwOWVlZTFjN2ZjZGQ4ZWM5MTVlMmRhZWYzMGMxZTk0ZTlmMWI3ZjExNzM2MzcwN2FiMzYxMDgxMTYwNmEyN2UwZTRjNWI1ODc4NTgzYjQxNzVlMDI4Njk4YzJiMzkwZjc2MlFyUlZwREp6aFV3TCtiN0JZNE01WFFUSTlEc0FBVlVySm9uNXJTTi9RPQ" target="_blank" class="btn btn-danger">Detail Pekerjaan</a> <span id="btn_save_5639"><button type="button" class="btn btn-sm btn-outline-primary cursor" onclick="save_job(`saved`,5639)" data-bs-toggle="tooltip" data-bs-placement="right" title="Save"><span class="material-icons">bookmark_border</span></button></span> </div>
                                            </div>
                                            <div class="row card-list-vacancy card-vac">
                                                <div class="ribbon">Vacancy Urgent</div>
                                                <div class="col-md-2"> <img src="https://recruit.infomedia.co.id/assets/backend/images/company_logo/1a6b173689253eb15d3ca33323ecff1f.png" alt="" style="width:inherit;height:inherit;position: inherit;top: 50%;left: 50%;transform: translate(-50%, -50%);display:none;">
                                                    <div class="relative" style="position: relative;display:block;"><iframe class="chartjs-hidden-iframe" style="display: block; overflow: hidden; border: 0px; margin: 0px; inset: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;" tabindex="-1"></iframe><canvas id="chartProgress_7350" width="133" height="300" style="display: block; height: 200px; width: 89px;"></canvas>
                                                        <div class="absolute-center text-center" style="position:absolute;top: 63%;left: 50%;transform: translate(-50%, -50%);"><label style="line-height: 1;font-size: x-small;">Kuota Kandidat</label></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-7 center-list-job">
                                                    <h4 style="margin-bottom: 0px;font-weight: bold;">Junior Officer IT Digitization (Odoo Developer) PT Infomedia Nusantara</h4>
                                                    <p style="display:none;">null</p>
                                                    <hr>
                                                    <p> IT Digitization</p>
                                                </div>
                                                <div class="col-md-3" style="padding:5px"> <span>Bidang Pekerjaan</span><br> <b>Information Technology</b><br><br> <span>Jenjang</span><br> <b>Diploma III</b> <br><br> <a href="https://recruit.infomedia.co.id/main#job_vacancy/job_detail/M2U1OTZkY2IxMzdlMmMxZjMwODRmY2I4N2MwOGEyNzgyNzA0Mzg0ZmIxOTJhN2QwODY4NGU3MGJjZWMxMWFjZDZkNjk4NTlhNWY0ZmE0MThlNzAwMmYzM2I4Nzk2OGNhNzg5NzcwNDI0MmQ5N2E5YTAzZTk4NTZhMzQ5ZDk1NGVBZWwzb3ptNnFNVFg4WGtUTXdlLzNGaEtZSmV6RUxDNC9Lck9ONEUrNGVnPQ" target="_blank" class="btn btn-danger">Detail Pekerjaan</a> <span id="btn_save_7350"><button type="button" class="btn btn-sm btn-outline-primary cursor" onclick="save_job(`saved`,7350)" data-bs-toggle="tooltip" data-bs-placement="right" title="Save"><span class="material-icons">bookmark_border</span></button></span> </div>
                                            </div>
                                            <div class="row card-list-vacancy card-vac">
                                                <div class="ribbon">Vacancy Urgent</div>
                                                <div class="col-md-2"> <img src="https://recruit.infomedia.co.id/assets/backend/images/company_logo/1a6b173689253eb15d3ca33323ecff1f.png" alt="" style="width:inherit;height:inherit;position: inherit;top: 50%;left: 50%;transform: translate(-50%, -50%);display:none;">
                                                    <div class="relative" style="position: relative;display:block;"><iframe class="chartjs-hidden-iframe" style="display: block; overflow: hidden; border: 0px; margin: 0px; inset: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;" tabindex="-1"></iframe><canvas id="chartProgress_7150" width="133" height="300" style="display: block; height: 200px; width: 89px;"></canvas>
                                                        <div class="absolute-center text-center" style="position:absolute;top: 63%;left: 50%;transform: translate(-50%, -50%);"><label style="line-height: 1;font-size: x-small;">Kuota Kandidat</label></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-7 center-list-job">
                                                    <h4 style="margin-bottom: 0px;font-weight: bold;">CSR GraPARI Subang</h4>
                                                    <p style="display:none;">null</p>
                                                    <hr>
                                                    <p>Customer Service Representative</p>
                                                </div>
                                                <div class="col-md-3" style="padding:5px"> <span>Bidang Pekerjaan</span><br> <b>Inbound Call/CS/Frontliner</b><br><br> <span>Jenjang</span><br> <b>S1-Perguruan Tinggi</b> <br><br> <a href="https://recruit.infomedia.co.id/main#job_vacancy/job_detail/YzFhNzc4NzMwOWEzZDc2OGY1MTliYWJmYmM3YzdhMDYyZGQ1Yzk1OGI0NzIxODNmZGM4MjZiYTMxZjRhZjQzYzg5OTkyMWNmNTAxMTE1OGQ1ZDlkYzkwNWE5YjI1NzEzN2VhZDJmMWRkNTUzNGM2NjAyNWYxOTY4MjBjYTg5Y2FMZ2lIOC9GZUs2U0E1L3poUCtJblZjTm5OSEVPc3dDTmxpTkJIODM3alJnPQ" target="_blank" class="btn btn-danger">Detail Pekerjaan</a> <span id="btn_save_7150"><button type="button" class="btn btn-sm btn-outline-primary cursor" onclick="save_job(`saved`,7150)" data-bs-toggle="tooltip" data-bs-placement="right" title="Save"><span class="material-icons">bookmark_border</span></button></span> </div>
                                            </div>
                                            <div class="row card-list-vacancy card-vac">
                                                <div class="ribbon">Vacancy Urgent</div>
                                                <div class="col-md-2"> <img src="https://recruit.infomedia.co.id/assets/backend/images/company_logo/1a6b173689253eb15d3ca33323ecff1f.png" alt="" style="width:inherit;height:inherit;position: inherit;top: 50%;left: 50%;transform: translate(-50%, -50%);display:none;">
                                                    <div class="relative" style="position: relative;display:block;"><iframe class="chartjs-hidden-iframe" style="display: block; overflow: hidden; border: 0px; margin: 0px; inset: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;" tabindex="-1"></iframe><canvas id="chartProgress_4053" width="133" height="300" style="display: block; height: 200px; width: 89px;"></canvas>
                                                        <div class="absolute-center text-center" style="position:absolute;top: 63%;left: 50%;transform: translate(-50%, -50%);"><label style="line-height: 1;font-size: x-small;">Kuota Kandidat</label></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-7 center-list-job">
                                                    <h4 style="margin-bottom: 0px;font-weight: bold;">Agent Outbound Call Center Telkomsel - Bandung</h4>
                                                    <p style="display:none;">null</p>
                                                    <hr>
                                                    <p>Agent Outbound Call Center</p>
                                                </div>
                                                <div class="col-md-3" style="padding:5px"> <span>Bidang Pekerjaan</span><br> <b>OBC Telesales</b><br><br> <span>Jenjang</span><br> <b>SLTA/SMK</b> <br><br> <a href="https://recruit.infomedia.co.id/main#job_vacancy/job_detail/Njk0YjJkODIwZDVlM2Q5MDFmMTdkZjJmMzA5ODBjMDk5ZDlhM2IyYjUxMjBhZjUzYmM5NDJiMGFhODBkZmY1MzBmNmNkMjMwZDVmMTU5OWZjNjIyNjg5NzVkNWU4NzhmNDljNDNkNzYwNGQ4ZDg5MDZmOWQ5MjBhMjY4YjJjYzlQckZiaWFQalBBd3VGd3phRGJ6WnErcTRRcnBiKzFJUFR3Yk9GZmR0aVFFPQ" target="_blank" class="btn btn-danger">Detail Pekerjaan</a> <span id="btn_save_4053"><button type="button" class="btn btn-sm btn-outline-primary cursor" onclick="save_job(`saved`,4053)" data-bs-toggle="tooltip" data-bs-placement="right" title="Save"><span class="material-icons">bookmark_border</span></button></span> </div>
                                            </div>
                                            <div class="row card-list-vacancy card-vac">
                                                <div class="ribbon">Vacancy Urgent</div>
                                                <div class="col-md-2"> <img src="https://recruit.infomedia.co.id/assets/backend/images/company_logo/1a6b173689253eb15d3ca33323ecff1f.png" alt="" style="width:inherit;height:inherit;position: inherit;top: 50%;left: 50%;transform: translate(-50%, -50%);display:none;">
                                                    <div class="relative" style="position: relative;display:none;"><iframe class="chartjs-hidden-iframe" style="display: block; overflow: hidden; border: 0px; margin: 0px; inset: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;" tabindex="-1"></iframe><canvas id="chartProgress_1916" width="0" height="0" style="display: none; height: 0px; width: 0px;"></canvas>
                                                        <div class="absolute-center text-center" style="position:absolute;top: 63%;left: 50%;transform: translate(-50%, -50%);"><label style="line-height: 1;font-size: x-small;">Kuota Kandidat</label></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-7 center-list-job">
                                                    <h4 style="margin-bottom: 0px;font-weight: bold;">Grapari Telkomsel West Area (Cilegon, Serang, Karawaci, Cikupa, &amp; BSD)</h4>
                                                    <p style="display:none;">null</p>
                                                    <hr>
                                                    <p>Melayani informasi, permintaan dan keluhan atas jasa layanan Telkomsel bagi seluruh pelanggan Telkomsel dan Melakukan verifikasi atas persyaratan administrasi untuk pelanggan, survey pelanggan, dan validasi serta aktivasi pasang baru kartuHalo , aktivasi/deaktivasi fitur layanan, perubahan data pelanggan, dan aktivasi eksekusi lainnya seseuai kewenangannya dan filing dokumen.</p>
                                                </div>
                                                <div class="col-md-3" style="padding:5px"> <span>Bidang Pekerjaan</span><br> <b>Inbound Call/CS/Frontliner</b><br><br> <span>Jenjang</span><br> <b>Diploma III</b> <br><br> <a href="https://recruit.infomedia.co.id/main#job_vacancy/job_detail/NWQ5MzNmNDdlYzE1NTBlNDY2ZGI3ZTQxYzBmMTAxY2QwYjc5MzAxYzRhNTc2NjI3YTEyNThiM2RkOWY1ZmExZjg3NjVjN2UwZTQ4NGE1ZjhiMmY4ODg2ZGIwMTNiNmJiNTg3OTk2M2Q5NTA5NmFkNDM3M2Q0OTBkMmJlNjU5NzlmcWNGdm5Ic0ZPQzdHcWFFQnlrM3dCMXFGN0xDR1RvbEcvcElaS3Eza3Q4PQ" target="_blank" class="btn btn-danger">Detail Pekerjaan</a> <span id="btn_save_1916"><button type="button" class="btn btn-sm btn-outline-primary cursor" onclick="save_job(`saved`,1916)" data-bs-toggle="tooltip" data-bs-placement="right" title="Save"><span class="material-icons">bookmark_border</span></button></span> </div>
                                            </div>
                                            <div class="row card-list-vacancy card-vac">
                                                <div class="ribbon">Vacancy Urgent</div>
                                                <div class="col-md-2"> <img src="https://recruit.infomedia.co.id/assets/backend/images/company_logo/1a6b173689253eb15d3ca33323ecff1f.png" alt="" style="width:inherit;height:inherit;position: inherit;top: 50%;left: 50%;transform: translate(-50%, -50%);display:none;">
                                                    <div class="relative" style="position: relative;display:none;"><iframe class="chartjs-hidden-iframe" style="display: block; overflow: hidden; border: 0px; margin: 0px; inset: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;" tabindex="-1"></iframe><canvas id="chartProgress_2158" width="0" height="0" style="display: none; height: 0px; width: 0px;"></canvas>
                                                        <div class="absolute-center text-center" style="position:absolute;top: 63%;left: 50%;transform: translate(-50%, -50%);"><label style="line-height: 1;font-size: x-small;">Kuota Kandidat</label></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-7 center-list-job">
                                                    <h4 style="margin-bottom: 0px;font-weight: bold;">Grapari Telkomsel East Area (Sukabumi, Bogor, Bekasi, Depok, Sawangan, Cibubur, Karawang)</h4>
                                                    <p style="display:none;">null</p>
                                                    <hr>
                                                    <p>Melayani informasi, permintaan dan keluhan atas jasa layanan Telkomsel bagi seluruh pelanggan Telkomsel dan Melakukan verifikasi atas persyaratan administrasi untuk pelanggan, survey pelanggan, dan validasi serta aktivasi pasang baru kartuHalo , aktivasi/deaktivasi fitur layanan, perubahan data pelanggan, dan aktivasi eksekusi lainnya seseuai kewenangannya dan filing dokumen.</p>
                                                </div>
                                                <div class="col-md-3" style="padding:5px"> <span>Bidang Pekerjaan</span><br> <b>Inbound Call/CS/Frontliner</b><br><br> <span>Jenjang</span><br> <b>Diploma III</b> <br><br> <a href="https://recruit.infomedia.co.id/main#job_vacancy/job_detail/YWJkYWMwMzQ0MmJkMjE0Y2UxZmY5NDVkYjYyNWIyOWNjYzA5OWVjZmNiNTk2ZDc0OTM1MTMyZDYzMTRmM2M1MGZkMjJhMTU4ZWQ0OTI4NTY1ODc1MGFjMjI5NzczM2NhNjYxNmU5ZTc1NTQ5YzNlODIwNWFiYmFkMmM1ZjdhNjRsYVpDVmpIR1VsL2hWbEdic2NmbmdXZXRSdHg0Y0pDcFplYTM5NGlzNnpzPQ" target="_blank" class="btn btn-danger">Detail Pekerjaan</a> <span id="btn_save_2158"><button type="button" class="btn btn-sm btn-outline-primary cursor" onclick="save_job(`saved`,2158)" data-bs-toggle="tooltip" data-bs-placement="right" title="Save"><span class="material-icons">bookmark_border</span></button></span> </div>
                                            </div>
                                            <div class="row card-list-vacancy card-vac">
                                                <div class="ribbon">Vacancy Urgent</div>
                                                <div class="col-md-2"> <img src="https://recruit.infomedia.co.id/assets/backend/images/company_logo/1a6b173689253eb15d3ca33323ecff1f.png" alt="" style="width:inherit;height:inherit;position: inherit;top: 50%;left: 50%;transform: translate(-50%, -50%);display:none;">
                                                    <div class="relative" style="position: relative;display:none;"><iframe class="chartjs-hidden-iframe" style="display: block; overflow: hidden; border: 0px; margin: 0px; inset: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;" tabindex="-1"></iframe><canvas id="chartProgress_2157" width="0" height="0" style="display: none; height: 0px; width: 0px;"></canvas>
                                                        <div class="absolute-center text-center" style="position:absolute;top: 63%;left: 50%;transform: translate(-50%, -50%);"><label style="line-height: 1;font-size: x-small;">Kuota Kandidat</label></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-7 center-list-job">
                                                    <h4 style="margin-bottom: 0px;font-weight: bold;">Grapari Central Area (Pondok Indah Plasa, Bassura, Emporium, Alia, Kokas, GMP, MKG &amp; All Jakarta)</h4>
                                                    <p style="display:none;">null</p>
                                                    <hr>
                                                    <p>Melayani informasi, permintaan dan keluhan atas jasa layanan Telkomsel bagi seluruh pelanggan Telkomsel dan Melakukan verifikasi atas persyaratan administrasi untuk pelanggan, survey pelanggan, dan validasi serta aktivasi pasang baru kartuHalo , aktivasi/deaktivasi fitur layanan, perubahan data pelanggan, dan aktivasi eksekusi lainnya seseuai kewenangannya dan filing dokumen.</p>
                                                </div>
                                                <div class="col-md-3" style="padding:5px"> <span>Bidang Pekerjaan</span><br> <b>Inbound Call/CS/Frontliner</b><br><br> <span>Jenjang</span><br> <b>Diploma III</b> <br><br> <a href="https://recruit.infomedia.co.id/main#job_vacancy/job_detail/OGFkMjIzMmY0ODRhNTY5ZmU1M2ZmZDY0NzYxOWZkYTBlZTc1MjU4NWMyNmIzMDExNDY4NzAyYzI0YTQ4ZGE5NDVkMzA0N2U4ZjU5NzBiMmI0ZTliZDViOGUyZDBjYmE5ZjlkYmRhMzgyZDFjNzdlMzU1ZTliN2ZlMmY1ZTAzYTNubmhnL0QyelFGN1dESmY1T2JZUC9qTUJTdUFBZTIzMEhwUUQxSEZaeXVBPQ" target="_blank" class="btn btn-danger">Detail Pekerjaan</a> <span id="btn_save_2157"><button type="button" class="btn btn-sm btn-outline-primary cursor" onclick="save_job(`saved`,2157)" data-bs-toggle="tooltip" data-bs-placement="right" title="Save"><span class="material-icons">bookmark_border</span></button></span> </div>
                                            </div>
                                            <div class="row card-list-vacancy card-vac">
                                                <div class="ribbon">Vacancy Urgent</div>
                                                <div class="col-md-2"> <img src="https://recruit.infomedia.co.id/assets/backend/images/company_logo/1a6b173689253eb15d3ca33323ecff1f.png" alt="" style="width:inherit;height:inherit;position: inherit;top: 50%;left: 50%;transform: translate(-50%, -50%);display:none;">
                                                    <div class="relative" style="position: relative;display:block;"><iframe class="chartjs-hidden-iframe" style="display: block; overflow: hidden; border: 0px; margin: 0px; inset: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;" tabindex="-1"></iframe><canvas id="chartProgress_3481" width="133" height="0" style="display: block; height: 0px; width: 89px;"></canvas>
                                                        <div class="absolute-center text-center" style="position:absolute;top: 63%;left: 50%;transform: translate(-50%, -50%);"><label style="line-height: 1;font-size: x-small;">Kuota Kandidat</label></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-7 center-list-job">
                                                    <h4 style="margin-bottom: 0px;font-weight: bold;">Agent Call Center Bahasa Mandarin Bank ICBC - Jakarta</h4>
                                                    <p style="display:none;">null</p>
                                                    <hr>
                                                    <p>Agent Call Center Inbound</p>
                                                </div>
                                                <div class="col-md-3" style="padding:5px"> <span>Bidang Pekerjaan</span><br> <b>Inbound Call/CS/Frontliner</b><br><br> <span>Jenjang</span><br> <b>SLTA/SMK</b> <br><br> <a href="https://recruit.infomedia.co.id/main#job_vacancy/job_detail/YmJlMjZjZmE3NDljYzZmMTQ5NDgyOTQ4YWNmMzdiOTBhZDM1ZDhjMTVmYzMzNThmNDY2YjU4MTM5NGFjNDYwNDljYWQ3ZDFjZGFkZDk2OWE0MTc1MDkxMjM1MTQyNWU4ZGNmN2Q4OTVhZjMyNTk5ODg4MTU4Y2RiODUxZWY2NTNBdXo5ZTlLNEZsdzhpR05Ba1dBMGhaTGJvM3ZHdDFOdWZKbU9pMjRyd1JNPQ" target="_blank" class="btn btn-danger">Detail Pekerjaan</a> <span id="btn_save_3481"><button type="button" class="btn btn-sm btn-outline-primary cursor" onclick="save_job(`saved`,3481)" data-bs-toggle="tooltip" data-bs-placement="right" title="Save"><span class="material-icons">bookmark_border</span></button></span> </div>
                                            </div>
                                        </div>
                                        <div class="result-list-wrapper" id="list_vacancy">
                                            <div class="row card-list-vacancy card-vac">
                                                <div class="col-md-2"><iframe class="chartjs-hidden-iframe" style="display: block; overflow: hidden; border: 0px; margin: 0px; inset: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;" tabindex="-1"></iframe> <img src="https://recruit.infomedia.co.id/assets/backend/images/company_logo/1a6b173689253eb15d3ca33323ecff1f.png" alt="" style="width:inherit;height:inherit;position: inherit;top: 50%;left: 50%;transform: translate(-50%, -50%);display:none;"> <canvas id="chartProgress_8733" width="135" height="355" style="display: block; height: 237px; width: 90px;"></canvas> </div>
                                                <div class="col-md-7 center-list-job">
                                                    <h4 style="margin-bottom: 0px;font-weight: bold;">Quality Control Agent CC Perusahaan Minyak Milik Negara - Semarang</h4>
                                                    <p style="display:none;">null</p>
                                                    <hr>
                                                    <p>Quality Control</p>
                                                </div>
                                                <div class="col-md-3" style="padding:5px"> <span>Bidang Pekerjaan</span><br> <b>Inbound Call/CS/Frontliner</b><br><br> <span>Jenjang</span><br> <b>Diploma III</b> <br><br> <a href="https://recruit.infomedia.co.id/main#job_vacancy/job_detail/MmNhNTU2YTIxOTU3OTFlNmI2Yjc5YzExNGI3Mzg3MzAxNTNhNTlhMjQ4ZWNmNjUxYjI4NzkyMmRkNGFiMTU1Yzk2YmI0YzFiNzFkYWE2MTBkMjhiMTAzMDQ2N2MyNzliODA0ZTc0ZWYyNmM1ZjdjYWZiMTY4NzUyNDMwODM3ZTlDaEZDNHdiZE1TQ2VGVmxYMEpEck1TZ0FBek1DUlAzeEtVZDNpaEdqSDdVPQ" target="_blank" class="btn btn-danger">Detail Pekerjaan</a> <span id="btn_save_8733"><button type="button" class="btn btn-sm btn-outline-primary cursor" onclick="save_job(`saved`,8733)" data-bs-toggle="tooltip" data-bs-placement="right" title="Save"><span class="material-icons">bookmark_border</span></button></span> </div>
                                            </div>
                                            <div class="row card-list-vacancy card-vac">
                                                <div class="col-md-2"><iframe class="chartjs-hidden-iframe" style="display: block; overflow: hidden; border: 0px; margin: 0px; inset: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;" tabindex="-1"></iframe> <img src="https://recruit.infomedia.co.id/assets/backend/images/company_logo/1a6b173689253eb15d3ca33323ecff1f.png" alt="" style="width:inherit;height:inherit;position: inherit;top: 50%;left: 50%;transform: translate(-50%, -50%);display:none;"> <canvas id="chartProgress_8932" width="135" height="355" style="display: block; height: 237px; width: 90px;"></canvas> </div>
                                                <div class="col-md-7 center-list-job">
                                                    <h4 style="margin-bottom: 0px;font-weight: bold;">CSR GraPARI Telkomsel - Tarakan Kalimantan Utara</h4>
                                                    <p style="display:none;">null</p>
                                                    <hr>
                                                    <p>Costumer Service Representative</p>
                                                </div>
                                                <div class="col-md-3" style="padding:5px"> <span>Bidang Pekerjaan</span><br> <b>Inbound Call/CS/Frontliner</b><br><br> <span>Jenjang</span><br> <b>Diploma III</b> <br><br> <a href="https://recruit.infomedia.co.id/main#job_vacancy/job_detail/ZDUzNjQzZDZjOGM4MTk0OTEyMjNmMzI3OTM5NjY5MTEyNzE1MGQxY2Y5ZjkwMjU2MDY2ZGU0OTk5YzkyNmNjNjg2ZGMwZjgzMjE4YTdlY2YzNThkMGFhMmYzZDI5YTkzZTg0OTk2NDE2OTIwMzFlMWFlZDZiZTZlNTJiYmEwMWE5djBZZDc0MlBXbVdkSzlsdUdDRmlDT3JrdURKaXV1ZDVPKytvUUkrMHNFPQ" target="_blank" class="btn btn-danger">Detail Pekerjaan</a> <span id="btn_save_8932"><button type="button" class="btn btn-sm btn-outline-primary cursor" onclick="save_job(`saved`,8932)" data-bs-toggle="tooltip" data-bs-placement="right" title="Save"><span class="material-icons">bookmark_border</span></button></span> </div>
                                            </div>
                                            <div class="row card-list-vacancy card-vac">
                                                <div class="col-md-2"><iframe class="chartjs-hidden-iframe" style="display: block; overflow: hidden; border: 0px; margin: 0px; inset: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;" tabindex="-1"></iframe> <img src="https://recruit.infomedia.co.id/assets/backend/images/company_logo/1a6b173689253eb15d3ca33323ecff1f.png" alt="" style="width:inherit;height:inherit;position: inherit;top: 50%;left: 50%;transform: translate(-50%, -50%);display:none;"> <canvas id="chartProgress_8931" width="135" height="355" style="display: block; height: 237px; width: 90px;"></canvas> </div>
                                                <div class="col-md-7 center-list-job">
                                                    <h4 style="margin-bottom: 0px;font-weight: bold;">CSR GraPARI Telkomsel - Bantaeng Sulawesi Selatan</h4>
                                                    <p style="display:none;">null</p>
                                                    <hr>
                                                    <p>Costumer Service Representative</p>
                                                </div>
                                                <div class="col-md-3" style="padding:5px"> <span>Bidang Pekerjaan</span><br> <b>Inbound Call/CS/Frontliner</b><br><br> <span>Jenjang</span><br> <b>Diploma III</b> <br><br> <a href="https://recruit.infomedia.co.id/main#job_vacancy/job_detail/NDQ2ZmZmZjM5MDNjNWM0ZmQxYWNjZWZiMzIwNWNkMGZlMjRmOWU4NzA1MTVhNzI2NmU2Nzg1MTdkMzQ5NDM1OTZlMmY1NTIxNzg1N2Y3MDY2ZDcwYmJhMGY3N2ZkMTA2NTE1ZWE5NTRmNTQzODg3ZjM3ZjMwNjVlZjc0ODlhZDV5MjFPeUdsZVIyK05jTDBxWlp0bGwvcXZJVnB6UzRSWFJuTnQ5d3FsQVZRPQ" target="_blank" class="btn btn-danger">Detail Pekerjaan</a> <span id="btn_save_8931"><button type="button" class="btn btn-sm btn-outline-primary cursor" onclick="save_job(`saved`,8931)" data-bs-toggle="tooltip" data-bs-placement="right" title="Save"><span class="material-icons">bookmark_border</span></button></span> </div>
                                            </div>
                                            <div class="row card-list-vacancy card-vac">
                                                <div class="col-md-2"><iframe class="chartjs-hidden-iframe" style="display: block; overflow: hidden; border: 0px; margin: 0px; inset: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;" tabindex="-1"></iframe> <img src="https://recruit.infomedia.co.id/assets/backend/images/company_logo/1a6b173689253eb15d3ca33323ecff1f.png" alt="" style="width:inherit;height:inherit;position: inherit;top: 50%;left: 50%;transform: translate(-50%, -50%);display:none;"> <canvas id="chartProgress_7117" width="135" height="355" style="display: block; height: 237px; width: 90px;"></canvas> </div>
                                                <div class="col-md-7 center-list-job">
                                                    <h4 style="margin-bottom: 0px;font-weight: bold;">Agent Contact Center Laboratorium Klinik - Semarang dan Bandung</h4>
                                                    <p style="display:none;">null</p>
                                                    <hr>
                                                    <p>Agent Contact Center (Inbound Call)</p>
                                                </div>
                                                <div class="col-md-3" style="padding:5px"> <span>Bidang Pekerjaan</span><br> <b>Inbound Call/CS/Frontliner</b><br><br> <span>Jenjang</span><br> <b>Diploma III</b> <br><br> <a href="https://recruit.infomedia.co.id/main#job_vacancy/job_detail/NmY0ZmM1YWE2NzkxZDg2NmU1NWUzYzVlZjM1ZjMxNDVmMzRhMGQ3ZGU0ZjRkYWNmYzcyZDBlODNkZWQ5YzM3YTE2MTFkMDFiM2I3ZGMzOTlhNzAzOTAzMDNmNjhiNjQzMTc3NGVmMTE4ZGJkNDNkZmM3NTRiZjMwOTZiOTdjYWRDZHlQUUJoRk1RanpOVzVvcHhDUlJSNTZqRXFGb012TU5GNnlXcG9iVDEwPQ" target="_blank" class="btn btn-danger">Detail Pekerjaan</a> <span id="btn_save_7117"><button type="button" class="btn btn-sm btn-outline-primary cursor" onclick="save_job(`saved`,7117)" data-bs-toggle="tooltip" data-bs-placement="right" title="Save"><span class="material-icons">bookmark_border</span></button></span> </div>
                                            </div>
                                            <div class="row card-list-vacancy card-vac">
                                                <div class="col-md-2"><iframe class="chartjs-hidden-iframe" style="display: block; overflow: hidden; border: 0px; margin: 0px; inset: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;" tabindex="-1"></iframe> <img src="https://recruit.infomedia.co.id/assets/backend/images/company_logo/1a6b173689253eb15d3ca33323ecff1f.png" alt="" style="width:inherit;height:inherit;position: inherit;top: 50%;left: 50%;transform: translate(-50%, -50%);display:none;"> <canvas id="chartProgress_8925" width="135" height="355" style="display: block; height: 237px; width: 90px;"></canvas> </div>
                                                <div class="col-md-7 center-list-job">
                                                    <h4 style="margin-bottom: 0px;font-weight: bold;">Supervisor Contact Center Ecommerce - Semarang</h4>
                                                    <p style="display:none;">null</p>
                                                    <hr>
                                                    <p>SPV</p>
                                                </div>
                                                <div class="col-md-3" style="padding:5px"> <span>Bidang Pekerjaan</span><br> <b>Inbound Call/CS/Frontliner</b><br><br> <span>Jenjang</span><br> <b>Diploma III</b> <br><br> <a href="https://recruit.infomedia.co.id/main#job_vacancy/job_detail/MDljYTcwZmFhZDA3Y2Y5YWE0OGY5MjcxMWU5ZTZmODA1ZTAzODJkMDAzNDNiZjFmODUyNDY4MWNmN2RlYTdlNzQ2NTQwZGRmMjlkNTcyNmJkOWMxODQ4YTM2OTRiMjg5NDdlOWZjZGU0MTFiZTc4MTAyMGY5NjJiODEyNTQxY2JycnAzZmw2bUZtZndDNzNaZFRnNXJXa1J1VjBrN0RCM3ZSejJvWGsvaWI0PQ" target="_blank" class="btn btn-danger">Detail Pekerjaan</a> <span id="btn_save_8925"><button type="button" class="btn btn-sm btn-outline-primary cursor" onclick="save_job(`saved`,8925)" data-bs-toggle="tooltip" data-bs-placement="right" title="Save"><span class="material-icons">bookmark_border</span></button></span> </div>
                                            </div>
                                            <div class="row card-list-vacancy card-vac">
                                                <div class="col-md-2"><iframe class="chartjs-hidden-iframe" style="display: block; overflow: hidden; border: 0px; margin: 0px; inset: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;" tabindex="-1"></iframe> <img src="https://recruit.infomedia.co.id/assets/backend/images/company_logo/1a6b173689253eb15d3ca33323ecff1f.png" alt="" style="width:inherit;height:inherit;position: inherit;top: 50%;left: 50%;transform: translate(-50%, -50%);display:none;"> <canvas id="chartProgress_8895" width="135" height="355" style="display: block; height: 237px; width: 90px;"></canvas> </div>
                                                <div class="col-md-7 center-list-job">
                                                    <h4 style="margin-bottom: 0px;font-weight: bold;">CSR GraPARI Telkomsel - Kwandang Gorontalo</h4>
                                                    <p style="display:none;">null</p>
                                                    <hr>
                                                    <p>Costumer Service Representative</p>
                                                </div>
                                                <div class="col-md-3" style="padding:5px"> <span>Bidang Pekerjaan</span><br> <b>Inbound Call/CS/Frontliner</b><br><br> <span>Jenjang</span><br> <b>Diploma III</b> <br><br> <a href="https://recruit.infomedia.co.id/main#job_vacancy/job_detail/NGNkMTgzNDVhZDE4NDJiNWUzYzRmZjZiMDlhOWNhOGZjODZlYWY2MDRmMzViNWIxNjg0YzFiZWNhYjBhMWU5ZGVkYTQ2ODk3OTE0MDBiNWRjNDVhZGU0Nzg4ZTQ4YjhiYmE2YTVlNWY3ZTI2MjQ0NTk0NzIxOGFlNWNjOTBmZGFzL1VRMWtWRnVlR3VXV3U5ZTQ5eEdSMnJzQlRMdjhjaEFlL1pSTzZzME9zPQ" target="_blank" class="btn btn-danger">Detail Pekerjaan</a> <span id="btn_save_8895"><button type="button" class="btn btn-sm btn-outline-primary cursor" onclick="save_job(`saved`,8895)" data-bs-toggle="tooltip" data-bs-placement="right" title="Save"><span class="material-icons">bookmark_border</span></button></span> </div>
                                            </div>
                                            <div class="row card-list-vacancy card-vac">
                                                <div class="col-md-2"><iframe class="chartjs-hidden-iframe" style="display: block; overflow: hidden; border: 0px; margin: 0px; inset: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;" tabindex="-1"></iframe> <img src="https://recruit.infomedia.co.id/assets/backend/images/company_logo/1a6b173689253eb15d3ca33323ecff1f.png" alt="" style="width:inherit;height:inherit;position: inherit;top: 50%;left: 50%;transform: translate(-50%, -50%);display:none;"> <canvas id="chartProgress_8831" width="135" height="324" style="display: block; height: 216px; width: 90px;"></canvas> </div>
                                                <div class="col-md-7 center-list-job">
                                                    <h4 style="margin-bottom: 0px;font-weight: bold;">Junior Account Manager PT Infomedia - Makassar</h4>
                                                    <p style="display:none;">null</p>
                                                    <hr>
                                                    <p>Junior Account Manager</p>
                                                </div>
                                                <div class="col-md-3" style="padding:5px"> <span>Bidang Pekerjaan</span><br> <b>Marketing/Sales</b><br><br> <span>Jenjang</span><br> <b>S1-Perguruan Tinggi</b> <br><br> <a href="https://recruit.infomedia.co.id/main#job_vacancy/job_detail/MmVjYzczYWY1MWNiZGUwMzc3ZTZkMDZhNjljZGE5ODFmYTg2MTRiNWRiMTQ3Zjk4NmNhNjAwYzU4YWI1MGE3M2E4NDE0OGRlMzIxZjY2OGVjZDdkOTFjYWNkNjVlNGVhOWU5NGEwMDcxMzcyMDI4YThjODI3Yzc3ZWFlMWJjMTUxZHFqQ0RZMWdrV096ZU5DVVk2K3ZIVnZyY0dyODhrelM3a3RQRlZDMVJBPQ" target="_blank" class="btn btn-danger">Detail Pekerjaan</a> <span id="btn_save_8831"><button type="button" class="btn btn-sm btn-outline-primary cursor" onclick="save_job(`saved`,8831)" data-bs-toggle="tooltip" data-bs-placement="right" title="Save"><span class="material-icons">bookmark_border</span></button></span> </div>
                                            </div>
                                            <div class="row card-list-vacancy card-vac">
                                                <div class="col-md-2"><iframe class="chartjs-hidden-iframe" style="display: block; overflow: hidden; border: 0px; margin: 0px; inset: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;" tabindex="-1"></iframe> <img src="https://recruit.infomedia.co.id/assets/backend/images/company_logo/1a6b173689253eb15d3ca33323ecff1f.png" alt="" style="width:inherit;height:inherit;position: inherit;top: 50%;left: 50%;transform: translate(-50%, -50%);display:none;"> <canvas id="chartProgress_8806" width="135" height="324" style="display: block; height: 216px; width: 90px;"></canvas> </div>
                                                <div class="col-md-7 center-list-job">
                                                    <h4 style="margin-bottom: 0px;font-weight: bold;">Junior Account Manager Sales Government Area Surabaya</h4>
                                                    <p style="display:none;">null</p>
                                                    <hr>
                                                    <p>Junior Account Manager</p>
                                                </div>
                                                <div class="col-md-3" style="padding:5px"> <span>Bidang Pekerjaan</span><br> <b>Marketing/Sales</b><br><br> <span>Jenjang</span><br> <b>Diploma III</b> <br><br> <a href="https://recruit.infomedia.co.id/main#job_vacancy/job_detail/YzNmNjU4MzIxZjI4YTkwYmU1ZGY3NzM4ODlmOWNkYjJhZThjYmZhMTU4NWFkNTJiOTIzYmQwM2FiOGI5Yjc5NTU5MWE1YTc2YWZiODc1MzEzN2FjMTQxMzZiZWZhMzc0NDZlMmU1YzA0NTFlY2QwYjQ5YmY0OWIzYTc2NmIwZTF6VEtmQUpIUjM5VDJzVmZKVEJxUi94dlRDR01YSzAyQTFQdjJaNFAxTlBrPQ" target="_blank" class="btn btn-danger">Detail Pekerjaan</a> <span id="btn_save_8806"><button type="button" class="btn btn-sm btn-outline-primary cursor" onclick="save_job(`saved`,8806)" data-bs-toggle="tooltip" data-bs-placement="right" title="Save"><span class="material-icons">bookmark_border</span></button></span> </div>
                                            </div>
                                            <div class="row card-list-vacancy card-vac">
                                                <div class="col-md-2"><iframe class="chartjs-hidden-iframe" style="display: block; overflow: hidden; border: 0px; margin: 0px; inset: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;" tabindex="-1"></iframe> <img src="https://recruit.infomedia.co.id/assets/backend/images/company_logo/1a6b173689253eb15d3ca33323ecff1f.png" alt="" style="width:inherit;height:inherit;position: inherit;top: 50%;left: 50%;transform: translate(-50%, -50%);display:none;"> <canvas id="chartProgress_8734" width="135" height="355" style="display: block; height: 237px; width: 90px;"></canvas> </div>
                                                <div class="col-md-7 center-list-job">
                                                    <h4 style="margin-bottom: 0px;font-weight: bold;">Admin Agent CC Perusahaan Minyak Milik Negara - Semarang</h4>
                                                    <p style="display:none;">null</p>
                                                    <hr>
                                                    <p>Agent</p>
                                                </div>
                                                <div class="col-md-3" style="padding:5px"> <span>Bidang Pekerjaan</span><br> <b>Inbound Call/CS/Frontliner</b><br><br> <span>Jenjang</span><br> <b>Diploma III</b> <br><br> <a href="https://recruit.infomedia.co.id/main#job_vacancy/job_detail/OWMzNzU4YjJjNDA1NWQ2NDRmNTE4NmZjOTYzYzhmYWJjN2MyMzc1YzA1Njk1YWE3OTIzZjI1NDM2MTEyNTE0Y2U1ZmI2Zjk3M2Q5MWVhNmUzZTRkZjRlYjVlMDBkNjA4YjQ3NDFjZTgzOTUwNGVjY2UyOTQwMDVmYWJlMGY4ZDZqeHJPZlNzUUhJMkZZa1E3M04yMG4rNTRzOWtZYmtoT0RlbEJtVEZsb1V3PQ" target="_blank" class="btn btn-danger">Detail Pekerjaan</a> <span id="btn_save_8734"><button type="button" class="btn btn-sm btn-outline-primary cursor" onclick="save_job(`saved`,8734)" data-bs-toggle="tooltip" data-bs-placement="right" title="Save"><span class="material-icons">bookmark_border</span></button></span> </div>
                                            </div>
                                            <div class="row card-list-vacancy card-vac">
                                                <div class="col-md-2"><iframe class="chartjs-hidden-iframe" style="display: block; overflow: hidden; border: 0px; margin: 0px; inset: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;" tabindex="-1"></iframe> <img src="https://recruit.infomedia.co.id/assets/backend/images/company_logo/1a6b173689253eb15d3ca33323ecff1f.png" alt="" style="width:inherit;height:inherit;position: inherit;top: 50%;left: 50%;transform: translate(-50%, -50%);display:none;"> <canvas id="chartProgress_8791" width="135" height="355" style="display: block; height: 237px; width: 90px;"></canvas> </div>
                                                <div class="col-md-7 center-list-job">
                                                    <h4 style="margin-bottom: 0px;font-weight: bold;">AGENT WSO - Semarang</h4>
                                                    <p style="display:none;">null</p>
                                                    <hr>
                                                    <p>-</p>
                                                </div>
                                                <div class="col-md-3" style="padding:5px"> <span>Bidang Pekerjaan</span><br> <b>Inbound Call/CS/Frontliner</b><br><br> <span>Jenjang</span><br> <b>Diploma III</b> <br><br> <a href="https://recruit.infomedia.co.id/main#job_vacancy/job_detail/Yzk0MDQ4ZWRjNGVmN2VmM2RmYjhlM2MwYzIyNTUxNGZiZmRkNTllYWRmNDEyNGFjZmZmZDVlYjdjYzNhN2FlNDUzZjJhZTA2MmFjODMwYTc2OGQwOTAxYzYyMGI0ZTc5MDhlOGI3MTRkMGFmMDJjN2RhN2U2NmZhMDNmODlhYWFXTDdZN3o4NVR2U05vbTJuOVZBM1BrazZFMFIrcHp2YUVTTG51Ni9ENTRJPQ" target="_blank" class="btn btn-danger">Detail Pekerjaan</a> <span id="btn_save_8791"><button type="button" class="btn btn-sm btn-outline-primary cursor" onclick="save_job(`saved`,8791)" data-bs-toggle="tooltip" data-bs-placement="right" title="Save"><span class="material-icons">bookmark_border</span></button></span> </div>
                                            </div>
                                            <div class="row card-list-vacancy card-vac">
                                                <div class="col-md-2"><iframe class="chartjs-hidden-iframe" style="display: block; overflow: hidden; border: 0px; margin: 0px; inset: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;" tabindex="-1"></iframe> <img src="https://recruit.infomedia.co.id/assets/backend/images/company_logo/1a6b173689253eb15d3ca33323ecff1f.png" alt="" style="width:inherit;height:inherit;position: inherit;top: 50%;left: 50%;transform: translate(-50%, -50%);display:none;"> <canvas id="chartProgress_8732" width="135" height="355" style="display: block; height: 237px; width: 90px;"></canvas> </div>
                                                <div class="col-md-7 center-list-job">
                                                    <h4 style="margin-bottom: 0px;font-weight: bold;">Team Leader Agent CC Perusahaan Minyak Milik Negara - Semarang</h4>
                                                    <p style="display:none;">null</p>
                                                    <hr>
                                                    <p>Team Leader</p>
                                                </div>
                                                <div class="col-md-3" style="padding:5px"> <span>Bidang Pekerjaan</span><br> <b>Inbound Call/CS/Frontliner</b><br><br> <span>Jenjang</span><br> <b>Diploma III</b> <br><br> <a href="https://recruit.infomedia.co.id/main#job_vacancy/job_detail/M2VmMTI0NzM4NTZhM2ZmZWYwZDNjODkyNDQ1ZjhkOGJmOTg3M2FlN2ViYTgyZTI1NDZlODNhMDFkMGYyOWEyNmY3NzUyNjUzZGZjMjhmMjhhNmYzZWYwYmI0N2U1MDNlOGRmNDNkN2E3MWE1OTUwZjQ2ODNiNjZjNzc3NzIxZGEzeXB1bGRmTU5kZTRjWG1Od2hxNGVIRVhHWUJKQldmUzNnalJ6dGlSZEZjPQ" target="_blank" class="btn btn-danger">Detail Pekerjaan</a> <span id="btn_save_8732"><button type="button" class="btn btn-sm btn-outline-primary cursor" onclick="save_job(`saved`,8732)" data-bs-toggle="tooltip" data-bs-placement="right" title="Save"><span class="material-icons">bookmark_border</span></button></span> </div>
                                            </div>
                                            <div class="row card-list-vacancy card-vac">
                                                <div class="col-md-2"><iframe class="chartjs-hidden-iframe" style="display: block; overflow: hidden; border: 0px; margin: 0px; inset: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;" tabindex="-1"></iframe> <img src="https://recruit.infomedia.co.id/assets/backend/images/company_logo/1a6b173689253eb15d3ca33323ecff1f.png" alt="" style="width:inherit;height:inherit;position: inherit;top: 50%;left: 50%;transform: translate(-50%, -50%);display:none;"> <canvas id="chartProgress_8790" width="135" height="355" style="display: block; height: 237px; width: 90px;"></canvas> </div>
                                                <div class="col-md-7 center-list-job">
                                                    <h4 style="margin-bottom: 0px;font-weight: bold;">AGENT WSO BANDUNG </h4>
                                                    <p style="display:none;">null</p>
                                                    <hr>
                                                    <p>-</p>
                                                </div>
                                                <div class="col-md-3" style="padding:5px"> <span>Bidang Pekerjaan</span><br> <b>Inbound Call/CS/Frontliner</b><br><br> <span>Jenjang</span><br> <b>Diploma III</b> <br><br> <a href="https://recruit.infomedia.co.id/main#job_vacancy/job_detail/OTE1MzQxYWNjZTgyZmQwMzRiZWNiYTk0NTFmOTJkMDNjNmZmOGQ4YTFiODhkYTA3ZGYzMWZhN2VjMjJhOTllOTk0ZGE0MzdiOTM5MzI2NDQ3NjgzNzk3MGFjYjM1MGFjMWZmYTBmYjRiNjBiZTg0NjMwMWQ4MzM0ZjA5NDE0MmZObTN3VWR3Ykg0cnBLeHoxOG1DdlNDOWp5VnJDUFQ4aVBhOTR1blYzL3FNPQ" target="_blank" class="btn btn-danger">Detail Pekerjaan</a> <span id="btn_save_8790"><button type="button" class="btn btn-sm btn-outline-primary cursor" onclick="save_job(`saved`,8790)" data-bs-toggle="tooltip" data-bs-placement="right" title="Save"><span class="material-icons">bookmark_border</span></button></span> </div>
                                            </div>
                                            <div class="row card-list-vacancy card-vac">
                                                <div class="col-md-2"><iframe class="chartjs-hidden-iframe" style="display: block; overflow: hidden; border: 0px; margin: 0px; inset: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;" tabindex="-1"></iframe> <img src="https://recruit.infomedia.co.id/assets/backend/images/company_logo/1a6b173689253eb15d3ca33323ecff1f.png" alt="" style="width:inherit;height:inherit;position: inherit;top: 50%;left: 50%;transform: translate(-50%, -50%);display:none;"> <canvas id="chartProgress_8666" width="135" height="355" style="display: block; height: 237px; width: 90px;"></canvas> </div>
                                                <div class="col-md-7 center-list-job">
                                                    <h4 style="margin-bottom: 0px;font-weight: bold;">Agent Inbound Fixed - Semarang</h4>
                                                    <p style="display:none;">null</p>
                                                    <hr>
                                                    <p>agent</p>
                                                </div>
                                                <div class="col-md-3" style="padding:5px"> <span>Bidang Pekerjaan</span><br> <b>Inbound Call/CS/Frontliner</b><br><br> <span>Jenjang</span><br> <b>Diploma III</b> <br><br> <a href="https://recruit.infomedia.co.id/main#job_vacancy/job_detail/YTQ2ODQ3NWY1NzA5OTg2MjllM2Y2M2RlNDlhYWU4MDBiNzRlNzVmZWQ1YzQ5MzZiMTU3YjMxMzIwM2EwYmFkMTNiNWM1NzUxZWNhNWM4ZWZhY2FmZjQ5NzZjODBlOTEwMGJjMjcwNWUzNzliOWY2N2EwMGNiZjllMTBkNDE0MjBaMmVEQlh6blMzL0F1bGI2S2FMdW1JcnZ1bmhiVlZHRWxPV1pNZXBBRitjPQ" target="_blank" class="btn btn-danger">Detail Pekerjaan</a> <span id="btn_save_8666"><button type="button" class="btn btn-sm btn-outline-primary cursor" onclick="save_job(`saved`,8666)" data-bs-toggle="tooltip" data-bs-placement="right" title="Save"><span class="material-icons">bookmark_border</span></button></span> </div>
                                            </div>
                                            <div class="row card-list-vacancy card-vac">
                                                <div class="col-md-2"><iframe class="chartjs-hidden-iframe" style="display: block; overflow: hidden; border: 0px; margin: 0px; inset: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;" tabindex="-1"></iframe> <img src="https://recruit.infomedia.co.id/assets/backend/images/company_logo/1a6b173689253eb15d3ca33323ecff1f.png" alt="" style="width:inherit;height:inherit;position: inherit;top: 50%;left: 50%;transform: translate(-50%, -50%);display:none;"> <canvas id="chartProgress_8748" width="135" height="355" style="display: block; height: 237px; width: 90px;"></canvas> </div>
                                                <div class="col-md-7 center-list-job">
                                                    <h4 style="margin-bottom: 0px;font-weight: bold;">IT FBCC Semarang</h4>
                                                    <p style="display:none;">null</p>
                                                    <hr>
                                                    <p>IT</p>
                                                </div>
                                                <div class="col-md-3" style="padding:5px"> <span>Bidang Pekerjaan</span><br> <b>Information Technology</b><br><br> <span>Jenjang</span><br> <b>Diploma III</b> <br><br> <a href="https://recruit.infomedia.co.id/main#job_vacancy/job_detail/MTRmMDNmMzg5YThkNmNhNGRkNjE4YmRlODQ5Y2NmZTc2MGY3ZGQ5OGJlYzFlNjU5M2RkODBhZjg0ODdmYTUzM2U0MzE2MjIyODczNDM0NmM5ODk1NDgwODM1MGQxMWExZGEzMDM5ZTFmYmYyNmRhNmZmOGNlNWIzZWU0YjhmNWFKMi93QmpxOWRpVFZKQUs0N3VFRE81SVBBY3h1TnVxOC9ZRS9Pd3k4bzZ3PQ" target="_blank" class="btn btn-danger">Detail Pekerjaan</a> <span id="btn_save_8748"><button type="button" class="btn btn-sm btn-outline-primary cursor" onclick="save_job(`saved`,8748)" data-bs-toggle="tooltip" data-bs-placement="right" title="Save"><span class="material-icons">bookmark_border</span></button></span> </div>
                                            </div>
                                            <div class="row card-list-vacancy card-vac">
                                                <div class="col-md-2"><iframe class="chartjs-hidden-iframe" style="display: block; overflow: hidden; border: 0px; margin: 0px; inset: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;" tabindex="-1"></iframe> <img src="https://recruit.infomedia.co.id/assets/backend/images/company_logo/1a6b173689253eb15d3ca33323ecff1f.png" alt="" style="width:inherit;height:inherit;position: inherit;top: 50%;left: 50%;transform: translate(-50%, -50%);display:none;"> <canvas id="chartProgress_5811" width="135" height="355" style="display: block; height: 237px; width: 90px;"></canvas> </div>
                                                <div class="col-md-7 center-list-job">
                                                    <h4 style="margin-bottom: 0px;font-weight: bold;">GraPARI Kefamenanu- NTT</h4>
                                                    <p style="display:none;">null</p>
                                                    <hr>
                                                    <p>Customer Service Representative</p>
                                                </div>
                                                <div class="col-md-3" style="padding:5px"> <span>Bidang Pekerjaan</span><br> <b>Inbound Call/CS/Frontliner</b><br><br> <span>Jenjang</span><br> <b>Diploma III</b> <br><br> <a href="https://recruit.infomedia.co.id/main#job_vacancy/job_detail/MGQ5NDU0ZjcyMjNiNzcyYzJhOTdhYjkwN2I0NTM1NzVmZmM3YTU0Zjc5MTk2MjRhYmY2NjE3MzY5YmU1MmM5MDVhNjY4ZDJiMGJiOGFkMGIzZGZmZTE3YmU5ZjZkMGEwY2EzYjQ1ZDc2MmY4YTIzMDhlNmEwNzJmYTMzYzA5NDVhN1BYMzhzR2dlaEdsaHB2UEtXa3FYQk9aazh0Kzc1UWtYejVYM0kyWDdFPQ" target="_blank" class="btn btn-danger">Detail Pekerjaan</a> <span id="btn_save_5811"><button type="button" class="btn btn-sm btn-outline-primary cursor" onclick="save_job(`saved`,5811)" data-bs-toggle="tooltip" data-bs-placement="right" title="Save"><span class="material-icons">bookmark_border</span></button></span> </div>
                                            </div>
                                            <div class="row card-list-vacancy card-vac">
                                                <div class="col-md-2"><iframe class="chartjs-hidden-iframe" style="display: block; overflow: hidden; border: 0px; margin: 0px; inset: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;" tabindex="-1"></iframe> <img src="https://recruit.infomedia.co.id/assets/backend/images/company_logo/1a6b173689253eb15d3ca33323ecff1f.png" alt="" style="width:inherit;height:inherit;position: inherit;top: 50%;left: 50%;transform: translate(-50%, -50%);display:none;"> <canvas id="chartProgress_5761" width="135" height="355" style="display: block; height: 237px; width: 90px;"></canvas> </div>
                                                <div class="col-md-7 center-list-job">
                                                    <h4 style="margin-bottom: 0px;font-weight: bold;">CSR GraPARI Boyolali</h4>
                                                    <p style="display:none;">null</p>
                                                    <hr>
                                                    <p>Customer Service Representative</p>
                                                </div>
                                                <div class="col-md-3" style="padding:5px"> <span>Bidang Pekerjaan</span><br> <b>Inbound Call/CS/Frontliner</b><br><br> <span>Jenjang</span><br> <b>Diploma III</b> <br><br> <a href="https://recruit.infomedia.co.id/main#job_vacancy/job_detail/NjYwOTRhMmMzMmE3M2NlNWY4M2E3YTg0Njc2MzQ0M2JhMjg4ZGRlNWVjNWI0MDNkZjEzZDVlMDg0YjdiODIwNzdjMTVjNDJjNDRhNGI1NGI1OTY2OGUzODhkZTc4OWVhZWI1MzdmZWNiNzAwYjU1NzczMTlmNjI1MGE0NmFjZGZGcmtrUk9vVlZSV3ZmV1NrSHRBK0EzeUcweUV2M1NWdTRkOUJzWEUxOHJRPQ" target="_blank" class="btn btn-danger">Detail Pekerjaan</a> <span id="btn_save_5761"><button type="button" class="btn btn-sm btn-outline-primary cursor" onclick="save_job(`saved`,5761)" data-bs-toggle="tooltip" data-bs-placement="right" title="Save"><span class="material-icons">bookmark_border</span></button></span> </div>
                                            </div>
                                            <div class="row card-list-vacancy card-vac">
                                                <div class="col-md-2"><iframe class="chartjs-hidden-iframe" style="display: block; overflow: hidden; border: 0px; margin: 0px; inset: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;" tabindex="-1"></iframe> <img src="https://recruit.infomedia.co.id/assets/backend/images/company_logo/1a6b173689253eb15d3ca33323ecff1f.png" alt="" style="width:inherit;height:inherit;position: inherit;top: 50%;left: 50%;transform: translate(-50%, -50%);display:none;"> <canvas id="chartProgress_8731" width="135" height="324" style="display: block; height: 216px; width: 90px;"></canvas> </div>
                                                <div class="col-md-7 center-list-job">
                                                    <h4 style="margin-bottom: 0px;font-weight: bold;">Agent Remcall FBCC - Bandung</h4>
                                                    <p style="display:none;">null</p>
                                                    <hr>
                                                    <p>agent outbound call</p>
                                                </div>
                                                <div class="col-md-3" style="padding:5px"> <span>Bidang Pekerjaan</span><br> <b>OBC Telesales</b><br><br> <span>Jenjang</span><br> <b>SLTA/SMK</b> <br><br> <a href="https://recruit.infomedia.co.id/main#job_vacancy/job_detail/NjMwYTY2MjFhNmRiOWUyYTU2Yjg5YTY4MmZkYmZhNGJhODY0NzNmZjdjZjYxOGUwMmFhYjEwZTgxMWVhNGZmMjM5OGEyZDZlYTRlZjllZDI2YjUzNjljZjE5ODliN2NmYWRlMjM0MjgzMzgzZjM1NTJjZDI1ZTE3MjNlZDI5NmUxbHAwM3QxcjJzQzBub0h1cWM5czRvZ1NGUks5Z3k4aVM3VzUzeUYyMWdFPQ" target="_blank" class="btn btn-danger">Detail Pekerjaan</a> <span id="btn_save_8731"><button type="button" class="btn btn-sm btn-outline-primary cursor" onclick="save_job(`saved`,8731)" data-bs-toggle="tooltip" data-bs-placement="right" title="Save"><span class="material-icons">bookmark_border</span></button></span> </div>
                                            </div>
                                            <div class="row card-list-vacancy card-vac">
                                                <div class="col-md-2"><iframe class="chartjs-hidden-iframe" style="display: block; overflow: hidden; border: 0px; margin: 0px; inset: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;" tabindex="-1"></iframe> <img src="https://recruit.infomedia.co.id/assets/backend/images/company_logo/1a6b173689253eb15d3ca33323ecff1f.png" alt="" style="width:inherit;height:inherit;position: inherit;top: 50%;left: 50%;transform: translate(-50%, -50%);display:none;"> <canvas id="chartProgress_5764" width="135" height="355" style="display: block; height: 237px; width: 90px;"></canvas> </div>
                                                <div class="col-md-7 center-list-job">
                                                    <h4 style="margin-bottom: 0px;font-weight: bold;">CSR GraPARI Magelang</h4>
                                                    <p style="display:none;">null</p>
                                                    <hr>
                                                    <p>Customer Service Representative</p>
                                                </div>
                                                <div class="col-md-3" style="padding:5px"> <span>Bidang Pekerjaan</span><br> <b>Inbound Call/CS/Frontliner</b><br><br> <span>Jenjang</span><br> <b>Diploma III</b> <br><br> <a href="https://recruit.infomedia.co.id/main#job_vacancy/job_detail/MTkyODExM2M3ZjFmZjQ5MTIzZjg5ZGYwNGM4NWMzZmFiNzczMDVjYWExNWRiMWRhNmQ5ZTdiNDdiNzMyY2Y3MjQ4ODM2NjUwNzcxOWJhM2YyNzhjNGY0OGEyMzUzNmNiMTBlYTY0NDhjZDk4OTE1NzYxY2QxZWU1MDUxMTU1Y2FTNjFXM3dOZWdvODE3aVRIU2c2cTA0dG42R1QyVzVJSFQ2Yi9PdnlndEFnPQ" target="_blank" class="btn btn-danger">Detail Pekerjaan</a> <span id="btn_save_5764"><button type="button" class="btn btn-sm btn-outline-primary cursor" onclick="save_job(`saved`,5764)" data-bs-toggle="tooltip" data-bs-placement="right" title="Save"><span class="material-icons">bookmark_border</span></button></span> </div>
                                            </div>
                                            <div class="row card-list-vacancy card-vac">
                                                <div class="col-md-2"><iframe class="chartjs-hidden-iframe" style="display: block; overflow: hidden; border: 0px; margin: 0px; inset: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;" tabindex="-1"></iframe> <img src="https://recruit.infomedia.co.id/assets/backend/images/company_logo/1a6b173689253eb15d3ca33323ecff1f.png" alt="" style="width:inherit;height:inherit;position: inherit;top: 50%;left: 50%;transform: translate(-50%, -50%);display:none;"> <canvas id="chartProgress_8347" width="135" height="324" style="display: block; height: 216px; width: 90px;"></canvas> </div>
                                                <div class="col-md-7 center-list-job">
                                                    <h4 style="margin-bottom: 0px;font-weight: bold;">AGENT SALES OBC MALANG - 1742</h4>
                                                    <p style="display:none;">null</p>
                                                    <hr>
                                                    <p>kontrak kemitraan s/d 31 desember 2024</p>
                                                </div>
                                                <div class="col-md-3" style="padding:5px"> <span>Bidang Pekerjaan</span><br> <b>Marketing/Sales</b><br><br> <span>Jenjang</span><br> <b>SLTA/SMK</b> <br><br> <a href="https://recruit.infomedia.co.id/main#job_vacancy/job_detail/MzBmZDUzYzc2ZjA2ZTIyYjY3MWMzODZmY2NjMTMzNDJmOWE0NmZlYjQwYzA1MWRlZjI3YmRlMjg1ZmY2OTJhNTdkM2IwMGE5NDAyNWExOTI5YWQ5YjMyM2RmZDU1MWQ5OTkyODdiMDZlZmJlNGM4NTIyMWJjNjFkNmE3MjI3MjlsclpSSzFxQUFXN3ZqaUJEYzQxd0IrczhlRFlLS2dFZlQxTjU5MWRSQTN3PQ" target="_blank" class="btn btn-danger">Detail Pekerjaan</a> <span id="btn_save_8347"><button type="button" class="btn btn-sm btn-outline-primary cursor" onclick="save_job(`saved`,8347)" data-bs-toggle="tooltip" data-bs-placement="right" title="Save"><span class="material-icons">bookmark_border</span></button></span> </div>
                                            </div>
                                            <div class="row card-list-vacancy card-vac">
                                                <div class="col-md-2"><iframe class="chartjs-hidden-iframe" style="display: block; overflow: hidden; border: 0px; margin: 0px; inset: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;" tabindex="-1"></iframe> <img src="https://recruit.infomedia.co.id/assets/backend/images/company_logo/1a6b173689253eb15d3ca33323ecff1f.png" alt="" style="width:inherit;height:inherit;position: inherit;top: 50%;left: 50%;transform: translate(-50%, -50%);display:none;"> <canvas id="chartProgress_8633" width="135" height="355" style="display: block; height: 237px; width: 90px;"></canvas> </div>
                                                <div class="col-md-7 center-list-job">
                                                    <h4 style="margin-bottom: 0px;font-weight: bold;">Agent Contact Center Maskapai Penerbangan - Bandung</h4>
                                                    <p style="display:none;">null</p>
                                                    <hr>
                                                    <p>Agent Contact Center Maskapai Penerbangan</p>
                                                </div>
                                                <div class="col-md-3" style="padding:5px"> <span>Bidang Pekerjaan</span><br> <b>Inbound Call/CS/Frontliner</b><br><br> <span>Jenjang</span><br> <b>Diploma III</b> <br><br> <a href="https://recruit.infomedia.co.id/main#job_vacancy/job_detail/M2FlMTcwM2FjNGE5NmY4MDM5YjJkNjM3YTkyODg0NjM1MmI4MDQwOTA4YWJmNTZhN2M0N2M5MTMwODY0NTQwNTQwYWQ2NjMzNmM5NTY0MTQ1M2MzNTdmNzY3NTU2YmQzMGJlNTdjNWM5YmY5NThiOTljOTZlMzQ1MDRiYjM0NWViWVg1SlIwODJYcFVTRy9nQVB5aDNKQ3BUU2pCVWVRSDJ2L2F4d2RrbmJFPQ" target="_blank" class="btn btn-danger">Detail Pekerjaan</a> <span id="btn_save_8633"><button type="button" class="btn btn-sm btn-outline-primary cursor" onclick="save_job(`saved`,8633)" data-bs-toggle="tooltip" data-bs-placement="right" title="Save"><span class="material-icons">bookmark_border</span></button></span> </div>
                                            </div>
                                            <div class="row card-list-vacancy card-vac">
                                                <div class="col-md-2"><iframe class="chartjs-hidden-iframe" style="display: block; overflow: hidden; border: 0px; margin: 0px; inset: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;" tabindex="-1"></iframe> <img src="https://recruit.infomedia.co.id/assets/backend/images/company_logo/1a6b173689253eb15d3ca33323ecff1f.png" alt="" style="width:inherit;height:inherit;position: inherit;top: 50%;left: 50%;transform: translate(-50%, -50%);display:none;"> <canvas id="chartProgress_5765" width="135" height="355" style="display: block; height: 237px; width: 90px;"></canvas> </div>
                                                <div class="col-md-7 center-list-job">
                                                    <h4 style="margin-bottom: 0px;font-weight: bold;">CSR GraPARI Bantul</h4>
                                                    <p style="display:none;">null</p>
                                                    <hr>
                                                    <p>Customer Service Representative</p>
                                                </div>
                                                <div class="col-md-3" style="padding:5px"> <span>Bidang Pekerjaan</span><br> <b>Inbound Call/CS/Frontliner</b><br><br> <span>Jenjang</span><br> <b>Diploma III</b> <br><br> <a href="https://recruit.infomedia.co.id/main#job_vacancy/job_detail/Y2M0MmJmZDcyMzhiODdmMTdiNTc3ZDQyMjdkMWJmZGNlNzdiYmFiMjA3OTBiYzA0ZGY3NDViZWU5OTY2OTEyZWRhZTNmOWE5Mjc1MzQ5ZGFiNmQ1MDdiOTlmZTI2MGU2ZjFmN2RkYzMwZjE3MTQ4OGQ3YTJhNmE5ZDFkZjY1NzRNWHFiVUE5T3NRRHIrWC84WkswQmYwVnAwNGMyUnJPSm1IczRMTWphRzQwPQ" target="_blank" class="btn btn-danger">Detail Pekerjaan</a> <span id="btn_save_5765"><button type="button" class="btn btn-sm btn-outline-primary cursor" onclick="save_job(`saved`,5765)" data-bs-toggle="tooltip" data-bs-placement="right" title="Save"><span class="material-icons">bookmark_border</span></button></span> </div>
                                            </div>
                                            <div class="row card-list-vacancy card-vac">
                                                <div class="col-md-2"><iframe class="chartjs-hidden-iframe" style="display: block; overflow: hidden; border: 0px; margin: 0px; inset: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;" tabindex="-1"></iframe> <img src="https://recruit.infomedia.co.id/assets/backend/images/company_logo/1a6b173689253eb15d3ca33323ecff1f.png" alt="" style="width:inherit;height:inherit;position: inherit;top: 50%;left: 50%;transform: translate(-50%, -50%);display:none;"> <canvas id="chartProgress_8593" width="135" height="355" style="display: block; height: 237px; width: 90px;"></canvas> </div>
                                                <div class="col-md-7 center-list-job">
                                                    <h4 style="margin-bottom: 0px;font-weight: bold;">Senior Officer Product Architect</h4>
                                                    <p style="display:none;">null</p>
                                                    <hr>
                                                    <p>Product Architect</p>
                                                </div>
                                                <div class="col-md-3" style="padding:5px"> <span>Bidang Pekerjaan</span><br> <b>Information Technology</b><br><br> <span>Jenjang</span><br> <b>S1-Perguruan Tinggi</b> <br><br> <a href="https://recruit.infomedia.co.id/main#job_vacancy/job_detail/ODA0MWE4YWI0M2E0ZDZjNThkYTkwOTlhZGE2NWZjMGVkNmZjMWQ5N2IxMjNjMWMxMmQ4NTI0NjNmNjAzYTY3YzVlNDkxMTFhNjY5NGZmYjFhODEzODYxODBiNDgyN2I3Yjg2Yjg5ZWY5NjE3OTE1ZjU4ZjE5ZGJiMWRlYzNlNDQwVUFibjNkcm5ILy9PL2U5c29yZXhOYUEyZldXU2lTdVdjSHpYbnllRXFjPQ" target="_blank" class="btn btn-danger">Detail Pekerjaan</a> <span id="btn_save_8593"><button type="button" class="btn btn-sm btn-outline-primary cursor" onclick="save_job(`saved`,8593)" data-bs-toggle="tooltip" data-bs-placement="right" title="Save"><span class="material-icons">bookmark_border</span></button></span> </div>
                                            </div>
                                            <div class="row card-list-vacancy card-vac">
                                                <div class="col-md-2"><iframe class="chartjs-hidden-iframe" style="display: block; overflow: hidden; border: 0px; margin: 0px; inset: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;" tabindex="-1"></iframe> <img src="https://recruit.infomedia.co.id/assets/backend/images/company_logo/1a6b173689253eb15d3ca33323ecff1f.png" alt="" style="width:inherit;height:inherit;position: inherit;top: 50%;left: 50%;transform: translate(-50%, -50%);display:none;"> <canvas id="chartProgress_8595" width="135" height="355" style="display: block; height: 237px; width: 90px;"></canvas> </div>
                                                <div class="col-md-7 center-list-job">
                                                    <h4 style="margin-bottom: 0px;font-weight: bold;">Junior Officer Product Owner</h4>
                                                    <p style="display:none;">null</p>
                                                    <hr>
                                                    <p>Product Owner</p>
                                                </div>
                                                <div class="col-md-3" style="padding:5px"> <span>Bidang Pekerjaan</span><br> <b>Information Technology</b><br><br> <span>Jenjang</span><br> <b>S1-Perguruan Tinggi</b> <br><br> <a href="https://recruit.infomedia.co.id/main#job_vacancy/job_detail/ODI1YzIxZTU1MzY5Nzk1NjZhNmMxNmNmOTU0ZTJmYmFmZDIyNTI1MTQ0NjQ1YjZkMWQ5YTFmOWViMDE1Y2FlMWUxYzA4YWZjZjZmNGFkYjIzOTc4ZTUwZmYzZjAzYTc5NmNlMTM0NWYwMTFhMmQ0NjU2MDkzNWY4ODAwYzFhOWJnTEM4Z0xnZ1kxYnJkRFowWW5naFVVd3ppcW4yVTlETjRYRGx5TnpaV0M0PQ" target="_blank" class="btn btn-danger">Detail Pekerjaan</a> <span id="btn_save_8595"><button type="button" class="btn btn-sm btn-outline-primary cursor" onclick="save_job(`saved`,8595)" data-bs-toggle="tooltip" data-bs-placement="right" title="Save"><span class="material-icons">bookmark_border</span></button></span> </div>
                                            </div>
                                            <div class="row card-list-vacancy card-vac">
                                                <div class="col-md-2"><iframe class="chartjs-hidden-iframe" style="display: block; overflow: hidden; border: 0px; margin: 0px; inset: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;" tabindex="-1"></iframe> <img src="https://recruit.infomedia.co.id/assets/backend/images/company_logo/1a6b173689253eb15d3ca33323ecff1f.png" alt="" style="width:inherit;height:inherit;position: inherit;top: 50%;left: 50%;transform: translate(-50%, -50%);display:none;"> <canvas id="chartProgress_8375" width="135" height="324" style="display: block; height: 216px; width: 90px;"></canvas> </div>
                                                <div class="col-md-7 center-list-job">
                                                    <h4 style="margin-bottom: 0px;font-weight: bold;">Agent Telkom Carring Visiting - Bangka (Collector)</h4>
                                                    <p style="display:none;">null</p>
                                                    <hr>
                                                    <p>agent</p>
                                                </div>
                                                <div class="col-md-3" style="padding:5px"> <span>Bidang Pekerjaan</span><br> <b>OBC Agent Verifikator</b><br><br> <span>Jenjang</span><br> <b>SLTA/SMK</b> <br><br> <a href="https://recruit.infomedia.co.id/main#job_vacancy/job_detail/NWQyNjJkOGIzNDllMTI4ODcwZmEwYTY1N2MxZjk5ZDcwMzA2NzU2OWJlMGY0NDBkODk2MTgwNWY2OTNjOGNkMGJiYzUyOTUzN2NjYTAzMjM1M2YwNGRmYzUyNmM3NjYxNzI4ZjJmMTAwMmIyYWQyYWMxOTIzZmU3ZGRkMzY3OGJxMHlRU3JHN0g1cFVGeDAydWF1MVZLdk1HRXlsTXpBc3dySHdyTUYrM2VnPQ" target="_blank" class="btn btn-danger">Detail Pekerjaan</a> <span id="btn_save_8375"><button type="button" class="btn btn-sm btn-outline-primary cursor" onclick="save_job(`saved`,8375)" data-bs-toggle="tooltip" data-bs-placement="right" title="Save"><span class="material-icons">bookmark_border</span></button></span> </div>
                                            </div>
                                            <div class="row card-list-vacancy card-vac">
                                                <div class="col-md-2"><iframe class="chartjs-hidden-iframe" style="display: block; overflow: hidden; border: 0px; margin: 0px; inset: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;" tabindex="-1"></iframe> <img src="https://recruit.infomedia.co.id/assets/backend/images/company_logo/1a6b173689253eb15d3ca33323ecff1f.png" alt="" style="width:inherit;height:inherit;position: inherit;top: 50%;left: 50%;transform: translate(-50%, -50%);display:none;"> <canvas id="chartProgress_5680" width="135" height="355" style="display: block; height: 237px; width: 90px;"></canvas> </div>
                                                <div class="col-md-7 center-list-job">
                                                    <h4 style="margin-bottom: 0px;font-weight: bold;">CSR GraPARI Kupang - NTT</h4>
                                                    <p style="display:none;">null</p>
                                                    <hr>
                                                    <p>Customer Service Representative</p>
                                                </div>
                                                <div class="col-md-3" style="padding:5px"> <span>Bidang Pekerjaan</span><br> <b>Inbound Call/CS/Frontliner</b><br><br> <span>Jenjang</span><br> <b>Diploma III</b> <br><br> <a href="https://recruit.infomedia.co.id/main#job_vacancy/job_detail/NjdjMDc5OTc1NmYxZTg4NzZkZjhkMDIzYjY5NGE2ODJkMzg5NWJmNTMzZWIxZTVmMmMwZDM4ZmRmMGMzMDI0NDcyOTcxZGM2NzMxOTExZDI4ZGViMDI3ZmM1MGRkOTQ3NGUwMGM0ZmZmMmY5YzFkNmRlNzVhYzRmYzM3YmExYTRyRmVLMnBhMk5qYkdUbHdlZWNaRjMrSFlkeDNZMEdqN0ZnZmVBYWREZU5BPQ" target="_blank" class="btn btn-danger">Detail Pekerjaan</a> <span id="btn_save_5680"><button type="button" class="btn btn-sm btn-outline-primary cursor" onclick="save_job(`saved`,5680)" data-bs-toggle="tooltip" data-bs-placement="right" title="Save"><span class="material-icons">bookmark_border</span></button></span> </div>
                                            </div>
                                            <div class="row card-list-vacancy card-vac">
                                                <div class="col-md-2"><iframe class="chartjs-hidden-iframe" style="display: block; overflow: hidden; border: 0px; margin: 0px; inset: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;" tabindex="-1"></iframe> <img src="https://recruit.infomedia.co.id/assets/backend/images/company_logo/1a6b173689253eb15d3ca33323ecff1f.png" alt="" style="width:inherit;height:inherit;position: inherit;top: 50%;left: 50%;transform: translate(-50%, -50%);display:none;"> <canvas id="chartProgress_8372" width="135" height="324" style="display: block; height: 216px; width: 90px;"></canvas> </div>
                                                <div class="col-md-7 center-list-job">
                                                    <h4 style="margin-bottom: 0px;font-weight: bold;">Agent Telkom Carring Visiting - Tabanan (Collector)</h4>
                                                    <p style="display:none;">null</p>
                                                    <hr>
                                                    <p>Agent</p>
                                                </div>
                                                <div class="col-md-3" style="padding:5px"> <span>Bidang Pekerjaan</span><br> <b>OBC Agent Verifikator</b><br><br> <span>Jenjang</span><br> <b>SLTA/SMK</b> <br><br> <a href="https://recruit.infomedia.co.id/main#job_vacancy/job_detail/MzQzNjk4M2NhYmMzNmFjMmQ5ODE1MmQ2NjFlZTUxMmFkOTQyYWRmMGZmZjc5ZjdhZTNkOTZlMzM4Y2RlYzg1YWVlZGU1YmY2YTNjODJkZmY4NjcyOWExNTQ3Zjc3Yjc0ZjE2MTNkMDBlZTJkY2I3MDc4NzRiYjQxNjI1ZDZmMDZQRWtDUGRvOWgvVndZSlNObFhBbTg1OUFuQmVSOGYzR3p1QjFRUnV4bmFzPQ" target="_blank" class="btn btn-danger">Detail Pekerjaan</a> <span id="btn_save_8372"><button type="button" class="btn btn-sm btn-outline-primary cursor" onclick="save_job(`saved`,8372)" data-bs-toggle="tooltip" data-bs-placement="right" title="Save"><span class="material-icons">bookmark_border</span></button></span> </div>
                                            </div>
                                            <div class="row card-list-vacancy card-vac">
                                                <div class="col-md-2"><iframe class="chartjs-hidden-iframe" style="display: block; overflow: hidden; border: 0px; margin: 0px; inset: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;" tabindex="-1"></iframe> <img src="https://recruit.infomedia.co.id/assets/backend/images/company_logo/1a6b173689253eb15d3ca33323ecff1f.png" alt="" style="width:inherit;height:inherit;position: inherit;top: 50%;left: 50%;transform: translate(-50%, -50%);display:none;"> <canvas id="chartProgress_6844" width="135" height="355" style="display: block; height: 237px; width: 90px;"></canvas> </div>
                                                <div class="col-md-7 center-list-job">
                                                    <h4 style="margin-bottom: 0px;font-weight: bold;">CSR GraPARI Ngawi</h4>
                                                    <p style="display:none;">null</p>
                                                    <hr>
                                                    <p>Customer Service Representative</p>
                                                </div>
                                                <div class="col-md-3" style="padding:5px"> <span>Bidang Pekerjaan</span><br> <b>Inbound Call/CS/Frontliner</b><br><br> <span>Jenjang</span><br> <b>Diploma III</b> <br><br> <a href="https://recruit.infomedia.co.id/main#job_vacancy/job_detail/OWI1OGExNmQ1NTYwM2E1MzM1ZDczYjc1YTU0OWIxYjk5ZTJiNDdkYTgzODZjYmNjMWM4YTM4ZGUwYzk5MTJjNGQ4YzRkNTcyYTQ1ZTU2OGI3ZTM0OGRmMDEwMGI4N2UzMjY2YmVlMTRiZWI4NmM1NzI4NTA2MzM0NTE2YTk4NDQvcTFreTB4NThJNGQyWkZhRDRma2ZMa0tWVDBSNU9obndvVS9JaC8wZDU4PQ" target="_blank" class="btn btn-danger">Detail Pekerjaan</a> <span id="btn_save_6844"><button type="button" class="btn btn-sm btn-outline-primary cursor" onclick="save_job(`saved`,6844)" data-bs-toggle="tooltip" data-bs-placement="right" title="Save"><span class="material-icons">bookmark_border</span></button></span> </div>
                                            </div>
                                        </div>
                                        <div id="no_list_vacancy" class="col-xs-12 mx-auto text-center no-job-available" style="border: 1px solid red;background: antiquewhite; display: none">
                                            <i class="material-icons" style="background: white;font-size: 50px;padding: 30px;border-radius: 50%; color: red;">extension</i>
                                            <h5 style="margin-top: 20px;">No job available</h5>
                                        </div>
                                        <div class="pager-wrapper">
                                        </div>
                                    </div>
                                    <div style="margin: 10px auto;" id="load_data_message">
                                        <div>Loading....</div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="saved" class="tabcontent" style="display: none;">
        <div class="container-fluid cover-job-list">
            <h2 class="mt-2 mb-2"><b>Lowongan yang kamu simpan</b></h2>
            <div class="result-list-wrapper" style="margin-top: 25px;">
                <div class="row center_page" id="list_saved_vacancy">
                    <div class="centered cursor"> Kamu belum menyimpan lowongan apapun <br> <button type="button" class="mt-4 btn btn-primary btn-sm" onclick="explore_job()">Cari Lowongan Sekarang</button> </div>
                </div>
            </div>
            <div class="pager-wrapper">
            </div>
        </div>
    </div>

    <div class="backtop" style="display: none;">
        <span class="material-icons">arrow_upward</span>
    </div>
    <script src="https://recruit.infomedia.co.id/assets/backend/vendors/chart.js/dist/Chart.min.js"></script>
    <script type="text/javascript">
        var pagno;
        var base_url = 'https://recruit.infomedia.co.id/';

        var limit = 10;
        var start = 0;
        var action = 'inactive';
        var tabNameActive = 'explore';

        //back to top
        var $backToTop = $(".backtop");
        $backToTop.hide();
        $(window).on('scroll', function() {
            if ($(this).scrollTop() > 100) {
                $backToTop.fadeIn();
            } else {
                $backToTop.fadeOut();
            }
        });
        $backToTop.on('click', function(e) {
            $("html, body").animate({
                scrollTop: 0
            }, 500);
        });

        $(document).ready(function() {
            $('.select2').select2();

            if (action == 'inactive') {
                action = 'active';
                load_job_list(limit, start);
            }

            $(window).scroll(function() {
                if ($("#m_company_filter_job").val().length == 0 && $("#m_stream").val().length == 0 && $("#m_jenjang").val().length == 0 && $("#m_name_vacancy").val() == "" && $("#m_lokasi").val().length == 0 &&
                    $("#company_filter_job").val().length == 0 && $("#stream").val().length == 0 && $("#jenjang").val().length == 0 && $("#name_vacancy").val() == "" && $("#lokasi").val().length == 0) {
                    if (($(window).scrollTop() + $(window).height() > $("#list_vacancy").height()) && (action == 'inactive') && $('#total_job_available').val() != 0 && (tabNameActive == 'explore')) {
                        action = 'active';
                        start = start + limit;
                        setTimeout(function() {
                            load_job_list(limit, start);
                        }, 1000);
                    } else if (tabNameActive == 'saved' && ($(window).scrollTop() + $(window).height() > $("#list_saved_vacancy").height())) {
                        // console.log('bb');
                        // console.log(action);
                        // setTimeout(function(){
                        //   load_saved_job_list();
                        // }, 1000);
                    }
                } else {
                    $('#load_data_message').html("<div>Tidak ada data lainnya</div>");
                    action = 'active';
                }
            });

        });

        $(document).ready(function() {


            $('.loading').bind('ajaxStart', function() {
                $(this).css("display", "block");
            }).bind('ajaxStop', function() {
                $(this).css("display", "none");
            });


            $.ajax({
                url: base_url + 'job/getJobevent/',
                type: 'post',
                data: {
                    company: $("#company_filter_job").val(),
                    stream: $("#stream").val(),
                    jenjang: $("#jenjang").val(),
                },
                dataType: 'json',
                beforeSend: function() {
                    $('#list_job_event').html('<div class="col-xs-12 mx-auto text-center"><div class="d-flex justify-content-center"><i class="fa fa-spin fa-3x fa-circle-o-notch"></i></div></div>');

                },
                success: function(response) {
                    $('#list_job_event').html('');

                    if (response.result.length < 1) {
                        $('#list_job_event').html('');
                    } else {
                        var responses = response.result;
                        var total = "& " + Object.keys(responses).length + " Bursa Kerja";
                        // console.log(Object.keys(responses).length);
                        $('#total_job_event').text(total);
                        $.each(response.result, function(i, val) {

                            // if ('job_list' == 'job') {
                            href = 'https://recruit.infomedia.co.id/job/event_detail/' + val.id;
                            // }
                            // else{
                            //   href = val.vacancy_base_url+'main#job_vacancy/detail/'+val.vacancy_id;
                            // }

                            $("#list_job_event").append('<div class="row card-list-vacancy" style="background-color:#F0F0F0;">\
                        <div class="col-md-2" style="padding:10px;background:#F0F0F0">\
                          <img src="' + val.logo_event + '" alt="" style="width:inherit;height:inherit;position: inherit;top: 50%;left: 50%;transform: translate(-50%, -50%);">\
                        </div>\
                        <div class="col-md-7 center-list-job"  >\
                          <h4 style="margin-bottom: 0px;font-weight: bold;"> Bursa Kerja: ' + val.event_name + '</h4>\
                          <span>Tanggal Pelaksanaan</span>\
                          <b>' + val.date_start + '</b> sd <b>' + val.date_end + '</b>\
                          <hr>\
                          <p>' + val.event_desc + ' </p>\
                        </div>\
                        <div class="col-md-3" style="padding:5px">\
                          <span>Lokasi Bursa</span><br>\
                          <b>' + val.location + '</b><br><br>\
                          <br><br>\
                          <a href="' + href + '" class="btn btn-warning">Detail Bursa Kerja</a>\
                        </div>\
                      </div>');
                        });
                    }
                }
            });
        });

        function load_total_job_all() {
            $.ajax({
                    url: base_url + 'job/load_total_job_all',
                    type: 'POST',
                    dataType: 'json',
                    data: {
                        company: $("#company_type").val(),
                        jenis_program: $("#experience_type").val(),
                        tipe_pekerjaan: $("#employee_type").val(),
                        urutkan: $("#date_added").val()
                    },
                })
                .done(function(data) {
                    $("#total_job_vacancy").text(data);
                });
        }

        function load_job_list(limit, start) {
            $.ajax({
                url: base_url + 'job_list/load_job_list_tmp',
                method: "POST",
                data: {
                    limit: limit,
                    start: start,
                    company: $("#company_filter_job").val(),
                    stream: $("#stream").val(),
                    jenjang: $("#jenjang").val(),
                    vacancy_name: $("#name_vacancy").val(),
                    lokasi: $("#lokasi").val()
                },
                cache: false,
                dataType: 'json',
                beforeSend: function() {
                    NProgress.start();
                },
                success: function(response) {
                    NProgress.done();
                    var company = $("#company_filter_job").val();
                    stream = $("#stream").val();
                    jenjang = $("#jenjang").val();
                    vacancy_name = $("#name_vacancy").val();
                    lokasi = $("#lokasi").val();

                    if (response.data == null) {

                        if (company.length != 0 || stream.length != 0 || jenjang.length != 0 || vacancy_name != "" || lokasi.length != 0) {
                            $('#list_vacancy').html('');
                            $('#list_vacancy_urgent').html('');

                            // $('#list_vacancy').html('<div class="col-xs-12 mx-auto text-center no-job-available" style="border: 1px solid red;background: antiquewhite;"><i class="material-icons" style="background: white;font-size: 50px;padding: 30px;border-radius: 50%;/*! box-shadow: 0 6px 15px rgba(36, 37, 38, 0.25); */color: red;">extension</i><h5 style="margin-top: 20px;">No job available</h5></div>');
                            $('#no_list_vacancy').show();

                            $('#load_data_message').hide();
                            $('#total_job_available').val("0");
                        } else {
                            $('#load_data_message').html("<div>Tidak ada data lainnya</div>");
                            action = 'active';
                        }

                    } else {
                        $('#no_list_vacancy').hide();

                        $.each(response.data, function(i, val) {
                            if ('job_list' == 'job') {
                                href = val.vacancy_base_url + 'job/detail/' + val.vacancy_id;
                            } else {
                                href = val.vacancy_base_url + 'main#job_vacancy/job_detail/' + val.vacancy_id;
                            }

                            if (val.is_urgent == 'yes') {
                                var canvasStyle = 'none';
                                if (val.is_check_ratio == 'yes' && val.percentage !== null) {
                                    canvasStyle = 'block';
                                }
                                $("#list_vacancy_urgent").append('<div class="row card-list-vacancy card-vac" >\
                     <div class="ribbon">Vacancy Urgent</div>\
                     <div class="col-md-2"  >\
                       <img src="' + val.vacancy_base_url + 'assets/backend/images/company_logo/' + val.vacancy_logo_company + '" alt="" style="width:inherit;height:inherit;position: inherit;top: 50%;left: 50%;transform: translate(-50%, -50%);display:none;">\
                      <div class="relative" style="position: relative;display:' + canvasStyle + ';"><canvas id="chartProgress_' + val.id + '" width="300px" height="200" style="display:' + canvasStyle + '"></canvas><div class="absolute-center text-center" style="position:absolute;top: 63%;left: 50%;transform: translate(-50%, -50%);"><label style="line-height: 1;font-size: x-small;">Kuota Kandidat</label></div></div>\
                     </div>\
                     <div class="col-md-7 center-list-job"  >\
                       <h4 style="margin-bottom: 0px;font-weight: bold;">' + val.vacancy_name + '</h4>\
                       <p style="display:none;">' + val.vacancy_company_name + '</p>\
                       <hr>\
                       <p>' + val.short_description + '</p>\
                     </div>\
                     <div class="col-md-3" style="padding:5px">\
                       <span>Bidang Pekerjaan</span><br>\
                       <b>' + val.stream_name + '</b><br><br>\
                       <span>Jenjang</span><br>\
                       <b>' + val.education_name + '</b>\
                       <br><br>\
                       <a href="' + href + '" target="_blank" class="btn btn-danger">Detail Pekerjaan</a>\
                       ' + val.btn_save + '\
                     </div>\
                   </div>');

                            } else {

                                $("#list_vacancy").append('<div class="row card-list-vacancy card-vac" >\
                     <div class="col-md-2"  >\
                       <img src="' + val.vacancy_base_url + 'assets/backend/images/company_logo/' + val.vacancy_logo_company + '" alt="" style="width:inherit;height:inherit;position: inherit;top: 50%;left: 50%;transform: translate(-50%, -50%);display:none;">\
                       <canvas id="chartProgress_' + val.id + '" width="300px" height="200"  ></canvas>\
                     </div>\
                     <div class="col-md-7 center-list-job"  >\
                       <h4 style="margin-bottom: 0px;font-weight: bold;">' + val.vacancy_name + '</h4>\
                       <p style="display:none;">' + val.vacancy_company_name + '</p>\
                       <hr>\
                       <p>' + val.short_description + '</p>\
                     </div>\
                     <div class="col-md-3" style="padding:5px">\
                       <span>Bidang Pekerjaan</span><br>\
                       <b>' + val.stream_name + '</b><br><br>\
                       <span>Jenjang</span><br>\
                       <b>' + val.education_name + '</b>\
                       <br><br>\
                       <a href="' + href + '" target="_blank" class="btn btn-danger">Detail Pekerjaan</a>\
                       ' + val.btn_save + '\
                     </div>\
                   </div>');

                            }
                            var percentage_ratio = 0;
                            if (val.percentage > 0) {
                                percentage_ratio = val.percentage;
                            }
                            var percentage_color = '';
                            if (val.percentage < 80) {
                                percentage_color = '#095EF1';
                            } else {
                                percentage_color = '#F10909';
                            }
                            var chartProgress = document.getElementById('chartProgress_' + val.id);
                            new Chart(chartProgress, {
                                type: 'doughnut',
                                data: {
                                    labels: ["Rasio", 'Available'],
                                    datasets: [{
                                        label: "Population (millions)",
                                        backgroundColor: [percentage_color],
                                        data: [percentage_ratio, 100 - percentage_ratio]
                                    }]
                                },
                                plugins: [{
                                    beforeDraw: function(chart) {
                                        var width = chart.chart.width,
                                            height = chart.chart.height,
                                            ctx = chart.chart.ctx;

                                        ctx.restore();
                                        var fontSize = (height / 100).toFixed(2);
                                        ctx.font = fontSize + "em sans-serif";
                                        ctx.fillStyle = percentage_color;
                                        ctx.textBaseline = "middle";

                                        var text = percentage_ratio + "%",
                                            textX = Math.round((width - ctx.measureText(text).width) / 2),
                                            textY = height / 2;

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

                            $('#total_job_available').val(response.total_data);
                        });

                        $('#load_data_message').html("<div>Loading....</div>");
                        action = "inactive";

                    }

                    $('#total_job_vacancy').text(response.total_data);
                }
            });
        }



        function m_load_job_list(limit, start) {
            $.ajax({
                url: base_url + 'job_list/load_job_list_tmp',
                method: "POST",
                data: {
                    limit: limit,
                    start: start,
                    company: $("#m_company_filter_job").val(),
                    stream: $("#m_stream").val(),
                    jenjang: $("#m_jenjang").val(),
                    vacancy_name: $("#m_name_vacancy").val(),
                    lokasi: $("#m_lokasi").val()
                },
                cache: false,
                dataType: 'json',
                beforeSend: function() {
                    NProgress.start();
                },
                success: function(response) {
                    NProgress.done();
                    var company = $("#m_company_filter_job").val();
                    stream = $("#m_stream").val();
                    jenjang = $("#m_jenjang").val();
                    vacancy_name = $("#m_name_vacancy").val();
                    lokasi = $("#m_lokasi").val();

                    if (response.data == null) {

                        if (company.length != 0 || stream.length != 0 || jenjang.length != 0 || vacancy_name != "" || lokasi.length != 0) {
                            $('#list_vacancy').html('');
                            $('#list_vacancy_urgent').html('');

                            // $('#list_vacancy').html('<div class="col-xs-12 mx-auto text-center no-job-available" style="border: 1px solid red;background: antiquewhite;"><i class="material-icons" style="background: white;font-size: 50px;padding: 30px;border-radius: 50%;/*! box-shadow: 0 6px 15px rgba(36, 37, 38, 0.25); */color: red;">extension</i><h5 style="margin-top: 20px;">No job available</h5></div>');
                            $('#no_list_vacancy').show();

                            $('#load_data_message').hide();
                            $('#total_job_available').val("0");
                        } else {
                            $('#load_data_message').html("<div>Tidak ada data lainnya</div>");
                            action = 'active';
                        }

                    } else {
                        $('#no_list_vacancy').hide();
                        $.each(response.data, function(i, val) {
                            if ('job_list' == 'job') {
                                href = val.vacancy_base_url + 'job/detail/' + val.vacancy_id;
                            } else {
                                href = val.vacancy_base_url + 'main#job_vacancy/job_detail/' + val.vacancy_id;
                            }

                            if (val.is_urgent == 'yes') {

                                $("#list_vacancy_urgent").append('<div class="row card-list-vacancy card-vac" >\
                     <div class="ribbon">Vacancy Urgent</div>\
                     <div class="col-md-2" style="padding:10px;background:#f9f9f9">\
                       <img src="' + val.vacancy_base_url + 'assets/backend/images/company_logo/' + val.vacancy_logo_company + '" alt="" style="width:inherit;height:inherit;position: inherit;top: 50%;left: 50%;transform: translate(-50%, -50%);">\
                     </div>\
                     <div class="col-md-7 center-list-job"  >\
                       <h4 style="margin-bottom: 0px;font-weight: bold;">' + val.vacancy_name + '</h4>\
                       <hr>\
                       <p>' + val.short_description + '</p>\
                     </div>\
                     <div class="col-md-3" style="padding:5px">\
                       <span>Bidang Pekerjaan</span><br>\
                       <b>' + val.stream_name + '</b><br><br>\
                       <span>Jenjang</span><br>\
                       <b>' + val.education_name + '</b>\
                       <br><br>\
                       <a href="' + href + '" target="_blank" class="btn btn-danger">Detail Pekerjaan</a>\
                       ' + val.btn_save + '\
                     </div>\
                   </div>');

                            } else {

                                $("#list_vacancy").append('<div class="row card-list-vacancy card-vac" >\
                     <div class="col-md-2" style="padding:10px;background:#f9f9f9">\
                       <img src="' + val.vacancy_base_url + 'assets/backend/images/company_logo/' + val.vacancy_logo_company + '" alt="" style="width:inherit;height:inherit;position: inherit;top: 50%;left: 50%;transform: translate(-50%, -50%);">\
                     </div>\
                     <div class="col-md-7 center-list-job"  >\
                       <h4 style="margin-bottom: 0px;font-weight: bold;">' + val.vacancy_name + '</h4>\
                       <hr>\
                       <p>' + val.short_description + '</p>\
                     </div>\
                     <div class="col-md-3" style="padding:5px">\
                       <span>Bidang Pekerjaan</span><br>\
                       <b>' + val.stream_name + '</b><br><br>\
                       <span>Jenjang</span><br>\
                       <b>' + val.education_name + '</b>\
                       <br><br>\
                       <a href="' + href + '" target="_blank" class="btn btn-danger">Detail Pekerjaan</a>\
                       ' + val.btn_save + '\
                     </div>\
                   </div>');

                            }

                            $('#total_job_available').val(response.total_data);
                        });

                        $('#load_data_message').html("<div>Loading....</div>");
                        action = "inactive";

                    }

                    $('#total_job_vacancy').text(response.total_data);
                }
            });
        }

        function loadPagination(pagno) {
            load_total_job_all();

            $.ajax({
                url: base_url + 'job_list/load_job_list2',
                type: 'post',
                data: {
                    company: $("#company_filter_job").val(),
                    stream: $("#stream").val(),
                    jenjang: $("#jenjang").val(),
                    vacancy_name: $("#name_vacancy").val(),
                },
                dataType: 'json',
                beforeSend: function() {
                    $('#list_vacancy').html('<div class="col-xs-12 mx-auto text-center"><div class="d-flex justify-content-center"><i class="fa fa-spin fa-3x fa-circle-o-notch"></i></div></div>');

                },
                success: function(response) {
                    $('#list_vacancy').html('');
                    $('#list_vacancy_urgent').html('');
                    $('#pagination').html(response.pagination);

                    if (response.data == null) {
                        $('#list_vacancy').html('<div class="col-xs-12 mx-auto text-center no-job-available" style="border: 1px solid red;background: antiquewhite;"><i class="material-icons" style="background: white;font-size: 50px;padding: 30px;border-radius: 50%;/*! box-shadow: 0 6px 15px rgba(36, 37, 38, 0.25); */color: red;">extension</i><h5 style="margin-top: 20px;">No job available</h5></div>');
                        $('#load_data_message').hide();
                        $('#total_job_available').val("0");
                    } else {

                        $.each(response.data, function(i, val) {

                            if ('job_list' == 'job') {
                                href = val.vacancy_base_url + 'job/detail/' + val.vacancy_id;
                            } else {
                                href = val.vacancy_base_url + 'main#job_vacancy/job_detail/' + val.vacancy_id;
                            }

                            $("#list_vacancy").append('<div class="row card-list-vacancy" >\
                      <div class="col-md-2" style="padding:10px;background:#f9f9f9">\
                        <img src="' + val.vacancy_base_url + 'assets/backend/images/company_logo/' + val.vacancy_logo_company + '" alt="" style="width:inherit;height:inherit;position: inherit;top: 50%;left: 50%;transform: translate(-50%, -50%);">\
                      </div>\
                      <div class="col-md-7 center-list-job"  >\
                        <h4 style="margin-bottom: 0px;font-weight: bold;">' + val.vacancy_name + '</h4>\
                        <hr>\
                        <p>' + val.job_description + '</p>\
                      </div>\
                      <div class="col-md-3" style="padding:5px">\
                        <span>Bidang Pekerjaan</span><br>\
                        <b>' + val.stream_name + '</b><br><br>\
                        <span>Jenjang</span><br>\
                        <b>' + val.education_name + '</b>\
                        <br><br>\
                        <a href="' + href + '" target="_blank" class="btn btn-danger">Detail Pekerjaan</a>\
                        <button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="tooltip" data-bs-placement="right" title="Unsave"><span class="material-icons">bookmark_border</span></button>\
                      </div>\
                    </div>');

                            $("#list_saved_vacancy").append('<div class="col-md-6" style="background: white;border-radius: 5px;padding: 20px;margin-top: -15px;">\
                        <div class="row" style="border-radius: 5px;padding: 5px;border: solid 1px #d9dee1;box-shadow: 1px 3px 2px 0px rgb(0 0 0 / 11%);height:100%;">\
                          <div class="col-md-2" style="padding:10px;background:#f9f9f9">\
                            <img src="' + val.vacancy_base_url + 'assets/backend/images/company_logo/' + val.vacancy_logo_company + '" alt="" style="width:inherit;height:inherit;position: inherit;top: 50%;left: 50%;transform: translate(-50%, -50%);">\
                          </div>\
                          <div class="col-md-7 center-list-job"  >\
                            <h4 style="margin-bottom: 0px;font-weight: bold;">' + val.vacancy_name + '</h4>\
                            <hr>\
                            <p>' + val.job_description + '</p>\
                            <a href="' + href + '" target="_blank" class="btn btn-danger">Detail Pekerjaan</a>\
                            <button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="tooltip" data-bs-placement="right" title="Save"><span class="material-icons">bookmark</span></button>\
                          </div>\
                          <div class="col-md-3" style="padding:5px">\
                            <span>Bidang Pekerjaan</span><br>\
                            <b>' + val.stream_name + '</b><br><br>\
                            <span>Jenjang</span><br>\
                            <b>' + val.education_name + '</b>\
                          </div>\
                        </div>\
                      </div>');
                        });
                    }
                }
            });
        }

        function openCity(evt, cityName) {
            // Declare all variables
            var i, tabcontent, tablinks;

            //replace variable tab name active
            tabNameActive = cityName;

            // Get all elements with class="tabcontent" and hide them
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }

            if (cityName == 'saved') {
                load_saved_job_list();
            }

            // Get all elements with class="tablinks" and remove the class "active"
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }

            // Show the current tab, and add an "active" class to the button that opened the tab
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }

        function get_job_list() {
            $.ajax({
                url: base_url + 'job_list/get_job_list',
                type: 'post',
                data: {
                    company: $("#company_filter_job").val(),
                    stream: $("#stream").val(),
                    jenjang: $("#jenjang").val(),
                    vacancy_name: $("#name_vacancy").val(),
                },
                dataType: 'json',
                beforeSend: function() {
                    $('#list_vacancy').html('<div class="col-xs-12 mx-auto text-center"><div class="d-flex justify-content-center"><i class="fa fa-spin fa-3x fa-circle-o-notch"></i></div></div>');
                },
                success: function(response) {
                    $('#list_vacancy').html('');

                    if (response.result.length < 1) {
                        $('#list_vacancy').html('<div class="col-xs-12 mx-auto text-center no-job-available" style="border: 1px solid red;background: antiquewhite;"><i class="material-icons" style="background: white;font-size: 50px;padding: 30px;border-radius: 50%;/*! box-shadow: 0 6px 15px rgba(36, 37, 38, 0.25); */color: red;">extension</i><h5 style="margin-top: 20px;">No job available</h5></div>');
                    } else {

                        $.each(response.result, function(i, val) {

                            if ('job_list' == 'job') {
                                href = val.vacancy_base_url + 'job/detail/' + val.vacancy_id;
                            } else {
                                href = val.vacancy_base_url + 'main#job_vacancy/job_detail/' + val.vacancy_id;
                            }

                            $("#list_vacancy").append('<div class="row card-list-vacancy" >\
                      <div class="col-md-2" style="padding:10px;background:#f9f9f9">\
                        <img src="' + val.vacancy_base_url + 'assets/backend/images/company_logo/' + val.vacancy_logo_company + '" alt="" style="width:inherit;height:inherit;position: inherit;top: 50%;left: 50%;transform: translate(-50%, -50%);">\
                      </div>\
                      <div class="col-md-7 center-list-job"  >\
                        <h4 style="margin-bottom: 0px;font-weight: bold;">' + val.vacancy_name + '</h4>\
                        <hr>\
                        <p>' + val.short_description + '</p>\
                      </div>\
                      <div class="col-md-3" style="padding:5px">\
                        <span>Bidang Pekerjaan</span><br>\
                        <b>' + val.stream_name + '</b><br><br>\
                        <span>Jenjang</span><br>\
                        <b>' + val.education_name + '</b>\
                        <br><br>\
                        <a href="' + href + '" target="_blank" class="btn btn-danger">Detail Pekerjaan</a>\
                        <button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="tooltip" data-bs-placement="right" title="Unsave"><span class="material-icons">bookmark_border</span> Simpan</button>\
                      </div>\
                    </div>');

                            $("#list_saved_vacancy").append('<div class="col-md-6" style="background: white;border-radius: 5px;padding: 20px;margin-top: -15px;">\
                        <div class="row" style="border-radius: 5px;padding: 5px;border: solid 1px #d9dee1;box-shadow: 1px 3px 2px 0px rgb(0 0 0 / 11%);height:100%;">\
                          <div class="col-md-2" style="padding:10px;background:#f9f9f9">\
                            <img src="' + val.vacancy_base_url + 'assets/backend/images/company_logo/' + val.vacancy_logo_company + '" alt="" style="width:inherit;height:inherit;position: inherit;top: 50%;left: 50%;transform: translate(-50%, -50%);">\
                          </div>\
                          <div class="col-md-7 center-list-job"  >\
                            <h4 style="margin-bottom: 0px;font-weight: bold;">' + val.vacancy_name + '</h4>\
                            <hr>\
                            <p>' + val.short_description + '</p>\
                            <a href="' + href + '" target="_blank" class="btn btn-danger">Detail Pekerjaan</a>\
                            <button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="tooltip" data-bs-placement="right" title="Save"><span class="material-icons">bookmark</span></button>\
                          </div>\
                          <div class="col-md-3" style="padding:5px">\
                            <span>Bidang Pekerjaan</span><br>\
                            <b>' + val.stream_name + '</b><br><br>\
                            <span>Jenjang</span><br>\
                            <b>' + val.education_name + '</b>\
                          </div>\
                        </div>\
                      </div>');
                        });
                    }
                }
            });
        }

        function load_job_list_filter(limit, start) {
            $.ajax({
                url: base_url + 'job_list/load_job_list_tmp',
                method: "POST",
                data: {
                    limit: limit,
                    start: start,
                    company: $("#company_filter_job").val(),
                    stream: $("#stream").val(),
                    jenjang: $("#jenjang").val(),
                    vacancy_name: $("#name_vacancy").val(),
                    lokasi: $("#lokasi").val()
                },
                cache: false,
                dataType: 'json',
                beforeSend: function() {
                    NProgress.start();
                },
                success: function(response) {
                    NProgress.done();
                    var company = $("#company_filter_job").val();
                    stream = $("#stream").val();
                    jenjang = $("#jenjang").val();
                    vacancy_name = $("#name_vacancy").val();
                    lokasi = $("#lokasi").val();

                    if (response.data == null) {

                        if (company.length != 0 || stream.length != 0 || jenjang.length != 0 || vacancy_name != "" || lokasi.length != 0) {
                            $('#list_vacancy').html('');
                            $('#list_vacancy_urgent').html('');

                            // $('#list_vacancy').html('<div class="col-xs-12 mx-auto text-center no-job-available" style="border: 1px solid red;background: antiquewhite;"><i class="material-icons" style="background: white;font-size: 50px;padding: 30px;border-radius: 50%;/*! box-shadow: 0 6px 15px rgba(36, 37, 38, 0.25); */color: red;">extension</i><h5 style="margin-top: 20px;">No job available</h5></div>');
                            $('#no_list_vacancy').show();

                            $('#load_data_message').hide();
                            $('#total_job_available').val("0");
                        } else {
                            $('#load_data_message').html("<div>Tidak ada data lainnya</div>");
                            action = 'active';
                        }

                    } else {

                        $('#list_vacancy').html('');
                        $('#list_vacancy_urgent').html('');
                        $('#no_list_vacancy').hide();


                        $.each(response.data, function(i, val) {

                            if ('job_list' == 'job') {
                                href = val.vacancy_base_url + 'job/detail/' + val.vacancy_id;
                            } else {
                                href = val.vacancy_base_url + 'main#job_vacancy/job_detail/' + val.vacancy_id;
                            }

                            if (val.is_urgent == 'yes') {
                                var canvasStyle = 'none';
                                if (val.is_check_ratio == 'yes') {
                                    canvasStyle = 'block';
                                }
                                $("#list_vacancy_urgent").append('<div class="row card-list-vacancy card-vac" >\
                     <div class="ribbon">Vacancy Urgent</div>\
                     <div class="col-md-2"  >\
                       <img src="' + val.vacancy_base_url + 'assets/backend/images/company_logo/' + val.vacancy_logo_company + '" alt="" style="width:inherit;height:inherit;position: inherit;top: 50%;left: 50%;transform: translate(-50%, -50%);display:none;">\
                       <div class="relative" style="position: relative;display:' + canvasStyle + ';"><canvas id="chartProgress_' + val.id + '" width="300px" height="200" style="display:' + canvasStyle + '"></canvas><div class="absolute-center text-center" style="position:absolute;top: 63%;left: 50%;transform: translate(-50%, -50%);"><label style="line-height: 1;font-size: x-small;">Kuota Kandidat</label></div></div>\
                     </div>\
                     <div class="col-md-7 center-list-job"  >\
                       <h4 style="margin-bottom: 0px;font-weight: bold;">' + val.vacancy_name + '</h4>\
                       <p style="display:none;">' + val.vacancy_company_name + '</p>\
                       <hr>\
                       <p>' + val.short_description + '</p>\
                     </div>\
                     <div class="col-md-3" style="padding:5px">\
                       <span>Bidang Pekerjaan</span><br>\
                       <b>' + val.stream_name + '</b><br><br>\
                       <span>Jenjang</span><br>\
                       <b>' + val.education_name + '</b>\
                       <br><br>\
                       <a href="' + href + '" target="_blank" class="btn btn-danger">Detail Pekerjaan</a>\
                       ' + val.btn_save + '\
                     </div>\
                   </div>');

                            } else {

                                $("#list_vacancy").append('<div class="row card-list-vacancy card-vac" >\
                     <div class="col-md-2" style="padding:10px;background:#f9f9f9">\
                       <img src="' + val.vacancy_base_url + 'assets/backend/images/company_logo/' + val.vacancy_logo_company + '" alt="" style="width:inherit;height:inherit;position: inherit;top: 50%;left: 50%;transform: translate(-50%, -50%);display:none;">\
                       <canvas id="chartProgress_' + val.id + '" width="300px" height="200"  ></canvas>\
                     </div>\
                     <div class="col-md-7 center-list-job"  >\
                       <h4 style="margin-bottom: 0px;font-weight: bold;">' + val.vacancy_name + '</h4>\
                       <p style="display:none;">' + val.vacancy_company_name + '</p>\
                       <hr>\
                       <p>' + val.short_description + '</p>\
                     </div>\
                     <div class="col-md-3" style="padding:5px">\
                       <span>Bidang Pekerjaan</span><br>\
                       <b>' + val.stream_name + '</b><br><br>\
                       <span>Jenjang</span><br>\
                       <b>' + val.education_name + '</b>\
                       <br><br>\
                       <a href="' + href + '" target="_blank" class="btn btn-danger">Detail Pekerjaan</a>\
                       ' + val.btn_save + '\
                     </div>\
                   </div>');

                            }

                            var percentage_ratio = 0;
                            if (val.percentage > 0) {
                                percentage_ratio = val.percentage;
                            }
                            var percentage_color = '';
                            if (val.percentage < 80) {
                                percentage_color = '#095EF1';
                            } else {
                                percentage_color = '#F10909';
                            }
                            var chartProgress = document.getElementById('chartProgress_' + val.id);
                            new Chart(chartProgress, {
                                type: 'doughnut',
                                data: {
                                    labels: ["Rasio", 'Available'],
                                    datasets: [{
                                        label: "Population (millions)",
                                        backgroundColor: [percentage_color],
                                        data: [percentage_ratio, 100 - percentage_ratio]
                                    }]
                                },
                                plugins: [{
                                    beforeDraw: function(chart) {
                                        var width = chart.chart.width,
                                            height = chart.chart.height,
                                            ctx = chart.chart.ctx;

                                        ctx.restore();
                                        var fontSize = (height / 100).toFixed(2);
                                        ctx.font = fontSize + "em sans-serif";
                                        ctx.fillStyle = percentage_color;
                                        ctx.textBaseline = "middle";

                                        var text = percentage_ratio + "%",
                                            textX = Math.round((width - ctx.measureText(text).width) / 2),
                                            textY = height / 2;

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

                            $('#total_job_available').val(response.total_data);
                        });

                        $('#load_data_message').html("<div>Loading....</div>");
                        action = "inactive";

                    }

                    $('#total_job_vacancy').text(response.total_data);
                }
            });
        }


        function m_load_job_list_filter(limit, start) {
            $.ajax({
                url: base_url + 'job_list/load_job_list_tmp',
                method: "POST",
                data: {
                    limit: limit,
                    start: start,
                    company: $("#m_company_filter_job").val(),
                    stream: $("#m_stream").val(),
                    jenjang: $("#m_jenjang").val(),
                    vacancy_name: $("#m_name_vacancy").val(),
                    lokasi: $("#m_lokasi").val()
                },
                cache: false,
                dataType: 'json',
                beforeSend: function() {
                    NProgress.start();
                },
                success: function(response) {
                    NProgress.done();
                    var company = $("#m_company_filter_job").val();
                    stream = $("#m_stream").val();
                    jenjang = $("#m_jenjang").val();
                    vacancy_name = $("#m_name_vacancy").val();
                    lokasi = $("#m_lokasi").val();

                    if (response.data == null && start == 0) {

                        if (company.length != 0 || stream.length != 0 || jenjang.length != 0 || vacancy_name != "" || lokasi.length != 0) {
                            $('#list_vacancy').html('');
                            $('#list_vacancy_urgent').html('');

                            // $('#list_vacancy').html('<div class="col-xs-12 mx-auto text-center no-job-available" style="border: 1px solid red;background: antiquewhite;"><i class="material-icons" style="background: white;font-size: 50px;padding: 30px;border-radius: 50%;/*! box-shadow: 0 6px 15px rgba(36, 37, 38, 0.25); */color: red;">extension</i><h5 style="margin-top: 20px;">No job available</h5></div>');
                            $('#no_list_vacancy').show();

                            $('#load_data_message').hide();
                            $('#total_job_available').val("0");
                        }
                        // else {
                        //   $('#load_data_message').html("<div>Tidak ada data lainnya</div>");
                        //   action = 'active';
                        // }

                    } else if (response.data == null && start != 0) {
                        $('#load_data_message').html("<div>Tidak ada data lainnya</div>");
                        action = 'active';
                    } else {

                        $('#list_vacancy').html('');
                        $('#list_vacancy_urgent').html('');
                        $('#no_list_vacancy').hide();

                        $.each(response.data, function(i, val) {
                            if ('job_list' == 'job') {
                                href = val.vacancy_base_url + 'job/detail/' + val.vacancy_id;
                            } else {
                                href = val.vacancy_base_url + 'main#job_vacancy/job_detail/' + val.vacancy_id;
                            }

                            if (val.is_urgent == 'yes') {
                                var canvasStyle = 'none';
                                if (val.is_check_ratio == 'yes') {
                                    canvasStyle = 'block';
                                }
                                $("#list_vacancy_urgent").append('<div class="row card-list-vacancy card-vac" >\
                     <div class="ribbon">Vacancy Urgent</div>\
                     <div class="col-md-2"  >\
                       <img src="' + val.vacancy_base_url + 'assets/backend/images/company_logo/' + val.vacancy_logo_company + '" alt="" style="width:inherit;height:inherit;position: inherit;top: 50%;left: 50%;transform: translate(-50%, -50%);"display:none;>\
                       <div class="relative" style="position: relative;display:' + canvasStyle + ';"><canvas id="chartProgress_' + val.id + '" width="300px" height="200" style="display:' + canvasStyle + '"></canvas><div class="absolute-center text-center" style="position:absolute;top: 63%;left: 50%;transform: translate(-50%, -50%);"><label style="line-height: 1;font-size: x-small;">Kuota Kandidat</label></div></div>\
                     </div>\
                     <div class="col-md-7 center-list-job"  >\
                       <h4 style="margin-bottom: 0px;font-weight: bold;">' + val.vacancy_name + '</h4>\
                       <hr>\
                       <p>' + val.short_description + '</p>\
                     </div>\
                     <div class="col-md-3" style="padding:5px">\
                       <span>Bidang Pekerjaan</span><br>\
                       <b>' + val.stream_name + '</b><br><br>\
                       <span>Jenjang</span><br>\
                       <b>' + val.education_name + '</b>\
                       <br><br>\
                       <a href="' + href + '" target="_blank" class="btn btn-danger">Detail Pekerjaan</a>\
                       ' + val.btn_save + '\
                     </div>\
                   </div>');

                            } else {

                                $("#list_vacancy").append('<div class="row card-list-vacancy card-vac" >\
                     <div class="col-md-2" style="padding:10px;background:#f9f9f9">\
                       <img src="' + val.vacancy_base_url + 'assets/backend/images/company_logo/' + val.vacancy_logo_company + '" alt="" style="width:inherit;height:inherit;position: inherit;top: 50%;left: 50%;transform: translate(-50%, -50%);">\
                     </div>\
                     <div class="col-md-7 center-list-job"  >\
                       <h4 style="margin-bottom: 0px;font-weight: bold;">' + val.vacancy_name + '</h4>\
                       <p style="display:none;">' + val.vacancy_company_name + '</p>\
                       <hr>\
                       <p>' + val.short_description + '</p>\
                     </div>\
                     <div class="col-md-3" style="padding:5px">\
                       <span>Bidang Pekerjaan</span><br>\
                       <b>' + val.stream_name + '</b><br><br>\
                       <span>Jenjang</span><br>\
                       <b>' + val.education_name + '</b>\
                       <br><br>\
                       <a href="' + href + '" target="_blank" class="btn btn-danger">Detail Pekerjaan</a>\
                       ' + val.btn_save + '\
                     </div>\
                   </div>');

                            }

                            $('#total_job_available').val(response.total_data);
                        });

                        $('#load_data_message').html("<div>Loading....</div>");
                        action = "inactive";

                    }

                    $('#total_job_vacancy').text(response.total_data);
                }
            });
        }


        function load_saved_job_list() {
            $("#list_saved_vacancy").empty();

            $.ajax({
                url: base_url + 'job_list/load_saved_job_list',
                method: "POST",
                data: {
                    limit: limit,
                    start: start
                },
                cache: false,
                dataType: 'json',
                beforeSend: function() {
                    NProgress.start();
                },
                success: function(response) {
                    NProgress.done();
                    if (response != null) {
                        $.each(response, function(i, x) {
                            if ('job_list' == 'job') {
                                href = x.vacancy_base_url + 'job/detail/' + x.vacancy_id;
                            } else {
                                href = x.vacancy_base_url + 'main#job_vacancy/job_detail/' + x.vacancy_id;
                            }

                            if (x.is_urgent == 'yes') {
                                label_urgent = '<div class="ribbon">Vacancy Urgent</div>';
                            } else {
                                label_urgent = '';
                            }


                            $("#list_saved_vacancy").append('<div class="row card-list-saved-vacancy card-vac" >\
                ' + label_urgent + '\
                <div class="col-md-2" style="padding:10px;background:#f9f9f9">\
                  <img src="' + x.vacancy_base_url + 'assets/backend/images/company_logo/' + x.vacancy_logo_company + '" alt="" style="width:inherit;height:inherit;position: inherit;top: 50%;left: 50%;transform: translate(-50%, -50%);">\
                </div>\
                <div class="col-md-7 center-list-job"  >\
                  <h4 style="margin-bottom: 0px;font-weight: bold;">' + x.vacancy_name + '</h4>\
                  <hr>\
                  <p>' + x.short_description + '</p>\
                </div>\
                <div class="col-md-3" style="padding:5px">\
                  <span>Bidang Pekerjaan</span><br>\
                  <b>' + x.stream_name + '</b><br><br>\
                  <span>Jenjang</span><br>\
                  <b>' + x.education_name + '</b>\
                  <br><br>\
                  <a href="' + href + '" target="_blank" class="btn btn-danger">Detail Pekerjaan</a>\
                  <span id="btn_save_' + x.vac_id + '">\
                     <button type="button" class="btn btn-sm btn-outline-primary cursor" onclick="save_job(`not_saved`,' + x.vac_id + ')" data-bs-toggle="tooltip" data-bs-placement="right" title="Unsave"><span class="material-icons">bookmark</span></button>\
                  </span>\
                </div>\
              </div>');
                        });
                    } else {
                        $("#list_saved_vacancy").append(`<div class="centered cursor">\
                                              Kamu belum menyimpan lowongan apapun <br>\
                                              <button type="button" class="mt-4 btn btn-primary btn-sm" onclick="explore_job()">Cari Lowongan Sekarang</button>\
                                            </div>`);
                    }
                }
            });
        }

        function save_job(status, id_vac) {
            $.ajax({
                url: base_url + 'job_list/save_job',
                method: "POST",
                data: {
                    status: status,
                    id_vac: id_vac
                },
                cache: false,
                dataType: 'json',
                beforeSend: function() {
                    NProgress.start();
                },
                success: function(response) {
                    NProgress.done();
                    if (response.status == true) {

                        if (response.status_upd == 'saved') {
                            btn = '<button type="button" class="btn btn-sm btn-outline-primary cursor" onclick="save_job(`saved`,' + response.id_vac + ')" data-bs-toggle="tooltip" data-bs-placement="right" title="Save"><span class="material-icons">bookmark_border</span></button>';
                            message = 'Lowongan sudah dihapus dari daftar penyimpanan';
                        } else {
                            btn = '<button type="button" class="btn btn-sm btn-outline-primary cursor" onclick="save_job(`not_saved`,' + response.id_vac + ')" data-bs-toggle="tooltip" data-bs-placement="right" title="Unsave"><span class="material-icons">bookmark</span></button>';
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
                        load_saved_job_list();
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

        function reset() {
            $('#list_vacancy').html('');
            $('#name_vacancy').val('');
            $('#company_filter_job').val(null).trigger('change');
            $('#stream').val(null).trigger('change');
            $('#jenjang').val(null).trigger('change');
            $('#lokasi').val(null).trigger('change');
        }

        function explore_job() {
            openCity(event, 'explore');
            $("#tablinks_1").addClass("active");
            $("#m_tablinks_1").addClass("active");
        }
    </script>
</div>
@endsection