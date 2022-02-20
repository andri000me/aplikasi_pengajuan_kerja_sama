<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("admin/components/header.php") ?>
</head>

<body class="sb-nav-fixed">
    <?php if ($this->session->flashdata('input')){ ?>
    <script>
    swal({
        title: "Success!",
        text: "Berhasil Upload !",
        icon: "success"
    });
    </script>
    <?php } ?>
    <?php $this->load->view("admin/components/nav_bar.php") ?>

    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <?php $this->load->view("admin/components/side_bar.php") ?>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Table Implementasi Kerja Sama</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="<?= base_url();?>Dashboard/dashboard_admin">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">Implementasi Kerja Sama</li>
                    </ol>
                    <ol>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            Tambah Data <i class="fas fa-plus"></i>
                        </button>
                    </ol>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            DataImplementasi Kerja Sama
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
                                        <th>File Implementasi Kerja Sama</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php
                  $id = 0;
                  foreach($kerja_sama_eksternal->result_array() as $i)
                  :
                  $id++;
                  $no_usulan = $i['no_usulan'];
                  $keterangan = $i['keterangan'];
                  $id_lembaga_mitra = $i['id_lembaga_mitra'];
                  $id_pengusul = $i['id_pengusul'];
                  $id_status_kerja_sama = $i['id_status_kerja_sama'];
                  $file_kerja_sama_eksternal = $i['file_kerja_sama_eksternal'];
                 
                  

              ?>
                                    <tr>
                                        <td><?= $id ?></td>
                                        <td><?= $no_usulan ?></td>
                                        <td><?= $keterangan ?></td>
                                        <td><?= $id_lembaga_mitra ?></td>
                                        <td><?= $id_pengusul ?></td>
                                        <td><?= $id_status_kerja_sama ?></td>
                                        <td><?= $file_kerja_sama_eksternal ?></td>
                                        <td>
                                            <div class="table-resposive">
                                                <div class="table table-striped table-hover ">
                                                    <a type="button" class="btn btn-primary"><i
                                                            class="fas fa-plus"></i></a>
                                                </div>
                                            </div>
                                            <div class="table-resposive">
                                                <div class="table table-striped table-hover ">
                                                    <a type="button" class="btn btn-danger"><i
                                                            class="fas fa-trash"></i></a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php endforeach;?>
                                </tbody>
                            </table>
                        </div>
                        <!-- Modal Tambah Data Implementasi Kerja Sama -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Implementasi Kerja
                                            Sama
                                        </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <div class="mb-3">
                                                <label for="no_pengajuan" class="form-label">Nomor Usulan</label>
                                                <input type="text" class="form-control" id="no_pengajuan"
                                                    aria-describedby="no_pengajuan">
                                            </div>
                                            <div class="mb-3">
                                                <label for="keterangan" class="form-label">Keterangan</label>
                                                <input type="text" class="form-control" id="keterangan">
                                            </div>
                                            <div class="mb-3">
                                                <label for="keterangan" class="form-label">Lembaga Mitra</label>
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected>Open this select menu</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="keterangan" class="form-label">Pengusul</label>
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected>Open this select menu</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="keterangan" class="form-label">Status Kerja Sama</label>
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected>Open this select menu</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="keterangan" class="form-label">File Kerja Sama
                                                    Eksternal</label>
                                                <input type="file" class="form-control" id="keterangan">
                                            </div>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </main>
        </div>
    </div>
    <?php $this->load->view("admin/components/footer.php") ?>
</body>

</html>