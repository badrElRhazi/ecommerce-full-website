<?php

class Role extends ClassRole
{ 
    use Controller;
        public function index() {
            $role = new ClassRole();
            $roles = $role->findAll(); 
            $data = ['roles' => $roles];
            $this->view('Roles','rolelistview', $data);
        }
    
        // public function addrole()
        // {
            
        //      $user=new User;
        // //     if($user->validate($_POST))
        // //     {
        //          $user->insert($_POST,'roles');
        //          redirect('role/index');
        // //     }
        // //    $data['errors']=$user->errors;
        //    $this->view('Role','roleaddview',$data);
           
        // }
   
       
        public function supprimerrole()
        {
          $role=new ClassRole();
          $id = $_GET['id'];
          $role->supprimer($id);
          redirect('role');
        }
        public function ajouterole()
        {
            $role = new ClassRole();
            if ($_SERVER['REQUEST_METHOD'] === 'POST') 
            {
                $roles = $role->ajouter($_POST["code"],$_POST["name"]);
               redirect('role/index');
                
             }
             $this->view('Roles','roleaddview');
           
        }
        public function modifierole()
{
    $role = new ClassRole();
    
    if ($_SERVER['REQUEST_METHOD'] == 'GET')
    {
        $id = $_GET['id'];
        $roledata = $role->find($id);

        // Passer les données de l'utilisateur à la vue
        $data = [
            'roledata' => $roledata
        ];
        
        // Afficher la vue pour modifier le rôle
        $this->view('Roles','roleeditview', $data);
    }
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        // Récupérer les données du formulaire
        $id = $_POST['id'];
        $code = $_POST['code'];
        $name = $_POST['name'];
        
        // Mettre à jour les données du rôle
        $result = $role->modifier($id, $code,$name);
        redirect('role');
    }
}
    
        
    
        
        
    
        
    }
   




?>