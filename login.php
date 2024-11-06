    <div style="padding:0px;overflow: hidden;width:100%">
        <div class="container">
            <div class="row">
                <div class="col-md-6 section-custom" style="text-align:left">
                    <div class="card">
                        <div class="card-body">

                            <div class="row">
                                <div class="col-md-12 pt-3 pb-3">
                                    <form id="form-login-v3" name="form-validation" method="POST">
                                        <h4 style="margin-top: 10px;">Masuk ke Akun Anda</h4><br>


                                        <div class="row">
                                            <input type="hidden" name="csrf_sso_tg" value="a95b10d9691fe33c40a78517979a04af">
                                            <div class="col-sm-12 col-md-12">
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input id="validation[email]" class="form-control" placeholder="Email address" name="validation[email]" type="text" data-validation="[EMAIL]" autocomplete="off">
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md-12">
                                                <div class="form-group" id="show_hide_password">
                                                    <label>Password</label>
                                                    <!-- <input aria-describedby="button-addon" autocomplete="off" id="validation[password]" class="form-control password" name="validation[password]" type="password" data-validation="[L>=3]" data-validation-message="$ Harus 6 Karakter" placeholder="Password" autocomplete="off"> -->
                                                    <div>
                                                        <input aria-describedby="button-addon" autocomplete="off" id="validation[password]" class="form-control password input-group" name="validation[password]" type="password" data-validation="[L>=3]" data-validation-message="$ Harus 6 Karakter" placeholder="Password">
                                                        <div class="input-group-append icon-show-hide">
                                                            <button class="btn btn-link" type="button" id="button-addon">
                                                                <a href="javascript: void(0);"><i class="material-icons" style="color: #aaa">visibility_off</i></a>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                        </div>
                                        <div style="background: #335eea;padding: 25px;margin:0px -20px">
                                            <div class="row">
                                                <div class="col-sm-6 col-md-6">
                                                    <div class="custom-fa">
                                                        <label for="remember_me_checkbox">
                                                            <input id="remember_me_checkbox" name="remember_me_checkbox" class="checkbox" type="checkbox">
                                                            <span style="color:white">Ingat Saya</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-6">
                                                    <div class="login-box-link-action">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-12 p-2">
                                                    <button type="submit" class="btn btn-light btn-block" id="btn_login">Masuk</button>
                                                </div>
                                            </div>
                                        </div>
                                        <HR>
                                        <div class="row">
                                            <div class="col-sm-12 p-2">
                                                <div class="g-signin2" data-width="240" data-height="42" data-theme="dark" data-longtitle="true" data-onsuccess="onSignInGoogle"></div>
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
                    <label for="">Klik <a href="https://recruit.infomedia.co.id/register_page">disini untuk melakukan pendaftaran akun</a> </label>
                    <hr>
                    <h5 class="m-t-20">Lupa password?</h5>
                    <a href="https://recruit.infomedia.co.id/forgot_password">Klik disini</a>
                </div>
            </div>
        </div>