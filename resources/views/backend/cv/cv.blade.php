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
        <div class="container cv-box p-0" id="cv" style="background:#A80807; border-radius:20px">
            <div class="mb-5">

                <div class="row m-0" style="margin-right:-0.99rem">
                    <div class="col-md-3" style="padding: 20px 30px; color:white">
                        <div class="row">
                            <div class="col-md-3 text-center col-12" style="padding-top: 20px;padding-bottom: 20px;">
                                <a href="https://recruit.infomedia.co.id/main#profile" id="col-image" class="cat__core__avatar cat__core__avatar--border-white d-block " style="width: 150px; height: 150px;border-radius:25px; border:0px">
                                    <img src="{{ asset('photo/'.$personal->photo) }}" alt="" style="object-fit:cover;">
                                </a>
                            </div>

                            <div class="col-md-12 text-center mb-4 header-sm">
                                <h3 style="text-transform: capitalize;" class=""><strong>simple CV Version </strong></h3>
                                <button class="btn btn-link mr-2" type="button" id="btn-addon" style="cursor:pointer;">
                                    <!-- <i class="material-icons" style="color: #0a0a0a">visibility_off</i> -->
                                    <i onclick="show_hide_preview(event)" class="icmn-eye-blocked button-icon" style="cursor: pointer; border-radius:5px;top: 0px;right: 20px;padding: 5px;font-size:16px;"></i>
                                </button>
                                <a href="{{ url('main/datadiri') }}" id="ubah" class="btn btn-rounded btn-primary  mr-2 mb-2"><i class="icmn-pencil"></i> Ubah Data </a>
                                <a href="curiculum_vitae/download_cv/YzE1MGZjYjg4Yzk4YmRlYTA4MmE2MDZiYjBiYTE1ZDU0OWM0Y2I4NTk5ZDdhYTk0NWMyYWZhNTE2ZmUxY2VkMTA1ZjI2YzM4ZmI4NzkwNzMzMGUxMWI5YzJiMzEyN2UzNGRiMWFkNTJlYjU1Zjc3Y2U0Yzk1MDUzNDZkMzViOTdGTGU4cWJtMndzWlJIQjZNMEEyaFVsdnhYaXhQL1U5YjM0eGhtMUFLRVljPQ==" class="btn btn-rounded btn-light mr-2 mb-2" target="_blank"><i class="icmn-cloud-download"></i> Download </a>

                            </div>

                            <div class="col-12 m-0">
                                <div class="row col-section-2 ">
                                    <div class="col-6 col-md-12 mb-3">
                                        <b>Nama</b>
                                        <p>{{ $personal->fullname }}</p>
                                    </div>
                                    <div class="col-6 col-md-12 mb-3">
                                        <b>Email</b>
                                        <p>{{ $personal->email }}</p>
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
                                        <label for="" class="preview_secret" data-preview="{{ $personal->phone }}">************</label>
                                    </div>
                                    <div class="col-6 col-md-12 mb-3">
                                        <b>No. Whatsapp</b>
                                        <!-- <p id="no_wa_secret">
                      <a id="no_wa" style="text-decoration:underline" href='https://api.whatsapp.com/send?phone=6283821619460&text=' target='_blank'>************</a>
                    </p> -->
                                        <br>
                                        <label for="">
                                            <a id="no_wa" class="preview_secret" data-preview="{{ $personal->phone_wa }}" style="text-decoration:underline" href="https://api.whatsapp.com/send?phone=6283821619460&amp;text=" target="_blank">
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
                                        <label for="" class="preview_secret" data-preview="{{ $personal->born_date }}">*************</label>
                                    </div>
                                    <div class="col-6 col-md-12 mb-3">
                                        <b>Usia</b>
                                        <p>25</p>
                                    </div>
                                    <div class="col-6 col-md-12 mb-3">
                                        <b>Agama</b>
                                        <p>{{ $personal->religion }}</p>
                                    </div>

                                    <div class="col-6 col-md-12 mb-3">
                                        <b>Status Pernikahan</b>
                                        <p>{{ $personal->status_married }}</p>
                                    </div>

                                    <div class="col-6 col-md-12 mb-3">
                                        <b>Jenis Kelamin</b>
                                        <p>{{ $personal->gender }}</p>
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
                                <a href="{{ url('main/datadiri') }}" id="ubah" class="btn btn-rounded btn-primary  mr-2 mb-2"><i class="icmn-pencil"></i> Ubah Data </a>
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
                                <img class="icon-1" src="https://recruit.infomedia.co.id/assets/images/icons/Cube-2.png">
                            </div>
                            <div class="col-12 col-md-11">
                                <h4 class="text-header">Alamat</h4>
                                <ul class="timeline-cv" id="">
                                    <li class="qualified">
                                        <h5 class="sub-header"><b class="">Alamat Domisili</b></h5>

                                        <p>{{ $personal->alamat }}</p>
                                        <div class="row m-0">
                                            <div class="col-4 bb pl-0">
                                                <b>Provinsi</b>
                                                <p class="mb-1">{{ $personal->provinsi }} </p>
                                            </div>
                                            <div class="col-4 bb bl">
                                                <b>Kota/ Kabupaten</b>
                                                <p class="mb-1">{{ $personal->city }}</p>
                                            </div>
                                            <div class="col-4 bb bl">
                                                <b>Kecamatan</b>
                                                <p class="mb-1">{{ $personal->kecamatan }}</p>
                                            </div>
                                            <div class="col-4 pl-0">
                                                <b>No. Rumah</b>
                                                <p class="mb-1">{{ $personal->no_home }}</p>
                                            </div>
                                            <div class="col-4 bl">
                                                <b>Kode Pos</b>
                                                <p class="mb-1">{{ $personal->zip_code_now }}</p>
                                            </div>
                                            <div class="col-4 bl">
                                                <b>{{ $personal->phone_now }}</b>
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
                                    <img class="icon-1" src="https://recruit.infomedia.co.id/assets/images/icons/Cube-2.png">
                                </div>
                                <div class="col-12 col-md-11">
                                    <h4 class="text-header">Pendidikan</h4>
                                    <ul class="timeline-cv" id="">
                                        @foreach($education as $edu)

                                        <li class="qualified">
                                            <h5 class="sub-header"><b class="">{{ $edu->level_edu }}, {{ $edu->campus }}</b></h5>

                                            <p>Negara : {{ $edu->negara }}, Kota : {{ $edu->kota }}</p>
                                            <div class="row m-0">
                                                <div class="col-4 bb pl-0">
                                                    <b>Fakultas</b>
                                                    <p class="mb-1">{{ $edu->fakultas }}</p>
                                                </div>
                                                <div class="col-4 bb bl">
                                                    <b>Jurusan</b>
                                                    <p class="mb-1">{{ $edu->jurusan }}</p>
                                                </div>
                                                <div class="col-4 bb bl">
                                                    <b>IPK/ Nilai</b>
                                                    <p class="mb-1">{{ $edu->ipk }} dari max {{ $edu->from_ipk }}</p>
                                                </div>
                                                <div class="col-4 pl-0">
                                                    <b>Tahun Pendidikan</b>
                                                    <p class="mb-1">{{ $edu->startyear }} s/d {{ $edu->endyear }}</p>
                                                </div>
                                                <div class="col-4  bl">
                                                    <b>Jenis Sekolah</b>
                                                    <p class="mb-1" style="text-transform: uppercase;">{{ $edu->type_campus }}</p>
                                                </div>


                                            </div>
                                        </li>
                                        @endforeach

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <br>
                        <!-- end pendidikan -->

                        <!-- Pengalaman Kerja -->
                        <div class="row m-0">
                            <div class="col-md-1 icon-box">
                                <img class="icon-1" src="https://recruit.infomedia.co.id/assets/images/icons/Cube-2.png">
                            </div>
                            <div class="col-12 col-md-11">
                                <h4 class="text-header">Pengalaman Pekerjaan</h4>

                                <ul class="timeline-cv" id="">
                                    @foreach($experience as $exp)
                                    <li class="qualified">
                                        <h5 class="sub-header"><b class="">{{ $exp->company_job }}</b></h5>

                                        <p> Negara: {{ $exp->country_job }}, Kota: {{ $exp->city }}</p>
                                        <div class="row m-0">
                                            <div class="col-4 bb pl-0">
                                                <b>Jabatan</b>
                                                <p class="mb-1">IT PROGRAMMER</p>

                                            </div>
                                            <div class="col-4 bb bl">
                                                <b>Tahun Masuk</b>
                                                <p class="mb-1">{{ $exp->startYear }}</p>

                                            </div>
                                            <div class="col-4 bb bl">
                                                <b>Tahun Berhenti</b>
                                                <p class="mb-1">{{ $exp->endYear }}</p>

                                            </div>
                                            <div class="col-4 bb pl-0">
                                                <b>Gaji</b>
                                                <p class="mb-1">{{ $exp->sallary }}</p>
                                            </div>

                                            <div class="col-4 bb bl">
                                                <b>Industri</b>
                                                <p class="mb-1">{{ $exp->industry }}</p>
                                            </div>
                                            <div class="col-4  bl bb">
                                                <b>Tipe Pekerja</b>
                                                <p class="mb-1">{{ $exp->type_job }}</p>
                                            </div>

                                            <div class="col-12 pl-0 bb">
                                                <b>Alasan Berhenti</b>
                                                <p class="mb-1">{{ $exp->reason_stop }}</p>
                                            </div>
                                            <!-- <div class="col-6  bl bb">
                                                <b>Fasilitas</b>
                                                <p class="mb-1">-</p>
                                            </div> -->
                                            <div class="col-12 pl-0">
                                                <b>Deskripsi Pekerjaan</b>
                                                <p class="mb-1 pre-tag-style"></p>
                                                <p>{{ $exp->description }}<br></p>
                                                <p></p>
                                            </div>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <br>
                        <!-- end pengalaman kerja -->

                        <!-- pengalaman organisasi -->
                        <div class="row m-0">
                            <div class="col-md-1 icon-box">
                                <img class="icon-1" src="https://recruit.infomedia.co.id/assets/images/icons/Cube-2.png">
                            </div>
                            <div class="col-12 col-md-11">
                                <h4 class="text-header">Pengalaman Organisasi</h4>
                                <ul class="timeline-cv" id="">
                                    @foreach($organisasi as $org)
                                    <li class="qualified">
                                        <h5 class="sub-header"><b class="">{{ $org->name_org }}</b></h5>
                                        <div class="row m-0">
                                            <div class="col-6 pl-0">
                                                <b>Jabatan / Posisi</b>
                                                <p class="mb-1">{{ $org->jabatan }}</p>
                                            </div>
                                            <div class="col-6 bl">
                                                <b>Peran &amp; Tanggungjawab</b>
                                                <p class="mb-1">{{ $org->peran }} </p>
                                            </div>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <br>
                        <!-- end pengalaman organisasi -->

                        <!-- Sertifikasi -->
                        <!-- <div class="row m-0">
                            <div class="col-md-1 icon-box">
                                <img class="icon-1" src="https://recruit.infomedia.co.id/assets/images/icons/Cube-2.png">
                            </div>
                            <div class="col-12 col-md-11">
                                <h4 class="text-header">Sertifikasi</h4>

                                <div class="row">
                                    <div class="col-md-12 table-responsive">
                                        <p style="color:red">Tidak ada data Sertifikasi</p>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <br>
                        <!-- sertifikasi end -->

                        <!-- skill -->
                        <div class="row m-0" style="padding-top:5px;">
                            <div class="col-md-1 icon-box">
                                <img class="icon-1" src="https://recruit.infomedia.co.id/assets/images/icons/Cube-2.png">
                            </div>
                            <div class="col-12 col-md-11">
                                <h4 class="text-header">Kompetensi / Skill</h4>
                                <ul class="timeline-cv" id="">
                                    @foreach($skills as $sk)
                                    <li class="qualified">
                                        <p class="m-0">{{ $sk->skill }}</p>
                                        @for($i = 0 ; $i <= $sk->level ; $i++ )
                                            <i class="fa fa-star"></i>
                                            @endfor
                                    </li>
                                    @endforeach
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
                                <img class="icon-1" src="https://recruit.infomedia.co.id/assets/images/icons/Cube-2.png">
                            </div>
                            <div class="col-12 col-md-11">
                                <h4 class="text-header">File Uploaded</h4>
                                @foreach($document as $doc)
                                <div style="border:solid 1px #e4e9f0;border-radius:5px" class="row m-0 p-2 mb-1 list-file">
                                    <div class="col-6 my-auto">
                                        <label class="m-0">{{ $doc->document }}</label>
                                    </div>
                                    <div class="col-4 my-auto">
                                        <label class="m-0">{{ $doc->created_at }}</label>
                                    </div>
                                    <div class="col-2 text-right">
                                        <a target="_blank" href="{{ asset('document/'.$doc->name_file) }}"> <span class="material-icons" style="background: #0190fe;color: white;padding: 3px;border-radius: 7px;cursor: pointer;">call_made</span></a>
                                    </div>
                                </div>
                                @endforeach
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
            } else {
                thisbtn.removeClass('icmn-eye');
                thisbtn.addClass('icmn-eye-blocked');
                // thisbtn.html(`<i class='material-icons' style='color: #0a0a0a;font-size: 24px;border-radius: 5px;border: solid 1px #d9dee6;padding:4px;'>visibility_on</i>`);
                $('.preview_secret').each(function() {
                    $(this).html($(this).attr('data-preview').replace(/./g, '*'));
                })

                $("#btn-download-cv").val('enc');
            }
        }
    </script>
</div>

@endsection