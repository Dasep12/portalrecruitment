@extends('frontend.layouts.master')

@section('content')
<div style="padding:0px;overflow: hidden;width:100%">
    <div class="container">
        <div class="row">
            <div class="col-md-4 section-custom" style="text-align:left">
                <center><img src="https://recruit.infomedia.co.id/assets/backend/images/flat/forgot-password.png" style="width:60%;"></center><br>
                <label class="badge-green" style="text-align:center;">
                    <h5>Selamat datang di halaman pendaftaran Akun</h5>
                    <!-- Pastikan data yang anda masukkan benar, proses validasi akan dilakukan melalui No. KTP dan Email yang anda masukkan. -->
                    Pastikan data yang anda masukkan benar, proses validasi akan dilakukan melalui Email yang anda masukkan.
                </label>
                <h5 class="m-t-20">Sudah memiliki akun?</h5>
                <label for="">Klik <a href="https://recruit.infomedia.co.id/login_page">disini untuk login</a> </label>
            </div>
            <div class="col-md-8 section-custom" style="text-align:left">
                <div class="card-green" style="border-radius:0.25rem">
                    <form id="form-register-v3" name="form-validation">
                        <div class="row">
                            @csrf

                            <div class="col-sm-12 col-md-12">
                                <i class="material-icons icon-big" style="color: #1d7d39;background: #3bb07991;border-radius: 50%;padding: 15px;">person_add</i>
                                <h4 style="margin-top: 10px;">Buat Akun Baru</h4>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <!-- <label>Lengkapi Dari Google</label> -->
                                    <div class="g-signin2" data-width="240" data-height="42" data-theme="dark" data-onsuccess="onSignInGoogle"></div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6"></div>
                            <div class="col-sm-12">
                                <hr>
                            </div>
                            <div class="col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label>Nama Lengkap</label>
                                    <input id="fullname" required class="form-control" placeholder="Nama Lengkap" name="fullname" type="text" />
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label>No. KTP</label>
                                    <input id="ktp" class="form-control" placeholder="KTP" name="ktp" type="text" onkeypress="return isNumberKey(event)" maxlength="16" />
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label>Alamat Email</label>
                                    <input id="email" class="form-control" placeholder="Email" name="email" type="email">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label>Konfirmasi Alamat Email</label>
                                    <input id="email_confirm" class="form-control" placeholder="Ketik ulang email" name="email_confirm" type="email">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12">
                                <div class="form-group" id="show_hide_password">
                                    <label>Password</label>
                                    <div>
                                        <input aria-describedby="button-addon" id="password" class="form-control password" name="password" type="password" placeholder="Password" autocomplete="off">
                                        <!-- <div class="input-group-append icon-show-hide">
                                            <button class="btn btn-link" type="button" id="button-addon">
                                                <a href="javascript: void(0);"><i class="material-icons" style="color: #aaa">visibility_off</i></a>
                                            </button>
                                        </div> -->
                                    </div>

                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12">
                                <div class="form-group" id="show_hide_password_conf">
                                    <label>Konfirmasi Password</label>
                                    <div>
                                        <input aria-describedby="button-addon2" class="form-control password" id="password_confirm" name="password_confirm" type="password" placeholder="Ketik ulang password" autocomplete="off">
                                        <!-- <div class="input-group-append icon-show-hide">
                                            <button class="btn btn-link" type="button" id="button-addon2">
                                                <a href="javascript: void(0);"><i class="material-icons" style="color: #aaa">visibility_off</i></a>
                                            </button>
                                        </div> -->
                                    </div>

                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                            </div>
                            <div class="col-sm-12 col-md-12">
                                <div class="custom-fa">
                                    <label for="register_accept_checkbox">
                                        <input id="register_accept_checkbox" name="register_accept_checkbox" class="checkbox" value="First Choice" type="checkbox">
                                        <span>Dengan melakukan registrasi saya menyatakan telah membaca dan menerima
                                            <a href="https://recruit.infomedia.co.id/privacy_policy/privacy_page" target="_blank">ketentuan dan persyaratan yang berlaku</a>
                                        </span>
                                    </label>
                                </div>
                                <div class="col-lg-12 ">
                                    <div id="ErrorInfo">
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row" style="margin:14px -20px -36px -20px">
                            <div class="col-sm-12" style="background: #28a745; background-size: cover;padding: 25px;border-bottom-left-radius: 0.25rem;border-bottom-right-radius: 0.25rem;">
                                <button type="submit" id="btn-register" class="btn btn-light btn-block btn-lg" href="#ConfirmInput">Daftar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $("#form-register-v3").validate({
            ignore: ":hidden",
            submitHandler: function(form) {
                $.ajax({
                    url: "{{ url('registrasi') }}",
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
                                title: "Berhasil Registrasi!",
                                text: "Lakukan Verifikasi Akun Pada Link Di Email Anda",
                                timer: 3000,
                                showConfirmButton: false,
                                allowOutsideClick: false,
                                onOpen: function() {
                                    swal.showLoading();
                                    const timerInterval = setInterval(function() {
                                        const timerText = swal.getTimerLeft ? swal.getTimerLeft() : ""; // check if getTimerLeft exists
                                        if (timerText) {
                                            swal.getContent().querySelector("b").textContent = timerText;
                                        }
                                    }, 100);

                                    // Clear interval when modal closes
                                    swal.getContent().addEventListener("swal:close", function() {
                                        clearInterval(timerInterval);
                                    });
                                }
                            }).then(function() {
                                window.location.href = "{{ url('/login') }}"
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

                        var errMsg = '<div class="alert alert-warning alert-dismissible fade show" role="alert"><small><b> Error ' + xhr.status + '!</b><br/>' + respText + '</small><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>'
                        $('#ErrorInfo').html(errMsg);
                    },
                });
            }
        });
    });

    // $('#form-register-v3').submit(function(e) {
    //     var formData = new FormData($('#form-register-v3')[0]);
    //     e.preventDefault();
    //     $.ajax({
    //         url: "{{ url('registrasi') }}",
    //         type: 'POST',
    //         contentType: false,
    //         processData: false,
    //         data: formData,
    //         async: false,
    //         beforeSend: function() {
    //             loaderSending()
    //         },
    //         complete: function() {
    //             $.unblockUI();
    //         },
    //         success: function(data) {
    //             if (data.success) {
    //                 swal({
    //                     title: "Berhasil Registrasi!",
    //                     text: "Lakukan Verifikasi Akun Pada Link Di Email Anda",
    //                     timer: 3000,
    //                     showConfirmButton: false,
    //                     allowOutsideClick: false,
    //                     onOpen: function() {
    //                         swal.showLoading();
    //                         const timerInterval = setInterval(function() {
    //                             const timerText = swal.getTimerLeft ? swal.getTimerLeft() : ""; // check if getTimerLeft exists
    //                             if (timerText) {
    //                                 swal.getContent().querySelector("b").textContent = timerText;
    //                             }
    //                         }, 100);

    //                         // Clear interval when modal closes
    //                         swal.getContent().addEventListener("swal:close", function() {
    //                             clearInterval(timerInterval);
    //                         });
    //                     }
    //                 }).then(function() {
    //                     window.location.href = "{{ url('/login') }}"
    //                 });
    //             }
    //         },
    //         error: function(xhr, desc, err) {
    //             var respText = "";
    //             try {
    //                 let jsonResponse = JSON.parse(xhr.responseText);
    //                 respText = jsonResponse.error || xhr.responseText;
    //             } catch (e) {
    //                 respText = xhr.responseText;
    //             }

    //             respText = respText.replaceAll("_n_", "<br/>");

    //             var errMsg = '<div class="alert alert-warning alert-dismissible fade show" role="alert"><small><b> Error ' + xhr.status + '!</b><br/>' + respText + '</small><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>'
    //             $('#ErrorInfo').html(errMsg);
    //         },
    //     });
    // })
</script>
@endsection