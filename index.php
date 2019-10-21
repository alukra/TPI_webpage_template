<?php
    $title = "Inicio";
    $mode = "light";

    $content = '<div id="inSlider" class="carousel carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#inSlider" data-slide-to="0" class="active"></li>
            <li data-target="#inSlider" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <div class="container">
                    <div class="carousel-caption">
                        <h2>Nosotros te entregamos tu diseño favorito</h2>
                        <p>
                            <a class="btn btn-lg btn-primary" href="./galeriaproductos.php" role="button">Ver</a>
                        </p>
                    </div>
                    <div class="carousel-image wow zoomIn">
                        <img src="img/cupIndex.png" alt="Taza personalizada"/>
                    </div>
                </div>
                <div class="header-back one"></div>
            </div>
            <div class="item">
                <div class="container">
                    <div class="carousel-caption blank">
                        <h1>Quieres ver mas de nosotros</h1>
                        <p><a class="btn btn-lg btn-primary" href="./noticias.php" role="button">Entrar</a></p>
                    </div>
                </div>
                <div class="header-back two"></div>
            </div>
        </div>
        <a class="left carousel-control" href="#inSlider" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#inSlider" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>


    <section  class="container features">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="navy-line"></div>
                <h1>Más de 50 estilos<br/> <span class="navy"> y muchas personalizaciones</span> </h1>
                <p>Con nosotros puedes solicitar distintos tipos de tazas y botellas</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 text-center wow fadeInLeft">
                <div>
                    <i class="fa fa-birthday-cake features-icon"></i>
                    <h2>Regala</h2>
                    <p>Regala a tus seres queridos una taza</p>
                </div>
                <div class="m-t-lg">
                    <i class="fa fa-flask features-icon"></i>
                    <h2>Para café y más</h2>
                    <p>Usa tus tazas para consumir café, té o chocolate!!</p>
                </div>
            </div>
            <div class="col-md-6 text-center  wow zoomIn">
                <img src="img/taza2.jpg" alt="Taza diseño" class="img-responsive">
            </div>
            <div class="col-md-3 text-center wow fadeInRight">
                <div>
                    <i class="fa fa-camera-retro features-icon"></i>
                    <h2>Fotos!</h2>
                    <p>Personaliza tu taza o botella con las fotos que más te gustan</p>
                </div>
                <div class="m-t-lg">
                    <i class="fa fa-child features-icon"></i>
                    <h2>Para todos</h2>
                    <p>Querrás tener una de estas tazas para tu hijo, nieto o hermano!!</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="navy-line"></div>
                <h1>Descubre más estilos</h1>
                <p>Checa nuestro post y descubre más </p>
            </div>
        </div>
        <div class="row features-block">
            <div class="col-lg-6 features-text wow fadeInLeft">
                <small>Somos mas que tazas</small>
                <h2>Perfectamente diseñadas</h2>
                <p>Sublimando tus ideas en tazas y termos, acompáñanos a ver nuestro productos y de paso pides los tuyos no lo pienses mas.</p>
            </div>
            <div class="col-lg-6 text-right wow fadeInRight">
            <div class="fb-page" data-href="https://www.facebook.com/Print-cups-101211744636475/" data-tabs="timeline" data-width="" data-height="400" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/Print-cups-101211744636475/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Print-cups-101211744636475/">Print-cups</a></blockquote></div>
            </div>
        </div>
    </section>';
    require_once("layout/template.php");
    
?>