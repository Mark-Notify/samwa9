  <?php
    $url=$_SERVER['REQUEST_URI'];
    $curl = explode('/', $url);
  ?>
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo base_url();?>" class="brand-link">
      <img src="<?php echo base_url();?>assets/themes/default/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url();?>assets/themes/default/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">กฤษณะ  ศิริโท</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-header">Dashboard</li>
          <li class="nav-item has-treeview">
            <a href="<?php echo base_url();?>" class="nav-link <?php if($curl[2] == ''){ echo 'active';}  ?>">
              <i class="nav-icon fa fa-dashboard"></i>
              <p>
                หน้าแรก
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
          </li>
          <li class="nav-header">Management</li>
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-dashboard"></i>
              <p>
                จัดการข่าว
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url();?>content" class="nav-link <?php if($curl[2] == 'content'){ echo 'active';}  ?>" >
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>เพิ่มข่าว</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url();?>news" class="nav-link <?php if($curl[2] == 'news'){ echo 'active';}  ?>">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>ข่าวทั้งหมด</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">Link</li>
          <li class="nav-item has-treeview">
            <a href="<?php echo base_url();?>../" class="nav-link">
              <i class="nav-icon fa fa-send"></i>
              <p>
                หน้าบ้าน
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

<!-- <script>
  $('.navbar5').on('click','a',function(){
    $('.navbar5 a.active').removeClass('active');
    $(this).addClass('active');
  });
</script> -->