<head>
      
    
    
    <!-- Bizpro Style CSS -->
    <link rel="stylesheet" href="vistas/Inicio/template/style.css">
    
    <link rel="stylesheet" href="vistas/Inicio/template/css/skin/green.css">





    <!-- imagenessss -->
     <!-- #region Jssor Slider Begin -->
    <!-- Generator: Jssor Slider Maker -->
    <!-- Source: https://www.jssor.com -->
    <script src="vistas/Inicio/galeria/js/jquery-1.11.3.min.js" type="text/javascript"></script>
    <script src="vistas/Inicio/galeria/js/jssor.slider-27.5.0.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {

            var jssor_1_SlideshowTransitions = [
              {$Duration:800,x:0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:-0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:-0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:-0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:-0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,$Cols:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$Rows:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$Cols:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:-0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,$Rows:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:-0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$SlideOut:true,$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,$Delay:20,$Clip:3,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,$Delay:20,$Clip:3,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,$Delay:20,$Clip:12,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,$Delay:20,$Clip:12,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2}
            ];

            var jssor_1_options = {
              $AutoPlay: 1,
              $SlideshowOptions: {
                $Class: $JssorSlideshowRunner$,
                $Transitions: jssor_1_SlideshowTransitions,
                $TransitionsOrder: 1
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $ThumbnailNavigatorOptions: {
                $Class: $JssorThumbnailNavigator$,
                $SpacingX: 5,
                $SpacingY: 5
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 980;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        });
    </script>
    <style>
    .caja{
            -webkit-box-shadow: 18px 5px 84px -21px rgba(51,122,183,0.54);
-moz-box-shadow: 18px 5px 84px -21px rgba(51,122,183,0.54);
box-shadow: 18px 5px 84px -21px rgba(51,122,183,0.54);
        }
        /*jssor slider loading skin spin css*/
        .jssorl-009-spin img {
            animation-name: jssorl-009-spin;
            animation-duration: 1.6s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-009-spin {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        /*jssor slider arrow skin 106 css*/
        .jssora106 {display:block;position:absolute;cursor:pointer;}
        .jssora106 .c {fill:#fff;opacity:.3;}
        .jssora106 .a {fill:none;stroke:#000;stroke-width:350;stroke-miterlimit:10;}
        .jssora106:hover .c {opacity:.5;}
        .jssora106:hover .a {opacity:.8;}
        .jssora106.jssora106dn .c {opacity:.2;}
        .jssora106.jssora106dn .a {opacity:1;}
        .jssora106.jssora106ds {opacity:.3;pointer-events:none;}

        /*jssor slider thumbnail skin 101 css*/
        .jssort101 .p {position: absolute;top:0;left:0;box-sizing:border-box;background:#000;}
        .jssort101 .p .cv {position:relative;top:0;left:0;width:100%;height:100%;border:2px solid #000;box-sizing:border-box;z-index:1;}
        .jssort101 .a {fill:none;stroke:#fff;stroke-width:400;stroke-miterlimit:10;visibility:hidden;}
        .jssort101 .p:hover .cv, .jssort101 .p.pdn .cv {border:none;border-color:transparent;}
        .jssort101 .p:hover{padding:2px;}
        .jssort101 .p:hover .cv {background-color:rgba(0,0,0,6);opacity:.35;}
        .jssort101 .p:hover.pdn{padding:0;}
        .jssort101 .p:hover.pdn .cv {border:2px solid #fff;background:none;opacity:.35;}
        .jssort101 .pav .cv {border-color:#fff;opacity:.35;}
        .jssort101 .pav .a, .jssort101 .p:hover .a {visibility:visible;}
        .jssort101 .t {position:absolute;top:0;left:0;width:100%;height:100%;border:none;opacity:.6;}
        .jssort101 .pav .t, .jssort101 .p:hover .t{opacity:1;}


  </style>
  <!-- fin imagenes -->
    </head>
    <body oncontextmenu='return false' onkeydown='return false'>
    
    <main class="app-content">
    <div class="container" >
       <br><br><br><br><br>
        <div id="mensaje" class="alert alert-success alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong > !!Bienvenido  : </strong> <?php echo $_SESSION ['Rol'] ?>.
        </div>
        
    </div>
</div>



<div class="row" >
    <!-- <div class="col-md-6 col-lg-3" >
        <div class="caja widget-small primary coloured-icon" id="clickeable" onclick="location.href='Almacenamiento/Mejores/ejemplo.pdf'" style="cursor:pointer;" ><img class="colorimg"  src="vistas/Inicio/galeria/img/Proyectosinicio/Primero/Revitax.png" />
            <div  >
            <img class="slo"  src="vistas/Inicio/galeria/img/Proyectosinicio/Primero/Revitaxletra.png" />
            </div>
        </div>
    </div> -->
   
    <!-- <div class="col-md-6 col-lg-3" >
        <div class="caja widget-small primary coloured-icon" id="clickeable" onclick="location.href='vistas/Inicio/galeria/img/Proyectosinicio/Segundo/Unizo.pdf'" style="cursor:pointer;" ><img class="colorimg"  src="vistas/Inicio/galeria/img/Proyectosinicio/Segundo/U.svg" />
            <div  >
            <img class="slo"  src="vistas/Inicio/galeria/img/Proyectosinicio/Segundo/Unizo.svg" />

            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3" >
        <div class="caja widget-small primary coloured-icon" id="clickeable" onclick="location.href='vistas/Inicio/galeria/img/Proyectosinicio/Tercero/PYTUN.pdf'" style="cursor:pointer;" ><img class="colorimg"  src="vistas/Inicio/galeria/img/Proyectosinicio/Tercero/P.svg" />
            <div  >
            <img class="slo"  src="vistas/Inicio/galeria/img/Proyectosinicio/Tercero/Pytun.svg" />  
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3" >
        <div class="caja widget-small primary coloured-icon" id="clickeable" onclick="location.href='vistas/Inicio/galeria/img/Proyectosinicio/Cuarto/spa.pdf'" style="cursor:pointer;" ><img class="colorimg"  src="vistas/Inicio/galeria/img/Proyectosinicio/Cuarto/spa.svg" />
            <div  >
            <img class="slo"  src="vistas/Inicio/galeria/img/Proyectosinicio/Cuarto/spacontrol.svg" />

            </div>
        </div>
    </div> -->
</div>
    <!-- Start Service -->
    <br><br>
    <section id="service" class="section">
      <div>
         <br>
        
        <div class="row" style="justify-content: center;">



                <?php if($_SESSION['Rol']=="Administrador"):?><!-- Administrador-->
          <!-- Single Service -->
          <div class="caja col-md-2 col-sm-8 col-xs-12 wow fadeIn" data-wow-delay="0.4s" width="42px" style="margin-right:30px; border-radius: 20px 10px 20px 10px;cursor:pointer;" onclick="location.href='?c=Proyecto';" >
            <div class="single-service">
            <i class="colorp fa fa-book"></i>
                        <h2>Proyecto</h2>
                        <p>Se pueden visualizar los proyectos subidos por aprendices de distintos programas de formación </p>
            </div>
          </div>
          <!--/ End Single Service -->
                   
          <!-- Single Service -->
          <div class="caja col-md-2 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="0.8s" style="margin-right:30px; border-radius: 20px 10px 20px 10px;cursor:pointer;" onclick="location.href='?c=Instructor';"  >
            <div class="single-service">
            <i class="colorp fa fa-id-card"></i>
                        <h2>Instructor</h2>
              <p>Instructores registrados </p>
            </div>
          </div>
          <!--/ End Single Service -->
                  
          <!-- Single Service -->
          <div class="caja col-md-2 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="1.2s" style="margin-right:30px; border-radius: 20px 10px 20px 10px;cursor:pointer;" onclick="location.href='?c=Aprendiz';"  >
            <div class="single-service">
            <i class="colorp fa fa-child"></i>
                        <h2>Aprendiz</h2>
              <p>Aprendices ( SENA ) Centro de gestión de mercados, logística y tecnologías de la información</p>
            </div>
          </div>
          <!--/ End Single Service -->
          <!-- Single Service -->
          <div class="caja col-md-2 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="1.6s" style="margin-right:30px; border-radius: 20px 10px 20px 10px; cursor:pointer;" onclick="location.href='?c=ProgramaFormacion';" >
            <div class="single-service">
            <i class="colorp fa fa-users"></i>
              <h2>Programa de formación</h2>
              <p>Programas de formación que suben proyectos </p>
            </div>
          </div>
          <!--/ End Single Service -->
                    <?php endif;?>







                    <?php if($_SESSION['Rol']=="Instructor"):?><!-- Instructor-->
            <!-- Single Service -->
                        <div class="caja col-md-2 col-sm-8 col-xs-12 wow fadeIn" data-wow-delay="0.4s" width="42px" style="margin-right:30px; border-radius: 20px 10px 20px 10px;cursor:pointer;" onclick="location.href='?c=Proyecto';" >
            <div class="single-service">
            <i class="colorp fa fa-book"></i>
                        <h2>Proyecto</h2>
                        <p>Se pueden visualizar los proyectos subidos por aprendices de distintos programas de formación</p>
            </div>
          </div>
          <!--/ End Single Service -->
                  
          <!-- Single Service -->
          <div class="caja col-md-2 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="1.2s" style="margin-right:30px; border-radius: 20px 10px 20px 10px;cursor:pointer;" onclick="location.href='?c=Aprendiz';"  >
            <div class="single-service">
            <i class="colorp fa fa-child"></i>
                        <h2>Aprendiz</h2>
              <p>Aprendices ( SENA ) Centro de gestión de mercados, logística y tecnologías de la información</p>
            </div>
          </div>
          <!--/ End Single Service -->
                    <!-- Single Service -->
          <div class="caja col-md-2 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="1.2s" style="margin-right:30px; border-radius: 20px 10px 20px 10px;cursor:pointer;" onclick="location.href='?c=CategoriaProyecto';"  >
            <div class="single-service">
            <i class="colorp fa fa-tasks"></i>
                        <h2>Categoría De Proyecto</h2>
              <p>Información concreta de lo que realiza el proyecto</p>
            </div>
          </div>
          <!--/ End Single Service -->
                    <!-- Single Service -->
          <div class="caja col-md-2 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="1.2s" style="margin-right:30px; border-radius: 20px 10px 20px 10px;cursor:pointer;" onclick="location.href='?c=FichaCaracterizacion';"  >
            <div class="single-service">
            <i class="colorp fa fa-street-view"></i>
                        <h2>Ficha de caracterización</h2>
              <p>Información de la ficha de los estudiantes</p>
            </div>
          </div>
          <!--/ End Single Service -->
          
                    <?php endif;?>




                    <?php if($_SESSION['Rol']=="Aprendiz"):?><!-- Aprendiz-->
            <!-- Single Service -->
                        <div class="caja col-md-2 col-sm-8 col-xs-12 wow fadeIn" data-wow-delay="0.4s" width="42px" style="margin-right:30px; border-radius: 20px 10px 20px 10px;cursor:pointer;" onclick="location.href='?c=Proyecto';" >
            <div class="single-service">
            <i class="colorp fa fa-book"></i>
                        <h2>Proyecto</h2>
                        <p>Se pueden visualizar los proyectos subidos por aprendices de distintos programas de formación</p>
            </div>
          </div>
          <!--/ End Single Service -->
                  
          
                    <!-- Single Service -->
          <div class="caja col-md-2 col-sm-6 col-xs-12 wow fadeIn" data-wow-delay="1.2s" style="margin-right:30px; border-radius: 20px 10px 20px 10px;cursor:pointer;" onclick="location.href='?c=CategoriaProyecto';"  >
            <div class="single-service">
            <i class="colorp fa fa-tasks"></i>
                        <h2>Categoría De Proyecto</h2>
              <p>Información concreta de lo que realiza el proyecto</p>
            </div>
          </div>
          <!--/ End Single Service -->
                   
          
                    <?php endif;?>
        
        </div>
      </div>
    </section>


<br>  <br><br>
    <!-- inicio imagenes -->

      
    <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:600px;overflow:hidden;visibility:hidden;border-radius: 10px 10px 10px 10px;
    -webkit-box-shadow: 18px 5px 84px -9px rgba(51,122,183,0.74);
    -moz-box-shadow: 18px 5px 84px -9px rgba(51,122,183,0.74);
    box-shadow: 18px 5px 84px -9px rgba(51,122,183,0.74);">
        <!-- Loading Screen -->
        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.5);">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="vistas/Inicio/galeria/img/spin.svg" />
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:500px;overflow:hidden;">
            <div>
                <img data-u="image" src="vistas/Inicio/galeria/img/111.jpg" />
                <img data-u="thumb" src="vistas/Inicio/galeria/img/111.jpg" />
            </div>
            <div>
                <img data-u="image" src="vistas/Inicio/galeria/img/122.jpg" />
                <img data-u="thumb" src="vistas/Inicio/galeria/img/122.jpg" />
            </div>
            <div>
                <img data-u="image" src="vistas/Inicio/galeria/img/200.jpg" />
                <img data-u="thumb" src="vistas/Inicio/galeria/img/200.jpg" />
            </div>
            <div>
                <img data-u="image" src="vistas/Inicio/galeria/img/131.png" />
                <img data-u="thumb" src="vistas/Inicio/galeria/img/131.png" />
            </div>
            <div>
                <img data-u="image" src="vistas/Inicio/galeria/img/121.jpg" />
                <img data-u="thumb" src="vistas/Inicio/galeria/img/121.jpg" />
            </div>
            <div>
                <img data-u="image" src="vistas/Inicio/galeria/img/130.jpg" />
                <img data-u="thumb" src="vistas/Inicio/galeria/img/130.jpg" />
            </div>
            <div>
                <img data-u="image" src="vistas/Inicio/galeria/img/123.jpg" />
                <img data-u="thumb" src="vistas/Inicio/galeria/img/123.jpg" />
            </div>
            <div>
                <img data-u="image" src="vistas/Inicio/galeria/img/112.jpg" />
                <img data-u="thumb" src="vistas/Inicio/galeria/img/112.jpg" />
            </div>
            <div>
                <img data-u="image" src="vistas/Inicio/galeria/img/113.png" />
                <img data-u="thumb" src="vistas/Inicio/galeria/img/113.png" />
            </div>
            <div>
                <img data-u="image" src="vistas/Inicio/galeria/img/114.jpg" />
                <img data-u="thumb" src="vistas/Inicio/galeria/img/114.jpg" />
            </div>
            <div>
                <img data-u="image" src="vistas/Inicio/galeria/img/115.jpg" />
                <img data-u="thumb" src="vistas/Inicio/galeria/img/115.jpg" />
            </div>
            <div>
                <img data-u="image" src="vistas/Inicio/galeria/img/116.jpg" />
                <img data-u="thumb" src="vistas/Inicio/galeria/img/116.jpg" />
            </div>
            <div>
                <img data-u="image" src="vistas/Inicio/galeria/img/118.jpg" />
                <img data-u="thumb" src="vistas/Inicio/galeria/img/118.jpg" />
            </div>
            <div>
                <img data-u="image" src="vistas/Inicio/galeria/img/119.jpg" />
                <img data-u="thumb" src="vistas/Inicio/galeria/img/119.jpg" />
            </div>
            <div>
                <img data-u="image" src="vistas/Inicio/galeria/img/120.jpg" />
                <img data-u="thumb" src="vistas/Inicio/galeria/img/120.jpg" />
            </div>
            <div>
                <img data-u="image" src="vistas/Inicio/galeria/img/101.png" />
                <img data-u="thumb" src="vistas/Inicio/galeria/img/101.png" />
            </div>
        </div>
        <!-- Thumbnail Navigator -->
        <div data-u="thumbnavigator" class="jssort101" style="position:absolute;left:0px;bottom:0px;width:980px;height:100px;background-color:#000;" data-autocenter="1" data-scale-bottom="0.75">
            <div data-u="slides">
                <div data-u="prototype" class="p" style="width:190px;height:90px;">
                    <div data-u="thumbnailtemplate" class="t"></div>
                    <svg viewbox="0 0 16000 16000" class="cv">
                        <circle class="a" cx="8000" cy="8000" r="3238.1"></circle>
                        <line class="a" x1="6190.5" y1="8000" x2="9809.5" y2="8000"></line>
                        <line class="a" x1="8000" y1="9809.5" x2="8000" y2="6190.5"></line>
                    </svg>
                </div>
            </div>
        </div>
        <!-- Arrow Navigator -->
        <div data-u="arrowleft" class="jssora106" style="width:55px;height:55px;top:162px;left:30px;" data-scale="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <circle class="c" cx="8000" cy="8000" r="6260.9"></circle>
                <polyline class="a" points="7930.4,5495.7 5426.1,8000 7930.4,10504.3 "></polyline>
                <line class="a" x1="10573.9" y1="8000" x2="5426.1" y2="8000"></line>
            </svg>
        </div>
        <div data-u="arrowright" class="jssora106" style="width:55px;height:55px;top:162px;right:30px;" data-scale="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <circle class="c" cx="8000" cy="8000" r="6260.9"></circle>
                <polyline class="a" points="8069.6,5495.7 10573.9,8000 8069.6,10504.3 "></polyline>
                <line class="a" x1="5426.1" y1="8000" x2="10573.9" y2="8000"></line>
            </svg>
        </div>
  </div>
  <br>
  <!-- #endregion Jssor Slider End -->
  <!-- fin imagenes -->





    <!--/ End Service -->
    
    <!-- Jquery JS -->
    <script type="text/javascript" src="vistas/Inicio/template/js/jquery.min.js"></script>
      
    <!-- Animate JS -->
      <script  type="text/javascript" src="vistas/Inicio/template/js/wow.min.js"></script>
    
    <!-- Popup JS -->
    <script type="text/javascript"  src="vistas/Inicio/template/js/jquery.magnific-popup.min.js"></script>
    
    <!-- Typed JS -->
    <script  type="text/javascript" src="vistas/Inicio/template/js/typed.min.js"></script>
    
    <!-- Scroll Up JS -->
    <script  type="text/javascript" src="vistas/Inicio/template/js/jquery.scrollUp.min.js"></script>
    
    <!-- Slick Nav JS -->
    <script  type="text/javascript" src="vistas/Inicio/template/js/jquery.slicknav.min.js"></script>
    
    <!-- Counterup JS -->
    <script  type="text/javascript" src="vistas/Inicio/template/js/waypoints.min.js"></script>
    <script  type="text/javascript" src="vistas/Inicio/template/js/jquery.counterup.min.js"></script>
    
    <!-- Owl Carousel JS -->
    <script  type="text/javascript" src="vistas/Inicio/template/js/owl.carousel.min.js"></script>
    
    <!-- Main JS -->
    <script type="text/javascript"  src="vistas/Inicio/template/js/main.js"></script>
    </body>
</html>
</aside>


</main>