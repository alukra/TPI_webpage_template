<?php
    $title = "Contactanos";
    

    $content = '<div id="inSlider" class="carousel carousel-fade" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <div class="header-back four"></div>
            </div>
        </div>
    </div>

    <section class="features">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="navy-line"></div>
                <h1>Contactanos</h1>
                <h3>Tus opiniones, sugerencias y consultas nos interesan</h3>
                <p>Print Cups esta atento a sus clientes, por tanto te brinda la oportunidad de contactarnos usando el siguiente formulario. No dudes en preguntarnos
                datos sobre nuestros productos o sugerencias para un diseño, nosotros tomamos muy enserio el trabajo, buscamos dar la mejor atención posible y brindar productos de calidad.
                </p>
                <p>Responderemos a tu mensaje en la mayor brevedad posible y te invitamos a que tambien nos contactes por medio de nuestras redes sociales.
                </P>
            </div>
            <div class="col-lg-12 text-center">
                <div class="navy-line"></div>
                <form  name="formContacto" method="post" action="./php/contacto.php">
                
                <label for="nombre" class="labelContacto">Nombre</label>
                <input type="text" id="nombre" name="nombre" data-contacto="Nombre Cliente" placeholder="Digite su nombre" class="camposContacto" required>
                
                <label for="correo" class="labelContacto">Correo Electrónico</label>
                <input type="email" id="correo" name="correo" data-contacto="Correo Cliente" placeholder="Digite su correo electrónico" class="camposContacto" required>
        
                <label for="comentario" class="labelContacto">Comentario/Sugerencia</label>
                <textarea id="comentario" name="comentario" data-contacto="Comentario, Sugerencia Cliente" placeholder="Digite su comentario/sugerencia" class="camposContacto textareaContacto" required></textarea>
                
                <div class="centrado">
                    <input type="submit" name="enviar" value="Enviar" class="botonContacto">
                </div>
                </form>
            </div>
        </div>
    </div>
    </section>';
    require_once("layout/template.php");
    
?>