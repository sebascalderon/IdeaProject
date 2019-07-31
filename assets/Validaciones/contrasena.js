function soloLetras(e) {

    key = e.keyCode || e.which;
    tecla = String.fromCharCode(key).toString();
    letras = " áéíóúabcdefghijklmnñopqrstuvwxyzÁÉÍÓÚABCDEFGHIJKLMNÑOPQRSTUVWXYZ";//Se define todo el abecedario que se quiere que se muestre.
    especiales = [8, 37, 39, 46, 6, 107]; //Es la validación del KeyCodes, que teclas recibe el campo de texto.

    tecla_especial = false
    for (var i in especiales) {
        if (key == especiales[i]) {
            tecla_especial = true;
            break;
        }
    }

    if (letras.indexOf(tecla) == -1 && !tecla_especial) {

        return false;
    }
}
function soloNumeros(evt) {
    if (window.event) {
        keynum = evt.keyCode; //IE
    } else {
        keynum = evt.which; //FF
    }
    //comprobamos si se encuentra en el rango numérico y que teclas no recibirá.
    if ((keynum > 47 && keynum < 58) || keynum == 8 || keynum == 13 || keynum == 6 || keynum == 107) {
        return true;

    } else {
        return false;

    }
}

function ValidarCorreo() {
    var correo = document.getElementsByName("correoCliente").value();
     caracteresPermitidos = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if (!caracteresPermitidos.test(correo)){
        alert("Error: La dirección de correo " + correo + " es incorrecta.");
  

				
            }
        }

        function comprueba(que,donde)
            {
            var arroba = /@/
            if(arroba.test(que)){donde.value = que.replace(arroba,'')}

            if(que.length>8){alert('No puedes introducir más de 8 caracteres');donde.value= que.substring(0,8)}
            }
        // function validar_email( email ) 
        // {
        //     var regex = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        //     return regex.test(email) ? true : false;
        // }
        //  email_prueba = "example@misena.edu.co";
 
        //     if( validar_email( email_prueba ) )
        //     {
        //     alert("El email es correcto");
        //     }
        //     else
        //     {
        //      alert("El email NO es correcto");
        //     }
                
            
        
        $(document).ready(function () {
            //Valores de Contrasena
            $("input[name=Contrasena]").blur(function () {
                ComprobarContrasena();
            });
            $("input[name=ConfirmContrasena]").blur(function () {
                ComprobarContrasena2();
            });
        });
        function ComprobarContrasena() {
            Con1 = $("input[name=Contrasena]").val();
            Con2 = $("input[name=ConfirmContrasena]").val();
        
            if (Con1 == "" && Con2 == "") {
                $("#Res").html("Contrasenas Requeridos.");
                $("#Contrasena").css("border-color", "red");
                $("#ConfirmContrasena").css("border-color", "red");
                $("#Res").css("color", "red");
            } else {
                if (Con1 == Con2) {
                    $("#Res").html("Contrasenas Correctas. ");
                    $("#Contrasena").css("border-color", "blue");
                    $("#ConfirmContrasena").css("border-color", "blue");
                    $("#Res").css("color", "blue");
                } else {
                    $("#Res").html("Contrasenas no Coinciden ");
                    $("#Contrasena").css("border-color", "red");
                    $("#ConfirmContrasena").css("border-color", "red");
                    $("#Res").css("color", "red");
                }
            }
        
        }
        function ComprobarContrasena2() {
            Con1 = $("input[name=Contrasena]").val();
            Con2 = $("input[name=ConfirmContrasena]").val();
        
            if (Con1 == "" && Con2 == "") {
            } else {
                if (Con1 == Con2) {
                    $("#Res").html("Contrasenas Correctas. ");
                    $("#Contrasena").css("border-color", "blue");
                    $("#ConfirmContrasena").css("border-color", "blue");
                    $("#Res").css("color", "blue");
                } else {
                    $("#Res").html("Contrasenas no Coinciden. ");
                    $("#Contrasena").css("border-color", "red");
                    $("#ConfirmContrasena").css("border-color", "red");
                    $("#Res").css("color", "red");
                }
            }
        }
        //simbolos Contrasena corrrectos//
        if(
           
            //(($("#usu").val().length<4)||(!$("#usu").val().match(/^[0-9_a-zA-Z]+$/))) ||
            (($("#Contrasena").val().length==0)||(!$("#Contrasena").val().match(/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/)))
        );
        //icono al ingresar Contrasena//
           $(document).on('ready',function (){
                        $('#show-hide-passwd').on('click',function(e){
                            e.preventDefault();
                            
                            var current = $(this).attr('action');
                            if(current == 'hide'){
                                $(this).prev().attr('type','text');
                                $(this).removeClass(' glyphicon glyphicon-eye-open').addClass('glyphicon glyphicon-eye-close').attr('action','show');
                            }
                            if(curren == 'show'){
                                  $(this).prev().attr('type','password');
                                $(this).removeClass('glyphicon glyphicon-eye-close').addClassx('glyphicon glyphicon-eye-open').attr('action','hide');
                                
                                
                            }
                        } )
                    })








