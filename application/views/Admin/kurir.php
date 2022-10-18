<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Kurir</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="#" class="btn btn-primary btn-icon-split btn-sm">
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
                            <th>Id</th>
                            <th>Name</th>
                            <th>Username</th>
                            <th>Role_Id</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>kurir1</td>
                            <td>kurir1</td>
                            <td>kurir</td>
                            <td>
                                <a href="#" class="btn btn-warning btn-icon-split btn-sm">
                                    <span class="text">Ubah</span>
                                </a>
                                <a href="#" class="btn btn-danger btn-icon-split btn-sm">
                                    <span class="text">Hapus</span>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->