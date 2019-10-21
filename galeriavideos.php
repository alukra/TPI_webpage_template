<?php
    $title = "Galeria de videos";
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
                <h1>Galer&iacute;a de videos</h1>
                <p>¿C&oacute;mo se realiza el estampado y la sublimaci&oacute;n de nuestros productos? ¿Buscas m&aacute;s que im&aacute;genes? Te dejamos unos videos para que veas como funciona.</p>
            </div>
            <div class="mx-1 justify-content">
				<h4 class="float-none">Video 1: Estampado y Sublimado de una Taza.</h4>
				<p class="lead float-none">Primero se coloca el articulo en la plancha de sublimaci&oacute;n y se ejerce presi&oacute;n sobre &eacute;l. <br>Luego se retira cuidadosamente el articulo de la plancha para poder retirar el sticker que contiene el diseño del cliente.</p>
				<div class="col-xl-12 p-3 m-3 text-center w-100">
					<iframe height="350" class="w-50" src="https://www.youtube.com/embed/ehDj3YsmjtU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
				<h4>Video 2: Taza Terminada.</h4>
				<p class="lead"> Nuestro trabajo siempre busca dar la mejor calidad. Tienes libertad de diseñar lo que quieras, tomando en cuenta las dimensiones del art&iacute;lo que selecciones. Recuerda que puedes escoger entre taza, termo o botella. Para enviar tu diseño puedes ingresar a la sección de Diseño y enviarnoslo por correo, nosotros te contestaremos pronto.</p>
				<div class="col-xl-12 p-3 m-3 text-center">
					<iframe height="350" class="w-50" src="https://www.youtube.com/embed/D-2S957_RlE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
				<h4>Video 3: Taza Sublimada.</h4>
				<p class="lead">
					¡Estampa tus diseños y ve como aparecen a medida sube la temperatura!. <br>
					Print Cups tambien realiza tasas que cambian de color y que mejor forma de verlas que a tráves de un video. ¿A quíen no le gustaria ver cambiar el diseño de su taza mientras toma su bebida caliente favorita?
				
				</p>
				<div class="col-xl-12 p-3 m-3 text-center">
					<iframe height="350" class="w-50" src="https://www.youtube.com/embed/H9vgv0RN_bY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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