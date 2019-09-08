
      <div id="demo" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ul class="carousel-indicators">
          <li data-target="#demo" data-slide-to="0" class="active"></li>
          <li data-target="#demo" data-slide-to="1"></li>
          <li data-target="#demo" data-slide-to="2"></li>
          <li data-target="#demo" data-slide-to="3"></li>
        </ul>
        
        <!-- The slideshow -->
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="<?php echo base_url();?>/img/slide/01.jpg" alt="Los Angeles" width="100%" height="10%">
          </div>
          <div class="carousel-item">
            <img src="<?php echo base_url();?>/img/slide/02.jpg" alt="Chicago" width="100%" height="10%">
          </div>
          <div class="carousel-item">
            <img src="<?php echo base_url();?>/img/slide/03.jpg" alt="New York" width="100%" height="10%">
          </div>
          <div class="carousel-item">
            <img src="<?php echo base_url();?>/img/slide/04.jpg" alt="New York" width="100%" height="10%">
          </div>
        </div>
        
        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>
      </div>

   <section id="tw-blog" class="">
      <div class="container analysis-form">
         <div class="row text-center">
            <div class="col section-heading wow fadeInDown" data-wow-duration="1s" data-wow-delay=".5s">
               <h2 style="font-size: 33px;">
                  <span>ข่าว</span> ประชาสัมพันธ์
               </h2>
            </div>
            <!-- Col end -->
         </div>
         <!-- Row End -->
         <div class="row wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
            <?php
               if(isset($list_news) && is_array($list_news) && count($list_news)){
               $i =1;
               foreach ($list_news as $key => $rows) {
            ?>
            <div class="col-lg-4 col-md-12">
               <div class="tw-latest-post">
                  <div class="latest-post-media text-center">
                     <!-- <img src="<?php echo base_url('uploads/news/').$rows['image']; ?>" alt="blog_image_one" class="img-fluid"> -->
                     <img src="<?php echo $rows['image']!=''?base_url('uploads/news/').$rows['image']:base_url('img/').'noimg.png' ?>" width="100%" onclick="viewImg(this)" onerror="this.onerror=null;this.src='img/noimg.png';" class="img-fluid">
                  </div>
                  <!-- End Latest Post Media -->
                  <div class="post-body">
                     <div class="post-item-date">
                        <div class="post-date">
                           <span class="date">29</span>
                           <span class="month">May</span>
                        </div>
                     </div>
                     <!-- End Post Item Date -->
                     <div class="post-info">
                        <div class="post-meta">
                           <span class="post-author">
                              Posted by <a href="">Admin</a>
                           </span>
                        </div>
                        <!-- End Post Meta -->
                        <h3 class="post-title">
                          <a href="<?php echo base_url('home/detail/').$rows['id']?>">
                            <?php echo $rows['title']; ?>
                          </a>
                        </h3>
                        <div class="entry-content">
                           <p>
                              <?php echo $rows['sub_title']; ?>...
                           </p>
                        </div>
                        <!-- End Entry Content -->
                        <a href="<?php echo base_url('home/detail/').$rows['id']?>" class="tw-readmore">Read More
                           <i class="fa fa-angle-right"></i>
                        </a>
                     </div>
                     <!-- End Post info -->
                  </div>
                  <!-- End Post Body -->
               </div>
               <!-- End Tw Latest Post -->
            </div>
            <?php 
                  $i++; 
                  }
               }
            ?>

            <!-- <div class="col-md-12 text-center tw-mt-60">
               <a href="#" class="btn btn-primary">view all</a>
            </div> -->
         </div>
         <!-- End Row -->
      </div>
      <!-- Container End -->
   </section>
   <!-- End tw blog -->

   <section id="tw-testimonial" class="tw-testimonial bg-overlay">
      <div class="container">
         <div class="row">
            <div class="col text-center wow fadeInDown" data-wow-duration="1s" data-wow-delay=".5s">
               <div class="section-heading">
                  <h2 class="text-white" style="font-size: 33px;">
                     Love from <span>Client</span>
                  </h2>
               </div>
            </div>
            <!-- COl End -->
         </div>
         <!-- Row End -->
         <div class="row justify-content-center">
            <div class="col-md-10 text-center">
               <div class="testimonial-slider owl-carousel">
                  <div class="testimonial-content">
                     <div class="testimonial-text">
                        <p>Start working with an company that can do provide every thing at you need to generate awareness,
                           drive traffic, connect with customers, and increase sales nascetur ridiculus mus. </p>
                        <i class="icon icon-quote2"></i>
                     </div>
                     <!-- Testimonial text end -->
                     <div class="testimonial-image">
                        <img src="<?php echo base_url();?>/image/207931.jpg" alt="">
                     </div>
                     <div class="testimonial-meta">
                        <h4>
                           ดร.ปิยเกียรติ สาวิกันย์
                           <small>ประธาน</small>
                        </h4>
                     </div>
                     <!-- Testimonial Meta end -->
                  </div>
                  <div class="testimonial-content">
                     <div class="testimonial-text">
                        <p>Start working with an company that can do provide every thing at you need to generate awareness,
                           drive traffic, connect with customers, and increase sales nascetur ridiculus mus. </p>
                        <i class="icon icon-quote2"></i>
                     </div>
                     <!-- Testimonial text end -->
                     <div class="testimonial-image">
                        <img src="<?php echo base_url();?>/image/207931.jpg" alt="">
                     </div>
                     <div class="testimonial-meta">
                        <h4>
                           ดร.ปิยเกียรติ สาวิกันย์
                           <small>ประธาน</small>
                        </h4>
                     </div>
                     <!-- Testimonial Meta end -->
                  </div>
               </div>
               <!-- Carousel End -->
            </div>
            <!-- COl End -->
         </div>
         <!-- Row End -->
      </div>
      <!-- Container End -->
   </section>
   <!-- Testimonial end -->

   <section id="tw-client" class="tw-client">
      <div class="container">
         <div class="row  wow fadeInUp">
            <div class="col-md-12">
               <div class="clients-carousel owl-carousel">
                  <div class="client-logo-wrapper d-table">
                     <div class="client-logo d-table-cell">
                        <img src="<?php echo base_url();?>assets/themes/default/images/clients/client1.png" alt="">
                     </div>
                     <!-- End Clients logo -->
                  </div>
                  <!-- End Client wrapper -->
                  <div class="client-logo-wrapper d-table">
                     <div class="client-logo d-table-cell">
                        <img src="<?php echo base_url();?>assets/themes/default/images/clients/client2.png" alt="">
                     </div>
                     <!-- End Clients logo -->
                  </div>
                  <!-- End Client wrapper -->
                  <div class="client-logo-wrapper d-table">
                     <div class="client-logo d-table-cell">
                        <img src="<?php echo base_url();?>assets/themes/default/images/clients/client3.png" alt="">
                     </div>
                     <!-- End Clients logo -->
                  </div>
                  <!-- End Client wrapper -->
                  <div class="client-logo-wrapper d-table">
                     <div class="client-logo d-table-cell">
                        <img src="<?php echo base_url();?>assets/themes/default/images/clients/client4.png" alt="">
                     </div>
                     <!-- End Clients logo -->
                  </div>
                  <!-- End Client wrapper -->
                  <div class="client-logo-wrapper d-table">
                     <div class="client-logo d-table-cell">
                        <img src="<?php echo base_url();?>assets/themes/default/images/clients/client5.png" alt="">
                     </div>
                     <!-- End Clients logo -->
                  </div>
                  <!-- End Client wrapper -->
                  <div class="client-logo-wrapper d-table">
                     <div class="client-logo d-table-cell">
                        <img src="<?php echo base_url();?>assets/themes/default/images/clients/client2.png" alt="">
                     </div>
                     <!-- End Clients logo -->
                  </div>
                  <!-- End Client wrapper -->
                  <div class="client-logo-wrapper d-table">
                     <div class="client-logo d-table-cell">
                        <img src="<?php echo base_url();?>assets/themes/default/images/clients/client3.png" alt="">
                     </div>
                     <!-- End Clients logo -->
                  </div>
                  <!-- End Client wrapper -->
                  <div class="client-logo-wrapper d-table">
                     <div class="client-logo d-table-cell">
                        <img src="<?php echo base_url();?>assets/themes/default/images/clients/client4.png" alt="">
                     </div>
                     <!-- End Clients logo -->
                  </div>
                  <!-- End Client wrapper -->
                  <div class="client-logo-wrapper d-table">
                     <div class="client-logo d-table-cell">
                        <img src="<?php echo base_url();?>assets/themes/default/images/clients/client5.png" alt="">
                     </div>
                     <!-- End Clients logo -->
                  </div>
                  <!-- End Client wrapper -->
               </div>
               <!-- End Carousel -->
            </div>
            <!-- End Col -->
         </div>
         <!-- End Row -->
      </div>
      <!-- End Container -->
   </section>
   <!-- End Tw Client -->


<script type="text/javascript">
   function viewImg(elm){
    var parth = $(elm).attr('src');
    // alert(parth)
    Swal.fire({
        imageUrl: parth,
        width: '40%',
        showConfirmButton: false,
        showCloseButton:true,
    });
  }
</script>