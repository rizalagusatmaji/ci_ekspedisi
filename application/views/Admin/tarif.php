<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Tarif</h1>

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
                            <th>Kota Awal</th>
                            <th>Kota Tujuan</th>
                            <th>Biaya</th>
                            <th>Action</th>
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
                                <td class="text-center">
                                    <a href="#ubah" data-toggle="modal" onclick="edit(<?= $tr->id ?>)" class="btn btn-warning btn-icon-split btn-sm">
                                        <span class="text">Ubah</span>
                                    </a>
                                    <a href="<?= base_url('admin/hapus_tarif/' . $tr->id) ?>" onclick="return confirm('apakah anda yakin untuk menghapus?')" class="btn btn-danger btn-icon-split btn-sm">
                                        <span class="text">Hapus</span>
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
                <h5 class="modal-title" id="exampleModalLongTitle">Tambah Tarif</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('admin/tambah_tarif') ?>" method="post" enctype="multipart/form-data">
                    Kota Awal
                    <input type="text" name="kota_awal" class="form-control" required autocomplete="off"><br>
                    Kota Tujuan
                    <input type="text" name="kota_tujuan" class="form-control" required autocomplete="off"><br>
                    Biaya
                    <input type="text" name="biaya" class="form-control" required autocomplete="off"><br>
                    <input type="hidden" name="role_id" value="2">
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
                <h5 class="modal-title" id="exampleModalLongTitle">Ubah Tarif</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('admin/ubah_tarif') ?>" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" id="id">
                    Kota Awal
                    <input type="text" name="kota_awal" id="kota_awal" class="form-control" required autocomplete="off"><br>
                    Kota Tujuan
                    <input type="text" name="kota_tujuan" id="kota_tujuan" class="form-control" required autocomplete="off"><br>
                    Biaya
                    <input type="text" name="biaya" id="biaya" class="form-control" required autocomplete="off"><br>
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
            url: "<?= base_url() ?>admin/tampil_tarif/" + id,
            dataType: "json",
            success: function(data) {
                $("#id").val(data.id);
                $("#kota_awal").val(data.kota_awal);
                $("#kota_tujuan").val(data.kota_tujuan);
                $("#biaya").val(data.biaya);
            }
        });
    }
</script>