<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="br.css">
  <title>Array_revisao</title>

</head>
<body>

   <h1>Arrays</h1>

<?php

 
 echo '<h2>arrays como lista ordenada</h2>';
 

$lista_ordenada = array('carro', 'bike', 'moto');


echo '<pre>';

  print_r ($lista_ordenada);

echo '</pre>';


 
 echo '<h2>adicionar itens ao array</h2>';
 

 $lista_ordenada[] = 'aviao';

 echo '<pre>';
 print_r ($lista_ordenada);
echo '</pre>';

$lista_ordenada[] = 'barco';
 

 echo '<pre>';
 print_r ($lista_ordenada);
echo '</pre>'; 


$lista_ordenada[] = 'mula';
 
echo '<pre>';
 print_r ($lista_ordenada);
echo '</pre>'; 


$lista_ordenada[] = 'Navio';

echo '<pre>';
 print_r ($lista_ordenada);
echo '</pre>'; 


$lista_ordenada[] = 'skate';
 
echo '<pre>';
print_r ($lista_ordenada);
echo '</pre>';

$lista_ordenada[] = 'o cara do pilão';
 
echo '<pre>';
print_r ($lista_ordenada);
echo '</pre>';



echo '<h2>editar itens do array</h2>';
$lista_ordenada[1] = 'cavalo';

echo '<pre>';
print_r ($lista_ordenada);
echo '</pre>';

echo '<h2> array associativo inplicitor </h2>';

$lista_ordenada = [ 
'carro',
'bike',
'moto'
];

echo '<pre>';
print_r ($lista_ordenada);
echo '</pre>';


echo '<h2> array associativo = key => valo </h2>';

$array = [ 
0 => 'camisa',
1 => 'tenis',
2 => 'sapato',
5 => 'blusa de frio',
4 => 'moletom'
]; 


echo '<pre>';
print_r ($array);
echo '</pre>';

echo '<h2> array - impressao de so um itens </h2>';

echo '<pre>';
print_r($array[2]);
echo '</pre>';


echo '<h2> array - altera um itens </h2>';

$array = [ 
  0 => 'camisa',
  1 => 'tenis',
  2 => 'sapato',
  5 => 'blusa de frio',
  4 => 'moletom'
  ]; 

$array[1] = 'sapato grande';

echo '<pre>';
print_r ($array);
echo '</pre>';

echo '<h2> array - adicao um itens </h2>';

$array = [ 
  0 => 'camisa',
  1 => 'tenis',
  2 => 'sapato',
  5 => 'blusa de frio',
  4 => 'moletom',
  6 => 'caneleira'
  ]; 

$array[12] = 'calsa grande';
$array[13] = 'camisa grande';

echo '<pre>';
print_r ($array);
echo '</pre>';

echo '<h2> array - com varios tipos </h2>';

$multitipo =[
  1 => 'livro',
  'dois' => 'capitulo',
  3 => '12/09/1999',
  2 => '40',
  'telefone' => '766229829',
  'idade' => 23
];

echo '<pre>';
print_r ($multitipo);
echo '</pre>';

echo '<h2> array multidimesional - com multiplos array </h2>';

$mut = [
   'alunos' => [ 
    'id' => 1,
    'nome' => 'zeca',
    'endereco' => 'rua X'
   ],

   'professores' => [ 
   'mat' => '3287344',
   'nome' => 'antoi',
   'idade' => 34
   ]

   ]; 

echo '<pre>';
print_r ($mut);
echo '</pre>';

echo '<h2> array multidimesional - com multiplos array em um mesmo array </h2>';


$mutidimesiomal = [
  [ 
   'id' => 1,
   'nome' => 'zeca',
   'endereco' => 'rua X'
  ],

  [ 
    'id' => 2,
    'nome' => 'thayna',
    'endereco' => 'rua o'
   ],
  
  [ 
    'id' => 3,
    'nome' => 'Teu',
    'endereco' => 'rua u'
   ],
 

  ]; 

echo '<pre>';
print_r ($mutidimesiomal [0] ['id']);
echo '</pre>';

?>
</body>
</html>

