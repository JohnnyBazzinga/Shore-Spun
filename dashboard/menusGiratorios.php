<?php
include('phpcodes/verificalogin.php');
?>


<?php include 'includes/header.php';?>
<style>
.card-container {
    -webkit-perspective: 500px;
            perspective: 500px;
}

.card-container:hover .card{
    -webkit-transform: rotateY( 180deg );
            transform: rotateY( 180deg );
}

.card {
    -webkit-transition: -webkit-transform 0.7s;
            transition: transform 0.7s;
    -webkit-transform-style: preserve-3d;
            transform-style: preserve-3d;
}

.front, .back {
    -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
}

.back {
    -webkit-transform: rotateY( 180deg );
            transform: rotateY( 180deg );
}

/*Custom Styles*/
.cards-container{
   display: -webkit-flex;
   display: -webkit-box;
   display: -ms-flexbox;
   display: flex;
   -webkit-flex-direction: row;
   -webkit-box-orient: horizontal;
   -webkit-box-direction: normal;
       -ms-flex-direction: row;
           flex-direction: row;
  -webkit-box-pack: center;
  -webkit-justify-content: center;
      -ms-flex-pack: center;
          justify-content: center;
}

.card {
  width: 200px;
	height: 250px;
  margin: 10px;
}

.front, .back {
  box-shadow: 0 1px 6px 0;
  position: absolute;
  width: 100%;
  top: 0;
  bottom: 0;
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
                  <h4 class="card-title">Menus</h4>
                </div>
              </div>
        <div class="row justify-content-center">
              <?php
                    	require "includes/BDi.php";
							$stmt = $DB->prepare("SELECT idMenuG,tituloMenu,descricaoMenu FROM menusgiratorios WHERE 1");
							$stmt->execute(); 
							$stmt->bind_result($id,$titulo,$desc);
							while ($stmt->fetch())
								echo "
                                <div class='cards-container'>
                                <!--   First Card -->
                                <div class='card-container'>
                                  <div class='card'>
                                    <div class='front'>
                                    <h3>$titulo</h3>
                                    </div>
                                    <div class='back'>
                                    <h3>$titulo</h3>
                                    <p>$desc</p>
                                    </div>
                                  </div>
                                  <form action='editarMenus' method='GET'>
                                  <input type='hidden' name='idMenu' id='idMenu' value='$id' class='form-control'>
                                  <button type='submit' name='submit' id='submit' class='btn btn-fill btn-rose' style='margin-left: 45px; margin-bottom: 30px;'>Atualizar<div class='ripple-container'></div></button>
                                  </form>
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
if(isset($_SESSION['editarInformacoes'])) {
  echo "<script>Swal.fire(
  'Menus atualizados com sucesso!',
  '',
  'success'
) </script>"; 
  unset($_SESSION['editarInformacoes']);
} ?>
</html>