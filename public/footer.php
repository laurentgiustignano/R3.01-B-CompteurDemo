
<?php

require_once '../app/class/Compteur.php';

$counterStorage = '../app/data/compter.data';

$compteur = new Compteur($counterStorage);
$compteur->incrementer();
$vues = $compteur->nombreVues();
?>

<footer class="border-bottom-0">
  <div class="container">
    <blockquote class="mb-0 text-muted small">Compteur de vue : <?= $vues ?></blockquote>
  </div>
</footer>

<script
  src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
  crossorigin="anonymous"></script>
</body>
</html>