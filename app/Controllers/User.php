<?php

class User extends ClassUser
{ 
    use Controller;
        public function index() {
            $user = new ClassUser();
            $users = $user->findAll();
    
            // Passer les données des utilisateurs à la vue
            $data = ['users' => $users];
    
            // Afficher la vue
            $this->view('Users','userlistview', $data);
        }
    
        public function adduser()
        {
            $user = new ClassUser();
            if ($_SERVER['REQUEST_METHOD'] === 'POST') 
            {
                $users = $user->ajouter($_POST["name"],$_POST["email"],$_POST["username"],$_POST["password"],$_POST["role_id"]);
               redirect('user/index');
                
             }
             $this->view('Users','useraddview');
           
        }
   
  
      
        public function supprimeuser()
        {
          $user=new ClassUser();
          $id = $_GET['id'];
          $user->supprimer($id);
          redirect('user');
        }
        
        public function modifieruser()
{
    $user = new ClassUser();
    
    if ($_SERVER['REQUEST_METHOD'] == 'GET')
    {
        $id = $_GET['id'];
        $userdata = $user->find($id);
        


        // Passer les données de l'utilisateur à la vue
        $data = [
            'userdata' => $userdata
        ];
        
        // Afficher la vue pour modifier le rôle
        $this->view('Users','usereditview', $data);
    }
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        // Récupérer les données du formulaire
        $id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $role_id = $_POST['role_id'];
        // Mettre à jour les données du rôle
        $result = $user->modifier($id, $name,$email,$username,$password,$role_id);
        redirect('user');
    }
}
    
        
    
        
        
    
        
    }
   




?>