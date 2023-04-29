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
    <div class="card">
              <div class="card-header">
                <h3 class="card-title">Setting Table</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">ID</th>
                      <th>Name</th>
                      <th>Job Title</th>
                      <th>Description</th>
                      <th>Email</th>
                      <th>Phone</th>
                      <th>Title</th>
                      <th>Image</th>
                      <th>Logo</th>
                      <th>Admin Id</th>
                      <th>UPDATE</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach($Setting as $d): ?>
                    <tr>
                      <td><?= $d['id'];?></td>
                      <td><?= $d['name'];?></td>
                      <td><?= $d['job_title'];?></td>
                      <td><?= $d['description'];?></td>
                      <td><?= $d['email'];?></td>
                      <td><?= $d['phone'];?></td>
                      <td><?= $d['title'];?></td>
                      <td><?= $d['img'];?></td>
                      <td><?= $d['logo'];?></td>
                      <td><?= $d['admin_id'];?></td>
                      <td><a href="update" class="btn btn-default">update</a></td>
                    </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              
            </div>
            <!-- /.card -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php require_once("footer..php"); ?>