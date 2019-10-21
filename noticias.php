<?php
    $title = "Noticias";
    

    $content = '<div id="inSlider" class="carousel carousel-fade" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <div class="header-back nine"></div>
            </div>
        </div>
    </div>

    <div class="navy-line"></div>
    <section class="features">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1>Noticias</h1>
                <p>¡Somos especialistas en estampado y sublimados Proximamente!!</p>
            </div>
            <div class="col-lg-12 text-center">
                <div class="col-md-4">
                    <img src="img/proximamente.jpeg" alt="¡Diseña estilos con tus personajes favoritos!" title="¡Diseña estilos con tus personajes favoritos!" class="img-thumbnail" data-producto="botellas">					
                </div>
                <div class="col-md-4">
                    <img src="img/proximamente2.jpeg" alt="Camisas con tu estilo favorito" class="img-thumbnail" data-producto="juego">					
                </div>
                <div class="col-md-4">
                    <img src="img/proximamente3.jpeg" alt="Estilos unicos" title="Estilos unicos" class="img-thumbnail" data-producto="juego">					
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