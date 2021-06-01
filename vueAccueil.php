<?php $titre ='Mon Blog'; ?>
<?php ob_start(); ?>
<?php foreach ($billets as $billet): ?>
<article>
<header>
<h1 class="titreBillet" style="text-align: center; color: red;"><?= $billet['titre'] ?></h1>
<time style="text-align: center;color: green;font-size: medium;font-weight: bold;"><?= $billet['date'] ?></time>
</header>
<p style="text-align: center;color: green;font-size: medium;font-weight: bold;"><?= $billet['contenu'] ?></p>
</article>
<hr />
<?php endforeach; ?>
<?php $contenu = ob_get_clean(); ?>
<?php require 'gabarit.php'; ?>
