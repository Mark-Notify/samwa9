
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>All News</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">allnews</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- END ALERTS AND CALLOUTS -->
        <div class="row">
          <div class="col-12">
            <!-- Custom Tabs -->
            <div class="card">
              <div class="card-header d-flex p-0">
                <h3 class="card-title p-3">ข่าวทั้งหมด</h3>
                <ul class="nav nav-pills ml-auto p-2">
                  <button class="btn btn-info"><i class="fa fa-plus" aria-hidden="true"></i> เพิ่มข่าว</button>
                  <!-- <li class="nav-item"><a class="nav-link active" href="#tab_1" data-toggle="tab">รูปแบบตาราง</a></li> -->
                  <!-- <li class="nav-item"><a class="nav-link" href="#tab_2" data-toggle="tab">รูปแบบการ์ด</a></li> -->
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body" id="div-reload">
                <div class="tab-content">
                  <div class="tab-pane active" id="tab_1">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                      <tr align="center">
                        <th width="5%">#</th>
                        <th width="5%">หัวเรื่อง</th>
                        <th width="10%">รายละเอียดอย่างย่อ</th>
                        <th width="10%">รายละเอียด</th>
                        <th width="5%">ประเภทเนื้อหา</th>
                        <th width="5%">รูปภาพ</th>
                        <th width="5%">วันที่</th>
                        <th width="5%">ชื่อผู้เขียน</th>
                        <th width="5%">จัดการ</th>
                        <th width="8%">การแสดงผล (ปิด / เปิด)</th>
                      </tr>
                      </thead>
                      <tbody>
                      <?php
                        if(isset($list_news) && is_array($list_news) && count($list_news)){
                        $i =1;
                        foreach ($list_news as $key => $rows) {
                      ?>
                      <tr align="center">
                        <td><?php echo $i ?></td>
                        <td align="left"><?php echo $rows['title']; ?></td>
                        <td align="left"><?php echo $rows['sub_title']; ?></td>
                        <td>
                          <button type="button" class="btn btn-info" onclick="viewDetail(this,<?php echo $rows['id']; ?>)" title="ดูรายละเอียด">ดูรายละเอียด</button>
                        </td>
                        <td>
                          <?php 
                            if ($rows['category'] == 1) {
                              echo "ข่าวเด่น";
                            }else {
                              echo "ข่าวที่วไป";
                            }
                          ?>
                        </td>
                        <td>
                          <img src="<?php echo $rows['image']!=''?base_url('../uploads/news/').$rows['image']:base_url('../img/').'noimg.png' ?>"  onerror="this.onerror=null;this.src='../img/noimg.png';" width="100px" onclick="viewImg(this)">
                        </td>
                        <td><?php echo $rows['time1']; ?></td>
                        <td><?php echo $rows['name_create']; ?>admin</td>
                        <td>
                          <div class="btn-group">
                            <button type="button" class="btn btn-warning" onclick="edit(<?php echo $rows['id']; ?>)" title="แก้ไข"><i class="fa fa-cog" aria-hidden="true"></i></button>
                            <button type="button" class="btn btn-danger" onclick="del(<?php echo $rows['id']; ?>)" title="ลบ"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                          </div>
                        </td>
                        <td>
                            <label class="switch">
                              <input type="checkbox" id="status" onclick="slide_output(this,<?php echo $rows['id']; ?>);" <?php if($rows['status'] == 'Y'){echo 'checked';} ?> >
                              <span class="slider round"></span>
                            </label>
                            <input type="hidden" name="status" value="0">       
                        </td>
                      </tr>
                      <?php 
                            $i++; 
                          }
                        }else{
                      ?>
                            <tr>
                                <td colspan="6">ไม่มีข้อมูล</td>
                            </tr>
                      <?php
                        }
                      ?>
                      </tbody>
                    </table>
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="tab_2">
                    <div class="row">
                      <div class="col-md-3">
                        <!-- Box Comment -->
                        <div class="card card-widget">
                          <div class="card-header">
                            <div class="user-block">
                              <img class="img-circle" src="<?php echo base_url();?>assets/themes/default/dist/img/user1-128x128.jpg" alt="User Image">
                              <span class="username"><a href="#">Jonathan Burke Jr.</a></span>
                              <span class="description">Shared publicly - 7:30 PM Today</span>
                            </div>
                            <!-- /.user-block -->
                            <div class="card-tools">
                              <button type="button" class="btn btn-tool" data-toggle="tooltip" title="Mark as read">
                                <i class="fa fa-circle-o"></i></button>
                              <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                              </button>
                              <button type="button" class="btn btn-tool" data-widget="remove"><i class="fa fa-times"></i>
                              </button>
                            </div>
                            <!-- /.card-tools -->
                          </div>
                          <!-- /.card-header -->
                          <div class="card-body">
                            <img class="img-fluid pad" src="<?php echo base_url();?>assets/themes/default/dist/img/photo2.png" alt="Photo">

                            <p>I took this photo this morning. What do you guys think?</p>
                            <button type="button" class="btn btn-default btn-sm"><i class="fa fa-share"></i> Share</button>
                            <button type="button" class="btn btn-default btn-sm"><i class="fa fa-thumbs-o-up"></i> Like</button>
                            <span class="float-right text-muted">127 likes - 3 comments</span>
                          </div>
                          <!-- /.card-footer -->
                        </div>
                        <!-- /.card -->
                      </div>
                      <!-- /.col -->

                      <div class="col-md-3">
                        <!-- Box Comment -->
                        <div class="card card-widget">
                          <div class="card-header">
                            <div class="user-block">
                              <img class="img-circle" src="<?php echo base_url();?>assets/themes/default/dist/img/user1-128x128.jpg" alt="User Image">
                              <span class="username"><a href="#">Jonathan Burke Jr.</a></span>
                              <span class="description">Shared publicly - 7:30 PM Today</span>
                            </div>
                            <!-- /.user-block -->
                            <div class="card-tools">
                              <button type="button" class="btn btn-tool" data-toggle="tooltip" title="Mark as read">
                                <i class="fa fa-circle-o"></i></button>
                              <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                              </button>
                              <button type="button" class="btn btn-tool" data-widget="remove"><i class="fa fa-times"></i>
                              </button>
                            </div>
                            <!-- /.card-tools -->
                          </div>
                          <!-- /.card-header -->
                          <div class="card-body">
                            <img class="img-fluid pad" src="<?php echo base_url();?>assets/themes/default/dist/img/photo2.png" alt="Photo">

                            <p>I took this photo this morning. What do you guys think?</p>
                            <button type="button" class="btn btn-default btn-sm"><i class="fa fa-share"></i> Share</button>
                            <button type="button" class="btn btn-default btn-sm"><i class="fa fa-thumbs-o-up"></i> Like</button>
                            <span class="float-right text-muted">127 likes - 3 comments</span>
                          </div>
                          <!-- /.card-footer -->
                        </div>
                        <!-- /.card -->
                      </div>
                      <!-- /.col -->

                      <div class="col-md-3">
                        <!-- Box Comment -->
                        <div class="card card-widget">
                          <div class="card-header">
                            <div class="user-block">
                              <img class="img-circle" src="<?php echo base_url();?>assets/themes/default/dist/img/user1-128x128.jpg" alt="User Image">
                              <span class="username"><a href="#">Jonathan Burke Jr.</a></span>
                              <span class="description">Shared publicly - 7:30 PM Today</span>
                            </div>
                            <!-- /.user-block -->
                            <div class="card-tools">
                              <button type="button" class="btn btn-tool" data-toggle="tooltip" title="Mark as read">
                                <i class="fa fa-circle-o"></i></button>
                              <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                              </button>
                              <button type="button" class="btn btn-tool" data-widget="remove"><i class="fa fa-times"></i>
                              </button>
                            </div>
                            <!-- /.card-tools -->
                          </div>
                          <!-- /.card-header -->
                          <div class="card-body">
                            <img class="img-fluid pad" src="<?php echo base_url();?>assets/themes/default/dist/img/photo2.png" alt="Photo">

                            <p>I took this photo this morning. What do you guys think?</p>
                            <button type="button" class="btn btn-default btn-sm"><i class="fa fa-share"></i> Share</button>
                            <button type="button" class="btn btn-default btn-sm"><i class="fa fa-thumbs-o-up"></i> Like</button>
                            <span class="float-right text-muted">127 likes - 3 comments</span>
                          </div>
                          <!-- /.card-footer -->
                        </div>
                        <!-- /.card -->
                      </div>
                      <!-- /.col -->

                      <div class="col-md-3">
                        <!-- Box Comment -->
                        <div class="card card-widget">
                          <div class="card-header">
                            <div class="user-block">
                              <img class="img-circle" src="<?php echo base_url();?>assets/themes/default/dist/img/user1-128x128.jpg" alt="User Image">
                              <span class="username"><a href="#">Jonathan Burke Jr.</a></span>
                              <span class="description">Shared publicly - 7:30 PM Today</span>
                            </div>
                            <!-- /.user-block -->
                            <div class="card-tools">
                              <button type="button" class="btn btn-tool" data-toggle="tooltip" title="Mark as read">
                                <i class="fa fa-circle-o"></i></button>
                              <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                              </button>
                              <button type="button" class="btn btn-tool" data-widget="remove"><i class="fa fa-times"></i>
                              </button>
                            </div>
                            <!-- /.card-tools -->
                          </div>
                          <!-- /.card-header -->
                          <div class="card-body">
                            <img class="img-fluid pad" src="<?php echo base_url();?>assets/themes/default/dist/img/photo2.png" alt="Photo">

                            <p>I took this photo this morning. What do you guys think?</p>
                            <button type="button" class="btn btn-default btn-sm"><i class="fa fa-share"></i> Share</button>
                            <button type="button" class="btn btn-default btn-sm"><i class="fa fa-thumbs-o-up"></i> Like</button>
                            <span class="float-right text-muted">127 likes - 3 comments</span>
                          </div>
                          <!-- /.card-footer -->
                        </div>
                        <!-- /.card -->
                      </div>
                      <!-- /.col -->

                    </div>
                    <!-- /.row -->
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- ./card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
        <!-- END CUSTOM TABS -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">รายละเอียด</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="showDetail">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">

  function edit(id) {
    window.location.href = 'news/edit/'+id;
  }

  function del(id) {
    Swal.fire({
      title: 'แจ้งเตือน',
      text: 'คุณต้องการลบข้อมูลใช่หรือไม่?',
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'ใช่, ต้องการลบ!',
      cancelButtonText: 'ยกเลิก',
    }).then((result) => {
        if (result.value) {
          $.ajax({
              type: "POST",
              url: "<?php echo base_url('news/del/');?>"+id,
              dataType:'json',
              success: function(result) {
                Swal.fire({
                  type: result.status,
                  title: result.message,
                  showConfirmButton: false,
                  timer: 1500
                }); 
                $("#div-reload").load(location.href + " #div-reload");
              }
          });
        }
    });
    
  }

  function slide_output(elm,id)
  {
    if( $(elm).is(':checked') )
    {
      var output = 'Y';
    }else{  
      var output = 'N';
    }

    $.ajax({
       type: "POST",
       url: "<?php echo base_url('news/update_status/');?>"+id+'/'+output,
       dataType: 'json',
       success: function(result) {
        // alert(result.message); 
        Swal.fire({
          type: result.status,
          title: result.message,
          showConfirmButton: false,
          showCloseButton:true,
          timer: 1500
        });
        $("#div-reload").load(location.href + " #div-reload");
       }
    });
  }

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

  function viewDetail(elm,id){
    $.ajax({
       type: "POST",
       url: "<?php echo base_url('news/get_detail/');?>"+id,
       dataType: 'json',
       success: function(data) {

        var html = '';
        var i;
        for(i=0; i<data.length; i++)
        {
          if(data[i].content !="")
          {
            html += data[i].content;
          }
        }
        $('#showDetail').html(html);
        $('#exampleModalCenter').modal('toggle');
        
       }
    });
  }

  
</script>