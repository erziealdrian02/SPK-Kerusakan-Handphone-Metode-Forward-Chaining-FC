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
                <h2>List Kerusakan</h2>
                <div class="dashboard">
                    <div class="dashboard__item dashboard__item--full">
                        <div class="card">
                            <table class="styled-table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Merek</th>
                                        <th>Tipe</th>
                                        <th>Solusi</th>
                                        <th>Fakta</th>
                                        <th>Oleh</th>
                                        <th>Isi Solusi</th>
                                        <th>Status</th>
                                        <th>Dibuat</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        include "process/koneksi.php";
                                        $no = 1;
                                        $select = mysqli_query($connect, "SELECT * FROM riwayat");
                                        while($data = mysqli_fetch_array($select)) {
                                    ?>
                                    <tr>
                                        <td><?php echo $data['riwayat_id']; ?></td>
                                        <td><?php echo $data['merek']; ?></td>
                                        <td><?php echo $data['tipe']; ?></td>
                                        <td><?php echo $data['solusi']; ?></td>
                                        <td><?php echo $data['fakta']; ?></td>
                                        <td><?php echo $data['oleh']; ?></td>
                                        <td><?php echo $data['isi_solusi']; ?></td>
                                        <td><?php echo $data['status']; ?></td>
                                        <td><?php echo $data['created_at']; ?></td>
                                        <td>
                                            <a href="process/hapus_history.php?riwayat_id=<?= $data['riwayat_id']; ?>" onclick="return confirm('Apakah yakin menghapus ?')" class="button button-hapus">Hapus</a>
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
