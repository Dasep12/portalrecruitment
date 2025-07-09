@extends('backend.layouts.master')

@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-table@1.24.1/dist/bootstrap-table.min.css">

<script src="https://cdn.jsdelivr.net/npm/tableexport.jquery.plugin@1.29.0/tableExport.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-table@1.24.1/dist/bootstrap-table.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-table@1.24.1/dist/bootstrap-table-locale-all.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-table@1.24.1/dist/extensions/export/bootstrap-table-export.min.js"></script>



<style>
    .page-list .btn-group .btn.dropdown-toggle {
        padding: 0.25rem 0.5rem !important;
        font-size: 0.875rem !important;
        line-height: 1.5 !important;
    }

    /* Untuk menyamakan dengan class btn-sm Bootstrap */
    .page-list .btn-group .btn.dropdown-toggle .caret {
        margin-left: 0.25rem !important;
    }
</style>

<div class="container-fluid">
    <div class="card col-lg-12">
        <div class="card-body">
            <div id="toolbar">
                <button
                    type="button"
                    id="remove"
                    class="btn btn-sm btn-danger"
                    disabled>
                    <i class="fa fa-trash"></i> Delete
                </button>

                <button
                    onclick="CrudPostJob('Create','*')"
                    id=""
                    class="btn btn-sm btn-primary">
                    <i class="fa fa-telegram"></i> Post Job
                </button>
            </div>
            <table
                id="table"
                data-toolbar="#toolbar"
                data-search="true"
                data-show-refresh="true"
                data-show-toggle="false"
                data-show-fullscreen="false"
                data-show-columns="true"
                data-show-columns-toggle-all="true"
                data-detail-view="true"
                data-show-export="true"
                data-click-to-select="false"
                data-detail-formatter="detailFormatter"
                data-minimum-count-columns="2"
                data-show-pagination-switch="false"
                data-pagination="true"
                data-id-field="id"
                data-page-list="[10, 25, 50, 100, all]"
                data-show-footer="true"
                data-side-pagination="server"
                data-response-handler="responseHandler"
                data-locale="en-US"
                data-url="{{ url('hr/listJobJson') }}">
            </table>

        </div>
    </div>
</div>

