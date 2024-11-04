<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8" />
   <title>Hans Cell</title>
   <link rel="stylesheet" href="css/style.css" />
</head>

<body>
   <!-- partial:index.partial.html -->
   <?php
   include('component/navbar.php');
   ?>
   <?php
   include('component/header.php');
   ?>
   <main>
      <div class="container">
         <section id="about" class="grid">
            <!-- Kalo Mau Ngatur About -->
            <div class="column-xs-12 column-md-6">
               <div class="image-holder">
                  <div class="image-block" data-aos="reveal-bottom"></div>
                  <img src="images/wafan.jpg" />
               </div>
            </div>
            <div class="column-xs-12 column-md-6">
               <h2>Nama User</h2>
               <h3>12312312312</h3>
               <p>
                  Saya adalah mahasiswa semester 8 di Universitas Indraprasta PGRI dengan Fakultas Teknik Informatika...(Lanjutin dewek ada di line 30 index.php)
               </p>
            </div>
         </section>
      </div>
   </main>
   <?php
   include('component/footer.php');
   ?>
   <?php
   include('component/modal.php');
   ?>

   <!-- partial -->
   <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
   <script src="js/script.js"></script>
</body>

</html>