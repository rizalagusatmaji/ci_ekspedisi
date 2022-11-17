<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= baseurl()?>">
        <div class="sidebar-brand-icon">
            <i class="fas fa-warehouse"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Ekspedisi</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <?php
    if ($user['role_id'] == 1) {
    ?>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <li class="nav-item">
            <a class="nav-link" href="<?= base_url() ?>admin/kurir">
                <i class="fas fa-fw fa-users"></i>
                <span>Kurir</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <li class="nav-item">
            <a class="nav-link" href="<?= base_url() ?>admin/pengiriman">
                <i class="fas fa-fw fa-truck"></i>
                <span>Pengiriman</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <li class="nav-item">
            <a class="nav-link" href="<?= base_url() ?>admin/tarif">
                <i class="fas fa-fw fa-table"></i>
                <span>Tarif</span></a>
        </li>

    <?php
    }
    if ($user['role_id'] == 2) {
    ?>
        <!-- Divider -->
        <hr class="sidebar-divider">

        <li class="nav-item">
            <a class="nav-link" href="<?= base_url() ?>kurir/pengiriman">
                <i class="fas fa-fw fa-truck"></i>
                <span>Pengiriman</span></a>
        </li>
    <?php
    }
    ?>


    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->