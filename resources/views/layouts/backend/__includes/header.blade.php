<div id="kt_header" class="header  header-fixed">
  <div class="container-fluid d-flex align-items-stretch justify-content-between">

    <div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
      <div id="kt_header_menu" class="header-menu header-menu-mobile header-menu-layout-default">
        <ul class="menu-nav">
          <li class="menu-item menu-item-submenu menu-item-rel menu-item-active" data-menu-toggle="click" aria-haspopup="true">
            <a href="javascript:;" class="menu-link menu-toggle">
              <span class="menu-text">Pages</span>
              <i class="menu-arrow"></i>
            </a>
          </li>
        </ul>
      </div>
    </div>

    <div class="topbar">
      @include('layouts.backend.__includes.topbar.search')
      <!-- @!include('layouts.backend.__includes.topbar.notification') -->
      @include('layouts.backend.__includes.topbar.quick-action')
      <!-- @!include('layouts.backend.__includes.topbar.quick-cart') -->
      @include('layouts.backend.__includes.topbar.quick-panel')
      @include('layouts.backend.__includes.topbar.chat')
      @include('layouts.backend.__includes.topbar.language')
      @include('layouts.backend.__includes.topbar.user')
    </div>

  </div>
</div>
