@extends('backend.layouts.master')

@section('content')

<div class="row">

    <div class="col-md-2"></div>

    <section class=" col-xs-12 col-md-8 content-detail p-0">
        <div class="card-header text-center" style="background-color:#A80807;border-top-left-radius: 15px;
border-top-right-radius: 15px;">
            <span class="cat__core__title" style="font-size:13pt; color:white;">
                <label for="">Anda akan melamar Pekerjaan Sebagai</label><br><strong>{{ $detail->position }}</strong><br>
                <label> di {{ $detail->company }}</label>
            </span>
        </div>


        <div style="">
            <div class="col-xs-12 mx-auto" style="display: none;">
                <div class="d-flex justify-content-center">
                    <i class="fa fa-spin fa-2x fa-circle-o-notch"></i>
                </div>
            </div>

            <!-- <form id="form-apply" name="form-apply" method="POST" style="display: none"> -->
            <div class="panel">
                <div id="collapseOne" class="card-collapse collapse show" role="tabcard" aria-labelledby="headingOne">
                    <div class="card-block" style="background: #FFF;">
                        <div id="status_complete">
                            <div class="text-center col-md-12">
                                <div class="w-50 d-inline-block pt-8 pb-8 mt-8 mb-8"> <img src="https://recruit.infomedia.co.id//assets/backend/images/flat/graphic-1.png" width="60%"><br><br>

                                    <div class="row">
                                        <div class="form-group col-md-12">
                                            <label>Masukan NIK anda untuk melamar : <span style="color:red;"> *wajib</span></label>
                                            <input onchange="cekFields()" autofocus type="text" required class="form-control" name="nik" id="nik">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label>Dari mana anda tahu lamaran ini?: <span style="color:red;"> *wajib</span></label>
                                            <select onchange="cekFields()" class="form-control select2" required name="known_from" id="known_from">
                                                <option value="">Pilih</option>
                                                <option value="instagram">Instagram</option>
                                                <option value="telegram">Telegram</option>
                                                <option value="facebook">Facebook</option>
                                                <option value="linkedin">Linkedin</option>
                                                <option value="whatsapp">Whatsapp</option>
                                                <option value="tiktok">Tiktok</option>
                                                <option value="jobstreet">Jobstreet</option>
                                                <option value="indeed">Indeed</option>
                                                <option value="campus_hiring">Campus Hiring</option>
                                                <option value="jobfair">Jobfair</option>
                                                <option value="kitalulus">Kitalulus</option>
                                                <option value="refferal">Refferal</option>
                                                <option value="others">Others</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-1" style="background: #d7e0e8;padding: 10px;text-align: center;"> <input onchange="cekFields()" type="checkbox" id="checkbox_surat_pernyataan" name="checkbox_surat_pernyataan" style="margin: auto;text-align: center;"> </div>
                                        <div class="col-md-11" style="background: whitesmoke;padding: 5px;"> <label> Dengan ini saya menyatakan bahwa data pada Curiculum Vitae yang saya isi adalah <b>BENAR</b>.</label> </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div id="div_apply_job">
                            <div class="row mt-3">
                                <div class="col-md-4"></div>
                                <div class="col-md-2" align="center">
                                    <a onclick="goBack()" style="cursor:pointer;" class="btn btn-default previous"><i class="icmn-undo2"></i> Kembali</a>
                                </div>
                                <div class="col-md-2" align="center"> <button style="cursor: pointer;" onclick="apply_job()" id="btn_apply_job" class="btn btn-primary" disabled=""><i class="fa fa-check"></i> Lamar Sekarang </button> </div>
                            </div>
                            <div class="col-md-4"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- </form> -->
        </div>

    </section>
    <div class="col-md-2"></div>
</div>

<script>
    function apply_job() {
        $.ajax({
            url: "{{ url('main/applyJob') }}",
            method: "POST",
            cache: false,
            beforeSend: function() {
                // $(".loading").fadeOut("slow");
            },
            complete: function() {
                $(".loading").fadeOut("slow");
            },
            data: {
                '_token': "{{ csrf_token() }}",
                'nik': $("#nik").val(),
                'job_id': "{{ $detail->id }}",
                'source_jobs': $("#known_from").val(),
            },
            success: function(res) {
                if (res.success) {
                    swal({
                        title: "Berhasil Melamar!",
                        text: res.message,
                        timer: 2000,
                        showConfirmButton: false,
                        allowOutsideClick: false,
                        icon: "success",
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
                        window.location.href = "{{ url('main/apply') }}"
                    });
                } else {
                    swal({
                        title: "Gagal!",
                        text: res.message,
                        timer: 3000,
                        showConfirmButton: false,
                        allowOutsideClick: false,
                        icon: "error",
                    })
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
        })
    }



    function cekFields() {
        const nik = $("#nik").val().trim();
        const knownFrom = $("#known_from").val().trim();
        const isChecked = $("#checkbox_surat_pernyataan").is(":checked");

        if (nik != "" && knownFrom != "" && isChecked) {
            $("#btn_apply_job").prop("disabled", false);
        } else {
            $("#btn_apply_job").prop("disabled", true);
        }
    }
</script>
@endsection