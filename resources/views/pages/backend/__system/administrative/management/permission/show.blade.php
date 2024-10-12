@extends('layouts.backend.__templates.datatable.show')
@section('title', 'Management Permissions')

@push('content')
<tr>
  <td class="align-middle font-weight-bold"> Role </td>
  <td class="align-middle"> {!! $data->role_id !!} </td>
</tr>
<tr>
  <td class="align-middle font-weight-bold"> ID </td>
  <td class="align-middle"> {!! $data->model_id !!} </td>
</tr>
@endpush
