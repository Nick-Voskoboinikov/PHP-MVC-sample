<?php
class Controller_Main extends Controller { 
    function action_index() { 
        $this->view->generate('main_view.php', 'template_view.php'); 
    } 
    function action_aboutus() { 
        $this->view->generate('aboutus_view.phtml', 'template_view.php'); 
    }
    function action_contacts() { 
        $this->view->generate('contacts_view.phtml', 'template_view.php'); 
    }
    function action_info() { 
        $this->view->generate('info_view.php', 'template_view.php'); 
    } 
    function action_not_found() {
        $this->view->generate('404_view.php', 'template_view.php', explode('/main/not_found/', $_SERVER['REQUEST_URI'])[1] ); 
    } 
}
?>