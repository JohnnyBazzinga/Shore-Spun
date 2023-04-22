<?php
include('phpcodes/verificalogin.php');
?>


<?php include 'includes/header.php';?>
<style>
.card {
  width: 200px;
	height: 250px;
  margin: 10px;
}


</style>
  <div class="wrapper ">
    <?php include 'includes/sidebar.php';?>
    <div class="main-panel">
      <?php include 'includes/topbar.php';?>
      <!-- End Navbar -->
      <div class="content">
      <div class="container-fluid">
      <div class="card-header card-header-rose card-header-text" style=''>
                <div class="card-text">
                  <h4 class="card-title">Menus | Serviços</h4>
                </div>
              </div>
        <div class="row justify-content-center">
              <?php
                    	require "includes/BDi.php";
							$stmt = $DB->prepare("SELECT idServico,nomeServico,detalhesServico FROM servicos WHERE 1");
							$stmt->execute(); 
							$stmt->bind_result($id,$titulo,$desc);
							while ($stmt->fetch())
								echo "<div class='col-lg-4 col-md-6 col-sm-12 col-xs-6'>
                                <div class='cards-container'>
                                <div class='card-container'>
                                  <div class='card'>
                                    <div class='front'>
                                    <h3>$titulo</h3>
                                    <p>$desc</p>
                                    </div>
                                  </div>
                                  <form action='editarServicos' method='GET'>
                                  <input type='hidden' name='idServico' id='idServico' value='$id' class='form-control'>
                                  <button type='submit' name='submit' id='submit' class='btn btn-fill btn-rose' style='margin-left: 45px; margin-bottom: 30px;'>Atualizar<div class='ripple-container'></div></button>
                                  </form>
                                </div>
                                </div>
                                </div>
                                
                                        ";
							$stmt->free_result();
							?>
            </div>
        </div>
      </div>
                            
      
    <!-- Footer -->
      <?php include 'includes/footer.php';?>
    </div>
  </div>
</body>
<?php include 'includes/scripts.php';?>
<?php
if(isset($_SESSION['editarServico'])) {
  echo "<script>Swal.fire(
  'Serviços atualizados com sucesso!',
  '',
  'success'
) </script>"; 
  unset($_SESSION['editarServico']);
} ?>
</html>