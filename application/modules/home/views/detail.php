<section id="main-container" class="main-container">
      <div class="container analysis-form">
         <div class="row">
            <div class="col-lg-8 col-md-12 wow wobble" data-wow-delay=".1s">
               <?php
                  if(isset($news) && is_array($news) && count($news)){
                  foreach ($news as $key => $rows) {
               ?>
               <div class="post-content post-single ">
                  <div class="post-media post-image">
                     <img src="<?php echo $rows['image']!=''?base_url('uploads/news/').$rows['image']:base_url('img/').'noimg.png' ?>" width="100%" onclick="viewImg(this)" onerror="this.onerror=null;this.src='img/noimg.png';" class="img-fluid">
                  </div>
                  <!-- End Post Media -->
                  <div class="post-body">
                     <!-- End Post Item Date -->
                     <div class="entry-header">
                        <div class="post-meta">
                           <span class="post-meta-date">
                              <i class="fa fa-clock-o"></i> <span class="day">29 May</span>
                           </span>
                           <span class="post-author">
                                 Posted By<a href="#"> Admin</a>
                              </span>
                           <span class="post-cat">
                              <i class="icon icon-folder"></i><a href="#"> SEO, Marketing</a>
                           </span>
                           <span class="post-comment"><i class="icon icon-comment"></i>5 <a href="#" class="comments-link">Comments</a></span>
                        </div>
                        <h2 class="entry-title">
                           <a href="#"><?php echo $rows['title']; ?></a>
                        </h2>
                        <!-- End Post Meta -->
                     </div>
                     <!-- header end -->
                     <div class="entry-content">
                        <p>
                           <?php echo $rows['content']; ?>
                        </p>
                     </div>
                     <!-- End Entry Content -->
                     <div class="post-footer clearfix">
                        <div class="post-tags pull-left">
                           <strong>Tags: </strong>
                           <a href="#">Financial</a>
                           <a href="#">Our Advisor</a>
                           <a href="#">30K</a>
                        </div>
                        <!-- Post tags end -->

                        <div class="share-items pull-right">
                           <ul class="post-social-icons unstyled">
                              <li><strong>Share: </strong></li>
                              <li><a href="#"><i class="fad fa-facebook"></i></a></li>
                              <li><a href="#"><i class="fad fa-twitter"></i></a></li>
                              <li><a href="#"><i class="fad fa-google-plus"></i></a></li>
                              <li><a href="#"><i class="fad fa-linkedin"></i></a></li>
                              <li><a href="#"><i class="fad fa-instagram"></i></a></li>
                           </ul>
                        </div>
                        <!-- Share items end -->
                     </div>
                     <!-- Post footer end -->
                  </div>
                  <!-- End Post Body -->
               </div>
               <!-- Post Content End -->
               <?php 
                     }
                  }
               ?>

            </div>
            <!-- Content Col end -->


            <div class="col-lg-4 col-md-12">
               <div class="sidebar sidebar-right">
                  <div class="widget widget-search wow swing">
                     <div id="search" class="input-group">
                        <input class="form-control" placeholder="Search" type="search">
                        <span>
                           <i class="icon icon-search"></i>
                        </span>
                     </div>
                  </div>
                  <!-- End Widget Search -->
                  <!-- <div class="widget widget-cat">
                     <h3 class="widget-title">Categories</h3>
                     <span class="animate-border border-offwhite tw-mt-20"></span>
                     <ul class="widget-list">
                        <li><a href="#">Search Engine</a>
                           <span class="posts-count">(05)</span>
                        </li>
                        <li><a href="#">Business</a>
                           <span class="posts-count">(06)</span>
                        </li>
                        <li><a href="#">Marketing</a>
                           <span class="posts-count">(11)</span>
                        </li>
                        <li><a href="#">We development</a>
                           <span class="posts-count">(09)</span>
                        </li>
                        <li><a href="#">Seo Marketing</a>
                           <span class="posts-count">(13)</span>
                        </li>
                        <li><a href="#">Web Traffice</a>
                           <span class="posts-count">(13)</span>
                        </li>
                     </ul>
                  </div> -->
                  <!-- Categories end -->
                  <div class="widget recent-posts wow bounceInRight">
                     <h3 class="widget-title">กิจกรรมล่าสุด</h3>
                     <span class="animate-border border-offwhite tw-mt-20"></span>
                     <ul class="unstyled clearfix">
                        <?php
                           if(isset($list_news) && is_array($list_news) && count($list_news)){
                           $i =1;
                           foreach ($list_news as $key => $rows) {
                        ?>
                        <li class="media">
                           <div class="media-left media-middle">
                              <img src="<?php echo $rows['image']!=''?base_url('uploads/news/').$rows['image']:base_url('img/').'noimg.png' ?>" width="100%" onclick="viewImg(this)" onerror="this.onerror=null;this.src='img/noimg.png';" class="img-fluid">
                           </div>
                           <div class="media-body media-middle">
                              <h4 class="entry-title">
                                 <a href="<?php echo base_url('home/detail/').$rows['id']?>">
                                    <?php echo $rows['title']; ?>
                                 </a>
                              </h4>
                           </div>
                           <div class="clearfix"></div>
                        </li>
                        <?php 
                              $i++; 
                              }
                           }
                        ?>
                        <!-- 1st post end-->
                     </ul>
                  </div>
                  <!-- Recent post end -->
                  <div class="widget widget-tags wow fadeInDownBig">
                     <h3 class="widget-title">Popular Tags</h3>
                     <span class="animate-border border-offwhite tw-mt-20"></span>
                     <ul class="unstyled clearfix">
                        <li><a href="#">Financial</a></li>
                        <li><a href="#">Our Advisor</a></li>
                        <li><a href="#">Euro 2017</a></li>
                        <li><a href="#">Euro Business</a></li>
                        <li><a href="#">Business Awards</a></li>
                        <li><a href="#">Market</a></li>
                        <li><a href="#">30K</a></li>
                        <li><a href="#">Euro 2017</a></li>
                     </ul>
                  </div>
                  <!-- Tags end -->
               </div>
               <!-- End Sidebar Right -->
            </div>
            <!-- Sidebar Col end -->

         </div>
         <!-- Main row end -->
      </div>
      <!-- Container end -->
   </section>
   <!-- Main container end -->