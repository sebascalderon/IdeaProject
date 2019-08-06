

<!---->
<main class="app-content">
      <head>
    <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <!-- Twitter meta-->
    
    <!-- Main CSS-->
   
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <!-- Jquery UI -->

        
  </head>    <br>
              
  <div class=""><br><br>
            <div class="container-fluid">
             <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="btn-group pull-right">
                                <ol class="breadcrumb hide-phone p-0 m-0">
                                    <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
                                    <li class="breadcrumb-item"><a href="index.php?c=FichaCaracterizacion">Listar</a></li>
                                    <li class="breadcrumb-item"><a href="?c=FichaCaracterizacion&a=registrarFichaCaracterizacion">Registrar</a></li>
                                    
                                </ol>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </div>
 
        <br>
              
              <div class="topbar-main">
                <div class="container-fluid">
              <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box">
                          
                            <label class="form-inline mb-3">
                                Mostrar
                                <select id="demo-show-entries" class="form-control form-control-sm ml-1 mr-1">
                                    <option value="5">5</option>
                                    <option value="10">10</option>
                                    <option value="15">15</option>
                                    <option value="20">20</option>
                                </select>
                                entradas
                            </label>
                            
                            
                             <table id="demo-foo-pagination" class="table table-striped table-bordered toggle-circle m-b-0" data-page-size="7">
                                <thead>
                                <tr>
                                    <th data-toggle="true">Estado</th>
                                    <th>Ficha</th>
                                    <th>Programa de formación</th>
                                    <th>Fecha de inicio </th>
                                    <th  data-hide="all">Fecha de finalizacion </th>
                                    <th data-hide="all">Instructor</th>
                                     <th data-hide="all">Opciones</th>

                                </tr>
                                </thead>
                                 <?php foreach($this->modelo->Listar() as $r):?>

                                    <script language="Javascript">
   document.oncontextmenu = function() {
      return false
   }
   function right(e) {
     
     
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
                  <tr>
                    <!-- <td><?=$r->idFichaCaracterizacion?></td> -->
                    <td><?=$r->Estados?></td>
                    <td><?=$r->NumeroFichaCaracterizacion?></td>
                    <td><?=$r->NombreProgramaFormacion?></td>                   
                    <td><?=$r->FechaInicioFichaCaracterizacion?></td>
                    <td><?=$r->FechaFinFichaCaracterizacion?></td>              
                    <td><?=$r->NombresInstructor.'  '.$r->ApellidosInstructor  ?></td><!--.'  '. sirve para concatenar-->


                 

                  
                 <td><a class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Activar (Solo se podrá activar si hay aprendices registrados en la ficha)" href="?c=FichaCaracterizacion&a=Estados&estado=1&id=<?=$r->idFichaCaracterizacion?>"><i class="  fa fa-check" aria-hidden="true"></i></a>
                <a class="colorb btn btn-primary" data-toggle="tooltip" data-placement="top" title="Modificar"href="?c=FichaCaracterizacion&a=registrarFichaCaracterizacion&id=<?=$r->idFichaCaracterizacion?>"><i class="fa fa-gears" aria-hidden="true"></i></a>
                <?php if($_SESSION['Rol']=="Administrador"):?><!-- Administrador-->
                 <a class="colorR btn btn-primary" data-toggle="tooltip" data-placement="top" title="Bloquear (Solo se podrá bloquear si hay aprendices registrados en la ficha)" href="?c=FichaCaracterizacion&a=Estados&estado=2&id=<?=$r->idFichaCaracterizacion?>"><i class="fa fa-ban" aria-hidden="true"></i></a></center></td>
                 <?php endif;?>

                </tr>
                <?php endforeach;?>
                 
                
                  </tr>
                
                                </tbody>
                               

                                <tfoot>
                                <tr class="active">
                                    <td colspan="5">
                                        <div class="text-right">
                                            <ul class="pagination pagination-split justify-content-end footable-pagination m-t-10"></ul>
                                        </div>
                                    </td>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
              </div>
            </div>
    
    </main>























