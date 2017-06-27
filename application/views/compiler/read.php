<div class="container" style="margin-top:32px">
<div class="row">
  <?php echo validation_errors() ;?>
  <?php echo form_open('compilerC/read');?>
  <div class="col-md-6">
    <h2>Insertar Sintaxys</h2>
    <textarea rows="15" class="form-control" name="leer" id='leer'></textarea>
  </div>
  <div class="col-md-6" style="margin-top:32px">

<pre><?php print_r($result);?></pre>
    <?php foreach($result as $resutls): ?>
        <?php foreach($resutls as $resultado):?>
          <?php echo$resultado['Valor'];?> como <?php echo $resultado['Tipo'];?><br>
        <?php endforeach?>
    <?php endforeach; ?>




<input type="submit" name="sumbit" class="btn btn-primary btn-lg btn-block" value="Aceptar"></input>
  </div>
</form>
</div>

</div>
