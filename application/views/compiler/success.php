<div class="container" style="margin-top:32px">

<h1>Ya leyo!</h1>


<?php foreach($result as $resutls): ?>
    <?php foreach($resutls as $resultado):?>
      <?php echo$resultado['Valor'];?> como <?php echo $resultado['Tipo'];?><br>
    <?php endforeach?>
<?php endforeach; ?>

</div>
