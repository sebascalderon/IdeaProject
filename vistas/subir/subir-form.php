<!DOCTYPE html>
<html lang="en">


  <head>
  <!-- alertas-->


   <link rel="stylesheet" type="text/css" href="assets/file/css/component.css" />

    <script src="assets/alert/js/jquery-2.1.4.min.js"></script>
 
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
                               
                              
                              
                                        location.href='?c=Aprendiz'
                                      
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
                               
                                        location.href='?c=Aprendiz'
                                      
                            } 
                          });
                        //imprimo el resultado en el div mensaje que procesa ajax
                      
                    }
                });
            });
        });
    </script>
    


  
  <!-- alertas-->


 
</head>
 
    <body class="app sidebar-mini rtl"  oncopy="return false" oncut="return false" onpaste="return false"   >
   
      <main class="app-content">
       <div class="app-title"><br>
        
         <div class="container-fluid"><br>
             <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="btn-group pull-right">
                                <ol class="breadcrumb hide-phone p-0 m-0">
                                    <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
                                    <li class="breadcrumb-item"><a href="index.php?c=Aprendiz">Listar</a></li>
                                    <li class="breadcrumb-item"><a href="index.php?c=aprendiz&a=registrarAprendiz">Registrar</a></li>
                                     <li class="breadcrumb-item"><a href="index.php?c=subir&a=registrarSubir">Subir</a></li>
                                    
                                </ol>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
           </div>
      
           
              
            <br>
              <div class="card">
              
              <div class="card-body">
                 <div class="container">
                <form class="form-horizontal" method="POST" action="?c=subir&a=CargaMasiva" enctype="multipart/form-data">
                <input class="form-control" name="id" type="hidden" value="<?=$p->getidAprendiz()?>" >
                      <label  for="DocumentoCSV">Archivo para carga masiva</label>   
                     <div class="row">
                      <div class="col-md-12">
                      
                      <input type="file" name="DocumentoCSV" accept=".csv" id="DocumentoCSV" class="inputfile inputfile-4" data-multiple-caption="{count} files selected" style="display: none; opacity: 0;" name="DocumentoCSV" required="" onkeypress="return Validar(event)" />
                        <label for="DocumentoCSV" style=" font-size:100%; float: left;"  data-toggle="tooltip"  title="Seleccione el archivo para carga masiva ( Solo acepta archivos .csv )"><span></span> <strong style=" font-size:100%; color: #fff;"> Seleccionar</strong></label>
                       
                      </div>

                       <div class="col-md-12">
                    
                       <a class="colorc btn btn-info btn-flat" rel="shadowbox;width=405;height=340;" style=" font-size:100%;float:left;"data-toggle="tooltip"  title="Formato para carga masiva ( Descargue el archivo para guardar los datos de los aprendices desde el Excel )" href="Almacenamiento/CsvCargaMasiva/FormatoCargaMasivaAprendices.csv">Formato carga masiva</a>   
                      </div>

                      </form> 
                  
                      <input class="form-control" name="fk_idUsuario" type="hidden" value="<?=$p->getfk_idUsuario()?>" >
                      
                              
                               <form method="POST" id="2">
                              <div class="col-md-6">
                                <br>
                                   <br>
                                <button class="btn btn-secondary" type="submit" name="cancelar" value="cancelar" ><i class="fa fa-window-close"></i>Cancelar</button> 
                                        </div>
                             </form>  
                               <form method="POST" id="1">
                               <div class="col-md-6">
                                   <br>
                                <br>
                              <button class="btn btn-primary boton" type="submit" name="aceptar" value="Aceptar" ><i class="fa fa-check-square"></i>Guardar</button> 
                                  </div>
                            </form> 
                          
                        
         
             </div>
                      
                 

              <?php   
       switch($_SESSION['PageStateLoad']){
        case "Mal":?>
        <br>
          <div id="mensaje" class="alert alert-danger alert-dismissible">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>ERROR:</strong> Información inválida. Por favor comprobar datos en el Excel.
          </div>
        <?php
        break;
         case "Bien":?>
        <br>
         <div id="mensaje"  class="alert alert-success alert-dismissible">
         <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
           <strong>HECHO:</strong> Se ha efectuado el cargue de los estudiantes.
         </div>
       <?php
       break;
       default:
       
       }
       ?>
            </div>
            </div>
          </div>
        </main>
        <script type="text/javascript" src="assets/Validaciones/Subir.js"></script>
        <script src="assets/file/js/custom-file-input.js"></script>

       
     
  </body>

</html>
