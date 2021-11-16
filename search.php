<?php

$page = file_get_contents('nav.html');

echo($page);

$search = $_POST['Search'];

$json = 'test.json';

$test = file_get_contents($json);

$dec = json_decode($test);

// if($search == $_POST['name']){
//     echo('Trouvé');
// } else{
//     echo('Bah nan').PHP_EOL;
// }

$var = false;

foreach($dec as $t){
    if($search == $t->Prenom){
        $var = true;
    }
}

if ($var == true){
    echo ($search.' trouvé');
} else {
    echo ('Non trouvé');
}