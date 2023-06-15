<?php

class Product extends ClassProduct
{ 
    use Controller;
        public function index() {
            $product = new ClassProduct();
            $products  = $product ->findAll();
    
            // Passer les données des utilisateurs à la vue
            $data = ['products' => $products];
    
            // Afficher la vue
            $this->view('products','productlistview', $data);
        }
    
        public function addproduct()
        {
            $product = new ClassProduct();
            if ($_SERVER['REQUEST_METHOD'] === 'POST') 
            {
                if(isset($_FILES['pro_pic'])){
                    $image=$_FILES['pro_pic']['name'];
                    $upload_path='img/' . $image;
                    $tmp_name=$_FILES["pro_pic"]['tmp_name'];
                    move_uploaded_file($tmp_name, $upload_path);
                }
                
                $products = $product->ajouter($_POST["name"],$_POST["short_description"],$_POST["description"],$_POST["price"],$_POST["category_id"],$image);
               redirect('product/index');
                
             }
             $this->view('products','productaddview');
           
        }
   
  
      
        public function supprimeproduct()
        {
          $product = new ClassProduct();
          $id = $_GET['id'];
          $product->supprimer($id);
          redirect('product');
        }
        
        public function modifierproduct()
{
    $product = new ClassProduct();
    
    if ($_SERVER['REQUEST_METHOD'] == 'GET')
    {
        $id = $_GET['id'];
        $productdata = $product->find($id);
        


        // Passer les données de l'utilisateur à la vue
        $data = [
            'productdata' => $productdata
        ];
        
        // Afficher la vue pour modifier le rôle
        $this->view('products','producteditview', $data);
    }
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        // Récupérer les données du formulaire
        $id = $_POST['id'];
        $name = $_POST['name'];
        $short_description = $_POST['short_description'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $category_id = $_POST['category_id'];
        // Mettre à jour les données du rôle
        $result = $product->modifier($id, $name,$short_description,$description,$price,$category_id);
        redirect('product');
    }
}       
    }
   




?>