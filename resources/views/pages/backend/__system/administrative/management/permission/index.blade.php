@extends('layouts.backend.__templates.datatable.index', ['page' => 'datatable-index', 'active' => 'false', 'date' => 'false'])
@section('title', 'Management Permissions')

@section('table-header')
<th> Role </th>
<th> ID </th>
@endsection

@section('table-body')
{ data: 'role_id' },
{ data: 'model_id' },
@endsection
