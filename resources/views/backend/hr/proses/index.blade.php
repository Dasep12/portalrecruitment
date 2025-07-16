@extends('backend.layouts.master')

@section('content')
<script src="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />

<div class="card" style="height: 130px;border-bottom: 3px solid rgba(173, 2, 2, 0.84);">
    <div class="card-body d-flex flex-column align-items-center justify-content-center">
        <div class="form-group col-md-4 text-center">
            <h4 class="mt-2 mb-0 font-weight-bolder">Proses Lowongan Pekerjaan</h4>
            <h5 class="mt-2 mb-0 font-weight-bolder"></h5>
            <select name="" id="job_id" class="form-control form-select mb-2">
                <option value="">Pilih Job Applicant</option>
                @foreach($lowongan as $low)
                <option value="{{ $low->id }}">{{ strtoupper($low->position) .' - ' . strtoupper($low->company) }}</option>
                @endforeach
            </select>


        </div>
    </div>
</div>
<div class="kanban-scroll-wrapper">
    <div class="pipeline-container">

    </div>

</div>
@include('backend.hr.proses.partial.CrudProsesRecruitment')


<script>
    function loadStages() {
        $.ajax({
            url: "{{ url('hr/stagesList') }}",
            method: "GET",
            data: {
                job_id: $("#job_id").val()
            },
            success: function(res) {
                $(".pipeline-container").empty();

                $.each(res, function(i, stage) {
                    const stageHtml = `
                    <div class="pipeline-column" data-stage-id="${stage.id}">
                        <div class="pipeline-header">
                            ${stage.name}
                            <span class="pipeline-counter">0</span> <!-- You can update this later -->
                            <button class="more-btn" aria-label="More options applied">&#x22EE;</button>
                        </div>
                        <div class="candidate-scroll">
                            <div class="loading">Loading candidates...</div>
                        </div>
                    </div>`;

                    $(".pipeline-container").append(stageHtml);

                    // Load candidates for this stage
                    loadEmployeesPerStage(stage.id, $("#job_id").val());
                });
            }
        });
    }

    function loadEmployeesPerStage(stage_id, job_id) {
        $.ajax({
            url: "{{ url('hr/stagesEmployee') }}",
            method: "GET",
            data: {
                job_id: job_id,
                stage_id: stage_id,
            },
            success: function(res) {
                var candidatesHtml = "";
                $.each(res, function(i, raw) {
                    console.log(raw)
                    candidatesHtml += `
                    <div class="candidate-card">
                        <div class="row justify-content-center col-md-12 col-lg-12 align-item-center">
                            <img height="40" width="40" src="{{ asset('photo') }}/${raw.photo}" alt="Portrait of a smiling young woman with dark hair tied up in a bun, wearing white shirt, studio shot with white background" class="profile-pic" />
                            <div class="text-center">
                            <label class="fw-bold mb-0">Dasep Depiyawan</label>
                            <div class="d-flex justify-content-around text-center profile-stats">
                                <div>
                                    <div class="fw-bold stat">${raw.usia}</div>
                                    <div class="text-muted small">Age</div>
                                </div>
                                <div>
                                    <div class="fw-bold stat">${raw.gender}</div>
                                    <div class="text-muted small">Gender</div>
                                </div>
                                <div>
                                    <div class="fw-bold stat">${raw.ipk}</div>
                                    <div class="text-muted small">GPA</div>
                                </div>
                            </div>
                            <div class="mt-0 justify-content-arround align-item-center">
                                <button onclick="openCanvas('${raw.candidate_id}','${raw.sort_progress}','${ raw.job_id}')"  type="button" class="btn btn-primary btn-sm btn-open"><i class="text-white bi bi-file-earmark-text"></i> CV </button>
                                   <button type="button" class="btn btn-${raw.style_btn} btn-sm btn-open"><i class="text-white bi ${raw.icons}"></i> ${raw.status.toUpperCase()} </button>
                            </div>
                        </div>
                    </div>`;
                });

                const container = $(`.pipeline-column[data-stage-id="${stage_id}"] .candidate-scroll`);
                container.html(candidatesHtml || "<div class='text-muted'>No candidates found.</div>");
                container.closest(".pipeline-column").find(".pipeline-counter").text(res.length);
            }
        });
    }
    //    <button onclick="openCanvas('${raw.id}')" class="btn btn-sm btn-outline-secondary btn-view" type="button">CV</button>
    $("#job_id").on("change", function() {
        loadStages();
    });
</script>
@endsection