<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Content</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">content</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content" id="div-reload">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">ข่าวประชาสัมพันธ์</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="formcotent" class="needs-validation" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label >หัวข้อข่าว <i style="color: red;">*</i></label>
                    <input type="text" id="title" name="title" class="form-control" required placeholder="ระบุหัวข้อข่าว">
                    <div class="invalid-feedback"> กรุณาระบุหัวข้อข่าว. </div>
                  </div>

                  <div class="form-group">
                    <label >รายละเอียดอย่างย่อ <i style="color: red;">*</i></label>
                    <input type="text" id="sub_title" name="sub_title" maxlength="100" class="form-control" required placeholder="ระบุรายละเอียดอย่างย่อ สูงสุด 100 ตัวอักษร">
                    <div class="invalid-feedback"> กรุณาระบุรายละเอียดอย่างย่อ. </div>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputFile">หน้าปกข่าว <i style="color: red;">*</i></label>
                    <div class="input-group">
                        <input type="file" class="form-control" id="file" name="file" onchange="viewImage(this)" required>
                      <div class="invalid-feedback"> กรุณาระบุหน้าปกข่าว. </div>
                    </div>
                    <br>
                    <img  id="blah" src="../img/noimg.png"  onerror="this.onerror=null;this.src='../img/noimg.png';" width="100px" onclick="viewImg(this)">
                  </div>

                  <div class="form-group">
                    <label>ประเภทข่าว <i style="color: red;">*</i></label>
                    <select class="form-control" id="category" name="category" required>
                      <!-- <option value="0">-- เลือกประเภทข่าว --</option> -->
                      <option value="1">ข่าวเด่น</option>
                      <option value="2">ข่าวทั่วไป</option>
                    </select>
                    <div class="invalid-feedback"> กรุณาระบุประเภทข่าว. </div>
                  </div>

                  <!-- <div class="form-group">
                    <label for="exampleInputFile">ไฟล์เอกสารแนบ (ถ้ามี)</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="doc">
                        <label class="custom-file-label" for="exampleInputFile">เลือกไฟล์ (PDF)</label>
                      </div>
                    </div>
                  </div> -->

                  <div class="form-group">
                    <label>รายละเอียด <i style="color: red;">*</i></label>
                    <div class="invalid-feedback"> กรุณาระบุรายละเอียด. </div>
                    <textarea class="form-control" id="content" name="content" required></textarea>
                  </div>
                  <i> <strong>หมายเหตุ : </strong> <i style="color: red;">*</i> จำเป็นต้องกรอก</i>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="button" id="btnSave" onclick="save()" class="btn btn-lg btn-primary">บันทึก</button>
                  <!-- <button type="reset" class="btn btn-danger">ล้างข้อมูล</button> -->
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (left) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<script type="text/javascript">
  function save()
    {
      if ($('#title').val() == '' || $('#sub_title').val() == '' || $('#file').val() == '' || $('#category').val() == '' || $('#content').val() == '') {
        $('#formcotent').addClass('was-validated');
      }else{
        var url = "<?php echo base_url();?>/content/save";
        var formData = new FormData($('#formcotent')[0]);

        $.ajax({
            url : url,
            type: "POST",
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            async: false,
            dataType: "JSON",
            success: function(result)
            {
              Swal.fire({
                type: result.status,
                title: result.message,
                showConfirmButton: false,
                timer: 3000
              }); 
              // $('#formcotent')[0].reset();
              $("#div-reload").load(location.href + " #div-reload");
            }
        });
      }
    }

    function viewImage(input) 
    {
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        
        reader.onload = function(e) {
          $('#blah').attr('src', e.target.result);
        }
        
        reader.readAsDataURL(input.files[0]);
      }
    }


  new FroalaEditor('#content', {
    height: 500,
    // Set the file upload URL.
    videoUploadURL: '<?php echo base_url();?>/extention/upload_video.php',
    fileUploadURL:  '<?php echo base_url();?>/extention/upload_file.php',
    imageUploadURL: '<?php echo base_url();?>/extention/upload_image.php',

    videoUploadURL: {
      id: 'my_editor'
    },
    fileUploadURL: {
      id: 'my_editor'
    },
    imageUploadParams: {
      id: 'my_editor'
    }
  });
</script>