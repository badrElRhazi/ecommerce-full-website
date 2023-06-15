<?php

class Categorie extends ClassCategorie
{ 
    use Controller;
        public function index() {
            $categorie = new ClassCategorie();
            $categories = $categorie->findAll();
    
            // Passer les données des utilisateurs à la vue
            $data = ['categories' => $categories];
    
            // Afficher la vue
            $this->view('categories','categorielistview', $data);
        }
    
        public function addcategorie()
        {
             $this->view('categories','categorieaddview');  
        }
   
        
        public function supprimercategorie()
        {
          $categorie = new ClassCategorie();
          $id = $_GET['id'];
          $categorie->supprimer($id);
          redirect('categorie');
        }
        public function ajouteCategorie()
        {
            $categorie = new ClassCategorie();
            if ($_SERVER['REQUEST_METHOD'] === 'POST') 
            {
                $categories = $categorie->ajouter($_POST["name"]);
               redirect('categorie/index');
                
             }
             $this->view('categories','categorieaddview');
           
        }
        public function modifiercategorie()
        {
            $categorie = new ClassCategorie();
            
            if ($_SERVER['REQUEST_METHOD'] == 'GET')
            {
                $id = $_GET['id'];
                $catdata = $categorie->find($id);
        
                // Passer les données de l'utilisateur à la vue
                $data = [
                    'catdata' => $catdata
                ];
                
                // Afficher la vue pour modifier le rôle
                $this->view('categories','categorieditview', $data);
            }
            
            if ($_SERVER['REQUEST_METHOD'] == 'POST')
            {
                // Récupérer les données du formulaire
                $id = $_POST['id'];
                $name = $_POST['name'];
                
                // Mettre à jour les données du rôle
                $result = $categorie->modifier($id,$name);
                redirect('categorie');
            }
        }
       
    }
   




?>