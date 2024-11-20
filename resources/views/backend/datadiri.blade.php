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
                                        <a id="pp_user" href="" class="cat__core__avatar cat__core__avatar--110 cat__core__avatar--border-white d-block mx-auto" style="width: 7rem;height: 7rem;">
                                            <img src="{{ asset('photo/'. $personal->photo) }}" alt="" style="object-fit:cover;">
                                            <span class="complete complete_pp material-icons pull-right icon-complete-pp"></span></a>
                                        <div class="text-center mt-3">
                                            <h5>Simple CV Version</h5>
                                            <a href="main#curiculum_vitae/preview" id="$id" class="btn btn-sm btn-primary mt-2">Preview CV</a>
                                            <a href="{{ url('main/account') }}" class="btn btn-pp btn-sm btn-outline-primary mt-2">Photo Profile</a>
                                        </div>
                                    </span>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a id="nav_menu_data_diri" class="nav-link change-menu-detail active " href="javascript: void(0);" data-toggle="tab" data-target="#personal_information" role="tab"> Data Diri <span class="complete material-icons pull-right complete_datadiri" style="color: green;background: aliceblue;border-radius: 5px;"></span></a>

                            </li>
                            <li class="nav-item">
                                <a id="nav_menu_address" class="nav-link change-menu-detail" href="javascript: void(0);" data-toggle="tab" data-target="#address2" role="tab"> Alamat &nbsp;
                                    <span class="complete material-icons pull-right complete_alamat" style="color: green;background: aliceblue;border-radius: 5px;"></span></a>
                            </li>
                            <li class="nav-item">
                                <a id="nav_menu_pendidikan" class="nav-link change-menu-detail" href="javascript: void(0);" data-toggle="tab" data-target="#education" role="tab"> Pendidikan &nbsp; <span class="complete complete_pendidikan material-icons pull-right" style="color: green;background: aliceblue;border-radius: 5px;"></span></a>
                            </li>
                            <li class="nav-item">
                                <a id="nav_menu_pengalaman_kerja" class="nav-link change-menu-detail" href="javascript: void(0);" data-toggle="tab" data-target="#experience" role="tab">
                                    Pengalaman Kerja <span class="complete material-icons pull-right complete_experience" style="color: green;background: aliceblue;border-radius: 5px;"></span></a>
                            </li>
                            <li class="nav-item">
                                <a id="nav_menu_organisasi" class="nav-link change-menu-detail" href="javascript: void(0);" data-toggle="tab" data-target="#organizational_experience" role="tab"> Pengalaman Organisasi<span class="complete material-icons pull-right complete_organisasi" style="color: green;background: aliceblue;border-radius: 5px;"></span> </a>
                            </li>

                            <li class="nav-item">
                                <a id="nav_menu_kompetensi_sertifikasi" class="nav-link change-menu-detail" href="javascript: void(0);" data-toggle="tab" data-target="#skill" role="tab"> Kompetensi dan Sertifikasi<span class="complete material-icons pull-right complete_skill" style="color: green;background: aliceblue;border-radius: 5px;"></span> </a>
                            </li>

                            <li class="nav-item">
                                <a id="nav_menu_data_pendukung" class="nav-link change-menu-detail" href="javascript: void(0);" data-toggle="tab" data-target="#upload" role="tab"> Data Pendukung <span class="complete material-icons pull-right complete_document" style="color: green;background: aliceblue;border-radius: 5px;"></span></a>
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

                                            <form id="form-education" name="form-education" method="post" action="#" class="">
                                                @csrf
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
                                                <!-- this for add education -->
                                                <div class="body-detail-education-add"></div>
                                                <!-- this for list education -->
                                                <div class="body-detail-education">

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
                                                    @csrf
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
                                                @csrf
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

                                                <div class="body-detail-organizational_experience">

                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane" id="skill" role="tabcard" aria-expanded="true">
                                <div class="row">
                                    <div class="col-12 col-md-12">
                                        <div class="mb-3">
                                            <form id="form-skill" name="form-skill" action="#" class="">
                                                @csrf
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
                                                @csrf
                                                <div class="row">
                                                    <div style="border-bottom: solid 1px #e4e9f0;" class="col-sm-12 p-3">
                                                        <div class="row">
                                                            <div class="col-9">
                                                                <b class="d-flex text-surat">Ijazah/ Surat Keterangan Lulus
                                                                    <span class="ml-2 my-auto asterik"></span>
                                                                </b>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <label class="text-surat"><label class="note">&nbsp;(pdf/docx/doc &amp; maks. 2MB)</label></label>
                                                        <div class="" id="status_ijazah">

                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4 d-flex my-auto">
                                                        <input type="text" hidden name="document" value="ijazah">
                                                        <input type="file" class="form-control file-reset" id="ijazah" name="name_file">
                                                        <button id="btn_ijazah" type="submit" class="btn btn-primary btn-sm ml-1" style="cursor:pointer;"> Upload </button>
                                                    </div>
                                                </div>
                                            </form>

                                            <form id="form_ktp" name="form_ktp" action="#" method="POST" class="form-upload" enctype="multipart/form-data">
                                                @csrf
                                                <div class="row">
                                                    <div style="border-bottom: solid 1px #e4e9f0;" class="col-sm-12 p-3">
                                                        <div class="row">
                                                            <div class="col-9">
                                                                <b class="d-flex text-surat">KTP<span class="ml-2 my-auto asterik"></span></b>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <label class="note">&nbsp;(jpg/jpeg/png &amp; maks. 1MB)</label>
                                                        <div class="" id="status_ktp">

                                                        </div>
                                                        <span id="docsname"></span>
                                                    </div>
                                                    <div class="col-sm-4 d-flex my-auto">
                                                        <input type="text" hidden name="document" value="ktp">
                                                        <input type="file" class="form-control file-reset" id="ktp" name="name_file">
                                                        <button id="btn_ktp" type="submit" class="btn btn-primary" style="cursor:pointer;"> Upload </button>
                                                    </div>
                                                </div>
                                            </form>


                                            <form id="form_transkrip" name="form_transkip" action="#" method="POST" class="form-upload" enctype="multipart/form-data">
                                                @csrf
                                                <div class="row">
                                                    <div style="border-bottom: solid 1px #e4e9f0;" class="col-sm-12 p-3">
                                                        <div class="row">
                                                            <div class="col-9">
                                                                <b class="d-flex text-surat">Transkrip Nilai<span class="ml-2 my-auto asterik"></span></b>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <label class="text-surat"><label class="note">&nbsp;(pdf/docx/doc &amp; maks. 1MB)</label></label>
                                                        <div class="" id="status_transkrip_nilai">

                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4 d-flex my-auto">
                                                        <input type="text" hidden name="document" value="transkrip_nilai">
                                                        <input type="file" class="form-control file-reset" id="transkip_nilai" name="name_file">
                                                        <button id="btn_transkip_nilai" type="submit" class="btn btn-primary btn-sm ml-1" style="cursor:pointer;"> Upload </button>
                                                    </div>
                                                </div>
                                            </form>


                                            <form id="form_skck" name="form_skck" action="#" method="POST" class="form-upload" enctype="multipart/form-data">
                                                @csrf
                                                <div class="row">
                                                    <div style="border-bottom: solid 1px #e4e9f0;" class="col-sm-12 p-3">
                                                        <div class="row">
                                                            <div class="col-9">
                                                                <b class="text-surat">SKCK</b>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <label class="text-surat"><label class="note">&nbsp;(pdf/docx/doc &amp; maks. 500KB)</label></label>
                                                        <div class="" id="status_skck">

                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4 d-flex my-auto">
                                                        <input type="text" hidden name="document" value="skck">
                                                        <input type="file" class="form-control file-reset" id="transkip_nilai" name="name_file">
                                                        <button id="btn_skck" type="submit" class="btn btn-primary btn-sm ml-1" style="cursor:pointer;"> Upload </button>
                                                    </div>
                                                </div>
                                            </form>


                                            <form id="form_toefl" name="form_toefl" action="#" method="POST" class="form-upload" enctype="multipart/form-data">
                                                @csrf
                                                <div class="row">
                                                    <div style="border-bottom: solid 1px #e4e9f0;" class="col-sm-12 p-3">
                                                        <div class="row">
                                                            <div class="col-9">
                                                                <b class="text-surat">TOEFL/IELTS</b>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <label class="text-surat"><label class="note">&nbsp;(pdf/docx/doc &amp; maks. 500KB)</label></label>
                                                        <div class="" id="status_toefl">

                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4 d-flex my-auto">
                                                        <input type="text" hidden name="document" value="toefl">
                                                        <input type="file" class="form-control file-reset" id="transkip_nilai" name="name_file">
                                                        <button id="btn_toefl" type="submit" class="btn btn-primary btn-sm ml-1" style="cursor:pointer;"> Upload </button>
                                                    </div>
                                                </div>
                                            </form>

                                            <form id="form_additional1" name="form_additional1" action="#" method="POST" class="form-upload" enctype="multipart/form-data">
                                                @csrf
                                                <div class="row">
                                                    <div style="border-bottom: solid 1px #e4e9f0;" class="col-sm-12 p-3">
                                                        <div class="row">
                                                            <div class="col-9">
                                                                <b class="text-surat">Dokumen Tambahan 1</b>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <label class="text-surat"><label class="note">&nbsp;(Semua Tipe File &amp; maks. 500KB)</label></label>
                                                        <div class="" id="status_document_add1">

                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4 d-flex my-auto">
                                                        <input type="text" hidden name="document" value="document_add1">
                                                        <input type="file" class="form-control file-reset" id="transkip_nilai" name="name_file">
                                                        <button id="btn_1" type="submit" class="btn btn-primary btn-sm ml-1" style="cursor:pointer;"> Upload </button>
                                                    </div>
                                                </div>
                                            </form>


                                            <form id="form_additional2" name="form_additional2" action="#" method="POST" class="form-upload" enctype="multipart/form-data">
                                                @csrf
                                                <div class="row">
                                                    <div style="border-bottom: solid 1px #e4e9f0;" class="col-sm-12 p-3">
                                                        <div class="row">
                                                            <div class="col-9">
                                                                <b class="text-surat">Dokumen Tambahan 2</b>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <label class="text-surat"><label class="note">&nbsp;(Semua Tipe File &amp; maks. 500KB)</label></label>
                                                        <div class="" id="status_document_add2">

                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4 d-flex my-auto">
                                                        <input type="text" hidden name="document" value="document_add2">
                                                        <input type="file" class="form-control file-reset" id="transkip_nilai" name="name_file">
                                                        <button id="btn_2" type="submit" class="btn btn-primary btn-sm ml-1" style="cursor:pointer;"> Upload </button>
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
    @include('backend.partials.PartialsDataDiri')
