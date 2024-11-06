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
                    <form id="form-register-v3" name="form-validation" method="POST">
                        <div class="row">
                            <input type="hidden" name="csrf_sso_tg" value="a95b10d9691fe33c40a78517979a04af">
                            <input type="hidden" name="session_state" id="session_state" value="2C8C6FFEBA5E2BD3D4D3F4CBA7A811D5642798889662A9AF3E44B7441918B920CE3832838978248452ABD95A14519784">
                            <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response" value="">

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
                                    <input id="fullname" class="form-control" onkeypress="return isQuotes(event)" placeholder="Nama Lengkap" name="fullname" type="text" data-validation="[NOTEMPTY]" data-validation-message="Tidak boleh kosong" />
                                </div>
                            </div>
                            <div hidden class="col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label>No. KTP</label>
                                    <input id="ktp" class="form-control" placeholder="KTP" name="ktp" type="text" onkeypress="return isNumberKey(event)" data-validation="[KTP][NOTEMPTY]" maxlength="16" minlength="16" data-validation-message="$ No. KTP Harus 16 Angka" />
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label>Alamat Email</label>
                                    <input id="email" class="form-control" onkeypress="return isQuotes(event)" placeholder="Email" name="email" type="email" data-validation="[EMAIL]">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label>Konfirmasi Alamat Email</label>
                                    <input id="email_confirm" class="form-control" onkeypress="return isQuotes(event)" placeholder="Ketik ulang email" name="email_confirm" type="email" data-validation="[V==email]" data-validation-message="Penulisan Ulang Email Tidak Sesuai">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12">
                                <div class="form-group" id="show_hide_password">
                                    <label>Password</label>
                                    <!-- <input id="password" class="form-control password" name="password" type="password" data-validation="[L>=6]" maxlength="15" data-validation-message="Harus 6 Karakter" placeholder="Password" autocomplete="off"> -->
                                    <div>
                                        <input aria-describedby="button-addon" id="password" class="form-control password" name="password" type="password" data-validation="[L>=6]" maxlength="15" data-validation-message="Harus 6 Karakter" placeholder="Password" autocomplete="off">
                                        <div class="input-group-append icon-show-hide">
                                            <button class="btn btn-link" type="button" id="button-addon">
                                                <a href="javascript: void(0);"><i class="material-icons" style="color: #aaa">visibility_off</i></a>
                                            </button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12">
                                <div class="form-group" id="show_hide_password_conf">
                                    <label>Konfirmasi Password</label>
                                    <!-- <input class="form-control password" id="password_confirm" name="password_confirm" type="password" data-validation="[V==password]" data-validation-message="Penulisan Ulang Password Tidak Sesuai" placeholder="Ketik ulang password" autocomplete="off"> -->
                                    <div>
                                        <input aria-describedby="button-addon2" class="form-control password" id="password_confirm" name="password_confirm" type="password" data-validation="[V==password]" data-validation-message="Penulisan Ulang Password Tidak Sesuai" placeholder="Ketik ulang password" autocomplete="off">
                                        <div class="input-group-append icon-show-hide">
                                            <button class="btn btn-link" type="button" id="button-addon2">
                                                <a href="javascript: void(0);"><i class="material-icons" style="color: #aaa">visibility_off</i></a>
                                            </button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <!-- <div class="form-group">
                          <label>Verifikasi Captcha</label>
                          <div class="g-recaptcha" data-sitekey="6LcEqq0UAAAAAF6jFbMkut9GQQHiu_b5QonXNzkS" data-theme="light" data-type="image" data-size="normal" ></div>                        </div> -->
                            </div>
                            <div class="col-sm-12 col-md-12">
                                <div class="custom-fa">
                                    <label for="register_accept_checkbox">
                                        <input id="register_accept_checkbox" name="register_accept_checkbox" class="checkbox" value="First Choice" type="checkbox">
                                        <span>Dengan melakukan registrasi saya menyatakan telah membaca dan menerima
                                            <!-- <a data-toggle="modal" href="#TermsModal">ketentuan dan persyaratan yang berlaku</a> -->
                                            <a href="https://recruit.infomedia.co.id/privacy_policy/privacy_page" target="_blank">ketentuan dan persyaratan yang berlaku</a>
                                        </span>
                                    </label>
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