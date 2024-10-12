<?php

namespace App\Http\Controllers\Backend\__System\Administrative\Management;

use App\Http\Controllers\Controller;
use App\Http\Traits\Backend\__System\Controllers\Datatable\DefaultController;
use DataTables;
use Illuminate\Http\Request;

class PermissionController extends Controller {

  use DefaultController;

  function __construct() {
    $this->middleware(['auth', 'role:Master Administrator']);
    $this->model = 'App\Models\Permission';
    $this->path = 'pages.backend.__system.administrative.management.permission.';
    $this->url = '/dashboard/administratives\managements\permissions';
    $this->sort = 1;
    $this->RequestStore = [];
    $this->RequestUpdate = [];
    if (request('date_start') && request('date_end')) { $this->data = $this->model::orderby('created_at', 'desc')->whereBetween('created_at', [request('date_start'), request('date_end')])->get(); }
    else if (!empty($this->model::get('created_at'))) { $this->data = $this->model::orderby('created_at', 'desc')->get(); }
    else { $this->data = $this->model::get(); }
  }

  /**
  **************************************************
  * @return INDEX
  **************************************************
  **/

  public function index() {
    $model = $this->model;
    $sort = $this->sort;
    if (request()->ajax()) {
      return DataTables::of($this->data)
      ->editColumn('date', function ($order) { return empty($order->date) ? NULL : \Carbon\Carbon::parse($order->date)->format('d F Y, H:i'); })
      ->editColumn('description', function ($order) { return nl2br(e($order->description)); })
      ->editColumn('role_id', function ($order) {
        $roles = \DB::table('roles')->where('id', $order->role_id)->first();
        return $roles->name;
      })
      ->editColumn('model_id', function ($order) {
        $model = \DB::table('users')->where('id', $order->model_id)->first();
        return $model->name;
      })
      ->rawColumns(['description', 'date', 'role_id', 'model_id'])
      ->addIndexColumn()->make(true);
    }
    return view($this->path . 'index', compact('model', 'sort'));
  }

  /**
  **************************************************
  * @return STORE
  **************************************************
  **/

  public function store(Request $request) {
    $validated = $request->validate($this->RequestStore);
    $store = $request->all();
    $store['guard_name'] = 'web';
    $this->model::create($store);
    return redirect($this->url)->with('success', __('default.notification.success.item-created'));
  }

}