</div>
<script>
    $(document).ready(function() {

        function checkedData() {
            Promise.all([
                $.get("{{ url('main/cekDataFull') }}"),
            ]).then(([documentData]) => {
                for (let i = 0; i < documentData.length; i++) {
                    console.log(documentData[i]);
                    if (documentData[i].count > 0) {
                        $("." + documentData[i].name).html('check');
                    }
                }

            })
        }
        checkedData()

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
                    // Fetch education and country data in parallel
                    Promise.all([
                        $.get("{{ url('main/regencies') }}"),
                        $.get("{{ url('main/degree') }}"),
                    ]).then(([regenciesData, degreeData]) => {
                        // Populate education level regencies
                        populateDropdown("#lokasi_penempatan", regenciesData);
                        // Populate education level degree
                        populateDropdown("#gelar_1", degreeData);
                        populateDropdown("#gelar_2", degreeData);
                        populateDropdown("#gelar_3", degreeData);
                        $("#lokasi_penempatan").val(res.lokasi_penempatan).trigger('change');
                        $("#gelar_1").val(res.gelar_1).trigger('change');
                        $("#gelar_2").val(res.gelar_2).trigger('change');
                        $("#gelar_3").val(res.gelar_3).trigger('change');
                    }).catch(error => {
                        console.error("Error fetching data:", error);
                    });
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
                    // Fetch education and country data in parallel
                    Promise.all([
                        $.get("{{ url('main/regencies') }}"),
                        $.get("{{ url('main/provinces') }}"),
                        $.get("{{ url('main/districts') }}"),
                    ]).then(([regenciesData, provincesData, districtsData]) => {
                        // Populate education level proviences
                        populateDropdown("#province_now", provincesData);
                        // Populate education level country
                        populateDropdown("#city_now", regenciesData);
                        // Populate education level districts
                        populateDropdown("#village_now", districtsData);
                        $("#province_now").val(res.province_now).trigger('change');
                        $("#city_now").val(res.city_now).trigger('change');
                        $("#village_now").val(res.village_now).trigger('change');

                    }).catch(error => {
                        console.error("Error fetching data:", error);
                    });
                    $("#address_now").val(res.address_now);
                    $("#phone_now").val(res.phone_now);
                    $("#phone_home_now").val(res.phone_home_now);
                    $("#zip_code_now").val(res.zip_code_now);

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

        // Address 
        function Education() {
            $.ajax({
                url: "{{ url('main/educationCandidate') }}",
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
                    const html = res.map((data, i) => listEducation(i, data)).join('');

                    $(".body-detail-education").append(html);

                    // Fetch education and country data in parallel
                    Promise.all([
                        $.get("{{ url('main/education') }}"),
                        $.get("{{ url('main/country') }}"),
                        $.get("{{ url('main/faculty') }}"),
                        $.get("{{ url('main/major') }}"),
                        $.get("{{ url('main/regencies') }}"),
                    ]).then(([educationData, countryData, facultyData, majorData, regenciesData]) => {

                        populateDropdown(".fakultas", facultyData);

                        // Initialize Select2 on the dynamically added elements
                        $('.select2').select2();
                        res.forEach((data, index) => {
                            var idEnd = (index + 1);
                            populateDropdown("#level_education_" + idEnd, educationData);
                            // Populate country dropdowns
                            populateDropdown("#country_edu_" + idEnd, countryData);
                            // Populate major_ dropdowns
                            populateDropdown("#major_edu_" + idEnd, majorData);
                            // Populate city_ dropdowns
                            populateDropdown("#city_edu_" + idEnd, regenciesData);
                            $("#level_education_" + (index + 1)).val(data.level_education).trigger("change");
                            $("#country_edu_" + (index + 1)).val(data.country_edu).trigger("change");
                            $("#faculty_edu_" + (index + 1)).val(data.faculty).trigger("change");
                            $("#major_edu_" + (index + 1)).val(data.major).trigger("change");
                            $("#campus_edu_" + (index + 1)).val(data.campus);
                            $("#type_campus_edu_" + (index + 1)).val(data.type_campus).trigger("change");
                            $("#city_edu_" + (index + 1)).val(data.city).trigger("change");
                            $("#ipk_" + (index + 1)).val(data.ipk);
                            $("#from_ipk_" + (index + 1)).val(data.from_ipk);
                            $("#start_year_" + (index + 1)).val(moment(data.start_year).format("YYYY"));
                            $("#end_year_" + (index + 1)).val(moment(data.end_year).format("YYYY"));
                            $("#country_edu_" + (index + 1)).val(data.country_edu).trigger("change");
                        });
                    }).catch(error => {
                        console.error("Error fetching data:", error);
                    });



                    // Initialize select2 on dynamically added elements
                    // $('.select2').select2();
                    $('.datetimepicker1,.datetimepicker2').datetimepicker({
                        format: 'YYYY', // Only show the year
                        viewMode: 'years' // Start view mode at years
                    });


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
        }
        Education()

        // Add Education
        $(document).on("click", "#add-education", function() {

            var lastId = $('div[id^="education_"]').last().attr('id');
            var lastNumber = lastId ? lastId.split('_')[1] : 0;
            var html = listEducation(parseInt(lastNumber), [{}])
            $(".body-detail-education").append(html);
            //Fetch education and country data in parallel
            Promise.all([
                $.get("{{ url('main/education') }}"),
                $.get("{{ url('main/country') }}"),
                $.get("{{ url('main/faculty') }}"),
                $.get("{{ url('main/major') }}"),
                $.get("{{ url('main/regencies') }}"),
            ]).then(([educationData, countryData, facultyData, majorData, regenciesData]) => {
                var idEnd = parseInt(lastNumber) + 1;
                // Populate education level dropdowns
                populateDropdown("#level_education_" + idEnd, educationData);
                // Populate country dropdowns
                populateDropdown("#country_edu_" + idEnd, countryData);
                // Populate faculty dropdowns
                populateDropdown("#faculty_edu_" + idEnd, facultyData);
                // Populate major_ dropdowns
                populateDropdown("#major_edu_" + idEnd, majorData);
                // Populate city_ dropdowns
                populateDropdown("#city_edu_" + idEnd, regenciesData);

                // Initialize Select2 on the dynamically added elements
                $('.select2').select2();

                $('.datetimepicker1,.datetimepicker2').datetimepicker({
                    format: 'YYYY', // Only show the year
                    viewMode: 'years' // Start view mode at years
                });
            }).catch(error => {
                console.error("Error fetching data:", error);
            });



        });
        // Remove Education
        $(document).on("click", ".delete-education", function() {
            const id = $(this).data("id");
            // Remove the parent div of the clicked delete button
            $(this).closest('#education_' + id).remove();
        });
        // Update Education
        $("#form-education").on('submit', function(e) {
            e.preventDefault();
            var form = document.getElementById("form-education");
            $.ajax({
                url: "{{ url('main/updateEducation') }}",
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

        function listEducation(index, data) {
            return `<div class="content-detail pt-0" style="margin-top:10px;" data-id="${index+1}" id="education_${index+1}">
                <div class="row bg-headername ">
                    <div class="col-md-12">
                        <h5 class="pull-left"><b>Pendidikan ${index+1}</b></h5>
                        <div class="button-remove"> <a href="javascript: void(0)" class="pull-right delete-education d-flex" data-id="${index+1}" style="color: white;cursor:pointer"><span class="my-auto">Hapus</span><span style="color: white;" class="material-icons my-auto">delete</span></a> </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group"> <label class="d-flex">Jenjang Pendidikan<span class="ml-2 my-auto "></span></label>
                        <select class="education_level form-control select2" name="level_education[]" id="level_education_${index+1}" tabindex="-1" aria-hidden="true">
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group"> <label class="d-flex">Nama Sekolah/ Perguruan Tinggi<span class="ml-2 my-auto asterik"></span></label>
                            <input  type="text" name="campus[]" class="form-control" id="campus_edu_${index+1}">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group"> <label>Jenis Perguruan Tinggi:</label> <select class="form-control select2" name="type_campus[]" id="type_campus_edu_${index+1}" tabindex="-1" aria-hidden="true">
                                <option value="">Pilihan </option>
                                <option value="ptn">PTN (Negeri) </option>
                                <option value="pts">PTS (Swasta) </option>
                                <option value="ptln">PTLN (Luar Negeri) </option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group"> <label class="d-flex">Fakultas<span class="ml-2 my-auto asterik"></span></label>
                        <select name="faculty[]" id="faculty_edu_${index+1}" class="fakultas form-control select2" tabindex="-1" aria-hidden="true">
                                <option value="">Pilihan </option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group"> <label class="d-flex">Jurusan<span class="ml-2 my-auto asterik"></span></label>
                        <select  name="major[]" id="major_edu_${index+1}" class="major form-control select2 " tabindex="-1" aria-hidden="true">
                                <option value="">Pilihan </option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group"> <label class="d-flex">IPK/Nilai<span class="ml-2 my-auto asterik"></span></label> <input type="text" name="ipk[]" id="ipk_${index+1}" placeholder="Minimal IPK/Nilai" class="form-control cek_decimal">
                        </div>
                    </div>
                    <div class="col-xs-1">
                        <div class="form-group"> <label> dari </label> </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group"> <label class="d-flex">Maksimal<span class="ml-2 my-auto asterik"></span></label> <input type="text" placeholder="Maksimal IPK/Nilai" name="from_ipk[]" id="from_ipk_${index+1}" class="form-control"> </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group"> <label>Negara: </label>
                            <select name="country_edu[]" id="country_edu_${index+1}" class="form-control country_edu select2" tabindex="-1" aria-hidden="true"></select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group aw"> <label>Kota/Kabupaten: </label> <select name="city[]" id="city_edu_${index+1}" class="form-control select2 kota_education" tabindex="-1" aria-hidden="true"></select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group"> <label>Tahun Pendidikan: </label>
                            <div class="row">
                                <div class="col-sm-6 date"> <input type="text" placeholder="Tahun Mulai" name="start_year[]" id="start_year_${index+1}" class="form-control selectyear datetimepicker1"> </div>
                                <div class="col-sm-6 date"> <input type="text" placeholder="Tahun Akhir" name="end_year[]" id="end_year_${index+1}" class="form-control datetimepicker2"> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6"> <input type="text" class="form-control" name="applicant[1503551][other_edu]" id="other_text_kota_1503551" style="display:none;" placeholder="Masukkan Kota Lainnya.."> <input type="text" class="form-control" name="applicant[1503551][other_edu]" id="other_text_kota_2_1503551" style="display:none;" value=""> </div>
                </div> <span class="d-flex"><label class="asterik my-auto pull-left"> </label>&nbsp; Field wajib diisi</span>
            </div>`;
        }


        // Added Working History
        $(document).on("click", "#add-experience", function() {

            var lastId = $('div[id^="experience_"]').last().attr('id');
            var lastNumber = lastId ? lastId.split('_')[1] : 0;
            var html = listWorkingHistroy(parseInt(lastNumber), [{}])
            $(".body-detail-experience").append(html);
            // Fetch education and country data in parallel
            Promise.all([
                $.get("{{ url('main/country') }}"),
                $.get("{{ url('main/regencies') }}"),
                $.get("{{ url('main/typeWork') }}"),
                $.get("{{ url('main/workIndustry') }}"),
            ]).then(([countryData, regenciesData, typeWorkData, industryData]) => {


                // Initialize Select2 on the dynamically added elements
                $('.select2').select2();
                $('.selectymd').datetimepicker({
                    format: 'YYYY-MM-DD', // Only show the year
                });
                var idEnd = (parseInt(lastNumber) + 1);
                console.log(idEnd)
                populateDropdown("#country_job_" + idEnd, countryData);
                // Populate country dropdowns
                populateDropdown("#location_job_" + idEnd, regenciesData);
                populateDropdown("#type_job_" + idEnd, typeWorkData);
                populateDropdown("#industry_" + idEnd, industryData);
            }).catch(error => {
                console.error("Error fetching data:", error);
            });
        })

        // Remove Working History
        $(document).on("click", ".delete-experience", function() {
            const id = $(this).data("id");
            // Remove the parent div of the clicked delete button
            $(this).closest('#experience_' + id).remove();
        });

        // Working History  
        function WorkingHistroy() {
            $.ajax({
                url: "{{ url('main/workingHistoryCandidate') }}",
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
                    const html = res.map((data, i) => listWorkingHistroy(i, data)).join('');

                    $(".body-detail-experience").append(html);
                    // Fetch education and country data in parallel
                    Promise.all([
                        $.get("{{ url('main/country') }}"),
                        $.get("{{ url('main/regencies') }}"),
                        $.get("{{ url('main/typeWork') }}"),
                        $.get("{{ url('main/workIndustry') }}"),
                    ]).then(([countryData, regenciesData, typeWorkData, industryData]) => {


                        // Initialize Select2 on the dynamically added elements
                        $('.select2').select2();
                        $('.selectymd').datetimepicker({
                            format: 'YYYY-MM-DD', // Only show the year
                        });
                        res.forEach((data, index) => {
                            var idEnd = (index + 1);
                            populateDropdown("#country_job_" + idEnd, countryData);
                            // Populate country dropdowns
                            populateDropdown("#location_job_" + idEnd, regenciesData);
                            populateDropdown("#type_job_" + idEnd, typeWorkData);
                            populateDropdown("#industry_" + idEnd, industryData);

                            $("#country_job_" + (index + 1)).val(data.country_job).trigger("change");
                            $("#location_job_" + (index + 1)).val(data.location_job).trigger("change");
                            $("#type_job_" + (index + 1)).val(data.type_job).trigger("change");
                            $("#industry_" + (index + 1)).val(data.industry).trigger("change");
                            $("#company_job_" + (index + 1)).val(data.company_job)
                            $("#position_job_" + (index + 1)).val(data.position_job)
                            $("#start_year_job_" + (index + 1)).val(data.start_year_job)
                            $("#end_year_job_" + (index + 1)).val(data.end_year_job)
                            $("#sallary_" + (index + 1)).val(data.sallary)
                            $("#reason_stop_" + (index + 1)).val(data.reason_stop)
                            $("#description_" + (index + 1)).val(data.description)


                        });
                    }).catch(error => {
                        console.error("Error fetching data:", error);
                    });



                    // Initialize select2 on dynamically added elements
                    // $('.select2').select2();
                    $('.datetimepicker1,.datetimepicker2').datetimepicker({
                        format: 'YYYY', // Only show the year
                        viewMode: 'years' // Start view mode at years
                    });


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
        }
        WorkingHistroy()

        // Update Experience
        $("#form-experience").on('submit', function(e) {
            e.preventDefault();
            var form = document.getElementById("form-experience");
            $.ajax({
                url: "{{ url('main/updateworkingHistory') }}",
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

        function listWorkingHistroy(idx, data) {
            const index = idx + 1
            return `<div class="pt-0 content-detail-experience" style="margin-top:10px;" id="experience_${index}">
            <div class="row bg-headername ">
                    <div class="col-md-12">
                        <h5 class="pull-left"><b>Pengalaman Kerja ${index}</b></h5>
                        <div class="button-remove"> <a href="javascript: void(0)" class="pull-right delete-experience d-flex" data-id="${index}" style="color: white;cursor:pointer"><span class="my-auto">Hapus</span><span style="color: white;" class="material-icons my-auto">delete</span></a> </div>
                    </div>
                </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group"> <label>Nama Perusahaan: </label>
                        <input type="text" class="form-control" id="company_job_${index}" name="company_job[]" placeholder="Nama Perusahaan">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group"> <label>Jabatan / Posisi: </label>
                        <input type="text" name="position_job[]" id="position_job_${index}" placeholder="Jabatan" class="form-control" >
                    </div>
                </div>
            </div>
            <div class="row ">
                <div class="col-md-4">
                    <div class="form-group"> <label>Negara: </label>
                        <select class="form-control select2" name="country_job[]" id="country_job_${index}" tabindex="-1" aria-hidden="true">

                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group"> <label>Industri: </label>
                        <select class="form-control select2" name="industry[]" id="industry_${index}" tabindex="-1" aria-hidden="true">
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group"> <label>Tipe Pekerjaan: </label>
                        <select class="form-control select2" name="type_job[]" id="type_job_${index}" tabindex="-1" aria-hidden="true">
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group"> <label>Lokasi Bekerja: </label>
                        <select class="form-control select2" name="location_job[]" id="location_job_${index}" tabindex="-1" aria-hidden="true">
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group"> <label>Tahun Kerja: </label>
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="text" class="form-control selectymd" name="start_year_job[]" id="start_year_job_${index}" placeholder="Tanggal Mulai" >
                            </div>
                            <div class="col-sm-6">
                                    <input type="text" class="form-control selectymd" name="end_year_job[]" id="end_year_job_${index}" placeholder="Tanggal Akhir" > 
                                <label class="cat__core__control cat__core__control--checkbox" style="padding-top:10px;">
                                    <input type="checkbox" class="current_date" data-id="3231473" name="" id=""> Pekerjaan Saat Ini
                                    <div class="cat__core__control__indicator"></div>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group"> <label>Gaji: </label> <input type="text" class="form-control" name="sallary[]" id="sallary_${index}" value="" placeholder="Equivalent IDR (Rupiah)" onkeypress="return isNumberKey(event)"> </div>
                </div>
            </div>
            <div class="row ">
                <div class="col-md-12">
                    <div class="form-group"> <label>Peran dan Tanggungjawab: </label>
                        <textarea class="form-control summernote" name="description[]" id="description_${index}" rows="5" ></textarea>
                    </div>
                </div>
            </div>
            <div class="row ">
                <div class="col-md-12">
                    <div class="form-group"> <label>Alasan Berhenti: </label>
                        <textarea class="form-control " name="reason_stop[]" id="reason_stop_${index}" rows="3"></textarea>
                    </div>
                </div>
            </div>
        </div>`;
        }


        // Added Organization
        $(document).on("click", "#add-organizational_experience", function() {

            var lastId = $('div[id^="organizational_experience_"]').last().attr('id');
            var lastNumber = lastId ? lastId.split('_')[2] : 0;
            var html = listOrganization(parseInt(lastNumber), [{}])
            $(".body-detail-organizational_experience").append(html);
            $('.select2').select2();
        })

        // Remove Organization
        $(document).on("click", ".delete-organizational_experience", function() {
            const id = $(this).data("id");
            // Remove the parent div of the clicked delete button
            $(this).closest('#organizational_experience_' + id).remove();
        });
        // Organization
        function Organization() {
            $.ajax({
                url: "{{ url('main/organizationCandidate') }}",
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
                    const html = res.map((data, i) => listOrganization(i, data)).join('');

                    $(".body-detail-organizational_experience").append(html);

                    // Initialize Select2 on the dynamically added elements
                    $('.select2').select2();
                    res.forEach((data, index) => {
                        var idEnd = (index + 1);

                        $("#jabatan_" + (index + 1)).val(data.jabatan).trigger("change");
                        $("#name_org_" + (index + 1)).val(data.name_org)
                        $("#peran_" + (index + 1)).val(data.peran)
                    });

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
        }
        Organization()

        // Update Organisasi Experience
        $("#form-organizational_experience").on('submit', function(e) {
            e.preventDefault();
            var form = document.getElementById("form-organizational_experience");
            $.ajax({
                url: "{{ url('main/updateorganization') }}",
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

        function listOrganization(idx, data) {

            const index = idx + 1
            return `<div class="pt-0 content-detail-organizational_experience" style="margin-top:10px;" id="organizational_experience_${index}">
            <div class="row bg-headername ">
                <div class="col-md-12">
                    <h5 class="pull-left"><b>Pengalaman Organisasi ${index} </b></h5>
                    <div id="button-remove"> <a href="javascript: void(0)" class="pull-right delete-organizational_experience d-flex" data-id="${index}"style="color: white;cursor:pointer"><span class="my-auto">Hapus</span><span style="color: white;" class="material-icons my-auto">delete</span></a> </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group"> <label>Nama Organisasi: </label> <input type="text" name="name_org[]" id="name_org_${index}" placeholder="Nama Organisasi" class="form-control"> </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group"> <label>Jabatan: </label> <select class="form-control select2 jabatan-org select2-hidden-accessible" name="jabatan[]" id="jabatan_${index}" tabindex="-1" aria-hidden="true">
                            <option value="">Pilihan </option>
                            <option >Ketua Umum </option>
                            <option >Wakil Ketua Umum </option>
                            <option>Sekjen </option>
                            <option >Ketua Bidang </option>
                            <option >Anggota </option>
                            <option>Lain-lain </option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group"> <label>Peran dan Tanggungjawab: </label> <input type="text" name="peran[]" id="peran_${index}" placeholder="Peran dan Tanggungjawab" class="form-control"> </div>
                </div>
            </div>
        </div>`;
        }


        // Kompetensi & Skills
        $(document).on("click", "#add-skill", function() {

            var lastId = $('div[id^="content_detail_skill_"]').last().attr('id');
            var lastNumber = lastId ? lastId.split('_')[3] : 0;
            var html = listKompetensi(parseInt(lastNumber), [{}])
            $(".body-detail-skill").append(html);
            // Initialize Select2 on the dynamically added elements
            $('.select2').select2();
            Promise.all([
                $.get("{{ url('main/skills') }}"),
            ]).then(([skillsData]) => {
                console.log("skill_" + (parseInt(lastNumber) + 1))
                populateDropdown("#skill_" + (parseInt(lastNumber) + 1), skillsData);
                $('#levelSkill_' + (parseInt(lastNumber) + 1)).barrating({
                    theme: 'fontawesome-stars',
                    showSelectedRating: false, // Hides the text label beside the stars
                    initialRating: 0,
                });
            })
        })

        // Kompetensi & Skills
        $(document).on("click", ".delete-skill", function() {
            const id = $(this).data("id");
            // Remove the parent div of the clicked delete button
            $(this).closest('#content_detail_skill_' + id).remove();
        });
        // Kompetensi & Skills
        function Kompetensi() {
            $.ajax({
                url: "{{ url('main/skillsCandidate') }}",
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
                    const html = res.map((data, i) => listKompetensi(i, data)).join('');
                    $(".body-detail-skill").append(html);

                    // Initialize Select2 on the dynamically added elements
                    $('.select2').select2();
                    Promise.all([
                        $.get("{{ url('main/skills') }}"),
                    ]).then(([skillsData]) => {
                        res.forEach((data, index) => {
                            populateDropdown("#skill_" + (index + 1), skillsData);
                            $("#skill_" + (index + 1)).val(data.skills).trigger("change");
                            $('#levelSkill_' + (index + 1)).barrating({
                                theme: 'fontawesome-stars',
                                showSelectedRating: false, // Hides the text label beside the stars
                                initialRating: data.level,
                            });
                        });
                    })

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
        }
        Kompetensi()

        // Update Kompetensi
        $("#form-skill").on('submit', function(e) {
            e.preventDefault();
            var form = document.getElementById("form-skill");
            $.ajax({
                url: "{{ url('main/updateskills') }}",
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
        //Kompetensi Skill 
        function listKompetensi(idx, data) {
            const index = idx + 1;
            return `<div class="content-detail-skill" style="margin-top:10px;" id="content_detail_skill_${index}">
                <div class="row ">
                    <div class="col-md-12">
                        <h5 class="pull-left"><b>Kompetensi/Skill ${index}</b></h5>
                        <div id="button-remove"> <a href="javascript: void(0)" class="btn btn-sm btn-danger pull-right delete-skill" data-id="${index}"> <i class="fa fa-trash"></i> </a> </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="form-group"> <label>Keterampilan : </label> <select class="form-control select2 keterampilan-other " name="skills[]" id="skill_${index}" tabindex="-1" aria-hidden="true">

                            </select>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group muncul"> <label>Peringkat: </label>
                            <div class="br-wrapper br-theme-fontawesome-stars"><select class="form-control rating" name="level[]" id="levelSkill_${index}">
                                <option value="">Pilihan </option>
                                <option value="1">Novice</option>
                                <option value="2">Intermediate</option>
                                <option value="3">Advanced</option>
                                <option value="4">Superior</option>
                                <option value="5">Distinguished</option>
                            </select>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>`
        }

        function checkedLinkDocument() {
            Promise.all([
                $.get("{{ url('main/cekDocument') }}"),
            ]).then(([documentData]) => {
                for (let i = 0; i < documentData.length; i++) {
                    var link = "{{ asset('document') }}" + "/" + documentData[i].name_file;
                    var button = `<a target="_blank" href="${link}" class="btn-sm btn btn-danger"><i class="fa fa-file"></i> Lihat File</a>`
                    $("#status_" + documentData[i].document).html('');
                    $("#status_" + documentData[i].document).html(button);
                }

            })

        }
        checkedLinkDocument();

        function handleFormSubmission(formId, url) {
            // Attach the submit event dynamically
            $(`#${formId}`).on('submit', function(e) {
                e.preventDefault();

                var form = document.getElementById(formId);
                $.ajax({
                    url: url,
                    type: 'POST',
                    contentType: false,
                    processData: false,
                    data: new FormData(form),
                    async: false,
                    beforeSend: function() {
                        loaderSending();
                    },
                    complete: function() {
                        $.unblockUI();
                    },
                    success: function(data) {
                        if (data.success) {
                            checkedLinkDocument();
                            // Example Success Message
                            swal({
                                title: "Berhasil",
                                text: "Data berhasil diupdate",
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
                });
            });
        }

        // Example Usage
        handleFormSubmission("form_ijazah", "{{ url('main/uploadDocument') }}");
        handleFormSubmission("form_ktp", "{{ url('main/uploadDocument') }}");
        handleFormSubmission("form_transkrip", "{{ url('main/uploadDocument') }}");
        handleFormSubmission("form_skck", "{{ url('main/uploadDocument') }}");
        handleFormSubmission("form_toefl", "{{ url('main/uploadDocument') }}");
        handleFormSubmission("form_additional1", "{{ url('main/uploadDocument') }}");
        handleFormSubmission("form_additional2", "{{ url('main/uploadDocument') }}");



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