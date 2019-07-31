

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <!-- Twitter meta-->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@pratikborsadiya">
    <meta property="twitter:creator" content="@pratikborsadiya">
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Vali Admin">
    <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
    <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
    <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
    <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <title>Idea Project</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <!-- Jquery UI -->
    <link href="assets/Jquery/JqueryUI/jquery-ui-1.12.1/jquery-ui.min.css" rel="stylesheet" type="text/css"/>
        
    <link rel="icon" href="assets/img/Solologo.png">
   

  </head>
  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="index.php"><img  src="assets/img/LogoFondoColor.svg"  width="150" style="padding-top: 12px;" ></a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar" style="padding-top: 12px;" ></a>
      <!-- Navbar Right Menu-->

  

      <ul class="app-nav">
        <!-- User Menu-->
        <div class="app-sidebar__user">
        <div>
          <p class="app-sidebar__user-name" style="padding-top: 12px;"><?php echo $_SESSION['Rol']?></p>
          
        </div>
      </div>
       
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"> <img class="app-sidebar__user-avatar" src="assets/img/LogoSENAB.svg" width="40"  ></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">

          <?php if($_SESSION['Rol']=="Administrador"):?><!-- Administrador-->
            <li><a class="dropdown-item" href="?c=perfil&a=registrarPerfil" ><i class="fa fa-user fa-lg" style="color:#0099CC;"></i> Modificar perfil</a></li>
            <li><a class="dropdown-item" href="?c=contrasena&a=registrarContrasena"><i class="fa fa-cog fa-lg" style="color:#0099CC;"></i>Contraseña</a></li>
          <?php endif;?>

          <?php if($_SESSION['Rol']=="Instructor"):?><!-- Instructor-->
            <li><a class="dropdown-item" href="?c=perfil&a=registrarPerfil" ><i class="fa fa-user fa-lg" style="color:#0099CC;"></i> Modificar perfil</a></li>
            <li><a class="dropdown-item" href="?c=contrasena&a=registrarContrasena"><i class="fa fa-cog fa-lg" style="color:#0099CC;"></i>Contraseña</a></li>
          <?php endif;?>
          
          <li><a class="dropdown-item" href="?c=Usuario&a=cerrar"><i class="fa fa-sign-out fa-lg" style="color:#0099CC;"></i> Salir</a></li>

          </ul>
        </li>
      </ul>
    </header>
    <!-- Sidebar menu-->Proyecto
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      
      <ul class="app-menu">
      <?php if($_SESSION['Rol']=="Administrador"):?><!-- Administrador-->
      <br>
              <li><a class="app-menu__item" href="index.php"><i class="app-menu__icon colorp fa fa-home fa-lg" ></i><span class="app-menu__label" >Inicio</span></a></li>
              <li><a class="app-menu__item" href="?c=Instructor"><i class="app-menu__icon fa fa-id-card" style="color:#0099CC;"></i><span class="app-menu__label">Instructor</span></a></li>
              <li><a class="app-menu__item" href="?c=Aprendiz"><i class="app-menu__icon fa fa-child" style="color:#0099CC;"></i><span class="app-menu__label">Aprendiz</span></a></li>
              <li><a class="app-menu__item" href="?c=Proyecto"><i class="app-menu__icon colorp fa fa-book" style="color:#0099CC;"></i><span class="app-menu__label">Proyecto</span></a></li>
              <li><a class="app-menu__item" href="?c=CategoriaProyecto"><i class="app-menu__icon    fa fa-tasks" style="color:#0099CC;"></i><span class="app-menu__label">Categoría de proyecto</span></a></li>
              <li><a class="app-menu__item" href="?c=ProgramaFormacion"><i class="app-menu__icon    fa fa-users" style="color:#0099CC;"></i><span class="app-menu__label">Programa de formación</span></a></li>
              <li><a class="app-menu__item" href="?c=FichaCaracterizacion"><i class="app-menu__icon     fa fa-street-view" style="color:#0099CC;"></i><span class="app-menu__label">Ficha de caracterización</span></a></li>
      <?php endif;?>

      <?php if($_SESSION['Rol']=="Instructor"):?><!-- Instructor-->

 <br>
              <li><a class="app-menu__item" href="index.php"><i class="app-menu__icon colorp fa fa-home fa-lg" ></i><span class="app-menu__label" >Inicio</span></a></li>
              <li><a class="app-menu__item" href="?c=Aprendiz"><i class="app-menu__icon fa fa-child" style="color:#0099CC;"></i><span class="app-menu__label">Aprendiz</span></a></li>
              <li><a class="app-menu__item" href="?c=Proyecto"><i class="app-menu__icon colorp fa fa-book" style="color:#0099CC;"></i><span class="app-menu__label">Proyecto</span></a></li>
              <li><a class="app-menu__item" href="?c=CategoriaProyecto"><i class="app-menu__icon    fa fa-tasks" style="color:#0099CC;"></i><span class="app-menu__label">Categoría de proyecto</span></a></li>
              <li><a class="app-menu__item" href="?c=FichaCaracterizacion"><i class="app-menu__icon     fa fa-street-view" style="color:#0099CC;"></i><span class="app-menu__label">Ficha de caracterización</span></a></li>             
      <?php endif;?>

      <?php if($_SESSION['Rol']=="Aprendiz"):?><!-- Aprendiz-->
      <br>
              <li><a class="app-menu__item" href="index.php"><i class="app-menu__icon colorp fa fa-home fa-lg" ></i><span class="app-menu__label" >Inicio</span></a></li>
              <li><a class="app-menu__item" href="?c=Proyecto"><i class="app-menu__icon colorp fa fa-book" style="color:#0099CC;"></i><span class="app-menu__label">Proyecto</span></a></li>
              <li><a class="app-menu__item" href="?c=CategoriaProyecto"><i class="app-menu__icon    fa fa-tasks" style="color:#0099CC;"></i><span class="app-menu__label">Categoría de proyecto</span></a></li>
      <?php endif;?>
   
      </ul>
    </aside>
        