<!DOCTYPE html>
<html style class=" js flexbox flexboxlegacy canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths">
    <head>
        <head>
        <meta charset="utf-8" />
        <title>IdeaProject</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/img/SoloLogo.png">

        <!--Footable-->
        <link href="plugins/footable/css/footable.core.css" rel="stylesheet">

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

        <script src="assets/js/modernizr.min.js"></script>
        
    </head>
        <!--meta charset="utf-8" />
        <title>Highdmin - Responsive Bootstrap 4 Admin Dashboard</title>
       
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <-- App favicon -->
  

        <!--Footable-->
        <!--link href="plugins/footable/css/footable.core.css" rel="stylesheet">
        <-- App css -->
        <!--link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
     
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
         <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"-->
    
    
    </head>

    <body>

        <!-- Navigation Bar-->
        <header id="topnav">
            <div class="topbar-main">
               <div class="container-fluid">

                    <!-- Logo container-->
                    <div class="logo"  >
                        <!-- Image Logo -->
                        <a class="app-header__logo" href="index.php"><img src="assets/img/LogoFondoColor.png"  width="160" style="padding-top: 12px;" ></a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar" style="padding-top: 12px;" ></a>
                        

                    </div>
                    <!-- End Logo container-->
                    

                    <div class="menu-extras topbar-custom">

                        <ul class="list-unstyled topbar-right-menu float-right mb-0">
                            <li class="menu-item">
                                <!-- Mobile menu toggle-->
                                <a class="navbar-toggle nav-link">
                                    <div class="lines">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </a>
                                <!-- End mobile menu toggle-->
                            </li>
                            

                          

                            <li class="dropdown notification-list">
                                  <?php if($_SESSION['Rol']=="Administrador"):?>
                                <a  class="nav-link dropdown-toggle waves-effect nav-link" data-toggle="dropdown" href="#" role="button"
                                   aria-haspopup="false" aria-expanded="false">
                                    <span class="ml-1 pro-user-name " style="color:gray; font-size:15px;margin:12px;"><?php echo $_SESSION['Rol']?><img src="assets/img/usuario.svg"  style="height:34px; width:40px;color: gray;" alt="" class=""> </span> 
                                </a>
                                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                    <!-- item-->
                                      <a href="javascript:void(0);" class="dropdown-item notify-item">
                                       <a class="dropdown-item" href="?c=perfil&a=registrarPerfil" ><i class="fa fa-user fa-lg"></i> Modificar perfil</a>
                                    </a>
                                    
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <a class="dropdown-item" href="?c=contrasena&a=registrarContrasena"><i class="fa fa-cog fa-lg"></i>Contraseña</a>
                                    </a>
                                     <a href="javascript:void(0);" class="dropdown-item notify-item">
                                       <a class="dropdown-item" href="?c=Usuario&a=cerrar"><i class="fa fa-sign-out fa-lg" ></i> Salir</a>
                                    </a>
                                    <?php endif;?>
                                     </li>
                                    <!-- item-->
                                     <li class="dropdown notification-list">
                                     <?php if($_SESSION['Rol']=="Instructor"):?>
                                    
 

                                      <a  class="nav-link dropdown-toggle waves-effect nav-link" data-toggle="dropdown" href="#" role="button"
                                   aria-haspopup="false" aria-expanded="false">
                                    <span class="ml-1 pro-user-name " style="color:gray; font-size:15px;margin:12px;"><?php echo $_SESSION['Rol']?><img src="assets/img/usuario.svg"  style="height:34px; width:40px;color: gray;"> </span> 
                                </a>

                                   <div class="dropdown-menu dropdown-menu-right profile-dropdown ">


                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                       <a class="dropdown-item" href="?c=perfil&a=registrarPerfil" ><i class="fa fa-user fa-lg" ></i> Modificar perfil</a>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                       <a class="dropdown-item" href="?c=contrasena&a=registrarContrasena"><i class="fa fa-cog fa-lg" ></i>Contraseña</a>
                                    </a>
                                     <a href="javascript:void(0);" class="dropdown-item notify-item">
                                       <a class="dropdown-item" href="?c=Usuario&a=cerrar"><i class="fa fa-sign-out fa-lg" ></i> Salir</a>
                                    </a>

                                </div>
                                
                            
                        
                      
                                   
                                    <?php endif;?>
                                        
                                      </li>
                                        <li class="dropdown notification-list">
                                     <?php if($_SESSION['Rol']=="Aprendiz"):?>
                                    
 

                                      <a  class="nav-link dropdown-toggle waves-effect nav-link" data-toggle="dropdown" href="#" role="button"
                                   aria-haspopup="false" aria-expanded="false">
                                    <span class="ml-1 pro-user-name " style="color:gray; font-size:15px;margin:12px;"><?php echo $_SESSION['Rol']?><img src="assets/img/usuario.svg"  style="height:34px; width:40px;color: gray;"> </span> 
                                </a>

                                   <div class="dropdown-menu dropdown-menu-right profile-dropdown ">


                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                       <a class="dropdown-item" href="?c=perfil&a=registrarPerfil" ><i class="fa fa-user fa-lg" ></i> Modificar perfil</a>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                       <a class="dropdown-item" href="?c=contrasena&a=registrarContrasena"><i class="fa fa-cog fa-lg" ></i>Contraseña</a>
                                    </a>
                                     <a href="javascript:void(0);" class="dropdown-item notify-item">
                                       <a class="dropdown-item" href="?c=Usuario&a=cerrar"><i class="fa fa-sign-out fa-lg" ></i> Salir</a>
                                    </a>

                                </div>
                                
                            
                        
                      
                                   
                                    <?php endif;?>
                                        
                                      </li>
                                      
                                     
                                    <!-- item-->
                                    

                                    <!-- item-->
                                   

                            

                           
                        </ul>
                       
                    </div>

                    <!-- end menu-extras -->

                    <div class="clearfix"></div>
                    
                </div> <!-- end container -->
            </div>

            <!-- end topbar-main -->
            
            <div class="navbar-custom" style="background:#127b76;">
                <div class="container-fluid">
                    <div id="navigation">
                        <!-- Navigation Menu-->
                        <ul class="navigation-menu" href="?c=Proyecto">

                                                    <!-- Navigation Menu-->
                        <?php if($_SESSION['Rol']=="Administrador"):?><!-- Administrador-->
                            <li class="has-submenu">
                                <a href="index.php"><li class="breadcrumb-item"><i style="font-size: 20px;color:#fc7323;" class="colorp fa fa-home fa-lg"  ></i></li></a>
                            </li>
                            <li class="has-submenu">
                                <a href="?c=Instructor"><i class="app-menu__icon fa fa-id-card" style="color:#fc7323;"></i><span style="font-weight:900" class="app-menu__label">Instructor</span></a>
                                <ul class="submenu megamenu">
                                    <li>
                                        <ul>
                                            <li><a href="?c=Instructor">Listado de instructores</a></li>
                                            <li><a href="?c=instructor&a=registrarInstructor">Registrar instructor</a></li>          
                                        </ul>
                                    </li>
                                    
                                </ul>
                            </li>
                                        




                            <li class="has-submenu">
                                <a class="app-menu__item" href=""><i class="app-menu__icon fa fa-child" style="color:#fc7323;"></i><span   style="font-weight:900" class="app-menu__label">Aprendiz</span></a>
                                <ul class="submenu megamenu">
                                    <li>
                                        <ul>
                                            <li><a href="index.php?c=Aprendiz">Listado de aprendizes</a></li>
                                            <li><a href="index.php?c=aprendiz&a=registrarAprendiz">Registrar</a></li>
                                            <li><a href="index.php?c=subir&a=registrarSubir">Subir</a></li>
                                                     
                                        </ul>
                                    </li>
                                    
                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a class="app-menu__item" href="?c=Proyecto"><i class="app-menu__icon colorp fa fa-book"  style="color:#fc7323;"  ></i><span  style="font-weight:900" class="app-menu__label">Proyecto</span></a>
                                <ul class="submenu megamenu">
                                    <li>
                                        <ul>
                                            <li><a href="index.php?c=Proyecto">Listado de proyectos</a></li>
                                            <li><a href="index.php?c=proyecto&a=registrarProyecto">Registrar</a></li>
                                                       
                                        </ul>
                                    </li>
                                   
                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a class="app-menu__item" href="?c=CategoriaProyecto"><i class="app-menu__icon fa fa-tasks" style="color:#fc7323;"></i><span  style="font-weight:900" class="app-menu__label">Categoría proyecto</span></a>
                                <ul class="submenu megamenu">
                                    <li>
                                        <ul>
                                            <li><a href="index.php?c=CategoriaProyecto">Categoria de proyectos</a></li>
                                            <li><a href="index.php?c=CategoriaProyecto&a=registrarCategoriaProyecto">Registrar</a></li>
                                                      
                                        </ul>
                                    </li>
                                    
                                </ul>
                            </li>
                            <li class="has-submenu">
                                <a class="app-menu__item" href="?c=ProgramaFormacion"><i class="app-menu__icon fa fa-users" style="color:#fc7323;"></i><span  style="font-weight:900"  class="app-menu__label">Programa de formación</span></a>
                                <ul class="submenu megamenu">
                                    <li>
                                        <ul>
                                            <li><a href="index.php?c=ProgramaFormacion">Listado de programas</a></li>
                                            <li><a href="index.php?c=ProgramaFormacion&a=registrarProgramaFormacion">Registrar</a></li>
                                                        
                                        </ul>
                                    </li>
                                    
                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a class="app-menu__item" href="?c=FichaCaracterizacion"><i class="app-menu__icon fa fa-street-view" style="color:#fc7323;"></i> <span style="font-weight:900" class="app-menu__label">Ficha de caracterización</span></a>
                                <ul class="submenu megamenu">
                                    <li>
                                        <ul>
                                            <li><a href="index.php?c=FichaCaracterizacion">Listado de fichas</a></li>
                                            <li><a href="index.php?c=FichaCaracterizacion&a=registrarFichaCaracterizacion">Registrar</a></li>
                                                      
                                        </ul>
                                    </li>
                                    
                                </ul>
                            </li>




                        
                  <li class="has-submenu">
                    <a class="app-menu__item" href="?c=Proyecto"><i class="app-menu__icon colorp fa fa-book"  style="color:#fc7323;"  ></i><span  style="font-weight:900" class="app-menu__label">Coordinaciones</span></a>
  
                 <ul class="submenu">
                      <li class="has-submenu">
                                        <a href="#">Mantenimiento</a>
                                        <ul class="submenu">
                                            <li><a href="email-inbox.html">Registrar</a></li>
                                            <li><a href="email-read.html">Listar Proyecto</a></li>
                                                        
                                        </ul>
                                    </li>



                                    <li class="has-submenu">
                                        <a href="#">Mercadeo</a>
                                        <ul class="submenu">
                                            <li><a href="email-inbox.html">Registrar</a></li>
                                            <li><a href="email-read.html">Listar Proyecto</a></li>
                                                      
                                        </ul>
                                    </li>


                                    <li class="has-submenu">
                                        <a href="#">Redes</a>
                                        <ul class="submenu">
                                            <li><a href="email-inbox.html">Registrar</a></li>
                                            <li><a href="email-read.html">Listar Proyecto</a></li>
                                                       
                                        </ul>
                                    </li>

                                    <li class="has-submenu">
                                        <a href="#">Logistica</a>
                                        <ul class="submenu">
                                            <li><a href="email-inbox.html">Registrar</a></li>
                                            <li><a href="email-read.html">Listar Proyecto</a></li>
                                                        
                                        </ul>
                                    </li>
                 </ul>
                 </li>





                        </ul>
                        <?php endif;?>
                        <?php if($_SESSION['Rol']=="Instructor"):?><!-- Instructor-->
                         <ul class="navigation-menu" href="?c=Proyecto">

                            
                            <li class="has-submenu">
                                <a href="index.php"><li class="breadcrumb-item"><i style="font-size: 20px;color:#fc7323;" class="colorp fa fa-home fa-lg"></i></li></a>
                            </li>
                            <li class="has-submenu">
                                <a class="app-menu__item" href=""><i class="app-menu__icon fa fa-child" style="color:#fc7323;"></i><span   style="font-weight:900" class="app-menu__label">Aprendiz</span></a>
                                <ul class="submenu megamenu">
                                    <li>
                                        <ul>
                                            <li><a href="index.php?c=Aprendiz">Listado de aprendizes</a></li>
                                            <li><a href="index.php?c=aprendiz&a=registrarAprendiz">Registrar</a></li>
                                            <li><a href="index.php?c=subir&a=registrarSubir">Subir</a></li>
                                                     
                                        </ul>
                                    </li>
                                    
                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a class="app-menu__item" href="?c=Proyecto"><i class="app-menu__icon colorp fa fa-book"  style="color:#fc7323;"  ></i><span  style="font-weight:900" class="app-menu__label">Proyecto</span></a>
                                <ul class="submenu megamenu">
                                    <li>
                                        <ul>
                                            <li><a href="index.php?c=Proyecto">Listado de proyectos</a></li>
                                            <li><a href="index.php?c=proyecto&a=registrarProyecto">Registrar</a></li>
                                                       
                                        </ul>
                                    </li>
                                   
                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a class="app-menu__item" href="?c=CategoriaProyecto"><i class="app-menu__icon fa fa-tasks" style="color:#fc7323;"></i><span  style="font-weight:900" class="app-menu__label">Categoría proyecto</span></a>
                                <ul class="submenu megamenu">
                                    <li>
                                        <ul>
                                            <li><a href="index.php?c=CategoriaProyecto">Categoria de proyectos</a></li>
                                            <li><a href="index.php?c=CategoriaProyecto&a=registrarCategoriaProyecto">Registrar</a></li>
                                                      
                                        </ul>
                                    </li>
                                    
                                </ul>
                            </li>
                            <li class="has-submenu">
                                <a class="app-menu__item" href="?c=ProgramaFormacion"><i class="app-menu__icon fa fa-users" style="color:#fc7323;"></i><span  style="font-weight:900"  class="app-menu__label">Programa de formación</span></a>
                                <ul class="submenu megamenu">
                                    <li>
                                        <ul>
                                            <li><a href="index.php?c=ProgramaFormacion">Listado de programas</a></li>
                                            <li><a href="index.php?c=ProgramaFormacion&a=registrarProgramaFormacion">Registrar</a></li>
                                                        
                                        </ul>
                                    </li>
                                    
                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a class="app-menu__item" href="?c=FichaCaracterizacion"><i class="app-menu__icon fa fa-street-view" style="color:#fc7323;"></i> <span style="font-weight:900" class="app-menu__label">Ficha de caracterización</span></a>
                                <ul class="submenu megamenu">
                                    <li>
                                        <ul>
                                            <li><a href="index.php?c=FichaCaracterizacion">Listado de fichas</a></li>
                                            <li><a href="index.php?c=FichaCaracterizacion&a=registrarFichaCaracterizacion">Registrar</a></li>
                                                      
                                        </ul>
                                    </li>
                                    
                                </ul>
                            </li>

                        </ul>
           
                        <?php endif;?>

                       
                    <?php if($_SESSION['Rol']=="Aprendiz"):?><!-- Aprendiz-->
                    <br>
              <ul class="navigation-menu" href="?c=Proyecto">

                            
                            <li class="has-submenu">
                                <a href="index.php"><li class="breadcrumb-item"><i style="font-size: 20px;color:#fc7323;" class="colorp fa fa-home fa-lg"  ></i></li></a>
                            </li>
                            
                            

                            <li class="has-submenu">
                                <a class="app-menu__item" href="?c=Proyecto"><i class="app-menu__icon colorp fa fa-book"  style="color:#fc7323;"  ></i><span  style="font-weight:900" class="app-menu__label">Proyecto</span></a>
                                <ul class="submenu megamenu">
                                    <li>
                                        <ul>
                                            <li><a href="index.php?c=Proyecto">Listado de proyectos</a></li>
                                            <li><a href="index.php?c=proyecto&a=registrarProyecto">Registrar</a></li>
                                                       
                                        </ul>
                                    </li>
                                   
                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a class="app-menu__item" href="?c=CategoriaProyecto"><i class="app-menu__icon fa fa-tasks" style="color:#fc7323;"></i><span  style="font-weight:900" class="app-menu__label">Categoría proyecto</span></a>
                                <ul class="submenu megamenu">
                                    <li>
                                        <ul>
                                            <li><a href="index.php?c=CategoriaProyecto">Categoria de proyectos</a></li>
                                            <li><a href="index.php?c=CategoriaProyecto&a=registrarCategoriaProyecto">Registrar</a></li>
                                                      
                                        </ul>
                                    </li>
                                    
                                </ul>
                            </li>
                        </ul>
             <?php endif;?>
           



                        <!-- End navigation menu -->
                    </div> <!-- end #navigation -->
                </div> <!-- end container -->
            </div> <!-- end navbar-custom -->
                        <!-- End navigation menu -->
                    
           
        </header>
        <!-- End Navigation Bar-->


        <div class="wrapper">
            <div class="container-fluid">

                <!-- Page-Title -->
                
                <!-- end page title end breadcrumb -->

                

                

                
                <!-- end row -->

            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->


        <!-- Footer -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        2019 IDEAProject
                    </div>
                </div>
            </div>
        </footer>
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>

        <!--FooTable-->
         <script src="plugins/footable/js/footable.all.min.js"></script>
        <!--FooTable Example-->
        <script src="assets/pages/jquery.footable.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>
