<!DOCTYPE html>
<html lang="en">


  <head>
  <!-- alertas-->


   
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
    
<style>
.boton{
  position: absolute;
  right: 80px;
  margin: 20px;
}
</style>

      <main class="app-content">
       <div class="app-title">
        <div>
          
        </div>
        <div class=""><br>
            <div class="container-fluid">
             <div class="row">
                    <div class="col-sm-12"><br>
                        <div class="page-title-box">
                            <div class="btn-group pull-right"><br>
                                <ol class="breadcrumb hide-phone p-0 m-0"><br>
                                    <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
                                    <li class="breadcrumb-item"><a href="index.php?c=Aprendiz">Listar</a></li>
                                    <li class="breadcrumb-item"><a href="index.php?c=aprendiz&a=registrarAprendiz">Registrar</a></li>
                                     <li class="breadcrumb-item"><a href="index.php?c=subir&a=registrarSubir">Subir</a></li>
                                    
                                </ol>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div> <!-- end container -->
        </div>
           </div>
           
       <br>
             <div class="content-wrapper">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-body">
                      <div class="col-md-12">
                           <div class="container">
          


                            
            <form  class="form-horizontal" method="POST" action="?c=aprendiz&a=Guardar">
                   <input class="form-control" name="id" type="hidden" value="<?=$p->getidAprendiz()?>" >
            <div class="row">
              <div class="col-sm-6"  style="font-weight:600px;">
                <label for="Nombres">Nombre(s):</label> 
                <input  class="form-control" autocomplete="off" required type="text" required name="Nombres"  require onkeypress="return soloLetras(event)" placeholder="Digite el(los) nombre(s)"  value="<?=$p->getNombresAprendiz()?>" class="text-justify"/>
              </div>
              <div class="col-sm-6">
               <label for="Apellidos" class="">Apellido(s):</label> 
               <input class="form-control" autocomplete="off" require  type="text"  required name="Apellidos" require onkeypress="return soloLetras(event)"   placeholder="Digite el(los) apellido(s)" value="<?=$p->getApellidosAprendiz()?>"/> 
              </div>
              <div class="col-sm-6">
                <label for="TipoDocumento" class="col-sm-1.5 col-form-label">Tipo de documento:</label>
               <select class="form-control"   name="TipoDocumento" required>
                      <option value="">Seleccione el tipo de documento</option>
                      <option value="Cédula de ciudadanía" <?=$p->getTipoDocumentoAprendiz()=="Cédula de ciudadanía" ? "selected": ""?>>Cédula de ciudadanía</option>
                      <option value="Tarjeta de identidad"  <?=$p->getTipoDocumentoAprendiz()=="Tarjeta de identidad" ? "selected": ""?>>Tarjeta de identidad</option>
                      <option value="Cédula de extranjería" <?=$p->getTipoDocumentoAprendiz()=="Cédula de extranjería" ? "selected": ""?>>Cédula de extranjería</option>
                      <option value="Nit para personas jurídicas" <?=$p->getTipoDocumentoAprendiz()=="Nit para personas jurídicas" ? "selected": ""?>>Nit para personas jurídicas</option>
                      <option value="Pasaporte" <?=$p->getTipoDocumentoAprendiz()=="Pasaporte" ? "selected": ""?>>Pasaporte</option>
                      <!--option value="Registro civil" <?=$p->getTipoDocumentoAprendiz()=="Registro civil" ? "selected": ""?>>Registro civil</option-->          
              </select>
              </div>
               <div class="col-sm-6">
                  <label for="TipoDocumento" class="col-sm-1.7 col-form-label">Número de documento:</label>
               <input  class="form-control" require  type="text" name="NúmeroDocumento"   required onkeypress="return soloNumeros(event)" placeholder="Número de documento" value="<?=$p->getNumeroDocumentoAprendiz()?>" required/>
              </div>
              <div class="col-sm-6">
                      <label for="CorreoElectronico" class="col-sm-1.5 col-form-label">Correo electronico:</label>
               <input class="form-control" autocomplete="off" require type="email"  name="CorreoElectronico" id="CorreoElectronico" require onkeypress="return  ValidarCorreo()" placeholder=" Ejem :  ejemplo@gmail.com" value="<?=$p->getCorreoElectronicoAprendiz()?>" required/>
              </div>
                    <div class="col-sm-6">
                     <label for="ConfirmCorreoElectronico" class="col-sm-1.5 col-form-label">Confirmar correo electronico:</label>
               <input class="form-control" autocomplete="off" require type="email"  name="ConfirmCorreoElectronico" id="ConfirmCorreoElectronico" require onkeypress="return  ValidarCorreo()" placeholder=" Ejem :  ejemplo@gmail.com" value="<?=$p->getCorreoElectronicoAprendiz()?>" required/>
              </div>

              <div class="col-sm-6">
                    <label for="CorreoInstitucional" class="col-sm-1.5 col-form-label">Correo institucional</label>
                <input class="form-control" autocomplete="off" requires name="CorreoInstitucional" id="CorreoInstitucional" type="text" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[misena,MISENA]+([sena,SENA])*[.][edu,EDU]*[.][co,CO]{1,5}" placeholder=" Ejem :  ejemplo@misena.edu.co" data-toggle="tooltip"  title="Solo admite correo institucional como ( @misena.edu.co y @sena.edu.co )" value="<?=$p->getCorreoInstitucionalAprendiz()?>"  required/>
              </div>

            <div class="col-sm-6">
                    <label for="ConfirmCorreoElectronico" class="col-sm-1.5 col-form-label">Confirmar correo institucional:</label>
               <input class="form-control"  autocomplete="off" requires name="ConfirmCorreoInstitucional" id="ConfirmCorreoInstitucional" type="text" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[misena,MISENA]+([sena,SENA])*[.][edu,EDU]*[.][co,CO]{1,5}" placeholder=" Ejem :  ejemplo@misena.edu.co" data-toggle="tooltip"  title="Solo admite correo institucional como ( @misena.edu.co y @sena.edu.co )" value="<?=$p->getCorreoInstitucionalAprendiz()?>"  required/>
              </div>

              <div class="col-sm-6">
              <label for="ProgramaFormacion">Programa de formación</label>
<select class="form-control" id="ProgramaFormacion" name="ProgramaFormacion"  required>
                  <option value="">Seleccione un Programa de formación</option>
                      <?php foreach($programa->Listar() as $r): ?>
                            <option value="<?=$r->idProgramaFormacion?>"><?=$r->NombreProgramaFormacion?></option>
                      <?php endforeach;?>
                    </select>
              </div>
              <div class="col-sm-6">
                    <label for="ConfirmCorreoElectronico" class="col-sm-1.5 col-form-label">Ficha de caracterización:</label> 
                <select class="form-control" id="FichaCaracterización" name="FichaCaracterizacion" required>
                      <option value="">Seleccione una ficha de caracterización</option>
                    </select>
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
               
        
      </form>

                </div>
                
              </div>
              

              


            </div>
                        
              
        <script type="text/javascript" src="assets/Validaciones/Aprendiz.js"></script>
  </body>

</html>
