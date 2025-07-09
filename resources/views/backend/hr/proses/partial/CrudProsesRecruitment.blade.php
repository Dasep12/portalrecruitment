<div id="myCanvas" class="canvas-panel">
    <a href="javascript:void(0)" class="close-btn text-white" style="z-index: 99999;" onclick="closeCanvas()">&times;</a>

    <section class="container-cv">
        <div class="container cv-box p-0" id="cv" style="background:#A80807; border-radius:20px">
            <div class="mb-5">

                <div class="row m-0" style="margin-right:-0.99rem">
                    <div class="col-md-3" style="padding: 20px 30px; color:white">
                        <div class="row">
                            <div class="col-md-3 text-center col-12" style="padding-top: 20px;padding-bottom: 20px;">
                                <a href="#" id="col-image" class="cat__core__avatar cat__core__avatar--border-white d-block " style="width: 150px; height: 150px;border-radius:25px; border:0px">
                                    <img src="{{ asset('photo/'.$personal->photo) }}" alt="" style="object-fit:cover;">
                                </a>
                            </div>

                            <div class="col-md-12 text-center mb-4 header-sm">


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
                                        <b>No. Whatsapp</b> <br>
                                        <label for="">
                                            <a id="no_wa" class="preview_secret" data-preview="{{ $personal->phone_wa }}" style="text-decoration:underline" href="https://api.whatsapp.com/send?phone=6283821619460&amp;text=" target="_blank">
                                                ************ </a>
                                        </label>
                                    </div>
                                    <div class="col-6 col-md-12 mb-3">
                                        <b>Referensi</b>
                                        <p></p>
                                    </div>
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
                                        <br>
                                        <label for="" class="preview_secret" data-preview="{{ $personal->born_date }}">*************</label>
                                    </div>
                                    <div class="col-6 col-md-12 mb-3">
                                        <b>Usia</b>
                                        <p>{{ $personal->usia }}</p>
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

                                    <i onclick="show_hide_preview(event)" class="fa fa-eye button-icon" style="cursor: pointer; border-radius:5px;top: 0px;right: 20px;padding: 5px;font-size:18px;"></i>
                                </button>
                            </div>
                            <!-- <div class="col-md-2"> -->

                            <!-- </div> -->
                            <div class="col-md-4 ">
                                <a style="background:red" href="" class="btn btn-rounded btn-danger mr-2 mb-2" target="_blank"><i class="fa fa-close"></i> Rejected </a>
                                <a href="#" id="ubah" class="btn btn-rounded btn-primary  mr-2 mb-2"><i class="fa fa-arrow-right"></i> Next Steps </a>


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

</div>

<script>
    function openCanvas() {
        document.getElementById("myCanvas").classList.add("open");
    }

    function closeCanvas() {
        document.getElementById("myCanvas").classList.remove("open");
    }

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