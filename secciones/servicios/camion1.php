<!-- Sección de Servicios de Transporte -->
<section class="servicios-transporte py-5">
    <div class="container">
        <!-- Header de la sección -->
        <div class="text-center mb-5">
            <h1 class="titulo-principal animate-fade">Ofrecemos soluciones de transporte</h1>
            <h2 class="subtitulo animate-fade">adaptadas a cada necesidad</h2>
        </div>

        <!-- Grid de servicios -->
        <div class="row g-4">
            <!-- 1. CARGAS GENERALES Y ESPECIALES -->
            <div class="col-lg-4 col-md-6 animate-scale">
                <div class="servicio-card">
                    <div class="imagen-servicio">
                        <img src="<?= URL_IMG ?>/servicios/rectangle-933.png" alt="Cargas Generales y Especiales" class="img-fluid rounded parallax" data-parallax="0.15">
                    </div>
                    <div class="contenido-servicio">
                        <h3 class="titulo-servicio">CARGAS GENERALES Y ESPECIALES</h3>
                        <p class="descripcion-servicio">Transporte seguro y eficiente para todo tipo de mercaderías.</p>
                    </div>
                </div>
            </div>

            <!-- 2. CARGAS A GRANEL -->
            <div class="col-lg-4 col-md-6 animate-scale">
                <div class="servicio-card">
                    <div class="imagen-servicio">
                        <img src="<?= URL_IMG ?>/servicios/rectangle-935.png" alt="Cargas a Granel" class="img-fluid rounded parallax" data-parallax="0.15">
                    </div>
                    <div class="contenido-servicio">
                        <h3 class="titulo-servicio">CARGAS A GRANEL</h3>
                        <p class="descripcion-servicio">Equipamiento especializado para el transporte de materiales a granel.</p>
                    </div>
                </div>
            </div>

            <!-- 3. CONTENEDORES -->
            <div class="col-lg-4 col-md-6 animate-scale">
                <div class="servicio-card">
                    <div class="imagen-servicio">
                        <img src="<?= URL_IMG ?>/servicios/rectangle-934.png" alt="Contenedores" class="img-fluid rounded parallax" data-parallax="0.15">
                    </div>
                    <div class="contenido-servicio">
                        <h3 class="titulo-servicio">CONTENEDORES</h3>
                        <p class="descripcion-servicio">Movimiento de contenedores con total trazabilidad.</p>
                    </div>
                </div>
            </div>

            <!-- 4. CARGAS CONSOLIDADAS -->
            <div class="col-lg-4 col-md-6 animate-scale">
                <div class="servicio-card">
                    <div class="imagen-servicio">
                        <img src="<?= URL_IMG ?>/servicios/rectangle-932.png" alt="Cargas Consolidadas" class="img-fluid rounded parallax" data-parallax="0.15">
                    </div>
                    <div class="contenido-servicio">
                        <h3 class="titulo-servicio">CARGAS CONSOLIDADAS</h3>
                        <p class="descripcion-servicio">Optimización de costos mediante consolidación de cargas.</p>
                    </div>
                </div>
            </div>

            <!-- 5. CARGAS PELIGROSAS (IMO) -->
            <div class="col-lg-4 col-md-6 animate-scale">
                <div class="servicio-card">
                    <div class="imagen-servicio">
                        <img src="<?= URL_IMG ?>/servicios/rectangle-930.png" alt="Cargas Peligrosas IMO" class="img-fluid rounded parallax" data-parallax="0.15">
                    </div>
                    <div class="contenido-servicio">
                        <h3 class="titulo-servicio">CARGAS PELIGROSAS (IMO)</h3>
                        <p class="descripcion-servicio">Personal certificado y equipamiento específico para el transporte de mercancías peligrosas.</p>
                    </div>
                </div>
            </div>

            <!-- 6. CARGAS EXTRA MEDIDAS -->
            <div class="col-lg-4 col-md-6 animate-scale">
                <div class="servicio-card">
                    <div class="imagen-servicio">
                        <img src="<?= URL_IMG ?>/servicios/rectangle-931.png" alt="Cargas Extra Medidas" class="img-fluid rounded parallax" data-parallax="0.15">
                    </div>
                    <div class="contenido-servicio">
                        <h3 class="titulo-servicio">CARGAS EXTRA MEDIDAS</h3>
                        <p class="descripcion-servicio">Soluciones especiales para cargas de dimensiones no convencionales.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.servicios-transporte {
    
    min-height: 100vh;
    margin-top: 50px;
}

.titulo-principal {
    /* Ofrecemos soluciones de transporte adaptadas a cada necesidad */
    font-family: 'Montserrat';
    font-style: normal;
    font-weight: 700;
    font-size: 35px !important;
    line-height: 43px;
    text-align: center;
    color: #000000;


}

.subtitulo {
    font-family: 'Montserrat';
    font-style: normal;
    font-weight: 700;
    font-size: 35px !important;
    line-height: 43px;
    text-align: center;
    color: #E95A0A;
}

.servicio-card {
    background: white;
    border-radius: 15px;
    overflow: hidden;
    /* box-shadow: 0 4px 15px rgba(0,0,0,0.1); */
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    height: 100%;
}

.servicio-card:hover {
    transform: translateY(-5px);
    /* box-shadow: 0 8px 25px rgba(0,0,0,0.15); */
}

.imagen-servicio {
    width: 100%;
    height: 270px;
    overflow: hidden;
}

.imagen-servicio img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.servicio-card:hover .imagen-servicio img {
    transform: scale(1.05);
}

.contenido-servicio {
    padding: 1.5rem;
}

.titulo-servicio {
    /* Cargas Generales y Especiales */

font-family: 'Montserrat';
font-style: normal;
font-weight: 600;
font-size: 20px !important;
line-height: 24px;
display: flex;
align-items: center;
text-transform: uppercase;

color: #000000;

}

.descripcion-servicio {
/* Transporte seguro y eficiente para todo tipo de mercaderías. */

font-family: 'Montserrat';
font-style: normal;
font-weight: 400;
font-size: 16px !important;
line-height: 20px;

color: #000000;


}

/* Responsive */
@media (max-width: 768px) {
    .titulo-principal {
        font-size: 2rem;
    }
    
    .subtitulo {
        font-size: 1.2rem;
    }
    
    .servicio-card {
        margin-bottom: 1rem;
    }
    
    .imagen-servicio {
        height: 180px;
    }
}

@media (max-width: 576px) {
    .titulo-principal {
        font-size: 1.8rem;
    }
    
    .subtitulo {
        font-size: 1.1rem;
    }
    
    .contenido-servicio {
        padding: 1rem;
    }
}
</style>
