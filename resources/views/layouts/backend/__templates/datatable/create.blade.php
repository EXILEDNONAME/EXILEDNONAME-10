@extends('layouts.backend.default')

@push('head')
<link href="/assets/backend/plugins/datatables.net-bs5/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
<link href="/assets/backend/plugins/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css" rel="stylesheet" />
@endpush

@push('js')
<script src="/assets/backend/plugins/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="/assets/backend/plugins/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>
<script src="/assets/backend/plugins/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="/assets/backend/plugins/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js"></script>
<script src="/assets/backend/js/demo/table-manage-default.demo.js"></script>
@endpush

@section('content')
<a href="{{ URL::Current() }}/../#"><button type="button" class="btn btn-dark"> BACK </button></a>
<hr>

<div class="panel panel-inverse">
  <div class="panel-heading">
    <h4 class="panel-title"> Create </h4>
    <div class="panel-heading-btn">
      <a href="javascript:;" class="btn btn-xs btn-icon btn-white" data-toggle="panel-collapse"><i class="fas fa-caret-down"></i></a>
    </div>
  </div>
  <div class="panel-body">
    <div class="row mb-15px">
      <label class="form-label col-form-label col-md-3"> Name </label>
      <div class="col-md-9">
        <input type="email" class="form-control mb-5px" placeholder="Enter email">
      </div>
    </div>
    <div class="row mb-15px">
      <label class="form-label col-form-label col-md-3"> Description </label>
      <div class="col-md-9">
        <input type="email" class="form-control mb-5px" placeholder="Description">
      </div>
    </div>
    <div class="row mb-15px">
      <label class="form-label col-form-label col-md-3"> Description </label>
      <div class="col-md-9">
        <a href="{{ URL::Current() }}/../#"><button type="button" class="btn btn-dark"> Submit </button></a>
      </div>
    </div>

  </div>
</div>
@endsection
