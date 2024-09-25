@extends('layouts.backend.default')

@push('head')
<link href="/assets/backend/plugins/datatables.net-bs5/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
<link href="/assets/backend/plugins/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css" rel="stylesheet" />
<link href="/assets/backend/plugins/datatables.net-select-bs5/css/select.bootstrap5.min.css" rel="stylesheet" />
@endpush

@section('content')
<div class="row">
	<!-- BEGIN col-3 -->
	<div class="col-xl-3 col-md-6">
		<div class="widget widget-stats bg-blue">
			<div class="stats-icon"><i class="fa fa-desktop"></i></div>
			<div class="stats-info">
				<h4>TOTAL VISITORS</h4>
				<p>3,291,922</p>
			</div>
			<div class="stats-link">
				<a href="javascript:;">View Detail <i class="fa fa-arrow-alt-circle-right"></i></a>
			</div>
		</div>
	</div>
	<!-- END col-3 -->
	<!-- BEGIN col-3 -->
	<div class="col-xl-3 col-md-6">
		<div class="widget widget-stats bg-info">
			<div class="stats-icon"><i class="fa fa-link"></i></div>
			<div class="stats-info">
				<h4>BOUNCE RATE</h4>
				<p>20.44%</p>
			</div>
			<div class="stats-link">
				<a href="javascript:;">View Detail <i class="fa fa-arrow-alt-circle-right"></i></a>
			</div>
		</div>
	</div>
	<!-- END col-3 -->
	<!-- BEGIN col-3 -->
	<div class="col-xl-3 col-md-6">
		<div class="widget widget-stats bg-orange">
			<div class="stats-icon"><i class="fa fa-users"></i></div>
			<div class="stats-info">
				<h4>UNIQUE VISITORS</h4>
				<p>1,291,922</p>
			</div>
			<div class="stats-link">
				<a href="javascript:;">View Detail <i class="fa fa-arrow-alt-circle-right"></i></a>
			</div>
		</div>
	</div>
	<!-- END col-3 -->
	<!-- BEGIN col-3 -->
	<div class="col-xl-3 col-md-6">
		<div class="widget widget-stats bg-red">
			<div class="stats-icon"><i class="fa fa-clock"></i></div>
			<div class="stats-info">
				<h4>AVG TIME ON SITE</h4>
				<p>00:12:23</p>
			</div>
			<div class="stats-link">
				<a href="javascript:;">View Detail <i class="fa fa-arrow-alt-circle-right"></i></a>
			</div>
		</div>
	</div>
	<!-- END col-3 -->
</div>

<a href="{{ URL::Current() }}/create"><button type="button" class="btn btn-dark"> CREATE </button></a>

										<a href="javascript:;" class="btn btn-dark"><i class="fa fa-filter"></i> Filter </a>

<div class="btn-group">
	<button type="button" class="btn btn-dark"> Export </button>
	<button type="button" class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><b class="caret"></b></button>
	<div class="dropdown-menu dropdown-menu-end" style="">
		<a href="javascript:;" class="dropdown-item">Action</a>
		<a href="javascript:;" class="dropdown-item">Another action</a>
		<a href="javascript:;" class="dropdown-item">Something else here</a>
		<div class="dropdown-divider"></div>
		<a href="javascript:;" class="dropdown-item">Separated link</a>
	</div>
</div>
<hr>

