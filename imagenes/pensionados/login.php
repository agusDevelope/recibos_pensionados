<?php
session_start();
if (isset($_SESSION['user']) && isset($_SESSION['segusoc']))
{
     header("location:index.php");
//jquery-1.12.3.min.js
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/bootstrap-grid.css">
    <link rel="stylesheet" href="./css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="./css/bootstrap-reboot.css">
    <link rel="stylesheet" href="./css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/login.css">
  
   




  </head>
  <body>
<!-- Inicia Nav -->
  <nav class="navbar navbar-expand-lg navbar-light" style="background:#1BB600;">
    <a class="navbar-brand"> <img src="./imagenes/cap.png" class="img-fluid logo1" ></a>
    <a class="navbar-brand"><img src="./imagenes/Logo_Dependencia.png" class="img-fluid logo2"></a>
      <button class="navbar-toggler d-none" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon d-none"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#"><span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"></a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"></a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <!-- <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"> -->
          <a><img src="./imagenes/Logo_CDMX.png" class="media-object img-fluid logo3 d-block"></a>
        </form>
      </div>
</nav>
<!-- Termina Nav -->

<div class="container" >
  <div class="row">
    <div class="col-12">
      <h1 class="text-center">Recibos de Nómina</h1>
    </div>
  </div>
</div>

<div class="container ">
  <div class="row">
    <div class="offset-md-3 col-md-6 offset-md-3">
      <div class="card">
          <div class="card-body">
            <form method="post">
              <h1><p class="text-center"><img src="./imagenes/useric.png" alt="user" id="icon-logo"></p></h1>
                <div class="form-group">
                    <label for="user" > No. Pensionado</label>
                    <input type="text"  id="user" name="user" class="form-control" placeholder="Ej. 28800">                            
                    
                </div>
                <div class="form-group">
                    <label for="segusoc">No. de Seguridad Social</label>
                    <input type="password"  id="segusoc" name="segusoc" class="form-control" placeholder="Ej. 80941970156">                            
                  
                </div>
                <div class="form-group">
                <input type="button"  name="login" id="login" value="Iniciar Sesión" class="btn btn-success btn-block">
                </div>
                <span id="result"></span>
            </form>
            <p class="text-center">Dudas o sugerencias:<a href="mailto:buzon.caprepol@cdmx.gob.mx"><img src="./imagenes/envelope.png" ></a></p>
          </div>
        </div>
      </div>
    </div> 
  </div>
<footer>
  <p>Dirección: Colonia Guerrero, Alcaldía Cuauhtémoc C.P. 06300, Ciudad de México</p>
  <p> Teléfono: 51410807 al 14 </p>
  <p>© 2019 All rights reserved 2019.</p>
</footer>
    



      <script src="./js/jquery-3-3-1.js" charset="utf-8"></script>
      <script src="./js/bootstrap.min.js"></script>	
      
  </body>
</html>

<script>

$(document).ready(function(){
    $('#login').click(function(){           
        var user = $('#user').val();
        var segusoc = $('#segusoc').val();
        if ($.trim(user).length > 0 && $.trim(segusoc).length > 0){
            $.ajax({
                url:"logueame.php",
                method:"post",
                data:{user:user,segusoc:segusoc},
                cache:"false",
                beforeSend:function(){$('#login').val("Conectando.....");},
                success:function(data)
                        {
                         $('#login').val("Login");
                         if (data == 1)
                            { 
                             //   alert(data);
                             //$(location).attr.('href','xx.php');
                             window.location.href = 'index.php';
                            }else{
                                alert(data);
                              $('#result').html("<div class='alert alert-dismissible alert-danger'><button type='button' class='close' data-dismiss='alert'>&times;</button><strong>Error</strong> Las credenciales son incorrectas.</div>");
                            }
                         } // sucess 
            }); // ajax

        } // .trim
    });// click(function ;
   
}); //ready(function
</script>


