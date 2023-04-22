<?php
include('phpcodes/verificalogin.php');
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
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
                  <h4 class="card-title">Configurações</h4>
                </div>
              </div>
              <div class="card-body ">
                <?php
                require "includes/BDi.php";
							$stmt = $DB->prepare("SELECT email FROM utilizadores WHERE 1");
							$stmt->execute(); 
							$stmt->bind_result($email);
							while ($stmt->fetch())
								echo "
                  <form method='POST' action='phpcodes/editarConfiguracoes.php' class='form-horizontal'>
                  <div class='row'>
                      <label class='col-sm-2 col-form-label'>Email para envio das Candidaturas</label>
                      <div class='col-sm-10'>
                        <div class='form-group'>
                          <input type='text' name='email' id='email' value='$email' class='form-control' placeholder='Email'>
                        </div>
                      </div>
                    </div>
                  <div class='row'>
                      <label class='col-sm-2 col-form-label'>Password</label>
                      <div class='col-sm-10'>
                        <div class='form-group'>
                          <input type='password' name='password' autocomplete='current-password' class='form-control' required='' id='password'>
                            <i class='far fa-eye' id='togglePassword' style='float: right; cursor: pointer; margin-top: -25px;'></i>
                        </div>
                      </div>
                    </div>
                  <div class='card-body '>
                  <ul class='nav nav-pills nav-pills-warning' role='tablist'>
                    <li class='nav-item'>
                      <a class='nav-link active' data-toggle='tab' href='#link1' role='tablist'>
                        Informações Importantes
                      </a>
                    </li>
                  </ul>
                  <div class='tab-content tab-space'>
                    <div class='tab-pane active'>
                      <b style='font-size: large;'>Ativar as configurações de 'aplicações menos seguras' como Administrador de domínio de e-mail</b>
                      <br>
                      <br> <ol>
                          <li>
                              Abra a consola da Google para administradores (<a href='https://admin.google.com/' target='_blank'>admin.google.com</a>).
                          </li>
                          <li>
                              Clique <code>Segurança</code> &gt; <code>Configurações Básicas</code>.
                          </li>

                          <li>
                              Em <i>Acesso a apps menos seguras</i>, selecione <code>Ir para configurações de aplicações menos seguras</code>.
                          </li>

                          <li>
                              Na subjanela, selecione o botão <code>Ativar acesso a aplicações menos seguras</code><br>
                          </li>

                          <li>
                              E clique no botão <code>Gravar</code>.
                          </li>

                      </ol>
                      <br>
                      <b style='font-size: large;'>Ativar as configurações de 'aplicações menos seguras' como Utilizador de caixa de Entrada</b>
                      <br>
                      <br> <ol>

                            <li>
                                Vá na sua (<a href='https://myaccount.google.com/' target='_blank'>Conta do Google</a>).
                            </li>
                            <li>
                                No painel do lado direito, clique em <code>Segurança</code>.
                            </li>

                            <li>
                                Porcure por <i>Acesso a aplicações menos seguras</i>, e clique para <code>Ativar o acesso</code>.<br>
                            </li>
                            <li>
                                E clique no botão <code>Gravar</code>.
                            </li>
                        </ol>
                      <br>
                    </div>
                  </div>
                </div>
                    <button type='submit' name='submit' id='submit' class='btn btn-fill btn-rose'>Atualizar<div class='ripple-container'></div></button>
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

<?php 
    if(isset($_SESSION['editarConfiguracoes'])) {
  echo "<script>Swal.fire(
  'Configurações atualizadas com sucesso!',
  '',
  'success'
) </script>"; 
  unset($_SESSION['editarConfiguracoes']);
}
?>
  </body>
<script>
  const togglePassword = document.querySelector('#togglePassword');
  const password = document.querySelector('#password');
 
  togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
});
</script>
  </html>