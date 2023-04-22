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
                  <h4 class="card-title">Candidatura</h4>
                </div>
              </div>
              <div class="card-body ">
                <?php
                    	require "includes/BDi.php";
							$stmt = $DB->prepare("SELECT emprego,nome,email,contacto,residencia,descricao,ficheiro FROM candidaturas WHERE idCandidatura=?");
                $stmt->bind_param("s", $_GET['idCandido']);
							$stmt->execute(); 
							$stmt->bind_result($emprego,$nome,$email,$contacto,$residencia,$descricao,$ficheiro);
							while ($stmt->fetch())
								echo "
                  <form method='POST' action='phpcodes/editarInformacoesGerais.php' class='form-horizontal'>
                  <div class='row'>
                      <label class='col-sm-2 col-form-label'>Oportunidade</label>
                      <div class='col-sm-10'>
                        <div class='form-group'>
                          <input type='text' name='email' id='email' value='$emprego' class='form-control' placeholder='Email' disabled>
                        </div>
                      </div>
                    </div>
                  <div class='row'>
                      <label class='col-sm-2 col-form-label'>Nome</label>
                      <div class='col-sm-10'>
                        <div class='form-group'>
                          <input type='text' name='contacto' id='contacto' value='$nome' class='form-control' placeholder='Nome' disabled>
                        </div>
                      </div>
                    </div>
                  <div class='row'>
                      <label class='col-sm-2 col-form-label'>Email</label>
                      <div class='col-sm-10'>
                        <div class='form-group'>
                          <input type='text' name='email' id='email' value='$email' class='form-control' placeholder='Email' disabled>
                        </div>
                      </div>
                    </div>
                  <div class='row'>
                      <label class='col-sm-2 col-form-label'>Contacto</label>
                      <div class='col-sm-10'>
                        <div class='form-group'>
                          <input type='text' name='contacto' id='contacto' value='$contacto' class='form-control' placeholder='Contacto' disabled>
                        </div>
                      </div>
                    </div>
                  <div class='row'>
                      <label class='col-sm-2 col-form-label'>Residência</label>
                      <div class='col-sm-10'>
                        <div class='form-group'>
                          <input type='text' name='residencia' id='residencia' value='$residencia' class='form-control' placeholder='Residencia' disabled>
                        </div>
                      </div>
                    </div>
                  <div class='row'>
                      <label class='col-sm-2 col-form-label'>Descrição</label>
                      <div class='col-sm-10'>
                        <div class='form-group'>
                          <textarea id='desc' name='desc' class='form-control' aria-label='With textarea' rows='7!important' required style='resize:none;' disabled>$descricao</textarea>
                        </div>
                      </div>
                    </div>
                  <div class='row'>
                      <label class='col-sm-2 col-form-label'>CV</label>
                      <div class='col-sm-10'>
                        <div class='form-group'>
                          <div>
                          <span class='btn btn-rose btn-round btn-file'>
                          <a style='color: #ffffff'href='$ficheiro' download>Download CV</a>
                          </span>
                        </div>
                        </div>
                      </div>
                    </div>
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