<?php

class Clients extends Controller {

public function index()
{

    $data =[];

    $this->view('clients/index',$data);
}


}