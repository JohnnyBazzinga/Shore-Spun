<?php
include('phpcodes/verificalogin.php');
?>


<?php include 'includes/header.php';?>
  <div class="wrapper ">
    <?php include 'includes/sidebar.php';?>
    <div class="main-panel">
      <?php include 'includes/topbar.php';?>
      <!-- End Navbar -->
      <div class="content">
        <div class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="card card-stats">
                  <div class="card-header card-header-warning card-header-icon">
                    <div class="card-icon">
                      <i class="material-icons">weekend</i>
                    </div>
                    <p class="card-category">Oportunidades</p>
                    <h3 class="card-title">
                      <?php // Total de Empregos
                        require "includes/BDi.php";
                         $stmt = $DB->prepare("SELECT COUNT(*) AS count FROM `oportunidades` WHERE 1");
                         $stmt->execute();
                         $stmt->bind_result($contador);
                         while ($stmt->fetch()){
                           echo $contador;
                             }
                         $stmt->free_result();
                      ?></h3>
                  </div>
                  <div class="card-footer">
                    <div class="stats">
                      <i class="material-icons">update</i> Atualizado
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="card card-stats">
                  <div class="card-header card-header-success card-header-icon">
                    <div class="card-icon">
                      <i class="material-icons">store</i>
                    </div>
                    <p class="card-category">Total de Noticias</p>
                    <h3 class="card-title">
                      <?php // Total de Noticias
                         $stmt = $DB->prepare("SELECT COUNT(*) AS count FROM `noticias` WHERE 1");
                         $stmt->execute();
                         $stmt->bind_result($contador);
                         while ($stmt->fetch()){
                           echo $contador;
                             }
                         $stmt->free_result();
                      ?></h3>
                  </div>
                  <div class="card-footer">
                    <div class="stats">
                      <i class="material-icons">update</i> Atualizado
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    <!-- Footer -->
      <?php include 'includes/footer.php';?>
    </div>
  </div>
</body>
<?php include 'includes/scripts.php';?>
<?php 
    if(isset($_SESSION['logadoSucesso'])) {
  echo "<script>Swal.fire(
  'Login realizado com sucesso!',
  '',
  'success'
) </script>"; 
  unset($_SESSION['logadoSucesso']);
}
?>
</html>