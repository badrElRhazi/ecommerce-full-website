<?php

class Home 
{ 
    use Controller;
    public function index($a="",$b="",$c="")
    {
       $this->view('Home','homeview');
    }
    public function destroy(){
        session_destroy();
        redirect('login/admin');
    }
  
}
