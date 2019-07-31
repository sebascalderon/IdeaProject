<!DOCTYPE html>
<html >

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap Modal Login Form Template</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="../../modal/assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../../modal/assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../modal/assets/css/form-elements.css">
        <link rel="stylesheet" href="../../modal/assets/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
     
    </head>

    <body>

        <!-- Content -->
        <div >
          
          
                            <div >
                              <a class="btn btn-link-1 launch-modal" href="#" data-modal-id="modal-login">Modal Login</a>
                            </div>
                        </div>
        </div>
        
        <!-- MODAL -->
         <div class="modal fade" id="modal-login" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                  <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                </button>
                <h3 class="modal-title" id="modal-login-label">Inicie sesión en nuestro sitio</h3>
                <p>Ingrese su nombre de usuario y contraseña para iniciar sesión:</p>
              </div>
              
              <div class="modal-body">
                <form class="login-form" action="?c=Usuario&a=Iniciar"    method="POST">
                        <div class="form-group">
                            <label class="sr-only" for="form-username">Usuario</label>
                            <input  class="form-username form-control" id="form-username"  name="Usuario" type="text" placeholder="Usuario" autofocus autocomplete = "section-blue shipping street-address">
                        </div>
                        <div class="form-group">
	                        <label class="sr-only" for="form-password">Contraseña</label>
                            <input  class="form-password form-control" id="form-password" name="Contrasena" type="password" placeholder="Contraseña"  minLength="" required
                             placeholder="8 characters minimum">
                         </div>

                         <button type="submit" value='Iniciar Sesion' class="btn">Iniciar Sesion</button>
                </form>
                      
              </div>
              
            </div>
          </div>
        </div>
        <?php   
                 
                 if(isset($_GET["Aceptar"]) &&  $_GET["Aceptar"]=="error"){?>
                 
                 <br>
                   <div class="alert alert-danger alert-dismissible">
                     <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                       <strong>ERROR:</strong> Usuario o Contraseña Equivocado
                   </div>
                 <?php
                 }
                 ?> 

        <!-- Javascript -->
        <script src="../../modal/assets/js/jquery-1.11.1.min.js"></script>
        <script src="../../modal/assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="../../modal/assets/js/jquery.backstretch.min.js"></script>
        <script src="../../modal/assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

   

    </body>

</html>
