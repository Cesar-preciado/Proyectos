<?php

class User{
    
    //propety 
    private $user_name;
    private $password;
    private $email;

    public function __construct($user_name, $password, $email){

        $this->user_name = $user_name;
        $this->password = $password;
        $this->email = $email;
    }

    public function save(){

        $archivo = file_get_contents("User.json", "w");
        $DataPhp = json_decode($archivo, true);
        
        $DataPhp[] = array(
                            'User' => $this->user_name,
                            'Password' => $this->password,
                            'Email' => $this->email
                        );
        $archivo = fopen('User.json', "w");
        fwrite($archivo, json_encode($DataPhp));
        fclose($archivo);

        echo "Guardado exitoso";
    }
}

if(!isset($_SERVER['REQUEST_METHOD'])){

}else if(isset($_SERVER['REQUEST_METHOD'])){

    //Si la solicitud utiliza el metodo de solicitud post.
    if($_SERVER['REQUEST_METHOD'] == "POST"){

    //Se atiende y se obtiene los parametros de solicitud
        $usuario = new User($_REQUEST['user_name'], $_REQUEST['password'], $_REQUEST['email']);
        $usuario->save();
    }

}


?>





















