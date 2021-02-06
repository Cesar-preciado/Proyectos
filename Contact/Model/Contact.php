<?php 

/**
 * Model contacts
 */
class Contact
{

    public $Bd;
    public $list = array();
    public $Id;
    public $Name;
    public $Phone;

    public function __construct()
    {
        
        require_once('Model/conector.php');
        $this->Bd = Conector::Service();
    }

    public function Get_contacts(){

        $query = "SELECT * FROM Contacts";

            if($result = $this->Bd->query($query)){

                while($list = $result->fetch_assoc()){

                    $this->list[] = $list;
                }

                $result->free();

                return $this->list;
            }
    }

    public function Add_contacts($name, $phone){
        
        $this->Name = $name;
        $this->Phone = $phone;

        if($this->Bd->query("INSERT INTO Contacts(Nombre, Telefono)VALUES('$this->Name', '$this->Phone')"  )){

            //echo "Inserción exitosa";
        }else{
            //echo "Error de inserción";
        }
        
    }
    public function Update_contacts($name,$telefono,$id){

        $this->Name = $name;
        $this->Phone = $telefono;
        $this->Id = $id;

        $Update = "UPDATE Contacts set Nombre = '$this->Name', Telefono = '$this->Phone' WHERE id = $this->Id ";
            
            if($this->Bd->query($Update) == TRUE){
                echo "Datos actualizados";
            }else{
                echo "Error al actualizar datos";
            }
    }


    public function Delete_contacts($id){
        $this->Id = $id;
        $Delete = "DELETE FROM Contacts WHERE id = $this->Id ";
        
            if($this->Bd->query($Delete)){

                echo "Se ha eliminado el registro con id " . $this->Id;
            }
    }



    
}

?>














