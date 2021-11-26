<!-- Validacion usuario / admin -->
<?php

if($_SESSION['role'] == 'Administrador') {?>

<!-- Admin -->
<script>
  document.getElementById("usuarios").hidden=false;
</script>

<?php }else { ?>
  
  <!-- Operador -->
  <script>
  document.getElementById("usuarios").hidden=true;
</script>
  <?php } ?>
<!-- Fin Validacion -->