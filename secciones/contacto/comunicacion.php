<!-- Sección de Comunicación y Call to Action -->
<section class="comunicacion-contacto">
    <!-- Parte Superior: Canales de Comunicación -->
    <div class="canales-comunicacion">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="titulo-canales">
                    Comunícate con nosotros a través de:
                </h2>
            </div>

            <div class="row">
                <!-- Tarjeta WhatsApp -->
                <div class="col-lg-4 mb-4">
                    <div class="tarjeta-canal">
                        <h3 class="titulo-canal">WHATSAPP</h3>
                        <p class="info-canal">+(549) 353 6559863</p>
                    </div>
                </div>

                <!-- Tarjeta Teléfono -->
                <div class="col-lg-4 mb-4">
                    <div class="tarjeta-canal">
                        <h3 class="titulo-canal">TELÉFONO</h3>
                        <p class="info-canal">+(549)353 4899128 </p>
                    </div>
                </div>

                <!-- Tarjeta Email -->
                <div class="col-lg-4 mb-4">
                    <div class="tarjeta-canal">
                        <h3 class="titulo-canal">EMAIL</h3>
                        <p class="info-canal">mlcalvo@transcal.com.ar</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Parte Inferior: Call to Action -->
    <div class="hero-banner">
        <div class="hero-image-contacto">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-10 col-sm-12 text-center">
                        <p class="texto-camion-experiencia">
                            ¿Necesitas una cotización urgente?
                        </p>
                        <button class="btn-transcal titulos mt-3">
                            Contactanos acá
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>


</section>

<style>
    .comunicacion-contacto {
        background-color: white;
    }

    /* Parte Superior: Canales de Comunicación */
    .canales-comunicacion {
        background-color: #F4F3F3;
        padding: 4rem 0;
    }

    .titulo-canales {
        font-size: 2rem;
        font-weight: bold;
        color: #333;
        font-family: 'Montserrat';
        margin-bottom: 0;
    }

    .tarjeta-canal {
        background-color: white;
        border-radius: 8px;
        padding: 2rem;
        text-align: center;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        height: 100%;
        transition: transform 0.3s ease;
    }

    .tarjeta-canal:hover {
        transform: translateY(-5px);
    }

    .titulo-canal {
        font-size: 1.3rem;
        font-weight: bold;
        color: #333;
        margin-bottom: 1rem;
        font-family: 'Montserrat';
        text-transform: uppercase;
    }

    .info-canal {
        font-size: 1.1rem;
        color: #333;
        margin-bottom: 0;
        font-family: 'Montserrat';
        font-weight: 500;
    }

    /* Parte Inferior: Call to Action */
    .call-to-action {
        position: relative;
        background-image: url('recursos/imagenes/contacto/image-20.png');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        min-height: 400px;
        display: flex;
        align-items: center;
        overflow: hidden;
    }

    .overlay-azul {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(135deg, rgba(0, 50, 100, 0.8) 0%, rgba(0, 30, 80, 0.9) 100%);
        z-index: 1;
    }

    .call-to-action .container {
        position: relative;
        z-index: 2;
    }

    .contenido-cta {
        padding: 2rem 0;
    }

    .pregunta-cta {
        font-size: 2.2rem;
        font-weight: bold;
        color: white;
        margin-bottom: 2rem;
        font-family: 'Montserrat';
        line-height: 1.3;
    }

    .btn-contacto {
        background-color: #E95A0A;
        color: white;
        border: none;
        border-radius: 8px;
        padding: 1rem 2.5rem;
        font-size: 1.2rem;
        font-weight: 600;
        font-family: 'Montserrat';
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .btn-contacto:hover {
        background-color: #f56a1a;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(233, 90, 10, 0.3);
    }

    /* Responsive */
    @media (max-width: 991.98px) {
        .canales-comunicacion {
            padding: 3rem 0;
        }

        .titulo-canales {
            font-size: 1.8rem;
        }

        .call-to-action {
            min-height: 350px;
        }

        .pregunta-cta {
            font-size: 2rem;
        }
    }

    @media (max-width: 768px) {
        .canales-comunicacion {
            padding: 2rem 0;
        }

        .titulo-canales {
            font-size: 1.6rem;
        }

        .tarjeta-canal {
            padding: 1.5rem;
        }

        .titulo-canal {
            font-size: 1.2rem;
        }

        .info-canal {
            font-size: 1rem;
        }

        .call-to-action {
            min-height: 300px;
        }

        .pregunta-cta {
            font-size: 1.8rem;
            margin-bottom: 1.5rem;
        }

        .btn-contacto {
            font-size: 1.1rem;
            padding: 0.9rem 2rem;
        }
    }

    @media (max-width: 576px) {
        .titulo-canales {
            font-size: 1.5rem;
        }

        .tarjeta-canal {
            padding: 1.25rem;
        }

        .call-to-action {
            min-height: 250px;
        }

        .pregunta-cta {
            font-size: 1.6rem;
        }

        .btn-contacto {
            font-size: 1rem;
            padding: 0.8rem 1.8rem;
        }
    }
</style>