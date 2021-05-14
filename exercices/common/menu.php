<nav class="navbar navbar-expand-lg navClass">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="http://localhost/">Accueil</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            EXEMPLES
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <?php
                for($i = 0; $i <= 20; $i++){
                ?>
                    <li><a href="../../exemple/exemple00<?= $i+1 ?>">Exemple00<?= ($i+1) ?>Exemple 00<?= $i+1 ?></a></li>
            <?php    }
            ?>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            EXERCICES
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <?php
                for($i = 0; $i <= 7; $i++){
                ?>
                    <li><a href="../../exercices/exercice00<?= $i+1 ?>">Exercices 00<?= $i+1 ?></a></li>
            <?php    }
            ?>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>