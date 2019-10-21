<?php
    $title = "Galeria de productos";
    $mode = "light";

    $content = '<div id="inSlider" class="carousel carousel-fade" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <div class="header-back six"></div>
            </div>
        </div>
    </div>

    <div class="navy-line"></div>
    <section class="features">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1>Galer&iacute;a de Productos</h1>
                <p>¡Somos especialistas en estampado y sublimado de tazas, termos y botellas! Pero el experto en diseño eres tu.<br>
                ¿Alguna ocasi&oacute;n especial? ¡An&iacute;mate! No dudes en regalar uno de nuestros productos personalizado a tu propio estilo.
                Dale un bonito recuerdo a quienes m&aacute;s quieras.</p>
                <div class="m-5 row justify-content-between px-5">
					<img src="img/productos.png" alt="Taza, botella y termo en blanco." title="Taza, botella y termo en blanco" class="img-presentacion">
					<img src="img/img(3).jpeg" alt="Taza, botella y termo personalizado por nuestros clientes" title="Taza, botella y termo personalizado por nuestros clientes" class="img-presentacion">
				</div>
				<div class="mx-5 mb-3 row justify-content-between px-5">
					<p class="col-md-6 text-center text-info lead"><strong>Primero:</strong> Elige cualquiera de nuestros productos</p>
					<p class="col-md-6 text-center text-info lead"><strong>Segundo:</strong> Dale rienda suelta a tu imaginación.</p>
				</div>
				<p class="lead"><strong>Puedes diseñar lo que tu quieras, no hay l&iacute;mites. Estos son algunos productos diseñados por nuestros clientes.</strong></p>
            </div>
            <div class="col-lg-12 text-center">
                <div class="col-md-4">
                    <img src="img/img(1).jpeg" alt="¡Diseña estilos con tus personajes favoritos!" title="¡Diseña estilos con tus personajes favoritos!" class="img-thumbnail" data-producto="botellas">					
                </div>
                <div class="col-md-4">
                    <img src="img/img(3).jpeg" alt="Taza, botella y termo de Hello Kitty." title="Taza, botella y termo de Hello Kitty." class="img-thumbnail" data-producto="juego">					
                </div>
                <div class="col-md-4">
                    <img src="img/img(4).jpeg" alt="Taza, botella y termo de Snoopy y Charlie Brown." title="Taza, botella y termo de Snoopy y Charlie Brown." class="img-thumbnail" data-producto="juego">					
                </div>
                <div class="col-md-4">
                    <img src="img/img(5).jpeg" alt="Botella y termo de Snoopy." title="Botella y termo de Snoopy." class="img-thumbnail" data-producto="botella">					
                </div>
                <div class="col-md-4">
                    <img src="img/img(6).jpeg" alt="Botella y termo personalizados." title="Botella y termo personalizados." class="img-thumbnail" data-producto="botella taza">					
                </div>
                
                <div class="col-md-4">
                    <img src="img/img(11).jpeg" alt="Taza, botella y termo de Mafalda." title="Taza, botella y termo de Mafalda." class="img-thumbnail" data-producto="juego">					
                </div>
                <div class="col-md-4">
                    <img src="img/img(12).jpeg" alt="Taza, botella y termo de Snoopy y Charlie Brown." title="Taza, botella y termo de Snoopy y Charlie Brown." class="img-thumbnail" data-producto="juego">					
                </div>
                <div class="col-md-4">
                    <img src="img/img(13).jpeg" alt="Botella y termo de Snoopy." title="Botella y termo de Snoopy." class="img-thumbnail" data-producto="botella taza">					
                </div>
                <div class="col-md-4">
                    <img src="img/img(16).jpeg" alt="Taza, botella y termo de Hello Kitty." title="Taza, botella y termo de Hello Kitty." class="img-thumbnail" data-producto="juego">					
                </div>
            </div>
        </div>
    </div>
    </section>
    <div class="modal fade docs-example-modal-lg" id="infoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Nuestros Productos</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <img src="#" alt="Nuestros Productos" title="Diseñado por Cliente" id="modalImg" class="img-responsive">
                    <p class="text-left" id="descripcion"><strong>Diseñado por Cliente:</strong> </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>';
    require_once("layout/template.php");
?>