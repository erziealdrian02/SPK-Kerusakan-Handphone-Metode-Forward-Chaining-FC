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
                <h2>List Solusi</h2>
                <div class="dashboard">
                    <div class="dashboard__item dashboard__item--full">
                        <div class="card">
                            <a href="#open_solusi_add" class="button button-tambah" data-toggle="modal">Add</a>
                            <table class="styled-table">
                                <thead>
                                    <tr>
                                        <th>Kode Solusi</th>
                                        <th>Isi Solusi</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        include "process/koneksi.php";
                                        $no = 1;
                                        $select = mysqli_query($connect, "SELECT * FROM solusi");
                                        while($data = mysqli_fetch_array($select)) {
                                    ?>
                                    <tr>
                                        <td><?php echo $data['kode_solusi']; ?></td>
                                        <td><?php echo $data['isi_solusi']; ?></td>
                                        <td>
                                            <a href="#open_solusi_edit<?php echo $data['kode_solusi']; ?>" class="button" data-toggle="modal" data-target="#open_modal<?php echo $data['kode_solusi']; ?>">Edit</a>
                                            <a href="process/hapus_solusi.php?kode_solusi=<?= $data['kode_solusi']; ?>" onclick="return confirm('Apakah yakin menghapus ?')" class="button button-hapus">Hapus</a>
                                            <?php include('component/modal_solusi.php'); ?>
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
