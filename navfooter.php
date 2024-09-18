<?php

$dados_emp = array(
    "Clover System Ltda",
    "gabrielcorreaneto@hotmail.com",
    "@comunidade_clover"
);

$recursos = array(
    array(
        'tipo' => 'Fale Conosco',
        'link' => '#'
    ),
    array(
        'tipo' => 'Reclamações',
        'link' => '#'
    ),
    array(
        'tipo' => 'Ouvidoria',
        'link' => '#'
    ),
    array(
        'tipo' => 'Parcerias',
        'link' => '#'
    ),
    array(
        'tipo' => 'Nossos Produtos',
        'link' => '#'
    ),
    array(
        'tipo' => 'Trabalhe Conosco',
        'link' => '#'
    )
);

echo "<footer><p> <img src='img/clover-logomarca.png' height='90px' width='90px' style='box-shadow: 0 0 5px rgba(0, 0, 0, 0.3); background-color:#000000;border-radius:50%;'>";
foreach ($dados_emp as $dado) {
    echo "<p>" . $dado . "</p>";
}
echo "</p><p>";
foreach ($recursos as $recurso) {
    echo "<a href='" . $recurso['link'] . "'>" . $recurso['tipo'] . "</a> | ";
}
echo "</p></footer>";
?>
