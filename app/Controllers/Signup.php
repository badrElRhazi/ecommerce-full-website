<?php

class Signup 
{ 
    use Controller;
    public function index()
    {
        $user=new User;
        if($user->validate($_POST))
        {

            $user->insert($_POST);
            redirect('home');
        }
       $data['errors']=$user->errors;
       $this->view('signupview',$data);
    }

  
}

?>