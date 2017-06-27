<div class="container" style="margin-top:32px">
<h2>  <?php echo$title; ?></h2>

<table class="table table-striped">
  <th><h3>Tipo</h3></th>
  <th><h3>Valor</h3></th>
  <th><h3>Opciones</h3></th>
<?php foreach ($lexico as $lexico_item):?>
<tr>
    <td><h3><?php echo $lexico_item['Tipo'];?></h3> </td>
    <td><h3><?php echo $lexico_item['Valor'];?><h3/></td>
    <td><button class="btn btn-warning">Editar</button>
        <button class="btn btn-danger">Borrar</button>
    </td>
</tr>
<?php endforeach; ?>
</table>
</div>
