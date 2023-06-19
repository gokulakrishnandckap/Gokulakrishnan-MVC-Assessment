<?php


    require 'router.php';

    $router = new routers();


    $router->get('/','view');
    $router->post('/store','create');
    $router->get('/list','read');
    $router->delete('/delete','delete');
    $router->post('/edit','edit');
    $router->put('/update','update');






    $router->checking($_SERVER['REQUEST_URI'],$_SERVER['REQUEST_METHOD']);