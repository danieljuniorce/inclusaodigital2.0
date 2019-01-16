<?php 

function dateHora($data) 
{
    return  date("d/m/Y", strtotime($data)); //exibe no formato d/m/a
}

?>

  <div class="carousel carousel-slider center" data-indicators="true">
    <?php if (!empty($avisos)): ?>
      <?php foreach($avisos as $aviso): ?>
        <div class="carousel-item orange white-text" href="#one!">
          <h2><?=$aviso['titulo_aviso'];?></h2>
          <p class="white-text"><?=$aviso['corpo_aviso'];?></p>

          <div class="row center">
          <br>       <br>        <br>        <br>        <br>        <br>        <br>
            <p>Data e Hora do Aviso</p>
            <p class="" style="postion:relative"><?php echo dateHora($aviso['data_envio']);?> / <?=$aviso['hora_envio'];?>  </p>
          </div>
        </div>
      <?php endforeach; ?>
    <?php else :?>
    <div class="carousel carousel-slider center" data-indicators="true">
      <div class="carousel-item red white-text" href="#one!">
        <h2>Nenhum aviso disponivel</h2>
      </div>
    </div>
    <?php endif;?>
  </div>
  