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
        text: "Data Berhasil Ditambahkan!",
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

    <?php if ($this->session->flashdata('eror_edit')){ ?>
    <script>
    swal({
        title: "Erorr!",
        text: "Data Gagal Diedit!",
        icon: "eror"
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
                    <h1 class="mt-4">Form Pengajuan</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="<?= base_url();?>Dashboard/dashboard_mitra">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">form pengajuan</li>
                    </ol>

                    <form action="<?= base_url(); ?>Form_pengajuan/input_data_admin"
                                            enctype="multipart/form-data" method="POST">
                        <div class="mb-3">
                            <label for="no_pengajuan" class="form-label">Nomor Pengajuan</label>
                            <input type="text" class="form-control" id="no_pengajuan" aria-describedby="no_pengajuan" name="no_pengajuan">
                        </div>
                        <div class="mb-3">
                            <label for="keterangan" class="form-label">Keterangan</label>
                            <input type="text" class="form-control" id="keterangan" name="keterangan">
                        </div>
                        <div class="mb-3">
                        <label for="id_bentuk_perjanjian" class="form-label">Bentuk Perjanjian</label>
                            <select class="form-select" aria-label="Default select example" name="id_bentuk_perjanjian">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="mb-3">
                        <label for="id_jenis_pengajuan" class="form-label">Jenis Pengajuan</label>
                            <select class="form-select" aria-label="Default select example" name="id_jenis_pengajuan">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="file_data_pengajuan" class="form-label">file data pengajuan</label>
                            <input type="file" class="form-control" id="keterangan" name="file_data_pengajuan">
                        </div>
                        <div class="mb-3">
                        <label for="id_negara_asal_pengajuan" class="form-label">Negara Asal</label>
                            <select class="form-select" aria-label="Default select example" name="id_negara_asal_pengajuan">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="mb-3">
                        <label for="id_kategori_kerjasama" class="form-label">Kategori Kerja Sama</label>
                            <select class="form-select" aria-label="Default select example" name="id_kategori_kerjasama">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="mb-3">
                        <label for="id_user_penerima" class="form-label">Mitra Penerima</label>
                            <select class="form-select" aria-label="Default select example" name="id_user_penerima">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </main>
        </div>
    </div>
    <?php $this->load->view("admin/components/footer.php") ?>
</body>

</html>