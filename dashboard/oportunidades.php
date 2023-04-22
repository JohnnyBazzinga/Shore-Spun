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
                  <h4 class="card-title">Oportunidades
                    <button type='button' onclick="location.href='criarOportunidade'"rel='tooltip' class='btn btn-success' data-original-title='' title='' style='float: right;'>Adicionar Oportunidade
                            </button></h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th class="text-center">ID</th>
                          <th>Oportunidade</th>
                          <th>Descrição</th>
                          <th>Requisitos</th>
                          <th>Informação Adicional</th>
                          <th>Data</th>
                          <th class="text-right">Ações</th>
                        </tr>
                      </thead>
                      <tbody>
                <?php
                    	require "includes/BDi.php";
							$stmt = $DB->prepare("SELECT id,emprego,descritivo,requisitos,informacaoAdicional,data FROM oportunidades WHERE 1 ORDER BY data DESC");
							$stmt->execute(); 
							$stmt->bind_result($id,$emprego,$descritivo,$requisitos,$informacaoAdicional,$data);
							while ($stmt->fetch())
								echo "
                        <tr>
                          <td class='text-center'>$id</td>
                          <td>",substr($emprego,0,30),"...</td>
                          <td>",substr($descritivo,0,30),"...</td>
                          <td>",substr($requisitos,0,30),"...</td>
                          <td>",substr($informacaoAdicional,0,30),"...</td>
                          <td>$data</td>
                          <td class='td-actions text-right'>
                          <form action='editarOportunidade' method='GET'>
                          <input name='idEmprego' id='idEmprego' type='hidden' value='$id'>
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
if(isset($_SESSION['adicionarOportunidade'])) {
  echo "<script>Swal.fire(
  'Oportunidade adicionada com sucesso!',
  '',
  'success'
) </script>"; 
  unset($_SESSION['adicionarOportunidade']);
}

if(isset($_SESSION['apagarOportunidade'])) {
  echo "<script>Swal.fire(
  'Oportunidade eliminada com sucesso!',
  '',
  'success'
) </script>"; 
  unset($_SESSION['apagarOportunidade']);
}


if(isset($_SESSION['editarOportunidade'])) {
  echo "<script>Swal.fire(
  'Oportunidade editada com sucesso!',
  '',
  'success'
) </script>"; 
  unset($_SESSION['editarOportunidade']);
} ?>
  </body>

  </html>