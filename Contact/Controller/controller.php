<?php 

require_once('Model/Contact.php');

class Controller 
{


    public $Result = array();
    public $Id;
    public $Contacts;
    public $name;
    public $Telefono;


    public function __construct()
    {
        $this->Contacts = new Contact();
        $this->Result = $this->Contacts->Get_contacts();

    }



    public function List_contact(){
        
        foreach($this->Result as $List){
            echo "Nombre : " . $List["Nombre"] . "<br>";
            echo "Telefono : " . $List["Telefono"] . "<br>";
        }
    }


    public function AddContact($name, $telefono){

        $this->name = $name;
        $this->Telefono = $telefono;

        $this->Contacts->Add_contacts($this->name, $this->Telefono);
    }


    public function UpdateContact($id,$name,$telefono){

        $this->Id = $id;
        $this->name = $name;
        $this->Telefono = $telefono;

        $this->Contacts->Update_contacts($this->Id,$this->name,$this->Telefono);
    }



    public function DeleteContact($id){

        $this->Id = $id;
        $this->Contacts->Delete_contacts($this->Id);
    }

}

require_once('Vista/ContactView.php');






?>