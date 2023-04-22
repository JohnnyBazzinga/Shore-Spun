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
                  <h4 class="card-title">Candidaturas</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th class="text-center">ID</th>
                          <th>Nome</th>
                          <th>Email</th>
                          <th>Contacto</th>
                          <th>Informação Adicional</th>
                          <th>Data</th>
                          <th class="text-right">Ações</th>
                        </tr>
                      </thead>
                      <tbody>
                <?php
                    	require "includes/BDi.php";
							$stmt = $DB->prepare("SELECT idCandidatura,emprego,nome,email,contacto,data FROM candidaturas WHERE 1 ORDER BY data DESC");
							$stmt->execute(); 
							$stmt->bind_result($idCandidatura,$emprego,$nome,$email,$contacto,$data);
							while ($stmt->fetch())
								echo "
                        <tr>
                          <td class='text-center'>$idCandidatura</td>
                          <td>$emprego</td>
                          <td>",substr($nome,0,30),"...</td>
                          <td>",substr($email,0,30),"...</td>
                          <td>",substr($contacto,0,30),"...</td>
                          <td>$data</td>
                          <td class='td-actions text-right'>
                          <form action='verCandidatura' method='GET'>
                          <input type='hidden' name='idCandido' id='idCandido' value='$idCandidatura' class='form-control'>
                            <button type='submit' rel='tooltip' class='btn btn-info' data-original-title='' title=''>
                              <i class='material-icons'>visibility</i>
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