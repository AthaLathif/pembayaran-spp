 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><?php echo $title; ?><</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><?php echo $title; ?></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="m-1"><?php echo $title; ?></h5>
              </div>
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NISN</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no=0;
                        foreach ($siswa->result() as $value):
                            $no++;
                        ?>
                        <tr>
                           <td><?php echo $no; ?></td>
                            <td><?php echo $value->nisn; ?></td>
                            <td><?php echo $value->nama; ?></td>
                            <td><?php echo $value->alamat; ?></td>
                            <td>
                                <a href="<?php echo base_url('siswa/ubah/').$value->nisn ?>" class="btn btn-sm btn-warning">Ubah</a>
                                <a href="<?php echo base_url('siswa/hapus/').$value->nisn ?>" class="btn btn-sm btn-danger">Hapus</a>
                            </td>
                        </tr>
                        <?php
                        endforeach;
                        ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>NISN</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Opsi</th>
                            </tr>
                        </tfoot>

          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
        <div class="card-footer clearfix">
            <a href="<?php echo base_url('siswa/tambah') ?>" class="btn btn-xs btn-primary">Tambah Data</a>
            <a href="<?php echo base_url('siswa/pdf')?>" class="btn btn-warning btn-primary">PDF</a>
        </div>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>