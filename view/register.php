<?php

require_once('../controller/sessionController/messagesSession.php');
$msg_session = new configSession();
$msg_session->sessionStart();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Criar conta</title>
</head>


<body>

    <style>

            body {
            background: #007bff;
            background: linear-gradient(to right, #0062E6, #33AEFF);
            }

            .card-img-left {
            width: 45%;
            /* Link to your background image using in the property below! */
            background: scroll center url('https://source.unsplash.com/WEQbe2jBg40/414x512');
            background-size: cover;
            }

            .btn-login {
            font-size: 0.9rem;
            letter-spacing: 0.05rem;
            padding: 0.75rem 1rem;
            }

            .btn-login-account {
          
            color: white !important;
            background-color: #ea4335;
            }

            




    </style>
    

    <div class="container">
      <div class="row">
        <div class="col-lg-10 col-xl-9 mx-auto">
          <div class="card flex-row my-5 border-0 shadow rounded-3 overflow-hidden">
            <div class="card-img-left d-none d-md-flex">
      
            </div>
            <div class="card-body p-4 p-sm-5">
              <h5 class="card-title text-center mb-5 fw-light fs-5">Registrar</h5>
              <form action="/controller/loginController.php" method="post">
  
                <div class="form-floating mb-3">
                  <input type="text" class="form-control"  id="input-email" placeholder="myusername" required autofocus name="input-email">
                  <label for="floatingInputUsername">Email</label>
                
                  <p></p>
  
                <div class="form-floating mb-2">
                  <input type="password" class="form-control" id="input-senha" placeholder="Password" required name="input-senha">
                  <label for="floatingPassword">Senha</label>
                  <button type="button"  class="input-group-text mt-3" onclick="PasswordVisibility()" href="#" >
                      <i class="bi bi-eye"></i>
                  </button>
                </div>
  
            
  
                <div class="d-grid mb-2">
                  <button class="btn btn-lg btn-primary btn-login fw-bold text-uppercase" id="register-btn" type="submit" name="register-btn" >Register</button>
                </div>

                <?php 
                  if(isset($_SESSION['fail-register'])){
                    ?>
                      <div class="alert alert-danger mt-3" role="alert">
                        <?= $msg_session->get("fail-register");
                            $msg_session->destroyData("fail-register"); ?>
                      </div>
                <?php      
                    }  
                ?>

                <hr class="my-4">
  
                <div class="d-grid mb-2">
                  <a href="login.php" class="btn btn-lg btn-google btn-login btn-login-account fw-bold text-uppercase" type="submit">
                    Já possui uma conta? Entrar
                  </a>
                </div>
  
                
  
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script>
        function PasswordVisibility() {
        var senhaInput = document.querySelector('#input-senha')
        senhaInput.type = (senhaInput.type === 'password') ? 'text' : 'password';
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


</body>



</html>