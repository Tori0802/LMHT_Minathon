<?php 
    class Event extends Controller
    {
        function default() {
            $this->view("event", ['type' => 'dafault']);
        }
        function map(){
            $this->view("event", ['type' => 'map']);
        }
    }
?>