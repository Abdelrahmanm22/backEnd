<?php require_once("header.php"); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Settings</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?= DOMAIN_NAME?>admin/logout">logout</a></li>
            <li class="breadcrumb-item active">Home</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
    <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Update Settings</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="postUpdate" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputUserName">User Name</label>
                    <input type="text" class="form-control" value="<?=$Setting['name'];?>" name="username" id="exampleInputUserName" placeholder="Enter User Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputJobTitle">Job Title</label>
                    <input type="text" class="form-control" name="jobTitle" id="exampleInputJobTitle" placeholder="Enter Job Title" value="<?=$Setting['job_title'];?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" name="email" id="exampleInputEmail1" value="<?=$Setting['email'];?>" placeholder="Enter Email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPhone">Phone</label>
                    <input type="text" class="form-control" value="<?=$Setting['phone'];?>" name="phone" id="exampleInputPhone" placeholder="Phone">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputDescription">Description</label>
                    <textarea rows="4" cols="50" class="form-control" name="desc" id="exampleInputDescription" placeholder="Description" ><?=$Setting['description'];?> </textarea>
                  </div>
                  <div class="form-group">
                    <img src="<?= PATH.'img/'.$Setting['img']; ?>" width="100px" height="100px">
                    <label for="exampleInputFile">Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="img" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile"><?= $Setting['img'];?></label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div> 
                  <div class="form-group">
                    <img src="<?= PATH.'img/'.$Setting['logo']; ?>" width="100px" height="100px">
                    <label for="exampleInputFile">Logo</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="logo" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile"><?= $Setting['logo'];?></label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div> 
                  <div class="form-group">
                    <label for="exampleInputTitle">Title</label>
                    <input type="text" class="form-control" name="title" id="exampleInputTitle" value="<?=$Setting['title'];?>" placeholder="Enter Email">
                  </div>
                  <input type="hidden" class="form-control" name="id" id="exampleInputID" value="<?=$Setting['id'];?>" >
                    
                </div>
                
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php require_once("footer..php"); ?>