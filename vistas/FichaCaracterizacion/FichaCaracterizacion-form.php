

<!DOCTYPE html>
<html lang="en">
<head>
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
    
</head>
 
    <body class="app sidebar-mini rtl" oncut="return false" oncopy="return false" onpaste="return false" oncut="return false">
   
<style>
.boton{
  position: absolute;
  right: 80px;
  margin: 20px;
}
</style>






      <main class="app-content">
       <div class="app-title">
        <div class="container-fluid"><br>
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
            </div><br>
           </div>
          
             
           
   <div class="card"> 
    <div class="card-body">   
<div class="container">
 
    
  
             <form class="form-horizontal" method="POST" action="?c=FichaCaracterizacion&a=Guardar">
               
                                        
                    <input class="form-control" name="id" type="hidden" value="<?=$p->getidFichaCaracterizacion()?>" >


            <div class="row">
              <div class="col-sm-6">
                 <label   for="Numero" >Número de la ficha</label>
                      <input  class="form-control" autocomplete="off" required type="number" required name="Numero"  require onkeypress="return soloNumeros(event)" placeholder="Digite el número de la ficha de caracterización"  value="<?=$p->getNumeroFichaCaracterizacion()?>" required/>
              </div>
              <div class="col-sm-6">
               <label   for="FechaInicio" >Fecha de inicio de la ficha</label>
                      <input  class="form-control" autocomplete="off" required type="date" required name="FechaInicio"  require onkeypress="return soloLetras(event)" placeholder="Digite la fecha de inicio de la ficha"   value="<?=$p->getFechaInicioFichaCaracterizacion()?>" required/>
              </div>
              <div class="col-sm-6">
                 <label   for="FechaFin" >Fecha final de la ficha</label>
                      <input  class="form-control" autocomplete="off" required type="date" required name="FechaFin"   require onkeypress="return soloLetras(event)" placeholder="Digite la fecha final de la ficha" value="<?=$p->getFechaFinFichaCaracterizacion()?>" required/>
              </div>
               <div class="col-sm-6">
                   <label  for="ProgramaFormacion">Nombre del programa de formación </label>   
                          <select id='ProgramaFormacion'onchange='cambioOpciones();' class="form-control" name="ProgramaFormacion"  required>
                      <option value="">Seleccione el nombre del programa de formación de la ficha</option>
                          <?php foreach($programaf->Listar() as $r): ?>
                                <option value="<?=$r->idProgramaFormacion?>" <?=$p->getfk_idProgFormacion()==$r->idProgramaFormacion ? "selected": ""?> ><?=$r->NombreProgramaFormacion?></option>
                             
                                
                          <?php endforeach;?>
                        </select>
              </div>



              <div class="col-md-6">
                <label  for="InstructorFicha">Instructor de seguimiento</label>   
                          <select class="form-control" name="InstructorFicha"  required>
                      <option value="">Seleccione el nombre del instructor de seguimiento de la ficha</option>
                          <?php foreach($instruc->Listar() as $r): ?>
                                <option value="<?=$r->idInstructor?>" <?=$p->getfk_idInstructor()==$r->idInstructor ? "selected": ""?> ><?=$r->NombresInstructor?>  <?=$r->ApellidosInstructor?></option>
                          <?php endforeach;?>
                        </select>
              </div>
                   </div>
                <div class="">
                <div class="">
                  
                              <form method="POST" id="1">
                                <br>
                              <button class="btn btn-primary boton" type="submit" name="aceptar" value="Aceptar" ><i class="fa fa-check-square"></i>Guardar</button> 
                            </form>
                         
                             <form method="POST" id="2">
                              <br>
                                <button class="btn btn-secondary" type="submit" name="cancelar" value="cancelar" ><i class="fa fa-window-close"></i>Cancelar</button> 
                             </form>
               </div>
             </div>
               

          
         </div>
       </div>
           </form>
       </div>

            </div>
          </div>
        </main>
        
        
        
  </body>

</html>