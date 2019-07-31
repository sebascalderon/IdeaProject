
  <script>
    function cambiar(){
    var pdrs = document.getElementById('file-upload').files[0].name;
    document.getElementById('info').innerHTML = pdrs;
}

  </script>

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
                               
                              
                              
                                        location.href='?c=proyecto'
                                      
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
                               
                                        location.href='?c=proyecto'
                                      
                            } 
                          });
                        //imprimo el resultado en el div mensaje que procesa ajax
                      
                    }
                });
            });
        });
    </script>
    
</head>

    <body class="app sidebar-mini rtl" oncut="return false" oncopy="return false" onpaste="return false">
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


<style>
.boton{
  position: absolute;
  right: 80px;
  margin: 20px;
}

</style>



 <div class="container-fluid"><br>
             <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="btn-group pull-right">
                                <ol class="breadcrumb hide-phone p-0 m-0">
                                    <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
                                    <li class="breadcrumb-item"><a href="index.php?c=Proyecto">Listar</a></li>
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





               <?php foreach($this->modelo->ListarDocumentoProyecto($p->getidProyecto()) as $r):?>

  <?php endforeach;?>
                 
                <div class="card">

                  <div class="card-body">
                    <div id="hola" class="alert alert-warning">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong >Documentación es un archivo obligatorio los demás son opcionales. </strong> 
                    </div>
                  <div class="row">

                    <div class="col-lg-6">
                      <form class="form-horizontal" method="POST" action="?c=proyecto&a=Guardar" enctype="multipart/form-data">  
                         <div class="card-box">
                             
                               
                                <div class="form-group">
                                  <input class="form-control" name="id" type="hidden" value="<?=$p->getidProyecto()?>" >
                                    <label  for="Nombre">Nombre del proyecto</label>                   
                      <input class="form-control" autocomplete="off" require  type="text"  required name="Nombre" require  placeholder="Digite el nombre del proyecto " value="<?=$p->getNombreProyecto()?>"/> 
                                </div>
                                <div class="form-group">
                                     <label  for="Fecha">Fecha de entrega</label>                   
                    <input class="form-control" autocomplete="off" name= "Fecha" id="FechaProyecto" type="text" placeholder="Ingrese la fecha de entrega del proyecto " value="<?=$p->getFechaProyecto()?>" required/> 
                                </div>
                                <div class="form-group">
                                   <label  for="Descripcion">Descripción</label>                   
                      <input class="form-control" require autocomplete="off" type="textarea" rows="3" cols="50"  required name="Descripcion" require onkeypress="return soloLetras(event)"   placeholder="Ingrese una breve descripción" value="<?=$p->getDescripcionProyecto()?>"/> 
                                </div>

                                <div class="form-group">
                              

                <div class="form-group">
                  
                  <label for="Calificacion">Puntuacion proyecto</label>
                  <select name="Calificacion"  class="form-control" required id="Calificacion" value="<?=$p->getCalificacion()?>"/>
                    <option value="">Seleccione...</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                  </select>

                </div>
                                               </div>
 
                       <label  for="Documento">Documentación</label>
                      
             
      <div class="form-group">
      <input type="file" name="Documento" id="Documento" class="inputfile inputfile-5" data-multiple-caption="{count} files selected"  style="opacity:0;font-size:100%;"accept=".pdf" name="Documento" required onkeypress="return soloLetras(event)"   placeholder="Ingrese el documento general de su documento" value="<?=$p->getDocumentoProyecto()?>"/>
                      <label for="Documento" style=" font-size:100%;width: 520px;" data-toggle="tooltip"  title=" Seleccione el documento principal de su proyecto (solo acepta archivos .pdf )"><span></span> <strong style=" font-size:100%;color: #fff;"> Seleccionar</strong></label><br>
                      <?php
                    if (isset($r->DocumentoProyecto)){
                    if((substr($r->DocumentoProyecto,(strlen($r->DocumentoProyecto))-4)) == ".pdf"){ ?>
                    <a class="colorc btn btn-success"  data-target=ModalDocumento  style="width: 100px; float: left; background-color: #238276; border-color: #238276;" data-toggle="tooltip"  title="Seleccione el documento principal de su proyecto (solo acepta archivos .pdf )"  href="<?=$r->DocumentoProyecto ?>  #toolbar=0">Historial</a>

                    <?php } else { ?>
                     <br><a  class="colorm btn btn-secondary btn-flat" data-target=ModalDocumento  style="width: 100px; float: left; background-color: #238276; border-color: #238276;visibility=hidden;" data-toggle="tooltip"  title="No hay ningún archivo guardado" disabled>Historial</a>
                    <?php }}?>   
      


               
           
              
                         <!-- end card-box -->
                    </div> <!-- end col -->  
                   
                    


               <br><br><label  for="ManualInstalacion">Manual de instalacion</label>
            <div class="form-group">
          
                 
                     <input type="file" name="ManualInstalacion" id="ManualInstalacion" class="inputfile inputfile-5" data-multiple-caption="{count} files selected"  style="opacity:0;font-size:100%;" accept=".pdf" name="ManualInstalacion" require onkeypress="return soloLetras(event)"   placeholder="Ingrese El Manual De Instalacion De Su Proyecto" value="<?=$p->getManualInstalacionProyecto()?>"/>
                      <label for="ManualInstalacion" style=" font-size:100%; width: 520px;"  data-toggle="tooltip"  title=" Seleccione el manual de instalacion de su proyecto (solo acepta archivos .pdf )"><span></span><strong style=" font-size:100%;color: #fff;"> Seleccionar</strong></label><br>
                      <?php
                      if (isset($r->ManualInstalacionProyecto)){
                    if((substr($r->ManualInstalacionProyecto,(strlen($r->ManualInstalacionProyecto))-4)) == ".pdf"){ ?>
                    <a class="colorc btn btn-success"  data-target=ModalDocumento  style="width: 100px; float: left; background-color: #238276; border-color: #238276;"   data-toggle="tooltip"  title="Visualizar el manual de instalacion cargado anteriormente"  href="<?=$r->ManualInstalacionProyecto ?> #toolbar=0">Historial</a>
                    <?php }else{ ?>
                       <a  class="colorm btn btn-secondary btn-flat" data-target=ModalDocumento  style="width: 100px; float: left; background-color: #238276; border-color: #238276;visibility=hidden;"  data-toggle="tooltip"  title="No hay ningún archivo guardado" disabled>Historial</a>
                      <?php }}?>
            </div>  
                         <!-- end card-box -->
                    </div> <!-- end col -->

                    </div>
            
                    <div class="col-lg-6">
                        <div class="card-box">
        
                                <div class="form-group">
                                     <label  for="fk_idAprendiz">Líder del proyecto</label> 
                                    <select class="form-control" name="fk_idAprendiz"  required>
                      <option value="">Seleccione el líder del proyecto</option>
                          <?php foreach($autor->Listar() as $r): ?>
                                <option value="<?=$r->idAprendiz?>" <?=$p->getfk_idAprendiz()==$r->idAprendiz ? "selected": ""?> ><?=$r->NombresAprendiz?>  <?=$r->ApellidosAprendiz?></option>
                          <?php endforeach;?>
                        </select>
                                </div>
                    <div class="form-group">
                                    <label  for="CategoriaProyecto">Categoría de proyecto</label>   
                     <select class="form-control" id="CategoriaProyecto" name="CategoriaProyecto"  required>
                  <option value="">Seleccione una categoría que defina su proyecto</option>
                      <?php foreach($categoria->Listar() as $r): ?>
                            <option value="<?=$r->idCategoriaProyecto?>" <?=$p->getfk_idcatProyecto()==$r->idCategoriaProyecto ? "selected": ""?> ><?=$r->NombreCategoriaProyecto?></option>
                      <?php endforeach;?>
                    </select>
                    </div>
                    <div class="form-group">
                                    <label  for="PalabrasClave">Palabras clave</label>                   
                      <input class="form-control" require autocomplete="off" type="text"  required name="PalabrasClave" require onkeypress="return soloLetras(event)"   placeholder="Escriba palabras clave de su proyecto" value="<?=$p->getPalabrasClaveProyecto()?>"/>   
                    </div>
                    <div class="form-group">
                  <label for="Comentario" >Comentario</label>
                  <input class="form-control" require autocomplete="off" type="text" id="Comentario" required name="Comentario" require onkeypress="return soloLetras(event)"   placeholder="Agregue un comentario sobre el proyecto" value="<?=$p->getComentario()?>"/>
                </div>



               <?php foreach($this->modelo->ListarDocumentoProyecto($p->getidProyecto()) as $r):?>
                      <?php endforeach;?>

                    <div class="form-group">
                      <label  for="ManualUsuario">Manual de usuario</label>
            <div>
          
                 
                      <input type="file" name="ManualUsuario" id="ManualUsuario" class="inputfile inputfile-5" data-multiple-caption="{count} files selected"  style="opacity:0;font-size:100%;"accept=".pdf"name="ManualUsuario" require onkeypress="return soloLetras(event)"   placeholder="Ingrese El Manual De Usuario De Su Proyecto" value="<?=$p->getManualUsuarioProyecto()?>"/>
                      <label for="ManualUsuario" style=" font-size:100%; width:520px;" data-toggle="tooltip"  title=" Seleccione el manual de usuario de su proyecto (solo acepta archivos .pdf )"><span></span> <strong style=" font-size:100%;color: #fff;"> Seleccionar</strong></label><br>
                      <?php 
                    if (isset($r->ManualUsuarioProyecto)){
                    if((substr($r->ManualUsuarioProyecto,(strlen($r->ManualUsuarioProyecto))-4)) == ".pdf"){ ?>
                    <a class="colorc btn btn-success"  data-target=ModalDocumento  style="width: 100px; float: left; background-color: #238276; border-color: #238276;" data-toggle="tooltip"  title="Visualizar el manual de usuario cargado anteriormente"  href="<?=$r->ManualUsuarioProyecto ?>  #toolbar=0">Historial</a>

                    <?php } else { ?>
                     <a  class="colorm btn btn-secondary btn-flat" data-target=ModalDocumento  style="width: 100px; float: left; background-color: #238276; border-color: #238276;visibility=hidden;" data-toggle="tooltip"  title="No hay ningún archivo guardado" disabled>Historial</a>
                    <?php }}?>                      
                   
            </div>                      
                    </div>
                    <br><br><label  for="CodigoFuente">Codigo fuente</label>
                  <div class="form-group">
          
                 
