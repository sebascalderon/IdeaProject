<!DOCTYPE html>
<html lang="en">
<head>
  <!-- alertas-->


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
                            text: "Si Cancela No Se Guardaran Los Datos",
                            icon: "warning",
                            buttons: ["No Cancelar", "Si Cancelar"],
                            dangerMode: true,
                          })
                          .then((willDelete) => {
                            if (willDelete) {
                               
                              
                              
                                        location.href='?c=CategoriaProyecto'
                                      
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
                               
                                        location.href='?c=CategoriaProyecto'
                                      
                            } 
                          });
                        //imprimo el resultado en el div mensaje que procesa ajax
                      
                    }
                });
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
 
    <body class="app sidebar-mini rtl" oncopy="return false" oncut="return false" onpaste="return false">
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
        
       <div class="container-fluid"><br>
             <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="btn-group pull-right">
                                <ol class="breadcrumb hide-phone p-0 m-0">
                                    <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
                                    <li class="breadcrumb-item"><a href="index.php?c=CategoriaProyecto">Listar</a></li>
                                    <li class="breadcrumb-item"><a href="index.php?c=CategoriaProyecto&a=registrarCategoriaProyecto">Registrar</a></li>
                                    
                                    
                                </ol>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div> <br>
           </div>
      
             <div class="content-wrapper">
             <div class="container">
              <div class="card">
              
              <div class="card-body">
              <div class="container">
                 <form class="form-horizontal" method="POST" action="?c=CategoriaProyecto&a=Guardar">
                  <div class="form-group">
                                        
                    <input class="form-control" name="id" type="hidden" value="<?=$p->getidCategoriaProyecto()?>" >
                                         
                  </div>

                  <div class="col-md-12">
                    <label   for="Nombre" >Nombre de la categoría de proyecto</label>
                      <input  class="form-control" autocomplete="off" required type="text" required name="Nombre"  require onkeypress="return soloLetras(event)" placeholder="Digite el nombre de la categoría"  value="<?=$p->getNombreCategoriaProyecto()?>"/>
                  </div>
                  <form method="POST" id="1" class="guardar">
                                <br>
                              <button class="btn btn-primary boton" type="submit" name="aceptar" value="Aceptar" ><i class="fa fa-check-square"></i>Guardar</button> 
                            </form>
                               </form>
                             <form method="POST" id="2">
                              <br>
                                <button class="btn btn-secondary" type="submit" name="cancelar" value="cancelar" ><i class="fa fa-window-close"></i>Cancelar</button> 
                             </form>
                                  
                  

                      </div>
                  </div>
                </div>
              </div>
               </div>
        </main>
        
        <script type="text/javascript" src="assets/Validaciones/Categoria.js"></script>
        
  </body>

</html>