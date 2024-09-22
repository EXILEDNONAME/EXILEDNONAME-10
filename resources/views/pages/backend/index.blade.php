<!DOCTYPE html>
<html lang="en">
  @include('layouts.__includes.head')
  <body>
    @include('layouts.__includes.spinner')
    <div id="app" class="app app-header-fixed app-sidebar-fixed app-content-full-height app-with-wide-sidebar">
      @include('layouts.__includes.header')
      @include('layouts.__includes.sidebar')

      <div id="content" class="app-content d-flex flex-column p-0">
        <div class="app-content-padding flex-grow-1 overflow-hidden" data-scrollbar="true" data-height="100%">
          
          <a href="create"><button type="button" class="btn btn-dark"> CREATE </button></a>
          <div class="btn-group">
            <button type="button" class="btn btn-dark">Action</button>
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
              <h4 class="panel-title">Installation Settings</h4>
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
              <table id="data-table-default" class="table table-striped table-bordered align-middle">
                <thead>
                  <tr>
                    <th width="1%"></th>
                    <th width="1%" data-orderable="false"></th>
                    <th class="text-nowrap">Rendering engine</th>
                    <th class="text-nowrap">Browser</th>
                    <th class="text-nowrap">Platform(s)</th>
                    <th class="text-nowrap">Engine version</th>
                    <th class="text-nowrap">CSS grade</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="odd gradeX">
                    <td width="1%" class="fw-bold">1</td>
                    <td width="1%" class="with-img"><img src="../assets/img/user/user-1.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
                    <td>Trident</td>
                    <td>Internet Explorer 4.0</td>
                    <td>Win 95+</td>
                    <td>4</td>
                    <td>X</td>
                  </tr>
                  <tr class="even gradeC">
                    <td class="fw-bold">2</td>
                    <td class="with-img"><img src="../assets/img/user/user-2.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
                    <td>Trident</td>
                    <td>Internet Explorer 5.0</td>
                    <td>Win 95+</td>
                    <td>5</td>
                    <td>C</td>
                  </tr>
                  <tr class="odd gradeA">
                    <td class="fw-bold">3</td>
                    <td class="with-img"><img src="../assets/img/user/user-3.jpg" class="rounded h-30px my-n1 mx-n1" /></td>
                    <td>Trident</td>
                    <td>Internet Explorer 5.5</td>
                    <td>Win 95+</td>
                    <td>5.5</td>
                    <td>A</td>
                  </tr>

                </tbody>
              </table>
            </div>
          </div>
        </div>
        @include('layouts.__includes.footer')
      </div>
      @include('layouts.__includes.theme-panel')
      @include('layouts.__includes.scroll-top')
    </div>

    @include('layouts.__includes.js')

  </body>
</html>
