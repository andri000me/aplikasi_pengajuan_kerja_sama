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
        icon: "error"
    });
    </script>
    <?php } ?>

    <?php if ($this->session->flashdata('eror_file')){ ?>
    <script>
    swal({
        title: "Erorr!",
        text: "Data File Terlalu Besar !",
        icon: "error"
    });
    </script>
    <?php } ?>

    <?php if ($this->session->flashdata('eror_edit')){ ?>
    <script>
    swal({
        title: "Erorr!",
        text: "Data Gagal Diedit!",
        icon: "error"
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
                    <h1 class="mt-4">Form Pengajuan</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="<?= base_url();?>Dashboard/dashboard_mitra">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">form pengajuan</li>
                    </ol>

                    <form action="<?= base_url(); ?>Form_pengajuan/input_data_mitra" enctype="multipart/form-data"
                        method="POST">
                        <div class="mb-3">
                            <label for="no_pengajuan" class="form-label">Nomor Pengajuan</label>
                            <input type="text" class="form-control" id="no_pengajuan" aria-describedby="no_pengajuan"
                                name="no_pengajuan">
                        </div>
                        <div class="mb-3">
                            <label for="keterangan" class="form-label">Keterangan</label>
                            <input type="text" class="form-control" id="keterangan" name="keterangan">
                        </div>
                        <div class="mb-3">
                            <label for="keterangan" class="form-label">Bentuk Perjanjian</label>
                            <select class="form-select" aria-label="Default select example" name="id_bentuk_perjanjian">
                                <?php foreach($bentuk_perjanjian as $u)
                                                    :
                                                    $id = $u["id_bentuk_perjanjian"];
                                                    $bentuk_perjanjian = $u["bentuk_perjanjian"];
                                                     ?>
                                <option value="<?= $id ?>"><?= $bentuk_perjanjian ?>
                                </option>

                                <?php endforeach?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="keterangan" class="form-label">Jenis Pengajuan</label>
                            <select class="form-select" aria-label="Default select example" name="id_jenis_pengajuan">
                                <?php foreach($jenis_pengajuan as $u)
                                                    :
                                                    $id = $u["id_jenis_pengajuan"];
                                                    $jenis_pengajuan = $u["jenis_pengajuan"];
                                                     ?>
                                <option value="<?= $id ?>"><?= $jenis_pengajuan ?>
                                </option>

                                <?php endforeach?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="keterangan" class="form-label">file data pengajuan</label>
                            <input type="file" class="form-control" id="keterangan" name="file_data_pengajuan">
                        </div>
                        <div class="mb-3">
                            <label for="keterangan" class="form-label">Negara Asal</label>
                            <select class="form-select" aria-label="Default select example"
                                name="id_negara_asal_pengajuan">
                                <?php foreach($negara_asal_pengajuan as $u)
                                                    :
                                                    $id = $u["id_negara_pengajuan"];
                                                    $negara_asal_pengajuan = $u["negara_pengajuan"];
                                                     ?>
                                <option value="<?= $id ?>"><?= $negara_asal_pengajuan ?>
                                </option>

                                <?php endforeach?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="keterangan" class="form-label">Kategori Kerja Sama</label>
                            <select class="form-select" aria-label="Default select example"
                                name="id_kategori_kerjasama">
                                <?php foreach($kategori_kerja_sama as $u)
                                                    :
                                                    $id = $u["id_kategori_kerja_sama"];
                                                    $kategori_kerja_sama = $u["nama_kategori_kerja_sama"];
                                                     ?>
                                <option value="<?= $id ?>"><?= $kategori_kerja_sama ?>
                                </option>

                                <?php endforeach?>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </main>
        </div>
    </div>
    <?php $this->load->view("mitra/components/footer.php") ?>
</body>

</html>