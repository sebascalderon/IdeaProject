<main class="app-content">
      <div class="app-title">
        
        <div class="container-fluid"><br><br>
             <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="btn-group pull-right">
                                <ol class="breadcrumb hide-phone p-0 m-0">
                                    <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
                                    <li class="breadcrumb-item"><a href="index.php?c=ProgramaFormacion">Listar</a></li>
                                    <li class="breadcrumb-item"><a href="index.php?c=ProgramaFormacion&a=registrarProgramaFormacion">Registrar</a></li>
                                   
                                </ol>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div> 
      </div><br>
     
      <!--div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
             <table id="demo-foo-pagination" class="table table-striped table-bordered toggle-circle m-b-0" data-page-size="7">
                <thead>
                  <tr>
                   
                    <th>Nombre del programa de formación</th>
                    <th>Modificar</th>
                  </tr>
                </thead>
                <body>
               
                <?php foreach($this->modelo->Listar() as $r):?>
                  <tr>
                   
                    <td><?=$r->NombreProgramaFormacion?></td>
                    <td><center><a class="colorb btn btn-primary" data-toggle="tooltip" data-placement="top" title="Modificar" href="?c=ProgramaFormacion&a=registrarProgramaFormacion&id=<?=$r->idProgramaFormacion?>"><i class="fa fa-gears" aria-hidden="true"></i></a></center></td>

                  </tr>
                <?php endforeach;?>
                </body>
              </table>
            </div>
          </div>
        </div>
      </div-->  
    </main>








     <div class="content-wrapper">
             <div class="">
              <div class="card">
              
              <div class="card-body">
              <div class="container">
                 
                   <table id="demo-foo-pagination" class="table table-striped table-bordered toggle-circle m-b-0" data-page-size="7">
                <thead>
                  <tr>
                    <!-- <th>Id Programa De Formacion</th> -->
                    <th>Nombre del programa de formación</th>
                    <th>Modificar</th>
                  </tr>
                </thead>
                <body>
               
                <?php foreach($this->modelo->Listar() as $r):?>
                  <tr>
                    <!-- <td><?=$r->idProgramaFormacion?></td> -->
                    <td><?=$r->NombreProgramaFormacion?></td>
                    <td><center><a class="colorb btn btn-primary" data-toggle="tooltip" data-placement="top" title="Modificar" href="?c=ProgramaFormacion&a=registrarProgramaFormacion&id=<?=$r->idProgramaFormacion?>"><i class="fa fa-gears" aria-hidden="true"></i></a></center></td>

                  </tr>
                <?php endforeach;?>
                </body>
              </table>          
                                  
                  

                      </div>
                  </div>
                </div>
              </div>
               </div>