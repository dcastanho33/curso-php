<div class="titulo">Multidimensionais</div>

<?php
$dados = [
    [                                          //indice 0
        "nome" => "Roberto",
        "idade" => 26,
        "naturalidade" => "SP"
    ],
    [                                         //indice 1
        "nome" => "Maria",
        "idade" => 25,
        "naturalidade" => "BA"
    ]
];

print_r($dados);
echo '<br>' . $dados[0]['idade'];          //idade Roberto
echo '<br>' . $dados[1]['idade'];          //idade Maria

$dados [] = [                              //adicionará no proximo indice
    "nome" => "Florinda",
    "idade" => 30,
    "naturalidade" => "Cidade do México"
];

echo '<br><br>';
print_r($dados);
echo '<br>' . $dados[2]['idade'];       //idade Florinda

$dados[2]["Vizinho"] = "Chaves";        //adiciona um novo atributo dentro da Florinda
echo '<br>';
print_r($dados[2]);

unset($dados[1]);  //remove o indice 1
echo '<br>';
print_r($dados); //o php não reordena os indices, o Roberto continua 0 e a Florinda continua 2
var_dump($dados[1]); //será null