<input type="file" name="CodigoFuente" id="CodigoFuente" class="inputfile inputfile-5" data-multiple-caption="{count} files selected"  style="opacity:0;font-size:100%;" accept=".rar,.zip,.sitx,.7z,.gz"name="CodigoFuente" require onkeypress="return Validar(event)"   placeholder="Ingrese Codigo Fuente De Su Proyecto" value="<?=$p->getCodigoFuenteProyecto()?>"/>
                      <label for="CodigoFuente" style=" font-size:100%; width:520px;" title=" Seleccione el codigo fuente de su proyecto (solo acepta archivos .rar o .zip y el peso maximo es de 1 Gigabyte )"><span></span> <strong style="color: #fff;"> Seleccionar</strong></label><br>
                
                      <?php
                      
                      if (isset($r->CodigoFuenteProyecto)){
                       if((substr($r->CodigoFuenteProyecto,(strlen($r->CodigoFuenteProyecto))-4)) == ".rar"){ ?>
                 <a class="colorc btn btn-success"  data-target=ModalDocumento  style="width: 100px; float: left; background-color: #238276; border-color: #238276;"   data-toggle="tooltip"  title="Descargar el codigo fuente cargado anteriormente"  href="<?=$r->CodigoFuenteProyecto ?>">Historial</a>
                   <?php 
                    }else{ ?>
                    <br><a  class="colorm btn btn-secondary btn-flat" data-target=ModalDocumento  style="width:100px;float: left; background-color: #238276; border-color: #238276;visibility=hidden;"   data-toggle="tooltip"  title="No hay ningún archivo guardado" disabled>Historial</a>

                    <?php }}
                     ?>
            </div>  

                          
                        </div> <!-- end card-box -->
                    
                    </div> <!-- end col -->
                               

    
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
               
  </body>

</html>
