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
                  <h4 class="card-title">Editar Menu Giratório</h4>
                </div>
              </div>
              <div class="card-body ">
               <?php
                    	require "includes/BDi.php";
							$stmt = $DB->prepare("SELECT idMenuG,tituloMenu,descricaoMenu,tituloMenuEn,descricaoMenuEn FROM menusgiratorios WHERE idMenuG=?");
                $stmt->bind_param("s", $_GET['idMenu']);
							$stmt->execute(); 
							$stmt->bind_result($idMenu,$titulo,$desc,$tituloEn,$descEn);
							while ($stmt->fetch())
								echo "
                  <form method='GET' action='editar/menus' class='form-horizontal'>
                  <input type='hidden' name='idMenu' id='idMenu' value='$idMenu'>
                  <h4 class='title'>Versão Português</h4>
                  <div class='row'>
                      <label class='col-sm-2 col-form-label'>Título</label>
                      <div class='col-sm-10'>
                        <div class='form-group'>
                          <input type='text' name='titulo' id='titulo' value='$titulo' class='form-control' placeholder='Emprego'>
                        </div>
                      </div>
                    </div>
                  <div class='row'>
                      <label class='col-sm-2 col-form-label'>Descrição</label>
                      <div class='col-sm-10'>
                        <div class='form-group'>
                         <textarea id='desc' name='desc' class='form-control' aria-label='With textarea' rows='7!important' required style='resize:none;'>$desc</textarea>
                        </div>
                      </div>
                    </div>
                  <h4 class='title'>Versão Inglês</h4>
                  <div class='row'>
                      <label class='col-sm-2 col-form-label'>Title</label>
                      <div class='col-sm-10'>
                        <div class='form-group'>
                          <input type='text' name='tituloEn' id='tituloEn' value='$tituloEn' class='form-control' placeholder='Emprego'>
                        </div>
                      </div>
                    </div>
                  <div class='row'>
                      <label class='col-sm-2 col-form-label'>Description</label>
                      <div class='col-sm-10'>
                        <div class='form-group'>
                         <textarea id='descEn' name='descEn' class='form-control' aria-label='With textarea' rows='7!important' required style='resize:none;'>$descEn</textarea>
                        </div>
                      </div>
                    </div>
                    <button type='submit' name='submit' id='submit' class='btn btn-fill btn-rose'>Editar Menu<div class='ripple-container'></div></button>
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