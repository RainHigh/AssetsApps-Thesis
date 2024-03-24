<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- /.content-wrapper -->
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Assets</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url(); ?>qr/dashboard">Home</a></li>
                        <li class="breadcrumb-item active">Assets</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
        <?php if ($this->session->userdata('logged_in')['dept'] == 6) { ?>
            <div class="col-lg-3 col-12">
                <!-- small box -->
                <a href="<?= base_url(); ?>qr/asset/add" class="small-box-footer">
                    <div class="small-box bg-primary">
                        <div class="inner">
                            <h3>Add Asset</h3>
                        </div>
                </a>
            </div>
            </div>
        <?php } ?>
<!-- Main row -->
<div class="row">
    <!-- Left col -->
    <section class="col-lg-12">
        <!-- Custom tabs (Charts with tabs)-->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">
                    <i class="fas fa-chart-pie mr-1"></i>
                    Data Assets
                </h3>
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Kode Asset</th>
                                <th>Nama Asset</th>
                                <th>Status</th>
                                <th>User</th>
                                <th>QRCode</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($get_all_asset as $row) {
                            ?>
                                <tr>
                                    <td><?php echo $row->code ?></td>
                                    <td><?php echo $row->name ?></td>
                                    <td><?php echo $row->status ?></td>
                                    <td><?php echo $row->user ?></td>
                                    <td class="text-center"><img src="<?php echo base_url('qr/asset/qr_code/' . $row->qrcode) ?>"></td>
                                    <td class="text-center">
                                        <div class="btn-group mb-4 btn-group-sm">
                                            <a href="<?php echo base_url(); ?>qr/asset/edit/<?php echo encode_id($row->id); ?>" class="btn btn-warning"><i class="fa fa-edit"></i> Edit</a>
                                            <a href="<?php echo base_url(); ?>qr/asset/detail/<?php echo encode_id($row->id); ?>" class="btn btn-info"><i class="fa fa-info"></i> Detail</a>
                                            <?php if ($this->session->userdata('logged_in')['dept'] == 6) { ?>
                                                <a href="<?php echo base_url(); ?>qr/asset/delete/<?php echo encode_id($row->id); ?>" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</a>
                                            <?php } ?>
                                        </div>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
    </section>
    <!-- /.Left col -->
</div>
<!-- /.row (main row) -->
</div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>