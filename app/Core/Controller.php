<?php

class Controller {
    public function view($view, $data = []) {
        include_once '../app/views/' . $view . '.php';
    }
}