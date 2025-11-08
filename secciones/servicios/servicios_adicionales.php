<!-- Sección de Servicios Adicionales -->
<section class="servicios-adicionales py-5">
    <div class="container">
        <!-- Título principal -->
        <div class="text-center mb-5">
            <h1 class="titulo-principal">
                Servicios adicionales para una 
                <span class="destacado">logística integral</span>
            </h1>
        </div>

        <!-- Grid de servicios adicionales -->
        <div class="row g-4">
            <!-- 1. DESPACHOS ADUANEROS -->
            <div class="col-lg-4 col-md-6">
                <div class="servicio-adicional-card">
                    <h3 class="titulo-servicio">DESPACHOS ADUANEROS</h3>
                    <div class="separador"></div>
                    <p class="descripcion-servicio">
                        Gestión completa de trámites aduaneros en todos los países donde operamos.
                    </p>
                </div>
            </div>

            <!-- 2. SEGUROS DE CARGA -->
            <div class="col-lg-4 col-md-6">
                <div class="servicio-adicional-card">
                    <h3 class="titulo-servicio">SEGUROS DE CARGA</h3>
                    <div class="separador"></div>
                    <p class="descripcion-servicio">
                        Protección integral para su mercadería durante todo el trayecto.
                    </p>
                </div>
            </div>

            <!-- 3. DEPÓSITO Y ALMACENAJE -->
            <div class="col-lg-4 col-md-6">
                <div class="servicio-adicional-card">
                    <h3 class="titulo-servicio">DEPÓSITO Y ALMACENAJE</h3>
                    <div class="separador"></div>
                    <p class="descripcion-servicio">
                        Instalaciones seguras para el resguardo temporal de su carga.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.servicios-adicionales {
    background-color: #f8f9fa;
    min-height: 654px;
    padding: 4rem 0;
    align-content: center;
}



.destacado {
    color: #FF6B35;
}

.servicio-adicional-card {
    background: white;
    padding: 2.5rem 2rem;
    border-radius: 15px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    height: 100%;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    text-align: left;
}

.servicio-adicional-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.15);
}

.titulo-servicio {
    font-size: 1.3rem;
    font-weight: bold;
    color: #1f2937;
    margin-bottom: 1rem;
    font-family: 'Montserrat';
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.separador {
    width: 100px;
    height: 5px;
    background-color: #FF6B35;
    margin-bottom: 1.5rem;
    border-radius: 2px;
}

@media (max-width: 768px) {

    .separador {
        width: 112px; 
    }
}


/* Responsive */
@media (max-width: 991.98px) {
    .titulo-principal {
        font-size: 2.2rem;
    }
    
    .servicio-adicional-card {
        padding: 2rem 1.5rem;
    }
}

@media (max-width: 768px) {
    .titulo-principal {
        font-size: 2rem;
    }
    
    .servicio-adicional-card {
        margin-bottom: 1rem;
        padding: 1.5rem 1rem;
    }
    
    .titulo-servicio {
        font-size: 1.2rem;
    }
}

@media (max-width: 576px) {
    .titulo-principal {
        font-size: 1.8rem;
    }
    
    .servicios-adicionales {
        padding: 3rem 0;
    }
}
</style>
