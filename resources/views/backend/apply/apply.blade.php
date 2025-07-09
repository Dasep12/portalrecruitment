@extends('backend.layouts.master')

@section('content')
<style>

</style>
<!-- <div id="ajax-content" style="min-height: 80vh; height: auto; padding-bottom: 2.5rem;"> -->
<section class="container-fluid" style="background: #fff;">
    <div style="padding: 50px 12px 100px;" class="">

        <div class="row">
            <div class="col-md-1 profile-applicant" style="text-align:-webkit-center;">
                <img src="{{ asset('photo/'.$personal->photo) }}" style="width: 50px;height:50px;border-radius: 30px;object-fit:cover;">
            </div>
            <div class="col-md-3 profile-applicant">
                <h4><b>{{ $personal->fullname }}</b></h4>
                <!-- <label>Melamar : <span id="created_user"></span></label> -->
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-2"></div>
            <div class="col-md-2" style="margin-bottom:5px;">
                <!-- <a href="#"class="load_menu" menu_id="job_vacancy"> -->
                <div id="column_task" class="normal-task">
                    <i class="material-icons" style="float:right;font-size:40px;">library_add</i>
                    <h3 id="count_task" style="margin-bottom: 0px;">0</h3>
                    <label>Task Self Schedulling</label>
                </div>
                <!-- </a> -->
            </div>
            <div class="col-md-2" style="margin-bottom:5px;">
                <a href="#" class="load_menu" menu_id="job_vacancy">
                    <div style="background: #f5f5f5d4; padding: 7px 15px;border-radius: 5px;box-shadow: 1px 3px 2px 0px rgba(0, 0, 0, 0.11);">
                        <i class="material-icons" style="float:right;font-size:40px;">work</i>
                        <h3 id="count_total_open_job" style="margin-bottom: 0px;">207</h3>
                        <label>Lowongan Aktif</label>
                    </div>
                </a>
            </div>
            <!-- <div class="col-md-2" style="margin-bottom:5px;">
                <a href="#" class="load_menu" menu_id="my_mail">
                    <div style="background: #f6f6f6; padding: 7px 15px;border-radius: 5px;box-shadow: 1px 3px 2px 0px rgba(0, 0, 0, 0.11);">
                        <i class="material-icons" style="float:right;font-size:40px;">mail</i>
                        <h3 id="count_message_unread" style="margin-bottom: 0px;">0</h3>
                        <label>Pesan Baru</label>
                    </div>
                </a>
            </div> -->
        </div>

    </div>
</section>
<section style="padding:1.42rem; margin-top:-80px">
    <!-- <div class="row">
            <div class="col-md-12">
                <div id="render_view">
                    <section style="margin-top:80px;">
                        <center class="center"> <img src="https://recruit.infomedia.co.id/assets/backend/images/no_applied_found.png">
                            <h4>Saudara belum melamar pekerjaan.</h4> <label>Silahkan mengisi daftar riwayat hidup terlebih dahulu.</label> <br><a href="https://recruit.infomedia.co.id/main#curiculum_vitae/preview">Edit Daftar riwayat hidup</a>
                        </center>
                    </section>
                </div>
            </div>
        </div> -->
</section>
<hr />
@foreach($lamaran as $app)
<section class="container-fluid mt-5 " style="background:#ececec; border-radius:2px;box-shadow:inset">
    <b class="py-3">Tahapan Rekrutmen {{ $app->position }} {{ $app->company }}</b>
    <div class="my-5 ">
        <div class="timeline px-3 pb-4">
            @foreach($stages as $stg)
            <!-- Step: Lolos -->
            <div class="timeline-step">
                <div class="circle-wrapper">
                    <div id="badge_application_{{ $stg->id }}" class="circle ">
                        <img src="{{ asset('assets/assets/ic-assesment-not-ready.svg') }}" alt="Pendaftaran">
                    </div>
                </div>
                <div class="timeline-label">{{ $stg->name }}</div>
                <div id="status_{{ $stg->id }}">

                </div>
                <script>
                    window.statusCheckList = window.statusCheckList || [];
                    window.statusCheckList.push({
                        jobId: "{{ $app->id }}",
                        stageId: "{{ $stg->id }}"
                    });
                </script>
            </div>
            @endforeach

            <!-- Step: Tidak Lolos -->
            <!-- <div class="timeline-step">
                <div class="circle-wrapper">
                    <div class="circle border-danger bg-danger-subtle">
                        <img src="https://ojkpcs8pct2.shl.co.id/images/icon-status/ic-regist-failed.svg" alt="Seleksi">
                    </div>
                </div>
                <div class="timeline-label">Seleksi Administrasi</div>
                <span class="badge bg-danger badge-status">TIDAK LOLOS</span>
            </div> -->


        </div>
        <!-- <div class="d-flex ">
            <div class="row  justify-content-center">
                <div class="mb-5 col-md-6 bg-white p-5 pb-4 px-5" style="border-radius: 5px;">
                    <p class="font-size:14px !important">
                        <b>Dengan Hormat Dasep depiyawan</b>,<br>
                        Terima kasih atas antusiasme Anda dalam Rekrutmen PCS Angkatan 8 Otoritas Jasa Keuangan (OJK) Tahun 2024.<br>
                        Berdasarkan penilaian yang dilaksanakan oleh Panitia Rekrutmen Pendidikan Calon Staf (PCS) Angkatan 8 Tahun 2024 , Anda dinyatakan TIDAK LOLOS Seleksi Administrasi rekrutmen ini.<br>
                        Terima kasih atas partisipasi Anda dalam proses Rekrutmen PCS Angkatan 8 Otoritas Jasa Keuangan (OJK) Tahun 2024.<br>
                        Tetap semangat!<br>
                        Terima Kasih<br>
                        Panitia Rekrutmen Pendidikan Calon Staf (PCS) Angkatan 8 Tahun 2024
                    </p>
                </div>
            </div>


        </div> -->
    </div>

</section>
@endforeach
<!-- </div> -->
<script>
    function cekStatusApplication(jobId, stageId) {
        $.ajax({
            url: "{{ url('main/cekLamaran') }}",
            method: "GET",
            data: {
                jobId: jobId,
                stageId: stageId
            },
            success: function(res) {
                if (res.length > 0) {
                    const $badge = $(`#badge_application_${stageId}`);
                    $.each(res, function(i, val) {
                        $badge.removeClass('border-danger bg-danger-subtle')
                            .addClass(`border-${val.style} bg-${val.style}-subtle`)
                            .css('background-color', '#d08a06');
                        $(`#status_${stageId}`).html(`<span class="badge bg-${val.style} badge-status">${val.status}</span>`);
                    })
                }

            }
        })
    }

    // Jalankan semua setelah DOM siap
    $(document).ready(function() {
        if (window.statusCheckList) {
            window.statusCheckList.forEach(item => {
                cekStatusApplication(item.jobId, item.stageId);
            });
        }
    });
</script>
@endsection