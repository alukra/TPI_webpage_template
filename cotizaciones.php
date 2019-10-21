<?php
    $title = "Cotización";
    $mode = "light";

    $content = '<div id="inSlider" class="carousel carousel-fade" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <div class="header-back five"></div>
            </div>
        </div>
    </div>

    <section class="features">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="navy-line"></div>
                <h1>Cotización</h1>
                <h3>¿Interesado en los precios y descuentos?</h3>
                <p>Puedes realizar la cotización de los productos que necesites mediante el siguiente formulario, tan solo tendrás que digitar el número de
                productos que necesitas según su clasificación y podras obtener un archivo con formato .csv, donde podras encontrar el total de tu cotización y los 
                descuentos aplicados (Descuentos aplican por la compra de 5 productos en adelante).
                </p>
                <p>Nota: el precio final de los productos depende de la complejidad del diseño, para lo cual puedes consultarnos a traves de nuestra sección de contacto,
                redes sociales o crorreo electrónico.
                </P>
            </div>
            <div class="col-lg-12 text-center">
                <div class="navy-line"></div>
                <div class="containerContacto divInterior">
                <label for="tazaSub" class="labelContacto">Tazas Sublimadas (cambian de colores)</label>
                <input type="number" id="tazaSub" name="tazaSub" data-producto="Taza Sublimada" placeholder="Digite la cantidad (0-100)" min="0" max="100" class="camposContacto" oninput="validity.valid||(value=undefined)">
                
                <label for="tazaNorm" class="labelContacto">Tazas Normales (no cambia de color)</label>
                <input type="number" id="tazaNorm" name="tazaNorm" data-producto="Taza Normal" placeholder="Digite la cantidad (0-100)" min="0" max="100" class="camposContacto" oninput="validity.valid||(value=undefined)">
                
                <label for="termo" class="labelContacto">Termos</label>
                <input type="number" id="termo" name="termo" data-producto="Termo Sublimado" placeholder="Digite la cantidad (0-100)"  min="0" max="100" class="camposContacto" oninput="validity.valid||(value=undefined)">
                
                <label for="botella" class="labelContacto">Botellas</label>
                <input type="number" id="botella" name="botella" data-producto="Botella Sublimada" placeholder="Digite la cantidad (0-100)" min="0" max="100" class="camposContacto" oninput="validity.valid||(value=undefined)">
                
                <div class="centrado">
                <input type="button" id="rCotizar" name="rCotizar" value="Cotizar" class="botonContacto">
                </div>
            </div>
            </div>
        </div>
    </div>
    </section>';
    require_once("layout/template.php");
      
?>