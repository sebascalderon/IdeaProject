

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
                                    <li class="breadcrumb-item"><a href="index.php?c=aprendiz">Listar</a></li>
                                    <li class="breadcrumb-item"><a href="index.php?c=aprendiz&a=registrarAprendiz">Registrar</a></li>
                                     <li class="breadcrumb-item"><a href="index.php?c=subir&a=registrarSubir">Subir</a></li>
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
                                    <th data-hide="all">Ficha</th>
                                     <th data-hide="all">Programa</th>
                                      <th data-hide="all">Opciones</th>

                                </tr>
                                </thead>
                                <?php foreach($this->modelo->Listar() as $r):?>
                                </tbody>
                  <tr>
                    <!-- <td><?=$r->idAprendiz?></td> -->
                    <td><?=$r->Estados?></td>
                    <td><?=$r->NombresAprendiz?></td>
                    <td><?=$r->ApellidosAprendiz?></td>
                    <td><?=$r->TipoDocumentoAprendiz?></td>
                    <td><?=$r->NumeroDocumentoAprendiz?></td>
                   
                    <td><?=$r->CorreoInstitucionalAprendiz?></td>
                    <td><?=$r->NumeroFichaCaracterizacion?></td>
                    <td><?=$r->NombreProgramaFormacion?></td>

                  
                    <!--este es el id del usuario del instructor<td>      <     -?$r->fk_idUsuario?></td>         -->
                   
                    <td><center><a class="colorb btn btn-primary" data-toggle="tooltip" data-placement="top" title="Modificar"href="?c=aprendiz&a=registrarAprendiz&id=<?=$r->idAprendiz?>"><i class="fa fa-gears" aria-hidden="true"></i></a></center></td>

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
                        </div>
                    </div>
                </div>
              </div>
            </div>
    
    </main>

