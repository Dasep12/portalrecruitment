<div class="modal fade" id="CrudPostJobModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="CrudPostJobModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <form action="#" method="post" id="formPostJob" data-parsley-validate enctype="multipart/form-data">
            <div class="modal-content p-3 rounded-lg">
                <div class="modal-header border-0">
                    <h5 class="modal-title" id="CrudPostJobModalLabel">Post Job</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span>&times;</span>
                    </button>
                </div>
                @csrf
                <div class="modal-body">
                    <!-- About Company -->
                    <h5 class="mb-3">About Company</h5>
                    <div class="row">
                        <div class="form-group col-md-3">
                            <label>Company*</label>
                            <select name="company" class="custom-select" id="company" required data-parsley-required-message="Pilih perusahaan">
                                <option value="">*Select</option>
                                <option>PT Bonecom Tricom</option>
                                <option>PT Ravalia Inti Mandiri</option>
                                <option>PT Bonecom Tricom Paintech</option>
                                <option>PT Bonecom Inti Technology</option>
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label>Location*</label>
                            <select name="location" class="custom-select" id="location" required data-parsley-required-message="Pilih lokasi">
                                <option value="">*Select</option>
                                <option>Karawang</option>
                                <option>Bekasi</option>
                                <option>Tegal</option>
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label>Bagian*</label>
                            <select name="position" class="custom-select" id="position" required data-parsley-required-message="Pilih Bagian">
                                <option value="">*Select</option>
                                @foreach($bagian as $bg)
                                <option value="{{ $bg->id }}">{{ $bg->name_partjob }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label>Job Part</label>
                            <input type="text" id="job_part" required data-parsley-required-message="Isi job part yang dibutuhkan" name="job_part" class="form-control" placeholder="ex : Programmer">
                        </div>
                    </div>

                    <!-- Job Profile and Description -->
                    <div class="row mt-1">
                        <div class="form-group col-md-4">
                            <label>Job Description*</label>
                            <textarea class="form-control summernote" name="jobdescription" id="jobdescription" rows="3" required data-parsley-minlength="10" data-parsley-required-message="Isi deskripsi job minimal 10 karakter"></textarea>
                        </div>
                        <div class="form-group col-md-4">
                            <label>Job Requirement*</label>
                            <textarea class="form-control summernote" name="jobrequirement" id="jobrequirement" rows="3" required data-parsley-minlength="10" data-parsley-required-message="Isi requirement job minimal 10 karakter"></textarea>
                        </div>
                        <div class="form-group col-md-4">
                            <label>Skills Requirement*</label>
                            <textarea class="form-control summernote" name="skill_requirement" id="skill_requirement" rows="3" required data-parsley-minlength="5" data-parsley-required-message="Isi skill requirement"></textarea>
                        </div>
                    </div>

                    <!-- Job Category -->
                    <div class="row mt-1">
                        <div class="form-group col-md-3">
                            <label>Job Type*</label><br>
                            @foreach($typejob as $jobtype)
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" name="type_job[]" value="{{ $jobtype->name }}" type="checkbox" id="{{ $jobtype->name }}" required data-parsley-mincheck="1" data-parsley-required-message="Pilih minimal satu tipe pekerjaan">
                                <label class="form-check-label" for="{{ $jobtype->name }}">{{ $jobtype->name }}</label>
                            </div>
                            @endforeach
                        </div>

                        <div class="form-group col-md-3">
                            <label>Education*</label><br>
                            @foreach($education as $edu)
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" value="{{ $edu->code }}" name="education[]" id="{{ $edu->code }}" required data-parsley-mincheck="1" data-parsley-required-message="Pilih minimal satu jenjang pendidikan">
                                <label class="form-check-label" for="{{ $edu->code }}">{{ $edu->code }}</label>
                            </div>
                            @endforeach
                        </div>

                        <div class="form-group col-md-2">
                            <label>Start Date *</label>
                            <input type="text" id="start" name="start" class="form-control datetimepicker1" placeholder="ex 2025-12-12" required data-parsley-required-message="Isi tanggal mulai">
                        </div>
                        <div class="form-group col-md-2">
                            <label>End Date *</label>
                            <input type="text" id="end" name="end" class="form-control datetimepicker2" placeholder="ex : 2025-12-12" required data-parsley-required-message="Isi tanggal selesai">
                        </div>
                        <div class="form-group col-md-2">
                            <label>Kuota Pelamar*</label>
                            <input type="number" name="kuota" id="kuota" class="form-control" placeholder="ex : 100" required data-parsley-type="number" data-parsley-min="1" data-parsley-required-message="Isi jumlah kuota minimal 1">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <input type="text" hidden name="CrudAction" id="CrudAction">
                    <input type="text" hidden name="id" id="id">
                </div>

                <div class="" id="CrudErrorInfo">

                </div>
                <div class="modal-footer border-0">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal"><i class="fa fa-close"></i> Cancel</button>
                    <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-save"></i> Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>


<script>
    $('#jobdescription,#skill_requirement,#jobrequirement').summernote({
        height: 200,
        toolbar: [
            ['style', ['bold', 'italic', 'list']],
            ['para', ['ul', 'ol']],
        ],
        tooltip: false
    });
</script>

<script>
    function CrudPostJob(action, id) {
        const $form = $("#formPostJob");
        $form[0].reset();
        $form.parsley().reset();
        $("#CrudErrorInfo").html('');
        // Reset summernote fields
        $('#jobdescription').summernote('code', '');
        $('#jobrequirement').summernote('code', '');
        $('#skill_requirement').summernote('code', '');
        $("#CrudAction").val(action);
        $("#id").val(id);
        var rowData = $('#table').bootstrapTable('getRowByUniqueId', id);
        if (rowData) {
            // Contoh isi field ke form
            $("#company").val(rowData.company);
            $("#location").val(rowData.location);
            $("#position").val(rowData.position_id);
            $("#job_part").val(rowData.job_part);
            $("#kuota").val(rowData.kuota);
            $("#start").val(rowData.start);
            $("#end").val(rowData.end);
            // Set data summernote
            $('#jobdescription').summernote('code', rowData.jobdescription || '');
            $('#jobrequirement').summernote('code', rowData.jobrequirement || '');
            $('#skill_requirement').summernote('code', rowData.skill_requirement || '');

            // Jika ada checkbox type_job[]
            $("input[name='type_job[]']").prop("checked", false); // reset
            if (rowData.type_job) {
                var types = rowData.type_job.split(',');
                types.forEach(function(type) {
                    $("input[name='type_job[]'][id='" + type.trim() + "']").prop("checked", true);
                });
            }

            // Checkbox education[]
            $("input[name='education[]']").prop("checked", false);
            if (rowData.education) {
                var edus = rowData.education.split(',');
                edus.forEach(function(edu) {
                    $("input[name='education[]'][id='" + edu.trim() + "']").prop("checked", true);
                });
            }
        }
        disabledEnableForm(false, "formPostJob");
        switch (action.toLowerCase()) {
            case 'create':
                $("#CrudPostJobModal").modal('show');
                break;
            case 'update':
                $("#CrudPostJobModal").modal('show');
                break;
            case 'delete':
                disabledEnableForm(true, "formPostJob");
                $("#CrudPostJobModal").modal('show');
                break;
        }
    }

    $('.datetimepicker1,.datetimepicker2').datetimepicker({
        format: 'YYYY-MM-DD', // Only show the year// Start view mode at years
    });

    $(document).ready(function() {
        $('#formPostJob').on('submit', function(e) {
            e.preventDefault();
            var formElement = this; // referensi form
            var formData = new FormData(this);
            formData.append('_token', $('input[name="_token"]').val());
            if ($(this).parsley().isValid()) {
                // kirim data via AJAX di sini
                $.ajax({
                    url: "{{ url('hr/crudPostJob') }}",
                    method: "POST",
                    contentType: false, // penting untuk FormData
                    processData: false, // penting untuk FormData
                    data: formData,
                    success: function(res) {
                        if (res.success) {
                            console.log(res);
                            initTable();
                            swal({
                                title: "Berhasil",
                                text: res.msg,
                                icon: "success",
                                button: "Ok",
                            });
                            $("#CrudPostJobModal").modal('hide');
                        } else {
                            var errMsg = '<div class="col-md-12"><div class="alert alert-custom-warning alert-warning alert-dismissible fade show" role="alert"><small><b> Error !</b><br/>' + res + '</small><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button></div></div>'
                            $('#CrudErrorInfo').html(errMsg);
                        }
                    },
                    error: function(xhr, desc, err) {
                        var respText = "";
                        try {
                            respText = eval(xhr.responseText);
                        } catch {
                            respText = xhr.responseText;
                        }
                        console.log(err)
                        respText = unescape(respText).replaceAll("_n_", "<br/>")
                        var errMsg = '<div class="col-md-12"><div class="alert alert-custom-warning alert-warning alert-dismissible fade show" role="alert"><small><b> Error ' + xhr.status + '!</b><br/>' + respText + '</small><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button></div></div>'
                        $('#CrudErrorInfo').html(errMsg);
                    },
                })
            }
        });
    });
</script>