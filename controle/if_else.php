<div class="titulo">If Else</div>

<?php

if(true) {
    echo "Serei impresso?<br>";
}

if(true) {
    echo "Verdadeiro<br>";
} else {
    echo "Falso - A<br>";
    echo "Falso - B<br>";
}

if(false){
    echo "Passo A<br>";
} else if (false){
    echo "Passo B<br>";
} else if (false){
    echo "Passo C<br>";
} else if (true){
    echo "Passo D<br>";
} else if (true){
    echo "Passo E<br>";
} else {
    echo "Último Passo<br>";
}

echo "Fim <br>";