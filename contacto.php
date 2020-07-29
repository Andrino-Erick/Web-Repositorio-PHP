<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AndrStruj</title>
    <link rel="icon" href="/assets/img/icon.png">
    <link rel="stylesheet" type="text/css" href="./assets/css/responsive.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
<body>
    <!--Inicio Header-->
    <header class="header">

        <!--Sección logo-->
        <section class="header-logo">
            <div class="logo">
                <a href="index.php">AndrStruj</a>
            </div>
        </section>
        <!--Sección logo-->


        <!--Sección del menú de nav-->
        <section class="section-nav">
            <!-- Inicio nav-->
            <nav class="menu">
                <ul>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="productos.php">Productos</a></li>
                    <li><a href="#">Ofertas</a></li>
                    <li><a href="contacto.php">Contacto</a></li>
                    <li><a href="login.php">Registrate</a></li>
                </ul>
            </nav>
            <!-- Fin nav-->
        </section>
    </header>

    <!--Main Contacto-->
    <main id="container-products">
        <section class="container-contact">

           <div class="contact">
               <h1>Contáctenos</h1>
               <p>
                Contacte con nosotros sobre cualquier cosa relacionada con nuestra empresa o servicios.
                Haremos lo posible por responderle a la mayor brevedad.
               </p>
           </div>

           <div class="contact-form">
                <form action="">
                    <label for="name">Nombre</label>
                    <input type="text" placeholder="Escribe tú nombre">
                    <br>
                    <label for="asunto">Asunto</label>
                    <select name="menu" >
                        <option value="">Selecciona el Asunto de tu contacto..</option>
                        <option value="">Garantía de los Productos</option>
                        <option value="">Devoluciones</option>
                        <option value="">Soporte Técnico</option>
                        <option value="">Información Sobre Nuestros Productos</option>
                        <option value="">Disponibilidad de Productos</option>
                        <option value="">Otros Asuntos</option>
                    </select>
                    
                    <br>
                    <label for="">Email</label>
                    <input type="text" placeholder="Escriba tu correo electrónico">
                    <br>
                    <label for="">Teléfono</label>
                    <input type="text" placeholder="Escriba tu teléfono">
                    <br>


                    <label for="" class="consult">Consulta</label>
                    <textarea placeholder="Escribe tu consulta"></textarea>
                    <br>
                    <button>Enviar</button>
                </form>
           </div>
        </section>
    </main>
    <!--Fin main contacto-->


    <footer class="footer">
        <div class="footer-umg">
            <h3>Todos los Derechos Reservados &copy; UMG</h3>
        </div>

    </footer>
</body>

</html>