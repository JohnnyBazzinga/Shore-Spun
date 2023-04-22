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
                  <h4 class="card-title">Adicionar Oportunidade</h4>
                </div>
              </div>
              <div class="card-body ">
                  <form method='GET' action='adicionar/oportunidade' class='form-horizontal'>
                 <h4 class="title">Versão Português</h4>
                  <div class='row'>
                      <label class='col-sm-2 col-form-label'>Oportunidade</label>
                      <div class='col-sm-10'>
                        <div class='form-group'>
                          <input type='text' name='emprego' id='emprego' class='form-control' placeholder='Emprego'>
                        </div>
                      </div>
                    </div>
                  <div class='row'>
                      <label class='col-sm-2 col-form-label'>Descrição</label>
                      <div class='col-sm-10'>
                        <div class='form-group'>
                         <textarea id='desc' name='desc' class='form-control' aria-label='With textarea' rows='7!important'  style='resize:none;' placeholder='Descrição'></textarea>
                        </div>
                      </div>
                    </div>
                  <div class='row'>
                      <label class='col-sm-2 col-form-label'>Requisitos</label>
                      <div class='col-sm-10'>
                        <div class='form-group'>
                         <textarea id='requisitos' name='requisitos' class='form-control' aria-label='With textarea' rows='7!important' required style='resize:none;' placeholder='Requisitos'></textarea>
                        </div>
                      </div>
                    </div>
                  <div class='row'>
                      <label class='col-sm-2 col-form-label'>Responsabilidades</label>
                      <div class='col-sm-10'>
                        <div class='form-group'>
                         <textarea id='responsabilidades' name='responsabilidades' class='form-control' aria-label='With textarea' rows='7!important'  style='resize:none;' placeholder='Responsabilidades'></textarea>
                        </div>
                      </div>
                    </div>
                  <div class='row'>
                      <label class='col-sm-2 col-form-label'>Informação Adicional</label>
                      <div class='col-sm-10'>
                        <div class='form-group'>
                         <textarea id='infoAdicional' name='infoAdicional' class='form-control' aria-label='With textarea' rows='2!important' style='resize:none;' placeholder='Informação Adicional'></textarea>
                        </div>
                      </div>
                    </div>
                 <h4 class="title">Versão Inglês</h4>
                  <div class='row'>
                      <label class='col-sm-2 col-form-label'>Opportunity</label>
                      <div class='col-sm-10'>
                        <div class='form-group'>
                          <input type='text' name='empregoEn' id='empregoEn' class='form-control' placeholder='Opportunity'>
                        </div>
                      </div>
                    </div>
                  <div class='row'>
                      <label class='col-sm-2 col-form-label'>Description</label>
                      <div class='col-sm-10'>
                        <div class='form-group'>
                         <textarea id='descEn' name='descEn' class='form-control' aria-label='With textarea' rows='7!important' style='resize:none;' placeholder='Description'></textarea>
                        </div>
                      </div>
                    </div>
                  <div class='row'>
                      <label class='col-sm-2 col-form-label'>Requirements</label>
                      <div class='col-sm-10'>
                        <div class='form-group'>
                         <textarea id='requisitosEn' name='requisitosEn' class='form-control' aria-label='With textarea' rows='7!important' required style='resize:none;' placeholder='Requisitos'></textarea>
                        </div>
                      </div>
                    </div>
                  <div class='row'>
                      <label class='col-sm-2 col-form-label'>Responsabilidades</label>
                      <div class='col-sm-10'>
                        <div class='form-group'>
                         <textarea id='responsabilidadesEn' name='responsabilidadesEn' class='form-control' aria-label='With textarea' rows='7!important' style='resize:none;' placeholder='Responsabilies'></textarea>
                        </div>
                      </div>
                    </div>
                  <div class='row'>
                      <label class='col-sm-2 col-form-label'>Additional Information</label>
                      <div class='col-sm-10'>
                        <div class='form-group'>
                         <textarea id='infoAdicionalEn' name='infoAdicionalEn' class='form-control' aria-label='With textarea' rows='2!important' style='resize:none;' placeholder='Additional Information'></textarea>
                        </div>
                      </div>
                    </div>
                    <button type='submit' name='submit' id='submit' class='btn btn-fill btn-rose'>Adicionar Emprego<div class='ripple-container'></div></button>
               </form>
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
  echo "<script>showSwal(
  'Informações alteradas com sucesso!',
  '',
  'success'
) </script>";
  unset($_SESSION['editarInformacoes']);
} ?>
  </body>

  </html>
