<!DOCTYPE html>
<html lang="en">
<head>
  <!-- alertas-->


    <script type="text/javascript" src="assets/alert/js/sweetalert2.js"></script>
    <script type="text/javascript" src="assets/alert/js/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="assets/alert/css/sweetalert2.css" type="text/css">
    <link rel="stylesheet" href="assets/alert/css/sweetalert2.min.css" type="text/css">
   
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
                      location.href='?c=Usuario';
                      swal({
                        title: "Good job!",
                        text: "You clicked the button!",
                        icon: "success",
                        button: "Aww yiss!",
})
;
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
                            title: "Esta Seguro De Cancelar",
                            text: "Si Se Cancela No Se Guardaran Los Datos",
                            icon: "warning",
                            buttons: ["No Cancelar", "Si Cancelar"],
                            dangerMode: true,
                          })
                          .then((willDelete) => {
                            if (willDelete) {
                               
                              swal("Se Ha Cancelado El Registro"),
                              
                                        location.href='?c=Usuario'
                                      
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
    
  


  
  <!-- alertas-->


 
</head>
 
    <body class="app sidebar-mini rtl">
      
      <main class="app-content">
       <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list" ></i><?=$titulo?> Categoria De Proyecto </h1>
          <p></p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item" ><i class="colorp fa fa-home fa-lg"  ></i></li>
          <li class="breadcrumb-item"><a href="?c=Usuario">Listar</li>
          <li ></a></li>
           </ul>
           </div>
      
             <div class="content-wrapper">
             <div class="col-md-6">
              <div class="card">
              
              <div class="card-body">
              <div class="col-md-12">
                 <form class="form-horizontal" method="POST" action="?c=Usuario&a=Guardar">
                  <div class="form-group">
                                        
                    <input class="form-control" name="id" type="hidden" value="<?=$p->getidUsuario()?>" >
                                         
                  </div>

                  <div class="form-group">
                    <label   for="Nombre" >Nombre Categoria Proyecto</label>
                      <input  class="form-control" required type="text" required name="Nombre"  require onkeypress="return soloLetras(event)" placeholder="Digite El Nombre De La Categoria"  value="<?=$p->getNombreUsuario()?>"/>
                  </div>
                 
                                  
                    <table>
                          <tr>
                            <td>
                            <form method="POST" id="2">
                              <button class="btn btn-primary" type="submit" name="aceptar" value="Aceptar" ><i class="fa fa-fw fa-lg fa-check-circle"></i>registrar</button> 
                            </form>
                            </td>
                            
                            <td>
                             <form method="POST" id="1">
                                <button class="btn btn-secondary" type="submit" name="aceptar" value="Aceptar" ><i class="fa fa-fw fa-lg fa-check-circle"></i>Cancelar</button> 
                             </form>
                           </td>
                         </tr>
                          </table> 

                      </form>
                  
                </div>
              </div>
            </div>
          </div>
        </main>
        
        <script type="text/javascript" src="assets/Usuario.js"></script>
        
  </body>

</html>