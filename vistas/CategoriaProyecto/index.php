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
                                    <?php if($_SESSION['Rol']=="Administrador"):?><!-- Administrador-->
                                    <li class="breadcrumb-item"><a href="?c=CategoriaProyecto&a=registrarCategoriaProyecto">Registrar</a></li>  
                                    <?php endif;?>
                                     <?php if($_SESSION['Rol']=="Instructor"):?><!-- Instructor-->
                                      <li class="breadcrumb-item"><a href="?c=CategoriaProyecto&a=registrarCategoriaProyecto"></a></li>
                                        <?php endif;?>
                                </ol>
                            </div>  
                        </div>
                    </div>
                </div>
            </div> <br>
      </div>
     
     
   



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
                            
                            
                             <table id="" class="table table-striped table-bordered toggle-circle m-b-0" data-page-size="7">
                                <thead>
                  <tr>
                    <!-- <th>Id Categoría</th> -->
                    <th>Nombre de la categoría</th>
                    <?php if($_SESSION['Rol']=="Administrador"):?><!-- Administrador-->
                    <th>Modificar</th> 
                    <?php endif;?>    

                    <?php if($_SESSION['Rol']=="Instructor"):?><!-- Instructor-->      
                    <th data-hide="all">Modificar</th> 
                    <th data-hide="all">Opciones</th>  
                    <?php endif;?>           
                   
                  </tr>
                </thead>



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

                <?php foreach($this->modelo->Listar() as $r):?>
                  <tr>
                    <!-- <td><?=$r->idCategoriaProyecto?></td> -->
                    <td><?=$r->NombreCategoriaProyecto?></td>
                      <?php if($_SESSION['Rol']=="Administrador"):?><!-- Administrador-->
                      <td><center><a class="colorb btn btn-primary" data-toggle="tooltip" data-placement="top" title="Modificar" href="?c=CategoriaProyecto&a=registrarCategoriaProyecto&id=<?=$r->idCategoriaProyecto?>"><i class="fa fa-gears" aria-hidden="true"></i></a></center></td>
                      <?php endif;?>


                      <?php if($_SESSION['Rol']=="Instructor"):?><!-- Instructor-->
                      <td><center><a class="colorb btn btn-primary" data-toggle="tooltip" data-placement="top" title="Modificar" href="?c=CategoriaProyecto&a=registrarCategoriaProyecto&id=<?=$r->idCategoriaProyecto?>"><i class="fa fa-gears" aria-hidden="true"></i></a></center></td>
                      <?php endif;?>


                    </tr>
                  <?php endforeach;?>

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
 </main>