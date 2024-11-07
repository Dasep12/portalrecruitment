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

    <style type="text/css">
        .pre-tag-style {
            margin: 0px;
            padding: 0px;
            overflow-x: hidden;
            width: auto;
            white-space: pre-line;
        }

        .borderless td,
        .borderless th {
            border: none;
        }

        .list-file:hover {
            border: solid 2px #0190fe !important;
        }

        .label-strong {
            font-weight: bold;
            font-size: 17px;
        }

        .strong {
            font-weight: bold;
        }

        hr {
            height: 2px;
            border-width: 0;
            background-color: #A4A4A4;
        }

        .multiple {
            height: 2px;
            border-width: 0;
            background-color: #798993;
        }

        .cv-box {
            box-shadow: 0 6px 15px rgba(36, 37, 38, 0.08);
            /* padding: 10px; */
            background-color: white;
        }

        .text-blue {
            color: blue;
        }

        .no_data {
            text-align: center;
            background-color: white;
        }

        .header_preview {
            background-color: #F98476;
            color: white;
            padding: 10px;
            border-radius: 2px;
            text-align: center;
        }

        .cat__core__avatar img {
            border-radius: 10px;
        }

        .icon-1 {
            width: 80%;
            padding: 8px;
            border-radius: 10px;
            box-shadow: 5px 12px 20px rgba(36, 37, 38, 0.13);
            backdrop-filter: blur(10px);
            background-image: linear-gradient(to top, #ffffffa8 9%, #e6e9f040 37%, #eef1f5 100%);
        }

        .text-header {
            font-weight: bold;
        }

        ul.timeline-cv {
            list-style-type: none;
            position: relative;
        }

        ul.timeline-cv:before {
            content: ' ';
            background: #0190fe;
            display: inline-block;
            position: absolute;
            left: 5px;
            width: 1px;
            height: 100%;
            z-index: 400;
            top: -5px;
        }

        ul.timeline-cv>li {
            margin: 20px 0;
            padding-left: 0px;
        }

        ul.timeline-cv>li:before {
            content: ' ';
            background: #837f7f;
            display: inline-block;
            position: absolute;
            border-radius: 50%;
            border: 3px solid #bbb;
            left: 22px;
            width: 15px;
            height: 15px;
            z-index: 400;
            margin-top: 8px;
        }

        ul.timeline-cv>li.unqualified:before {
            content: ' ';
            background: #837f7f;
            display: inline-block;
            position: absolute;
            border-radius: 50%;
            border: 3px solid #bbb;
            left: 22px;
            width: 15px;
            height: 15px;
            z-index: 400;
            margin-top: 8px;
        }

        ul.timeline-cv>li.disqualified:before {
            content: ' ';
            background: #87110e;
            display: inline-block;
            position: absolute;
            border-radius: 50%;
            border: 3px solid #ee3b37;
            left: 22px;
            width: 15px;
            height: 15px;
            z-index: 400;
            margin-top: 8px;
        }

        ul.timeline-cv>li.qualified:before {
            content: ' ';
            background: #0190fe;
            display: inline-block;
            position: absolute;
            border-radius: 50%;
            border: 4px solid #b9deff;
            left: -2px;
            width: 14px;
            height: 14px;
            z-index: 400;
            margin-top: 2px;
        }

        .bb {
            border-bottom: solid 1px #d8d8d8;
        }

        .bl {
            border-left: solid 1px #d8d8d8;
        }

        .bt {
            border-top: solid 1px #d8d8d8;
        }

        .sub-header {
            color: #21449f;
            text-decoration: underline;
            text-transform: uppercase;
        }

        font {
            color: black !important;
            font-family: inherit !important;
        }

        /* mobile */
        @media (max-width: 768px) {
            .container-cv {
                padding: 0px 10px;
            }

            .icon-box {
                display: none;
            }

            #col-image {
                margin-right: auto !important;
                margin-left: auto !important;
            }

            .header-sm {
                display: block;
            }

            .header-lg {
                display: none;
            }

            .col-section-2 {
                margin: 0px -30px -38px -30px;
                background: whitesmoke;
                color: black;
                padding: 15px;
                border-top-left-radius: 20px;
                border-top-right-radius: 20px;
            }

        }

        /* desktop */
        @media (min-width: 768px) {
            #no_wa {
                color: white;
            }

            .header-sm {
                display: none;
            }

            .header-lg {
                display: flex;
            }
        }
    </style>

    <section class="container-cv">
        <div class="container cv-box p-0" id="cv" style="background:red; border-radius:20px">
            <div class="mb-5">

                <div class="row m-0" style="margin-right:-0.99rem">
                    <div class="col-md-3" style="padding: 20px 30px; color:white">
                        <div class="row">
                            <div class="col-md-3 text-center col-12" style="padding-top: 20px;padding-bottom: 20px;">
                                <a href="https://recruit.infomedia.co.id/main#profile" id="col-image" class="cat__core__avatar cat__core__avatar--border-white d-block " style="width: 150px; height: 150px;border-radius:25px; border:0px">
                                    <img src="https://recruit.infomedia.co.id/curiculum_vitae/get_document/prev/ZGE1MjAzOTU4NTQ3ZWE4NWFkZTIyYmQ1YWE2NjEyNjhjMzA1M2ZlZWQ2YmY1MTU5ZjlhNDUwNGY5OTQyMzE0N2Q2MDUwNTdhMmYzODEyZjY1ZDM5ZmU1NzI4MGMwZTBlZDJlZjBhMzM1NTRmM2Y2NDZlNDQ0NWFjZjA3ZjAzYzZSRHZLYUZjL3NIT0o4elVCOU5ualA3K3JlcklhcXNoQkdxVy9pVjM4d2hFPQ==/71aa54fc36116f6104389ca2e4576cc1.jpg" alt="" style="object-fit:cover;">
                                </a>
                            </div>

                            <div class="col-md-12 text-center mb-4 header-sm">
                                <h3 style="text-transform: capitalize;" class=""><strong>simple CV Version </strong></h3>
                                <button class="btn btn-link mr-2" type="button" id="btn-addon" style="cursor:pointer;">
                                    <!-- <i class="material-icons" style="color: #0a0a0a">visibility_off</i> -->
                                    <i onclick="show_hide_preview(event)" class="icmn-eye-blocked button-icon" style="cursor: pointer; border-radius:5px;top: 0px;right: 20px;padding: 5px;font-size:16px;"></i>
                                </button>
                                <a href="{{ url('main/datadiri') }}" id="ubah" class="btn btn-rounded btn-primary  mr-2 mb-2"><i class="icmn-pencil" style=""></i> Ubah Data </a>
                                <a style="" href="curiculum_vitae/download_cv/YzE1MGZjYjg4Yzk4YmRlYTA4MmE2MDZiYjBiYTE1ZDU0OWM0Y2I4NTk5ZDdhYTk0NWMyYWZhNTE2ZmUxY2VkMTA1ZjI2YzM4ZmI4NzkwNzMzMGUxMWI5YzJiMzEyN2UzNGRiMWFkNTJlYjU1Zjc3Y2U0Yzk1MDUzNDZkMzViOTdGTGU4cWJtMndzWlJIQjZNMEEyaFVsdnhYaXhQL1U5YjM0eGhtMUFLRVljPQ==" class="btn btn-rounded btn-light mr-2 mb-2" target="_blank"><i class="icmn-cloud-download"></i> Download </a>

                            </div>

                            <div class="col-12 m-0">
                                <div class="row col-section-2 ">
                                    <div class="col-6 col-md-12 mb-3">
                                        <b>Nama</b>
                                        <p>Dasep Depiyawan</p>
                                    </div>
                                    <div class="col-6 col-md-12 mb-3">
                                        <b>Email</b>
                                        <p>depiyawandasep13@gmail.com</p>
                                    </div>
                                    <div class="col-6 col-md-12 mb-3">
                                        <b>KTP</b>
                                        <!-- <p id="nik_secret">****************</p> -->
                                        <br>
                                        <label for="" class="preview_secret" data-preview="3217141304990005">****************</label>
                                    </div>
                                    <div class="col-6 col-md-12 mb-3">
                                        <b>No. HP</b>
                                        <!-- <p id="phone_secret">************</p> -->
                                        <br>
                                        <label for="" class="preview_secret" data-preview="083821619460">************</label>
                                    </div>
                                    <div class="col-6 col-md-12 mb-3">
                                        <b>No. Whatsapp</b>
                                        <!-- <p id="no_wa_secret">
                      <a id="no_wa" style="text-decoration:underline" href='https://api.whatsapp.com/send?phone=6283821619460&text=' target='_blank'>************</a>
                    </p> -->
                                        <br>
                                        <label for="">
                                            <a id="no_wa" class="preview_secret" data-preview="083821619460" style="text-decoration:underline" href="https://api.whatsapp.com/send?phone=6283821619460&amp;text=" target="_blank">
                                                ************ </a>
                                        </label>
                                    </div>
                                    <div class="col-6 col-md-12 mb-3">
                                        <b>Referensi</b>
                                        <p></p>
                                    </div>
                                    <!-- <div class="col-6 col-md-12 mb-3">
                    <b>Nama Referensi/Others:</b>
                    <p></p>
                  </div> -->

                                    <div class="col-6 col-md-12 mb-3" style="display:none;">
                                        <b>Nama Referensi/Others:</b>
                                        <p></p>
                                    </div>
                                    <div class="col-6 col-md-12 mb-3">
                                        <b>Tempat Lahir</b>
                                        <p>Bandung</p>
                                    </div>
                                    <div class="col-6 col-md-12 mb-3">
                                        <b>Tanggal Lahir</b>
                                        <!-- <p id="birthday_secret">*************</p> -->
                                        <br>
                                        <label for="" class="preview_secret" data-preview="13 April 1999">*************</label>
                                    </div>
                                    <div class="col-6 col-md-12 mb-3">
                                        <b>Usia</b>
                                        <p>25</p>
                                    </div>
                                    <div class="col-6 col-md-12 mb-3">
                                        <b>Agama</b>
                                        <p>Islam</p>
                                    </div>

                                    <div class="col-6 col-md-12 mb-3">
                                        <b>Status Pernikahan</b>
                                        <p>Lajang</p>
                                    </div>

                                    <div class="col-6 col-md-12 mb-3">
                                        <b>Jenis Kelamin</b>
                                        <p>Laki-laki</p>
                                    </div>


                                    <div class="col-6 col-md-12 mb-3">
                                        <b>Gelar 1</b>
                                        <p>S.Kom.</p>
                                    </div>
                                    <div class="col-6 col-md-12 mb-3">
                                        <b>Gelar 2</b>
                                        <p>-</p>
                                    </div>
                                    <div class="col-6 col-md-12 mb-3">
                                        <b>Gelar 3</b>
                                        <p>-</p>
                                    </div>
                                    <div class="col-6 col-md-12 mb-3">
                                        <b>Linkedin</b>
                                        <p>dasep-depiyawan-031a89181</p>
                                    </div>
                                    <div class="col-6 col-md-12 mb-3">
                                        <b>Facebook</b>
                                        <p>-</p>
                                    </div>
                                    <div class="col-6 col-md-12 mb-3">
                                        <b>Twitter</b>
                                        <p>-</p>
                                    </div>
                                    <div class="col-6 col-md-12 mb-3">
                                        <b>Instagram</b>
                                        <p>-</p>
                                    </div>


                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-9" style="background: white;border-radius: 20px;box-shadow: 0 6px 15px rgba(36, 37, 38, 0.08);">

                        <div class="row header-lg" style="padding: 5px; padding-top: 20px; object-fit: cover;">
                            <div class="col-md-8 my-auto d-flex align-items-center">
                                <h3 style="text-transform: capitalize;" class="text-black"><strong>simple CV Version </strong></h3>
                                <button class="btn btn-link mr-2" type="button" id="btn-addon" style="cursor:pointer;">
                                    <!-- <i class="material-icons" style="color: #0a0a0a">visibility_off</i> -->
                                    <i onclick="show_hide_preview(event)" class="icmn-eye-blocked button-icon" style="cursor: pointer; border-radius:5px;top: 0px;right: 20px;padding: 5px;font-size:18px;"></i>
                                </button>
                            </div>
                            <!-- <div class="col-md-2"> -->

                            <!-- </div> -->
                            <div class="col-md-2 ">
                                <a href="{{ url('main/datadiri') }}" id="ubah" class="btn btn-rounded btn-primary  mr-2 mb-2"><i class="icmn-pencil" style=""></i> Ubah Data </a>
                            </div>

                            <div class="col-md-2" hidden="">
                                <input type="hidden" id="btn-download-cv" value="enc">
                                <button style="background:red; cursor: pointer;" onclick="gen_cv_pdf()" class="btn btn-rounded btn-danger mr-2 mb-2" target="_blank"><i class="icmn-cloud-download"></i> Download. </button>
                            </div>

                            <div class="col-md-2">
                                <a style="background:red" href="curiculum_vitae/download_cv/YzE1MGZjYjg4Yzk4YmRlYTA4MmE2MDZiYjBiYTE1ZDU0OWM0Y2I4NTk5ZDdhYTk0NWMyYWZhNTE2ZmUxY2VkMTA1ZjI2YzM4ZmI4NzkwNzMzMGUxMWI5YzJiMzEyN2UzNGRiMWFkNTJlYjU1Zjc3Y2U0Yzk1MDUzNDZkMzViOTdGTGU4cWJtMndzWlJIQjZNMEEyaFVsdnhYaXhQL1U5YjM0eGhtMUFLRVljPQ==" class="btn btn-rounded btn-danger mr-2 mb-2" target="_blank"><i class="icmn-cloud-download"></i> Download </a>
                            </div>
                        </div>
                        <!-- <hr style="background-color:#EE5948;"> -->
                        <div class="row p-2">
                        </div>

                        <div id="infolastapplied"></div>
                        <input type="hidden" id="datelast" value="1971-01-01">
                        <input type="hidden" id="exp_id" value="0">
                        <input type="hidden" id="m_vacancy_id_new" value="0">

                        <!-- start alamat -->
                        <div class="row m-0" style="padding-top:5px;">
                            <div class="col-md-1 icon-box">
                                <img class="icon-1" src="https://recruit.infomedia.co.id/assets/images/icons/Cube-2.png" style="">
                            </div>
                            <div class="col-12 col-md-11">
                                <h4 class="text-header">Alamat</h4>
                                <ul class="timeline-cv" id="">
                                    <li class="qualified">
                                        <h5 class="sub-header"><b style="" class="">Alamat Domisili</b></h5>

                                        <p>Jl Lodan Dalam II C Kota Jakarta Utara</p>
                                        <div class="row m-0">
                                            <div class="col-4 bb pl-0">
                                                <b>Provinsi</b>
                                                <p class="mb-1">DKI Jakarta </p>
                                            </div>
                                            <div class="col-4 bb bl">
                                                <b>Kota/ Kabupaten</b>
                                                <p class="mb-1">ADM. JAKARTA UTARA</p>
                                            </div>
                                            <div class="col-4 bb bl">
                                                <b>Kecamatan</b>
                                                <p class="mb-1">Pademangan</p>
                                            </div>
                                            <div class="col-4 pl-0">
                                                <b>No. Rumah</b>
                                                <p class="mb-1">0838</p>
                                            </div>
                                            <div class="col-4 bl">
                                                <b>Kode Pos</b>
                                                <p class="mb-1">14430</p>
                                            </div>
                                            <div class="col-4 bl">
                                                <b>No Telephone</b>
                                                <!-- <p id="notelp_alamat_domicile_secret" data-original="083821619460" class="mb-1">************</p> -->
                                                <br>
                                                <label for="" class="preview_secret" data-preview="083821619460">************</label>
                                            </div>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <br>
                        <!--End alamat-->


                        <!--pendidikan-->
                        <div class="row m-0">
                            <div class="row m-0" style="padding-top:5px;">
                                <div class="col-md-1 icon-box">
                                    <img class="icon-1" src="https://recruit.infomedia.co.id/assets/images/icons/Cube-2.png" style="">
                                </div>
                                <div class="col-12 col-md-11">
                                    <h4 class="text-header">Pendidikan</h4>
                                    <ul class="timeline-cv" id="">
                                        <li class="qualified">
                                            <h5 class="sub-header"><b style="" class="">S1-Perguruan Tinggi, STMIK SwadharmaJakarta</b></h5>

                                            <p>Negara : Indonesia, Kota : ADM. JAKARTA BARAT</p>
                                            <div class="row m-0">
                                                <div class="col-4 bb pl-0">
                                                    <b>Fakultas</b>
                                                    <p class="mb-1">FAKULTAS TEKNOLOGI INFORMASI DAN KOMUNIKASI</p>
                                                </div>
                                                <div class="col-4 bb bl">
                                                    <b>Jurusan</b>
                                                    <p class="mb-1">S1-Sistem Informasi</p>
                                                </div>
                                                <div class="col-4 bb bl">
                                                    <b>IPK/ Nilai</b>
                                                    <p class="mb-1">3.6 dari max 4.0</p>
                                                </div>
                                                <div class="col-4 pl-0">
                                                    <b>Tahun Pendidikan</b>
                                                    <p class="mb-1">2019 s/d 2023</p>
                                                </div>
                                                <div class="col-4  bl">
                                                    <b>Jenis Sekolah</b>
                                                    <p class="mb-1" style="text-transform: uppercase;">pts</p>
                                                </div>


                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <br>
                        <!-- end pendidikan -->

                        <!-- Pengalaman Kerja -->
                        <div class="row m-0">
                            <div class="col-md-1 icon-box">
                                <img class="icon-1" src="https://recruit.infomedia.co.id/assets/images/icons/Cube-2.png" style="">
                            </div>
                            <div class="col-12 col-md-11">
                                <h4 class="text-header">Pengalaman Pekerjaan</h4>

                                <ul class="timeline-cv" id="">
                                    <li class="qualified">
                                        <h5 class="sub-header"><b style="" class="">PT RAVALIA INTI MANDIRI</b></h5>

                                        <p> Negara: Indonesia, Kota: KAB. BEKASI</p>
                                        <div class="row m-0">
                                            <div class="col-4 bb pl-0">
                                                <b>Jabatan</b>
                                                <p class="mb-1">IT PROGRAMMER</p>

                                            </div>
                                            <div class="col-4 bb bl">
                                                <b>Tahun Masuk</b>
                                                <p class="mb-1">01 July 2024</p>

                                            </div>
                                            <div class="col-4 bb bl">
                                                <b>Tahun Berhenti</b>
                                                <p class="mb-1">25 October 2024</p>

                                            </div>
                                            <div class="col-4 bb pl-0">
                                                <b>Gaji</b>
                                                <p class="mb-1">7000000</p>
                                            </div>

                                            <div class="col-4 bb bl">
                                                <b>Industri</b>
                                                <p class="mb-1">
                                                    Manufacture / Production</p>
                                            </div>
                                            <div class="col-4  bl bb">
                                                <b>Tipe Pekerja</b>
                                                <p class="mb-1">PWT (Contract)</p>
                                            </div>

                                            <div class="col-6 pl-0 bb">
                                                <b>Alasan Berhenti</b>
                                                <p class="mb-1">-</p>
                                            </div>
                                            <div class="col-6  bl bb">
                                                <b>Fasilitas</b>
                                                <p class="mb-1">-</p>
                                            </div>
                                            <div class="col-12 pl-0">
                                                <b>Deskripsi Pekerjaan</b>
                                                <p class="mb-1 pre-tag-style"></p>
                                                <p>Build Development Web Application with ASP NET MVC C#<br></p>
                                                <p></p>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="qualified">
                                        <h5 class="sub-header"><b style="" class="">PT SIGAP PRIMA ASTREA</b></h5>

                                        <p> Negara: Indonesia, Kota: ADM. JAKARTA PUSAT</p>
                                        <div class="row m-0">
                                            <div class="col-4 bb pl-0">
                                                <b>Jabatan</b>
                                                <p class="mb-1">IT PROGRAMMER</p>

                                            </div>
                                            <div class="col-4 bb bl">
                                                <b>Tahun Masuk</b>
                                                <p class="mb-1">01 January 2022</p>

                                            </div>
                                            <div class="col-4 bb bl">
                                                <b>Tahun Berhenti</b>
                                                <p class="mb-1">30 June 2024</p>

                                            </div>
                                            <div class="col-4 bb pl-0">
                                                <b>Gaji</b>
                                                <p class="mb-1">7000000</p>
                                            </div>

                                            <div class="col-4 bb bl">
                                                <b>Industri</b>
                                                <p class="mb-1">
                                                    Jasa Industri</p>
                                            </div>
                                            <div class="col-4  bl bb">
                                                <b>Tipe Pekerja</b>
                                                <p class="mb-1">PWT (Contract)</p>
                                            </div>

                                            <div class="col-6 pl-0 bb">
                                                <b>Alasan Berhenti</b>
                                                <p class="mb-1">Ingin Menaikan Karir dan Pendapatan</p>
                                            </div>
                                            <div class="col-6  bl bb">
                                                <b>Fasilitas</b>
                                                <p class="mb-1">-</p>
                                            </div>
                                            <div class="col-12 pl-0">
                                                <b>Deskripsi Pekerjaan</b>
                                                <p class="mb-1 pre-tag-style"></p>
                                                <p>Development pembuatan sistem web aplikasi / mobile berdasarkan user<br>requirement perusahaan .<br>Maintenance berkala pada sistem yang sudah berjalan dan memaskan dak ada<br>bug atau error pada sistem keka sedang berjalan.<br>Melakukan riset dan analisa di perusahaan untuk melakukan improvement dan<br>pengembangan terhadap sistem yang sudah ada.<br>Sistem aplikasi yang sudah di develop seper :<br>- Security Guard Tour<br>- Ipatrol<br>- Isecurity<br>- Crime Index<br></p>
                                                <p></p>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="qualified">
                                        <h5 class="sub-header"><b style="" class="">PT INDOMARCO PRISMATAMA</b></h5>

                                        <p> Negara: Indonesia, Kota: ADM. JAKARTA UTARA</p>
                                        <div class="row m-0">
                                            <div class="col-4 bb pl-0">
                                                <b>Jabatan</b>
                                                <p class="mb-1">IT SUPPORT</p>

                                            </div>
                                            <div class="col-4 bb bl">
                                                <b>Tahun Masuk</b>
                                                <p class="mb-1">16 January 2018</p>

                                            </div>
                                            <div class="col-4 bb bl">
                                                <b>Tahun Berhenti</b>
                                                <p class="mb-1">31 December 2021</p>

                                            </div>
                                            <div class="col-4 bb pl-0">
                                                <b>Gaji</b>
                                                <p class="mb-1">4500000</p>
                                            </div>

                                            <div class="col-4 bb bl">
                                                <b>Industri</b>
                                                <p class="mb-1">
                                                    Retail</p>
                                            </div>
                                            <div class="col-4  bl bb">
                                                <b>Tipe Pekerja</b>
                                                <p class="mb-1">PWTT (Permanent)</p>
                                            </div>

                                            <div class="col-6 pl-0 bb">
                                                <b>Alasan Berhenti</b>
                                                <p class="mb-1">Beralih karir dari IT support ke IT Programmer</p>
                                            </div>
                                            <div class="col-6  bl bb">
                                                <b>Fasilitas</b>
                                                <p class="mb-1">-</p>
                                            </div>
                                            <div class="col-12 pl-0">
                                                <b>Deskripsi Pekerjaan</b>
                                                <p class="mb-1 pre-tag-style"></p>
                                                <p>Maintenance alat alat elektronik seper komputer monitor dan printer<br>Merekap error/bug yang terjadi pada sistem aplikasi dan melakukan reporng<br>kepada pihak IT Development untuk temuan bug atau error tersebut<br>Melakukan stock opname sarana elektronik dan melakukan pemisahan antara<br>barang yang akf rusak dan cadangan<br></p>
                                                <p></p>
                                            </div>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <br>
                        <!-- end pengalaman kerja -->

                        <!-- pengalaman organisasi -->
                        <div class="row m-0">
                            <div class="col-md-1 icon-box">
                                <img class="icon-1" src="https://recruit.infomedia.co.id/assets/images/icons/Cube-2.png" style="">
                            </div>
                            <div class="col-12 col-md-11">
                                <h4 class="text-header">Pengalaman Organisasi</h4>
                                <ul class="timeline-cv" id="">
                                    <li class="qualified">
                                        <h5 class="sub-header"><b style="" class="">Tarung Derajat</b></h5>
                                        <div class="row m-0">
                                            <div class="col-6 pl-0">
                                                <b>Jabatan / Posisi</b>
                                                <p class="mb-1">anggota</p>
                                            </div>
                                            <div class="col-6 bl">
                                                <b>Peran &amp; Tanggungjawab</b>
                                                <p class="mb-1">Anggota </p>
                                            </div>
                                        </div>


                                    </li>
                                </ul>
                            </div>
                        </div>
                        <br>
                        <!-- end pengalaman organisasi -->

                        <!-- Sertifikasi -->
                        <div class="row m-0">
                            <div class="col-md-1 icon-box">
                                <img class="icon-1" src="https://recruit.infomedia.co.id/assets/images/icons/Cube-2.png" style="">
                            </div>
                            <div class="col-12 col-md-11">
                                <h4 class="text-header">Sertifikasi</h4>

                                <div class="row">
                                    <div class="col-md-12 table-responsive">
                                        <p style="color:red">Tidak ada data Sertifikasi</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <!-- sertifikasi end -->

                        <!-- skill -->
                        <div class="row m-0" style="padding-top:5px;">
                            <div class="col-md-1 icon-box">
                                <img class="icon-1" src="https://recruit.infomedia.co.id/assets/images/icons/Cube-2.png" style="">
                            </div>
                            <div class="col-12 col-md-11">
                                <h4 class="text-header">Kompetensi / Skill</h4>

                                <ul class="timeline-cv" id="">
                                    <li class="qualified">
                                        <p class="m-0">Job Analysis</p>
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                    </li>

                                    <li class="qualified">
                                        <p class="m-0">Database Administration</p>
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                    </li>

                                    <li class="qualified">
                                        <p class="m-0">Application Programming </p>
                                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                                    </li>
                                </ul>

                            </div>
                        </div>
                        <br>
                        <!-- end skill -->


                        <!-- prestasi -->
                        <!-- end prestasi -->

                        <!-- Susunan Keluarga -->
                        <!-- end Susunan Keluarga -->

                        <!-- norek -->
                        <!-- end Nomor rekening -->

                        <!-- list file -->
                        <div class="row m-0" style="padding-top:5px;">
                            <div class="col-md-1 icon-box">
                                <img class="icon-1" src="https://recruit.infomedia.co.id/assets/images/icons/Cube-2.png" style="">
                            </div>
                            <div class="col-12 col-md-11">
                                <h4 class="text-header">File Uploaded</h4>
                                <div style="border:solid 1px #e4e9f0;border-radius:5px" class="row m-0 p-2 mb-1 list-file">
                                    <div class="col-6 my-auto">
                                        <label class="m-0">ijazah</label>
                                    </div>
                                    <div class="col-4 my-auto">
                                        <label class="m-0">2024-10-25 09:17:45</label>
                                    </div>
                                    <div class="col-2 text-right">
                                        <a target="_blank" href="https://recruit.infomedia.co.id//curiculum_vitae/get_document/prev/YjlmODJhOGNjNTBjNjc4MjZiMjM4NzZiZTMzNTUxNzE1YzExYzQyMzNiZWY3NWFlM2E4ODRmNzNiYjViNTk0OWIyMjJmZDg4MjYyNDA0NzE5YzhjMGM2ZWYwMjVmOWIxMjc3YjlmNDUyMDFkMDVkYWI1NzQ1NWM2YTMxYTc5NjQrRWhZRVYvZlVYU1pYV2N2RnFHR3gzcnpLaGNrUFdCSnd2Zlp0eWFYUFA4PQ=="> <span class="material-icons" style="background: #0190fe;color: white;padding: 3px;border-radius: 7px;cursor: pointer;">call_made</span></a>
                                    </div>
                                </div>
                                <div style="border:solid 1px #e4e9f0;border-radius:5px" class="row m-0 p-2 mb-1 list-file">
                                    <div class="col-6 my-auto">
                                        <label class="m-0">ktp</label>
                                    </div>
                                    <div class="col-4 my-auto">
                                        <label class="m-0">2024-10-25 09:17:51</label>
                                    </div>
                                    <div class="col-2 text-right">
                                        <a target="_blank" href="https://recruit.infomedia.co.id//curiculum_vitae/get_document/prev/MmE2YWMzZDJhMGNhNmNlYTNhNzZjOTgwNTMwNWE3ODllYTk4NWQyZTdlNDFhYzI0YTVkYTlmNjlhNmZmMmM0MTY0NGRlMTdmOTdmODc5M2YyOTZlODM3YzlkNWRiNjI5NGExY2M1MzNkNTBjMjJkOGZjZWUyMTk4NTMyZDM1MGN4MW1Lc1Y4SUhBQWVwNkJHQVFtTjMyNWo5VFFwSXZadElPdnVRUFRLbGRNPQ=="> <span class="material-icons" style="background: #0190fe;color: white;padding: 3px;border-radius: 7px;cursor: pointer;">call_made</span></a>
                                    </div>
                                </div>
                                <div style="border:solid 1px #e4e9f0;border-radius:5px" class="row m-0 p-2 mb-1 list-file">
                                    <div class="col-6 my-auto">
                                        <label class="m-0">transkip_nilai</label>
                                    </div>
                                    <div class="col-4 my-auto">
                                        <label class="m-0">2024-10-25 09:18:02</label>
                                    </div>
                                    <div class="col-2 text-right">
                                        <a target="_blank" href="https://recruit.infomedia.co.id//curiculum_vitae/get_document/prev/ZTg3OTAzNWM2YzU1MmRkMzU2YzIyOTUwM2M4NDM3Njk4NTVhYWFmYzYzZDJlMzJjOTAyMTY5MGVhMzExY2E4NjlkM2MzNWYzYWIyNDI1MTc5OTc1MzVkMzgyZTAyNTA3YmQxYzY1NjIxNzczZmQ2ZDMxMjg2NGUyZTYxYzAwYTREYmtuVlRwTjVKalNOL2gyRlVaUjY4Rjh4RmwwUWFkT3lOKy9XMmh3b3lNPQ=="> <span class="material-icons" style="background: #0190fe;color: white;padding: 3px;border-radius: 7px;cursor: pointer;">call_made</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end list file -->

                        <br>
                        <br>
                        <br>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <script type="text/javascript">
        $(document).ready(function() {
            var userlevel = 'pelamar';

            // if ( userlevel != 'pelamar' ) {
            //     $(".action-edit").remove();
            // }

            // var ubah_data = 0;
            // if( ubah_data != 0){
            //     $("#ubah").hide();
            // }else{
            //     $("#ubah").show();
            // }
            //
            // var lastapplied = $('#datelast').val();
            // var exp_id = $('#exp_id').val();
            // var m_vacancy_id_new = $('#m_vacancy_id_new').val();
            // var today = new Date().toISOString().slice(0,10);
            // // console.log(lastapplied);
            // if( today > lastapplied){
            //   // console.log('yay');
            //   $("#ubah").show();
            // }
            // else if (exp_id == 3) {
            //   $("#ubah").show();
            // }
            // if(m_vacancy_id_new <99){
            //   $("#ubah").show();
            // }else{
            //   // console.log('no');
            //   $("#ubah").hide();
            //   $('#infolastapplied').append('<div class="row" style="border:solid 1px #FF1919; border-radius:5px; padding:10px">\
            //     <div class="col-md-1 text-center"></div>\
            //     <div class="col-md-1 text-center">\
            //       <i class="fa fa-warning fa-lg" style="color: #FF1919; font-size: 40px; padding-top: 10px;"></i>\
            //     </div>\
            //     <div class="col-md-8">\
            //       <label>Anda tidak dapat mengubah profil sebelum tanggal terakhir melamar s/d 1 tahun<br> <b>01 January 1971</b>.</label>\
            //     </div>\
            //     <div class="col-md-1 text-center">\
            //       <i class="fa fa-warning fa-lg" style="color: #FF1919; font-size: 40px; padding-top: 10px;"></i>\
            //     </div>\
            //   </div>');
            // }

            var doc = new jsPDF();
            $('#download-cv').click(function() {
                var doc = new jsPDF();

                // We'll make our own renderer to skip this editor
                var specialElementHandlers = {
                    '#cv': function(element, renderer) {
                        return true;
                    }
                };

                // All units are in the set measurement for the document
                // This can be changed to "pt" (points), "mm" (Default), "cm", "in"
                doc.fromHTML($('#cv').get(0), 15, 15, {
                    'width': 170,
                    'elementHandlers': specialElementHandlers
                });

                setTimeout(function() {
                    doc.save('sample-file.pdf');
                }, 10000);
            });
        });

        // $(function() {
        //     var check_skill       = "1";
        //     var check_address     = "1";
        //     var check_work        = "1";
        //     var check_education   = "1";
        //     var check_organisasi  = "1";
        //     var check_family      = "0";
        //     var check_prestasi    = "0";
        //     var check_sertifikasi = "0";
        //
        //     check_skill=="0"?$(".list_skill").hide():$(".list_skill").show();
        //     check_address=="0"?$(".list_address").hide():$(".list_address").show();
        //     check_work=="0"?$(".list_work").hide():$(".list_work").show();
        //     check_education=="0"?$(".list_education").hide():$(".list_education").show();
        //     check_organisasi=="0"?$(".list_organisasi").hide():$(".list_organisasi").show();
        //     check_family =="0"?$(".list_keluarga").hide():$(".list_keluarga").show();
        //     check_prestasi =="0"?$(".list_prestasi ").hide():$(".list_prestasi").show();
        //     check_sertifikasi =="0"?$(".list_sertifikasi ").hide():$(".list_sertifikasi").show();
        // });

        // $("#btn-addon").click(function(){
        //   $(this).toggleClass('active');
        //   if ($(this).hasClass('active')) {
        //     $(this).html(`<i class="material-icons" style="color: #0a0a0a">visibility_on</i>`);
        //       $("#nik_secret").html('3217141304990005');
        //       $("#phone_secret").html('083821619460');
        //       $("#no_wa_secret").html('083821619460');
        //       $("#birthday_secret").html('13 April 1999');
        //       $("#notelp_alamat_domicile_secret").html($("#notelp_alamat_domicile_secret").attr('data-original'));
        //       $("#account_number_secret").html('');
        //       $("#notelp_alamat_ktp_secret").html($("#notelp_alamat_ktp_secret").attr('data-original'));
        //   }
        //   else {
        //     $(this).html(`<i class="material-icons" style="color: #0a0a0a">visibility_off</i>`);
        //       $("#nik_secret").html("3217141304990005".replace(/./g, '*'));
        //       $("#phone_secret").html("083821619460".replace(/./g, '*'));
        //       $("#no_wa_secret").html("083821619460".replace(/./g, '*'));
        //       $("#birthday_secret").html("13 April 1999".replace(/./g, '*'));
        //       if($("#notelp_alamat_ktp_secret").attr('data-original')){
        //         $("#notelp_alamat_ktp_secret").html($("#notelp_alamat_ktp_secret").attr('data-original').replace(/./g, "*"));
        //       }
        //       if($("#notelp_alamat_domicile_secret").attr('data-original')){
        //         $("#notelp_alamat_domicile_secret").html($("#notelp_alamat_domicile_secret").attr('data-original').replace(/./g, "*"));
        //       }
        //       $("#account_number_secret").html("".replace(/./g, '*'));
        //   }
        // })

        function gen_cv_pdf() {
            var btn = $("#btn-download-cv").val();
            userlevel = 'pelamar';
            cv_version = '';

            if (btn == 'enc') {
                if (userlevel == 'pelamar' || cv_version == '') {
                    window.open('curiculum_vitae/download_cvv/YzE1MGZjYjg4Yzk4YmRlYTA4MmE2MDZiYjBiYTE1ZDU0OWM0Y2I4NTk5ZDdhYTk0NWMyYWZhNTE2ZmUxY2VkMTA1ZjI2YzM4ZmI4NzkwNzMzMGUxMWI5YzJiMzEyN2UzNGRiMWFkNTJlYjU1Zjc3Y2U0Yzk1MDUzNDZkMzViOTdGTGU4cWJtMndzWlJIQjZNMEEyaFVsdnhYaXhQL1U5YjM0eGhtMUFLRVljPQ==/enc', '_blank');
                } else {
                    window.open('curiculum_vitae/download_cvv_version/YzE1MGZjYjg4Yzk4YmRlYTA4MmE2MDZiYjBiYTE1ZDU0OWM0Y2I4NTk5ZDdhYTk0NWMyYWZhNTE2ZmUxY2VkMTA1ZjI2YzM4ZmI4NzkwNzMzMGUxMWI5YzJiMzEyN2UzNGRiMWFkNTJlYjU1Zjc3Y2U0Yzk1MDUzNDZkMzViOTdGTGU4cWJtMndzWlJIQjZNMEEyaFVsdnhYaXhQL1U5YjM0eGhtMUFLRVljPQ==//enc', '_blank');
                }
            } else {
                if (userlevel == 'pelamar' || cv_version == '') {
                    window.open('curiculum_vitae/download_cvv/YzE1MGZjYjg4Yzk4YmRlYTA4MmE2MDZiYjBiYTE1ZDU0OWM0Y2I4NTk5ZDdhYTk0NWMyYWZhNTE2ZmUxY2VkMTA1ZjI2YzM4ZmI4NzkwNzMzMGUxMWI5YzJiMzEyN2UzNGRiMWFkNTJlYjU1Zjc3Y2U0Yzk1MDUzNDZkMzViOTdGTGU4cWJtMndzWlJIQjZNMEEyaFVsdnhYaXhQL1U5YjM0eGhtMUFLRVljPQ==', '_blank');
                } else {
                    window.open('curiculum_vitae/download_cvv_version/YzE1MGZjYjg4Yzk4YmRlYTA4MmE2MDZiYjBiYTE1ZDU0OWM0Y2I4NTk5ZDdhYTk0NWMyYWZhNTE2ZmUxY2VkMTA1ZjI2YzM4ZmI4NzkwNzMzMGUxMWI5YzJiMzEyN2UzNGRiMWFkNTJlYjU1Zjc3Y2U0Yzk1MDUzNDZkMzViOTdGTGU4cWJtMndzWlJIQjZNMEEyaFVsdnhYaXhQL1U5YjM0eGhtMUFLRVljPQ==/', '_blank');
                }
            }
        }

        function show_hide_preview(e) {
            var thisbtn = $(e.currentTarget);
            // console.log(e.currentTarget);
            thisbtn.toggleClass('active');
            if (thisbtn.hasClass('active')) {
                thisbtn.removeClass('icmn-eye-blocked');
                thisbtn.addClass('icmn-eye');
                // thisbtn.html(`<i class='material-icons' style='color: #0a0a0a;font-size: 24px;border-radius: 5px;border: solid 1px #d9dee6;padding:4px;'>visibility_off</i>`);
                $('.preview_secret').each(function() {
                    $(this).html($(this).attr('data-preview'));
                })

                $("#btn-download-cv").val('noenc');

                // // Select the anchor element by its ID
                // var link = document.getElementsByClassName('dcv');

                // // Value to append (e.g., a query string)
                // var additionalValue = '/noenc';

                // // Loop through the elements and change their text
                // for (var i = 0; i < link.length; i++) {
                //   link[i].href = link[i].href += additionalValue;
                // }
            } else {
                thisbtn.removeClass('icmn-eye');
                thisbtn.addClass('icmn-eye-blocked');
                // thisbtn.html(`<i class='material-icons' style='color: #0a0a0a;font-size: 24px;border-radius: 5px;border: solid 1px #d9dee6;padding:4px;'>visibility_on</i>`);
                $('.preview_secret').each(function() {
                    $(this).html($(this).attr('data-preview').replace(/./g, '*'));
                })

                $("#btn-download-cv").val('enc');

                // // Select the anchor element by its ID
                // var link = document.getElementsByClassName('dcv');

                // // Value to append (e.g., a query string)
                // var additionalValue = '/enc';

                // // Loop through the elements and change their text
                // for (var i = 0; i < link.length; i++) {
                //   link[i].href = link[i].href += additionalValue;
                // }
            }
        }
    </script>
</div>

@endsection