<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>HanCell</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css" />
        <link rel="stylesheet" href="css/admin.css" />
    </head>
    <body>
        <div class="admin">
            <?php include('component/header.php'); ?>
            <?php include('component/navbar.php'); ?>
            <main class="admin__main">
                <h2>List Pertanyaan</h2>
                <div class="dashboard">
                    <div class="dashboard__item dashboard__item--full">
                        <div class="card">
                            <a href="#open_pertanyaan_add" class="button button-tambah" data-toggle="modal">Add</a>
                            <table class="styled-table">
                                <thead>
                                    <tr>
                                        <th>Kode Pertanyaan</th>
                                        <th>Isi Pertanyaan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        include "process/koneksi.php";
                                        $no = 1;
                                        $select = mysqli_query($connect, "SELECT * FROM pertanyaan");
                                        while($data = mysqli_fetch_array($select)) {
                                    ?>
                                    <tr>
                                        <td><?php echo $data['kode_pertanyaan']; ?></td>
                                        <td><?php echo $data['isi_pertanyaan']; ?></td>
                                        <td>
                                            <a href="#open_pertanyaan_edit<?php echo $data['kode_pertanyaan']; ?>" class="button" data-toggle="modal" data-target="#open_modal<?php echo $data['kode_pertanyaan']; ?>">Edit</a>
                                            <a href="process/hapus_pertanyaan.php?kode_pertanyaan=<?= $data['kode_pertanyaan']; ?>" onclick="return confirm('Apakah yakin menghapus ?')" class="button button-hapus">Hapus</a>
                                            <?php include('component/modal_pertanyaan.php'); ?>
                                        </td>
                                    </tr>
                                </tbody>
                                <?php } ?>
                            </table>
                        </div>
                    </div>
                </div>
            </main>
            <?php include('component/footer.php'); ?>
        </div>
    </body>
</html>
