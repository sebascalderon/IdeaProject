

<!---->
<main class="app-content">
      <head>
    <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <!-- Twitter meta-->
    
    <!-- Main CSS-->
   
    <!-- Font-icon css-->
    
    
    <!-- Jquery UI -->

        
  </head>    <br>
              
  <div class="">
            <div class="container-fluid">
             <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="btn-group pull-right">
                                <ol class="breadcrumb hide-phone p-0 m-0">
                                    <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
                                    <li class="breadcrumb-item"><a href="index.php?c=proyecto">Listar</a></li>
                                    <?php if($_SESSION['Rol']=="Administrador"):?><!-- Administrador-->
          <li class="breadcrumb-item"><a href="?c=proyecto&a=registrarProyecto">Registrar</a></li>
          <?php endif;?>
          <?php if($_SESSION['Rol']=="Instructor"):?><!-- Instructor-->
          <li class="breadcrumb-item"><a href="?c=proyecto&a=registrarProyecto">Registrar</a></li>
          <?php endif;?>
                                    
                                    
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
                                    <th>Programa</th>
                                    <th>Ficha</th>
                                    <th>Nombre proyecto</th>
                                    <th>Fecha de entrega</th>
                                    <th  data-hide="all">Descripcion</th>
                                    <th data-hide="all">Palabras claves</th>
                                    <th data-hide="all">Lider de proyecto</th>
                                    <th  data-hide="all">Documentacion</th>
                                    <?php if($_SESSION['Rol']=="Administrador"):?> <!-- Administrador-->
                    <th data-hide="all">Modificar</th> 
                    <?php endif;?>    

                    <?php if($_SESSION['Rol']=="Instructor"):?><!-- Instructor-->      
                    <th data-hide="all">Modificar</th>   
                    <?php endif;?> 
                                </tr>
                                </thead>
                                <?php foreach($this->modelo->Listar() as $r):?>
                                <tbody>
                              
                  <tr>
                    <!-- <td><?=$r->idProyecto?></td> -->
                    <td><?=$r->NombreProgramaFormacion?></td>
                    <td><?=$r->NumeroFichaCaracterizacion?></td>
                    <td><?=$r->NombreProyecto?></td>                   
                    <td><?=$r->FechaProyecto?></td>
                    <td><?=$r->DescripcionProyecto?></td>
                    <td><?=$r->PalabrasClaveProyecto?></td>
                    <td><?=$r->NombresAprendiz.'  '.$r->ApellidosAprendiz ?></td>  
                    <td>
                    <button type="button" class="colorb btn btn-danger btn-lg" data-toggle="modal" data-target="#myModal<?=$r->idProyecto?>" style="font-size:80%;"> Documentación </button>

        <!-- Modal -->
       <div class="modal fade" id="myModal<?=$r->idProyecto?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
         <div class="modal-dialog" role="document">
           <div class="modal-content">
            <div class="modal-header">
           
            <h4 class="modal-title" id="myModalLabel" >Documentación  :  <?=$r->NombreProyecto?></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" data-toggle="tooltip"  title="Cerrar" ><span aria-hidden="true" >×</span></button>
                
           </div>
              <div class=" row modal-body" style="justify-content: center;" >
                   <p class="cd-signin-modal__fieldset">
                  
                   <?php if($_SESSION['Rol']=="Administrador"):?><!-- Administrador-->
                   <?php 
                   if((substr($r->DocumentoProyecto,(strlen($r->DocumentoProyecto))-4)) == ".pdf"){ ?>
                    <a class="colorb btn btn-info btn-flat" rel="shadowbox;width=405;height=340; visibility=hidden;"  data-toggle="tooltip"  title="Visualizar el documento principal cargado anteriormente"  href="<?=$r->DocumentoProyecto ?>  #toolbar=0">Documento</a>
                    
                    <?php } else { ?>

                    <a class="colorm btn btn-secondary btn-flat" rel="shadowbox;width=405;height=340; visibility=hidden;"  data-toggle="tooltip"  title="No hay ningún archivo guardado" disabled>Documento</a>
                   
                    <?php } ?>
                   

                    <?php if((substr($r->ManualUsuarioProyecto,(strlen($r->ManualUsuarioProyecto))-4)) == ".pdf"){ ?>
                    <a class="colorb btn btn-info btn-flat" rel="shadowbox;width=405;height=340;" data-toggle="tooltip"  title="Visualizar el manual de usuario cargado anteriormente" href="<?=$r->ManualUsuarioProyecto ?> #toolbar=0">Manual usuario</a>
                    <?php } else { ?>
                    <a class="colorm btn btn-secondary btn-flat" rel="shadowbox;width=405;height=340;" data-toggle="tooltip"  title="No hay ningún archivo guardado" disabled>Manual usuario</a>
                    
                    <?php }
                    if((substr($r->ManualInstalacionProyecto,(strlen($r->ManualInstalacionProyecto))-4)) == ".pdf"){ ?>
                    <a class="colorb btn btn-info btn-flat" rel="shadowbox;width=405;height=340;" data-toggle="tooltip"  title="Visualizar el manual de instalacion cargado anteriormente" href="<?=$r->ManualInstalacionProyecto ?> #toolbar=0">Manual instalación</a>
                    <?php }else{ ?>
                      <a class="colorm btn btn-secondary btn-flat" rel="shadowbox;width=405;height=340;" data-toggle="tooltip"  title="No hay ningún archivo guardado" disabled>Manual instalación</a>
                      <?php }
                       if((substr($r->CodigoFuenteProyecto,(strlen($r->CodigoFuenteProyecto))-4)) == ".rar"){ ?>
                   <a class="colorb btn btn-info btn-flat" rel="shadowbox;width=405;height=340;" data-toggle="tooltip"  title="Descargar el codigo fuente cargado anteriormente"  href="<?=$r->CodigoFuenteProyecto ?>">Código</a>
                   <?php 

                    }else{ ?>
                    <a class="colorm btn btn-secondary btn-flat" style="btn btn-secondary:hover" rel="shadowbox;width=405;height=340;"  data-toggle="tooltip"  title="No hay ningún archivo guardado" disabled>Código</a>
                    <?php } ?>
                    <?php endif;?>




                    <?php if($_SESSION['Rol']=="Instructor"):?><!-- Instructor-->
                    <?php 
                   if((substr($r->DocumentoProyecto,(strlen($r->DocumentoProyecto))-4)) == ".pdf"){ ?>
                    <a class="colorb btn btn-info btn-flat" rel="shadowbox;width=405;height=340; visibility=hidden;"  data-toggle="tooltip"  title="Visualizar el documento principal cargado anteriormente"  href="<?=$r->DocumentoProyecto ?>  #toolbar=0">Documento</a>
                    
                    <?php } else { ?>

                    <a class="colorm btn btn-secondary btn-flat" rel="shadowbox;width=405;height=340; visibility=hidden;"  data-toggle="tooltip"  title="No hay ningún archivo guardado" disabled>Documento</a>
                   
                    <?php } ?>
                   

                    <?php if((substr($r->ManualUsuarioProyecto,(strlen($r->ManualUsuarioProyecto))-4)) == ".pdf"){ ?>
                    <a class="colorb btn btn-info btn-flat" rel="shadowbox;width=405;height=340;" data-toggle="tooltip"  title="Visualizar el manual de usuario cargado anteriormente" href="<?=$r->ManualUsuarioProyecto ?> #toolbar=0">Manual usuario</a>
                    <?php } else { ?>
                    <a class="colorm btn btn-secondary btn-flat" rel="shadowbox;width=405;height=340;" data-toggle="tooltip"  title="No hay ningún archivo guardado" disabled>Manual usuario</a>
                    
                    <?php }
                    if((substr($r->ManualInstalacionProyecto,(strlen($r->ManualInstalacionProyecto))-4)) == ".pdf"){ ?>
                    <a class="colorb btn btn-info btn-flat" rel="shadowbox;width=405;height=340;" data-toggle="tooltip"  title="Visualizar el manual de instalacion cargado anteriormente" href="<?=$r->ManualInstalacionProyecto ?> #toolbar=0">Manual instalación</a>
                    <?php }else{ ?>
                      <a class="colorm btn btn-secondary btn-flat" rel="shadowbox;width=405;height=340;" data-toggle="tooltip"  title="No hay ningún archivo guardado" disabled>Manual instalación</a>
                      <?php }
                       if((substr($r->CodigoFuenteProyecto,(strlen($r->CodigoFuenteProyecto))-4)) == ".rar"){ ?>
                   <a class="colorb btn btn-info btn-flat" rel="shadowbox;width=405;height=340;" data-toggle="tooltip"  title="Descargar el codigo fuente cargado anteriormente"  href="<?=$r->CodigoFuenteProyecto ?>">Código</a>
                   <?php 

                    }else{ ?>
                    <a class="colorm btn btn-secondary btn-flat" style="btn btn-secondary:hover" rel="shadowbox;width=405;height=340;"  data-toggle="tooltip"  title="No hay ningún archivo guardado" disabled>Código</a>
                    <?php } ?>
                   <?php endif;?>



                   <?php if($_SESSION['Rol']=="Aprendiz"):?><!-- Aprendiz-->
                   <?php 
                   if((substr($r->DocumentoProyecto,(strlen($r->DocumentoProyecto))-4)) == ".pdf"){ ?>
                    <a class="colorb btn btn-info btn-flat" rel="shadowbox;width=405;height=340; visibility=hidden;" data-toggle="tooltip"  title="Visualizar el documento principal cargado anteriormente"  href="<?=$r->DocumentoProyecto ?>  #toolbar=0">Documento Principal</a>
                    
                    <?php } else { ?>

                    <a class="colorm btn btn-secondary btn-flat" rel="shadowbox;width=405;height=340; visibility=hidden;"  data-toggle="tooltip"  title="No hay ningún archivo guardado" disabled>Documento</a>
                   
                    <?php } ?>
                    <?php endif;?>

             </div>

          <div class="modal-footer">
              <div class="card-body">
                <div class="form-group">
                  <label>Puntuacion proyecto</label>
                  <select name="score" class="form-control" required>
                    <option value="">Seleccione...</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                  </select>

                </div>
                <div class="form-group">
                  <label>Comentario</label>
                  <textarea name="comment" class="form-control" required cols="8" rows="4"></textarea>
                </div>
                <button class="btn btn-primary">Enviar</button>
              </div>
            </div>
        







              <button type="button" class="colorb btn btn btn-info" data-dismiss="modal">OK</button>
              </td>
            </div>
           </div>
         </div>
        </div>
        <?php if($_SESSION['Rol']=="Administrador"):?><!-- Administrador-->
        <td><center><a class="colorb btn btn-primary" data-toggle="tooltip" data-placement="top" title="Modificar"href="?c=proyecto&a=registrarProyecto&id=<?=$r->idProyecto?>"><i class="fa fa-gears" aria-hidden="true"></i></a></center></td>
        <?php endif;?>
        <?php if($_SESSION['Rol']=="Instructor"):?><!-- Instructor-->
                <td><center><a class="colorb btn btn-primary" data-toggle="tooltip" data-placement="top" title="Modificar"href="?c=proyecto&a=registrarProyecto&id=<?=$r->idProyecto?>"><i class="fa fa-gears" aria-hidden="true"></i></a></center></td>
                <?php endif;?>
                  </tr>
                  
           
                
                                </tbody>
                                <?php endforeach;?>

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
    <script type="text/javascript">

      const ratings = []
      @foreach($valoraciones as $valoracion)
        ratings.push({
          score{{$valoracion->id}}: {{$valoracion->score}}
        });
      @endforeach
      // total number of stars
      const starTotal = 5;
      
      ratings.forEach(function(element) {
        for(const rating in element) {  
          const starPercentage = (element[rating] / starTotal) * 100;
          const starPercentageRounded = `${(Math.round(starPercentage / 10) * 10)}%`;         
          document.querySelector("."+rating+" td .stars-outer .stars-inner").style.width = starPercentageRounded          
        }       
      });

    </script>



	
