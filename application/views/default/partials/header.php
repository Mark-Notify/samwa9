<?php
   echo $url = $_SERVER["REQUEST_URI"];
   $curl = explode("/",$url);
?>
 <!-- style="background: url(http://58.181.196.41/onep/images/bg.png) no-repeat fixed center bottom / 100%;" -->
<body style="background: #f5f5f5 url('<?php echo base_url()?>img/bg5.jpg');background-repeat: repeat;background-attachment: fixed;background-size: 100% 105%, auto;">
   <div class="search-bar">
      <i class="fa fa-close"></i>
      <form class="search-bar-fixed" action="#">
         <input type="text" placeholder="search...">
         <button type="submit"><i class="icon icon-search"></i></button>
      </form>
   </div>
   <!--End Search bar -->

   <div class="tw-top-bar bg-green d-none d-sm-block">
      <div class="container">
         <div class="row">
            <div class="col-md-8 text-left">
               <div class="top-contact-info">
                  <span> <i class="icon icon-map-marker2"></i>สหกรณ์เครดิตยูเนี่ยนสามวาตะวันออก จำกัด</span>
                  <span><i class="fa fa-phone"></i> 02-9494381 </span>
                  <span><i class="fa fa-phone"></i> 095-6784503</span>
               </div>
            </div>
            <!-- Col End -->
            <div class="col-md-4 ml-auto text-right">
               <div class="top-social-links">
                  <span>Follow us:</span>
                  <a href="#"><i class="fab fa-facebook-f"></i></a>
                  <a href="#"><i class="fab fa-twitter"></i></a>
                  <a href="#"><i class="fab fa-google-plus"></i></a>
               </div>
            </div>
            <!-- Col End -->
         </div>
         <!-- Row End -->
      </div>
      <!-- Container End -->
   </div>
   <!-- Top Bar end -->

   <!-- header======================-->
   <header>
      <div class="tw-head">
         <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-white">
               <a class="navbar-brand tw-nav-brand" href="index.html">
                  <img src="<?php echo base_url();?>assets/themes/default/images/logo/logo.png" alt="seotime">
               </a>
               <!-- End of Navbar Brand -->
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                  aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
               </button>
               <!-- End of Navbar toggler -->
               <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                  <ul class="navbar-nav">
                     <li class="nav-item">
                        <a class="nav-link <?php if($curl[1]=='' OR $curl[1]=='home'){ echo 'active';} ?>" href="<?php echo base_url();?>">หน้าแรก</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link <?php if($curl[1]=='about'){ echo 'active';} ?>" href="<?php echo base_url();?>about">เกี่ยวกับเรา</a>
                     </li>
                     <li class="nav-item dropdown <?php if($curl[1]=='team'){ echo 'active';} ?>">
                        <a class="nav-link" href="#" data-toggle="dropdown">
                           สมาชิกองค์กร
                           <span class="tw-indicator"><i class="fa fa-angle-down"></i></span>
                        </a>
                        <ul class="dropdown-menu tw-dropdown-menu">
                           <li class=" <?php if($curl[2]=='team'){ echo 'active';} ?>"><a href="<?php echo base_url();?>team">คณะกรรมการ</a></li>
                           <li class=" <?php if($curl[2]=='manage'){ echo 'active';} ?>"><a href="<?php echo base_url();?>team/manage">ฝ่ายจัดการ</a></li>
                           <li class=" <?php if($curl[2]=='check'){ echo 'active';} ?>"><a href="<?php echo base_url();?>team/check">คณะผู้ตรวจสอบกิจการสหกรณ์</a></li>
                           <li class=" <?php if($curl[2]=='consultants'){ echo 'active';} ?>"><a href="<?php echo base_url();?>team/consultants">คณะที่ปรึกษา</a></li>
                           <!-- <li><a href="<?php echo base_url();?>team/manage">ฝ่ายจัดการ</a></li> -->
                        </ul>
                        <!-- End of Dropdown menu -->
                     </li>
                     <li class="nav-item <?php if($curl[1]=='contact'){ echo 'active';} ?>">
                        <a class="nav-link" href="<?php echo base_url();?>contact">ติดต่อเรา</a>
                    </li>
                  </ul>
                  <!-- End Navbar Nav -->
                  <!-- <div class="tw-off-search d-none d-lg-inline-block">
                     <div class="tw-search">
                        <i class="icon icon-search"></i>
                     </div>
                  </div> -->
                  <!-- End off canvas menu -->
               </div>
               <!-- End of navbar collapse -->
            </nav>
            <!-- End of Nav -->
         </div>
         <!-- End of Container -->
      </div>
      <!-- End tw head -->
   </header>
   <!-- End of Header area -->