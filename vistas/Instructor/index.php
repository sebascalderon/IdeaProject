

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
              
  <div class=""><br>
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
                                    <th>Nombre(s)</th>
                                    <th>Apellido(s)</th>
                                    <th>Tipo de documento</th>
                                    <th  data-hide="all">Numero de documento</th>
                                    <th data-hide="all">Correo institucional</th>
                                    <th data-hide="all">Rol</th>
                                     <th data-hide="all">Opciones</th>
                                </tr>
                                </thead>
                                <?php foreach($this->modelo->Listar() as $r):?>
                                <tbody>
                              
                  <tr>
                    <!-- <td><?=$r->idInstructor?></td> -->                 
                    <td><?=$r->Estados?></td>                 
                    <td><?=$r->NombresInstructor?></td>
                    <td><?=$r->ApellidosInstructor?></td>
                    <td><?=$r->TipoDocumentoInstructor?></td>
                    <td><?=$r->NumeroDocumentoInstructor?></td>
                    <!--td><?=$r->CorreoElectronicoInstructor?></td-->
                    <td><?=$r->CorreoInstitucionalInstructor?></td>
                    <td><?=$r->Rol?></td>
                        <td>

                <a class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Activar" href="?c=instructor&a=Activo&id=<?=$r->idUsuario?>"><i class="  fa fa-check" aria-hidden="true"></i></a>
                <?php if($r->Estados == ""){  ?>
               
                  <a class="colorm btn btn-primary" data-toggle="tooltip" data-placement="top" title="Para modificarlo primero debe estar activo o bloqueado" id="#2"><i class="fa fa-gears" aria-hidden="true" ></i></a>
                 
                                         
                      <?php }else{?>
                        <a class="colorb btn btn-primary" data-toggle="tooltip" data-placement="top" title="Modificar"href="?c=instructor&a=registrarInstructor&id=<?=$r->idInstructor?>"><i class="fa fa-gears" aria-hidden="true"></i></a>

                      <?php }?>      
                 <a class="colorR btn btn-primary" data-toggle="tooltip" data-placement="top" title="Bloquear" href="?c=instructor&a=Bloquear&id=<?=$r->idUsuario?>"><i class="fa fa-ban" aria-hidden="true"></i></a></td>
                 
                
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

