<!DOCTYPE html>
<html lang="en">
<head>
  <?php $this->load->view("includes/header");?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
      <?php $this->load->view("includes/navbar"); ?>
  <!-- /.navbar -->
  
  <!-- Main Sidebar Container -->
  <?php $this->load->view("includes/sidebar");?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Ürün Kategorisi</th>
                    <th>Durum</th>
                    <th>Oluşturma Tarihi</th>
                    <th>İşlemler</th>
                  </tr>
                  </thead>

                  <tbody>
                    <?php foreach ($items as $items) { ?>
                      <tr>
                        <td><?php echo $items->id; ?> </td>
                        <td><?php echo $items->title; ?></td>
                        <td><?php echo $items->isActive == 0 ? "Pasif" : "Aktif"; ?></td>
                        <td><?php echo $items->createdAt; ?></td>
                        <td>Sil - Düzenle </td>
                      </tr>

                    <?php } ?>
                  
                  </tbody>
                  
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
  </div>
 

<!-- Footer -->
<?php $this->load->view("includes/footer"); ?>