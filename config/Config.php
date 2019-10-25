<?php
session_start(); // inicializando a sessão
ob_start(); // limpa o buffer de redirecionamento

// url padrao do site
define('URL', 'http://http://34.95.190.110/projetobase/');
define('URLADM', 'http://http://34.95.190.110/projetobase/adm/');

// controller e métodos padrão
define('CONTROLLER', 'Home');
define('METHOD', 'index');
define('ERROR404', 'Error404');

//Dados de acesso ao BD
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '1234');
define('DBNAME', 'projetobase');




/*
// função para importar automaticamente as classes
//function __autoload($Class) {
    spl_autoload_register(function($Class) {
    $dirName = array(
        'Config',
        'Controllers',
        'Models',
        'Models/helper',
        'Views'
    );
    foreach ($dirName as $diretorios) {
        if (file_exists("{$diretorios}/{$Class}.php")) {
            require("{$diretorios}/{$Class}.php");
        }
    }
});
*/
