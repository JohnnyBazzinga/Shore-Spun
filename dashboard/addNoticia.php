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
                  <h4 class="card-title">Adicionar Noticia</h4>
                </div>
              </div>
              <div class="card-body ">
                  <form method='POST' action='phpcodes/addNoticia.php' class='form-horizontal' enctype="multipart/form-data">
                    <h4 class="title">Versão Português</h4>
                  <div class='row'>
                      <label class='col-sm-2 col-form-label'>Noticia</label>
                      <div class='col-sm-10'>
                        <div class='form-group'>
                          <input type='text' name='noticia' id='noticia' class='form-control' placeholder='Noticia'>
                        </div>
                      </div>
                    </div>
                  <div class='row'>
                      <label class='col-sm-2 col-form-label'>Descrição</label>
                      <div class='col-sm-10'>
                        <div class='form-group'>
                          <textarea id='desc' name='desc' class='form-control' aria-label='With textarea' rows='7!important' required style='resize:none;'></textarea>
                        </div>
                      </div>
                    </div>
                    <h4 class="title">Versão Inglês</h4>
                  <div class='row'>
                      <label class='col-sm-2 col-form-label'>New</label>
                      <div class='col-sm-10'>
                        <div class='form-group'>
                          <input type='text' name='noticiaEn' id='noticiaEn' class='form-control' placeholder='New'>
                        </div>
                      </div>
                    </div>
                  <div class='row'>
                      <label class='col-sm-2 col-form-label'>Description</label>
                      <div class='col-sm-10'>
                        <div class='form-group'>
                          <textarea id='descEn' name='descEn' class='form-control' aria-label='With textarea' rows='7!important' required style='resize:none;'></textarea>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                      <h4 class="title">Imagem</h4>
                    <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                        <div class="fileinput-new thumbnail">
                          <img src="assets/img/image_placeholder.jpg" alt="...">
                        </div>
                        <div class="fileinput-preview fileinput-exists thumbnail"></div>
                        <div>
                          <span class="btn btn-rose btn-round btn-file">
                            <span class="fileinput-new">Selecione uma imagem</span>
                            <span class="fileinput-exists">Mudar</span>
                            <input type="file" name="teste">
                          </span>
                          <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remover</a>
                        </div>
                      </div>
                    <button type='submit' name='submit' id='submit' class='btn btn-fill btn-rose'>Adicionar Noticia<div class='ripple-container'></div></button>
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
  </body>

  </html>