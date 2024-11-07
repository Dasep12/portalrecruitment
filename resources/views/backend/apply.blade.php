@extends('backend.layouts.master')

@section('content')

<div id="ajax-content" style="min-height: 80vh; height: auto; padding-bottom: 2.5rem;">
    <section class="container-fluid" style="background: #fff;">
        <div style="padding: 50px 12px 100px;" class="">

            <div class="row">
                <div class="col-md-1 profile-applicant" style="text-align:-webkit-center;">
                    <img src="https://recruit.infomedia.co.id/curiculum_vitae/get_document/prev/OWVkNTg3M2U5ZWFkMTBjZmJiYmRjMjdmODRlY2Y3ZWYxZGVhODA2MmVhMTRjZTNkN2VhM2UxNTE1ZGJiODM2MGU5MDUzMTFmMDgyMWNkNDVlZjNkOTU5YzBmZGE2ZjQ3OGU4ODJkNzExYTcwMGExYWZiNGNkN2ZlODkyMmQ4MjZjOStrenExbFUrK0x3Qi84YzhNTE04blBDbDRiTElPNVJVME5EWEprSlZJPQ==/71aa54fc36116f6104389ca2e4576cc1.jpg" style="width: 50px;height:50px;border-radius: 30px;object-fit:cover;">
                </div>
                <div class="col-md-3 profile-applicant">
                    <h4><b>Dasep Depiyawan</b></h4>
                    <label>Melamar : <span id="created_user"></span></label>
                </div>
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
                <div class="col-md-2" style="margin-bottom:5px;">
                    <a href="#" class="load_menu" menu_id="my_mail">
                        <div style="background: #f6f6f6; padding: 7px 15px;border-radius: 5px;box-shadow: 1px 3px 2px 0px rgba(0, 0, 0, 0.11);">
                            <i class="material-icons" style="float:right;font-size:40px;">mail</i>
                            <h3 id="count_message_unread" style="margin-bottom: 0px;">0</h3>
                            <label>Pesan Baru</label>
                        </div>
                    </a>
                </div>
            </div>

        </div>
    </section>
    <section style="padding:1.42rem; margin-top:-80px">
        <div class="row">
            <div class="col-md-12">
                <div id="render_view">
                    <section style="margin-top:80px;">
                        <center class="center"> <img src="https://recruit.infomedia.co.id/assets/backend/images/no_applied_found.png">
                            <h4>Saudara belum melamar pekerjaan.</h4> <label>Silahkan mengisi daftar riwayat hidup terlebih dahulu.</label> <br><a href="https://recruit.infomedia.co.id/main#curiculum_vitae/preview">Edit Daftar riwayat hidup</a>
                        </center>
                    </section>
                </div>

            </div>
        </div>
    </section>
</div>

@endsection