<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="index.html">
            <span class="text-danger">BAPA</span>KOS</a>
        </a>

        <ul class="sidebar-nav">
            <li class="sidebar-header">
                Pages
            </li>

            <li class="sidebar-item active">
                <a class="sidebar-link" href="<?= base_url('admin') ?>">
                    <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
                </a>
            </li>

            <!-- <li class="sidebar-item">
                <a class="sidebar-link" href="pages-profile.html">
                    <i class="align-middle" data-feather="user"></i> <span class="align-middle">Profile</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="pages-sign-in.html">
                    <i class="align-middle" data-feather="log-in"></i> <span class="align-middle">Sign In</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="pages-sign-up.html">
                    <i class="align-middle" data-feather="user-plus"></i> <span class="align-middle">Sign Up</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="pages-blank.html">
                    <i class="align-middle" data-feather="book"></i> <span class="align-middle">Blank</span>
                </a>
            </li> -->

            <li class="sidebar-header">
                Data Kost
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="<?= base_url('admin/dataKos/') . $kos['user_id'] ?>">
                    <i class="align-middle" data-feather="home"></i> <span class="align-middle">Data Kost</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="<?= base_url('admin/tambahKos') ?>">
                    <i class="align-middle" data-feather="plus"></i> <span class="align-middle">Tambah Kost</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="<?= base_url('admin/fasilitas') ?>">
                    <i class="align-middle" data-feather="plus"></i> <span class="align-middle">Tambah Fasilitas</span>
                </a>
            </li>

            <!--<li class="sidebar-item">
                <a class="sidebar-link" href="ui-cards.html">
                    <i class="align-middle" data-feather="grid"></i> <span class="align-middle">Cards</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="ui-typography.html">
                    <i class="align-middle" data-feather="align-left"></i> <span class="align-middle">Typography</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="icons-feather.html">
                    <i class="align-middle" data-feather="coffee"></i> <span class="align-middle">Icons</span>
                </a>
            </li> -->

            <li class="sidebar-header">
                Data User
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="<?= base_url('admin/pemilik') ?>">
                    <i class="align-middle" data-feather="user"></i> <span class="align-middle">Pemilik</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="<?= base_url('admin/pencari') ?>">
                    <i class="align-middle" data-feather="users"></i> <span class="align-middle">Pencari</span>
                </a>
            </li>

            <li class="sidebar-header">
                Data Sewa
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="<?= base_url('admin/pencari') ?>">
                    <i class="align-middle" data-feather="file"></i> <span class="align-middle">Laporan Sewa</span>
                </a>
            </li>
        </ul>
    </div>
</nav>