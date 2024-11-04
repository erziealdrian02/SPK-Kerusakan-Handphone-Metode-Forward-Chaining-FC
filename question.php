<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Hans Cell</title>
   <link rel="stylesheet" href="css/style.css">
</head>
<body>
   <!-- partial:index.partial.html -->
   <?php
      include ('component/navbar.php');
   ?>
   <main>
      <div class="container">
         <section id="blog" class="grid">
            <div class="column-xs-12 text-center">
               <h3 class="text-left">Pertanyaan Diagnosis</h3>
               <form method="post" action="input-ketampung.php" enctype="multipart/form-data" role="form">
                  <?php
                     include ('process/koneksi.php');
                     $kode='PERT01';
                     session_start();
                  ?>
                  <figure>
                     <figcaption>
                        <?php
                           echo "<h3>Melakukan Proses untuk identifikasi, </br>".$_SESSION['merek']." ".$_SESSION['tipe']."</h3>";
                        ?>
                     </figcaption>
                  </figure>
                  <?php                                    
                     if(isset($_GET['kode'])){
                        $kode=$_GET['kode'];
                     }

                     $sql = "SELECT * from pertanyaan WHERE kode_pertanyaan='$kode'";
                     $data = mysqli_query($connect,$sql);
                     $row = mysqli_fetch_assoc($data);     
                  ?>
                  <h2>
                     <?php echo $row['isi_pertanyaan']; ?>
                  </h2>
                  
                  <br>
                  <div class="option">
                     <?php 
                        include "process/fungsi.php";
                        answer($kode);                    
                     ?>
                  </div>
               </form>
            </div>               
         </section>
      </div>
   </main>
   <?php
      include ('component/footer.php');
   ?>
   <?php
      include ('component/modal.php');
   ?>
   <!-- partial -->
   <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
   <script src="js/script.js"></script>
</body>
</html>