<div class="panel panel-inverse">
	<div class="panel-heading">
		<h4 class="panel-title"> Main </h4>
		<!-- <div class="btn-group my-n1">
		<button type="button" class="btn btn-success btn-xs">Action</button>
		<button type="button" class="btn btn-success btn-xs dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><b class="caret"></b></button>
		<div class="dropdown-menu dropdown-menu-end" style="">
		<a href="javascript:;" class="dropdown-item">Action</a>
		<a href="javascript:;" class="dropdown-item">Another action</a>
		<a href="javascript:;" class="dropdown-item">Something else here</a>
		<div class="dropdown-divider"></div>
		<a href="javascript:;" class="dropdown-item">Separated link</a>
		</div>
		</div> -->
		<div class="panel-heading-btn">
			<!-- <a href="javascript:;" data-toggle="panel-expand"><i class="fa fa-expand"></i></a>
			<a href="javascript:;" class="text-white" data-toggle="panel-reload"><i class="fa fa-sync"></i></a> -->
			<a href="javascript:;" class="btn btn-xs btn-icon btn-white" data-toggle="panel-collapse"><i class="fas fa-caret-down"></i></a>
		</div>
	</div>
	<div class="panel-body">
		<div class="table-responsive">
			<table width="100%" id="exilednoname_table" class="table table-hover align-middle">
				<thead>
					<tr>
						<th width="1%"> </th>
						<th width="1%" data-orderable="false"> No. </th>
						<th class="text-nowrap"> Date </th>
						<th class="text-nowrap"> Name </th>
						<th class="text-nowrap"> Description </th>
						<th class="text-nowrap"> Active </th>
						<th class="text-nowrap"> Action </th>
					</tr>
				</thead>
			</table>
		</div>
	</div>
</div>
@endsection

@push('js')
<script src="/assets/backend/plugins/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="/assets/backend/plugins/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>
<script src="/assets/backend/plugins/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="/assets/backend/plugins/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js"></script>
<script src="/assets/backend/js/demo/table-manage-default.demo.js"></script>
<script src="/assets/backend/plugins/datatables.net-select/js/dataTables.select.min.js"></script>
<script src="/assets/backend/plugins/datatables.net-select-bs5/js/select.bootstrap5.min.js"></script>
<script src="/assets/backend/plugins/datatables.net-colreorder/js/dataTables.colReorder.min.js"></script>
	<script src="/assets/backend/plugins/datatables.net-colreorder-bs5/js/colReorder.bootstrap5.min.js"></script>
<script src="/assets/backend/js/demo/table-manage-select.demo.js"></script>

