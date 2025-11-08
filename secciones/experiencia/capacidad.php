<!-- Sección Nuestra Capacidad Operativa -->
<section class="capacidad-operativa">
    <div class="container">
        <!-- Título Principal -->
        <div class="titulo-principal text-center mb-5">
            <h1>
                <span class="texto-gris">Nuestra</span>
                <span class="texto-naranja">capacidad operativa</span>
            </h1>
        </div>
        
        <!-- Tarjetas de Capacidad -->
        <div class="row">
            <!-- Tarjeta 1: FLOTA MODERNA -->
            <div class="col-lg-4 mb-4">
                <div class="tarjeta-capacidad">
                    <div class="imagen-tarjeta">
                        <img src="recursos/imagenes/experiencia/rectangle-790.png" alt="Flota Moderna" class="img-fluid">
                    </div>
                    <div class="contenido-tarjeta">
                        <h3 class="titulo-tarjeta">FLOTA MODERNA</h3>
                        <div class="separador-naranja"></div>
                        <p class="descripcion-tarjeta">
                            Contamos con 20 tractores y 30 semirremolques, con el 80% de nuestra flota modelo 2018 en adelante.
                        </p>
                    </div>
                </div>
            </div>
            
            <!-- Tarjeta 2: COBERTURA INTERNACIONAL -->
            <div class="col-lg-4 mb-4">
                <div class="tarjeta-capacidad">
                    <div class="imagen-tarjeta">
                        <img src="recursos/imagenes/experiencia/rectangle-791.png" alt="Cobertura Internacional" class="img-fluid">
                    </div>
                    <div class="contenido-tarjeta">
                        <span class="titulo-tarjeta">COBERTURA INTERNACIONAL</span>
                        <div class="separador-naranja"></div>
                        <p class="descripcion-tarjeta">
                            Presencia directa en Argentina,<br> Uruguay, Paraguay, Bolivia,<br> Brasil y Chile.
                        </p>
                    </div>
                </div>
            </div>
            
            <!-- Tarjeta 3: PERSONAL CALIFICADO -->
            <div class="col-lg-4 mb-4">
                <div class="tarjeta-capacidad">
                    <div class="imagen-tarjeta">
                        <img src="recursos/imagenes/experiencia/rectangle-792.png" alt="Personal Calificado" class="img-fluid">
                    </div>
                    <div class="contenido-tarjeta">
                        <span class="titulo-tarjeta">PERSONAL CALIFICADO</span>
                        <div class="separador-naranja"></div>
                        <p class="descripcion-tarjeta">
                            Choferes certificados para todo tipo de cargas, incluyendo mercancías <br>peligrosas.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.capacidad-operativa {
    background-color: #F4F3F3;
    padding: 4rem 0;
}

.titulo-principal h1 {
    font-size: 20px;
    font-weight: bold;
    font-family: 'Montserrat';
    margin-bottom: 0;
}

.texto-gris {
    color: #333;
}

.texto-naranja {
    color: #E95A0A;    
}

.tarjeta-capacidad {
    background: white;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    overflow: hidden;
    height: 100%;
    transition: transform 0.3s ease;
    height: 437px;            
}

.tarjeta-capacidad:hover {
    transform: translateY(-5px);
}

.imagen-tarjeta {
    width: 100%;
    height: 200px;
    overflow: hidden;
}

.imagen-tarjeta img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.contenido-tarjeta {
    padding: 1.5rem;
}

.titulo-tarjeta {
font-family: 'Montserrat';
font-style: normal;
font-weight: 700;
font-size: 17px;
line-height: 24px;
display: flex;
align-items: center;
text-transform: uppercase;

color: #000000;


      
}

.separador-naranja {
/* Rectangle 67 */
width: 90px !important;
height: 5px;
background: #E95A0A;
border-radius: 6.5px;
margin-bottom: 2vh;
margin-top: 4vh;

/* Rectangle 67 */

}

.descripcion-tarjeta {
font-family: 'Montserrat';
font-style: normal;
font-weight: 400;
font-size: 14px;
line-height: 28px;
color: #000000;

}

/* Responsive */
@media (max-width: 991.98px) {
    .titulo-principal h1 {
        font-size: 2.2rem;
    }
    
    .capacidad-operativa {
        padding: 3rem 0;
    }
}

@media (max-width: 768px) {
    .titulo-principal h1 {
        font-size: 2rem;
    }
    
    .capacidad-operativa {
        padding: 2rem 0;
    }
    
    .contenido-tarjeta {
        padding: 1.0rem;
    }
    
    .titulo-tarjeta {
        font-size: 1.2rem;
    }
}

@media (max-width: 576px) {
    .titulo-principal h1 {
        font-size: 1.8rem;
    }
    
    .imagen-tarjeta {
        height: 180px;
    }
    
    .contenido-tarjeta {
        padding: 1rem;
    }
}
</style>
