<div class="titulo">Integração HTML</div>

<h1>
<?php
echo 'Olá ';
echo '<small>';        /*html escrito no bloco de php*/
echo 'Mundo';
echo '</small>';
?>
</h1>

<?= "<div>Outra forma de me expressar!</div>" ?>          <!-- html escrito em php -->

<br>
<div><button><?= "Legal" ?></div></button>       <!-- HTML e PHP misturados -->