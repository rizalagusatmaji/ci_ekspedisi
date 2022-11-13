<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Pengiriman</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="#tambah" data-toggle="modal" class="btn btn-primary btn-icon-split btn-sm">
                <span class="icon text-white-50">
                    <i class="fas fa-plus"></i>
                </span>
                <span class="text">Tambah data</span>
            </a>
        </div>
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
                            <th class="text-center">Action</th>
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
                                <td class="text-center" style="width: 9%;">
                                    <a href="#ubah" data-toggle="modal" onclick="edit(<?= $pg->id ?>)" class="btn btn-warning btn-sm">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="<?= base_url('admin/hapus_pengiriman/' . $pg->id) ?>" onclick="return confirm('apakah anda yakin untuk menghapus?')" class="btn btn-danger btn-sm">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>
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

<!-- Modal tambah data -->
<div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Tambah Pengiriman</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('admin/tambah_pengiriman') ?>" method="post" enctype="multipart/form-data">
                    No Resi
                    <input type="text" name="resi" class="form-control" required autocomplete="off">
                    Nama Pengirim
                    <input type="text" name="nama_pengirim" class="form-control" required autocomplete="off">
                    No Hp
                    <input type="text" name="no_hp" class="form-control" required autocomplete="off">
                    Alamat Asal
                    <input type="text" name="alamat_asal" class="form-control" required autocomplete="off">
                    Alamat Tujuan
                    <input type="text" name="alamat_tujuan" class="form-control" required autocomplete="off">
                    Tanggal Pengiriman
                    <?php $date = new DateTime("now", new DateTimeZone("Asia/Jakarta")); ?>
                    <input type="text" name="tanggal" class="form-control" required autocomplete="off" value="<?php echo $date->format('Y-m-d H:i:s'); ?>">
                    Biaya
                    <input type="text" name="biaya" class="form-control" required autocomplete="off">
                    Status
                    <input type="text" name="status" class="form-control" required autocomplete="off">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <input type="submit" name="save" value="Save" class="btn btn-primary"></input>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal ubah data -->
<div class="modal fade" id="ubah" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Ubah Pengiriman</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('admin/ubah_pengiriman') ?>" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" id="id">
                    No Resi
                    <input type="text" name="resi" id="resi" class="form-control" required autocomplete="off">
                    Nama Pengirim
                    <input type="text" name="nama_pengirim" id="nama_pengirim" class="form-control" required autocomplete="off">
                    No Hp
                    <input type="text" name="no_hp" id="no_hp" class="form-control" required autocomplete="off">
                    Alamat Asal
                    <input type="text" name="alamat_asal" id="alamat_asal" class="form-control" required autocomplete="off">
                    Alamat Tujuan
                    <input type="text" name="alamat_tujuan" id="alamat_tujuan" class="form-control" required autocomplete="off">
                    Tanggal Pengiriman
                    <input type="text" name="tanggal" id="tanggal" class="form-control" required autocomplete="off">
                    Biaya
                    <input type="text" name="biaya" id="biaya" class="form-control" required autocomplete="off">
                    Status
                    <input type="text" name="status" id="status" class="form-control" required autocomplete="off">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <input type="submit" name="save" value="Save Changes" class="btn btn-primary"></input>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    function edit(id) {
        $.ajax({
            type: "post",
            url: "<?= base_url() ?>admin/tampil_pengiriman/" + id,
            dataType: "json",
            success: function(data) {
                $("#id").val(data.id);
                $("#resi").val(data.resi);
                $("#no_hp").val(data.no_hp);
                $("#nama_pengirim").val(data.nama_pengirim);
                $("#alamat_asal").val(data.alamat_asal);
                $("#alamat_tujuan").val(data.alamat_tujuan);
                $("#tanggal").val(data.tanggal);
                $("#biaya").val(data.biaya);
                $("#status").val(data.status);
            }
        });
    }
</script>