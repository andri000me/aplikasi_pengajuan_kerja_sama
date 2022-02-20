<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("anggota/components/header.php") ?>
</head>

<body class="sb-nav-fixed">

<?php $this->load->view("anggota/components/nav_bar.php") ?>

    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
        <?php $this->load->view("anggota/components/side_bar.php") ?>
        </div>
        <div id="layoutSidenav_content">
            <main>
            <div class="container-fluid px-4">
                        <h1 class="mt-4">Table Kerja Sama Internal</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="<?= base_url();?>Dashboard/dashboard_anggota">Dashboard</a></li>
                            <li class="breadcrumb-item active">Kerja Sama Internal</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                                DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the
                                <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>
                                .
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Data Kerja Sama Internal
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No Usulan</th>
                                            <th>Keterangan</th>
                                            <th>Lembaga Mitra</th>
                                            <th>Pengusul</th>
                                            <th>Status Kerja Sama </th>
                                            <th>File Kerja Sama Internal</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>61</td>
                                            <td>2011/04/25</td>
                                            <td>$320,800</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
            </main>
        </div>
    </div>
    <?php $this->load->view("anggota/components/footer.php") ?>
</body>

</html>