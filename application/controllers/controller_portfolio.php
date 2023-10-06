<?php

use \Model as PM;

class Controller_Portfolio extends Controller { 
    function action_index() {
        $this->view->generate('view_portfolio.php', 'template_view.php', Model_Portfolio::get_data() ); 
    }
}
?>