@extends('frontend.layouts.master')

@section('content')
<div style="padding:0px;overflow: hidden;width:100%">
    <div class="container">
        <div class="row">
            <div class="col-md-6 section-custom" style="text-align:left">
                <div class="card">
                    <div class="card-body">

                        <div class="row">
                            <div class="col-md-12 pt-3 pb-3">
                                <form id="form-login-v3" name="form-validation" method="POST">
                                    @csrf
                                    <h4 style="margin-top: 10px;">Masuk ke Akun Anda</h4><br>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input id="email" required class="form-control" placeholder="Email address" name="email" type="text" autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-12">
                                            <div class="form-group" id="show_hide_password">
                                                <label>Password</label>
                                                <div>
                                                    <input required aria-describedby="button-addon" autocomplete="off" id="password" class="form-control password input-group" name="password" type="password" placeholder="Password">
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                    </div>
                                    <div style="background: #335eea;padding: 25px;margin:0px -20px">

                                        <div class="row">
                                            <div class="col-sm-12 p-2">
                                                <button type="submit" class="btn btn-light btn-block" id="btn_login">Masuk</button>
                                            </div>
                                            <div class="col-lg-12 ">
                                                <div id="ErrorInfo">

                                                </div>
                                                @if (session('message'))
                                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                    {{ session('message') }}
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>



                                </form>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-6 section-custom">
                <center><img src="https://recruit.infomedia.co.id/assets/backend/images/flat/graphic-2.png" style="width:60%;"></center>
                <label class="badge-blue" style="text-align:center;">Pastikan data yang anda masukkan benar agar mudah diverifikasi.
                    Pastikan dokumen yang anda <i>upload</i> sudah benar dan dapat terverifikasi.</label>

                <h5 class="m-t-20">Belum memiliki akun?</h5>
                <label for="">Klik <a href="{{ url('regis') }}">disini untuk melakukan pendaftaran akun</a> </label>
                <hr>
                <h5 class="m-t-20">Lupa password?</h5>
                <a href="#">Klik disini</a>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $("#form-login-v3").validate({
                ignore: ":hidden",
                submitHandler: function(form) {
                    $.ajax({
                        url: "{{ url('auth') }}",
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
                                    title: "Berhasil Login!",
                                    text: "Sedang Memproses Data Anda",
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
                                    window.location.href = "{{ url('main/cv') }}"
                                });
                            }
                        },
                        error: function(xhr, desc, err) {
                            var respText = "";
                            try {
                                respText = eval(xhr.responseText);
                            } catch {
                                respText = xhr.responseText;
                            }

                            respText = unescape(respText).replaceAll("_n_", "<br/>")

                            var errMsg = '<div class="alert alert-warning mt-2 alert-dismissible fade show" role="alert"><small><b> Error ' + xhr.status + '!</b><br/>' + respText + '</small><button type="button" class="close" data-dismiss="alert" aria-label="Close"></button></button></div>'
                            $('#ErrorInfo').html(errMsg);
                        },
                    });
                }
            })
        })
    </script>
    @endsection