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
    <title>Entrar na conta</title>
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

        .btn-register {
            color: white !important;
            background-color: #ea4335;
        }

       


    </style>

    <div class="container">
      <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
          <div class="card border-0 shadow rounded-3 my-5">
            <div class="card-body p-4 p-sm-5">
              <h5 class="card-title text-center mb-5 fw-light fs-5">Entrar</h5>
              <form action="/controller/loginController.php" method="post">
                <div class="form-floating mb-3">
                  <input type="email" class="form-control" name="email-input" placeholder="name@example.com">
                  <label for="floatingInput">Email </label>
                </div>
                <div class="form-floating mb-3">
                  
                  <input  type="password" class="form-control" id="senha-input" name="senha-input" placeholder="Password" >
                 
                  <label for="floatingPassword">Senha </label>
                  <button type="button"  class="input-group-text mt-2" onclick="PasswordVisibility()" href="#" >
                      <i class="bi bi-eye"></i>
                  </button>
                  
                </div>
  
               
                <div class="d-grid">
                  <button class="btn btn-primary btn-login text-uppercase fw-bold" name="login-btn" type="submit">Entrar</button>
                </div>
                
                <?php 
                  if(isset($_SESSION['fail-login'])){
                    ?>
                      <div class="alert alert-danger mt-3" role="alert">
                        <?= $msg_session->get("fail-login");
                            $msg_session->destroyData("fail-login"); ?>
                      </div>
                <?php      
                    }  
                ?>

                <hr class="my-4">
                <div class="d-grid mb-2">
                  <a href="register.php" class="btn btn-register btn-login text-uppercase fw-bold" type="submit">
                   Criar conta
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
        var senhaInput = document.querySelector('#senha-input')
        senhaInput.type = (senhaInput.type === 'password') ? 'text' : 'password';
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

  </body>



</html>