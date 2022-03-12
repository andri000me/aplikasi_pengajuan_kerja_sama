<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
        <div class="nav">
            <div class="sb-sidenav-menu-heading">Core</div>
            <a class="nav-link" href="<?= base_url();?>Dashboard/dashboard_admin">
                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                Dashboard
            </a>
            <a class="nav-link" href="<?= base_url();?>Kerja_sama_eksternal/view_admin">
                <div class="sb-nav-link-icon"><i class="fas fa-archive"></i></div>
                Kerja Sama Eksternal
            </a>
            <a class="nav-link" href="<?= base_url();?>Kerja_sama_internal/view_admin">
                <div class="sb-nav-link-icon"><i class="fas fa-archive"></i></div>
                Kerja Sama Internal
            </a>
            <a class="nav-link" href="<?= base_url();?>Implementasi_kerja_sama/view_admin">
                <div class="sb-nav-link-icon"><i class="fas fa-archive"></i></div>
                Implementasi Kerja Sama
            </a>
            <a class="nav-link" href="<?= base_url();?>Form_pengajuan/form_pengajuan_admin">
                <div class="sb-nav-link-icon"><i class="fas fa-archive"></i></div>
                Form Pengajuan
            </a>
            <a class="nav-link" href="<?= base_url();?>Data_pengajuan/view_admin">
                <div class="sb-nav-link-icon"><i class="fas fa-archive"></i></div>
                Data Pengajuan
            </a>
            <a class="nav-link" href="<?= base_url();?>Data_pengajuan/view_admin_data_terajukan">
                <div class="sb-nav-link-icon"><i class="fas fa-archive"></i></div>
                Data Terajukan
            </a>
            <div class="sb-sidenav-menu-heading">Filter Data</div>
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts"
                aria-expanded="false" aria-controls="collapseLayouts">
                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                Kerja Sama Eksternal
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="<?= base_url();?>Kerja_sama_eksternal/filter_admin/1">Pendidikan</a>
                    <a class="nav-link" href="<?= base_url();?>Kerja_sama_eksternal/filter_admin/2">Penelitian</a>
                    <a class="nav-link" href="<?= base_url();?>Kerja_sama_eksternal/filter_admin/3">Pengabdian</a>
                </nav>
            </div>
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#filter_data"
                aria-expanded="false" aria-controls="filter_data">
                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                Kerja Sama Internal
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="filter_data" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                <a class="nav-link" href="<?= base_url();?>Kerja_sama_internal/filter_admin/1">Pendidikan</a>
                    <a class="nav-link" href="<?= base_url();?>Kerja_sama_internal/filter_admin/2">Penelitian</a>
                    <a class="nav-link" href="<?= base_url();?>Kerja_sama_internal/filter_admin/3">Pengabdian</a>
                </nav>
            </div>
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#filter_data_implementasi"
                aria-expanded="false" aria-controls="filter_data">
                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                Implementasi Kerja Sama
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="filter_data_implementasi" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="<?= base_url();?>Implementasi_kerja_sama/filter_admin/1">Pendidikan</a>
                    <a class="nav-link" href="<?= base_url();?>Implementasi_kerja_sama/filter_admin/2">Penelitian</a>
                    <a class="nav-link" href="<?= base_url();?>Implementasi_kerja_sama/filter_admin/3">Pengabdian</a>
                </nav>
            </div>

            <div class="sb-sidenav-menu-heading">Master Data</div>
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#negara_pengajuan"
                aria-expanded="false" aria-controls="negara_pengajuan">
                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                Kelola Master Data
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="negara_pengajuan" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="<?= base_url();?>Negara_pengajuan/view_admin">Negara</a>
                </nav>
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="<?= base_url();?>Bentuk_perjanjian/view_admin">Bentuk Perjanjian</a>
                </nav>
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="<?= base_url();?>Jenis_pengajuan/view_admin">Jenis Pengajuan</a>
                </nav>
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="<?= base_url();?>Jenis_pengajuan/view_admin">kategori Kerja Sama</a>
                </nav>
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="<?= base_url();?>Jenis_pengajuan/view_admin">Status Kerja Sama</a>
                </nav>
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="<?= base_url();?>Jenis_pengajuan/view_admin">Status Pengajuan</a>
                </nav>
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="<?= base_url();?>Jenis_pengajuan/view_admin">Masa Berlaku</a>
                </nav>
            </div>
        </div>
    </div>
    <div class="sb-sidenav-footer">
        <div class="small">Logged in as:</div>
        Admin
    </div>
</nav>