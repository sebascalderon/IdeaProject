<script>
    $(document).ready(function () {
        //consulta de fichas por programa
        $("#ProgramaFormacion").change(function () { 
            var idProg=parseInt($(this).val());
            $.ajax({
                type: "POST",
                url: "?c=Ficha&a=AjaxFichasPorPrograma",
                data: "idPrograma="+idProg,
                //dataType: "dataType",
                success: function (respuesta) {
                    respuesta="<option value=>Seleccione una Ficha De Caracterización</option>"+respuesta;
                    $("#FichaCaracterizacion").html(respuesta);
                    
                    <?php if(isset($_GET['id'])):?>
                        $("#FichaCaracterizacion").val(idFicha); 
                    <?php endif; ?>
                }
            });
            
        });
        

        //consulta de programa por ficha.
        <?php if(isset($_GET['id'])):?>
        var idFicha=<?=$p->getfk_idFichaCa()?>;
            $.ajax({
                type: "POST",
                url: "?c=Aprendiz&a=AjaxProgramaPorFicha",
                data: "idFicha="+idFicha,
                //dataType: "json",
                success: function (respuesta) {
                    $("#ProgramaFormacion").val(parseInt(respuesta));
                    $("#ProgramaFormacion").trigger("change");
                    //console.log(respuesta);
                }
            });
            
        <?php endif; ?>


    });
</script>