@include('backend.hr.postjob.partial.CrudPostJob')
<script>
    const $table = $('#table')
    const $remove = $('#remove')
    let selections = []

    function getIdSelections() {
        return $.map($table.bootstrapTable('getSelections'), function(row) {
            return row.id
        })
    }

    window.responseHandler = res => {
        $.each(res.rows, function(i, row) {
            row.state = $.inArray(row.id, selections) !== -1
        })
        return res
    }

    window.detailFormatter = (index, row) => {
        const html = []
        $.ajax({
            url: "{{ url('hr/listJsonPelamar') }}",
            method: "GET",
            cache: false,
            data: {
                id: row.id
            },
            success: function(res) {
                $.each(res, function(i, val) {
                    var content = ` <div class="mt-4">
                <div class="card mb-4 p-3">
                    <div class="row">
                        <!-- Left: Photo + Experience -->
                        <div class="col-md-2 text-center">
                            <img src="https://via.placeholder.com/80" class="rounded-circle mb-2" alt="Photo">
                            <h2 class="mb-0">16</h2>
                            <small class="text-muted">years<br>experience</small>
                        </div>

                        <!-- Middle: Info -->
                        <div class="col-md-10">
                            <div class="row">
                                <!-- Currently -->
                                <div class="col-md-3 mb-2">
                                    <p><strong>Currently:</strong><br>
                                        Senior UX Designer<br>
                                        CreativeLive, San Francisco
                                    </p>
                                </div>

                                <!-- Previously -->
                                <div class="col-md-3 mb-2">
                                    <p><strong>Previously:</strong><br>
                                        <a href="#">Quantcast</a>, <a href="#">Yahoo!</a>, <a href="#">EkoTable</a><br>
                                        <a href="#">Gallup Interactive</a>, <a href="#">Visual Produce</a>
                                    </p>
                                </div>

                                <!-- Portfolio -->
                                <div class="col-md-2 mb-2">
                                    <p><strong>Portfolio:</strong><br>
                                        <a href="#">View</a>
                                    </p>
                                </div>

                                <!-- Skills -->
                                <div class="col-md-4 mb-2">
                                    <p><strong>Skills:</strong><br>
                                        User Experience, UI Design, Web Design,<br>
                                        Graphic Design, Art Direction
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Right: Attachments + Actions -->
                        <div class="col-md-12 text-center">
                            <button class="btn btn-primary btn-sm">✉️ Write</button>
                            <button class="btn btn-secondary btn-sm">✖️ Pass</button>
                        </div>
                    </div>
                </div>
            </div>`;
                    html.push(content)
                });
            }
        })

        return html;
    }

    function ActionFormatter(value, row, cell) {
        return [
            `<a class="like" href="javascript:void(0)" onclick="CrudPostJob('Update', '${row.id}')" title="Like">`,
            '<i class="text-success fa fa-edit"></i>',
            '</a>  ',
            `<a class="remove" onclick="CrudPostJob('Delete', '${row.id}')" href="javascript:void(0)" title="Remove">`,
            '<i class="text-danger fa fa-trash"></i>',
            '</a>'
        ].join('')
    }

    function loadPelamarDetail(id, $detail) {
        $detail.html('<div class="p-3">Loading...</div>');

        $.ajax({
            url: "{{ url('hr/listJsonPelamar') }}",
            method: "GET",
            data: {
                id: id
            },
            success: function(res) {
                const html = [];
                $.each(res, function(i, val) {
                    const personal = val.personal || {};
                    const educationList = val.education || [];
                    const experienceList = val.experience || [];
                    const skillList = val.skills || [];
                    // console.log(skillList)
                    const currentEdu = educationList.length ?
                        '<ul>' + educationList.map(e => '<li>' + e.campus + " - " + e.jurusan + '</li>').join(', ') + '</ul>' :
                        '-';
                    const currentExp = experienceList.length ?
                        '<ul>' + experienceList.map(e => '<li>' + e.position_job + " at " + e.company_job + '</li>').join(', ') + '</ul>' :
                        '-';
                    const skills = skillList.length ?
                        '<ul>' + skillList.map(s => `<li>${s.skill}</li>`).join('') + '</ul>' :
                        '-';

                    html.push(`
                        <div class="mt-3">
                            <div class="card p-3">
                                <div class="row">
                                    <div class="col-md-2 text-center">
                                        <img height="80" width="80" src="{{ asset('photo') }}/${ personal.photo ?? ''}" class="rounded-circle mb-2" alt="Photo">
                                        <h2 class="mb-0"></h2>
                                        <small class="text-bold">${personal.gender ?? '-'}</small><br>
                                        <small class="text-bold">Usia ${personal.usia ?? '-'} Tahun</small>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="d-flex">
                                            <div class="col-md-4 mb-2">
                                                <strong>Pendidikan:</strong><br>
                                                ${currentEdu}
                                            </div>
                                            <div class="col-md-4 mb-2">
                                                <strong>Pengalaman Kerja:</strong><br>
                                                ${currentExp}
                                            </div>
                                        
                                            <div class="col-md-4 mb-2">
                                                <strong>Skills:</strong><br>
                                                ${skills}
                                            </div>
                                        </div>
                                    </div>
                                  <div class="col-md-12 text-center mt-2">
                                        <a href="" class="btn btn-danger btn-sm">✉️ CV</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    `);
                });
                // <div class="col-md-12 text-center mt-2">
                //     <button class="btn btn-primary btn-sm">✉️ Write</button>
                //     <button class="btn btn-secondary btn-sm">✖️ Pass</button>
                // </div>

                $detail.html(`
                    <div style="max-height: 180px; overflow-y: auto;">
                        ${html.join('')}
                    </div>
                `);
            },
            error: function() {
                $detail.html('<div class="p-3 text-danger">Failed to load data</div>');
            }
        });
    }



    // function totalNameFormatter(value, row, cell) {
    //     return value
    // }



    function initTable() {
        $table.bootstrapTable('destroy').bootstrapTable({
            height: 550,
            locale: $('#locale').val(),
            fixedColumns: true,
            uniqueId: 'id',
            detailView: true,
            onExpandRow: function(index, row, $detail) {
                loadPelamarDetail(row.id, $detail);
            },
            fixedNumber: 1, // Kolom yang tetap di kiri
            icons: {
                paginationSwitchDown: 'fa fa-chevron-down',
                paginationSwitchUp: 'fa fa-chevron-up',
                refresh: 'fa fa-refresh',
                toggleOff: 'fa fa-toggle-off',
                toggleOn: 'fa fa-toggle-on',
                columns: 'fa fa-th-list',
                fullscreen: 'fa fa-expand',
                detailOpen: 'fa fa-plus-circle',
                detailClose: 'fa fa-minus-circle',
                export: 'fa fa-download',
                search: 'fa fa-search'
            },
            columns: [
                [{
                        title: 'id',
                        field: 'id',
                        valign: 'middle',
                        rowspan: 2,
                        visible: false
                    },
                    {
                        title: 'position_id',
                        field: 'position_id',
                        valign: 'middle',
                        rowspan: 2,
                        visible: false
                    }, {
                        field: 'state',
                        checkbox: true,
                        align: 'center',
                        valign: 'middle',
                        rowspan: 2
                    },
                    {
                        title: 'Perusahaan',
                        field: 'company',
                        valign: 'middle',
                        rowspan: 2,
                        align: 'left',
                        width: 200
                    },
                    {
                        title: 'Lokasi',
                        field: 'location',
                        valign: 'middle',
                        rowspan: 2,
                        align: 'left',
                        width: 150
                    },
                    {
                        title: 'Posisi',
                        field: 'position',
                        valign: 'middle',
                        rowspan: 2,
                        align: 'left',
                        width: 150
                    },
                    {
                        title: 'Bagian',
                        field: 'job_part',
                        valign: 'middle',
                        rowspan: 2,
                        align: 'left',
                        width: 150
                    },
                    {
                        title: 'Tipe Pekerjaan',
                        field: 'type_job',
                        valign: 'middle',
                        align: 'left',
                        rowspan: 2,
                        width: 150,
                    },
                    {
                        title: 'Persentase',
                        valign: 'middle',
                        align: 'center',
                        colspan: 2
                    },
                    {
                        title: 'Masa Berlaku',
                        valign: 'middle',
                        align: 'center',
                        colspan: 2
                    },
                    {
                        title: 'Action',
                        align: 'center',
                        valign: 'middle',
                        rowspan: 2,
                        formatter: ActionFormatter,
                        width: 100
                    }
                ],
                [{
                        title: 'Kuota',
                        field: 'kuota',
                        align: 'center',
                        width: 80
                    },
                    {
                        title: 'Pelamar',
                        field: 'total_pelamar',
                        align: 'center',
                        width: 80
                    },
                    {
                        title: 'Start',
                        field: 'start',
                        align: 'center',
                        width: 180,
                        formatter: function(value) {
                            return value ? moment(value).format('D MMM YYYY') : '-';
                        }
                    },
                    {
                        title: 'End',
                        field: 'end',
                        align: 'center',
                        width: 180,
                        formatter: function(value) {
                            return value ? moment(value).format('D MMM YYYY') : '-';
                        }
                    }
                ]
            ],
            queryParams: function(params) {
                return {
                    limit: params.limit,
                    offset: params.offset,
                    search: params.search,
                    sort: params.sort,
                    order: params.order
                };
            },
        })
        // $table.on('check.bs.table uncheck.bs.table ' +
        //     'check-all.bs.table uncheck-all.bs.table',
        //     function() {
        //         $remove.prop('disabled', !$table.bootstrapTable('getSelections').length)

        //         // save your data, here just save the current page
        //         selections = getIdSelections()
        //         // push or splice the selections if you want to save all data selections
        //     })
        // $table.on('all.bs.table', function(e, name, args) {
        //     // console.log(name, args)
        // })

        // $remove.click(function() {
        //     const ids = getIdSelections()

        //     $table.bootstrapTable('remove', {
        //         field: 'id',
        //         values: ids
        //     })
        //     $remove.prop('disabled', true)
        // })
    }

    // Tambahkan class btn-sm langsung setelah table dibuat
    $('.page-list .btn-group .btn.dropdown-toggle').addClass('btn-sm');
    $(function() {
        initTable()
        $('#locale').change(initTable)

        $("page-list")
    })
</script>




@endsection