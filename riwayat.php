<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8" />
   <title>Hans Cell</title>
   <link rel="stylesheet" href="css/style.css" />
</head>

<body>
   <?php include('component/navbar.php'); ?>
   <main>
      <div class="container">
         <section id="about" class="grid">
            <div class="column-xs-12 text-center">
               <h3 class="text-left">Riwayat Diagnosis</h3>
            </div>
            <div class="column-xs-12 text-center">
               <?php
               include "process/koneksi.php";
               $sql = "SELECT riwayat_id, created_at FROM riwayat";
               $data = mysqli_query($connect, $sql);
               ?>
               <form method="POST" action="">
                  <div class="form-group">
                     <label for="riwayat_id" style="color: white;">Pilih Penilaian</label>
                     <select id="riwayat_id" name="riwayat_id" required>
                        <option value="">Pilih Tanggal Penilaian</option>
                        <?php
                        while ($query = mysqli_fetch_assoc($data)) {
                           echo "<option value='{$query['riwayat_id']}'>{$query['riwayat_id']} | {$query['created_at']}</option>";
                        }
                        ?>
                     </select>
                  </div>
                  <input class="button" type="submit" name="submit" value="CETAK">
               </form>
            </div>
            <div class="column-xs-12">
               <div class="card-container">
                  <?php
                  $sql = "SELECT * FROM riwayat";
                  $data = mysqli_query($connect, $sql);
                  while ($row = mysqli_fetch_assoc($data)) {
                     echo '<div class="card">';
                     echo '<h4>' . $row['merek'] . ' ' . $row['tipe'] . '</h4>';
                     echo '<p> Solusi yang diberikan <br>- ' . $row['solusi'] . '</p>';
                     echo '<p> Fakta yang dialami <br>- ' . $row['fakta'] . '</p>';
                     echo '<p> Saran yang diberikan <br>- ' . $row['isi_solusi'] . '</p>';
                     echo '<p> Dibuat oleh <br>- ' . $row['oleh'] . '</p>';
                     echo '<p> Status  <br>- ' . $row['status'] . '</p>';
                     echo '</div>';
                  }
                  ?>
               </div>
            </div>
         </section>
      </div>
      <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
         $print = 0;
         $riwayat_id = $_POST["riwayat_id"];
         echo "<div class='printable'>";
      ?>
         <h2 style="text-align: center; color: white;">HASIL PERANGKINGAN</h2>
         <table border="1">
            <thead>
               <tr>
                  <th>Merek</th>
                  <th>Tipe</th>
                  <th>Solusi</th>
                  <th>Fakta</th>
                  <th>Oleh</th>
                  <th>Isi Solusi</th>
                  <th>Status</th>
                  <th>Created At</th>
               </tr>
            </thead>
            <tbody>
               <?php
               $sqlGetAlternatif = mysqli_query($connect, "SELECT * FROM riwayat WHERE riwayat_id = '$riwayat_id'");
               while ($data = mysqli_fetch_assoc($sqlGetAlternatif)) {
                  echo "
                     <tr>
                        <td>{$data['merek']}</td>
                        <td>{$data['tipe']}</td>
                        <td>{$data['solusi']}</td>
                        <td>{$data['fakta']}</td>
                        <td>{$data['isi_solusi']}</td>
                        <td>{$data['oleh']}</td>
                        <td>{$data['status']}</td>
                        <td>{$data['created_at']}</td>
                        <p>Maka Solusi Memperbaikinya adalah :<br> <strong style='color:green'>" . $data['isi_solusi'] . "</strong></p>
                     </tr>
                  ";
               }
               ?>
            </tbody>
         </table>
         <?php
         echo "</div>";
         $print = 1;

         if ($print == 1) {
         ?>
            <script>
               window.print();
            </script>
      <?php
         }
      }
      ?>
   </main>
   <?php include('component/footer.php'); ?>
   <?php include('component/modal.php'); ?>

   <!-- partial -->
   <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
   <script src="js/script.js"></script>
</body>

</html>