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
        icon: "error"
    });
    </script>
    <?php } ?>

    <?php if ($this->session->flashdata('error_file')){ ?>
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
    <?php $this->load->view("admin/components/nav_bar.php") ?>

    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <?php $this->load->view("admin/components/side_bar.php") ?>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Table Kategori Kerja Sama</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="<?= base_url();?>Dashboard/dashboard_admin">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">Kategori Kerja Sama</li>
                    </ol>
                    <ol>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#tambah_data_kategori_kerja_sama">
                            Tambah Data <i class="fas fa-plus"></i>
                        </button>
                    </ol>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Data Kategori Kerja Sama
                        </div>
                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kategori Kerja Sama</th>
                                        <th >Aksi</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php      
                                        $id = 0;
                                        foreach($kategori_kerja_sama as $i)
                                        :
                                        $id++;
                                        $id_kategori_kerja_sama = $i['id_kategori_kerja_sama'];
                                        $kategori_kerja_sama = $i['nama_kategori_kerja_sama'];
                                    ?>
                                    <tr>
                                        <td><?= $id ?></td>
                                        <td><?= $kategori_kerja_sama ?></td>
                                        <td>
                                            <div class="table-resposive">
                                                <div class="table table-striped table-hover ">
                                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                        data-bs-target="#edit_data_kategori_kerja_sama<?= $id_kategori_kerja_sama ?>">
                                                        <i class="fas fa-edit"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </td>
                                        
                                    </tr>
                                    <!-- Modal Edit Kategori Kerja Sama -->
                                    <div class="modal fade" id="edit_data_kategori_kerja_sama<?= $id_kategori_kerja_sama ?>"
                                        tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Edit Data Negara
                                                    </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="<?= base_url(); ?>kategori_kerja_sama/edit_data_admin"
                                                        enctype="multipart/form-data" method="POST">
                                                        <div class="mb-3">
                                                            <label for="kategori_kerja_sama"
                                                                class="form-label">Negara</label>
                                                            <input type="text" name="id_kategori_kerja_sama"
                                                                value="<?= $id_kategori_kerja_sama?>" hidden>
                                                            <input type="text" class="form-control"
                                                                id="kategori_kerja_sama"
                                                                aria-describedby="kategori_kerja_sama"
                                                                name="kategori_kerja_sama"
                                                                value="<?= $kategori_kerja_sama ?>">
                                                        </div>

                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                    </form>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach;?>
                                </tbody>
                            </table>
                        </div>

                        <!-- Modal Tambah Kategori Kerja Sama -->
                        <div class="modal fade" id="tambah_data_kategori_kerja_sama" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Tambah Bentuk Perjanjian </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="<?= base_url(); ?>kategori_kerja_sama/input_data_admin"
                                            enctype="multipart/form-data" method="POST">
                                            <div class="mb-3">
                                                <label for="kategori_kerja_sama" class="form-label">Bentuk
                                                    Perjanjian</label>
                                                <input type="text" class="form-control" id="kategori_kerja_sama"
                                                    aria-describedby="kategori_kerja_sama" name="kategori_kerja_sama">
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