<!DOCTYPE html>
<html lang = "es">
    <head>
        <meta charset="UTF-8">
        <title>Suma en Java</title>
        <style>
            body{
                background-color: lightblue; 
            }           
            h2 {
                font-family: "Times New Roman", serif; /* Cambia el tipo de letra para los encabezados h2 */
            }
            p {
                font-family: Verdana, sans-serif; /* Cambia el tipo de letra para los párrafos */
            }
            /* Estilos para el formulario de comentarios */
            form {
                background-color: #f0f0f0;
                padding: 20px;
                border: 1px solid #ccc;
                border-radius: 5px;
                width: 50%;
                margin: 0 auto;
            }
            h3 {
                font-size: 18px;
                margin-bottom: 10px;
            }
            label {
                font-weight: bold;
            }
            input[type="text"],
            textarea {
                width: 90%;
                padding: 10px;
                margin-bottom: 10px;
            }
            input[type="submit"] {
                background-color: #007bff;
                color: white;
                border: none;
                padding: 10px 18px;
                cursor: pointer;
                font-size: 14px;
            }
            input[type="submit"]:hover {
                background-color: #0056b3;
            }
        </style>
    </head>
    <body>
        <header>
            <h2 id="Titulo">Sumar dos numeros en Java</h2> 
        </header>
        <hr>
        <p>Elaborado por Abraham Farfan - 18-9-2023</p>
        <br>
        <!-- Esta es mi primera pagina web :=) -->
        <p>El dia de hoy empezaremos el ejemplo de sumar dos números con <span style = "color:blue"> Java </span>pidiendo dichos números por consola. Nos apoyaremos en la clase Scanner para realizar esta tarea. A continuacion seguiremos los siguientes pasos: </p>
        <p>1. Primero abriremos el NetBeans para importar el java.util.scanner dentro del proyecto. Hacemos esto porque vamos a instanciar el Scanner sobre la consola, la cual es representada mediante la clase System.in .</p>
        <center><img src = "imagenes/ScannerSuma.jpg"
        width = "508px" height = "16px"></center>
        <p>2. Despues para leer cada uno de los numeros nos apoyamos el método .nextInt(). Ejecutaremos este método dos veces, una por cada número y almacenaremos el resultado en las variables a y b de tipo float.</p>
        <center><img src = "imagenes/ProcesoSuma.jpg"
        width = "492px" height = "106px"></center>
        <P>3. El resultado de la suma lo almacenamos en la variable resultado.</P>
        <center><img src = "imagenes/SumaJava.jpg"
        width = "239" height = "20"></center>
        <p>4. Ahora solo nos quedará mostrar el resultado por pantalla. En este caso vamos a usar el System.out .</p>
        <center><img src = "imagenes/PresentarSuma.jpg"
        width = "617px" height= "19px"></center>
        <p> 5. Luego ingresamos los datos por teclado y despues vamos a ver como el programa realizara la suma.</p>
        <center><img src = "imagenes/ResultadoSuma.jpg"
        width = "304px" height= "126px"></center>
        <p>6. Finalmente adjunto el codigo completo y espero que te sea de mucha ayuda y gracias por visitarnos. :)</p>
        <center><img src = "imagenes/CodigoCompletoSuma.jpg"
        width = "614px" height= "339px"></center>
        <br>
        <h2>Recursos</h2>
        <p>Videos tutoriales para un mejor aprendizaje.</p>
        <a target="_blank" href="https://www.youtube.com/watch?v=u9NG0JIayIQ">- Suma de dos numeros en java con netbeans</a>
        <br><br>
        <a href="#Titulo"> Ir al inicio</a>       
        <h2>Contactos</h2>
        <footer>                      
            <a href="mailto:hermanosfarfan@gmail.con"> Contactame aquí</a>
            <p>Copyright 2023</p>
        </footer>
        <br>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/HBaMyebkvoc?si=FMlTaYJXh94pedBw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen>    
        </iframe>
        <br>
        <!-- Formulario de comentarios -->
        <form action="guardarComentario.php" method="post">            
            <h3>Deja un comentario acerca de la pagina.</h3>
            <label for="nombre">Nombre completo:</label>
            <input type="text" id="nombre" name="nombre" required><br><br>
            <label for="comentario">Comentario:</label><br>
            <textarea id="comentario" name="comentario" rows="4" cols="50" required></textarea><br><br>
            <input type="submit" value="Enviar comentario">            
        </form>
        <br>
        <div id="comentarios">
            <?php include_once("mostrarComentario.php");?>
        </div>
        <br>            
        <a href="restaJava.php"> Siguiente pagina</a>       
    </body>
</html>