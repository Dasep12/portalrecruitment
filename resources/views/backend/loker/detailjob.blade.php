@extends('backend.layouts.master')

@section('content')
<div style="padding:0px;overflow: scroll;width:100%">

    <style media="screen">
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
    </style>

    <div class="container-fluid animsition" style="background-size: cover; background-image: linear-gradient(rgba(57, 57, 57, 0.81), rgba(0, 0, 0, 0.65)), url(&quot;http://recruit.infomedia.co.id/assets/frontend/background-menu-left.jpg&quot;); border-bottom: 1px solid rgb(230, 227, 227); animation-duration: 1500ms; opacity: 1;">
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

            <nav id="navbar_top" class="navbar navbar-expand-lg navbar-light " style=" border-bottom: solid 0px #e6e6e6;min-height:10vh; z-index:1">
                <a class="navbar-brand" href="https://recruit.infomedia.co.id/">
                    <img id="img_logo_top_bar" class="img-logo" src="https://recruit.infomedia.co.id/assets/frontend/logo_humanvue.png" style="width:180px;" height="" alt="">
                </a>


                <div class="collapse navbar-collapse " id="navbarSupportedContent" style="border-radius: 5px;padding:20px">
                </div>
            </nav>


            <script type="text/javascript">
                $(document).ready(function() {

                    if ('Job Detail' != 'Home' && 'Job Detail' != 'Job' && 'Job Detail' != 'Job Detail' && 'Job Detail' != 'Detail Blog' && 'Job Detail' != 'FAQ') {
                        $("#navbar_top").addClass("d-lg-none");
                        $("#img_logo_top_bar").attr("src", "https://recruit.infomedia.co.id/assets/frontend/images/21f88f0f5f61e6863c7add95ff3e7361.png");
                        $("#btn_collapse_navbar_top").css("color", "black");
                    }

                    if ('Job Detail' == 'Home') {
                        $("#navbar_top").addClass('navbar-style-home');
                    } else if ('Job Detail' == 'Job Vacancy') {
                        $("#navbar_top").hide();
                    }

                    if ('Job Detail' == 'Job Vacancy Applicant') {
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
                        <div class="col-md-3 col-lg-2">
                            <!-- <img src="https://recruit.infomedia.co.id/assets/backend/images/company_logo/1a6b173689253eb15d3ca33323ecff1f.png" style="width:inherit;background: whitesmoke;border-radius: 5px;margin-top: 10px;margin-bottom:20px"> -->
                            <div style="height: auto;;width: 100%;">
                                <div class="relative" style="position: relative;"><iframe class="chartjs-hidden-iframe" style="display: block; overflow: hidden; border: 0px; margin: 0px; inset: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;" tabindex="-1"></iframe>
                                    <canvas id="chartProgress" width="237" height="280" style="display: block; height: 187px; width: 158px;"></canvas>
                                    <div class="absolute-center text-center" style="position:absolute;top: 62%;left: 50%;transform: translate(-50%, -50%);"><label style="line-height: 1;font-size: small;">Kuota Kandidat</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9 col-lg-10" style="color:white">
                            <h2>{{ $detail->position }}</h2>
                            <p style="font-size: 16px;">{{ $detail->company }}</p>
                            <p class="">Posted : {{ \Carbon\Carbon::parse($detail->created_at)->format('d F Y H:i') }}</p>
                            <hr>
                            <button class="btn btn-outline-light" onclick="goBack()">Kembali</button>
                            <span id="lamar_button">

                            </span>
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
                                <p>
                                    <?php
                                    $jobdescParse = json_decode($detail->jobdescription);
                                    foreach ($jobdescParse as $jobdesc): ?>
                                        <?= $jobdesc->id ?>. <?= $jobdesc->text ?><br>
                                    <?php endforeach ?>
                                </p>
                            </div>
                        </div>

                        <div class="col-md-12" style="margin-top:30px">
                            <h5 style="margin-bottom:0px"><b>Job Requirement</b></h5>
                            <hr>
                            <div style="margin-top:10px">
                                <p>
                                    <?php
                                    $jobrequirementParse = json_decode($detail->jobrequirement);
                                    foreach ($jobrequirementParse as $jobreq): ?>
                                        <?= $jobreq->id ?>. <?= $jobreq->text ?><br>
                                    <?php endforeach ?>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-12" style="margin-top:30px">
                            <h5 style="margin-bottom:0px"><b>Skill Requirement</b></h5>
                            <hr>
                            <div style="margin-top:10px">
                                <p>
                                    <?php
                                    $skill_requirementParse = json_decode($detail->skill_requirement);
                                    foreach ($skill_requirementParse as $skillreq): ?>
                                        <i class="material-icons" style="color: #007bff;">check_circle</i><span style="margin-left: 10px;position: absolute;"><?= $skillreq->text  ?></span><br>
                                    <?php endforeach ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 section-custom">
                    <div class="row">
                        <div class="col-md-12 card-job">
                            <p>STATUS <b><?= $detail->type_jobs ?></b></p>
                            <hr>
                            <b class="heading">Lokasi:</b>
                            <p><?= $detail->location ?></p>
                            <hr>
                            <b class="heading">Bagian:</b>
                            <p><?= $detail->job_part ?></p>
                            <hr>
                            <b class="heading">Pendidikan:</b>
                            <p><?= $detail->education ?></p>
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

    <script src="https://recruit.infomedia.co.id/assets/backend/vendors/chart.js/dist/Chart.min.js" type="text/javascript"></script>

    <script type="text/javascript">
        var baseUrl = "";
        cekStatusLamaran()

        function cekStatusLamaran() {
            $.ajax({
                url: '{{ url("main/cekStatusLamaran") }}',
                type: 'GET',
                data: {
                    'id': "{{ $detail->id }}"
                },
                cache: false,
                success: function(res) {
                    if (res.status) {
                        $("#lamar_button").append(` <button disabled class="btn btn-danger" id="apply-job">Dilamar</button>`);
                        return false
                    }

                    $("#lamar_button").append(`  <a href="{{ url('main/formapply/'.$detail->id) }}" target="_blank" class="btn btn-danger" id="apply-job">Lamar Pekerjaan</a>`);
                }
            })
        }

        $(document).ready(function() {
            //ratio
            var percentage_ratio = 14;
            var percentage = 5;
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
                        ctx.arc(width / 2, height / 2, 60, 0, 2 * Math.PI);
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
    </script>
</div>
@endsection