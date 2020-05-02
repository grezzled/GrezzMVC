<?php

class Home extends Controller
{
    // Default Method - Auto executed if no method found
    public function index($param = '')
    {
        // Instantiate Model
        $simpleModel  = $this->model('SimpleModel');
        $simpleModel->param = $param;

        // Open View with parameters included
        $this->view('home/index',['param'=>$simpleModel->param]);

    }
}