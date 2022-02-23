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
                    <h1 class="mt-4">Table Kerja Sama Eksternal</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="<?= base_url();?>Dashboard/dashboard_anggota">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">Kerja Sama Eksternal</li>
                    </ol>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Data Kerja Sama Eksternal
                        </div>
                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>No Usulan</th>
                                        <th>Keterangan</th>
                                        <th>Lembaga Mitra</th>
                                        <th>Pengusul</th>
                                        <th>Status Kerja Sama </th>
                                        <th>File Kerja Sama Eksternal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                  $no_id = 0;
                  $no = 1;
                  
                  foreach($kerja_sama_eksternal as $i){
                 
                  $id_kerja_sama_eksternal = $i['id_kerja_sama_eksternal'];
                  $no_usulan = $i['no_usulan'];
                  $keterangan = $i['keterangan'];
                  $id_lembaga_mitra = $i['nama_mitra'];
                  $id_pengusul =  $kerja_sama_eksternal_pengusul[$no_id++]['nama_pengusul'];
                  $id_status_kerja_sama = $i['status_kerja_sama'];
                  $file_kerja_sama_eksternal = $i['file_kerja_sama_eksternal'];
                  
              ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $no_usulan ?></td>
                                        <td><?= $keterangan ?></td>
                                        <td><?= $id_lembaga_mitra ?></td>
                                        <td><?= $id_pengusul ?></td>
                                        <td><?= $id_status_kerja_sama ?></td>
                                        <td class="text-center">
                                            <div class="table-resposive">
                                                <div class="table table-striped table-hover "><a type="button"
                                                        class="btn btn-primary"
                                                        href="<?=base_url();?>assets/kerja_sama_eksternal/admin/<?=$file_kerja_sama_eksternal?>"><i
                                                            class="fas fa-download"></i></a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php } ?>
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