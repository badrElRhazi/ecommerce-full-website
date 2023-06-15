<?php 
class shorts extends ClassProduct
{ 
    use Controller;
    public function index() {
        $product = new ClassProduct();
        $products  = $product ->findAll();

        // Passer les données des utilisateurs à la vue
        $short=$product->findShort(); // Find Sport products..
        $data = ['products' => $products,
                  'short'=> $short ];
        
        // Afficher la vue
        $this->view('page_Off','short', $data);
    }
    public function shortdetails($id) {
        $product = new ClassProduct();
        if ($_SERVER['REQUEST_METHOD'] == 'GET'){
            $id = $_GET['id'];
        $details  = $product ->findetails($id);

        // Passer les données des utilisateurs à la vue
        $short=$product->findShort(); // Find Sport products..
        $data = ['details' => $details,
                  'short'=> $short ];
        
        // Afficher la vue
        $this->view('page_Off','product-details', $data);
        }
    }
    }

?>