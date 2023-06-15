<?php 
class Sport extends ClassProduct
{ 
    use Controller;
    public function index() {
        $product = new ClassProduct();
        $products  = $product ->findAll();

        // Passer les données des utilisateurs à la vue
        $sport=$product->findSporty(); // Find Sport products..
        $data = ['products' => $products,
                  'sport'=> $sport ];
        
        // Afficher la vue
        $this->view('page_Off','sport', $data);
    }
    }
?>