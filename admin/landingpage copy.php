<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <title>HanCell</title>
      <link
         rel="stylesheet"
         href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css"
      />
      <link rel="stylesheet" href="./css/admin.css" />
   </head>
   <body>
      <!-- partial:index.partial.html -->
      <div class="admin">
         <?php
            include ('component/header.php');
         ?>
         <?php
            include ('component/navbar.php');
         ?>
         <main class="admin__main">
            <h2>Dashboard</h2>
            <div class="dashboard">
               <div class="dashboard__item">
                  <div class="card"><strong>41</strong> Foobars</div>
               </div>
               <div class="dashboard__item">
                  <div class="card"><strong>81.712</strong> Doohickeys</div>
               </div>
               <div class="dashboard__item dashboard__item--full">
                  <div class="card">
                     <img
                        src="https://imgs.xkcd.com/comics/decline.png"
                        alt=""
                     />
                  </div>
               </div>
               <div class="dashboard__item dashboard__item--col">
                  <div class="card">A</div>
               </div>
               <div class="dashboard__item dashboard__item--col">
                  <div class="card">B</div>
               </div>
               <div class="dashboard__item dashboard__item--col">
                  <div class="card">C</div>
               </div>
               <div class="dashboard__item dashboard__item--col">
                  <div class="card">D</div>
               </div>
            </div>
            <p>
               read more about this in
               <a href="https://mxb.at/blog/css-grid-admin-dashboard/"
                  >this blogpost</a
               >.
            </p>
         </main>
         <?php
            include ('component/footer.php');
         ?>
      </div>
      <!-- partial -->
   </body>
</html>
