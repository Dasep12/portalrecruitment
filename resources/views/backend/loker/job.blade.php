@extends('backend.layouts.master')

@section('content')
<div class="container-fluid cover-job" style="background-image:linear-gradient( rgba(57, 57, 57, 0.81), rgba(0, 0, 0, 0.65) ), url('https://recruit.infomedia.co.id/assets/frontend/background-menu-left.jpg') !important; background-size:cover">


    <div class="container" style="padding-top:10px;padding-bottom:50px;">
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

            .card-list-vacancy {
                margin: 10px 0px;
                /* background: whitesmoke; */
                background: #A80807;
                padding: 10px 0px;
                border-radius: 2px;
                color: #FFF;
            }
        </style>


        <script type="text/javascript">
            function modal_show() {
                $("#modal_menu").modal('show');
            }
        </script>

        <input name="csrf_sso_tg" value="a95b10d9691fe33c40a78517979a04af" style="display:none;">
        <div class="row" style="margin-top:30px">
            <div class="col-sm-12" style="color:white">
                <h2><b><span id="total_job_vacancy"></span> Lowongan <span id="total_job_event"></span> tersedia</b></h2>
            </div>
            <div class="col-md-12" style="color:white;background: #09090994;padding: 10px">
                <label>Nama Lowongan</label>
                <div class="input-group">
                    <input type="text" class="form-control" name="name_vacancy" id="name_vacancy" placeholder="Cari kata kunci vacancy">
                    <span onclick="loadPagination(0)" class="input-group-addon" style="background: white;border-top-right-radius: 5px;border-bottom-right-radius: 5px;"><span class="material-icons" style="color: black;padding: 7px;">search</span></span>
                </div>
            </div>

            <div class="col-md-4" style="color:white;background: #09090994;padding: 10px;">
                <div class="form-group">
                    <label for="">Nama perusahaan.</label>
                    <select onchange="loadPagination(0)" class="form-control js-example-basic-single" id="company_filter_job" style="width:100%; height:10px">
                        <option value="" selected="">Pilih</option>
                        <option value="2">PT. Infomedia Nusantara</option>
                        <option value="3">PT Telekomunikasi Indonesia</option>
                        <option value="9719">PT MelOn Indonesia</option>
                        <option value="9720">PT. Administrasi Medika</option>
                        <option value="9721">PT Graha Telkomsigma</option>
                        <option value="9722">PT Integrasi Logistic Cipta Solusi</option>
                        <option value="9723">PT. Metra Digital Innovation</option>
                        <option value="9724">PT. Metra Digital Media</option>
                        <option value="9727">PT. Metra-Net</option>
                        <option value="9728">Metrasat</option>
                        <option value="9730">PT. Pins Indonesia</option>
                        <option value="9731">PT. Pojok Celebes Mandiri</option>
                        <option value="9733">PT Sigma Cipta Caraka</option>
                        <option value="9736">PT. Multimedia Nusantara</option>
                        <option value="9739">PT. Finnet Indonesia</option>
                        <option value="9740">PT. Teltranet Aplikasi Solusi</option>
                        <option value="9741">PT. Nutech Integrasi</option>
                        <option value="9742">PT. Swadharma Sarana Informatika</option>
                        <option value="9743">PT. Bosnet Distribution Indonesia</option>
                        <option value="9745">PT. Telkom Satelit Indonesia</option>
                    </select>
                </div>
            </div>

            <div class="col-md-4" style="color:white;background: #09090994;padding: 10px;">
                <div class="form-group">
                    <label for="">Bidang Pekerjaan</label>
                    <select onchange="loadPagination(0)" class="form-control js-example-basic-single" id="stream" style="width:100%">
                        <option value="" selected="">Pilih</option>
                        <option value="ACFI">Accounting & Finance</option>
                        <option value="ADMCOR">Administration & Coordination</option>
                        <option value="BSNS">Business</option>
                        <option value="GNRL">General</option>
                        <option value="HCM">Human Capital</option>
                        <option value="IT">Information Technology</option>
                        <option value="LGL">Legal</option>
                        <option value="MDCTV">Media & Creative</option>
                        <option value="MGMT">Management</option>
                        <option value="SALES">Sales & Marketing</option>
                        <option value="SPLY">Supply</option>
                        <option value="SVC">Services</option>
                    </select>
                </div>
            </div>

            <div class="col-md-4" style="color:white;background: #09090994;padding: 10px;">
                <div class="form-group">
                    <label for="">Jenjang Pendidikan</label>
                    <select onchange="loadPagination(0)" class="form-control js-example-basic-single" id="jenjang" style="width:100%">
                        <option value="" selected="">Pilih</option>
                        <option value="3">SLTA/SMK</option>
                        <option value="4">Diploma I&II</option>
                        <option value="5">Diploma III</option>
                        <option value="6">Diploma IV</option>
                        <option value="7">S1-Perguruan Tinggi</option>
                        <option value="8">S2-Pasca Sarjana</option>
                        <option value="9">S3-Pasca/Doktor</option>
                    </select>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="cover-job-list" style="margin-top:-20px; min-height:50vh;">
    <div class="">

        <div class="result-wrapper">
            <div class="row">
                <div class="col-sm-12">
                    <div class="result-list-wrapper" id="list_job_event">
                    </div>
                    <hr>
                    <div class="result-list-wrapper" id="list_vacancy">
                    </div>
                    <div class="pager-wrapper">
                    </div>
                </div>

                <div class="col-sm-12" style="margin-bottom:20px">
                    <div id="pagination"></div>
                </div>
            </div>
        </div>

    </div>
