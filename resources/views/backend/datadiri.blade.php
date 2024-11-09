@extends('backend.layouts.master')

@section('content')

<div id="ajax-content" style="min-height: 80vh; height: auto; padding-bottom: 2.5rem;"><!-- Begin Plugins Ratting Star  -->
    <link rel="stylesheet" href="https://recruit.infomedia.co.id/assets/backend/vendors/rating-star/themes/bars-1to10.css">
    <link rel="stylesheet" href="https://recruit.infomedia.co.id/assets/backend/vendors/rating-star/themes/bars-movie.css">
    <link rel="stylesheet" href="https://recruit.infomedia.co.id/assets/backend/vendors/rating-star/themes/bars-square.css">
    <link rel="stylesheet" href="https://recruit.infomedia.co.id/assets/backend/vendors/rating-star/themes/bars-pill.css">
    <link rel="stylesheet" href="https://recruit.infomedia.co.id/assets/backend/vendors/rating-star/themes/bars-reversed.css">
    <link rel="stylesheet" href="https://recruit.infomedia.co.id/assets/backend/vendors/rating-star/themes/bars-horizontal.css">

    <link rel="stylesheet" href="https://recruit.infomedia.co.id/assets/backend/vendors/rating-star/themes/fontawesome-stars.css">
    <link rel="stylesheet" href="https://recruit.infomedia.co.id/assets/backend/vendors/rating-star/themes/css-stars.css">
    <link rel="stylesheet" href="https://recruit.infomedia.co.id/assets/backend/vendors/rating-star/themes/bootstrap-stars.css">
    <link rel="stylesheet" href="https://recruit.infomedia.co.id/assets/backend/vendors/rating-star/themes/fontawesome-stars-o.css">
    <script src="https://recruit.infomedia.co.id/assets/backend/vendors/rating-star/jquery.barrating.js"></script>

    <!-- End Plugins Ratting Star 1 -->
    <style type="text/css">
        .form-upload {
            padding: 0px 10px 10px 10px;
            border-bottom: solid 1px #e4e9f0;
            background: white;
            margin-bottom: 10px;
            border-radius: 5px;
        }

        .nav-link.active {
            background: aliceblue !important;
            border-right: solid 5px blue !important;
        }

        .content-detail,
        .content-detail-experience,
        .content-detail-organizational_experience,
        .content-detail-family_relationship,
        .content-detail-family_relationship_bi,
        .content-detail-achievement,
        .content-detail-address {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.1), 0 6px 20px 0 rgba(0, 0, 0, 0.1);
            padding: 10px;
            background: white;
            border-radius: 5px;
        }

        .content-detail-skill,
        .content-detail-sertifikasi {
            padding: 10px;
            background: white;
            border-radius: 5px;
            border: solid 1px #e5eaf0;
        }

        .ui-datepicker-today a.ui-state-highlight {
            border-color: #000000;
            background: #607D8B;
            color: rgb(255, 255, 255);
        }

        .ui-datepicker-today.ui-datepicker-current-day a.ui-state-highlight {
            border-color: #000000;
            background: #607D8B;
            color: rgb(255, 255, 255);
        }

        .ui-datepicker td.ui-state-disabled>span {
            background: #FF6C6C;
        }

        .ui-datepicker td.ui-state-disabled {
            opacity: 50;
        }

        .nav-tabs-vertical .nav-tabs .nav-item .nav-link.active,
        .nav-tabs-vertical .nav-tabs .nav-item .nav-link:focus {
            background: #d2e5f6;
            padding-left: 5px;
        }

        .asterik {
            width: 12px;
            height: 12px;
            background: red;
            border-radius: 50%;
            border: solid 3px bisque;
        }

        .bg-headername {
            background-color: red;
            color: white;
            text-align: center;
            padding: 10px;
            margin-bottom: -14px;
            margin-bottom: 10px;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
        }

        @media screen and (min-width: 1200px) {
            #menu-collapse {
                display: none;
            }
        }

        @media screen and (max-width: 580px) {
            #menu-normal {
                display: none;
            }
        }

        .nav-link {
            padding: 0.8em 0.5em 0.8em 1em !important;
        }

        /* desktop */
        @media screen and (min-width: 768px) {
            #menu-collapse {
                display: none;
            }

            .nav-mobile-caption {
                display: none !important;
            }
        }

        /* mobile */
        @media screen and (max-width: 768px) {
            #menu-normal {
                display: none;
            }

            #section_tab {
                padding: 0px 15px;
            }

            .cat__content {
                padding-top: 0px;
            }

        }

        .menu-nav-mobile {
            position: fixed;
            z-index: 995;
            top: 0;
            right: 0;
            width: 80%;
            height: 100%;
            background: #eef0f4;
            display: none;
            box-shadow: 0 6px 15px rgba(36, 37, 38, 0.48);
        }

        .list-menu-mobile {
            padding: 5px;
        }

        .list-menu-mobile-active {
            background: white;
            border-left: solid blue;
        }

        .icon-complete-pp {
            color: green;
            background: aliceblue;
            border-radius: 50px;
            z-index: 10;
            position: absolute;
            left: 61%;
            padding: 5px;
            box-shadow: 0 6px 15px rgba(36, 37, 38, 0.08);
        }

        .icon-uncomplete-pp {
            color: red;
            background: antiquewhite;
            border-radius: 50px;
            z-index: 10;
            position: absolute;
            left: 61%;
            padding: 5px;
            box-shadow: 0 6px 15px rgba(36, 37, 38, 0.08);
        }

        .icon-complete-pp-m {
            color: green;
            background: aliceblue;
            border-radius: 50px;
            z-index: 10;
            position: absolute;
            left: 15%;
            top: 0;
            padding: 3px;
            box-shadow: 0 6px 15px rgba(36, 37, 38, 0.08);
        }

        .icon-uncomplete-pp-m {
            color: red;
            background: antiquewhite;
            border-radius: 50px;
            z-index: 10;
            position: absolute;
            left: 15%;
            top: 0;
            padding: 3px;
            box-shadow: 0 6px 15px rgba(36, 37, 38, 0.08);
        }

        .nav-link.disabled {
            color: lightgray !important;
        }

        .color_disabled {
            color: lightgray !important;
        }
    </style>

    <script type="text/javascript">
        function toogle_menu_nav() {
            $(".menu-nav-mobile").animate({
                width: 'toggle'
            }, 350);
        }

        function change_menu_mobile(type, id, name) {

            $("#" + type).click();
            toogle_menu_nav();
            $(".list-menu-mobile").removeClass('list-menu-mobile-active');
            $("#" + id).addClass('list-menu-mobile-active');
            $("#name_tab").text(name);
        }
    </script>

    <div class="menu-nav-mobile">
        <div class="row p-4 m-0">
            <span onclick="toogle_menu_nav()" class="material-icons" style="background: white;position: absolute;right: 18px;border-radius: 50px;padding: 5px;box-shadow: 0 6px 15px rgba(36, 37, 38, 0.08);cursor: pointer;">close</span>
            <div class="col-12 p-0 mt-5">
                <a id="pp_user_m" href="https://recruit.infomedia.co.id/main#profile" class="cat__core__avatar cat__core__avatar--110 cat__core__avatar--border-white d-block mb-2" style="width: 5rem;height: 5rem;">
                    <img src="https://recruit.infomedia.co.id/curiculum_vitae/get_document/prev/NTY3ZWRkMTA1MDNmMGMyZWY3NGU2ZjYwYTk0Y2MyNTZhMjUzNjYzNzM3NDFjNjVmZGE5ZTJkOWU1MzFmNTNmODdhOTY0MTJhNmY1MjAzMTc1MGFmYjQyYmI5MGJjNWMwNWYwMzAyM2YwMmJhYTU3OTVlZTAwMjhmMzBjMGQ3ZWVaS1pPWDNMZXdKQzgwdngwZHVUTWRxSnlhWndyNnBVWUUzWjNWMnRmYlR3PQ==/71aa54fc36116f6104389ca2e4576cc1.jpg" alt="" style="object-fit:cover;" />
                    <span class="complete material-icons pull-right icon-complete-pp-m">check</span></a>
                <h4>Simple CV Version</h4>
                <a href="main#curiculum_vitae/preview" id="$id" class="btn btn-sm btn-primary mt-2">Preview CV</a>
                <a href="main#profile" class="btn-pp btn btn-sm btn-outline-primary mt-2">Photo Profile</a>
                <br><br>
            </div>
            <div id="diri_m" onclick="change_menu_mobile('nav_menu_data_diri','diri_m','Data Diri')" class="col-12 p-2 list-menu-mobile list-menu-mobile-active">
                <label class=" my-auto">Data Diri</label>
                <span class="complete material-icons pull-right" style="color: green;background: aliceblue;border-radius: 5px;">check</span>
            </div>
            <div id="alamat_m" onclick="change_menu_mobile('nav_menu_address','alamat_m','Alamat')" class="col-12 mt-1 p-2 list-menu-mobile">
                <label class="m-0">Alamat</label>

                <span class="complete material-icons pull-right" style="color: green;background: aliceblue;border-radius: 5px;">check</span>
            </div>
            <div id="pendidikan_m" onclick="change_menu_mobile('nav_menu_pendidikan','pendidikan_m','Pendidikan')" class="col-12 mt-1 p-2 list-menu-mobile">
                <label class="m-0">Pendidikan</label>

                <span class="complete material-icons pull-right" style="color: green;background: aliceblue;border-radius: 5px;">check</span>
            </div>

            <div id="kerja_m" onclick="change_menu_mobile('nav_menu_pengalaman_kerja','kerja_m','Pengalaman Kerja')" class="col-12 mt-1 p-2 list-menu-mobile">
                <label class="m-0">Pengalaman Kerja</label>
            </div>
            <div id="organisasi_m" onclick="change_menu_mobile('nav_menu_organisasi','organisasi_m','Pengalaman Organisasi')" class="col-12 mt-1 p-2 list-menu-mobile">
                <label class="m-0">Pengalaman Organisasi</label>
            </div>


            <div id="kompetensi_m" onclick="change_menu_mobile('nav_menu_kompetensi_sertifikasi','kompetensi_m','Kompetensi Sertifikasi')" class="col-12 mt-1 p-2 list-menu-mobile">
                <label class="m-0">Kompetensi &amp; Sertifikasi</label>
            </div>


            <div id="pendukung_m" onclick="change_menu_mobile('nav_menu_data_pendukung','pendukung_m','Data Pendukung')" class="col-12 mt-1 p-2 list-menu-mobile">
                <label class="m-0">Data Pendukung</label>

                <span class="complete material-icons pull-right" style="color: green;background: aliceblue;border-radius: 5px;">check</span>
            </div>
        </div>
    </div>


    <section>
        <div class="row mb-3 m-0 nav-mobile-caption" style="background: white;padding: 5px;box-shadow:0 6px 15px rgba(36, 37, 38, 0.08); ">
            <div class="col-8 my-auto">
                <h5 class="m-0"> <strong id="name_tab">Data Diri</strong> </h5>
                <small id="all_complete">All Tab Complete</small>
            </div>
            <div class="col-4 text-right my-auto">
                <button onclick="toogle_menu_nav()" class="btn btn-outline-primary btn-sm d-flex pull-right">
                    <span class="my-auto mr-2">MENU</span><span class="material-icons">filter_list</span></button>
            </div>
        </div>
        <div class="row">

            <div class="col-md-12">
                <div class="panel-group" id="menu-collapse" style="width:100%;display:none">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <button class="btn btn-info" data-toggle="collapse" href="#collapse1" style="width:100%;"><i class="fa fa-bars"></i> Detail CV</button>
                            </h4>
                        </div>
                        <div id="collapse1" class="panel-collapse collapse nav-tabs-vertical pull-center">
                            <ul class="nav nav-tabs" role="tablist" style="position:sticky; top:100px;width:100%;">
                                <li class="nav-item">
                                    <a class="nav-link change-menu-detail active d-flex" href="javascript: void(0);" data-toggle="tab" data-target="#personal_information" role="tab"> Data Diri &nbsp; <label class="asterik my-auto"></label> </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link change-menu-detail" href="javascript: void(0);" data-toggle="tab" data-target="#address2" role="tab"> Alamat <label class="asterik">*</label> </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link change-menu-detail" href="javascript: void(0);" data-toggle="tab" data-target="#education" role="tab"> Pendidikan <label class="asterik">*</label> </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link change-menu-detail" href="javascript: void(0);" data-toggle="tab" data-target="#experience" role="tab">
                                        Pengalaman Kerja </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link change-menu-detail" href="javascript: void(0);" data-toggle="tab" data-target="#organizational_experience" role="tab"> Pengalaman Organisasi </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link change-menu-detail" href="javascript: void(0);" data-toggle="tab" data-target="#skill" role="tab"> Kompetensi &amp; Sertifikasi </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link change-menu-detail" href="javascript: void(0);" data-toggle="tab" data-target="#upload" role="tab"> Data Pendukung <label class="asterik">*</label> </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="mb-5">
                    <div class="nav-tabs-vertical">
                        <ul class="nav nav-tabs" role="tablist" id="menu-normal" style="position:sticky; border-radius: 5px;background: white;">
                            <li class="nav-item">
                                <div style="padding: 30px 20px">
                                    <span class="cat__core__title text-left">
                                        <!-- <strong>Curriculum Vitae</strong> -->
                                        <a id="pp_user" href="https://recruit.infomedia.co.id/main#profile" class="cat__core__avatar cat__core__avatar--110 cat__core__avatar--border-white d-block mx-auto" style="width: 7rem;height: 7rem;">
                                            <img src="https://recruit.infomedia.co.id/curiculum_vitae/get_document/prev/NTY3ZWRkMTA1MDNmMGMyZWY3NGU2ZjYwYTk0Y2MyNTZhMjUzNjYzNzM3NDFjNjVmZGE5ZTJkOWU1MzFmNTNmODdhOTY0MTJhNmY1MjAzMTc1MGFmYjQyYmI5MGJjNWMwNWYwMzAyM2YwMmJhYTU3OTVlZTAwMjhmMzBjMGQ3ZWVaS1pPWDNMZXdKQzgwdngwZHVUTWRxSnlhWndyNnBVWUUzWjNWMnRmYlR3PQ==/71aa54fc36116f6104389ca2e4576cc1.jpg" alt="" style="object-fit:cover;">
                                            <span class="complete material-icons pull-right icon-complete-pp">check</span></a>
                                        <div class="text-center mt-3">
                                            <h5>Simple CV Version</h5>
                                            <a href="main#curiculum_vitae/preview" id="$id" class="btn btn-sm btn-primary mt-2">Preview CV</a>
                                            <a href="main#profile" class="btn btn-pp btn-sm btn-outline-primary mt-2">Photo Profile</a>
                                        </div>
                                    </span>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a id="nav_menu_data_diri" class="nav-link change-menu-detail active " href="javascript: void(0);" data-toggle="tab" data-target="#personal_information" role="tab"> Data Diri &nbsp; <span class="complete material-icons pull-right" style="color: green;background: aliceblue;border-radius: 5px;">check</span></a>

                            </li>
                            <li class="nav-item">
                                <a id="nav_menu_address" class="nav-link change-menu-detail" href="javascript: void(0);" data-toggle="tab" data-target="#address2" role="tab"> Alamat &nbsp;
                                    <span class="complete material-icons pull-right" style="color: green;background: aliceblue;border-radius: 5px;">check</span></a>
                            </li>
                            <li class="nav-item">
                                <a id="nav_menu_pendidikan" class="nav-link change-menu-detail" href="javascript: void(0);" data-toggle="tab" data-target="#education" role="tab"> Pendidikan &nbsp; <span class="complete material-icons pull-right" style="color: green;background: aliceblue;border-radius: 5px;">check</span></a>
                            </li>
                            <li class="nav-item">
                                <a id="nav_menu_pengalaman_kerja" class="nav-link change-menu-detail" href="javascript: void(0);" data-toggle="tab" data-target="#experience" role="tab">
                                    Pengalaman Kerja </a>
                            </li>
                            <li class="nav-item">
                                <a id="nav_menu_organisasi" class="nav-link change-menu-detail" href="javascript: void(0);" data-toggle="tab" data-target="#organizational_experience" role="tab"> Pengalaman Organisasi </a>
                            </li>

                            <li class="nav-item">
                                <a id="nav_menu_kompetensi_sertifikasi" class="nav-link change-menu-detail" href="javascript: void(0);" data-toggle="tab" data-target="#skill" role="tab"> Kompetensi dan Sertifikasi </a>
                            </li>

                            <li class="nav-item">
                                <a id="nav_menu_data_pendukung" class="nav-link change-menu-detail" href="javascript: void(0);" data-toggle="tab" data-target="#upload" role="tab"> Data Pendukung &nbsp; <span class="complete material-icons pull-right" style="color: green;background: aliceblue;border-radius: 5px;">check</span></a>
                            </li>
                        </ul>
                        <div class="tab-content" id="section_tab">
                            <div class="tab-pane active" id="personal_information" role="tabcard">
                                <div class="row content-detail p-0">
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <form id="form-personal-information" name="form-personal-information" action="#">
                                                @csrf
                                                <div class="row bg-headername">
                                                    <div class="col-md-12">
                                                        <h5 class="text-white"><strong>Data Diri</strong></h5>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="d-flex">
                                                                KTP
                                                                <span class="material-icons" style="font-size: 15px;color: #2E9BFF;" data-toggle="tooltip" data-placement="right" title="Nomor KTP harus 16 digit">info</span>
                                                                <span class="ml-2 my-auto asterik"></span>
                                                            </label>
                                                            <input type="text" name="id_card" id="id_card" placeholder="Nomor KTP" onkeypress="return isNumber(event)" class="form-control" maxlength="16" minlength="16">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="d-flex">
                                                                Nama Lengkap
                                                                <span class="ml-2 my-auto asterik"></span>
                                                            </label>
                                                            <input type="text" name="fullname" id="fullname" placeholder="Nama Lengkap" class="form-control" maxlength="120">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="d-flex">
                                                                Email
                                                                <span class="ml-2 my-auto asterik"></span>
                                                            </label>

                                                            <input type="text" name="email" id="email" placeholder="Email" class="form-control" readonly="">
                                                            <small hidden="" id="notif_email"> </small>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="d-flex">
                                                                Nomor Handphone
                                                                <span class="ml-2 my-auto asterik"></span>
                                                            </label>
                                                            <input type="text" name="phone" id="phone" placeholder="Nomor Handphone" onkeypress="return isNumberKey(event)" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">

                                                            <label class="d-flex">
                                                                Nomor Whatsapp
                                                                <span class="ml-2 my-auto asterik"></span>
                                                            </label>
                                                            <input type="text" name="phone_wa" id="phone_wa" placeholder="Nomor Whatsapp" onkeypress="return isNumberKey(event)" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="d-flex">
                                                                Jenis Kelamin
                                                                <span class="ml-2 my-auto asterik"></span>
                                                            </label>
                                                            <select class="form-control select2 " name="gender" id="gender">
                                                                <option value="Laki-laki">Laki-laki</option>
                                                                <option value="Perempuan">Perempuan</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="d-flex">
                                                                Tempat Lahir
                                                                <span class="ml-2 my-auto asterik"></span>
                                                            </label>
                                                            <input type="text" name="born_place" id="born_place" placeholder="Tempat Lahir" class="form-control" onkeydown="return alphaOnly(event);" maxlength="40">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="d-flex">
                                                                Tanggal Lahir
                                                                <span class="ml-2 my-auto asterik"></span>
                                                            </label>
                                                            <input type="text" name="born_date" id="born_date" placeholder="Tanggal Lahir" class="form-control datetimepicker11">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Agama: </label>
                                                            <select id="religion" name="religion" class="form-control select2">
                                                                <option value="">Pilihan</option>
                                                                <option value="Buddha">Buddha</option>
                                                                <option value="Hindu">Hindu</option>
                                                                <option value="Islam">Islam</option>
                                                                <option value="Katolik">Katolik</option>
                                                                <option value="Kong Hu Cu">Kong Hu Cu</option>
                                                                <option value="Protestan">Protestan</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="d-flex">
                                                                Status Pernikahan
                                                                <span class="ml-2 my-auto asterik"></span>
                                                            </label>
                                                            <select class="form-control select2 " name="status_married" id="status_married">
                                                                <option value="">Pilihan</option>
                                                                <option value="Duda">Duda</option>
                                                                <option value="Janda">Janda</option>
                                                                <option value="Lajang">Lajang</option>
                                                                <option value="Nikah">Nikah</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4" id="date_married" style="display: none;">
                                                        <div class="form-group">
                                                            <label>Tanggal Pernikahan: </label>
                                                            <input type="text" name="family_married_date" id="family_married_date" placeholder="Tanggal Pernikahan" class="form-control datetimepicker111">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label class="text-black">Lokasi Penempatan </label>
                                                        <select class="form-control select2" name="lokasi_penempatan" id="lokasi_penempatan">
                                                            <option value="">Pilihan</option>
                                                        </select>
                                                    </div>

                                                </div>

                                                <div class="row">
                                                </div>

                                                <div class="row">
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <h6 class="text-black"><strong>Gelar</strong></h6>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Gelar 1: </label>
                                                            <select class="form-control select2" name="gelar_1" id="gelar_1">
                                                                <option value="">Pilih</option>
                                                                <option value="lainnya">Lainnya</option>

                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Gelar 2:</label>
                                                            <select class="form-control select2 " name="gelar_2" id="gelar_2" tabindex="-1" aria-hidden="true">
                                                                <option value="">Pilih</option>
                                                                <option value="lainnya">Lainnya</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Gelar 3:</label>
                                                            <select class="form-control select2 " name="gelar_3" id="gelar_3" tabindex="-1" aria-hidden="true">
                                                                <option value="">Pilih</option>
                                                                <option value="lainnya">Lainnya</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row" id="npwp">
                                                    <div class="col-md-6">
                                                        <h6 class="text-black"><strong>Bersedia ditempatkan diluar kota?</strong></h6>
                                                        <select class="form-control select2 select2-hidden-accessible" name="city_trip" id="city_trip" tabindex="-1" aria-hidden="true">
                                                            <option value="">Pilihan</option>
                                                            <option value="Ya">Ya</option>
                                                            <option value="Tidak">Tidak</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <h6 class="text-black"><strong>Media Sosial</strong></h6>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label>Linkedin: </label>
                                                            <input type="text" name="linkedin" id="linkedin" placeholder="Linkedin" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label>Facebook: </label>
                                                            <input type="text" name="facebook" id="facebook" placeholder="Facebook" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label>Twitter: </label>
                                                            <input type="text" name="twitter" id="twitter" placeholder="Twitter" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label>Instagram: </label>
                                                            <input type="text" name="instagram" id="instagram" placeholder="Instagram" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <span class="d-flex">
                                                            <label class="asterik my-auto pull-left"> </label>
                                                            &nbsp; Field wajib diisi
                                                        </span>
                                                    </div>
                                                    <div class="col-6">
                                                        <button type="submit" style="cursor:pointer;" id="save_personal" class="btn btn-primary pull-right continue">
                                                            <i class="fa fa-save"></i> Simpan
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="tab-pane" id="address2" role="tabcard" aria-expanded="true">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="mb-5">

                                            <form id="form-address2" name="form-address2" action="#" class="">
                                                @csrf
                                                <div class="body-detail-address-add_">

                                                    <div class="content-detail-address pt-0" style="margin-top:10px;" data-id="'+result[index].id+'" id="address_'+result[index].id+'">
                                                        <div class="row bg-headername ">
                                                            <div class="col-md-12">
                                                                <h5><b> Alamat Domisili</b></h5>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label class="d-flex">
                                                                        Alamat
                                                                        <span class="ml-2 my-auto asterik"></span>
                                                                    </label>
                                                                    <textarea name="address_now" id="address_now" placeholder="Alamat" class="form-control" maxlength="60"></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label class="d-flex">
                                                                        Provinsi
                                                                        <span class="ml-2 my-auto asterik"></span>
                                                                    </label>
                                                                    <select class="form-control select2 " name="province_now" id="province_now" tabindex="-1" aria-hidden="true">
                                                                        <option value="">Pilihan</option>

                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label class="d-flex">
                                                                        Kota/Kabupaten
                                                                        <span class="ml-2 my-auto asterik"></span>
                                                                    </label>
                                                                    <select class="form-control kota_domisili select2" name="city_now" id="city_now" tabindex="-1" aria-hidden="true">
                                                                        <option value="">Pilihan</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label class="d-flex">
                                                                        Kecamatan
                                                                        <span class="ml-2 my-auto asterik"></span>
                                                                    </label>
                                                                    <select class="form-control select2" name="village_now" id="village_now" tabindex="-1" aria-hidden="true">
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label class="d-flex">
                                                                        Nomor Rumah
                                                                        <span class="ml-2 my-auto asterik"></span>
                                                                    </label>
                                                                    <input type="text" name="phone_home_now" id="phone_home_now" placeholder="Nomor Rumah" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label>Kode Pos: </label>
                                                                    <input type="text" name="zip_code_now" id="zip_code_now" onkeypress="return isNumberKey(event)" placeholder="Kode Pos" class="form-control" value="" maxlength="5">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label>Nomor Telepon (termasuk kode area): </label>
                                                                    <input type="text" name="phone_now" id="phone_now" onkeypress="return isNumberKey(event)" placeholder="Nomor Telepon (ex:62 83821989)" class="form-control" value="" maxlength="14">
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <span class="d-flex">
                                                                    <label class="asterik my-auto pull-left"> </label>
                                                                    &nbsp; Field wajib diisi
                                                                </span>
                                                            </div>
                                                            <div class="col-6">
                                                                <button type="submit" class="btn btn-primary  pull-right" style="cursor:pointer;">
                                                                    <i class="fa fa-save"></i> Simpan
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane" id="education" role="tabcard" aria-expanded="true">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="mb-5">

                                            <form id="form-education" name="form-education" action="#" class="">
                                                <div class="row" style="padding-bottom: 9px;">
                                                    <div class="col-6">
                                                        <h4 class="text-black"><strong>Pendidikan</strong></h4>
                                                    </div>
                                                    <div class="col-6 my-auto">
                                                        <button type="submit" class="btn btn-primary btn-sm pull-right" style="cursor:pointer;">
                                                            <i class="fa fa-save"></i> Simpan
                                                        </button>
                                                        <a class="pull-right btn btn-sm btn-outline-default" id="add-education" style="margin-right: 10px; cursor:pointer;">
                                                            <span class="fa fa-plus"> </span> Tambah
                                                        </a>
                                                    </div>
                                                </div>
                                                <input type="hidden" name="csrf_sso_tg" value="b08bb7eec9802ef34a68c25a5355fd8a" style="display: none">
                                                <!-- this for add education -->
                                                <div class="body-detail-education-add"></div>
                                                <!-- this for list education -->
                                                <div class="body-detail-education">
                                                    <div class="content-detail pt-0" style="margin-top:10px;" data-id="1503551" id="education_1503551">
                                                        <div class="row bg-headername ">
                                                            <div class="col-md-12">
                                                                <h5 class="pull-left"><b>Pendidikan 1</b></h5>
                                                                <div id="button-remove-1503551"> <a href="javascript: void(0)" data-id="1503551" class="pull-right delete-education d-flex" style="color: white;cursor:pointer"><span class="my-auto">Hapus</span><span style="color: white;" class="material-icons my-auto">delete</span></a> </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="form-group"> <label class="d-flex">Jenjang Pendidikan<span class="ml-2 my-auto asterik"></span></label> <select class="form-control select2" name="" id="education_level" tabindex="-1" aria-hidden="true">
                                                                        <option value="">Pilihan </option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group"> <label class="d-flex">Sekolah/ Perguruan Tinggi<span class="ml-2 my-auto asterik"></span></label> <select class="form-control select2" name="applicant[1503551][university]" id="university_1503551" tabindex="-1" aria-hidden="true">
                                                                        <option value="860">STMIK Swadharma/Jakarta</option>
                                                                        <option value="99999">Lainnya</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group"> <label>Jenis Perguruan Tinggi:</label> <select class="form-control select2 jenis-pt" name="applicant[1503551][jenis_pt]" id="jenis_pt" tabindex="-1" aria-hidden="true">
                                                                        <option value="">Pilihan </option>
                                                                        <option value="ptn">PTN (Negeri) </option>
                                                                        <option value="pts">PTS (Swasta) </option>
                                                                        <option value="ptln">PTLN (Luar Negeri) </option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6" id="ptln_1503551" hidden="">
                                                                <div class="form-group"> <label>Nama Perguruan Tinggi Luar Negeri: <label class="asterik">*</label> </label> <input type="text" name="applicant[1503551][nama_jenjang_pendidikan_ln]" id="nama_jenjang_pendidikan_ln_1503551" class="form-control" data-validation-message="Tidak boleh kosong" value="undefined" placeholder="Perguruan Tinggi Luar Negeri"> </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <div class="form-group"> <label class="d-flex">Fakultas<span class="ml-2 my-auto asterik"></span></label> <select class="form-control select2 fakultas-others select2-hidden-accessible" name="applicant[1503551][fakultas]" id="fakultas" data-id="1503551" data-fakultas="old" tabindex="-1" aria-hidden="true">
                                                                        <option value="">Pilihan </option>
                                                                        <option value="9999">Lainnya </option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group"> <label class="d-flex">Jurusan<span class="ml-2 my-auto asterik"></span></label> <select class="form-control select2 jurusan-others select2-hidden-accessible" name="applicant[1503551][major]" id="major" tabindex="-1" aria-hidden="true">
                                                                        <option value="">Pilihan </option>

                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group"> <label class="d-flex">IPK/Nilai<span class="ml-2 my-auto asterik"></span></label> <input type="text" name="applicant[1503551][current_gpa]" onkeypress="return NumberandDot(event)" id="current_gpa_1503551" placeholder="Minimal IPK/Nilai" class="form-control cek_decimal" value="3.6" data-validation="[NOTEMPTY]" data-validation-message="Tidak boleh kosong"> </div>
                                                            </div>
                                                            <div class="col-xs-1">
                                                                <div class="form-group"> <label> dari </label> </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="form-group"> <label class="d-flex">Maksimal<span class="ml-2 my-auto asterik"></span></label> <input type="text" name="applicant[1503551][score_gpa]" onkeypress="return NumberandDot(event)" id="score_gpa_1503551" placeholder="Maksimal IPK/Nilai" class="form-control getIpkMaks cek_decimal" data-id="1503551" value="4.0" data-validation="[NOTEMPTY]" data-validation-message="Tidak boleh kosong"> </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <div class="form-group"> <label>Negara: </label> <select class="form-control negara-edu-others select2 select2-hidden-accessible" name="applicant[1503551][country_education]" id="country_education" data-id="1503551" data-kota="old" tabindex="-1" aria-hidden="true">

                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group aw"> <label>Kota/Kabupaten: </label> <select class="form-control select2 select2-hidden-accessible" name="applicant[1503551][kota_education]" id="kota_education" data-id="1503551" data-kota="old" tabindex="-1" aria-hidden="true">

                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group"> <label>Tahun Pendidikan: </label>
                                                                    <div class="row">
                                                                        <div class="col-sm-6 date"> <input type="text" name="applicant[1503551][education_date_start]" id="education_date_start_1503551" placeholder="Tahun Mulai" class="form-control selectyear datetimepicker1" value="2019" data-idno="1503551"> </div>
                                                                        <div class="col-sm-6 date"> <input type="text" name="applicant[1503551][education_date_end]" id="education_date_end_1503551" placeholder="Tahun Akhir" class="form-control datetimepicker2 datetimepicker1503551" value="2023"> </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6"> <input type="text" class="form-control" name="applicant[1503551][other_edu]" id="other_text_kota_1503551" style="display:none;" placeholder="Masukkan Kota Lainnya.."> <input type="text" class="form-control" name="applicant[1503551][other_edu]" id="other_text_kota_2_1503551" style="display:none;" value=""> </div>
                                                        </div> <span class="d-flex"><label class="asterik my-auto pull-left"> </label>&nbsp; Field wajib diisi</span>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">

                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">

                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane" id="experience" role="tabcard" aria-expanded="true">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="mb-5">

                                            <form id="form-experience" name="form-experience" action="#" class="">
                                                <div class="row" style="padding-bottom: 9px;">
                                                    <div class="col-6">
                                                        <h4 class="text-black"><strong>Pengalaman Kerja</strong></h4>
                                                    </div>
                                                    <div class="col-6 my-auto">
                                                        <button type="submit" class="btn btn-sm btn-primary pull-right"><i class="fa fa-save"></i> Simpan</button>
                                                        <a style="margin-right: 10px;cursor:pointer;" class="pull-right btn btn-sm btn-outline-default" id="add-experience"><span class="fa fa-plus"> </span> Tambah </a>
                                                    </div>
                                                </div>
                                                <div style="background: white;border: solid 1px #0190fe;padding: 10px;border-radius: 5px;color: #0190fe;" role="alert">Masukkan Pengalaman Kerja Paling Terbaru</div>
                                                <input type="hidden" name="csrf_sso_tg" value="b08bb7eec9802ef34a68c25a5355fd8a" style="display: none">
                                                <!-- space for add -->
                                                <div class="body-detail-experience-add"></div>
                                                <!-- space for list -->
                                                <div class="body-detail-experience">
                                                    <div class="pt-0 content-detail-experience" style="margin-top:10px;" data-id="3231473" id="experience_3231473">
                                                        <div class="row bg-headername ">
                                                            <div class="col-md-12">
                                                                <h5 class="pull-left"><b>Pengalaman Kerja 1</b></h5>
                                                                <div id="button-remove-3231473"> <a href="javascript: void(0)" data-id="3231473" class="pull-right delete-experience d-flex" style="color: white;cursor:pointer"><span class="my-auto">Hapus</span><span style="color: white;" class="material-icons my-auto">delete</span></a> </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group"> <label>Nama Perusahaan: </label> <input type="text" class="form-control" onkeypress="return isQuotes(event)" name="applicant[3231473][nama_perusahaan]" value="PT RAVALIA INTI MANDIRI" placeholder="Nama Perusahaan"> </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group"> <label>Jabatan / Posisi: </label> <input type="text" name="applicant[3231473][jabatan]" id="jabatan_3231473" placeholder="Jabatan" class="form-control" onkeypress="return isQuotes(event)" value="IT PROGRAMMER"> </div>
                                                            </div>
                                                        </div>
                                                        <div class="row ">
                                                            <div class="col-md-4">
                                                                <div class="form-group"> <label>Negara: </label>
                                                                    <select class="form-control select2" name="" id="country_job" tabindex="-1" aria-hidden="true">

                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group"> <label>Industri: </label>
                                                                    <select class="form-control select2" name="" id="industri_3231473" data-id="3231473" data-industri="old" tabindex="-1" aria-hidden="true">
                                                                        <option value="95">Manufacture / Production</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group"> <label>Tipe Pekerjaan: </label> <select class="form-control select2" name="" id="type_work" data-id="3231473" tabindex="-1" aria-hidden="true">
                                                                        <option value="2">PWT (Contract)</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="form-group"> <label>Lokasi Bekerja: </label> <select class="form-control select2" name="applicant[3231473][alamat_perusahaan]" id="alamat_perusahaan" data-id="3231473" tabindex="-1" aria-hidden="true">
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group"> <label>Tahun Kerja: </label>
                                                                    <div class="row">
                                                                        <div class="col-sm-6">
                                                                            <div class="input-group date datetimepicker30"> <input type="text" class="form-control selectymd" data-idno="3231473" name="applicant[3231473][date_start]" id="date_start_3231473" placeholder="Tanggal Mulai" value="01-07-2024"> <span class="input-group-addon"> <span class="icmn-calendar"> </span> </span> </div>
                                                                        </div>
                                                                        <div class="col-sm-6">
                                                                            <div class="input-group date datetimepicker3231473"> <input type="text" class="form-control selectymd" name="applicant[3231473][date_end]" id="date_end_3231473" placeholder="Tanggal Akhir" value="25-10-2024"> <span class="input-group-addon"> <span class="icmn-calendar"> </span> </span> </div> <label class="cat__core__control cat__core__control--checkbox" style="padding-top:10px;"> <input type="checkbox" class="current_date" data-id="3231473" name="applicant[3231473][current_date]" id="current_date_3231473"> Pekerjaan Saat Ini <div class="cat__core__control__indicator"></div> </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group"> <label>Gaji: </label> <input type="text" class="form-control" name="applicant[3231473][gaji]" id="gaji_3231473" value="7000000" placeholder="Equivalent IDR (Rupiah)" onkeypress="return isNumberKey(event)"> </div>
                                                            </div>
                                                        </div>
                                                        <div class="row ">
                                                            <div class="col-md-12">
                                                                <div class="form-group"> <label>Peran dan Tanggungjawab: </label> <textarea class="form-control summernote" onkeypress="return isQuotes(event)" name="applicant[3231473][deskripsi]" id="deskripsi_3231473" rows="5" style="display: none;">&lt;p&gt;Build Development Web Application with ASP NET MVC C#&lt;br&gt;&lt;/p&gt;</textarea>
                                                                    <div class="note-editor note-frame panel panel-default">
                                                                        <div class="note-dropzone">
                                                                            <div class="note-dropzone-message"></div>
                                                                        </div>
                                                                        <div class="note-toolbar panel-heading">
                                                                            <div class="note-btn-group btn-group note-para"><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Unordered list (CTRL+SHIFT+NUM7)"><i class="note-icon-unorderedlist"></i></button><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Ordered list (CTRL+SHIFT+NUM8)"><i class="note-icon-orderedlist"></i></button></div>
                                                                        </div>
                                                                        <div class="note-editing-area">
                                                                            <div class="note-handle">
                                                                                <div class="note-control-selection">
                                                                                    <div class="note-control-selection-bg"></div>
                                                                                    <div class="note-control-holder note-control-nw"></div>
                                                                                    <div class="note-control-holder note-control-ne"></div>
                                                                                    <div class="note-control-holder note-control-sw"></div>
                                                                                    <div class="note-control-sizing note-control-se"></div>
                                                                                    <div class="note-control-selection-info"></div>
                                                                                </div>
                                                                            </div><textarea class="note-codable"></textarea>
                                                                            <div tabindex="-1" contenteditable="true" style="position: absolute; left: -100000px; opacity: 0;"></div>
                                                                            <div class="note-editable panel-body" contenteditable="true" style="height: 200px;">
                                                                                <p>Build Development Web Application with ASP NET MVC C#<br></p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="note-statusbar">
                                                                            <div class="note-resizebar">
                                                                                <div class="note-icon-bar">
                                                                                    <div class="note-icon-bar">
                                                                                        <div class="note-icon-bar"> </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row ">
                                                            <div class="col-md-6">
                                                                <div class="form-group"> <label>Alasan Berhenti: </label> <textarea class="form-control " onkeypress="return isQuotes(event)" name="applicant[3231473][alasan_berhenti]" id="alasan_berhenti_3231473" rows="3"></textarea> </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group"> <label>Benefit: </label> <textarea class="form-control " onkeypress="return isQuotes(event)" name="applicant[3231473][fasilitas]" id="fasilitas_3231473" rows="3"></textarea> </div>
                                                            </div>
                                                        </div>
                                                        <div class="row ">
                                                            <div class="col-md-6" hidden="">
                                                                <div class="form-group"> <label>Rekomendasi (Nama Pemberi Rekomendasi): </label> <input type="text" class="form-control" onkeypress="return isQuotes(event)" name="applicant[3231473][rekomendasi]" id="rekomendasi_3231473" value="" placeholder="Rekomendasi (Nama Pemberi Rekomendasi)"> </div>
                                                            </div>
                                                            <div class="col-md-6" hidden="">
                                                                <div class="form-group"> <label>Nomor Kontak Rekomendasi: </label> <input type="text" class="form-control" name="applicant[3231473][kontak_rekomendasi]" id="kontak_rekomendasi_3231473" value="" placeholder="Nomor Kontak Rekomendasi" onkeypress="return isNumberKey(event)"> </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane" id="organizational_experience" role="tabcard" aria-expanded="true">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="mb-5">

                                            <form id="form-organizational_experience" name="form-organizational_experience" action="#" class="">
                                                <input type="hidden" name="csrf_sso_tg" value="b08bb7eec9802ef34a68c25a5355fd8a" style="display: none">

                                                <div class="row" style="padding-bottom: 9px;">
                                                    <div class="col-6">
                                                        <h4 class="text-black"><strong>Organisasi</strong></h4>
                                                    </div>
                                                    <div class="col-6 my-auto">
                                                        <button type="submit" class="btn btn-sm btn-primary pull-right" style="cursor:pointer;">
                                                            <i class="fa fa-save"></i> Simpan
                                                        </button>

                                                        <a id="add-organizational_experience" style="margin-right: 10px; cursor:pointer;" class="pull-right btn btn-sm btn-outline-default">
                                                            <span class="fa fa-plus"> </span> Tambah
                                                        </a>
                                                    </div>
                                                </div>

                                                <div class="body-detail-organizational_experience-add"></div>
                                                <div class="body-detail-organizational_experience">
                                                    <div class="pt-0 content-detail-organizational_experience" style="margin-top:10px;" data-id="2230648" id="organizational_experience_2230648">
                                                        <div class="row bg-headername ">
                                                            <div class="col-md-12">
                                                                <h5 class="pull-left"><b>Pengalaman Organisasi 1</b></h5>
                                                                <div id="button-remove-2230648"> <a href="javascript: void(0)" data-id="2230648" class="pull-right delete-organizational_experience d-flex" style="color: white;cursor:pointer"><span class="my-auto">Hapus</span><span style="color: white;" class="material-icons my-auto">delete</span></a> </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="form-group"> <label>Nama Organisasi: </label> <input type="text" name="applicant[2230648][nama_organisasi]" id="nama_organisasi_2230648" placeholder="Nama Organisasi" class="form-control" onkeypress="return isQuotes(event)" value="Tarung Derajat"> </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group"> <label>Jabatan: </label> <select class="form-control select2 jabatan-org select2-hidden-accessible" name="applicant[2230648][jabatan]" id="jabatan_2230648" data-id="2230648" tabindex="-1" aria-hidden="true">
                                                                        <option value="">Pilihan </option>
                                                                        <option value="ketuaumum">Ketua umum </option>
                                                                        <option value="wakil">Wakil ketua umum </option>
                                                                        <option value="sekjen">Sekjen </option>
                                                                        <option value="ketuabidang">Ketua bidang </option>
                                                                        <option value="anggota">Anggota </option>
                                                                        <option value="lainnya">Lain-lain </option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group"> <label>Peran dan Tanggungjawab: </label> <input type="text" name="applicant[2230648][sifat_organisasi]" id="sifat_organisasi_2230648" placeholder="Peran dan Tanggungjawab" class="form-control" onkeypress="return isQuotes(event)" value="Anggota "> </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane" id="skill" role="tabcard" aria-expanded="true">
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <div class="mb-5">
                                            <form id="form-skill" name="form-skill" action="#" class="">
                                                <input type="hidden" name="csrf_sso_tg" value="b08bb7eec9802ef34a68c25a5355fd8a" style="display: none">
                                                <div class="row" style="padding-bottom: 9px;">
                                                    <div class="col-6">
                                                        <h4 class="text-black"><strong>Kompetensi / Skill</strong></h4>
                                                    </div>
                                                    <div class="col-6 my-auto">
                                                        <button type="submit" class="btn btn-primary pull-right btn-sm" style="cursor:pointer;">
                                                            <i class="fa fa-save"></i> Simpan
                                                        </button>

                                                        <a id="add-skill" style="margin-right: 10px; cursor:pointer;" class="pull-right btn btn-outline-default btn-sm">
                                                            <span class="fa fa-plus"> </span> Tambah
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="body-detail-skill-add"></div>
                                                <div class="body-detail-skill">
                                                    <div class="content-detail-skill" style="margin-top:10px;" data-id="3374729" id="skill_3374729">
                                                        <div class="row ">
                                                            <div class="col-md-12">
                                                                <h5 class="pull-left"><b>Kompetensi/Skill 1</b></h5>
                                                                <div id="button-remove-3374729"> <a href="javascript: void(0)" data-id="3374729" class="btn btn-sm btn-danger pull-right delete-skill"> <i class="fa fa-trash"></i> </a> </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-8">
                                                                <div class="form-group"> <label>Keterampilan : </label> <select class="form-control select2 keterampilan-other select2-hidden-accessible" name="applicant[3374729][keterampilan_id]" id="keterampilan" data-id="3374729" data-skill="old" tabindex="-1" aria-hidden="true">

                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="form-group muncul"> <label>Peringkat: </label>
                                                                    <div class="br-wrapper br-theme-fontawesome-stars"><select class="form-control rating" name="applicant[3374729][rating]" id="rating_3374729" data-validation="[NOTEMPTY]" data-validation-message="Tidak boleh kosong" style="display: none;">
                                                                            <option value="">Pilihan </option>
                                                                            <option value="1">Novice</option>
                                                                            <option value="2">Intermediate</option>
                                                                            <option value="3">Advanced</option>
                                                                            <option value="4">Superior</option>
                                                                            <option value="5">Distinguished</option>
                                                                        </select>
                                                                        <div class="br-widget"><a href="#" data-rating-value="1" data-rating-text="Novice" class="br-selected"></a><a href="#" data-rating-value="2" data-rating-text="Intermediate" class="br-selected"></a><a href="#" data-rating-value="3" data-rating-text="Advanced" class="br-selected"></a><a href="#" data-rating-value="4" data-rating-text="Superior" class="br-selected br-current"></a><a href="#" data-rating-value="5" data-rating-text="Distinguished" class=""></a></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6"> <input type="text" class="form-control" onkeypress="return isQuotes(event)" name="applicant[3374729][other_skill]" id="other_text_3374729" style="display:none;" placeholder="Masukkan Kompetensi.."> <input type="text" class="form-control" name="applicant[3374729][other_skill]" id="other_text_2_3374729" style="display:none;" value=""> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>

                                        </div>
                                    </div>

                                    <div class="col-12 col-md-6">
                                        <div class="mb-5">
                                            <form id="form-sertifikasi" name="form-sertifikasi" action="#" class="">
                                                <input type="hidden" name="csrf_sso_tg" value="b08bb7eec9802ef34a68c25a5355fd8a" style="display: none">

                                                <div class="row" style="padding-bottom: 9px;">
                                                    <div class="col-md-6">
                                                        <h4 class="text-black"><strong>Sertifikasi</strong></h4>
                                                    </div>
                                                    <div class="col-md-6 my-auto">
                                                        <button type="submit" class="btn btn-primary pull-right btn-sm" style="cursor:pointer;">
                                                            <i class="fa fa-save"></i> Simpan
                                                        </button>

                                                        <a id="add-sertifikasi" style="margin-right: 10px; cursor: pointer; display: none;" class="pull-right btn btn-outline-default btn-sm">
                                                            <span class="fa fa-plus"> </span> Tambah Sertifikat
                                                        </a>
                                                    </div>
                                                </div>

                                                <div class="body-detail-sertifikasi-add"></div>
                                                <div class="body-detail-sertifikasi">
                                                    <div hidden="" class="alert alert-warning" role="alert">Saudara Belum Melengkapi Data Sertifikasi.</div>
                                                    <div class="content-detail-sertifikasi pt-0" data-id="1" id="sertifikasi_1">
                                                        <div class="row bg-headername ">
                                                            <div class="col-md-12">
                                                                <h5 class="pull-left"><b>Sertifikasi</b></h5>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-8">
                                                                <div class="form-group"> <label>Nama Sertifikat: </label> <select class="form-control select2 serti-others select2-hidden-accessible" name="applicant[1][sertifikasi_id]" id="sertifikasi_id_1" data-id="1" data-serti="new" tabindex="-1" aria-hidden="true">
                                                                        <option value="">Pilihan </option>
                                                                        <option value="26">Certified Profesional in Learning &amp; Prof</option>
                                                                        <option value="999">Certified Mntenance&amp;Reliablty Prof(CMRP)</option>
                                                                        <option value="1002">CERTIFIED HUMAN RESOURCES PROFESSIONAL</option>
                                                                        <option value="1003">OD Certification Program (ODCP)</option>
                                                                        <option value="1004">Organization Development Certificate</option>
                                                                        <option value="1008">Certified Profesional in Learning &amp; Prof</option>
                                                                        <option value="1009">Certified Risk Management Officer (CRMO)</option>
                                                                        <option value="1010">Certified Mntenance&amp;Reliablty Prof(CMRP)</option>
                                                                        <option value="1011">Certified Fraud Examiner Preparation CFE</option>
                                                                        <option value="1012">CERTIFIED HUMAN RESOURCES PROFESSIONAL</option>
                                                                        <option value="1013">OD Certification Program (ODCP)</option>
                                                                        <option value="1014">Organization Development Certificate</option>
                                                                        <option value="1015">Organization Culture Development Certifi</option>
                                                                        <option value="1016">Certified Service Management</option>
                                                                        <option value="1017">Career Management Certification</option>
                                                                        <option value="1018">Certified Assessment Professional</option>
                                                                        <option value="1019">CPLP Certified Performance &amp; Learning Pr</option>
                                                                        <option value="1020">Certified Performance &amp; Learning Profesi</option>
                                                                        <option value="1021">Certified Compensation Professional</option>
                                                                        <option value="1022">Certified Benefit Professional</option>
                                                                        <option value="1023">Certified Professional industrial Relati</option>
                                                                        <option value="1024">Certified Risk Management Professional</option>
                                                                        <option value="1025">Certified Professional Management Accoun</option>
                                                                        <option value="1026">IT Security Certification Preparation</option>
                                                                        <option value="1027">TACERT Customer Certification (1 day)</option>
                                                                        <option value="1028">Well Contril Certification ( IWCF/IADC)</option>
                                                                        <option value="1029">Cisco Certified Network Profesional</option>
                                                                        <option value="1030">Certificate in Occup Safety &amp; Health</option>
                                                                        <option value="1031">CERTIFIED RISK MANAGEMENT PROFESSIONALS</option>
                                                                        <option value="1032">ISO 9001 Lead Auditor IRCA Certified</option>
                                                                        <option value="1033">WORKSHOP LKS BIPARTIT CERTIFICATION</option>
                                                                        <option value="1034">CERTIFIED COMPLIANCE OFFICER</option>
                                                                        <option value="1035">Enterprise Risk Management Certified</option>
                                                                        <option value="1036">Certified Professional in Learning</option>
                                                                        <option value="1037">PMP Certification Preparation &amp; Exam</option>
                                                                        <option value="1038">Certified Internal Auditor (CIA) Review</option>
                                                                        <option value="1039">Certified Human Resources Professional</option>
                                                                        <option value="1040">Certified Ethical Hacker</option>
                                                                        <option value="1041">Certified Ethical Hacker (CEH)</option>
                                                                        <option value="1042">Certified Control Self Assessment</option>
                                                                        <option value="1043">Certified Financial Planner</option>
                                                                        <option value="1044">Microsoft Share Point 2007 Certified</option>
                                                                        <option value="1045">Certified Maintenance Leader</option>
                                                                        <option value="1046">HR Certification Program</option>
                                                                        <option value="1047">Certified Manager</option>
                                                                        <option value="1048"> Technical (ETAP) Engineer Certif</option>
                                                                        <option value="1049">Certified Professional Counsellor</option>
                                                                        <option value="1050">Certified Information Security Manager</option>
                                                                        <option value="1051">CPA (Certified Public Accountant)</option>
                                                                        <option value="1052">Certified Information Syst Security Prof</option>
                                                                        <option value="1053">CSCP (Certified Supply Chain Profesional</option>
                                                                        <option value="1054">Gas Business Management Certificate Prog</option>
                                                                        <option value="1055">Petroleum Management Certificate Program</option>
                                                                        <option value="1056">Certified Purchasing Professional</option>
                                                                        <option value="1057">Certified Strategic Planner</option>
                                                                        <option value="1058">PEMANTAPAN CERTIFIED RISK MANAGEMENT PRO</option>
                                                                        <option value="1059">Certified Human Resources Business</option>
                                                                        <option value="1060">Tutorial Persiapan HRMP &amp; HRBP Certifica</option>
                                                                        <option value="1061">Certified Personal Money Manager</option>
                                                                        <option value="1062">Scaffolding Certification</option>
                                                                        <option value="1063">ERMCP Enterprise Risk Mgt Certified</option>
                                                                        <option value="1064">Certificate in Brand Operation</option>
                                                                        <option value="1065">Program Certificate Business Management</option>
                                                                        <option value="1066">Certificate in sales management</option>
                                                                        <option value="1067">Training Dual Certification Program IFRS</option>
                                                                        <option value="1068">Certificate In Brand Operation</option>
                                                                        <option value="1069">GRP Certification Course GR 1 -</option>
                                                                        <option value="1070">Certified BowTie XP Risk Assessment</option>
                                                                        <option value="1071">IT IL Foundation Certificate</option>
                                                                        <option value="1072">Certified Contact Center Manager</option>
                                                                        <option value="1073">Training Certified Comp TIA Network</option>
                                                                        <option value="1074">Certified Cost Engineer</option>
                                                                        <option value="1075">Certified Coaching &amp; Mentoring Prof. Prg</option>
                                                                        <option value="1076">Certificate in Strategic HR Transf.</option>
                                                                        <option value="1077">The Practitioner's Cert. in Mediation</option>
                                                                        <option value="1078">Lominger Talent Mgt. Certification</option>
                                                                        <option value="1079">Certf. Talent &amp; Competency Professional</option>
                                                                        <option value="1080">Balanced Scorecard Professional Cert.</option>
                                                                        <option value="1081">Certified in Risk Management</option>
                                                                        <option value="1082">Talent Management Certification</option>
                                                                        <option value="1083">Advanced Certificate in Project Mgt</option>
                                                                        <option value="1084">Certified Training Professional</option>
                                                                        <option value="1085">Certified Information Technology Manager</option>
                                                                        <option value="1086">NICF - Certified Business Analysis Prof.</option>
                                                                        <option value="1087">Enterprise Risk Management Certified</option>
                                                                        <option value="1088">Certified International Project Manager</option>
                                                                        <option value="1089">Certificate in Performance Management</option>
                                                                        <option value="1090">Certified International Procurement</option>
                                                                        <option value="1091">ECCSA-EC-Council Certified Security Anl</option>
                                                                        <option value="1092">The ROI Methodology Certification</option>
                                                                        <option value="1093">AP I Certification</option>
                                                                        <option value="1094">AP II Certification</option>
                                                                        <option value="1095">AP III Certification</option>
                                                                        <option value="1096">Training &amp; Certification PTK 007 Rev3</option>
                                                                        <option value="1097">VibrationAnalysisCategory2(SKF)-certifif</option>
                                                                        <option value="1098">VibrationAnalysisCategory3(SKF)-certif</option>
                                                                        <option value="1099">VibrationAnalysisCategory1(SKF)-certif</option>
                                                                        <option value="1100">Uncertainty of Laboratory Testing</option>
                                                                        <option value="1101">Certified Professional Marketer</option>
                                                                        <option value="1102">Loading Master Certified (LPG)</option>
                                                                        <option value="1103">Inspector Certification Program API 510</option>
                                                                        <option value="1104">Inspector Certification Program API 570</option>
                                                                        <option value="1105">Inspector Certification Program API 580</option>
                                                                        <option value="1106">Inspector Certification Program API 653</option>
                                                                        <option value="1107">Pelatihan Loading Master Certified (LPG)</option>
                                                                        <option value="1108">Pelatihan Loading Master Certified (BBM)</option>
                                                                        <option value="1109">Pelatihan Certified Professional Market</option>
                                                                        <option value="1110">Certified Business Analysis Report Prof</option>
                                                                        <option value="1111">Certified KPI Professional (KPIP)</option>
                                                                        <option value="1112">Change Management Professional Certifi</option>
                                                                        <option value="1113">Certified Strategic Planning/ Strategic</option>
                                                                        <option value="1114">Certified Associate in Prjct Mgmt (CAPM)</option>
                                                                        <option value="1115">Project Management Professional Certifie</option>
                                                                        <option value="1116">Balanced Scorecard Master Prof Certifica</option>
                                                                        <option value="1117">Certificate in International Trade and</option>
                                                                        <option value="1118">Certified Forensic Auditor (CFrA)</option>
                                                                        <option value="1119">Certified InformationSystemAuditorReview</option>
                                                                        <option value="1120">Review Certified Public Accountant (CPA)</option>
                                                                        <option value="1121">Pelatihan Certified Forensic Auditor</option>
                                                                        <option value="1122">Sertifikasi Certified Forensic Auditor</option>
                                                                        <option value="1123">Managed Care Certification</option>
                                                                        <option value="1124">Health Promotion Certification</option>
                                                                        <option value="1125">Family Medicine Certification</option>
                                                                        <option value="1126">OD Certified Professional (ODCP)</option>
                                                                        <option value="1127">Certified Professional in Learning &amp; Per</option>
                                                                        <option value="1128">Professional Coach Certification</option>
                                                                        <option value="1129">Certified IASA</option>
                                                                        <option value="1130">Certified CISSP</option>
                                                                        <option value="1131">Certified Information Security Manager</option>
                                                                        <option value="1132">Certified Data Center Expert</option>
                                                                        <option value="1133">Certified Data Center Specialist</option>
                                                                        <option value="1134">Certified Data Center Professional</option>
                                                                        <option value="1135">Certified Information Systems Auditor</option>
                                                                        <option value="1136">SAP ABAP Certification</option>
                                                                        <option value="1137">SAP Process Integration Certification</option>
                                                                        <option value="1138">Certified Tester Expert Lvl (CTEL ISTQB)</option>
                                                                        <option value="1139">Certified Tester Advanced Lvl CTAL ISTQB</option>
                                                                        <option value="1140">Certified Tester Found Lvl CTFL ISTQB</option>
                                                                        <option value="1141">SAP PM Configuration SWOP &amp;Certification</option>
                                                                        <option value="1142">SAP HCM Configuration SWOP&amp;Certification</option>
                                                                        <option value="1143">SAP CO Configuration SWOP &amp;Certification</option>
                                                                        <option value="1144">Global Reporting Initiative (GRI)&amp;Certif</option>
                                                                        <option value="1145">Certified Finance Essential for IR &amp; Cor</option>
                                                                        <option value="1146">Certified Crisis and Risk Communication</option>
                                                                        <option value="1147">Certified Supply Chain &amp; Logistics Profe</option>
                                                                        <option value="1148">Certified International Supply Chain Pro</option>
                                                                        <option value="1149">Certified Proffesional In Supply Mgt</option>
                                                                        <option value="1150">Sertifikasi CITF (Certificate in Interna</option>
                                                                        <option value="1151">IADC Certification</option>
                                                                        <option value="1152">IWCF Certification</option>
                                                                        <option value="1153">H2S Certification</option>
                                                                        <option value="1154">Cathodic Protection Certification</option>
                                                                        <option value="1155">Certification for Cost Estimator</option>
                                                                        <option value="1156">Loading Master BBM Certified</option>
                                                                        <option value="1157">Certified Public Accountant (CPA)</option>
                                                                        <option value="1158">Certified IFRS</option>
                                                                        <option value="1159">Certified Internal Auditor (CIA)</option>
                                                                        <option value="1160">Certified Fraud Examiner</option>
                                                                        <option value="1161">SAP Certified</option>
                                                                        <option value="1162">Certified Risk Management Profesional</option>
                                                                        <option value="1163">Certified Profesional Mgt Accountant</option>
                                                                        <option value="1164">AssociationofCharteredCertifiedAccountan</option>
                                                                        <option value="1165">Project Mgt Professional (Certified)</option>
                                                                        <option value="1166">Certification in Control Self Assessment</option>
                                                                        <option value="1167">Mockup Test Certified Internal Auditor</option>
                                                                        <option value="1168">Petroleum Engineering Certification</option>
                                                                        <option value="1169">'Enterprise Risk Mgt Certified ERMCP</option>
                                                                        <option value="1170">Certified Risk Professional (CRP) by RMC</option>
                                                                        <option value="1171">Certificate for DocumentaryCredit(CDCS)*</option>
                                                                        <option value="1172">Certified Information System AuditorExam</option>
                                                                        <option value="1173">Certified Professional Marketer</option>
                                                                        <option value="1174">SAP Certified Associate - CO</option>
                                                                        <option value="1175">SAP Certified Associate - PM</option>
                                                                        <option value="1176">SAP Certified Associate - HCM</option>
                                                                        <option value="1177">Sertifikasi Shipboard SafetyOfficerTrain</option>
                                                                        <option value="1178">Sertifikasi Certified ContactCenter Spv</option>
                                                                        <option value="1179">Risk, Untercertainty and Decision</option>
                                                                        <option value="1180">US Certified International Professional</option>
                                                                        <option value="1181">Certified Professional Marketer</option>
                                                                        <option value="1182">Certified Professional Marketer</option>
                                                                        <option value="1183">Review Certified Internal Auditor CIA</option>
                                                                        <option value="1184">Project Management Professional Certif</option>
                                                                        <option value="1185">Project Management Professional Certific</option>
                                                                        <option value="1186">Pelatihan CITF (Certificate in Internati)</option>
                                                                        <option value="1187">Assessment Center Assessor Certification</option>
                                                                        <option value="1188">Professional Coaching Certification Prog</option>
                                                                        <option value="1189">Certified Contact Center Team Leader</option>
                                                                        <option value="1190">Pelatihan Certified Contact Center Spv.</option>
                                                                        <option value="1191">International Certificate of InvestorRel</option>
                                                                        <option value="1192">Certified Compliance Profesional (CCP)</option>
                                                                        <option value="1193">Certificate In Fixed Assets</option>
                                                                        <option value="9999">Lainnya</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group"> <label>Skor/ Nilai: </label> <input type="text" name="applicant[1][skor_sertifikasi]" id="skor_sertifikasi_1" placeholder="Skor Sertifikasi" class="form-control" data-idno="1"> </div>
                                                            </div>
                                                            <div class="col-md-6" hidden="">
                                                                <div class="form-group"> <label>Lembaga Sertifikasi: </label> <input type="text" name="applicant[1][lembaga_penerbit]" id="lembaga_penerbit_1" placeholder="Lembaga Sertifikasi" class="form-control" onkeypress="return isQuotes(event)"> </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4" hidden="">
                                                                <div class="form-group"> <label>Tahun Sertifikasi: </label> <input type="text" name="applicant[1][tahun_sertifikasi]" id="tahun_sertifikasi_1" placeholder="Tahun Sertifikasi" class="form-control selectyear datetimepicker1" data-idno="1"> </div>
                                                            </div>
                                                            <div class="col-md-4" hidden="">
                                                                <div class="form-group"> <label>Tahun Akhir: </label> <input type="text" name="applicant[1][tahun_berakhir]" id="tahun_berakhir_1" placeholder="Tahun Akhir" class="form-control datetimepicker2"> <label class="cat__core__control cat__core__control--checkbox" style="padding-top:10px;"> <input type="checkbox" class="seumur_hidup" name="applicant[1][seumur_hidup]" id="seumur_hidup_1" data-id="1"> Seumur Hidup <div class="cat__core__control__indicator"></div> </label> </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane" id="upload" role="tabcard" aria-expanded="true">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="mb-5">
                                            <div class="row m-0">
                                                <div class="col-md-12">
                                                    <h4 class="text-black" style="margin-top: 10px; margin-bottom: 15px;">
                                                        <strong>Data Pendukung</strong>
                                                    </h4>
                                                </div>
                                            </div>


                                            <form id="form_ijazah" name="form_ijazah" action="#" method="POST" class="form-upload" enctype="multipart/form-data">
                                                <input type="hidden" name="csrf_sso_tg" value="b08bb7eec9802ef34a68c25a5355fd8a" style="display: none">
                                                <div class="row">
                                                    <div style="border-bottom: solid 1px #e4e9f0;" class="col-sm-12 p-3">
                                                        <div class="row">
                                                            <div class="col-9">
                                                                <b class="d-flex text-surat">Ijazah/ Surat Keterangan Lulus
                                                                    <span class="ml-2 my-auto asterik"></span>
                                                                </b>
                                                            </div>
                                                            <div class="col-3 text-right">
                                                                <label id="terupload_ijazah" style="background: aliceblue; color: blue; padding: 0px 10px; border-radius: 10px;">Done</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <label class="text-surat"><label class="note">&nbsp;(pdf/docx/doc &amp; maks. 1MB)</label></label>
                                                        <div class="" id="status_ijazah">
                                                            <label id="val_ijazah"><a class="btn btn-sm btn-primary" target="_blank" href="https://recruit.infomedia.co.id/curiculum_vitae/get_document/prev/Yzk2ODRkYWM2MWZkMGMxZTFiMzdlYzYxM2E0MTY1OGYxZjM0Yjc2NjhjOTMwM2M0YmUxN2M0YThlYTkwNGY0ZWMzYjcyN2U0YWVkNGRhOWY0ODdkOGUzYjQ4MWIzOGE2ZjRiOTdhYjYwZDkyMGU5ODY3ODI2MDAyMjU4OGNkNzZYbU9jbzN2YWlrUTBPN3Ftd0QzRFUzSFFtV3BMRmZ4NGtsRlJocmN6U0U0PQ==">Pratinjau File</a> </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4 d-flex my-auto">
                                                        <input type="file" class="form-control file-reset" id="ijazah" name="ijazah" data-validation="[NOTEMPTY]" data-validation-message="Tidak boleh kosong">
                                                        <button id="btn_ijazah" type="button" class="btn btn-primary btn-sm ml-1" style="cursor:pointer;"> Upload </button>
                                                    </div>
                                                </div>
                                            </form>

                                            <form id="form_ktp" name="form_ktp" action="#" method="POST" class="form-upload" enctype="multipart/form-data">
                                                <input type="hidden" name="csrf_sso_tg" value="b08bb7eec9802ef34a68c25a5355fd8a" style="display: none">
                                                <div class="row">
                                                    <div style="border-bottom: solid 1px #e4e9f0;" class="col-sm-12 p-3">
                                                        <div class="row">
                                                            <div class="col-9">
                                                                <b class="d-flex text-surat">KTP<span class="ml-2 my-auto asterik"></span></b>
                                                            </div>
                                                            <div class="col-3 text-right">
                                                                <label id="terupload_ktp" style="background: aliceblue; color: blue; padding: 0px 10px; border-radius: 10px;">Done</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <label class="note">&nbsp;(jpg/jpeg/png &amp; maks. 1MB)</label>
                                                        <div class="" id="status_ktp">
                                                            <label id="val_ktp"><a class="btn btn-sm btn-primary" target="_blank" href="https://recruit.infomedia.co.id/curiculum_vitae/get_document/prev/MDkzOWE1ZDRhZTVlZTY0ZGIzZDU4OTYyNmJmYjY3ODYxMWFjNmIzMTUxMDM2NGQ3Nzc0MDMyOWE4M2M5YTA4MzI2MWYxZTg3ZWRlOGYwMjA1MjFjNTdmMTY4NGVkZTM2NWIzYmFlMzgwNzdmNGQyZjZkMWQxYTAyYzQwYmNhNTBrcWtSa3d1VVZ0RlI5T3p6U0J1K25Gc2l1RndKN09haGk5TEdGVk5Hd2EwPQ==">Pratinjau File</a> </label>
                                                        </div>
                                                        <span id="docsname"></span>
                                                    </div>
                                                    <div class="col-sm-4 d-flex my-auto">
                                                        <input type="file" class="form-control file-reset" id="ktp" name="ktp" data-validation="[NOTEMPTY]" data-validation-message="Tidak boleh kosong">
                                                        <button id="btn_ktp" type="button" class="btn btn-primary" style="cursor:pointer;"> Upload </button>
                                                    </div>
                                                </div>
                                            </form>


                                            <form id="form_transkip" name="form_transkip" action="#" method="POST" class="form-upload" enctype="multipart/form-data">
                                                <input type="hidden" name="csrf_sso_tg" value="b08bb7eec9802ef34a68c25a5355fd8a" style="display: none">
                                                <div class="row">
                                                    <div style="border-bottom: solid 1px #e4e9f0;" class="col-sm-12 p-3">
                                                        <div class="row">
                                                            <div class="col-9">
                                                                <b class="d-flex text-surat">Transkrip Nilai<span class="ml-2 my-auto asterik"></span></b>
                                                            </div>
                                                            <div class="col-3 text-right">
                                                                <label id="terupload_transkip" style="background: aliceblue; color: blue; padding: 0px 10px; border-radius: 10px;">Done</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <label class="text-surat"><label class="note">&nbsp;(pdf/docx/doc &amp; maks. 1MB)</label></label>
                                                        <div class="" id="status_transkip_nilai">
                                                            <label id="val_transkip_nilai"><a class="btn btn-sm btn-primary" target="_blank" href="https://recruit.infomedia.co.id/curiculum_vitae/get_document/prev/NjQwYjRmZWVjYTIzNjQ1NDZlM2ZiNmY5OGIyOGUxODRkZTJlNWJhMWFiNGE3MmI1Njg0OTg4NTE5ODI3ZjU1ZmY5Y2E3M2YyODgzZDljYWJhMjAxYzkxN2NhYTZiYTNkYTQ4MTE0MWYyZDI2YmVjMTA3ZTRhM2ZhOTQzNWMzYzBVY1dVYW9TSmNTN1VVMkYwY205K0pLSEpBN0RVQk00cGppUGpFbCtNNUVJPQ==">Pratinjau File</a> </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4 d-flex my-auto">
                                                        <input type="file" class="form-control file-reset" id="transkip_nilai" name="transkip_nilai" data-validation="[NOTEMPTY]" data-validation-message="Tidak boleh kosong">
                                                        <button id="btn_transkip_nilai" type="button" class="btn btn-primary btn-sm ml-1" style="cursor:pointer;"> Upload </button>
                                                    </div>
                                                </div>
                                            </form>


                                            <form id="form_skck" name="form_skck" action="#" method="POST" class="form-upload" hidden="" enctype="multipart/form-data">
                                                <input type="hidden" name="csrf_sso_tg" value="b08bb7eec9802ef34a68c25a5355fd8a" style="display: none">
                                                <div class="row">
                                                    <div style="border-bottom: solid 1px #e4e9f0;" class="col-sm-12 p-3">
                                                        <div class="row">
                                                            <div class="col-9">
                                                                <b class="text-surat">SKCK</b>
                                                            </div>
                                                            <div class="col-3 text-right">
                                                                <label id="terupload_skck" style="background: aliceblue;color: blue;padding: 0px 10px;border-radius: 10px;display:none">Done</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <label class="text-surat"><label class="note">&nbsp;(pdf/docx/doc &amp; maks. 500KB)</label></label>
                                                        <div class="" id="status_skck">
                                                            <label id="val_skck"></label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4 d-flex my-auto">
                                                        <input type="file" class="form-control file-reset" id="skck" name="skck" data-validation="[NOTEMPTY]" data-validation-message="Tidak boleh kosong">
                                                        <button id="btn_skck" type="button" class="btn btn-primary btn-sm ml-1" style="cursor:pointer;"> Upload </button>
                                                    </div>
                                                </div>
                                            </form>


                                            <form id="form_toefl" name="form_toefl" action="#" method="POST" class="form-upload" enctype="multipart/form-data">
                                                <input type="hidden" name="csrf_sso_tg" value="b08bb7eec9802ef34a68c25a5355fd8a" style="display: none">
                                                <div class="row">
                                                    <div style="border-bottom: solid 1px #e4e9f0;" class="col-sm-12 p-3">
                                                        <div class="row">
                                                            <div class="col-9">
                                                                <b class="text-surat">TOEFL/IELTS</b>
                                                            </div>
                                                            <div class="col-3 text-right">
                                                                <label id="terupload_toefl" style="background: aliceblue;color: blue;padding: 0px 10px;border-radius: 10px;display:none">Done</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <label class="text-surat"><label class="note">&nbsp;(pdf/docx/doc &amp; maks. 500KB)</label></label>
                                                        <div class="" id="status_toefl">
                                                            <label id="val_toefl"></label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4 d-flex my-auto">
                                                        <input type="file" class="form-control file-reset" id="toefl" name="toefl" data-validation="[NOTEMPTY]" data-validation-message="Tidak boleh kosong">
                                                        <button id="btn_toefl" type="button" class="btn btn-primary btn-sm ml-1" style="cursor:pointer;"> Upload </button>
                                                    </div>
                                                </div>
                                            </form>

                                            <form id="form_additional1" name="form_additional1" action="#" method="POST" class="form-upload" enctype="multipart/form-data">
                                                <input type="hidden" name="csrf_sso_tg" value="b08bb7eec9802ef34a68c25a5355fd8a" style="display: none">
                                                <div class="row">
                                                    <div style="border-bottom: solid 1px #e4e9f0;" class="col-sm-12 p-3">
                                                        <div class="row">
                                                            <div class="col-9">
                                                                <b class="text-surat">Dokumen Tambahan 1</b>
                                                            </div>
                                                            <div class="col-3 text-right">
                                                                <label id="terupload_additional1" style="background: aliceblue;color: blue;padding: 0px 10px;border-radius: 10px;display:none">Done</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <label class="text-surat"><label class="note">&nbsp;(Semua Tipe File &amp; maks. 500KB)</label></label>
                                                        <div class="" id="status_additional1">
                                                            <label id="val_additional1"></label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4 d-flex my-auto">
                                                        <input type="file" class="form-control file-reset" id="additional1" name="additional1" data-validation="[NOTEMPTY]" data-validation-message="Tidak boleh kosong">
                                                        <button id="btn_1" type="button" class="btn btn-primary btn-sm ml-1" style="cursor:pointer;"> Upload </button>
                                                    </div>
                                                </div>
                                            </form>


                                            <form id="form_additional2" name="form_additional2" action="#" method="POST" class="form-upload" enctype="multipart/form-data">
                                                <input type="hidden" name="csrf_sso_tg" value="b08bb7eec9802ef34a68c25a5355fd8a" style="display: none">
                                                <div class="row">
                                                    <div style="border-bottom: solid 1px #e4e9f0;" class="col-sm-12 p-3">
                                                        <div class="row">
                                                            <div class="col-9">
                                                                <b class="text-surat">Dokumen Tambahan 2</b>
                                                            </div>
                                                            <div class="col-3 text-right">
                                                                <label id="terupload_additional1" style="background: aliceblue;color: blue;padding: 0px 10px;border-radius: 10px;display:none">Done</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <label class="text-surat"><label class="note">&nbsp;(Semua Tipe File &amp; maks. 500KB)</label></label>
                                                        <div class="" id="status_additional2">
                                                            <label id="val_additional2"></label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4 d-flex my-auto">
                                                        <input type="file" class="form-control file-reset" id="additional2" name="additional2" data-validation="[NOTEMPTY]" data-validation-message="Tidak boleh kosong">
                                                        <button id="btn_2" type="button" class="btn btn-primary btn-sm ml-1" style="cursor:pointer;"> Upload </button>
                                                    </div>
                                                </div>
                                            </form>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <span class="d-flex"><label class="asterik my-auto pull-left"> </label>&nbsp; Field wajib diisi</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>


                    </div>

                </div>
            </div>
        </div>



    </section>

</div>
<script>
    $.get("{{ url('main/regencies') }}",
        function(data, txtStatus, jqXHR) {
            dataEmp = data;
            data.forEach((itm, idx) => {
                let label = `${itm.name}`;
                $("#lokasi_penempatan").append($('<option></option>').val(itm.id).html(label));
                $("#kota_education").append($('<option></option>').val(itm.id).html(label));
                $("#city_now").append($('<option></option>').val(itm.id).html(label));
                $("#alamat_perusahaan").append($('<option></option>').val(itm.id).html(label));
            })
        }
    );
    $.get("{{ url('main/degree') }}",
        function(data, txtStatus, jqXHR) {
            dataEmp = data;
            data.forEach((itm, idx) => {
                let label = `${itm.name}`;
                $("#gelar_1").append($('<option></option>').val(itm.id).html(label));
                $("#gelar_2").append($('<option></option>').val(itm.id).html(label));
                $("#gelar_3").append($('<option></option>').val(itm.id).html(label));
            })
        }
    );
    $.get("{{ url('main/provinces') }}",
        function(data, txtStatus, jqXHR) {
            dataEmp = data;
            data.forEach((itm, idx) => {
                let label = `${itm.name}`;
                $("#province_now").append($('<option></option>').val(itm.id).html(label));
            })
        }
    );
    $.get("{{ url('main/country') }}",
        function(data, txtStatus, jqXHR) {
            dataEmp = data;
            data.forEach((itm, idx) => {
                let label = `${itm.name}`;
                $("#country_education").append($('<option></option>').val(itm.id).html(label));
                $("#country_job").append($('<option></option>').val(itm.id).html(label));
            })
        }
    );
    $.get("{{ url('main/districts') }}",
        function(data, txtStatus, jqXHR) {
            dataEmp = data;
            data.forEach((itm, idx) => {
                let label = `${itm.name}`;
                $("#village_now").append($('<option></option>').val(itm.id).html(label));
            })
        }
    );
    $.get("{{ url('main/education') }}",
        function(data, txtStatus, jqXHR) {
            dataEmp = data;
            data.forEach((itm, idx) => {
                let label = `${itm.name}`;
                $("#education_level").append($('<option></option>').val(itm.id).html(label));
            })
        }
    );
    $.get("{{ url('main/faculty') }}",
        function(data, txtStatus, jqXHR) {
            dataEmp = data;
            data.forEach((itm, idx) => {
                let label = `${itm.name}`;
                $("#fakultas").append($('<option></option>').val(itm.id).html(label));
            })
        }
    );
    $.get("{{ url('main/major') }}",
        function(data, txtStatus, jqXHR) {
            dataEmp = data;
            data.forEach((itm, idx) => {
                let label = `${itm.name}`;
                $("#major").append($('<option></option>').val(itm.id).html(label));
            })
        }
    );
    $.get("{{ url('main/skills') }}",
        function(data, txtStatus, jqXHR) {
            dataEmp = data;
            data.forEach((itm, idx) => {
                let label = `${itm.name}`;
                $("#keterampilan").append($('<option></option>').val(itm.id).html(label));
            })
        }
    );

    $(document).ready(function() {

        // Personal Data 
        function PersonalData() {
            $.ajax({
                url: "{{ url('main/personaldata') }}",
                method: "POST",
                data: {
                    "_token": "{{ csrf_token() }}"
                },
                beforeSend: function() {
                    loaderSending()
                },
                complete: function() {
                    $.unblockUI();
                },
                success: function(res) {
                    $("#id_card").val(res.id_card);
                    $("#fullname").val(res.fullname);
                    $("#email").val(res.email)
                    $("#phone").val(res.phone);
                    $("#phone_wa").val(res.phone_wa);
                    $("#born_place").val(res.born_place);
                    $("#born_date").val(res.born_date);
                    $("#gender").val(res.gender).trigger('change');
                    $("#religion").val(res.religion).trigger('change');
                    $("#status_married").val(res.status_married).trigger('change');
                    $("#lokasi_penempatan").val(res.lokasi_penempatan).trigger('change');
                    $("#gelar_1").val(res.gelar_1).trigger('change');
                    $("#gelar_2").val(res.gelar_2).trigger('change');
                    $("#gelar_3").val(res.gelar_3).trigger('change');
                    $("#city_trip").val(res.city_trip).trigger('change');
                    $("#linkedin").val(res.linkedin);
                    $("#facebook").val(res.facebook);
                    $("#twitter").val(res.twitter);
                    $("#instagram").val(res.instagram);
                },
                error: function(xhr, desc, err) {
                    var respText = "";
                    try {
                        let jsonResponse = JSON.parse(xhr.responseText);
                        respText = jsonResponse.error || xhr.responseText;
                    } catch (e) {
                        respText = xhr.responseText;
                    }
                    respText = respText.replaceAll("_n_", "<br/>");
                },
            })
        }
        PersonalData()

        // Update Personal Data
        $("#form-personal-information").on('submit', function(e) {
            e.preventDefault();
            var form = document.getElementById("form-personal-information");
            $.ajax({
                url: "{{ url('main/updatepersonaldata') }}",
                type: 'POST',
                contentType: false,
                processData: false,
                data: new FormData(form),
                async: false,
                beforeSend: function() {
                    loaderSending()
                },
                complete: function() {
                    $.unblockUI();
                },
                success: function(data) {
                    if (data.success) {
                        swal({
                            title: "Berhasil",
                            text: "Data Update",
                            icon: "success",
                            button: "Ok",
                        });
                    }
                },
                error: function(xhr, desc, err) {
                    var respText = "";
                    try {
                        let jsonResponse = JSON.parse(xhr.responseText);
                        respText = jsonResponse.error || xhr.responseText;
                    } catch (e) {
                        respText = xhr.responseText;
                    }

                    respText = respText.replaceAll("_n_", "<br/>");
                    swal({
                        title: "Error " + xhr.status,
                        text: respText,
                        icon: "error",
                        button: "Ok",
                    });
                },
            })
        })

        // Address 
        function Address() {
            $.ajax({
                url: "{{ url('main/address') }}",
                method: "POST",
                data: {
                    "_token": "{{ csrf_token() }}"
                },
                beforeSend: function() {
                    loaderSending()
                },
                complete: function() {
                    $.unblockUI();
                },
                success: function(res) {
                    $("#address_now").val(res.address_now);
                    $("#phone_now").val(res.phone_now);
                    $("#phone_home_now").val(res.phone_home_now);
                    $("#zip_code_now").val(res.zip_code_now);
                    $("#province_now").val(res.province_now).trigger('change');
                    $("#city_now").val(res.city_now).trigger('change');
                    $("#village_now").val(res.village_now).trigger('change');
                },
                error: function(xhr, desc, err) {
                    var respText = "";
                    try {
                        let jsonResponse = JSON.parse(xhr.responseText);
                        respText = jsonResponse.error || xhr.responseText;
                    } catch (e) {
                        respText = xhr.responseText;
                    }

                    respText = respText.replaceAll("_n_", "<br/>");
                    console.log(respText);
                    // swal({
                    //     title: "Error " + xhr.status,
                    //     text: respText,
                    //     icon: "error",
                    //     button: "Ok",
                    // });
                },
            })
        }
        Address()


        // Update Address
        $("#form-address2").on('submit', function(e) {
            e.preventDefault();
            var form = document.getElementById("form-address2");
            $.ajax({
                url: "{{ url('main/updateaddress') }}",
                type: 'POST',
                contentType: false,
                processData: false,
                data: new FormData(form),
                async: false,
                beforeSend: function() {
                    loaderSending()
                },
                complete: function() {
                    $.unblockUI();
                },
                success: function(data) {
                    if (data.success) {
                        swal({
                            title: "Berhasil",
                            text: "Data Update",
                            icon: "success",
                            button: "Ok",
                        });
                    }
                },
                error: function(xhr, desc, err) {
                    var respText = "";
                    try {
                        let jsonResponse = JSON.parse(xhr.responseText);
                        respText = jsonResponse.error || xhr.responseText;
                    } catch (e) {
                        respText = xhr.responseText;
                    }

                    respText = respText.replaceAll("_n_", "<br/>");
                    swal({
                        title: "Error " + xhr.status,
                        text: respText,
                        icon: "error",
                        button: "Ok",
                    });
                },
            })
        })

        $('.select2').select2();
        $('.datetimepicker1,.datetimepicker2').datetimepicker({
            format: 'YYYY', // Only show the year
            viewMode: 'years' // Start view mode at years
        });

        $('.datetimepicker11,.selectymd').datetimepicker({
            format: 'YYYY-MM-DD', // Only show the year
        });
    });
</script>
@endsection