<!DOCTYPE html>
<html lang="en">
<head>


<!--
		<link rel="stylesheet" href="assets/pass/style.css">
		<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
		<script src="assets/pass/script.js"></script>
		
   alertas-->


    <script type="text/javascript" src="assets/alert/js/sweetalert2.js"></script>
    <script type="text/javascript" src="assets/alert/js/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="assets/alert/css/sweetalert2.css" type="text/css">
    <link rel="stylesheet" href="assets/alert/css/sweetalert2.min.css" type="text/css">
   
    <script src="assets/alert/js/jquery-2.1.4.min.js"></script>
 
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


       <script type="text/javascript">
        $(document).ready(function () {
            $('#2').submit(function (e) {
                e.preventDefault();
                //captura todos los valores que tiene el formulario es decir todos los input que esten en ese formulario...
                var datos=$(this).serialize();
                /*swal(
                 'Titulo del Mensaje',
                 'Mensaje',
                 'Tipo de mesaje'
                 );*/
                $.ajax({
                    type:"POST",
                   
                    data:datos,
                    success:function(data){
                      swal({
                            title: "Está Seguro De Cancelar ?",
                            text: "Si Cancela No Se Guardarán Los Datos",
                            icon: "warning",
                            buttons: ["No Cancelar", "Si Cancelar"],
                            dangerMode: true,
                          })
                          .then((willDelete) => {
                            if (willDelete) {
                               
                              
                              
                                        location.href='?c=Instructor'
                                      
                            } else {
                              swal("Los Datos No Se Eliminaron",
                               {
                                icon: "success",
                              });
                              
                             }
                          });
                        //imprimo el resultado en el div mensaje que procesa ajax
                      
                    }
                });
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#1').submit(function (e) {
                e.preventDefault();
                //captura todos los valores que tiene el formulario es decir todos los input que esten en ese formulario...
                var datos=$(this).serialize();
                /*swal(
                 'Titulo del Mensaje',
                 'Mensaje',
                 'Tipo de mesaje'
                 );*/
                $.ajax({
                    type:"POST",
                   
                    data:datos,
                    success:function(data){
                      swal({
                            title: "Está Seguro De Cancelar ?",
                            text: "Si Cancela No Se Guardaran Los Datos",
                            icon: "warning",
                            buttons: ["No Cancelar", "Si Cancelar"],
                            dangerMode: true,
                          })
                          .then((willDelete) => {
                            if (willDelete) {
                               
                                        location.href='?c=Instructor'
                                      
                            } 
                          });
                        //imprimo el resultado en el div mensaje que procesa ajax
                      
                    }
                });
            });
        });
    </script>
    
    <script>
      $(document).ready(function() {

$('#pass2').keyup(function() {

  var pass1 = $('#pass1').val();
  var pass2 = $('#pass2').val();

  if ( pass1 == pass2 ) {
    $('#error2').css("background", "url(assets/pass/check.png)");
  } else {
    $('#error2').css("background", "url(assets/pass/check-.png)");
  }

});

});
    </script>
<style>
.boton{
  position: absolute;
  right: 80px;
  margin: 20px;
}
</style>
  
  <!-- alertas-->


 
