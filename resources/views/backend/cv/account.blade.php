@extends('backend.layouts.master')

@section('content')

<style>
    .cat__apps__profile__card {
        margin-top: 0rem !important;
    }
</style>
<div id="ajax-content" style="min-height: 80vh; height: auto; padding-bottom: 2.5rem;">
    <section class="container-fluid" style="background: #fff;">
        <nav class="cat__core__top-sidebar cat__core__top-sidebar--bg">
            <div class="row">
                <div class="col-lg-12">
                    <h2>
                        <span class="text-black">
                            <strong>{{ $personal->fullname }}</strong>
                        </span>
                        <small class="text-muted">{{ $personal->email }}</small>
                    </h2>
                    <!-- <p class="mb-1">pelamar</p> -->
                </div>
            </div>
        </nav>

        <div class="row">
            <div class="col-lg-3">
                <section class="card cat__apps__profile__card" style="height:250px;background-image: url(https://recruit.infomedia.co.id/assets/backend/images/flat/forgot-password.png)">
                    <div class="card-block text-center">
                        <a class="cat__core__avatar cat__core__avatar--border-white cat__core__avatar--110" href="javascript:void(0);">
                            <img src="{{ asset('photo/'.$personal->photo) }}">
                        </a>
                    </div>
                </section>

            </div>
            <div class="col-lg-9">
                <section class="card">
                    <div class="card-block">
                        <div class="nav-tabs-horizontal">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item ">
                                    <a class="nav-link active" href="javascript: void(0);" data-toggle="tab" data-target="#settings" role="tab">
                                        <i class="icmn-cog"></i>
                                        Data Diri
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="javascript: void(0);" data-toggle="tab" data-target="#change_password" role="tab">
                                        <i class="fa fa-key"></i>
                                        Ganti Password
                                    </a>
                                </li>
                                <li class="nav-item" id="nav_device" style="display: none;">
                                    <a class="nav-link" href="javascript: void(0);" data-toggle="tab" data-target="#registered_device" role="tab">
                                        <i class="fa fa-desktop"></i>
                                        Registered Device
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content py-4">
                                <div class="tab-pane active" id="settings" role="tabcard">
                                    <form id="form-update" name="form-update" method="#">
                                        @csrf
                                        <h5 class="text-black mt-4">
                                            <strong>Personal Information</strong>
                                        </h5>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-control-label" for="l0">Nama Lengkap</label>
                                                    <input type="text" id="fullname" name="fullname" class="form-control" value="{{ $personal->fullname }}" readonly="">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-control-label" for="l0">Email</label>
                                                    <input type="email" id="email" name="email" class="form-control" value="{{ $personal->email }}" readonly="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-control-label" for="12">Gambar Profil</label>
                                                    <br>
                                                    <input class="section_upload" type="file" id="img_profile" name="img_profile" data-height="300" data-allowed-file-extensions="[&quot;jpg&quot;, &quot;jpeg&quot;]" data-max-file-size="2M">
                                                    <br>
                                                    <i style="color: red;">* Maksimal file 2 MB, Eksistensi JPG / JPEG</i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">

                                        </div>
                                        <div class="form-actions">
                                            <div class="form-group">
                                                <button type="submit" class="btn width-200 btn-primary pointer">Simpan</button>
                                                <button type="button" class="btn btn-default pointer" onclick="goBack()">Batal</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane" id="change_password" role="tabcard">
                                    <form id="form-change-password" name="form-change-password" method="POST">
                                        @csrf
                                        <h5 class="text-black mt-4">
                                            <strong>Ganti Password</strong>
                                        </h5>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label class="form-control-label" for="l3">Password Sekarang</label>
                                                    <input id="current_password" class="form-control" name="current_password" type="password" data-validation="[L>=6]" data-validation-message="Harus lebih dari 6 karakter" placeholder="Password" autocomplete="off">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label class="form-control-label" for="l4">Password Baru</label>
                                                    <input id="new_password" class="form-control" name="new_password" type="password" data-validation="[L>=6]" data-validation-message="Harus lebih dari 6 karakter" placeholder="Re-type Password" autocomplete="off">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label class="form-control-label" for="l4">Ulangi Password Baru</label>
                                                    <input id="confirm_password" class="form-control" name="confirm_password" type="password" data-validation="[V==new_password]" data-validation-message="Penulisan Ulang Password Tidak Sesuai" placeholder="Re-type Password" autocomplete="off">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-actions">
                                            <div class="form-group">
                                                <button type="submit" class="btn width-200 btn-primary pointer">Simpan</button>
                                                <button type="button" class="btn btn-default pointer" onclick="goBack()">Batal</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane" id="registered_device" role="tabcard">
                                    <div id="list_registered_device"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>
</div>

<script>
    // Attach the submit event dynamically
    $(`#form-update`).on('submit', function(e) {
        e.preventDefault();

        var form = document.getElementById("form-update");
        $.ajax({
            url: "{{ url('main/updatePhoto') }}",
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
                    // Example Success Message
                    swal({
                        title: "Berhasil",
                        text: "Data berhasil diupdate",
                        icon: "success",
                        button: "Ok",
                    }).then((value) => {
                        if (value) {
                            // Refresh halaman
                            location.reload();
                        }
                    });
                    // window.location = "{{ url('main/account') }}"
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

    // Attach the submit event dynamically
    $(`#form-change-password`).on('submit', function(e) {
        e.preventDefault();

        var form = document.getElementById("form-change-password");
        $.ajax({
            url: "{{ url('main/updatePassword') }}",
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
                    // Example Success Message
                    swal({
                        title: "Berhasil",
                        text: "Data berhasil diupdate",
                        icon: "success",
                        button: "Ok",
                    }).then((value) => {
                        if (value) {
                            // Refresh halaman
                            location.reload();
                        }
                    });
                    // window.location = "{{ url('main/account') }}"
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
</script>
@endsection