<script>
	$(document).ready(function() {
		$('#toast-container').fadeOut(5000);
		KTApp.block('#exilednoname_body', {
			overlayColor: '#000000',
			state: 'primary',
			message: "{{ __('default.label.please-wait') }} ..."
		});

		setTimeout(function() {
			KTApp.unblock('#exilednoname_body');
		}, 2000);
	});

	"use strict";

	var sort = 1;
	var table = $('#exilednoname_table').DataTable({
		"bInfo": false,
		// "sPaginationType": "full_numbers",

		serverSide: true,
		searching: true,
		rowId: 'Collocation',
		colReorder: true,
		select: {
			style: 'multi',
			selector: 'td:first-child .checkable',
		},
		ajax: {
			url: "{{ URL::current() }}",
			"data" : function (ex) {
				@if (empty($date) || $date == 'true')
				ex.date_start = $('#date_start').val();
				ex.date_end = $('#date_end').val();
				@endif
				@stack('filter-data')
			}
		},
		headerCallback: function(thead, data, start, end, display) {
			thead.getElementsByTagName('th')[0].innerHTML = `
			<input class="form-check-input group-checkable checkbox" type="checkbox" value="" id="flexCheckDefault">`;
		},
		"lengthMenu": [[50, 100, 250, 500, -1], [50, 100, 250, 500, "All"]],
		buttons: [
			{ extend: 'print', exportOptions: { columns: "thead th:not(.no-export)", orthogonal: "Export" }, },
			{ extend: 'copyHtml5', autoClose: 'true', exportOptions: { columns: "thead th:not(.no-export)", orthogonal: "Export" }, },
			{ extend: 'excelHtml5', exportOptions: { columns: "thead th:not(.no-export)", orthogonal: "Export" }, },
			{ extend: 'pdfHtml5', exportOptions: { columns: "thead th:not(.no-export)", orthogonal: "Export" }, },
			{ extend: 'print', exportOptions: { columns: "thead th:not(.no-export)", orthogonal: "Export", rows: { selected: true } }, },
			{ extend: 'copyHtml5', autoClose: 'true', exportOptions: { columns: "thead th:not(.no-export)", orthogonal: "Export", rows: { selected: true } }, },
			{ extend: 'excelHtml5', exportOptions: {  columns: "thead th:not(.no-export)", orthogonal: "Export", rows: { selected: true } }, },
			{ extend: 'pdfHtml5', exportOptions: { columns: "thead th:not(.no-export)", orthogonal: "Export", rows: { selected: true } }, },
		],
		columns: [
			{
				data: 'checkbox', orderable: false, searchable: false, width: '1',
				render: function(data, type, row, meta) { return '<label class="checkbox checkbox-single checkbox-primary mb-0"><input type="checkbox" data-id="' + row.id + '" class="form-check-input checkable"><span></span></label>'; },
			},
			{
				data: 'autonumber', orderable: true, searchable: false, 'className': 'align-middle text-center', width: '1',
				render: function(data, type, row, meta) { return meta.row + meta.settings._iDisplayStart + 1; }
			},
			@if (empty($date) || $date == 'true')
			{
				data: 'date', orderable: true, 'className': 'align-middle text-nowrap', 'width': '1',
				render: function ( data, type, row ) {
					if (data == null) { return '<center> - </center>'}
					else { return data; }
				}
			},
			@endif
			@yield('table-body')
			@if (empty($active) || $active == 'true')
			{
				data: 'active', orderable: true, 'className': 'align-middle text-center', width: '1',
				render: function ( data, type, row ) {
					if ( data == 0 ) { return '<label href="javascript:void(0);" data-toggle="panel-reload" data-tooltip-init="true" class="text-decoration: none" id="active" title="Switch To Active" data-id="' + row.id + '"><label class="badge bg-dark"> No </label></label>'; }
					if ( data == 1 ) { return '<label href="javascript:void(0);" data-toggle="panel-reload" data-tooltip-init="true" class="text-decoration: none" id="inactive" title="Switch To Inactive" data-id="' + row.id + '"><label class="badge bg-indigo"> Yes </label></label>'; }
				}
			},
			@endif
			{
				data: 'action',
				orderable: false,
				searchable: false,
				width: '1',
				render: function(data, type, row) {
					return '' +
					'<div class="dropdown dropdown-inline">' +
					'<button type="button" class="btn btn-hover-light-dark btn-icon btn-xs" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ki ki-bold-more-ver"></i></button>' +
					'<div class="dropdown-menu dropdown-menu-xs" style="">' +
					'<ul class="navi navi-hover py-5">' +
					'<li class="navi-item"><a href="{{ URL::current() }}/' + row.id + '" class="navi-link"><span class="navi-icon"><i class="flaticon2-expand"></i></span><span class="navi-text">{{ __("default.label.view") }}</span></a></li>' +
					'<li class="navi-item"><a href="{{ URL::current() }}/' + row.id + '/edit" class="navi-link"><span class="navi-icon"><i class="flaticon2-contract"></i></span><span class="navi-text">{{ __("default.label.edit") }}</span></a></li>' +
					'<li class="navi-item"><a href="javascript:void(0);" class="navi-link delete" data-id="' + row.id + '"><span class="navi-icon"><i class="flaticon2-trash"></i></span><span class="navi-text"> {{ __("default.label.delete./") }} </span></a></li>' +
					'</ul>' +
					'</div>' +
					'</div>';
				},
			},
		],
		order: [
			[0, 'asc']
		]
	});

	$('#export_print').on('click', function(e) { e.preventDefault(); table.button(0).trigger(); });
	$('#export_copy').on('click', function(e) { e.preventDefault(); table.button(1).trigger(); });
	$('#export_excel').on('click', function(e) { e.preventDefault(); table.button(2).trigger(); });
	$('#export_pdf').on('click', function(e) { e.preventDefault(); table.button(3).trigger(); });

	@include('layouts.backend.__templates.datatable.extension.javascript.checkable')
	@include('layouts.backend.__templates.datatable.extension.javascript.checkable-group')
	@include('layouts.backend.__templates.datatable.extension.javascript.active')
	@include('layouts.backend.__templates.datatable.extension.javascript.inactive')

</script>
@endpush
