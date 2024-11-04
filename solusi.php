<?php
session_start();
include('component/navbar.php');
include('process/koneksi.php');

if (isset($_GET['kode'])) {
   $kode = $_GET['kode'];
} else {
   die("Kode solusi tidak ditemukan.");
}

$sql = "SELECT * FROM solusi WHERE kode_solusi='$kode'";
$data = mysqli_query($connect, $sql);
$row = mysqli_fetch_assoc($data);

if (!$row) {
   die("Solusi tidak ditemukan.");
}

// Set session variables if not set
if (!isset($_SESSION['merek'])) $_SESSION['merek'] = '';
if (!isset($_SESSION['tipe'])) $_SESSION['tipe'] = '';
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <title>Hans Cell</title>
   <link rel="stylesheet" href="css/style.css">
</head>

<body>
   <!-- partial:index.partial.html -->
   <main>
      <div class="container">
         <section id="blog" class="grid">
            <div class="column-xs-12 text-left">
               <h3 class="text-left">Hasil Diagnosis</h3>
               <div class="column-xs-12 text-center">
                  <?php
                  include "process/koneksi.php";
                  $sql = "SELECT riwayat_id, created_at FROM riwayat";
                  $data = mysqli_query($connect, $sql);
                  ?>
                  <form method="POST" action="cetak_laporan.php" target="_blank">
                     <input type="hidden" name="merek" value="<?php echo $_SESSION['merek']; ?>">
                     <input type="hidden" name="tipe" value="<?php echo $_SESSION['tipe']; ?>">
                     <input type="hidden" name="isi_solusi" value="<?php echo $row['isi_solusi']; ?>">
                     <input class="button" type="submit" name="cetak" value="CETAK">
                  </form>
               </div>
               <form method="post" action="process/solusi.php" enctype="multipart/form-data" role="form">
                  <section id="about" class="grid">
                     <div class="column-xs-12 column-md-6">
                        <?php
                        echo "<h2>" . $_SESSION['merek'] . " " . $_SESSION['tipe'] . "</h2>";
                        ?>
                        <h3>Di Diagnosa</h3>
                        <p>
                           <?php
                           echo "<p>Maka Solusi Memperbaikinya adalah :<br> <strong style='color:green'>" . $row['isi_solusi'] . "</strong></p>";
                           ?>
                        </p>
                        <?php include "process/fungsi.php";
                        solusi($kode); ?>
                        <h4>Kerusakan yang di alami didapat</h4>
                        <h4>- <?php echo $_SESSION['fakta']; ?></h4>
                        <h4>Disarankan Untuk</h4>
                        <h4>- <?php echo $_SESSION['solusi']; ?></h4>
                        <h4>Di Diagnosa oleh</h4>
                        <h4>- <?php echo $_SESSION['oleh']; ?></h4>
                        <h4>Saat ini</h4>
                        <h4>- <?php echo $_SESSION['status']; ?></h4>
                     </div>
                     <div class="column-xs-12 column-md-6">
                        <div class="image-holder">
                           <div class="image-block" data-aos="reveal-bottom"></div>
                           <img src="images/About.jpeg" />
                        </div>
                     </div>
                     <div class="column-xs-12 column-md-12">
                        <input type="hidden" name="merek" value="<?php echo $_SESSION['merek']; ?>">
                        <input type="hidden" name="tipe" value="<?php echo $_SESSION['tipe']; ?>">
                        <input type="hidden" name="isi_solusi" value="<?php echo $row['isi_solusi']; ?>">
                        <button style="margin-bottom: 10px;" class="btn outline" type="submit">Submit</button>
                     </div>
                  </section>
               </form>
            </div>
         </section>
      </div>
   </main>
   <?php include('component/footer.php'); ?>
   <?php include('component/modal.php'); ?>
   <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
   <script src="js/script.js"></script>
</body>

</html>