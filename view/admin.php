<?php
    session_start();
    require_once("../controller/loginController.php");
    $session_test = new authenticationController();
    $session_test->controllUserSession(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Admin Page</title>
</head>
<body>

    <style>

        body {
        background: url('https://source.unsplash.com/twukN12EN7c/1920x1080') no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        background-size: cover;
        -o-background-size: cover;
        }

    </style>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light static-top mb-5 shadow">
        <div class="container">
          <a class="navbar-brand" href="#">Administrador</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto">
             
              <li class="nav-item">
                <a class="nav-link" href="#">Services</a>
              </li>
             
            </ul>
          </div>
        </div>
      </nav>
      
      <!-- Page Content -->
      <div class="container">
        <div class="card border-0 shadow my-5">
          <div class="card-body p-5">
            <h1 class="fw-light">Pagina administrativa</h1>
            <p class="lead">Acesso total ao sistema</p>
            
            <div style="height: 700px"></div>
            <p class="lead mb-0">You've reached the end!</p>
          </div>
        </div>
      </div>


</body>
</html>