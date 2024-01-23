<!-- Start::app-sidebar -->
<aside class="app-sidebar" id="sidebar">
        
  <!-- Start::main-sidebar-header -->
  <div class="main-sidebar-header">
      <a href="index.html" class="header-logo">
          <img src="{{asset('src/assets/img/brand-logos/desktop-logo.png')}}" alt="logo" class="main-logo desktop-logo">
          <img src="{{asset('src/assets/img/brand-logos/toggle-logo.png')}}" alt="logo" class="main-logo toggle-logo">
          <img src="{{asset('src/assets/img/brand-logos/desktop-dark.png')}}" alt="logo" class="main-logo desktop-dark">
          <img src="{{asset('src/assets/img/brand-logos/toggle-dark.png')}}" alt="logo" class="main-logo toggle-dark">
      </a>
  </div>
  <!-- End::main-sidebar-header -->

  <!-- Start::main-sidebar -->
  <div class="main-sidebar " id="sidebar-scroll">

      <!-- Start::nav -->
      <nav class="main-menu-container nav nav-pills flex-column sub-open">
          <div class="slide-left" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24"
                  height="24" viewBox="0 0 24 24">
                  <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path>
              </svg></div>
          <ul class="main-menu">
              <!-- Start::slide__category -->
              <li class="slide__category"><span class="category-name">Main</span></li>
              <!-- End::slide__category -->

              <!-- Start::slide -->
              
              <!-- End::slide -->

              <!-- Start::slide -->
              <li class="slide" has-sub {{ Route::is('dashboard') ? 'open active':'' }}>
                  <a href="{{route('dashboard')}}" class="side-menu__item {{ Route::is('dashboard') ? 'active':'' }}">
                      <i class="ri-home-8-line side-menu__icon"></i>
                      <span class="side-menu__label">Dashboards</span>
                  </a>
              </li>
              <!-- End::slide -->

              <!-- Start::slide__category -->
              <li class="slide__category"><span class="category-name">Modulos</span></li>
              <!-- End::slide__category -->

              <!-- Start::slide -->
              <li class="slide has-sub {{ request()->route()->getPrefix() === '/contable' ? ' active open' : '' }}">
                  <a href="javascript:void(0);" class="side-menu__item {{ request()->route()->getPrefix() === '/contable' ? 'active' : '' }}">
                      <i class="ri-inbox-line side-menu__icon"></i>
                      <span class="side-menu__label">Modulo Contable</span>
                      <i class="ri ri-arrow-right-s-line side-menu__angle"></i>
                  </a>
                  <ul class="slide-menu child1">
                      <li class="slide side-menu__label1"><a href="javascript:void(0)">Caja y Bancos</a></li>
                      <li class="slide"><a href="{{route('cuentas')}}" class="side-menu__item {{ Route::is('cuentas','cuentas/crear','cuentas/editar') ? 'active':'' }}">Caja y Bancos</a></li>
                  </ul>
              </li>
              <!-- End::slide -->

              <!-- Start::slide -->
              <li class="slide has-sub">
                  <a href="javascript:void(0);" class="side-menu__item">
                      <i class="ri-file-list-3-line side-menu__icon"></i>
                      <span class="side-menu__label">Basic Ui</span>
                      <i class="ri ri-arrow-right-s-line side-menu__angle"></i>
                  </a>
                  <ul class="slide-menu child1">
                      <li class="slide side-menu__label1"><a href="javascript:void(0)">Basic Ui</a></li>
                      <li class="slide"><a href="dropdown.html" class="side-menu__item">Dropdown</a></li>
                      <li class="slide"><a href="modal.html" class="side-menu__item">Modal</a></li>
                      <li class="slide"><a href="offcanvas.html" class="side-menu__item">Offcanvas</a></li>
                      <li class="slide"><a href="tooltip-popovers.html" class="side-menu__item">Tooltips &amp;
                              Popovers</a></li>
                      <li class="slide has-sub"><a href="javascript:void(0);" class="side-menu__item">Tables<i
                                  class="ri ri-arrow-right-s-line side-menu__angle"></i></a>
                          <ul class="slide-menu child2">
                              <li class="slide"><a href="tables.html" class="side-menu__item">BasicTables</a></li>
                              <li class="slide"><a href="datatables.html" class="side-menu__item">DataTables</a></li>
                              <li class="slide"><a href="edittable.html" class="side-menu__item">Edit Table</a></li>
                          </ul>
                      </li>
                  </ul>
              </li>
              <!-- End::slide -->


              <!-- Start::slide__category -->
              <li class="slide__category"><span class="category-name">CONFIGURACION</span></li>
              <!-- End::slide__category -->

              <!-- Start::slide -->
              <li class="slide has-sub {{ request()->route()->getPrefix() === 'configuracion/financiero' ? ' active open' : '' }}">
                <a href="javascript:void(0);" class="side-menu__item {{ request()->route()->getPrefix() === 'configuracion/financiero' ? 'active' : '' }}">
                    <i class="ri-inbox-line side-menu__icon"></i>
                    <span class="side-menu__label">Modulo Financiero</span>
                    <i class="ri ri-arrow-right-s-line side-menu__angle"></i>
                </a>
                <ul class="slide-menu child1">
                    <li class="slide side-menu__label1"><a href="javascript:void(0)">Financiero</a></li>
                    <li class="slide"><a href="{{route('tipo-transaccion')}}" class="side-menu__item {{ Route::is('tipo-transaccion','tipo-transaccion/crear','tipo-transaccion/editar') ? 'active':'' }}">Tipo de Transaccion</a>
                    <li class="slide"><a href="{{route('generica')}}" class="side-menu__item {{ Route::is('generica','generica/crear','generica/editar') ? 'active':'' }}">Generica</a>
                    <li class="slide"><a href="{{route('sub-generica-nivel-1')}}" class="side-menu__item {{ Route::is('sub-generica-nivel-1','sub-generica-nivel-1/crear','sub-generica-nivel-1/editar') ? 'active':'' }}">SubGenerica 1</a>
                    <li class="slide"><a href="{{route('sub-generica-nivel-2')}}" class="side-menu__item {{ Route::is('sub-generica-nivel-2','sub-generica-nivel-2/crear','sub-generica-nivel-2/editar') ? 'active':'' }}">SubGenerica 2</a>
                    <li class="slide"><a href="{{route('especifica-nivel-1')}}" class="side-menu__item {{ Route::is('especifica-nivel-1','especifica-nivel-1/crear','especifica-nivel-1/editar') ? 'active':'' }}">Especifica 1</a>
                    <li class="slide"><a href="{{route('especifica-nivel-2')}}" class="side-menu__item {{ Route::is('especifica-nivel-2','especifica-nivel-2/crear','especifica-nivel-2/editar') ? 'active':'' }}">Especifica 2</a>
                </ul>
              </li>
              <li class="slide has-sub {{ request()->route()->getPrefix() === 'configuracion/contabilidad' ? ' active open' : '' }}">
                <a href="javascript:void(0);" class="side-menu__item {{ request()->route()->getPrefix() === 'configuracion/contabilidad' ? 'active' : '' }}">
                    <i class="ri-inbox-line side-menu__icon"></i>
                    <span class="side-menu__label">Modulo Contable</span>
                    <i class="ri ri-arrow-right-s-line side-menu__angle"></i>
                </a>
                <ul class="slide-menu child1">
                    <li class="slide side-menu__label1"><a href="javascript:void(0)">Contable</a></li>
                    <li class="slide"><a href="{{route('cuentas')}}" class="side-menu__item {{ Route::is('cuentas','cuentas/crear','cuentas/editar') ? 'active':'' }}">Cuentas</a></li>
                </ul>
              </li>
              <!-- End::slide -->

              <!-- Start::slide__category -->
              <li class="slide__category"><span class="category-name">PRUEBA</span></li>
              <!-- End::slide__category -->

              <!-- Start::slide -->
              <li class="slide has-sub">
                  <a href="javascript:void(0);" class="side-menu__item">
                      <i class="ri-node-tree side-menu__icon"></i>
                      <span class="side-menu__label">Modulo</span>
                      <i class="ri ri-arrow-right-s-line side-menu__angle"></i>
                  </a>
                  <ul class="slide-menu child1">
                      <li class="slide side-menu__label1"><a href="javascript:void(0)">Nested Menu</a></li>
                      <li class="slide"><a href="javascript:void(0);" class="side-menu__item">Nested-1</a></li>
                      <li class="slide has-sub"><a href="javascript:void(0);" class="side-menu__item">Nested-2<i
                                  class="ri ri-arrow-right-s-line side-menu__angle"></i></a>
                          <ul class="slide-menu child2">
                              <li class="slide"><a href="javascript:void(0);" class="side-menu__item">Nested-2-1</a>
                              </li>
                              <li class="slide has-sub"><a href="javascript:void(0);"
                                      class="side-menu__item">Nested-2-2<i
                                          class="ri ri-arrow-right-s-line side-menu__angle"></i></a>
                                  <ul class="slide-menu child3">
                                      <li class="slide"><a href="javascript:void(0);"
                                              class="side-menu__item">Nested-2-2-1</a></li>
                                      <li class="slide"><a href="javascript:void(0);"
                                              class="side-menu__item">Nested-2-2-2</a></li>
                                  </ul>
                              </li>
                          </ul>
                      </li>
                  </ul>
              </li>
              <!-- End::slide -->


          </ul>
          <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24"
                  height="24" viewBox="0 0 24 24">
                  <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path>
              </svg></div>
      </nav>
      <!-- End::nav -->

  </div>
  <!-- End::main-sidebar -->

</aside>
<!-- End::app-sidebar -->