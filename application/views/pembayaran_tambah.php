<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-10"> Data Pembayaran </h1>
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
                <h5 class="m-0"><?php echo $subtitle; ?></h5>
              </div>
                  <form class="form-horizontal" method="post" action="<?php echo base_url('pembayaran/simpan') ?>">
                  <div class="card-body">
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">ID Pembayaran</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" name="id_pembayaran" placeholder="ID Pembayaran" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">ID Petugas</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="id_petugas" placeholder="ID Petugas" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">NISN</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="nisn" placeholder="NISN" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Tgl/bln/thn</label>
                            <div class="col-sm-8">
                                <input type="date" class="form-control" name="tgl_bayar" placeholder="Tgl/bln/thn" required>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">ID SPP</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="id_spp" placeholder="ID SPP" required>
                            </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Jumlah</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" name="jumlah_bayar" placeholder="Jumlah" required>
                            </div>
                        </div>
          
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                        <button type="reset" class="btn btn-sm btn-default">Reset</button>
                    </div>
                </form>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>