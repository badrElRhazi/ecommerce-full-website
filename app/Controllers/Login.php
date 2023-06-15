<?php 
session_start();
class login extends ClassLogin{
    use Controller;
    public function admin(){
        $this->view('login','loginadminview');
    }
    public function adminAction() {
        $login = new ClassLogin();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $result = $login->find($username, $password);
            
            if ($result !== false) {
                session_start();
                $_SESSION['username'] = $_POST['username'];
                header('location: ../home');
                exit;
            } else {
                header('location: ../login');
                exit;
            }
        }
    }
    
        public function user(){
            $this->view('login','logg2');
        }
        public function userAction(){
        
            $login= new ClassLogin();
            if($_SERVER['REQUEST_METHOD']==='POST'){
                
                
                $email=$_POST['email'];
                $password=$_POST['password'];
                $result=$login->find2($email,$password);
                
                if($result!==false){
                    redirect('page.php');
                }
                else{
                    echo 'erooooooooooooooorr';
                }
            }
           
    }
    public function signUP(){

        $user = new ClassLogin();
        if($_SERVER['REQUEST_METHOD']==="POST")
        {
            $user->ajouter($_POST["name"],$_POST["email"],$_POST["username"],$_POST["password"],$_POST["role_id"]);
            redirect('page');
        }
         
    }
}
?>