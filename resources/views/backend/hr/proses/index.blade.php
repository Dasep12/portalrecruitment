@extends('backend.layouts.master')

@section('content')


<div class="card" style="height: 130px;border-bottom: 3px solid rgba(173, 2, 2, 0.84);">
    <div class="card-body d-flex flex-column align-items-center justify-content-center">
        <div class="form-group col-md-4 text-center">
            <select name="" class="form-control form-select mb-2">
                <option value="">Pilih Job Applicant</option>
                @foreach($lowongan as $low)
                <option value="{{ $low->id }}">{{ strtoupper($low->position) .' - ' . strtoupper($low->company) }}</option>
                @endforeach
            </select>
            <h4 class="mt-2 mb-0 font-weight-bolder">Recruitment IT Bonecom Tricom</h4>
            <h5 class="mt-2 mb-0 font-weight-bolder">50 Pelamar</h5>

        </div>
    </div>
</div>
<div class="kanban-scroll-wrapper">
    <div class="pipeline-container">
        @foreach($progress as $prog)
        <div class="pipeline-column">
            <div class="pipeline-header">
                {{ $prog->name }}
                <span class="pipeline-counter">4</span>
                <button class="more-btn" aria-label="More options applied">&#x22EE;</button>
            </div>
            <div class="candidate-scroll">
                @for($j = 1 ; $j <= 20; $j++)
                    <div class="candidate-card">
                    <div class="candidate-info">
                        <div class="candidate-icon color-JF" title="Jenny Fullerton">JF</div>
                        <div class="candidate-name">Jenny Fullerton</div>
                    </div>
                    <div class="stars" aria-label="Rating 0 out of 5">
                        <span class="star empty">&#9733;</span>
                        <span class="star empty">&#9733;</span>
                        <span class="star empty">&#9733;</span>
                        <span class="star empty">&#9733;</span>
                        <span class="star empty">&#9733;</span>
                    </div>
                    <button onclick="openCanvas()" class="btn btn-sm btn-outline-secondary btn-view" type="button">View</button>
            </div>
            @endfor
        </div>
    </div>
    @endforeach
</div>
</div>


@include('backend.hr.proses.partial.CrudProsesRecruitment')



@endsection