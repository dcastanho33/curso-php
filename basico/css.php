<div class="titulo">Integração CSS</div>

<h1 center>              <!-- usando o seletor center -->
<?php
echo 'Olá ';
echo '<small>';        /*html escrito no bloco de php*/
echo 'Mundo';
echo '</small>';
?>
</h1>

<?= "<div center azul>Outra forma de me expressar!</div>" ?>          <!-- html escrito no php -->

<br>
<div center><button dobro><?= "Legal" ?></div></button>       <!-- php dentro da tag html -->

<style>
    button {                                   /*não é uma classe, ele achou o button na linha de cima*/
        padding: 5px <? 2 * 10 ?>px;               /*exemplo de cálculo usando php para fazer o padding*/
        background-color: #4286f4;
        color: #EEE;
        font-weight: bold;
        border-radius: 10px;
    }

    
    
    /*seletores em css*/
    [center] {
        display: flex;
        justify-content: center;
    }

    [azul] {
        color: #4286f4;
    }

    [dobro] {
        font-size: <?= 10 - 8?>rem;    /*2rem*/
    }

</style>