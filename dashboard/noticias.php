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
              <div class="card">
                <div class="card-header card-header-rose card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">assignment</i>
                  </div>
                  <h4 class="card-title">Noticias
                  <button type='button' onclick="location.href='criarNoticia'"rel='tooltip' class='btn btn-success' data-original-title='' title='' style='float: right;'>Adicionar Noticia
                            </button></h4>

                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th class="text-center">ID</th>
                          <th>Noticia</th>
                          <th>Descrição</th>
                          <th>Data</th>
                          <th class="text-right">Ações</th>
                        </tr>
                      </thead>
                      <tbody>
                <?php
                    	require "includes/BDi.php";
							$stmt = $DB->prepare("SELECT idNoticia,Noticia,descNoticia,data FROM noticias WHERE 1 ORDER BY data DESC");
							$stmt->execute(); 
							$stmt->bind_result($idNoticia,$noticia,$descNoticia,$data);
							while ($stmt->fetch())
								echo "
                        <tr>
                          <td class='text-center'>$idNoticia</td>
                          <td>$noticia</td>
                          <td>",substr($descNoticia,0,50),"...</td>
                          <td>$data</td>
                          <td class='td-actions text-right'>
                          <form action='editarNoticia' method='GET'>
                          <input name='idNoticia' id='idNoticia' type='hidden' value='$idNoticia'>
                            <button type='submit' rel='tooltip' class='btn btn-primary' data-original-title='' title=''>
                              <i class='material-icons'>edit</i>
                            </button>
                            <button type='submit' name='remove' id='remove' rel='tooltip' class='btn btn-danger' data-original-title='' title=''>
                              <i class='material-icons'>delete</i>
                            </button>
                            </form>     
                          </td>
                        </tr>
                    ";
							$stmt->free_result();
							?>
                      </tbody>
                    </table>
                  </div>
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
if(isset($_SESSION['addNoticia'])) {
  echo "<script>Swal.fire(
  'Noticia adicionada com sucesso!',
  '',
  'success'
) </script>"; 
  unset($_SESSION['addNoticia']);
} 
if(isset($_SESSION['editarNoticia'])) {
  echo "<script>Swal.fire(
  'Noticia editada com sucesso!',
  '',
  'success'
) </script>"; 
  unset($_SESSION['editarNoticia']);
}

if(isset($_SESSION['apagarNoticia'])) {
  echo "<script>Swal.fire(
  'Noticia apagada com sucesso!',
  '',
  'success'
) </script>"; 
  unset($_SESSION['apagarNoticia']);
}
?>
  </body>

  </html>