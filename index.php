<?php



require 'controler/db_connection.php';

require 'functions/functions.php';

require 'views/layouts/head.view.php';






require 'views/landingpage.view.php';

require 'views/header.view.php';

require 'views/shoppingCart.view.php';

//  rendering aboutPage
 if (isset($_GET['page2'])) {
 
    require 'controler/' . $_GET['page2'] . '.php';
 
    
     about($_GET['page2']);
     
    
 }

// products 
require 'views/items.view.php';

require 'views/footer.view.php';

require 'views/layouts/bottom.view.php';

