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
            //Valores de Correo
            $("input[name=CorreoElectronico]").blur(function () {
                ComprobarCorreo();
            });
            $("input[name=ConfirmCorreoElectronico]").blur(function () {
                ComprobarCorreo2();
            });
        });
        function ComprobarCorreo() {
            Corr1 = $("input[name=CorreoElectronico]").val();
            Corr2 = $("input[name=ConfirmCorreoElectronico]").val();
        
            if (Corr1 == "" && Corr2 == "") {
                $("#Res").html("Correos Electronicos Requeridos.");
                $("#CorreoElectronico").css("border-color", "red");
                $("#ConfirmCorreoElectronico").css("border-color", "red");
                $("#Res").css("color", "red");
            } else {
                if (Corr1 == Corr2) {
                    $("#Res").html("Correos Electronicos Correctos. ");
                    $("#CorreoElectronico").css("border-color", "blue");
                    $("#ConfirmCorreoElectronico").css("border-color", "blue");
                    $("#Res").css("color", "blue");
                } else {
                    $("#Res").html("Correos Electronicos no Coinciden ");
                    $("#CorreoElectronico").css("border-color", "red");
                    $("#ConfirmCorreoElectronico").css("border-color", "red");
                    $("#Res").css("color", "red");
                }
            }
        
        }
        function ComprobarCorreo2() {
            Corr1 = $("input[name=CorreoElectronico]").val();
            Corr2 = $("input[name=ConfirmCorreoElectronico]").val();
        
            if (Corr1 == "" && Corr2 == "") {
            } else {
                if (Corr1 == Corr2) {
                    $("#Res").html("Correos Electronicos Correctos. ");
                    $("#CorreoElectronico").css("border-color", "blue");
                    $("#ConfirmCorreoElectronico").css("border-color", "blue");
                    $("#Res").css("color", "blue");
                } else {
                    $("#Res").html("Correos Electronicos no Coinciden. ");
                    $("#CorreoElectronico").css("border-color", "red");
                    $("#ConfirmCorreoElectronico").css("border-color", "red");
                    $("#Res").css("color", "red");
                }
            }
        }
        //simbolos correo corrrectos//
        if(
           
            //(($("#usu").val().length<4)||(!$("#usu").val().match(/^[0-9_a-zA-Z]+$/))) ||
            (($("#CorreoElectronico").val().length==0)||(!$("#CorreoElectronico").val().match(/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/)))
        );
        //icono al ingresar correo//
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











                    $(document).ready(function () {
                        //Valores de CorreoInstitucional
                        $("input[name=CorreoInstitucional]").blur(function () {
                            ComprobarCorreoInstitucional1();
                        });
                        $("input[name=ConfirmCorreoInstitucional]").blur(function () {
                            ComprobarCorreoInstitucional2();
                        });
                    });
                    function ComprobarCorreoInstitucional1() {
                        CorrI1 = $("input[name=CorreoInstitucional]").val();
                        CorrI2 = $("input[name=ConfirmCorreoInstitucional]").val();
                    
                        if (CorrI1 == "" && CorrI2 == "") {
                            $("#CorreoInsti").html("Correos Institucionales Requeridos.");
                            $("#CorreoInstitucional").css("border-color", "red");
                            $("#ConfirmCorreoInstitucional").css("border-color", "red");
                            $("#CorreoInsti").css("color", "red");
                        } else {
                            if (CorrI1 == CorrI2) {
                                $("#CorreoInsti").html("Correos Institucionales Correctos. ");
                                $("#CorreoInstitucional").css("border-color", "blue");
                                $("#ConfirmCorreoInstitucional").css("border-color", "blue");
                                $("#CorreoInsti").css("color", "blue");
                            } else {
                                $("#CorreoInsti").html("Correos Institucionales no Coinciden. ");
                                $("#CorreoInstitucional").css("border-color", "red");
                                $("#ConfirmCorreoInstitucional").css("border-color", "red");
                                $("#CorreoInsti").css("color", "red");
                            }
                        }
                    
                    }
                    function ComprobarCorreoInstitucional2() {
                        CorrI1 = $("input[name=CorreoInstitucional]").val();
                        CorrI2 = $("input[name=ConfirmCorreoInstitucional]").val();
                    
                        if (CorrI1 == "" && CorrI2 == "") {
                        } else {
                            if (CorrI1 == CorrI2) {
                                $("#CorreoInsti").html("Correos Institucionales Correctos. ");
                                $("#CorreoInstitucional").css("border-color", "blue");
                                $("#ConfirmCorreoInstitucional").css("border-color", "blue");
                                $("#CorreoInsti").css("color", "blue");
                            } else {
                                $("#CorreoInsti").html("Correos Institucionales no Coinciden. ");
                                $("#CorreoInstitucional").css("border-color", "red");
                                $("#ConfirmCorreoInstitucional").css("border-color", "red");
                                $("#CorreoInsti").css("color", "red");
                            }
                        }
                    }
                    //simbolos CorreoInstitucional corrrectos//
                    if(
                       
                        //(($("#usu").val().length<4)||(!$("#usu").val().match(/^[0-9_a-zA-Z]+$/))) ||
                        (($("#CorreoInstitucional").val().length==0)||(!$("#CorreoInstitucional").val().match(/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/)))
                    );
                    //icono al ingresar CorreoInstitucional//
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
                                
                                
                    
                    