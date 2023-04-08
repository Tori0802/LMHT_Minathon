<?php 
    class App
    {
        protected $controller = "home";
        protected $action = "default";
        protected $params = [];
        
        function __construct()
        {
            // URL: /Controller/Action/Params...
            $arr = $this->UrlProcess();

            // Handle Controller
            if (isset($arr[0])){
                if (file_exists("./controller/". $arr[0] ."controller.php")){
                    $this->controller = $arr[0];
                    unset($arr[0]);
                }
            }            
            require_once "./controller/" . $this->controller . "controller.php"; 
            
            // Handle Action
            $this->controller = new $this->controller;
            if (isset($arr[1]) && method_exists($this->controller, $arr[1])){
                $this->action = $arr[1];
                unset($arr[1]);
            }

            // Handle Parameters
            $this->params = $arr ? array_values($arr) : [];
            $arr2 = array($this->params);
            call_user_func_array([ $this->controller, $this->action ], $arr2);
        }

        function UrlProcess(){
            // Clear and split URL
            if (isset($_GET['url'])){
                return explode("/", filter_var(trim($_GET['url'], "/")));
            }
        }
    }
?>