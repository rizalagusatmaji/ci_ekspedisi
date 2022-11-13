<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Daftar Tarif</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <form action="" method="post">
                    <div class="w-25 mb-2 d-flex">
                        <input type="text" class="form-control form-control-sm" placeholder="Search keyword.." aria-controls="dataTable" name="keyword" autocomplete="off">
                        <button type="submit" class="btn btn-primary btn-sm">Cari</button>
                    </div>
                </form>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kota Awal</th>
                            <th>Kota Tujuan</th>
                            <th>Harga</th>
                        </tr>
                    </thead>
                    <?php $no = 1;
                    foreach ($tarif as $tr) : ?>
                        <tbody>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $tr->kota_awal; ?></td>
                                <td><?= $tr->kota_tujuan; ?></td>
                                <td>Rp.<?= $tr->biaya; ?></td>
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