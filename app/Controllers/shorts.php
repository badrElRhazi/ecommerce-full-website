<?php
class shorts extends ClassProduct
{
    use Controller;

    public function index()
    {
        $product = new ClassProduct();
        $products = $product->findAll();

        // Passer les données des utilisateurs à la vue (Fetch user's data to the view)
        $short = $product->findShort(); // Find Sport products..
        $data = [
            'products' => $products,
            'short' => $short
        ];

        // Afficher la vue (show view)
        $this->view('page_Off', 'short', $data);
    }

    // (More product's details)
    public function shortydetails()
{
    $product = new ClassProduct();
    if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['id'])) {
        $id = $_GET['id'];

        // Check if the ID is valid
        if ($id === null) {
            // Handle the invalid ID case (e.g., redirect or show an error message)
            exit;
        } else {
            $details = $product->findetails($id);
        }

        // Check if the Add to Wishlist button is clicked
        if (isset($_POST['add_to_wishlist'])) {
            // Get the product ID from the POST data
            $productId = $_POST['product_id'];
        }

        // Pass the product details to the view
        $data = [
            'details' => $details
        ];

        // Show the view
        $this->view('page_Off', 'product-details', $data);
    } else {
        exit;
    }
}
}
?>