</div>
</div>
</div>

<style>
    .btn.btn-danger,
    .show>.btn.btn-danger {
        background-color: #0040ff !important;
        border-color: #0040ff !important;
    }
</style>


<script type='text/javascript'>
    var pagno;
    var base_url = '{{ url("main") }}';

    $(document).ready(function() {
        $('.js-example-basic-single').select2();
        $('.loading').bind('ajaxStart', function() {
            $(this).css("display", "block");
        }).bind('ajaxStop', function() {
            $(this).css("display", "none");
        });

        $('#pagination').on('click', 'a', function(e) {
            e.preventDefault();
            pageno = $(this).attr('data-ci-pagination-page');
            loadPagination(pageno);
        });
        loadPagination(0);

    });

    function load_total_job_all() {
        $.ajax({
                url: '{{ url("main/listjob") }}',
                type: 'GET',
                dataType: 'json',
                data: {
                    company: $("#company_type").val(),
                    jenis_program: $("#experience_type").val(),
                    tipe_pekerjaan: $("#employee_type").val(),
                    urutkan: $("#date_added").val()
                },
            })
            .done(function(data) {
                $("#total_job_vacancy").text(20);
            });
    }

    function loadPagination(pagno) {
        load_total_job_all();

        $.ajax({
            url: '{{ url("main/listjob") }}',
            type: 'GET',
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
                $('#pagination').html(response.pagination);

                if (response.result.length < 1) {
                    $('#list_vacancy').html('<div class="col-xs-12 mx-auto text-center no-job-available" style="border: 1px solid red;background: antiquewhite;"><i class="material-icons" style="background: white;font-size: 50px;padding: 30px;border-radius: 50%;/*! box-shadow: 0 6px 15px rgba(36, 37, 38, 0.25); */color: red;">extension</i><h5 style="margin-top: 20px;">No job available</h5></div>');
                } else {

                    $.each(response.result, function(i, val) {

                        href = base_url + '/detailjob/' + val.id;
                        var canvasStyle = 'none';
                        if (val.percentage !== null) {
                            canvasStyle = 'block';
                        }
                        $("#list_vacancy").append('<div class="row card-list-vacancy" >\
                            <div class="col-md-2" style="">\
                              <div class="relative" style="position: relative;display:' + canvasStyle + ';"><canvas id="chartProgress_' + val.id + '" width="300px" height="200" style="display:' + canvasStyle + '"></canvas><div class="absolute-center text-center" style="position:absolute;top: 62%;left: 50%;transform: translate(-50%, -50%);"><label style="line-height: 1;font-size: small;">Kuota Kandidat</label></div></div>\
                            </div>\
                            <div class="col-md-7 center-list-job" style="">\
                              <h4 style="margin-bottom: 0px;font-weight: bold;">' + val.vacancy_name + '</h4>\
                              <p style="">' + val.vacancy_company_name + '</p>\
                              <hr style="border:1px solid #FFF">\
                              <p>' + val.job_description + '</p>\
                            </div>\
                            <div class="col-md-3" style="padding:5px">\
                              <span>Bidang Pekerjaan</span><br>\
                              <b>' + val.stream_group_name + '</b><br><br>\
                              <span>Jenjang</span><br>\
                              <b>' + val.education_name + '</b>\
                              <br><br>\
                              <a target="_blank" href="' + href + '" class="btn btn-danger">Detail Pekerjaan</a>\
                            </div>\
                          </div>');

                        var percentage_ratio = 0;
                        if (val.percentage > 0) {
                            percentage_ratio = val.percentage;
                        }
                        var percentage_color = '';
                        if (val.percentage < 80) {
                            percentage_color = '#FFF';
                        } else {
                            percentage_color = '#FFF';
                            // percentage_color = '#6d6ada';
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
                }
            }
        });
    }
</script>

@endsection