<!DOCTYPE html>
<html>
  <head>
    <title>Sign In</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Produk By Mfikri.com">
    <meta name="author" content="M Fikri Setiadi">
    <!-- Bootstrap -->
    <link href="<?php echo base_url().'assets/css/bootstrap.css'?>" rel="stylesheet">
  </head>
  <body>
 
    <div class="container">
        <div class="col-md-4 col-md-offset-4">
          <form class="form-signin" action="<?php echo base_url().'index.php/login/auth'?>" method="post">
            <h2 class="form-signin-heading">Please sign in</h2>
            <?php echo $this->session->flashdata('msg');?>
            <label for="username" class="sr-only">Username</label>
            <input type="text" id="username" name="username" class="form-control" placeholder="Username" required autofocus>
            <label for="password" class="sr-only">Password</label>
            <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
            <div class="checkbox">
              <label>
                <input type="checkbox" value="remember-me"> Remember me
              </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit" name="login">Sign in</button>
          </form>
        </div>
        </div> <!-- /container -->
 
 
    <!-- jQuery-->
    <script src="<?php echo base_url().'assets/js/jquery-3.4.1.min.js'?>"></script>
    <!-- Bootsrap -->
    <script src="<?php echo base_url().'assets/js/bootstrap.min.js'?>"></script>
 
  </body>
</html