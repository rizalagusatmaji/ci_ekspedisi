<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Kurir</h1>

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
                            <th>Name</th>
                            <th>Username</th>
                            <th>Role Name</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <?php $no = 1;
                    foreach ($kurir as $kr) : ?>
                        <tbody>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $kr->name; ?></td>
                                <td><?= $kr->username; ?></td>
                                <td><?= $kr->role; ?></td>
                                <td class="text-center">
                                    <a href="#ubah" data-toggle="modal" onclick="edit(<?= $kr->id ?>)" class="btn btn-warning btn-icon-split btn-sm">
                                        <span class="text">Ubah</span>
                                    </a>
                                    <a href="<?= base_url('admin/hapus_kurir/' . $kr->id) ?>" onclick="return confirm('apakah anda yakin untuk menghapus?')" class="btn btn-danger btn-icon-split btn-sm">
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
                <h5 class="modal-title" id="exampleModalLongTitle">Tambah Kurir</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('admin/tambah_kurir') ?>" method="post" enctype="multipart/form-data">
                    Name
                    <input type="text" name="name" class="form-control" required autocomplete="off"><br>
                    Username
                    <input type="text" name="username" class="form-control" required autocomplete="off"><br>
                    Password
                    <input type="password" name="password" class="form-control" required autocomplete="off"><br>
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
                <h5 class="modal-title" id="exampleModalLongTitle">Ubah Kurir</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('admin/ubah_kurir') ?>" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" id="id">
                    Name
                    <input type="text" name="name" id="name" class="form-control" required autocomplete="off"><br>
                    Username
                    <input type="text" name="username" id="username" class="form-control" required autocomplete="off"><br>
                    Password
                    <input type="password" name="password" id="password" class="form-control" required autocomplete="off"><br>
                    <input type="hidden" name="role_id" id="role_id">
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
            url: "<?= base_url() ?>admin/tampil_kurir/" + id,
            dataType: "json",
            success: function(data) {
                $("#id").val(data.id);
                $("#name").val(data.name);
                $("#username").val(data.username);
                $("#password").val(data.password);
                $("#role_id").val(data.role_id);
            }
        });
    }
</script>