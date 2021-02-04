5 aplicaciones que se estan comunicando entre si 
para registrar la información de un usuario 
a travez de un formulario web que se ejecuta
en el lado del front-end. La información que viaja
desde el formulario al servidor es almacenada en un 
archivo de formato json que se encuentra del lado del
back-end. 

Tecnologias utilizadas :

Html 
Css 
Javascript
Php 
Json
Browser
Visual studio code


Arquitectura de diseño : 

En el front-end se aplica una estructura de aplicación basada en 
componentes y se utiliza el patron de diseño programación funcional
para implementar el controlador que se encarga de realizar las 
peticiones del cliente, en este caso se hace una peticion asincrona
para comunicarse con un servidor por el puerto 80 a travez del protocolo http 
utilizando el metodo de solicitud post. 

En el back-end se aplica el patron de diseño programación orientada a objetos 
para crear un metodo constructor que inicia y recibe los parametros de confi
guración del objecto a crear y un metodo para abrir el archivo que se encarga 
de almacenar la información que viaja a travez del formulario web desde el cliente. 
