<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("mitra/components/header.php") ?>
</head>

<body class="sb-nav-fixed">

    <?php $this->load->view("mitra/components/nav_bar.php") ?>

    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <?php $this->load->view("mitra/components/side_bar.php") ?>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Table Implementasi Kerja Sama</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="<?= base_url();?>Dashboard/dashboard_mitra">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">Implementasi Kerja Sama</li>
                    </ol>
                   
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Data Implementasi Kerja Sama
                        </div>
                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Masa Berlaku</th>
                                        <th>Lembaga Mitra</th>
                                        <th>Keterangan</th>
                                        <th>Jenis Perjanjian</th>
                                        <th>Kategori Kerja Sama</th>
                                        <th>File Implementasi Kerja Sama</th>
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                  $no = 0;
                  foreach($implementasi_kerja_sama->result_array() as $i)
                  :
                  $no++;
                  $masa_berlaku = $i['masa_berlaku'];
                  $nama_mitra = $i['nama_mitra'];
                  $keterangan = $i['keterangan'];
                  $id_jenis_perjanjian = $i['bentuk_perjanjian'];
                  $nama_kategori_kerja_sama = $i['nama_kategori_kerja_sama'];
                  $file_implementasi_kerja_sama = $i['file_implementasi_kerja_sama'];
                 

              ?>
                                    <tr>
                                        <td><?= $no ?></td>
                                        <td><?= $masa_berlaku ?></td>
                                        <td><?= $nama_mitra ?></td>
                                        <td><?= $keterangan ?></td>
                                        <td><?= $id_jenis_perjanjian ?></td>
                                        <td><?= $nama_kategori_kerja_sama?></td>
                                        <td class="text-center">
                                            <div class="table-resposive">
                                                <div class="table table-striped table-hover "><a type="button"
                                                        class="btn btn-primary"
                                                        href="<?=base_url();?>assets/implementasi_kerja_sama/admin/<?=$file_implementasi_kerja_sama?>"><i
                                                            class="fas fa-download"></i></a>
                                                </div>
                                            </div>
                                        </td>

                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <?php $this->load->view("mitra/components/footer.php") ?>
</body>

</html>