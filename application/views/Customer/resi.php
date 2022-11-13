<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Status Pengiriman</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <div id="dataTable_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="dataTable"></label></div>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>No Resi</th>
                            <th>Nama Pengirim</th>
                            <th>No HP Pengirim</th>
                            <th>Alamat Awal</th>
                            <th>Alamat Tujuan</th>
                            <th>Tanggal Pengiriman</th>
                            <th>Biaya</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <?php $no = 1;
                    foreach ($pengiriman as $pg) : ?>
                        <tbody>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $pg->resi; ?></td>
                                <td><?= $pg->nama_pengirim; ?></td>
                                <td><?= $pg->no_hp; ?></td>
                                <td><?= $pg->alamat_asal; ?></td>
                                <td><?= $pg->alamat_tujuan; ?></td>
                                <td><?= $pg->tanggal; ?></td>
                                <td>Rp.<?= $pg->biaya; ?></td>
                                <td><?= $pg->status; ?></td>
                            </tr>
                        </tbody>
                    <?php endforeach ?>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->