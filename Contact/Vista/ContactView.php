<?php 

$Controller = new Controller();

switch ($_SERVER['REQUEST_METHOD']) {
    
    case 'GET':
    
        $Controller->List_contact();
        break;

    case 'POST':

        //$Controller->AddContact($name, $telefono);
        break;
    
    case 'PUT':

        //$Controller->UpdateContact($id,$name,$telefono);
        break;
    
    case 'DELETE':
        
        //$Controller-> DeleteContact($id);
        break;
}

?>







