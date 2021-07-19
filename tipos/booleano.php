<div class="titulo">Tipo Booleano</div>

<?php
echo TRUE;
echo '<br>';
echo FALSE;

echo '<br>' . var_dump(true);
echo '<br>' . var_dump(false);
echo '<br>' . var_dump('false');
echo '<br>' . is_bool(false);
echo '<br>' . is_bool('true');

//fazer as regras de conversões

echo '<p>Regras: </p>';
echo '<br>' . var_dump((bool) 0);     /*apenas zero será false*/
echo '<br>' . var_dump((bool) 20);
echo '<br>' . var_dump((bool) -1);
echo '<br>' . var_dump((bool) 0.0);
echo '<br>' . var_dump((bool) 0.0000);
echo '<br>' . var_dump((bool) "");    /*string vazia será false*/
echo '<br>' . var_dump((bool) "0");   /*aqui será false pois é 0, mesmo string*/
echo '<br>' . var_dump((bool) " ");   /*aqui será true*/

echo '<br>' . var_dump(!!"false");