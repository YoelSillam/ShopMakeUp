<?php

// function autoloader_1($class) {
//     $class = str_replace('\\', '/', $class);
//     require_once('Modele/'.$class.'.php');
// }

function Autoloader($className)
{
    $directories = array(
        'controleur/',
        'Modele/'
    );

    foreach ($directories as $directory) {
        $fileName = $directory . $className . '.php';
        if (file_exists($fileName)) {
            require_once($fileName);
            return;
        }
    }
}

spl_autoload_register('Autoloader');

// function autoloader_2($controleur) {
//     $controleur = str_replace('\\', '/', $controleur);
//     require_once('Controleur/'.$controleur . '.php');
// }
// // spl_autoload_register('autoloader_1');
// spl_autoload_register('autoloader_2');