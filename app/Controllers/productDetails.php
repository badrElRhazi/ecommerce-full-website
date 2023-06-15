<?php 
class ProductDetails extends ClassProduct
{ 
    use Controller;
    public function index() {
       
        
        // Afficher la vue
        $this->view('page_Off','product-details');
    }
    }
?>