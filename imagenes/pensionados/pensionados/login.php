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


    <link rel="stylesheet" href="./scss/_progress.scss">
    <link rel="stylesheet" href="./scss/_popover.scss">
    <link rel="stylesheet" href="./scss/_grid.scss">
    <link rel="stylesheet" href="./scss/_forms.scss">
    <link rel="stylesheet" href="./scss/utilities/_align.scss">
    <link rel="stylesheet" href="./scss/utilities/_borders.scss">
    <link rel="stylesheet" href="./scss/mixins/_reset-text.scss">
    <link rel="stylesheet" href="./scss/mixins/_gradients.scss">
    <link rel="stylesheet" href="./scss/mixins/_display.scss">
    <link rel="stylesheet" href="./scss/mixins/_tavbe-rows.scss">

    <script src="./js/jquery-3-3-1.js" charset="utf-8"></script>	




  </head>
  <body style="background-image: url(/pensionados/imagenes/marca_de_agua.PNG);">

  <nav class="navbar navbar-expand-lg navbar-light" style="background:#1bb600;">
    <a class="navbar-brand" href="#"> <img src="./imagenes/cap.jpg" class="media-object" style="width:60px"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#"><span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"></a>
          </li>
          <!-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#"></a>
              <a class="dropdown-item" href="#"></a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#"></a>
            </div>
          </li> -->
          <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"></a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <!-- <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"> -->
          <a><img src="./imagenes/cdmx.png" class="media-object" style="width:160px"></a>
        </form>
      </div>
</nav>







<div class="card bg-light mb-3" style="max-width: 28rem;" align="center">
  <div class="card-header">iniciar sesi&oacute;n</div>
  <div class="card-body">


   <div class="container"> 
       <div class="col">
           <div class="col-md-5 col-md-offset-3">
                <form method="post">
                    <h1><p class="text-center">Login</p></h1>
                        <div class="form-group">
                            <label for="user" > usuario</label>
                            <input type="text"  id="user" name="user" class="form-control">                            
                            
                        </div>
                        <div class="form-group">
                            <label for="segusoc">No. de Seguridad Social</label>
                            <input type="password"  id="segusoc" name="segusoc" class="form-control">                            
                           
                        </div>
                        <div class="form-group">
                        <input type="button"  name="login" id="login" value="Login" class="btn btn-success btn-block">
                        </div>
                       

                        <span id="result"></span>
                </form>
           </div>

        </div>

   </div>

  </div>
</div>




<p ><small>Dudas o sugerencias:</small><a href="#"><img src="./imagenes/correo.png" heigth="30px" width="30px"></a>
</p>

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
                         if (data == "1")
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


