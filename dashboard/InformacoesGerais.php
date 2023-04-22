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
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card ">
              <div class="card-header card-header-rose card-header-text">
                <div class="card-text">
                  <h4 class="card-title">Informações Gerais</h4>
                </div>
              </div>
              <div class="card-body ">
                <?php
                    	require "includes/BDi.php";
							$stmt = $DB->prepare("SELECT email,contacto,morada FROM informacoesgerais WHERE 1");
							$stmt->execute(); 
							$stmt->bind_result($email,$contacto,$morada);
							while ($stmt->fetch())
								echo "
                  <form method='POST' action='phpcodes/editarInformacoesGerais.php' class='form-horizontal'>
                  <div class='row'>
                      <label class='col-sm-2 col-form-label'>Email</label>
                      <div class='col-sm-10'>
                        <div class='form-group'>
                          <input type='text' name='email' id='email' value='$email' class='form-control' placeholder='Email'>
                        </div>
                      </div>
                    </div>
                  <div class='row'>
                      <label class='col-sm-2 col-form-label'>Contacto</label>
                      <div class='col-sm-10'>
                        <div class='form-group'>
                          <input type='text' name='contacto' id='contacto' value='$contacto' class='form-control' placeholder='Morada'>
                        </div>
                      </div>
                    </div>
                  <div class='row'>
                      <label class='col-sm-2 col-form-label'>Morada</label>
                      <div class='col-sm-10'>
                        <div class='form-group'>
                          <input type='text' name='morada' id='morada' value='$morada' class='form-control' placeholder='Contacto'>
                        </div>
                      </div>
                    </div>
                    <button type='submit' name='submit' id='submit' class='btn btn-fill btn-rose'>Atualizar<div class='ripple-container'></div></button>
                  </form>
                    ";
							$stmt->free_result();
							?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php include 'includes/footer.php';?>
  </div>
</div>
<?php include 'includes/scripts.php';?>

<?php 
    if(isset($_SESSION['editarInformacoesGerais'])) {
  echo "<script>Swal.fire(
  'Informações atualizadas com sucesso!',
  '',
  'success'
) </script>"; 
  unset($_SESSION['editarInformacoesGerais']);
}
?>
  </body>

  </html>