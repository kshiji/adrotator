<?php 

class AppController extends Controller {
    
    public $helpers = array("Html", "Form", "Js", "Image", "Session");
    public $components = array("Session", "RequestHandler", "Auth");
    
    public function beforeFilter() {
        //Configure AuthComponent
        $this->Auth->authorize = 'controller';

        $this->Auth->loginError = "Invalid Username and/or Password";
        $this->Auth->authError = "You do not have the neccesary priveleges to access this page.  Please login.";

        $this->Auth->loginAction = array('controller' => 'users', 'action' => 'login');
        $this->Auth->logoutRedirect = array('controller' => 'users', 'action' => 'login');
        $this->Auth->loginRedirect = array('controller' => 'pages', 'action' => 'display', "home");
    }
    
    public function isAuthorized() {
        return true;
    }
    
    
}
