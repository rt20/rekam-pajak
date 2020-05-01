 <!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
    <img src="{{ asset("/adminlte/img/logobpom.png") }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: 1">
      <span class="brand-text font-weight-light">Rekam Pajak</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
     
      <!-- Sidebar Menu -->
      
<nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
            <a href="{{ route('dashboard') }}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                
              </p>
            </a>
            <!-- <ul class="nav nav-treeview"> -->
            
                <a href="{{ route('pajak.index') }}" class="nav-link ">
                  <i class="fa fa-calculator nav-icon"></i>
                  <p>Rekam Pajak</p>
                </a>
              
              
               
              
            <!-- </ul> -->
         
         
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>