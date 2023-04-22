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
                  <h4 class="card-title">Editar Serviço</h4>
                </div>
              </div>
              <div class="card-body ">
               <?php
                    	require "includes/BDi.php";
							$stmt = $DB->prepare("SELECT idServico,nomeServico,detalhesServico,nomeServicoEn,detalhesServicoEn FROM servicos WHERE idServico=?");
                $stmt->bind_param("s", $_GET['idServico']);
							$stmt->execute(); 
							$stmt->bind_result($idServico,$nomeServico,$detalhesServico,$nomeServicoEn,$detalhesServicoEn);
							while ($stmt->fetch())
								echo "
                  <form method='GET' action='editar/servico' class='form-horizontal'>
                  <input type='hidden' name='idServico' id='idServico' value='$idServico'>
                  <h4 class='title'>Versão Português</h4>
                  <div class='row'>
                      <label class='col-sm-2 col-form-label'>Serviço</label>
                      <div class='col-sm-10'>
                        <div class='form-group'>
                          <input type='text' name='nomeServico' id='nomeServico' value='$nomeServico' class='form-control' placeholder='Serviço'>
                        </div>
                      </div>
                    </div>
                  <div class='row'>
                      <label class='col-sm-2 col-form-label'>Detalhes do Serviço</label>
                      <div class='col-sm-10'>
                        <div class='form-group'>
                         <textarea id='desc' name='desc' class='form-control' aria-label='With textarea' rows='7!important' required style='resize:none;'>$detalhesServico</textarea>
                        </div>
                      </div>
                    </div>
                  <h4 class='title'>Versão Inglês</h4>
                  <div class='row'>
                      <label class='col-sm-2 col-form-label'>Service</label>
                      <div class='col-sm-10'>
                        <div class='form-group'>
                          <input type='text' name='nomeServicoEn' id='nomeServicoEn' value='$nomeServicoEn' class='form-control' placeholder='Service'>
                        </div>
                      </div>
                    </div>
                  <div class='row'>
                      <label class='col-sm-2 col-form-label'>Service Details</label>
                      <div class='col-sm-10'>
                        <div class='form-group'>
                         <textarea id='descEn' name='descEn' class='form-control' aria-label='With textarea' rows='7!important' required style='resize:none;'>$detalhesServicoEn</textarea>
                        </div>
                      </div>
                    </div>
                    <button type='submit' name='submit' id='submit' class='btn btn-fill btn-rose'>Editar Serviço<div class='ripple-container'></div></button>
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
  </body>

  </html>