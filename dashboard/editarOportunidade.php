<?php
require 'includes/BDi.php';
if(isset($_GET['remove'])) {

    $id = $_GET['idEmprego'];

    $stmt = $DB->prepare("DELETE FROM oportunidades WHERE id=?");
    $stmt->bind_param('s',$id);
    $stmt->execute();
        $_SESSION['apagarOportunidade'] = 'teste1';
        header("Location: oportunidades");
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
                  <h4 class="card-title">Editar Oportunidade</h4>
                </div>
              </div>
              <div class="card-body ">
               <?php
                    	require "includes/BDi.php";
							$stmt = $DB->prepare("SELECT id,emprego,descritivo,requisitos,responsabilidades,informacaoAdicional,empregoEn,descritivoEn,requisitosEn,responsabilidadesEn,informacaoAdicionalEn FROM oportunidades WHERE id=?");
                $stmt->bind_param("s", $_GET['idEmprego']);
							$stmt->execute();
							$stmt->bind_result($idEmprego,$emprego,$desc,$requisitos,$responsabilidades,$informacaoAdicional,$empregoEn,$descEn,$requisitosEn,$responsabilidadesEn,$informacaoAdicionalEn);
							while ($stmt->fetch())
								echo "
                  <form method='GET' action='editar/oportunidade' class='form-horizontal'>
                  <input type='hidden' name='idEmprego' id='idEmprego' value='$idEmprego'>
                  <h4 class='title'>Versão Português</h4>
                  <div class='row'>
                      <label class='col-sm-2 col-form-label'>Oportunidade</label>
                      <div class='col-sm-10'>
                        <div class='form-group'>
                          <input type='text' name='emprego' id='emprego' value='$emprego' class='form-control' placeholder='Emprego'>
                        </div>
                      </div>
                    </div>
                  <div class='row'>
                      <label class='col-sm-2 col-form-label'>Descrição</label>
                      <div class='col-sm-10'>
                        <div class='form-group'>
                         <textarea id='desc' name='desc' class='form-control' aria-label='With textarea' rows='7!important' style='resize:none;'>$desc</textarea>
                        </div>
                      </div>
                    </div>
                  <div class='row'>
                      <label class='col-sm-2 col-form-label'>Requisitos</label>
                      <div class='col-sm-10'>
                        <div class='form-group'>
                         <textarea id='requisitos' name='requisitos' class='form-control' aria-label='With textarea' rows='7!important' required style='resize:none;' placeholder='Requisitos'>$requisitos</textarea>
                        </div>
                      </div>
                    </div>
                  <div class='row'>
                      <label class='col-sm-2 col-form-label'>Responsabilidades</label>
                      <div class='col-sm-10'>
                        <div class='form-group'>
                         <textarea id='responsabilidades' name='responsabilidades' class='form-control' aria-label='With textarea' rows='7!important' style='resize:none;' placeholder='Responsabilidades'>$responsabilidades</textarea>
                        </div>
                      </div>
                    </div>
                  <div class='row'>
                      <label class='col-sm-2 col-form-label'>Informação Adicional</label>
                      <div class='col-sm-10'>
                        <div class='form-group'>
                         <textarea id='infoAdicional' name='infoAdicional' class='form-control' aria-label='With textarea' rows='2!important' style='resize:none;' placeholder='Informação Adicional'>$informacaoAdicional</textarea>
                        </div>
                      </div>
                    </div>
                  <h4 class='title'>Versão Inglês</h4>
                  <div class='row'>
                      <label class='col-sm-2 col-form-label'>Opportunity</label>
                      <div class='col-sm-10'>
                        <div class='form-group'>
                          <input type='text' name='empregoEn' id='empregoEn' value='$empregoEn' class='form-control' placeholder='Emprego'>
                        </div>
                      </div>
                    </div>
                  <div class='row'>
                      <label class='col-sm-2 col-form-label'>Description</label>
                      <div class='col-sm-10'>
                        <div class='form-group'>
                         <textarea id='descEn' name='descEn' class='form-control' aria-label='With textarea' rows='7!important' style='resize:none;'>$descEn</textarea>
                        </div>
                      </div>
                    </div>
                  <div class='row'>
                      <label class='col-sm-2 col-form-label'>Requirements</label>
                      <div class='col-sm-10'>
                        <div class='form-group'>
                         <textarea id='requisitosEn' name='requisitosEn' class='form-control' aria-label='With textarea' rows='7!important' required style='resize:none;' placeholder='Requisitos'>$requisitosEn</textarea>
                        </div>
                      </div>
                    </div>
                  <div class='row'>
                      <label class='col-sm-2 col-form-label'>Responsabilities</label>
                      <div class='col-sm-10'>
                        <div class='form-group'>
                         <textarea id='responsabilidadesEn' name='responsabilidadesEn' class='form-control' aria-label='With textarea' rows='7!important' style='resize:none;' placeholder='Responsabilities'>$responsabilidadesEn</textarea>
                        </div>
                      </div>
                    </div>
                  <div class='row'>
                      <label class='col-sm-2 col-form-label'>Additional Information</label>
                      <div class='col-sm-10'>
                        <div class='form-group'>
                         <textarea id='infoAdicionalEn' name='infoAdicionalEn' class='form-control' aria-label='With textarea' rows='2!important' style='resize:none;' placeholder='Informação Adicional'>$informacaoAdicionalEn</textarea>
                        </div>
                      </div>
                    </div>
                    <button type='submit' name='submit' id='submit' class='btn btn-fill btn-rose'>Editar Oportunidade<div class='ripple-container'></div></button>
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
