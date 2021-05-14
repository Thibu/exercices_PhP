<?php 
    $titre = "Exemple 001 - Comment écrire du php";
    require "../common/template.php" ?>
    <?php
        echo "Bonjour, je suis un script php"
    ?>
    <!-- Ceci est un commentaire html -->
    <p>Ceci sera ignoré par PHP et affiché au navigateur.</p>
    <?php 
    // Ceci est un commentaire php
    /* Ceci est un commentaire 
    php sur plusieurs lignes*/
    ?>

    <?php echo 'Alors que ceci sera analysé par PHP.'; ?>
    <p>Ceci sera aussi ignoré par PHP et affiché au navigateur.</p>

    <?php if ($expression == true): ?>
        <h2>Ceci sera affiché si l'expression est vrai.</h2>
    <?php else: ?>
        <h2>Sinon, ceci sera affiché.</h2>
    <?php endif; ?>
