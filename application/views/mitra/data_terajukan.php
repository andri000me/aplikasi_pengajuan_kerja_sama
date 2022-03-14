<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("mitra/components/header.php") ?>
</head>

<body class="sb-nav-fixed">
    <?php if ($this->session->flashdata('input')){ ?>
    <script>
    swal({
        title: "Success!",
        text: "Pengajuan Berhasil Diajukan!",
        icon: "success"
    });
    </script>
    <?php } ?>

    <?php if ($this->session->flashdata('edit')){ ?>
    <script>
    swal({
        title: "Success!",
        text: "Data Berhasil Diedit!",
        icon: "success"
    });
    </script>
    <?php } ?>

    <?php if ($this->session->flashdata('hapus')){ ?>
    <script>
    swal({
        title: "Success!",
        text: "Data Berhasil Dihapus!",
        icon: "success"
    });
    </script>
    <?php } ?>

    <?php if ($this->session->flashdata('eror')){ ?>
    <script>
    swal({
        title: "Erorr!",
        text: "Data Gagal Ditambahkan!",
        icon: "eror"
    });
    </script>
    <?php } ?>

    <?php if ($this->session->flashdata('eror_file')){ ?>
    <script>
    swal({
        title: "Erorr!",
        text: "Data File Terlalu Besar !",
        icon: "eror"
    });
    </script>
    <?php } ?>

    <?php if ($this->session->flashdata('eror_edit')){ ?>
    <script>
    swal({
        title: "Erorr!",
        text: "Data Gagal Diedit!",
        icon: "eror"
    });
    </script>
    <?php } ?>
    <?php $this->load->view("mitra/components/nav_bar.php") ?>

    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <?php $this->load->view("mitra/components/side_bar.php") ?>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Data Status Pengajuan</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="<?= base_url();?>Dashboard/dashboard_mitra">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">Pengajuan</li>
                    </ol>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Data Pengajuan
                        </div>
                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>

                                    <tr>
                                        <th>No Pengajuan</th>
                                        <th>Keterangan</th>
                                        <th>Bentuk Perjanjian</th>
                                        <th>Jenis Pengajuan</th>
                                        <th>File Data Pengajuan</th>
                                        <th>Negara Asal Pengajuan</th>
                                        <th>Status Pengajuan</th>
                                        <th>Kategori Kerjasama</th>
                                        <th>Masa Berlaku</th>
                                        <th>Penerima</th>
                                        <th >Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                  
                                  $id = 0;
                                  foreach($data_pengajuan as $i)
                                  :
                                  $id++;
                                  $no_pengajuan = $i['no_pengajuan'];
                                  $keterangan = $i['keterangan'];
                                  $bentuk_perjanjian = $i['bentuk_perjanjian'];
                                  $jenis_pengajuan = $i['jenis_pengajuan'];
                                  $file_data_pengajuan = $i['file_data_pengajuan'];
                                  $negara_pengajuan = $i['negara_pengajuan'];
                                  $status_pengajuan = $i['status_pengajuan'];
                                  $nama_kategori_kerja_sama = $i['nama_kategori_kerja_sama'];
                                  $nama_mitra = $i['nama_mitra'];
                                  $masa_berlaku = $i['masa_berlaku'];
                                  $id_data_pengajuan = $i['id_data_pengajuan'];
                                 
                                 
                
                              ?>
                                    <tr>
                                        <td><?= $no_pengajuan?></td>
                                        <td><?= $keterangan?></td>
                                        <td><?=  $bentuk_perjanjian ?></td>
                                        <td><?=  $jenis_pengajuan ?></td>
                                        <td class="text-center">
                                            <div class="table-resposive">
                                                <div class="table table-striped table-hover "><a type="button"
                                                        class="btn btn-primary"
                                                        href="<?=base_url();?>assets/data_pengajuan/admin/<?=$file_data_pengajuan?>"><i
                                                            class="fas fa-download"></i></a>
                                                </div>
                                            </div>
                                        </td>
                                        <td><?=  $negara_pengajuan ?></td>
                                        <td><?=  $status_pengajuan ?></td>
                                        <td><?=  $nama_kategori_kerja_sama ?></td>
                                        <td><?= $masa_berlaku?></td>
                                        <td><?= $nama_mitra ?></td>
                                     
                                        <td>
                                            <div class="table-resposive">
                                                <div class="table table-striped table-hover ">
                                                    <a href="" data-bs-toggle="modal"
                                                        data-bs-target="#hapus<?php echo  $id_data_pengajuan ?>"
                                                        class="btn btn-danger"><i class="fas fa-trash"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <!-- Modal Hapus Data Pengajuan -->
                                    <div class="modal fade" id="hapus<?= $id_data_pengajuan ?>" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Hapus Data
                                                        Pengajuan
                                                    </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form
                                                        action="<?php echo base_url()?>Data_pengajuan/hapus_data_pengajuan_mitra/<?=$id_data_pengajuan?>"
                                                        method="post" enctype="multipart/form-data">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <input type="hidden" name="id_data_pengajuan"
                                                                    value="<?php echo $id_data_pengajuan?>" />

                                                                <input type="hidden"
                                                                    name="file_data_pengajuan_old"
                                                                    value="<?=$file_data_pengajuan?>" hidden>


                                                                <p>Apakah kamu yakin ingin menghapus data
                                                                    ini?</i></b></p>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-danger ripple"
                                                                data-dismiss="modal">Tidak</button>
                                                            <button type="submit"
                                                                class="btn btn-success ripple save-category">Ya</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    
                                    <?php endforeach?>
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