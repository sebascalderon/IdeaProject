
<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list" ></i> Usuario</h1>
          <p></p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"  ><i class="colorp fa fa-home fa-lg" ></i></li>
          <li class="breadcrumb-item">Listar</li>
          <li class="breadcrumb-item active"><a href=""></a></li>
        </ul>
      </div>
     
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
                    <th>Id Usuario</th>
                    <th>Usuario</th>
                    
                    <th>Estados</th>
                   <!--este es el id del usuario del instructor<td>    <th>id del usuario</th>   -->
                    <th>Modificar</th>
                  </tr>
                </thead>
                <tbody>
                <?php foreach($this->modelo->Listar() as $r):?>
                  <tr>
                    <td><?=$r->idUsuario?></td>
                    <td><?=$r->Usuario?></td>
                    <td><?=$r->Estados?></td>
                    <!--este es el id del usuario del instructor<td>      <     -?$r->fk_idUsuario?></td>         -->
                   
                    <!-- <td><center><a href="?c=instructor&a=registrarInstructor&id=<?=$r->idUsuario?>"><i class="fa fa-lg fa-refresh"></i></a></center></td> -->
                <td>
              
                
                 <a class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Borrar" href="?c=usuario&a=Borrar&id=<?=$r->idUsuario?>"><i class="fa fa-lg fa-trash"></i></a>
                 <a class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Bloquear" href="?c=usuario&a=Bloquear&id=<?=$r->idUsuario?>"><i class="fa fa-ban" aria-hidden="true"></i></a>
                 <a class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Activo" href="?c=usuario&a=Activo&id=<?=$r->idUsuario?>"><i class="fa fa-check" aria-hidden="true"></i></a>
                 
                
                  </tr>
                <?php endforeach;?>
               
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </main>
