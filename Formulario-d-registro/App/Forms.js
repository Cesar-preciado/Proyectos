window.onload = Save;

function Save(){

    Name = document.getElementById("Nombre");
    Password = document.getElementById("Password");
    Email = document.getElementById("Email");

    var button_save = document.getElementsByTagName("button")[0];

        button_save.addEventListener("click", Get_data);
    
}

function Get_data(){

    var response = document.getElementById("response");
    var parrafo = document.createElement("p");


    if(Name.value == '' || Password.value == '' || Email.value == ''){

        text1 = document.createTextNode("Debes rellenar el formulario completo.");
        if(response.style.display == "none"){
            
            //configuración para el bloque de respuesta
            response.style.display = "block";
            response.style.color = "red";
            
            //Limpiar bloque de respuesta
            response.removeChild(response.childNodes[0]);
            
            //Limpiar formulario 
            clear_form()
            //Confirmar estado del formulario
            response.appendChild(text1);

        }else if(response.style.display == "block"){

            response.style.color = "red";

            response.removeChild(response.childNodes[0]);
            response.appendChild(text1);
        }

    }else if(!Name.value == '' || !Password.value == '' || !Email.value == ''){
        
        var pattern = /@/;
        var string = Email.value;
        
            if(pattern.test(string)){
                response.removeChild(response.childNodes[0]);

                text2 = document.createTextNode("Se han guardado los datos correctamente.")
                if(response.style.display == "none"){
                
                    //configuración para el bloque de respuesta
                    response.style.display = "block";
                    response.style.color = "black";

                    response.removeChild(response.childNodes[0]);
                
                    //Enviar datos 
                    Send_data(Name.value, Password.value, Email.value)
        
                    //limpiar formulario
                    clear_form();

                    //Mostrar estado del formulario
                    response.appendChild(text2);
            
                }else if(response.style.display == "block"){

                    response.style.color = "black";

                    //Enviar datos 
                    Send_data(Name.value, Password.value, Email.value)

                    //limpiar formulario
                    clear_form();

                    //Mostrar estado del formulario
                    response.removeChild(response.childNodes[0]);
                    response.appendChild(text2);
                }


                }else{
                    response.style.display = "block";
                    messegerResponse = document.createTextNode("Email invalido");
                    response.appendChild(messegerResponse);
                }
            }

}


function Send_data(user_Name, password, email){

   var conexion = new XMLHttpRequest();
    conexion.open("POST","User.php?user_name="+user_Name+"&password="+password+"&email="+email,true);
    conexion.send();
}

function clear_form(){

    Name.value = '';
    Password.value = '';
    Email.value = '';
}