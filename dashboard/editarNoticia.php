<?php

require 'includes/BDi.php';
if(isset($_GET['remove'])) {

    $idNoticia = $_GET['idNoticia'];
  
    $stmt = $DB->prepare("DELETE FROM noticias WHERE idNoticia=?");
    $stmt->bind_param('s',$idNoticia);
    $stmt->execute();
        $_SESSION['apagarNoticia'] = 'teste1';
        header("Location: noticias");
}

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
                  <h4 class="card-title">Editar Noticia</h4>
                </div>
              </div>
              <div class="card-body ">
                  <?php
                    	require "includes/BDi.php";
							$stmt = $DB->prepare("SELECT idNoticia,noticia,descNoticia,noticiaEn,descNoticiaEn,imagem FROM noticias WHERE idNoticia=?");
                $stmt->bind_param("s", $_GET['idNoticia']);
							$stmt->execute(); 
							$stmt->bind_result($idNoticia,$noticia,$descNoticia,$noticiaEn,$descNoticiaEn,$imagem);
							while ($stmt->fetch())
								echo "
                  <form method='GET' action='editar/noticia' class='form-horizontal'>
                  <input type='hidden' name='idNoticia' id='idNoticia' value='$idNoticia'>
                  <h4 class='title'>Versão Português</h4>
                  <div class='row'>
                      <label class='col-sm-2 col-form-label'>Noticia</label>
                      <div class='col-sm-10'>
                        <div class='form-group'>
                          <input type='text' name='noticia' id='noticia' value='$noticia' class='form-control' placeholder='Noticia'>
                        </div>
                      </div>
                    </div>
                  <div class='row'>
                      <label class='col-sm-2 col-form-label'>Descrição</label>
                      <div class='col-sm-10'>
                        <div class='form-group'>
                         <textarea id='desc' name='desc' class='form-control' aria-label='With textarea' rows='7!important' required style='resize:none;'>$descNoticia</textarea>
                        </div>
                      </div>
                    </div>
                  <h4 class='title'>Versão Inglês</h4>
                  <div class='row'>
                      <label class='col-sm-2 col-form-label'>New</label>
                      <div class='col-sm-10'>
                        <div class='form-group'>
                          <input type='text' name='noticiaEn' id='noticiaEn' value='$noticiaEn' class='form-control' placeholder='New'>
                        </div>
                      </div>
                    </div>
                  <div class='row'>
                      <label class='col-sm-2 col-form-label'>Description</label>
                      <div class='col-sm-10'>
                        <div class='form-group'>
                         <textarea id='descEn' name='descEn' class='form-control' aria-label='With textarea' rows='7!important' required style='resize:none;'>$descNoticiaEn</textarea>
                        </div>
                      </div>
                    </div>
                    <button type='submit' name='submit' id='submit' class='btn btn-fill btn-rose'>Editar Noticia<div class='ripple-container'></div></button>
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
if(isset($_SESSION['editarInformacoes'])) {
  echo "<script>Swal.fire(
  'Informações alteradas com sucesso!',
  '',
  'success'
) </script>"; 
  unset($_SESSION['editarInformacoes']);
} ?>
  </body>

  </html>