</head>


  

 
    <body class="app sidebar-mini rtl" oncut="return false" oncopy="return false" onpaste="return false">
    <script language="Javascript">
          document.oncontextmenu = function() {
              return false
          }
          function right(e) {
              var msg = "Prohibido usar Click Derecho !!! ";
            
              if (navigator.appName == 'Netscape' && e.which == 3) {
                alert(msg); //- Si no quieres asustar a tu usuario entonces quita esta linea...
                return false;
              }
              else if (navigator.appName == 'Microsoft Internet Explorer' && event.button==2) {
                alert(msg); //- Si no quieres asustar al usuario que utiliza IE,  entonces quita esta linea...
                                //- Aunque realmente se lo merezca...
              return false;
              }
          return true;
        }
        document.onmousedown = right;
        </script>
      <main class="app-content">
       <div class="app-title">
        

         
           
         
          <li ></a></li>
           </ul>
           </div>
      
            <div class="">
            <div class="container-fluid">
             <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="btn-group pull-right">
                                <ol class="breadcrumb hide-phone p-0 m-0">
                                    <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
                                    <li class="breadcrumb-item"><a href="index.php?c=Instructor">Listar</a></li>
                                    <li class="breadcrumb-item"><a href="index.php?c=instructor&a=registrarInstructor">Registrar</a></li>
                                    
                                </ol>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </div><br>


             <div class="content-wrapper">
             <div class="col-md-12">
              <div class="card">
              
              <div class="card-body">
              <div class="col-md-12">
                 <form class="form-horizontal" method="POST" action="?c=instructor&a=Guardar">                   
                    <input class="form-control" name="id" type="hidden" value="<?=$p->getidInstructor()?>" >
                  <div class="row">
              <div class="col-sm-12">
                <label for="Rol">Rol</label>
                    
                       <select class="form-control"   name="Rol" required  />
                      <option value="">Seleccione un Rol</option>
                      <option value="Instructor" <?=$u->getRol()=="Instructor" ? "selected": ""?> >Instructor</option>
                      <option value="Administrador"  <?=$u->getRol()=="Administrador" ? "selected": ""?>>Administrador</option>
                           
                    </select>    
              </div>
                    <!-- <div class="form-group">
                       <label for="Contrasena">Contrasena</label>
                    
                      <input class="form-control" require type="text"  name="Contrasena" placeholder="Digite Contrasena" value="<?=$u->getContrasena()?>" required/>
                    
                    </div> -->
                    
                    <!-- Password Verification 
                  <label for="pass1">Contraseña:</label>
                    <input type="password" id="pass1" value="">
                    <div id="error1"></div>
                  <label for="pass2">Repetir contraseña:</label>
                    <input type="password" id="pass2" value="">-->
                  <!-- Error Text -->
                  
                  
                  <div id="error2"></div>
                    <?php// if(!isset($_GET['id'])):?>
                  <?php// endif;?>

                  <div class="col-sm-6">
                    <label   for="Nombres" >Nombre(s)</label>
                      <input  class="form-control" required type="text" autocomplete="off" required name="Nombres"  require onkeypress="return soloLetras(event)" placeholder="Digite el(los) Nombre(s)"  value="<?=$p->getNombresInstructor()?>"/>
                  </div>
                  <div class="col-sm-6">
                    <label  for="Apellidos">Apellido(s)</label>                   
                      <input class="form-control" require  type="text" autocomplete="off" required name="Apellidos"  require onkeypress="return soloLetras(event)"  placeholder="Digite el(los) apellido(s)" value="<?=$p->getApellidosInstructor()?>"/>                    
                  </div>

                  <div class="col-sm-6" >

                    <label  for="TipoDocumento" >Tipo de documento</label>
                      <select class="form-control"   name="TipoDocumento" required  />
                      <option value="">Seleccione el tipo de documento</option>
                      <option value="Cédula de ciudadanía" <?=$p->getTipoDocumentoInstructor()=="Cédula de ciudadanía" ? "selected": ""?> >Cédula de ciudadanía</option>
                      <option value="Tarjeta de identidad"  <?=$p->getTipoDocumentoInstructor()=="Tarjeta de identidad" ? "selected": ""?>>Tarjeta de identidad</option>
                      <option value="Cédula de extranjería" <?=$p->getTipoDocumentoInstructor()=="Cédula de extranjería" ? "selected": ""?>>Cédula de extranjería</option>
                      <option value="Nit para personas jurídicas" <?=$p->getTipoDocumentoInstructor()=="Nit para personas jurídicas" ? "selected": ""?>>Nit para personas jurídicas</option>
                      <option value="Pasaporte" <?=$p->getTipoDocumentoInstructor()=="Pasaporte" ? "selected": ""?>>Pasaporte</option>
                      <option value="Registro civil" <?=$p->getTipoDocumentoInstructor()=="Registro civil" ? "selected": ""?>>Registro civil</option>          
                     </select>
                     </div>
                  
                    
    
                    <div class="col-sm-6">
                    <label   for="NumeroDocumento">Número de documento</label>
                    
                      <input  class="form-control" require autocomplete="off" type="number" name="NumeroDocumento"  require onkeypress="return soloNumeros(event)" placeholder="Digite el número de documento" value="<?=$p->getNumeroDocumentoInstructor()?>" required/>
                    
                    </div>
                 <br>
                    <div class="col-sm-6">
                    <label for="CorreoElectronico">Correo electrónico </label>
                    
                      <input class="form-control" require autocomplete="off" type="email"  name="CorreoElectronico" id="CorreoElectronico" require onkeypress="return  ValidarCorreo()" placeholder=" Ejem :  ejemplo@gmail.com" value="<?=$p->getCorreoElectronicoInstructor()?>" required/>
                    
                  </div>
                  <div class="col-sm-6">
                    <label for="ConfirmCorreoElectronico">Repita el correo electrónico</label>
                    
                      <input class="form-control" require  autocomplete="off" type="email"  name="ConfirmCorreoElectronico" id="ConfirmCorreoElectronico" require onkeypress="return  ValidarCorreo()" placeholder=" Ejem :  ejemplo@gmail.com" value="<?=$p->getCorreoElectronicoInstructor()?>" required/>
                    
                  </div>
                  <label id="Res"></label>
                  
                  <div class="col-sm-6">
              
                  <label for="CorreoInstitucional">Correo institucional</label>
                      <input class="form-control" requires autocomplete="off" name="CorreoInstitucional" id="CorreoInstitucional" type="text" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[misena,MISENA]+([sena,SENA])*[.][edu,EDU]*[.][co,CO]{1,5}" placeholder=" Ejem :  ejemplo@misena.edu.co" data-toggle="tooltip"  title="Solo admite correo institucional como ( @misena.edu.co y @sena.edu.co )" value="<?=$p->getCorreoInstitucionalInstructor()?>"  required/>
                      </div>
                  <div class="col-sm-6">
              
                  <label for="ConfirmCorreoInstitucional">Repita El Correo Institucional</label>
                      <input class="form-control" requires autocomplete="off" name="ConfirmCorreoInstitucional" id="ConfirmCorreoInstitucional" type="text" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[misena,MISENA]+([sena,SENA])*[.][edu,EDU]*[.][co,CO]{1,5}" placeholder=" Ejem :  ejemplo@misena.edu.co" data-toggle="tooltip"  title="Solo admite correo institucional como ( @misena.edu.co y @sena.edu.co )" value="<?=$p->getCorreoInstitucionalInstructor()?>"  required/>
                      </div>
                  <label id="CorreoInsti"></label>
                    

                
                    
                       <input class="form-control" name="fk_idUsuario" type="hidden" value="<?=$p->getfk_idUsuario()?>" >
                </div>
                <form method="POST" id="1" class="guardar">
                                <br>
                              <button class="btn btn-primary boton" type="submit" name="aceptar" value="Aceptar"  ><i class="fa fa-check-square"> </i>Guardar</button> 
                            </form>
                               </form>
                             <form method="POST" id="2">
                              <br>
                                <button class="btn btn-secondary" type="submit" name="cancelar" value="cancelar" ><i class="fa fa-window-close"></i>Cancelar</button> 
                             </form>
              </div>
            </div>
          </div>
        </main>
        <script type="text/javascript" src="assets/Validaciones/Instructor.js"></script>
        
  </body>

</html>
