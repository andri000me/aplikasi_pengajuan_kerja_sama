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
                    <h1 class="mt-4">Form Pengajuan</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="<?= base_url();?>Dashboard/dashboard_anggota">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">form pengajuan</li>
                    </ol>

                    <form>
                        <div class="mb-3">
                            <label for="no_pengajuan" class="form-label">Nomor Pengajuan</label>
                            <input type="text" class="form-control" id="no_pengajuan" aria-describedby="no_pengajuan">
                        </div>
                        <div class="mb-3">
                            <label for="keterangan" class="form-label">Keterangan</label>
                            <input type="text" class="form-control" id="keterangan">
                        </div>
                        <div class="mb-3">
                        <label for="keterangan" class="form-label">Bentuk Perjanjian</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="mb-3">
                        <label for="keterangan" class="form-label">Jenis Pengajuan</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="keterangan" class="form-label">file data pengajuan</label>
                            <input type="file" class="form-control" id="keterangan">
                        </div>
                        <div class="mb-3">
                        <label for="keterangan" class="form-label">Negara Asal</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="mb-3">
                        <label for="keterangan" class="form-label">Kategori Kerja Sama</label>
                            <select class="form-select" aria-label="Default select example">
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
    <?php $this->load->view("anggota/components/footer.php") ?>
</body>

</html>