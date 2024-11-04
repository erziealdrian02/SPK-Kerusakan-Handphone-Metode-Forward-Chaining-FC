<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <title>CodePen - Login Form</title>
      <link
         rel="stylesheet"
         href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css"
      />
      <link rel="stylesheet" href="/css/login.css" />
      <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
   </head>
   <body>
      <!-- partial:index.partial.html -->
      <div class="login">
         <h1>Login</h1>
         <form class="form-signin" action="process/proseslogin.php" method="POST">
            <input
               type="text"
               name="username"
               placeholder="Username"
               required="required"
               id="inputEmail"
            />
            <input
               type="password"
               name="password"
               placeholder="Password"
               required="required"
               id="inputPassword"
            />
            <button type="submit" class="btn btn-primary btn-block btn-large">
               Let me in.
            </button>
         </form>
      </div>
      <!-- partial -->
      <script src="/js/script.js"></script>
   </body>
</html>
