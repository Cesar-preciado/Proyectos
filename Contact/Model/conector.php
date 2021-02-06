<?php 


class Conector
{
	
	public static function Service(){
		
		$config = array(
			array(
				"server" => '127.0.0.1',
				"user" => 'root',
				"password" => "xxxx",
				"Bd" => 'Contacts'
			)
		);

		$conectar = new mysqli($config[0]['server'],$config[0]['user'],$config[0]['password'],$config[0]['Bd']);
		
			if($conectar->connect_error){
				echo "conexion fallida";
			}else{
				return $conectar;
			}

	}
}
?>
