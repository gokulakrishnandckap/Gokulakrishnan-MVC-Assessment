<?php
require "controller/userscontroller.php";

    class routers
    {
        public $routes=[];

        private $controller;

        public function __construct() {
            $this->controller = new UserController();
        }
    
        public function get($uri,$action)
        {
            $this->routes[]=[
                'uri'=>$uri,
                'action'=>$action,
                'method'=>'GET',
    
            ];

        }
        public function post($uri,$action)
        {
            $this->routes[]=[
                'uri'=>$uri,
                'action'=>$action,
                'method'=>'POST',
    
            ];

        }
        public function delete($uri,$action)
        {
            $this->routes[]=[
                'uri'=>$uri,
                'action'=>$action,
                'method'=>'POST',
    
            ];

        }
        public function put($uri,$action)
        {
            $this->routes[]=[
                'uri'=>$uri,
                'action'=>$action,
                'method'=>'POST',
    
            ];

        }
        public function checking($uri,$method)
        {

        
            foreach ($this->routes as $router)
            {
            
                if($router['uri'] == $uri && $router['method'] == $method)
                {

                    $action = $router['action'];
                    
                    switch ($action)
                    {
                        case 'view':
                           $this->controller->view();
                            break;
                        case 'create':
                            $this->controller->create();
                            break;
                        case 'read':
                            $this->controller->read();
                            break;
                        case 'edit':
                            $this->controller->edit($_POST["edit"]);
                            break;
                        case 'delete':
                          $this->controller->delete($_POST["delete"]);
                            break;
                        case 'update':
                          $this->controller->update($_POST["update"]);
                            break;
                        default:
                          $this->controller->index();
                            break;
                    }
                    
            } 
        

                }
                
            }
        }
    
