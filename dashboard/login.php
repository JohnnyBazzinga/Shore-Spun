<?php include 'includes/header.php';?>
  <!-- Navbar -->
  <style>
  .center {
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 100%;
  }
  </style>
      <div class="center">
      <img src="assets/img/shore.png" alt="astute" /></a>
      </div>
  <!-- End Navbar -->
  <div class="wrapper wrapper-full-page">
    <div class="page-header login-page header-filter" filter-color="black" style="background-image: url('assets/img/register.jpg'); background-size: cover; background-position: top center;">
      <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
      <div class="container">
      <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto">
          <form class="form" method="POST" action="phpcodes/login.php">
              <div class="card card-login">

                <div class="card-body ">
                  <h3 class="card-title text-center">Login</h3>

                  <span class="bmd-form-group is-filled">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="material-icons">person</i>
                        </span>
                      </div>
                      <input type="text" class="form-control" name='username' placeholder="Username...">
                    </div>
                  </span>
                  <span class="bmd-form-group is-filled">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="material-icons">lock_outline</i>
                        </span>
                      </div>
                      <input type="password" class="form-control" name='password' placeholder="Password...">
                    </div>
                  </span>
                </div>
                <div class="card-footer justify-content-center">
                <input class='btn btn-rose btn-link btn-lg' type="submit" name="submit" value="Login" />
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <footer class="footer">
        <div class="container">
          <nav class="float-left">
            <ul>
              <li>
                <a href="../pt">
                  Shore
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright float-right">
          © <?php echo date("Y"); ?> Shore. Todos os direitos reservados.
          </div>
        </div>
      </footer>
    </div>
  </div>
  <?php include 'includes/scripts.php';?>

    <?php
    if(isset($_SESSION['logadoErro'])) {
  echo "<script>Swal.fire({
  icon: 'error',
  title: 'Oops...',
  text: 'Credenciais Incorretas',
  footer: ''
}) </script>";
  unset($_SESSION['logadoErro']);
}
    ?>

    <script>
    $(document).ready(function() {
      md.checkFullPageBackgroundImage();
      setTimeout(function() {
        $('.card').removeClass('card-hidden');
      }, 700);
    });
  </script>
</body>
</html>
