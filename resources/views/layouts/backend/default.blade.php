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

          

          @yield('content')


        </div>
        @include('layouts.__includes.footer')
      </div>
      @include('layouts.__includes.theme-panel')
      @include('layouts.__includes.scroll-top')
    </div>

    @include('layouts.__includes.js')

  </body>
</html>
