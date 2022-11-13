<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Pengiriman</h1>

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
                            <th>No Resi</th>
                            <th>Nama Pengirim</th>
                            <th>No HP Pengirim</th>
                            <th>Alamat Awal</th>
                            <th>Alamat Tujuan</th>
                            <th>Tanggal Pengiriman</th>
                            <th>Biaya</th>
                            <th>Status</th>
                            <th class="text-center">Ubah Status</th>
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
                                </td>
                            </tr>
                        </tbody>
                    <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

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
                <form action="<?= base_url('kurir/ubah_pengiriman') ?>" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" id="id">
                    No Resi :
                    <input type="text" id="resi" class="form-control" required autocomplete="off" disabled>
                    <input type="hidden" name="resi" id="resi" class="form-control" required autocomplete="off">
                    Nama Pengirim
                    <input type="text" id="nama_pengirim" class="form-control" required autocomplete="off" disabled>
                    <input type="hidden" name="nama_pengirim" id="nama_pengirim" class="form-control" required autocomplete="off">
                    No Hp
                    <input type="text" id="no_hp" class="form-control" required autocomplete="off" disabled>
                    <input type="hidden" name="no_hp" id="no_hp" class="form-control" required autocomplete="off">
                    Alamat Asal
                    <input type="text" id="alamat_asal" class="form-control" required autocomplete="off" disabled>
                    <input type="hidden" name="alamat_asal" id="alamat_asal" class="form-control" required autocomplete="off">
                    Alamat Tujuan
                    <input type="text" id="alamat_tujuan" class="form-control" required autocomplete="off" disabled>
                    <input type="hidden" name="alamat_tujuan" id="alamat_tujuan" class="form-control" required autocomplete="off">
                    Tanggal Pengiriman
                    <input type="text" id="tanggal" class="form-control" required autocomplete="off" disabled>
                    <input type="hidden" name="tanggal" id="tanggal" class="form-control" required autocomplete="off">
                    Biaya
                    <input type="text" id="biaya" class="form-control" required autocomplete="off" disabled>
                    <input type="hidden" name="biaya" id="biaya" class="form-control" required autocomplete="off">
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
            url: "<?= base_url() ?>kurir/tampil_pengiriman/" + id,
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