<div class="container" style="margin-top:32px">
    <?php echo validation_errors() ;?>
    <?php echo form_open('compilerC/create');?>
    <h2>Escribe que insertar</h2>
    <input type="text" name="insert"class="form-control" required id="insert"></input>
    <select name="tipo" class="form-control" id="tipo">
        <option value="Numero">Numero</option>
        <option value="Funcion">Funcion</option>
        <option value="Caracter">Char</option>
        <option value="Instruccion">Instruccion</option>
        <option value="Operador">Operador</option>
    </select>
    <center><input name="sumbit" id="guardar" class="btn btn-primary btn-lg btn-block" value="Aceptar"></input></center><br><br>
</form>
</div>

<script type="text/javascript">
    $('#guardar').click(function(){
        $.post('<?php echo base_url(); ?>index.php/CompilerC/create', {
			insert: $('#insert').val(),
			tipo: $('#tipo').val(),
		}, function() {
			alert('Datos guardados correctamente, "' + $('#insert').val() + '" como ' + $('#tipo').val());
            window.location.reload();
		});
    });
</script>
