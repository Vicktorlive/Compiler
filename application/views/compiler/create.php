<div class="container" style="margin-top:32px">
    <?php echo validation_errors() ;?>
    <?php echo form_open('compilerC/create');?>
    <h2>Escribe que insertar</h2>
    <input type="text" name="insert"class="form-control" required></input>
    <select name="tipo" class="form-control">
        <option value="Numero">Numero</option>
        <option value="Funcion">Funcion</option>
        <option value="Caracter">Char</option>
        <option value="Instruccion">Instruccion</option>
        <<option value="Operador">Operador</option>
    </select>
    <center><input type="submit" name="sumbit" class="btn btn-primary btn-lg btn-block" value="Aceptar"></input></center><br><br>
</form>
</div>

<script type="text/javascript">
	$('#guardar').click(function() {
		$.post('<?php echo base_url(); ?>pages/guardar_producto',{
			nombre: $('#nombre').val(),
			marca: $('#marca').val(),
			categoria: $('#categoria').val(),
			descripcion: $('#descripcion').val(),
			foto: $('#foto').val(),
			precio: $('#precio').val(),
			cantidad: $('#cant').val()
		}, function(answer) {
			alert(answer);
		});
	});
</script>
