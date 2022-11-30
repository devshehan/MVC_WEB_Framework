<?php
    class Pages extends Controller{
        public function __construct(){
            
        }

        public function index(){
            $data = [
                "title" => "Traverse MVC"
            ];

            $this->view('pages/index', $data);
        }

    }