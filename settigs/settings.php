<?php
    require_once "vendor/autoload.php";



    \Slim\Slim::registerAutoloader();
    $app=new \Slim\Slim(
        array(
            'mode'=>'development', // режим для настроек по умолчанию
            //настройки

            //шаблоны
            'templates.path'=>'templates',

            //куки
            'cookies.encrypt'=>TRUE, //шифрование кук
            'cookies.lifetime'=>'20 minutes',//время жизни
            'cookies.path' =>'/', //где работают / - везде
            'cookies.domain' => 'lab.local',
            'cookies.secure' => FALSE, //если true- нужен сертификат,
            'cookies.httponly'=> TRUE,
            'cookies.secret_key'=>'key', //ключ шифрования данных
            'cookies.cipher'=>'cipher',
            'cookies.cipher_mode'=>'mode'
        )
    );

    $app->configureMode('development', function() use($app){
        $app->config(array(
            //DB
            // 'host'=>'localhost',
            // 'user'=>'user',
            // 'pass'=>'12345',
            // 'db' => 'lexx',    

			'host'=>'localhost',
            'user'=>'dedmoro5ru_lexx',
            'pass'=>'q1w2Q!W@',
            'db' => 'dedmoro5ru_lexx',

            'debug'=> TRUE,
        ));

    });




?>